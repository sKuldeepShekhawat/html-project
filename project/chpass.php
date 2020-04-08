<?php
session_start();
$conn=new mysqli("localhost","root","","project");
if ($conn->connect_error) {	

}
else{
	if(isset($_POST['chsub'])){
		$opass=$_POST['opass'];
		$npass=$_POST['npass'];
		$ses=$_SESSION['id'];
		$sql="SELECT * FROM userdata WHERE id=$ses";
	$result = $conn->query($sql);
	if (mysqli_num_rows($result) > 0) {
    while($row = $result->fetch_assoc()) {
		if($opass==$row["pass"]){
		$chp = "UPDATE userdata SET pass=$npass WHERE id=$ses";
if ($conn->query($chp) === TRUE) {
    echo "Password updated successfully,you will be directed to login page soon";
	?>
	<script>
	alert("Password updated successfully, you will be directed to login page soon!!!!")
	</script>
	<?php
	header("Location:logout.php");
} else {
    echo "Error updating record: " . $conn->error;
}

    }
	else{
		echo "'OLD PASSWORD' is Wrong Password";
	}
	}
}
}
}

?>

<html>
<head>
<title>Change Password</title>
<style>
body{
	margin:0px;
	text-align:left;
	background:url("siteImg/html3.jpeg");
	background-size: 100% 100%;
	font-size: 20px;
	color: #000000;
	font-family: algerian;
}
/*form {
  border: 3px solid white;
}*/
.majboori{
	font-family:Love Ya Like A Sister;
	font-weight:bolder;
	color:white;
	background:rgba(99,99,99,0.4);
	text-shadow:1px 1px 3px black;
	border-radius:5px;
	width:400px;
	text-align:center;
	padding:20px;
	transform:translate(-90%);
	position:relative;
	left:50%;
	top:6%;
}
input[type=password]{
	width:100%;
	padding:8px;
	font-size:15px;
	border: 1px;
	border-radius:10px;
}
input[type=button],input[type=submit]{
	padding:10px;
	width:47.5%;
	margin-right:-4;
	left:-2px;
	border-radius:10px;
}
</style>
</head>
<body>
<form method=post id=f1 class="majboori" name="majboori">
<h2>CHANGE PASSWORD</h2>
<label>OLD PASSWORD</label>
<input type=password placeholder="OLD PASSWORD" name=opass required>
<label>NEW PASSWORD</label>
<input type=password placeholder="NEW PASSWORD" name=npass id=npass required>
<label>CONFIRM NEW PASSWORD</label>
<input type=password placeholder="CONFIRM NEW PASSWORD" name=cnpass id=cnpass required>
<input type=submit onClick="check()" name="chsub">
</form>
<script>
function check(){
a=document.getElementById('npass').value
b=document.getElementById('cnpass').value
if(a!=b){
	document.getElementById('f1').reset();
	alert('Your Passwords Does not match with CONFIRM PASSWORD');
}
}
</script>
</body>
</html>