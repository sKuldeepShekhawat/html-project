<?php
session_start();
if(!$_SESSION["name"])
	header("Location:login.php");
	
?>
<html>
<head><title>D2 Ask.</title>
<style>
body{
	font-family:Love Ya Like A Sister;
	margin:0;
	height:100%;
	overflow:hidden;

}
.prof{
	position:absolute;
	top:0px;
	left:0%;
	width:100%;	
}
.proimg{
	position:absolute;
	top:-2px;
	left:5%;
	width:100px;
	overflow:hidden;
	height:100px;
	transform:translate(-50%);
	border-radius:50px 50px 50px 50px;
	border:1px solid;
}
.proname{
	position:absolute;
	top:-30px;
	left:140px;
	width:100em;
	font-size:48px;
}
hr{
	width:35%;
	height:0.1px;
	border:1px solid;
	position:absolute;
	top:52px;
	left:128px;	
	background:black;
}
.probut{
	padding:6px 20px;
	position:relative;
	top:62px;
	left:8.7%;
	margin-left:-5;
	font-size:20px;
	color:white;
	background:transparent;
	border:1px solid transparent;
	opacity:0.8;
	transition:all 0.2s;
}
.probut:hover{
	opacity:1;
	border:1px solid black;
	background:rgba(40,20,70,0.5);
}
.procon{
	height:100px;
	background:#423456;
}
.back{
	position:absolute;
	width:100px;
	height:100px;
	background-image: url("profile.png");
	
}
.sec_id{
	width:230px;
	height:90%;
	background:#234567;
	overflow:auto;
}
.sec_data{
	width:1310px;
	height:90%;
	top:100px;
	position:absolute;
	left:230px;
	background:#dcdcdc;
	overflow:auto;
	font-family:sans-serif;
	
}
.video{
	padding:15px;
	position:relative;
	margin-right:-15px
}
.option{
	text-align:center;
	width:95%;
	font-weight:bolder;
	padding:10px;
	transition:all 0.1s;
	border:none;
	background:transparent;
}
.option:hover{
	text-align:center;
	width:100%;
	color:white;
	padding:15px;
	background:red;
}
</style>
</head>
<body>
<div class=procon>
<div class=prof>
<span class=proimg>
<div class=back></div>
<img src="images/<?php echo $_SESSION["img1"]; ?>" alt="<?php echo $_SESSION["name"]; ?>" width=90px  style="z-index:50;transform:translate(-50%);position:absolute;left:50%">
</span>
<h1 class=proname><?php echo $_SESSION["name"]; ?></h1>
<hr>
<form method=post>
<button name=sign class=probut>SignUp</button>
<button name=proup class=probut>Update Image</button>
<button type=submit name=logout class=probut>Logout</button>
<a href="chpass.php"><button class=probut name=chpass>Change Password</button></a>
<a href="addTopic.php"><button class=probut name=addto>Add Topic</button></a>
<a href="http://localhost:8080/phpmyadmin/sql.php?db=project&table=userdata&pos=0"><button class=probut name=database>Check Database</button></a>
</form>
</div>
</div>
<div class="sec_id">
<form method=post>
<button class=option name="jeemth">Jee Mathematics</button>
<button class=option name="jeephy">Jee Physics</button>
<button class=option name="jeeche">Jee Chemistry</button>
<button class=option name="jeecou">Jee Crash Course</button>
<button class=option name="ndamth">NDA Mathematics</button>
<button class=option name="gstudies">Genaral Studies</button>
<button class=option name="engl">English(NDA)</button>
<button class=option name="12th">12</button>
<button class=option name="11th">11</button>
<button class=option name="10th">10</button>
<button class=option name="9th">09</button>
<button class=option name="8th">08</button>
<button class=option name="7th">07</button>
<button class=option name="6th">06</button>
<button class=option name="5th">05</button>
<button class=option name="4th">04</button>
<button class=option name="3rd">03</button>
<button class=option name="2nd">02</button>
<button class=option name="1st">01</button>
<button class=option name="nursery">Nursery</button>
<button class=option name="kg">KG</button>
<button class=option name="kg"></button>
</form>
</div>


</body>
</html>
<?php
  $_SESSION['sec_id']="null";
  $sec_id=$_SESSION['sec_id'];
