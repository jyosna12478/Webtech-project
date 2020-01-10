<?php
session_start();

	if (!isset($_SESSION['uname']))

	{
		//echo $_SESSION['uname'];
		
		header('Location: Login.html');

	}
	else
	{
		$logged=$_SESSION['uname'];
	//echo $logged;
	}
	?>

<html>
<head>
<title> Elibrary</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="linksnew.css">
<style>
body{
background-image: url("contactus.jpg"); /*You will specify your image path here.*/
background-size: cover;
background-position: top center !important;
background-repeat: no-repeat !important;
background-attachment: fixed;
width:100%;

}
#f1{
	border:1px solid lightgrey;
	border-radius:10px;
	width:35%;
	height:65%;
	justify-content:center;
	padding-top:10px;
	align-item:center;
	margin-top:-250px;
	margin-left:50px;
	}

form{
	text-align:center;
    background:transparent;
   	line-height: 150%;
	}
#cc{
	color:white;
	font-size:30px;
	margin-top:10px;
	
	}
#but{	
		line-height:20px;
		width:100px;
		background-color:transparent;
		font-weight:bold;
		color:white;
		
		}
.l{
		padding-left:900px;
		
		}
#d{
		float:right;
		margin-left:1230px;
		
}
li a:hover, .dropdown:hover .dropbtn {
    background-color: grey;
    z-index: 100;
	text-decoration:underline;
}
</style>
</head>
<body onload="displog()">
<ul id="u">
  <li><a href="HOME.php">Home</a></li>
    <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Genre</a>
    <div class="dropdown-content">
      <a href="http://localhost/Project/drama/drama.php">Drama</a>
      <a href="http://localhost/Project/romance/romance.php">Romance</a>
      <a href="http://localhost/Project/scifi/fiction.php">Science Fiction</a>
      <a href="http://localhost/Project/action/action.php">Action and Adventure</a>
      <a href="http://localhost/Project/horror/horror.php">Horror</a>
      <a href="http://localhost/Project/mystery/mystery.php">Mystery</a>
      <a href="http://localhost/Project/SelfHelp/selfhelp.php">Self Help</a>

    </div>
  </li>
<li><a href="aboutus.php">About Us</a></li>
<li><a href="contactus.php">Contact Us</a></li>
</ul>
<br>
<br>
<br>

<h1 style="text-align:left;font-size:35px;margin-top:-60px;color:white;font-family:Times New Roman;"><b>We'd <span style="color:white;">&#x2661 </span> to help You!</b><h1>


 <marquee style="color:white;font-size:20px;font-family:cursive;">We'll Be Glad To Answer Your Questions!</marquee>
<br>
<pre>

<p style="font-size:20px;font-family:comic sans ms;color:black;text-align:right;">We like to create things with fun,open-minded people.Feel free to say HELLO!!!            </p></pre>
<pre>
<a href="https://www.google.co.in/maps/place/PES+University/@12.9345,77.5323277,17z/data=!3m1!4b1!4m5!3m4!1s0x3bae3e468d8d36d3:0x694d74f6ac640acf!8m2!3d12.9344948!4d77.5345164" target="_blank"><img  width="35px" height="35px" src="loc.png" class="l"></a>	<i style="font-size:32px;font-family:Times New Roman;">Pes University</i>
<img width="35px" height="35px" src="phone.png" class="l">	<i style="font-size:32px;font-family:Times New Roman;">+91 9900408829</i> 
<img width="35px" height="35px" src="mail.png" class="l">	<i style="font-size:32px;font-family:Times New Roman;">hema.m456@gmail.com</i> 

<hr  style="width:500px;margin-left:850px;">

<div style="margin-top:-40px; border:transperant;width:500px;margin-left:800px;">
<h5 style="margin-left:180px;font-size:35px;font-family:Times New Roman;margin-top:-10px;">Follow Us On</h5><pre style="margin-left:-339px;margin-top:-20px;"> 				  <a href="https://www.facebook.com/Bens-Book-Barn-308173099664340/" target="_blank"><img width="40x" height="35px" src="facebook.png" id="fb"></a> <a href="https://twitter.com/ranjithanayak48" target="_blank"><img  onclick="twitter()"id="tw" width="40px" height="35px" src="twitter.png"></a> <a href="https://www.linkedin.com/in/priyanka-askani-803009154/" target="_blank"><img onclick="linkedin()" width="40px" height="35px" src="Linkedin.png" id="lk"></a> <a href="https://plus.google.com/108609258968978062312" target="_blank"><img onclick="plus()" width="40px" height="35px" id="gp" src="gplus.png"  id="gp"></a> <a href="https://www.instagram.com/bensbookbarn/?hl=en" target="_blank"><img onclick="instagram()" width="40px" height="40px" src="insta.png"  id="ins"></a></pre>
</pre>

</div>

<div id="f1" style="margin-top:-480px;">
<form action="message.php" method="POST">
<input type="text" placeholder="Your Name" size="44" name="uname">
<br>
<br>
<input type="text" placeholder="E-mail" size="45" name="email">
<br>
<br>
<textarea name="message" rows="15" cols="50" placeholder="Message"></textarea>
<br>
<input type="submit" name="send" value="Send" id="but" onclick="fun()">
</form>
</div>
<script>

function fun()
	{
		alert("Message Received");
	}

function displog()
{
	//if(<?phpif(isset($_SESSION['uname'])){echo 1;}?>)
	if(<?php if(isset($logged)){echo 1;}?>)
	{
		var l=document.createElement("li");
		var t=document.getElementById("u");
		t.appendChild(l);
		var ll=document.createElement("a");
		l.appendChild(ll);
		ll.setAttribute("href","http://localhost/Project/Logout.php");
		ll.setAttribute("target","_self");
		ll.setAttribute("class","button");
		ll.setAttribute("id","d");
		ll.innerHTML="logout";
		
	}
	else
	{
		var l=document.createElement("li");
		var t=document.getElementById("u");
		t.appendChild(l);
		var ll=document.createElement("a");
		l.appendChild(ll);
		ll.setAttribute("href","http://localhost/Project/Login.html");
		ll.setAttribute("target","_self");
		ll.setAttribute("class","button");
		ll.setAttribute("id","d");
		ll.innerHTML="Login";
		
	}
}



</script>

</body>
</html>