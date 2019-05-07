const express = require("express")
const app = express()
const bodyParser = require("body-parser")
const expressValidator = require("express-validator")
const methodOverride = require("method-override")
const path = require('path')

app.set("view engine", "ejs")
app.set('views', path.join(__dirname, '/views'))
app.use(express.static("public"))
app.use(methodOverride("_method"))
app.use(bodyParser.urlencoded({extended: true}))
app.use(bodyParser.json())
app.use(expressValidator())

//adiciona as rotas
require('./routes/usuarios')(app)


app.get("/", (req, res) => res.redirect("/"))

module.exports = app