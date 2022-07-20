/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

var selDevice = '';
var selLocCode = '';
var app = {
    // Application Constructor
    initialize: function() {
        this.bindEvents();
    },
    // Bind Event Listeners
    //
    // Bind any events that are required on startup. Common events are:
    // 'load', 'deviceready', 'offline', and 'online'.
    bindEvents: function() {
        document.addEventListener('deviceready', this.onDeviceReady, false);
    },
    // deviceready Event Handler
    //
    // The scope of 'this' is the event. In order to call the 'receivedEvent'
    // function, we must explicitly call 'app.receivedEvent(...);'
    onDeviceReady: function() {
        app.receivedEvent('deviceready');
        
    },
    // Update DOM on a Received Event
    receivedEvent: function(id) {
        var parentElement = document.getElementById(id);
        var listeningElement = parentElement.querySelector('.listening');
        var receivedElement = parentElement.querySelector('.received');

        listeningElement.setAttribute('style', 'display:none;');
        receivedElement.setAttribute('style', 'display:block;');

        // console.log('Received Event: ' + id);
    }
};``

document.addEventListener("init", function(event) {
   
    
    var page = event.target;

//     var db = window.sqlitePlugin.openDatabase({
//         name: 'my.db',
//         location: 'default',
//       });
// // show();
// // alert('user has been created')
//     db.transaction(function(tx) {
//         tx.executeSql('CREATE TABLE IF NOT EXISTS user (id integer primary key, name text, email text)');
        
//     }); 

    if(page.matches('#splash')){``
        removeBlocker();
        setTimeout(function(){
          gotoHome();
        },5000);
    }

    if(page.matches('#device')){``
        removeBlocker();
        socket.on("data1",(result)=>{
            // console.log(result)
            // temp = result[0]
            // pressure = result[1]
            // altitude = result[2]
           //  co2 = result[3]
           //  ozone = result[4]
            // setSession({temp:temp,pressure:pressure,altitude:altitude})
            // if(result[8] == selDevice){
                s1 = result[0];
                s2 = result[1];
                s3 = result[2];
                s4 = result[3];
                s5 = result[4];
                s6 = result[5];
                s7 = result[6];
                s8 = result[7];
                // move(result);
                
                // $('#s1-val').text(result[0])
                // $('#s2-val').text(result[1])
                // $('#s3-val').text(result[2])
                // $('#s4-val').text(result[3])
                // $('#s5-val').text(result[4])
                // $('#s6-val').text(result[5])
                // $('#s7-val').text(result[6])
                // $('#s8-val').text(Math.abs(result[7].toFixed(3)))

                // $('#s11-val').text(result[0])
                // $('#s22-val').text(result[1])
                // $('#s33-val').text(result[2])
                // $('#s44-val').text(result[3])
                // $('#s55-val').text(result[4])
                // $('#s66-val').text(result[5])
                // $('#s77-val').text(result[6])
                // $('#s88-val').text(Math.abs(result[7].toFixed(3)))
                
                
            // }
            
          })
    }

    if(page.matches('#usersplitter')){
        // JavaScript Document
        removeBlocker();
        // logEvent();
        ons.ready(function () {
        //   ons.createElement('action-sheet.html', { append: true })
        //     .then(function (sheet) {
        //       appnav.showFromTemplate = sheet.show.bind(sheet);
        //       appnav.hideFromTemplate = sheet.hide.bind(sheet);
        //     });
        });
        
    }

    if(page.matches('#main')){
        // JavaScript Document
        removeBlocker();

        // alert(selDevice)
        // alert(selDevice);

        $('#tower-id').text(selLocCode)
        var cur_fan_speed = '';
        var $owl = $('.och').owlCarousel({
            loop:true,
            nav:false,
            // autoplay:true,
            // autoplayTimeout:5000,
            animateOut: 'fadeOut',
            items: 3,
            lazyLoad: true,
            pagination: false,
            // scrollPerPage : true,
            dots:false,
            autoHeight:true
        })

        $owl.trigger('refresh.owl.carousel');

        var i = 0;


            
        socket.on("change_fan_level", function (data) {
            // console.log(data);
            if(data[0] == selDevice){
                $('#speed-fan').val(data[1])
                cur_fan_speed = data[1]
            }
        });
       
        // show1Chart();
        var ctx1 = document.getElementById("s1Chart").getContext("2d");
        var ctx2 = document.getElementById("s2Chart").getContext("2d");
        var ctx3 = document.getElementById("s3Chart").getContext("2d");
        var ctx4 = document.getElementById("s4Chart").getContext("2d");
        var ctx5 = document.getElementById("s5Chart").getContext("2d");
        var ctx6 = document.getElementById("s6Chart").getContext("2d");
        var ctx7 = document.getElementById("s7Chart").getContext("2d");
        var ctx8 = document.getElementById("s8Chart").getContext("2d");
        var s1ChartData = {
            labels: ['','','','','','','','','',''],
            datasets: [{
            label: "",
            fillColor: "rgba(220,220,220,0.2)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            data: [0,0,0,0,0,0,0,0,0,0]
            }]
        };
        var s2ChartData = {
            labels: ['','','','','','','','','',''],
            datasets: [{
            label: "",
            fillColor: "rgba(220,220,220,0.2)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            data: [0,0,0,0,0,0,0,0,0,0]
            }]
        };
        var s3ChartData = {
            labels: ['','','','','','','','','',''],
            datasets: [{
            label: "",
            fillColor: "rgba(220,220,220,0.2)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            data: [0,0,0,0,0,0,0,0,0,0]
            }]
        };
        var s4ChartData = {
            labels: ['','','','','','','','','',''],
            datasets: [{
            label: "",
            fillColor: "rgba(220,220,220,0.2)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            data: [0,0,0,0,0,0,0,0,0,0]
            }]
        };
        var s5ChartData = {
            labels: ['','','','','','','','','',''],
            datasets: [{
            label: "",
            fillColor: "rgba(220,220,220,0.2)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            data: [0,0,0,0,0,0,0,0,0,0]
            }]
        };
        var s6ChartData = {
            labels: ['','','','','','','','','',''],
            datasets: [{
            label: "",
            fillColor: "rgba(220,220,220,0.2)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            data: [0,0,0,0,0,0,0,0,0,0]
            }]
        };
        var s7ChartData = {
            labels: ['','','','','','','','','',''],
            datasets: [{
            label: "",
            fillColor: "rgba(220,220,220,0.2)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            data: [0,0,0,0,0,0,0,0,0,0]
            }]
        };
        var s8ChartData = {
            labels: ['','','','','','','','','',''],
            datasets: [{
            label: "",
            fillColor: "rgba(220,220,220,0.2)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            data: [0,0,0,0,0,0,0,0,0,0]
            }]
        };
        var lineChartOptions = {
            animation: false,
            //Boolean - If we want to override with a hard coded scale
            scaleOverride: true,
            //** Required if scaleOverride is true **
            //Number - The number of steps in a hard coded scale
            scaleSteps: 100,
            //Number - The value jump in the hard coded scale
            scaleStepWidth: 100,
            //Number - The scale starting value
            scaleStartValue: 0
        };
        
        var s1Chart = new Chart(ctx1,{
                type: 'line',
                data: s1ChartData,
                options: lineChartOptions
            })
        var s2Chart = new Chart(ctx2,{
            type: 'line',
            data: s2ChartData,
            options: lineChartOptions
        })
        var s3Chart = new Chart(ctx3,{
            type: 'line',
            data: s3ChartData,
            options: lineChartOptions
        })
        var s4Chart = new Chart(ctx4,{
            type: 'line',
            data: s4ChartData,
            options: lineChartOptions
        })
        var s5Chart = new Chart(ctx5,{
            type: 'line',
            data: s5ChartData,
            options: lineChartOptions
        })
        var s6Chart = new Chart(ctx6,{
            type: 'line',
            data: s6ChartData,
            options: lineChartOptions
        })
        var s7Chart = new Chart(ctx7,{
            type: 'line',
            data: s7ChartData,
            options: lineChartOptions
        })
        var s8Chart = new Chart(ctx8,{
            type: 'line',
            data: s8ChartData,
            options: lineChartOptions
        })
        socket.on("data1",(result)=>{
            // console.log(result)
            // temp = result[0]
            // pressure = result[1]
            // altitude = result[2]
           //  co2 = result[3]
           //  ozone = result[4]
            // setSession({temp:temp,pressure:pressure,altitude:altitude})
            if(result[8] == selDevice){
                s1 = result[0];
                s2 = result[1];
                s3 = result[2];
                s4 = result[3];
                s5 = result[4];
                s6 = result[5];
                s7 = result[6];
                s8 = result[7];
                move(result);
                if(cur_fan_speed == ''){
                    cur_fan_speed = result[11] 
                    $('#speed-fan').val(result[11])
                }
                // 
                
                $('#s1-val').text(result[0])
                $('#s2-val').text(result[1])
                $('#s3-val').text(result[2])
                $('#s4-val').text(result[3])
                $('#s5-val').text(result[4])
                $('#s6-val').text(result[5])
                $('#s7-val').text(result[6])
                $('#s8-val').text(Math.abs(result[7].toFixed(3)))

                $('#s11-val').text(result[0])
                $('#s22-val').text(result[1])
                $('#s33-val').text(result[2])
                $('#s44-val').text(result[3])
                $('#s55-val').text(result[4])
                $('#s66-val').text(result[5])
                $('#s77-val').text(result[6])
                $('#s88-val').text(Math.abs(result[7].toFixed(3)))
                
                setData(s1ChartData.datasets[0].data,s1);
                setLabels(s1ChartData.labels);

                setData(s2ChartData.datasets[0].data,s2);
                setLabels(s2ChartData.labels);

                setData(s3ChartData.datasets[0].data,s3);
                setLabels(s3ChartData.labels);

                setData(s4ChartData.datasets[0].data,s4);
                setLabels(s4ChartData.labels);

                setData(s5ChartData.datasets[0].data,s5);
                setLabels(s5ChartData.labels);

                setData(s6ChartData.datasets[0].data,s6);
                setLabels(s6ChartData.labels);

                setData(s7ChartData.datasets[0].data,s7);
                setLabels(s7ChartData.labels);

                setData(s8ChartData.datasets[0].data,s8);
                setLabels(s8ChartData.labels);
            
                // lineChart.data.labels.push(s1ChartData.labels);
                // lineChart.data.datasets;
                s1Chart.update();
                s2Chart.update();
                s3Chart.update();
                s4Chart.update();
                s5Chart.update();
                s6Chart.update();
                s7Chart.update();
                s8Chart.update();
            }
            
          })

        //   showPressureChart();
        //   showTempChart();
        //   showAltChart();
         
        
        show2Chart();
        show3Chart();
        show4Chart();
        show5Chart();
        show6Chart();
        show7Chart();
        show8Chart();
        
    }
});

