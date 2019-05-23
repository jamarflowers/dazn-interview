'use strict';

let express = require('express');
let app = express();
let router = require('./api');
app.use('/',express.static('public'));
app.use('/api',router);

app.listen(8080, function(){
    console.log("The app is running....");
});