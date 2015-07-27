var cloudinary = require('cloudinary');
var fs = require('fs');
cloudinary.config({ cloud_name: '', api_key: '', api_secret: '' });
cloudinary.uploader.upload("/home/shreyas/workspace/FomentoTravels/app/images/trans.png", function(result) { console.log(result.url) },{folder : "", use_filename: true});