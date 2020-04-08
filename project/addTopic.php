<?php 
session_start();
$conn=new mysqli("localhost","root","","project");
if ($conn->connect_error) {	
   	
}
else
	echo"Connected:";
if(isset($_POST['sub'])){
	$select=$_POST['select'];
	$topic=$_POST['topic'];
	$link=$_POST['link'];
	$sql="INSERT INTO $select(topic,link) VALUES ('$topic','$link')";
	if($conn->query($sql)){
		echo"data inserted.";
	}
	else{
		echo"error".$conn->error;
	}
}

?>
<html>
<head>
<style>
body{
	margin:0;
	text-align:center;
	background:url("siteImg/html2.jpeg");
	background-size: 100% 100%;
}
.inrtData{
	font-family:Love Ya Like A Sister;
	font-weight:bolder;
	color:white;
	text-shadow:1px 1px 3px black;
	background:rgba(200,99,99,0.2);
	border-radius:5px;
	width:400px;
	text-align:center;
	padding:20px;
	transform:translate(-95%);
	position:relative;
	left:50%;
	top:20%;
}
input[type=text],select{
	position:relative;
	width:95%;
	padding:8px;
	font-size:15px;
	border-radius:10px 10px 10px 10px;
	
}
input[type=button],input[type=submit]{
	padding:10px;
	width:47.5%;
	margin-right:-4;
	position:relative;
	left:-2px;
	border-radius:10px;
	
}
</style>
</head>
<body>
<form class="inrtData" name="inrtData" method=post>
<h1>Choose to Enter Data</h1>
<select name=select>
<center>
<optgroup label="Select field:">
<option value="jeemth">Jee Mathematics</option>
<option value="jeephy">Jee Physics</option>
<option value="jeeche">Jee Chemistry</option>
<option value="jeecou">Jee Crash Course</option>
<option value="ndamth">NDA Mathematics</option>
<option value="gstudies">Genaral Studies</option>
<option value="engl">English(NDA)</option>
<option value="12th">12</option>
<option value="11th">11</option>
<option value="10th">10</option>
<option value="9th">09</option>
<option value="8th">08</option>
<option value="7th">07</option>
<option value="6th">06</option>
<option value="5th">05</option>
<option value="4th">04</option>
<option value="3rd">03</option>
<option value="2nd">02</option>
<option value="1st">01</option>
<option value="Nursery">Nursery</option>
<option value="KG">KG</option>
</center>
</select>
<input type=text name=topic placeholder="Topic">
<input type=text name=link placeholder="Link"><br><br>
<input type=submit name=sub>
<a href="admin.php"><input type=button name="Home" value=Home></a>
</form>
</body>
</html>
<?php
if(isset($_POST['home'])){
	header("Location:admin.php");
}
?>