function setLabels(labels) {
var nextMonthIndex = months.indexOf(labels[labels.length - 1]) + 1;
var nextMonthName = months[nextMonthIndex] != undefined ? months[nextMonthIndex] : "January";
labels.push('');
labels.shift();
}

function setData(data,val) {
data.push(val);
data.shift();
}

function convertMonthNameToNumber(monthName) {
var myDate = new Date(monthName + " 1, 2016");
var monthDigit = myDate.getMonth();
return isNaN(monthDigit) ? 0 : (monthDigit + 1);
}

var months = ["January", "February", "March", "April", "May", "June",
"July", "August", "September", "October", "November", "December"
];

function show1Chart(s1){
    // const ctx = document.getElementById('s1Chart');
    // // const labels = Utils.months({count: 7});

    $('#s1Chart canvas').remove();
    
    // const s1Chart = new Chart(ctx, {
    //     type: 'line',
    //     data: {
    //         labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday','Sunday'],
    //         datasets: [{
    //             label: 'Weekly Data',
    //             data: [12, 19, 3, 5, 2, 3],
                
    //             borderWidth: 1
    //         }]
    //     },
    //     options: {
    //         scales: {
    //             y: {
    //                 beginAtZero: true
    //             }
    //         }
    //     }
    // });

    
    
      setInterval(function() {
        
      }, 1000);
    
      
}

