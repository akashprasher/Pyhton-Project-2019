<!DOCTYPE html>
<html>
<head align="right">
<title>heart.a.traveller-signup</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="ti.png" type="image/png">
<style>

body {  background-repeat: no-repeat; background-attachment: scroll;
   
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}


.topnav {
  overflow: hidden;
  background-color: #ffffff;
}

.topnav a {
  float: right;
  color: black;
  text-align: center;
  padding: 10px 10px;
  text-decoration: none;
  font-size: 17px;
  
}

.topnav a:hover {
  background-color: #ddd;
  color: white;
}


.dopnav {
  overflow: hidden;
  background-color: #ffffff;
  
}
.dopnav a {
  float: center;
  color: black;
  text-align: center;
  padding: 10px 10px;
  text-decoration: none;
  font-size: 17px;
  
}
.dopnav a:hover {
  background-color: #ddd;
  color: white;
}
.center {
    align-self: center;
    margin: auto;
    width: 60%;
    border: 3px solid green;
    padding: 10px;
    background-color: white;
    opacity: 0.8;
}

</style>
</head>
<body style="align-items: center;" style="size: 100px" background="imgl.jpg" >
<div class="topnav" align="center">
  <p><img src="ehdr.png" style="width:189px;height:57.2px;" style="background-color: green " ></p>
</div>
<div class="topnav" align="right" style="background-color: green" opacity: 0.4;>
   <a href="about.html">About</a>
   <a href="contact.html">Contact</a>
   <a href="login.html">Login/Sign up</a>
   <a href="gallery.html">Gallery</a>
   <a href="home.html">Home</a>
</div>
<br><br><br><br><br><br>

<div class="center">
 <form  action="#Signup" align="center"> 
<img src="esignup.png" alt="contact" width="189px" height="57.2px"></img>
<h4 style="color: green">Name</h4>
<input type="text" placeholder="Enter your name" name="name">
<h4 style="color: green">Email</h4>
<input type="Email" placeholder="Enter your email" name="email">
<h4 style="color: green">Password</h4>
<input  type="Password" placeholder="Password" name="password">
<h4 style="color: green">ReEnter-Password</h4>
<input  type="Password" placeholder="ReEnter-Password" name="rpassword">
<br><br>
<button style="color: green">Sign up</button>
</form>
<form action="login.html" align="center">
  <h6>Already Have an Account, Please Login</h6><button href="login.html" style="color: green">Login</button><br>
</form>
</div>
<br>
<br>
<br>
<br>
<br>
<div class="parallax"></div>
<div class="dopnav" align="center" style="background-color: green" opacity: 0.4;>
   <a href="home.html">Home</a>
   <a href="#Example">Example</a>
   <a href="contact.html">Contact</a>
   <a href="abouthtml">About</a>
</div>
</body>
</html>
<?php
$con=mysql_connect("locahost","root","") or die (mysql_error());
?>