<?php
session_start();
if(isset($_POST['sub'])){
	$a=$_POST['txt1'];
	$b=$_POST['txt2'];
	$c=$_POST['txt3'];
$conn=new mysqli('localhost','root','','project');
if ($conn->connect_error) {
	die("Connection Failed!!!");
	$conn=new mysqli("localhost",'root','');
		$db=$sql="CREATE DATABASE IF NOT EXISTS project";
	
    header("Location:createDB.php");	
}
else{
$sql="INSERT INTO userdata(user,pass,name,img) values('$a','$b','$c','profile.png')";
if(!$conn->query($sql)){
	echo"error ".$conn->error;
}
else
	header("Location:login.php");
}
}
?>
<html>
<head><title>Ask D2</title>
<link rel="icon" type="image/png" href=logo1.png size=20*16>
<style type="text/css">
body{
	margin:0;
	background: linear-gradient(110deg, rgba(204, 149, 192, 0.4) 40%, rgba(0, 0, 0, 0) 20%), radial-gradient(farthest-corner at 400% 0%,rgba(219, 212, 180, 0.4) 70%,rgba(122, 161, 210, 0.4) 70%);
	font-family:sans-serif;
	transition:all 1.5s;
}
.login_nav{
	background:linear-gradient(to bottom right,#0F2027,#203A43,#2F5364);
	position:absolute;
	top:180px;
	left:550px;
	padding:10px 15px;
	text-align:center;
	width:400px;
	height:300px;
	border-radius:5px;
	box-shadow: 0px 0px 30px 3px black;
	color:white;
}
.logtxt{
	padding:10px 20px;
	width:350px;
	margin:5px;
	border:1px dotted blue;
	border-radius:5px;
}
input{
	transition:all 0.1s;
}
input:focus{
	box-shadow:0px 0px 10px 4px #1565C0;
	font-size:15px;
	font-weight:bolder;
}
form{
	margin-top:20px;	
}
h1{
	font-family:Love Ya Like A Sister;
	font-weight:bolder;
	margin:10px;
	font-size:50px;
	color:white;
	
}

</style>
<script language=javascript>
setInterval(
function (){
  var randomColor = Math.floor(Math.random()*16777215).toString(16);
  document.body.style.backgroundColor = "#"+randomColor;
},2250);
</script>
<body id=background >
<h1 id="shad">REGISTER for free!!!!!<br>gain full access......</h1>
<div class=login_nav id="nav_log">
<form method=post>
<h2>Sign Up.</h2>
<input type=text class=logtxt name=txt3 placeholder="NAME">
<input type=text class=logtxt name=txt1 placeholder="USER">
<input type=password class=logtxt name=txt2 placeholder="PASSWORD....."><br><br>
<button type=submit class=logtxt name=sub style="background:#111111;color:white;font-weight:bolder;">REGISTER</button>
</form>
</div>
<script>
function myFunction() {
	w=1;x=x1=0;y=y1=0;z=0;
var a=x+"px "+y+"px "+z+"px rgba(0,0,0,0.1)"
var b=","
for(i=0;i<35;i+=1){
	a+=b+(x+=1)+"px "+(y+=0.4)+"px "+(z)+"px rgba(0,0,0,0.8)";
}
  document.getElementById("shad").style.textShadow = a
 
}
myFunction()
</script>
</body>
</html>