function show2Chart(){
    // const ctx = document.getElementById('s2Chart');
    // // const labels = Utils.months({count: 7});

    // $('#s2Chart canvas').remove();
    
    // const s2Chart = new Chart(ctx, {
    //     type: 'line',
    //     data: {
    //         labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday','Sunday'],
    //         datasets: [{
    //             label: 'Weekly Data',
    //             data: [12, 19, 3, 5, 2, 3],
                
    //             borderWidth: 1
    //         }]
    //     },
    //     options: {
    //         scales: {
    //             y: {
    //                 beginAtZero: true
    //             }
    //         }
    //     }
    // });
}

function show3Chart(){
    // const ctx = document.getElementById('s3Chart');
    // // const labels = Utils.months({count: 7});

    // $('#s3Chart canvas').remove();
    
    // const s3Chart = new Chart(ctx, {
    //     type: 'line',
    //     data: {
    //         labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday','Sunday'],
    //         datasets: [{
    //             label: 'Weekly Data',
    //             data: [12, 19, 3, 5, 2, 3],
                
    //             borderWidth: 1
    //         }]
    //     },
    //     options: {
    //         scales: {
    //             y: {
    //                 beginAtZero: true
    //             }
    //         }
    //     }
    // });
}

function show4Chart(){
    // const ctx = document.getElementById('s4Chart');
    // // const labels = Utils.months({count: 7});

    // $('#s4Chart canvas').remove();
    
    // const s4Chart = new Chart(ctx, {
    //     type: 'line',
    //     data: {
    //         labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday','Sunday'],
    //         datasets: [{
    //             label: 'Weekly Data',
    //             data: [12, 19, 3, 5, 2, 3],
                
    //             borderWidth: 1
    //         }]
    //     },
    //     options: {
    //         scales: {
    //             y: {
    //                 beginAtZero: true
    //             }
    //         }
    //     }
    // });
}