if(isset($_POST["jeemth"])){
	$_SESSION['sec_id']=$sec_id="jeemth";
	echo $sec_id;
}
if(isset($_POST["jeephy"])){
	$_SESSION['sec_id']=$sec_id="jeephy";
	echo $_SESSION['sec_id'];
}
if(isset($_POST["jeeche"])){
	$_SESSION['sec_id']=$sec_id="jeeche";
	echo $_SESSION['sec_id'];
}
if(isset($_POST["jeecou"])){
	$_SESSION['sec_id']=$sec_id="jeecou";
	echo $_SESSION['sec_id'];
}
if(isset($_POST["ndamth"])){
	$_SESSION['sec_id']=$sec_id="ndamth";
	echo $_SESSION['sec_id'];
}
if(isset($_POST["gstudies"])){
	$_SESSION['sec_id']=$sec_id="gstudies";
	echo $_SESSION['sec_id'];
}
if(isset($_POST["engl"])){
	$_SESSION['sec_id']=$sec_id="engl";
	echo $_SESSION['sec_id'];
}
if(isset($_POST["12th"])){
	$_SESSION['sec_id']=$sec_id="12th";
	echo $_SESSION['sec_id'];
}
if(isset($_POST["11th"])){
	$_SESSION['sec_id']=$sec_id="11th";
	echo $_SESSION['sec_id'];
}
if(isset($_POST["10th"])){
	$_SESSION['sec_id']=$sec_id="10th";
	echo $_SESSION['sec_id'];
}
if(isset($_POST["9th"])){
	$_SESSION['sec_id']=$sec_id="9th";
	echo $_SESSION['sec_id'];
}
if(isset($_POST["8th"])){
	$_SESSION['sec_id']=$sec_id="8th";
	echo $_SESSION['sec_id'];
}
if(isset($_POST["7th"])){
	$_SESSION['sec_id']=$sec_id="7th";
	echo $_SESSION['sec_id'];
}
if(isset($_POST["6th"])){
	$_SESSION['sec_id']=$sec_id="6th";
	echo $_SESSION['sec_id'];
}if(isset($_POST["5th"])){
	$_SESSION['sec_id']=$sec_id="5th";
	echo $_SESSION['sec_id'];
}
if(isset($_POST["4th"])){
	$_SESSION['sec_id']=$sec_id="4th";
	echo $_SESSION['sec_id'];
}
if(isset($_POST["3rd"])){
	$_SESSION['sec_id']=$sec_id="3rd";
	echo $_SESSION['sec_id'];
}
if(isset($_POST["2nd"])){
	$_SESSION['sec_id']=$sec_id="2nd";
	echo $_SESSION['sec_id'];
}
if(isset($_POST["1st"])){
	$_SESSION['sec_id']=$sec_id="1st";
	echo $_SESSION['sec_id'];
}
if(isset($_POST["nursery"])){
	$_SESSION['sec_id']=$sec_id="nursery";
	echo $_SESSION['sec_id'];
}if(isset($_POST["kg"])){
	$_SESSION['sec_id']=$sec_id="kg";
	echo $_SESSION['sec_id'];
}
if(isset($_POST["proup"])){
	header("Location:img.php");
	}
	if(isset($_POST["addto"])){
	header("Location:addTopic.php");
	}
if(isset($_POST["sign"])){
	header("Location:signup.php");
	}
if(isset($_POST["chpass"])){
	header("Location:chpass.php");
	}
if(isset($_POST["logout"])){
	header("Location:logout.php");
	}
if(isset($_POST["database"])){
	header("Location:http://localhost/phpmyadmin/sql.php?db=project&table=userdata&pos=0");
	}
	
$con=mysqli_connect("localhost","root","","project");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * FROM $sec_id";
$retval = mysqli_query( $sql, $con );
if ($result=mysqli_query($con,$sql))
  {
  $rowcount=mysqli_num_rows($result);
  for($i=0;$i<$rowcount;$i++){
	  ?>
	  <script language=javascript>
	  document.getElementById('sec_data').innerHTML+="<iframe width='300' height='180' class=video src='<?php echo $rowcount[2] ?>' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture'allowfullscreen></iframe>";
	  </script>
	  <?php
  }
  ?><div class="sec_data" id="sec_data">
<center><h1><?php echo $sec_id; ?></h1></center>
<?php
 while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
?>
<iframe width='300' height='180' class=video src="<?php echo "{$row['link']}";?>" frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture'allowfullscreen></iframe>
<?php
 }
 ?>
</div>
 <?php
  }
?>