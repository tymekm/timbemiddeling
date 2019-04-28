//let name = document.getElementById("name-field").value;
//    let email = document.getElementById("email-field").value;
//    let message = document.getElementById("message-field").value;
//
var nodemailer = require('nodemailer');

var transporter = nodemailer.createTransport({
  host: 'smtp.live.com',
    port: 25,
    secure: false,
  auth: {
    user: 'tymek.m@hotmail.com',
    pass: 'Pelnia1992'
  }
});
    var mailOptions = {
      from: 'tymek.m@hotmail.com',
      to: 'wolver1dk@hotmail.com',
      subject: 'Sending Email using Node.js',
      text: 'That was easy!'
    };

    transporter.sendMail(mailOptions, function(error, info){
      if (error) {
	console.log(error);
      } else {
	console.log('Email sent: ' + info.response);
      }
    });