function show5Chart(){
    // const ctx = document.getElementById('s5Chart');
    // // const labels = Utils.months({count: 7});

    // $('#s5Chart canvas').remove();
    
    // const s5Chart = new Chart(ctx, {
    //     type: 'line',
    //     data: {
    //         labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday','Sunday'],
    //         datasets: [{
    //             label: 'Weekly Data',
    //             data: [12, 19, 3, 5, 2, 3],
                
    //             borderWidth: 1
    //         }]
    //     },
    //     options: {
    //         scales: {
    //             y: {
    //                 beginAtZero: true
    //             }
    //         }
    //     }
    // });
}

function show6Chart(){
    // const ctx = document.getElementById('s6Chart');
    // // const labels = Utils.months({count: 7});

    // $('#s6Chart canvas').remove();
    
    // const s6Chart = new Chart(ctx, {
    //     type: 'line',
    //     data: {
    //         labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday','Sunday'],
    //         datasets: [{
    //             label: 'Weekly Data',
    //             data: [12, 19, 3, 5, 2, 3],
                
    //             borderWidth: 1
    //         }]
    //     },
    //     options: {
    //         scales: {
    //             y: {
    //                 beginAtZero: true
    //             }
    //         }
    //     }
    // });
}

function show7Chart(){
    // const ctx = document.getElementById('s7Chart');
    // // const labels = Utils.months({count: 7});

    // $('#s7Chart canvas').remove();
    
    // const s7Chart = new Chart(ctx, {
    //     type: 'line',
    //     data: {
    //         labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday','Sunday'],
    //         datasets: [{
    //             label: 'Weekly Data',
    //             data: [12, 19, 3, 5, 2, 3],
                
    //             borderWidth: 1
    //         }]
    //     },
    //     options: {
    //         scales: {
    //             y: {
    //                 beginAtZero: true
    //             }
    //         }
    //     }
    // });
}

