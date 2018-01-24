var express = require('express');
var qr = require('qr-image');

var app = express();


var codes = []

for (var i = 0; i < 100; i++) {
  codes[i] = generateString();
}
codes[100] = 'theflagisonthispage-1-1-2-3-5-8-13';


function generateString() {
  var text = "";
  var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
  for (var i = 0; i < 7; i++) {
    text += possible.charAt(Math.floor(Math.random() * possible.length));
  }
  return text;
}

app.get('/', function(req, res) {
  res.send('Welcome to the QR challenge!\n\nTo get started, go to /' + codes[0]);
});

app.get('/' + codes[100], function(req, res) {
  res.status(200).send('flag{qr-codes-and-scripts}')
});


app.all('/*', function(req, res) {
  var path = req.path.substr(1);
  if (codes.indexOf(path) > -1) {
    res.set('Content-Type', 'image/png');
    var code = qr.image(codes[codes.indexOf(path) + 1], { type: 'png', ec_level: 'H', size: 10, margin: 0 });
    res.setHeader('Content-type', 'image/png');
    code.pipe(res);
  } else {
    res.status(404).send('Not found.');
  }
});



app.listen(8080);
