import time
from sensirion_i2c_driver import I2cConnection, LinuxI2cTransceiver
from sensirion_i2c_sen5x import Sen5xI2cDevice
import socketio
import uuid
import smbus
import mysql.connector
from mysql.connector import Error
import urllib.request
import sys
import subprocess

from time import sleep
import datetime


def connect(host='https://fierce-plateau-89068.herokuapp.com'):
    try:
        urllib.request.urlopen(host) #Python 3.x
        return True
    except:
        return False
# test

#start = time.time

fan_speed = 100 #default fan speed
bus=smbus.SMBus(1) #The default i2c bus
address=0x25
bus.write_i2c_block_data(address, 0x3F, [0xF9]) #Stop any cont measurement of the sensor
time.sleep(0.8)
bus.write_i2c_block_data(address, 0x36, [0X03])

from rpi_hardware_pwm import HardwarePWM
pwm = HardwarePWM(pwm_channel=0, hz=60)
pwm.start(0)
pwm.change_frequency(28_000)
pwm.change_duty_cycle(fan_speed)


try:
  # sio = socketio.AsyncClient()
  sio = socketio.Client()
  # sio.connect('wss://fierce-plateau-89068.herokuapp.com/')
  sio.connect('https://fierce-plateau-89068.herokuapp.com/', {
    'reconnection': 'True',
    'reconnectionDelay': '500',
    #'reconnectionAttempts': '10'
  });
except:
  print("An exception occurred")
# sio = socketio.Client(reconnection=True, reconnection_attempts=10000)
# sio.connect('ws://fierce-plateau-89068.herokuapp.com/',wait=False)

with LinuxI2cTransceiver('/dev/i2c-1') as i2c_transceiver:
    device = Sen5xI2cDevice(I2cConnection(i2c_transceiver))

    # Print some device information
    print("Version: {}".format(device.get_version()))
    print("Product Name: {}".format(device.get_product_name()))
    print("Serial Number: {}".format(device.get_serial_number()))

    # Perform a device reset (reboot firmware)
    device.device_reset()

    # Start measurement
    device.start_measurement()
    while True:
        
        
        datetime_object = datetime.datetime.now()
        print("Date and Time = ",datetime_object)
        #end = time.time()
        #print(end - start)
        
        reading=bus.read_i2c_block_data(address,0,9)
        pressure_value=reading[0]+float(reading[1])/255
        if pressure_value>=0 and pressure_value<128:
            diffirential_pressure=pressure_value*60/256 #scale factor adjustment
        elif pressure_value>128 and pressure_value<=256:
            diffirential_pressure=-(256-pressure_value)*60/256 #scale factor adjustment
        elif pressure_value==128:
            diffirential_pressure=99999999 #Out of range
        print("Diffirential Pressure: {:6.4f} PA".format(diffirential_pressure))
        while device.read_data_ready() is False:
            time.sleep(0.1)

        # Read measured values -> clears the "data ready" flag
        values = device.read_measured_values()
        
        
        

        # Access a specific value separately (see Sen5xMeasuredValues)
        mass_concentration = values.mass_concentration_2p5.physical
        ambient_temperature = values.ambient_temperature.degrees_celsius
       
        dataread =  [values.mass_concentration_1p0.physical,
                     values.mass_concentration_2p5.physical,
                     values.mass_concentration_4p0.physical,
                     values.mass_concentration_10p0.physical,
                     values.ambient_humidity.percent_rh,
                     values.ambient_temperature.degrees_celsius,
                     values.voc_index.scaled,
                     diffirential_pressure,
                     uuid.getnode(),
                     datetime_object]
        
        try:
            connection = mysql.connector.connect(host='151.106.124.21',
                                                 database='u582317762_pysensor',
                                                 user='u582317762_pysensor',
                                                 password='@PySensor2022')
            if connection.is_connected():
                mySql_insert_query = """INSERT INTO sensor_data (pm1, pm2_5, pm4, pm10,humidity, temp, voc_index,pressure,address,location_code,location,date_added) 
                                   VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)"""

                cursor = connection.cursor()
                record = (dataread[0], dataread[1], dataread[2], dataread[3], dataread[4], dataread[5], dataread[6], dataread[7],uuid.getnode(),'Air Tower 1','US',datetime_object)
                #record = (1, 1, 1, 1, 1, 1, 1, 1, 1)
                cursor.execute(mySql_insert_query,record)
                connection.commit()
                cursor.close()

        except Error as e:
            print("Error while connecting to MySQL", e)
        finally:
            if connection.is_connected():
                cursor.close()
                connection.close()
                print("MySQL connection is closed")

        
        
        # sio.emit('data1',dataread)
        dataread = [dataread[0], dataread[1], dataread[2], dataread[3], dataread[4], dataread[5], dataread[6], dataread[7],uuid.getnode(),'Air Tower 1','US',datetime_object,fan_speed]
        if connect():
            try:
                sio.emit('data1',dataread)
                print("Hello")
            except:
                print ("no conn!")
                subprocess.call(sys.argv[0], shell=True)
        else: 
            subprocess.call(sys.argv[0], shell=True)
            print ("no internet!")
            
               
        @sio.on('power')
        def response(val):
            print(val['address'])
            print(val['speed'])
            if str(uuid.getnode()) == val['address']:
                print("Fan")
                global fan_speed
                fan_speed = val['speed']
                pwm.change_duty_cycle(int(fan_speed))
                
            
            
        #sleep(60)
                 