function show8Chart(){
    // const ctx = document.getElementById('s8Chart');
    // // const labels = Utils.months({count: 7});

    // $('#s8Chart canvas').remove();
    
    // const s8Chart = new Chart(ctx, {
    //     type: 'line',
    //     data: {
    //         labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday','Sunday'],
    //         datasets: [{
    //             label: 'Weekly Data',
    //             data: [12, 19, 3, 5, 2, 3],
                
    //             borderWidth: 1
    //         }]
    //     },
    //     options: {
    //         scales: {
    //             y: {
    //                 beginAtZero: true
    //             }
    //         }
    //     }
    // });
}

// function showTempChart(){
//     const ctx = document.getElementById('tempChart');
//     // const labels = Utils.months({count: 7});
//     $('#tempChart canvas').remove();
//     const tempChart = new Chart(ctx, {
//         type: 'line',
//         data: {
//             labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday','Sunday'],
//             datasets: [{
//                 label: 'Weekly Data',
//                 data: [12, 19, 3, 5, 2, 3],
                
//                 borderWidth: 1
//             }]
//         },
//         options: {
//             scales: {
//                 y: {
//                     beginAtZero: true
//                 }
//             }
//         }
//     });
// }

// function showAltChart(){
//     const ctx = document.getElementById('altChart');
//     // const labels = Utils.months({count: 7});
//     $('#altChart canvas').remove();
//     const altChart = new Chart(ctx, {
//         type: 'line',
//         data: {
//             labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday','Sunday'],
//             datasets: [{
//                 label: 'Weekly Data',
//                 data: [12, 19, 3, 5, 2, 3],
                
//                 borderWidth: 1
//             }]
//         },
//         options: {
//             scales: {
//                 y: {
//                     beginAtZero: true
//                 }
//             }
//         }
//     });
// }

function showVal(val){
    var power_stats='';
    if(val == 0){
        power_stats = 'Off';
    }else if(val >= 0 && val <= 33){
        power_stats = 'Low';
    }else if(val >= 33 && val <= 64){
        power_stats = 'Medium';
    }else{
        power_stats = 'High';
    }

    // alert(power_stats);

    var dataFan = {
        speed : val,
        address : selDevice,
    }

    socket.emit('power',dataFan);
}

function volUp(){
    // alert($('#speed-fan').val())

    var cur_speed = parseInt($('#speed-fan').val());
    var speed = cur_speed + 10;
    if(speed < 0){
        speed = 0
    }

    if(speed > 100){
        speed = 100
    }

    var power_stats='';
    if(speed == 0){
        power_stats = 'Off';
    }else if(speed >= 0 && speed <= 33){
        power_stats = 'Low';
    }else if(speed >= 33 && speed <= 64){
        power_stats = 'Medium';
    }else{
        power_stats = 'High';
    }
    $('#speed-fan').val(speed);
    var dataFan = {
        speed : speed,
        address : selDevice,
    }

    socket.emit('power',dataFan);
}

function volDown(){
    // alert($('#speed-fan').val())

    var cur_speed = parseInt($('#speed-fan').val());
    var speed = cur_speed - 10;
    if(speed < 0){
        speed = 0
    }

    if(speed > 100){
        speed = 100
    }
    var power_stats='';
    if(speed == 0){
        power_stats = 'Off';
    }else if(speed >= 0 && speed <= 33){
        power_stats = 'Low';
    }else if(speed >= 33 && speed <= 64){
        power_stats = 'Medium';
    }else{
        power_stats = 'High';
    }
    $('#speed-fan').val(speed);

    var dataFan = {
        speed : speed,
        address : selDevice,
    }

    socket.emit('power',dataFan);
}

