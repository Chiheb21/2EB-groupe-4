const express = require("express");
const userRouter = require("./routes/userRoutes");

const mongoose = require("mongoose");
const cors = require("cors");
const bodyParser = require("body-parser");
require("dotenv").config();
const PORT = process.env.PORT || 5000;
const server = express();

// parse application/x-www-form-urlencoded
server.use(bodyParser.urlencoded({ extended: false }));

server.use(cors());
//mongodb connection
mongoose
  .connect("lien de la base ici ! ", {
    useUnifiedTopology: true,
    useNewUrlParser: true,
  })
  .then(function () {
    console.log("base de données connecté");
  });

// parse application/json
server.use(bodyParser.json());
server.use("/api/users", userRouter);

server.listen(PORT, () => {
  console.log("serveur en tres marche ! ");
});
