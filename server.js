var express = require('express');
var app = express();

app.use(express.static('public'))
app.get('/', (req, res) => res.sendFile('index.html' , { root : __dirname}));
app.get('/meme_formatter', (req, res) => res.sendFile('meme_formatter.html' , { root : __dirname}));

var server = app.listen(80, function () {
    var host = server.address().address;
    var port = server.address().port;
    console.log('App is now app listening on port 80.');
});