function move(result) {

    var pres = (result[0]/100)*100
    var pres = (result[0]/100)*100
    var pres = (result[0]/100)*100

    // var elem_pres = document.getElementById("myBar-pres");
    // elem_pres.style.width = result[1] + "%";

    // var elem_temp = document.getElementById("myBar-temp");
    // elem_temp.style.width = result[0] + "%";

    // var elem_alt = document.getElementById("myBar-alt");
    // elem_alt.style.width = result[2] + "%";

    var elem_s1 = document.getElementById("myBar-s1");
    elem_s1.style.width = result[0] + "%";
    
    var elem_s2 = document.getElementById("myBar-s2");
    elem_s2.style.width = result[1] + "%";

    var elem_s3 = document.getElementById("myBar-s3");
    elem_s3.style.width = result[2] + "%";

    var elem_s4 = document.getElementById("myBar-s4");
    elem_s4.style.width = result[3] + "%";

    var elem_s5 = document.getElementById("myBar-s5");
    elem_s5.style.width = ((result[4]/90)*100) + "%";

    var elem_s6 = document.getElementById("myBar-s6");
    elem_s6.style.width = ((result[5]/40)*100) + "%";

    var elem_s7 = document.getElementById("myBar-s7");
    elem_s7.style.width = ((result[6]/500)*100) + "%";

    var elem_s8 = document.getElementById("myBar-s8");
    elem_s8.style.width = (Math.abs(result[7]/2)*100)+ "%";

    var elem_s11 = document.getElementById("myBar-s11");
    elem_s11.style.width = result[0] + "%";
    var elem_s22 = document.getElementById("myBar-s22");
    elem_s22.style.width = result[1] + "%";
    var elem_s33 = document.getElementById("myBar-s33");
    elem_s33.style.width = result[2] + "%";
    var elem_s44 = document.getElementById("myBar-s44");
    elem_s44.style.width = result[3] + "%";
    var elem_s55 = document.getElementById("myBar-s55");
    elem_s55.style.width = ((result[4]/90)*100) + "%";
    var elem_s66 = document.getElementById("myBar-s66");
    elem_s66.style.width = ((result[5]/40)*100) + "%";
    var elem_s77 = document.getElementById("myBar-s77");
    elem_s77.style.width = ((result[6]/500)*100) + "%";
    var elem_s88 = document.getElementById("myBar-s88");
    elem_s88.style.width = (Math.abs(result[7]/2)*100)+ "%";



    if(result[0] <= 15){
        $('#myBar-s1').css('background-color','#1abc9c')
        $('#myBar-s11').css('background-color','#1abc9c')
    }else if(result[0] > 15 && result[0] < 41){
        $('#myBar-s1').css('background-color','#e67e22')
        $('#myBar-s11').css('background-color','#e67e22')
    }else{
        $('#myBar-s1').css('background-color','#e74c3c')
        $('#myBar-s11').css('background-color','#e74c3c')
    }

    if(result[1] <= 15){
        $('#myBar-s22').css('background-color','#1abc9c')
        $('#myBar-s2').css('background-color','#1abc9c')
    }else if(result[1] > 15 && result[1] < 41){
        $('#myBar-s22').css('background-color','#e67e22')
        $('#myBar-s2').css('background-color','#e67e22')
    }else{
        $('#myBar-s22').css('background-color','#e74c3c')
        $('#myBar-s2').css('background-color','#e74c3c')
    }

    if(result[2] <= 15){
        $('#myBar-s33').css('background-color','#1abc9c')    
        $('#myBar-s3').css('background-color','#1abc9c')
    }else if(result[2] > 15 && result[2] < 41){
        $('#myBar-s33').css('background-color','#e67e22')    
        $('#myBar-s3').css('background-color','#e67e22')
    }else{
        $('#myBar-s33').css('background-color','#e74c3c')    
        $('#myBar-s3').css('background-color','#e74c3c')
    }

    if(result[3] <= 15){
        $('#myBar-s44').css('background-color','#1abc9c')
        $('#myBar-s4').css('background-color','#1abc9c')
    }else if(result[3] > 15 && result[3] < 41){
        $('#myBar-s44').css('background-color','#e67e22')
        $('#myBar-s4').css('background-color','#e67e22')
    }else{
        $('#myBar-s44').css('background-color','#e74c3c')
        $('#myBar-s4').css('background-color','#e74c3c')
    }

    if(result[4] >= 40 && result[4] <= 60){
        $('#myBar-s55').css('background-color','#1abc9c')
        $('#myBar-s5').css('background-color','#1abc9c')
    }else if((result[4] >= 0 && result[4] <= 19) || (result[4] >= 61 && result[4] <= 90)){
        $('#myBar-s55').css('background-color','#e74c3c')
        $('#myBar-s5').css('background-color','#e74c3c')
    }else if((result[4] >= 20 && result[4] <= 39)){
        $('#myBar-s55').css('background-color','#e67e22')
        $('#myBar-s5').css('background-color','#e67e22')
    }

    if(((result[5]/40)*100) < 76){
        $('#myBar-s66').css('background-color','#1abc9c')
        $('#myBar-s6').css('background-color','#1abc9c')
    }else if(((result[5]/40)*100) > 75 && ((result[5]/40)*100) < 91){
        $('#myBar-s66').css('background-color','#e67e22')
        $('#myBar-s6').css('background-color','#e67e22')
    }else{
        $('#myBar-s66').css('background-color','#e74c3c')
        $('#myBar-s6').css('background-color','#e74c3c')
    }

    if(result[6] <= 150){
        $('#myBar-s77').css('background-color','#1abc9c')
        $('#myBar-s7').css('background-color','#1abc9c')
    }else if(result[6] >= 151 && result[6] <= 350){
        $('#myBar-s77').css('background-color','#e67e22')
        $('#myBar-s7').css('background-color','#e67e22')
    }else{
        $('#myBar-s77').css('background-color','#e74c3c')
        $('#myBar-s7').css('background-color','#e74c3c')
    }

    if((Math.abs(result[7]/2)*100) <= 34){
        $('#myBar-s88').css('background-color','#1abc9c')
        $('#myBar-s8').css('background-color','#1abc9c')
    }else if((Math.abs(result[7]/2)*100) > 34 && (Math.abs(result[7]/2)*100) < 67){
        $('#myBar-s88').css('background-color','#e67e22')
        $('#myBar-s8').css('background-color','#e67e22')
    }else{
        $('#myBar-s88').css('background-color','#e74c3c')
        $('#myBar-s8').css('background-color','#e74c3c')
    }
}

