<?php
	if(isset($_POST["signup"])){
	header("Location:signup.php");
}
log:
session_start();
if(isset($_SESSION["user"])){
	if($_SESSION['name']=='Administrator'){
		header("Location:admin.php");
	}
	else{
	header("Location:index1.php");
	}
}
?>
<html>
<head><title>Ask D2</title>
<link rel="icon" type="image/png" href=logo1.png size=20*16>
<style type="text/css">
body{
	margin:0;
	background: linear-gradient(110deg, rgba(204, 149, 192, 0.4) 40%, rgba(0, 0, 0, 0) 20%),
	radial-gradient(farthest-corner at 400% 0%,rgba(219, 212, 180, 0.4) 70%,rgba(122, 161, 210, 0.4) 70%);
	font-family:sans-serif;
	transition:all 1.5s;
}
.login_nav{
	background:linear-gradient(to bottom right,#0F2027,#203A43,#2F5364);
	position:absolute;
	top:180px;
	left:50%;
	padding:10px 15px;
	text-align:center;
	width:400px;
	height:250px;
	transform:translate(-50%);
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
.logbut{
	width:180px;
	padding:10px 20px;
	border:1px dotted blue;
	margin:-2px;
}
.logo{
	opacity:2;
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
<h1 id="shad">Hi, You're Welcome for sure....</h1>
<div class=login_nav id="nav_log">
<form method=post onsubmit="ch()">
<h2>Login</h2>
<input type=text class=logtxt id=t1 name=logtxt placeholder="USER..." >
<input type=password class=logtxt id=t2 name=logpass placeholder="PASSWORD....." ><br><br>
<button type=submit class=logbut name=logsub style="background:#111111;color:white;font-weight:bolder;" onmouseover="">Submit</button>
<button class=logbut name=signup style="background:#111111;color:white;font-weight:bolder;">SignUp</button>
</form>
</div>
<script>
function ch(){
	var a=document.getElementById('t1');
	var b=document.getElementById('t2');
	if(a.value=='' || b.value==''){
		alert("Login and password values can't be Empty!!");
}
}
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
<?php

$conn=new mysqli("localhost","root","","project");
if ($conn->connect_error) {
		$db=$sql="CREATE DATABASE IF NOT EXISTS project";
	die("Connection Failed!!!");
    header("Location:createDB.php");	
}
else{
	if(isset($_POST["logsub"])){
	$a=$_POST["logtxt"];
	$b=$_POST["logpass"];
	$sql="SELECT * FROM userdata WHERE user='$a'";
	if($conn->query($sql)){
		echo "<center><i style='color:red;position:relative;top:100px;font-size:13px;'>User Not Found*</i></center>".$conn->error;
	}
	$result = $conn->query($sql);
	if (mysqli_num_rows($result) > 0) {
    while($row = $result->fetch_assoc()) {
		if($b==$row["pass"]){
		$_SESSION["id"] = $row['id'];
		$_SESSION["name"] = $row['name'];
		$_SESSION["user"] = $row['user'];
		$_SESSION["img1"]=$row['img'];
		?>
		<script language=javascript>
		var t="<?php echo $row['name']; ?>";
		alert("Hi,"+t);
		</script>	
		<?php
		goto log;
    }
	else{
		echo "<center><i style='color:red;position:relative;top:100px;font-size:13px;'>Wrong Password*</i><center>";
	}
	}
}
}
} 
?>