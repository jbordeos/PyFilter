const cool = require('cool-ascii-faces');
const express = require('express');
const app = express();
const http = require("http");
const path = require('path');
const cors = require("cors");
const { Server } = require("socket.io");
const mysql = require('mysql');
const PORT = process.env.PORT || 5000;
app.use(express.static(path.join(__dirname, 'public')))
  .set('views', path.join(__dirname, 'views'))
  .set('view engine', 'ejs')
  .get('/', (req, res) => res.render('pages/index'))
  .get('/cool', (req, res) => res.send(cool()));
// express()
//   .use(express.static(path.join(__dirname, 'public')))
//   .set('views', path.join(__dirname, 'views'))
//   .set('view engine', 'ejs')
//   .get('/', (req, res) => res.render('pages/index'))
//   .get('/cool', (req, res) => res.send(cool()))
//   .listen(PORT, () => console.log(`Listening on ${ PORT }`));

const server = http.createServer(app);

const io = new Server(server);

// const con = mysql.createConnection({
//   host: "localhost",
//   user: "root",
//   password: "",
//   database: "chatapp"
// });

// con.connect(function(err) {
//   if (err) throw err;
//   console.log("Connected!");
//   // var sql = "INSERT INTO customers (name, address) VALUES ('Company Inc', 'Highway 37')";
//   // con.query(sql, function (err, result) {
//   //   if (err) throw err;
//   //   console.log("1 record inserted");
//   // });
// });

io.on("connection", (socket) => {
  console.log(`User Connected: ${socket.id}`);

  socket.on("join_room", (data) => {
    socket.join(data);
    console.log(`User with ID: ${socket.id} joined room: ${data}`);
  });

  socket.on("hello", (data) => {
    console.log(data); // world
    io.emit("retmsg",data);
  });

  socket.on("send_message", (test) => {
    io.emit("receive_message", test);
    // alert()
  });

  socket.on("send_pitch_message",(data) => {
    io.emit("pitch_message",data);
  });

  socket.on("Temp", (test) => {
    console.log(test);
    io.emit("Temp", test);
    // alert()
  });

  socket.on("RH", (test) => {
    console.log(test);
    io.emit("RH", test);
    // alert()
  });

  socket.on("PM", (test) => {
    console.log(test);
    io.emit("PM", test);
    // alert()
  });

  socket.on("CO2", (test) => {
    console.log(test);
    io.emit("CO2", test);
    // alert()
  });

  socket.on("OZONE", (test) => {
    console.log(test);
    io.emit("OZONE", test);
    // alert()
  });

  socket.on("power", (test) => {
    console.log(test);
    io.emit("power", test);
    // alert()
  });

  socket.on("data1", (data) => {
    console.log(data);
    io.emit("data1", data);
    // alert()
  });

  socket.on("disconnect", () => {
    console.log("User Disconnected", socket.id);
  });

  // socket.on("create_group", () => {
  //   var sql = "INSERT INTO groups (group_name) VALUES ?";
  //   var values = [
  //     ['Group1'],
  //     ['Group2'],
  //     ['Group3'],
  //     ['Group4'],

  //   ];
  //   con.query(sql, [values], function (err, result) {
  //     if (err) throw err;
  //     console.log("Number of records inserted: " + result.affectedRows);
  //   });
  // });
});

server.listen(PORT, () => {
  console.log(PORT);
});