window.fn = {};

window.fn.open = function() {
  var menu = document.getElementById('menu');
  menu.open();
};

window.fn.load = function(page) {
  var content = document.getElementById('content');
  var menu = document.getElementById('menu');
  content.load(page)
    .then(menu.close.bind(menu));
};

function gotoHome() {
    showBlocker();
    setTimeout(function(){removeBlocker()},1000)
    document.querySelector('#navigator').pushPage('login.html', {
        data: {
            title: 'Signin'
        }
    });
}

function removeBlocker(){
    $('.preloader-background').delay(1000).fadeOut();
    
    $('.preloader-wrapper')
        .delay(1000)
        .fadeOut();
}

function showBlocker(){
    $('.preloader-background').show();
    
    $('.preloader-wrapper').show();
}

function logoutUserform(){
    // alert()
    localStorage.clear();
    window.sessionStorage.clear();
    window.location.reload();
}


function gotoRegister() {
    // showBlocker();
    // setTimeout(function(){removeBlocker()},1000)
    document.querySelector('#navigator').pushPage('registration.html', {
        data: {
            title: 'Signup'
        }
    });
}

function gotoLogin() {
    document.querySelector('#navigator').pushPage('login.html', {
        data: {
            title: 'Signin'
        }
    });
}

function gotoLogout() {
    document.querySelector('#navigator').pushPage('logout.html', {
        data: {
            
        }
    });
}

function gotoMain() {
    showBlocker();
    // localStorage.setItem('address', '0.00322323');
    document.querySelector('#navigator').resetToPage('usersplitter.html', {
        data: {
            
        }
    });
}

function gotodDataReading(address,loc_code) {
    showBlocker();
    selDevice = address;
    selLocCode = loc_code;
    document.querySelector('#navigator').resetToPage('main.html', {
        data: {
            
        }
    });
}

function resettoMain(){
    document.querySelector('#navigator').resetToPage('usersplitter.html', {
        data: {
            
        }
    });
}

function showPressure(){
    $('#temp').hide();
    $('#altitude').hide();
    $('#pressure').show();
    // pressureChart.update(); 
}

function showAltitude(){
    $('#temp').hide();
    $('#altitude').show();
    $('#pressure').hide();
}

function showTemp(){
    $('#temp').show();
    $('#altitude').hide();
    $('#pressure').hide();
}

function allData(){
    $('#s1').hide();
    $('#s2').hide();
    $('#s3').hide();
    $('#s4').hide();
    $('#s5').hide();
    $('#s6').hide();
    $('#s7').hide();
    $('#s8').hide();
    $('#all-data').show();
}

function show1(){
    $('#s1').show();
    $('#s2').hide();
    $('#s3').hide();
    $('#s4').hide();
    $('#s5').hide();
    $('#s6').hide();
    $('#s7').hide();
    $('#s8').hide();
    $('#all-data').hide();
}
function show2(){
    $('#s1').hide();
    $('#s2').show();
    $('#s3').hide();
    $('#s4').hide();
    $('#s5').hide();
    $('#s6').hide();
    $('#s7').hide();
    $('#s8').hide();
    $('#all-data').hide();
}
function show3(){
    $('#s1').hide();
    $('#s2').hide();
    $('#s3').show();
    $('#s4').hide();
    $('#s5').hide();
    $('#s6').hide();
    $('#s7').hide();
    $('#s8').hide();
    $('#all-data').hide();
}
function show4(){
    $('#s1').hide();
    $('#s2').hide();
    $('#s3').hide();
    $('#s4').show();
    $('#s5').hide();
    $('#s6').hide();
    $('#s7').hide();
    $('#s8').hide();
    $('#all-data').hide();
}
function show5(){
    $('#s1').hide();
    $('#s2').hide();
    $('#s3').hide();
    $('#s4').hide();
    $('#s5').show();
    $('#s6').hide();
    $('#s7').hide();
    $('#s8').hide();
    $('#all-data').hide();
}
function show6(){
    $('#s1').hide();
    $('#s2').hide();
    $('#s3').hide();
    $('#s4').hide();
    $('#s5').hide();
    $('#s6').show();
    $('#s7').hide();
    $('#s8').hide();
    $('#all-data').hide();
}
function show7(){
    $('#s1').hide();
    $('#s2').hide();
    $('#s3').hide();
    $('#s4').hide();
    $('#s5').hide();
    $('#s6').hide();
    $('#s7').show();
    $('#s8').hide();
    $('#all-data').hide();
}
function show8(){
    $('#s1').hide();
    $('#s2').hide();
    $('#s3').hide();
    $('#s4').hide();
    $('#s5').hide();
    $('#s6').hide();
    $('#s7').hide();
    $('#s8').show();
    $('#all-data').hide();
}