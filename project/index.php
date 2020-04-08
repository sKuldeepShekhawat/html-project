<!DOCTYPE html>
<html>
<head>

  <title>Ask D2</title>
  <link rel="icon" type="image/png" href=logo1.png size=20*16>
 <link rel="stylesheet" href="dropdown.css">
<style>
pre{
	font-family:sans-serif;
	font-size:13px;
}
.back{
	width:100%;
	height:100%;
	background:url("siteImg/moon.jpg") repeat-x;
	background-size: 75% ;
}
.data{

}
.rocket { top:100px;left:1200px;  center; position:absolute;animation:rotate 3s cubic-bezier(0.4,0.1,1,0.4);  }
@keyframes rotate { 
0%{top:600px;left:-150px;}

100%{top:100px;left:1200px;transform-origin:0%}
 }

.course{
	width:100%;
	height:100%;
	background:transparent;
	position:relative;
	font-weight:bolder;
}
.list{
	position:absolute;
	width:150%;
	left:-150%;
	height:420px;
	top:-420px;
	padding:0;
	color:#123456;
	
}
.list:hover{
	height:460px;
}

.cbsc{
	width:50%;
	padding:20px;
	position:relative;
	color:white;
	border-radius:10px;
	font-weight:bolder;
	background:transparent;
	border:1px solid;
	transition:all 0.3s;
}
.cbsc:hover{
	background:orange;
}
	
.jee{
	width:95%;
	padding:20px;
	position:relative;
	color:white;
	border-radius:10px;
	font-weight:bolder;
	background:transparent;
	border:1px solid;
	transition:all 0.3s;
}
.jee:hover{
	background:orange;
}
.about{
	width:1000px;
	height:550px;
	background:rgba(0,0,0,0.6);
	position:absolute;
	top:100px;
	left:50%;
	transform:translateX(-50%);
	border:1px solid black;
	border-radius:10px;
	box-shadow:15px 15px 30px 10px black;
	color:white;
	text-shadow:1px 1px 5px black;
	display:none;
	animation:appea 1s linear;
	opacity:1;
}
.abimg{
	width:150px;
	height:200px;
	border:1px solid black;
	margin-right:30px;
	position:relative;
	left:50px;
	top:40px;
	transition:all 0.2s;
	
}
@keyframes appea {from{top:200%;width:10px;opacity:0;overflow:hidden}
					to{top:40;width:1000px;opacity:1}}

@keyframes appe {from{top:200%;width:10px;opacity:0;overflow:hidden}
					to{top:40;width:800px;opacity:1}}

.abimg:hover{
	box-shadow:0px -10px 1px 10px;
}
.id{
	background:red;
	position:absolute;
	text-align:center;
	padding:10px;
	transition:all 0.2s;
	opacity:0;
}
#divi{
	left:20px;
	top:250px;
	width:210px;	
}
#ayu{
	left:204.5px;
	top:250px;
	width:210px;	
}
#kullu{
	left:388.75px;
	top:250px;
	width:210px;	
}
#tom{
	left:573px;
	top:250px;
	width:210px;	
}
#me{
	left:758px;
	top:250px;
	width:210px;	
}
.close{
	position:absolute;
	left:105%;
	top:-5%;
	color:white;
	
	font-size:60px;
	cursor:pointer;
}
.close:hover{
	color:red;
}
.aboutcon{
	width:100%;
	height:100%;
	position:absolute;
	background:rgba(99,99,99,0.6);
	z-index:9999;
	display:none;
	animation:appear 0.4s linear;
}
@keyframes appear {from{top:-100%;width:10px}
					to{top:0;width:100%;}}
.concon{
	position:absolute;
	z-index:9999;
	top:0;
	width:100%;
	height:100%;
	background:rgba(0,0,0,0.7);
	display:none;
	animation:appear 0.4s linear;
}
.con{
	width: 800px;
	height:500px;
	background: #fff;
	border-radius: 10px;
	padding: 20px ;
	transform:translate(-50%);
	position:absolute;
	top:40px;
	left:50%;
	background:white;
	animation:appe 1s linear;
}
.conin{
	outline: none;
	width:100%;
	padding:15px 10px 4px 10px;
	font-size:20px;
	border-top:1px solid white;
	border:0;
	border-bottom:2px solid grey;
	margin-bottom:40px;
}
textarea{
	resize:none;
	outline: none;
	width:100%;
	height:150px;
	padding:15px 10px 4px 10px;
	font-size:20px;
	border-top:1px solid white;
	border:0;
	border-bottom:2px solid grey;
	margin:10px;
}

textarea:focus, input:focus {
  border-color: transparent !important;
}
.conform{
	width: 100%;
	display: -webkit-box;
	display: -webkit-flex;
	display: -moz-box;
	display: -ms-flexbox;
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
	padding-bottom: 68px;
}
.button{
  padding: 0 20px;
  min-width: 160px;
  height: 50px;
  background-color: #ff4b5a;
  border-radius: 25px;
  font-size: 16px;
  color: #fff;
  line-height: 1.2;
  transition: all 0.4s;
  border:0px;
  box-shadow: 0 10px 30px 0px rgba(255, 75, 90, 0.5);
}
.button:hover{
	background-color: #333333;
  box-shadow: 0 10px 30px 0px rgba(51, 51, 51, 0.5);
}
p{
	padding:10px;
	font-size:30px;
	
}
#t1{
	width:45%;
	
}
</style>

<script language=javascript>
function cbse(){
	document.getElementById("course").innerHTML="<a href='login.php'><button class=cbsc>NURSERY</button><a href='login.php'><button class=cbsc>KG</button><a href='login.php'><button class=cbsc>I</button></a><a href='login.php'><button class=cbsc>II</button></a><a href='login.php'><button class=cbsc>III</button></a><a href='login.php'><button class=cbsc>IV</button></a><a href='login.php'><button class=cbsc>V</button></a><a href='login.php'><button class=cbsc>VI</button></a><a href='login.php'><button class=cbsc>VII</button></a><a href='login.php'><button class=cbsc>VIII</button></a><a href='login.php'><button class=cbsc>IX</button></a><a href='login.php'><button class=cbsc>X</button></a><a href='login.php'><button class=cbsc>XI</button></a><a href='login.php'><button class=cbsc>XII</button></a>"
}
function jee(){
	document.getElementById("course").innerHTML="<a href='login.php'><button class=jee>Physics</button></a><a href='login.php'><button class=jee>Chemistry</button></a><a href='login.php'><button class=jee>Mathematics</button></a><a href='login.php'><button class=jee>Sample Papers</button></a><a href='login.php'><button class=jee>Crash Course</button></a><a href='login.php'><button class=jee>Ask Doubt</button></a><a href='login.php'><button class=jee>About</button></a>"
}
function nda(){
	document.getElementById("course").innerHTML="<a href='login.php'><button class=jee>Mathematics</button></a><a href='login.php'><button class=jee>English</button></a><a href='login.php'><button class=jee>Physics</button></a><a href='login.php'><button class=jee>Chemistry</button></a><a href='login.php'><button class=jee>Current Affairs</button></a><a href='login.php'><button class=jee>Sample Papers</button></a><a href='login.php'><button class=jee>About</button></a>"
}
function divi(){
	document.getElementById('divi').style.top='300px';
	document.getElementById('divi').style.opacity='1';
}
function diviout(){
	document.getElementById('divi').style.top='250px';
	document.getElementById('divi').style.opacity='0';	
}
function ayu(){
	document.getElementById('ayu').style.top='300px';
	document.getElementById('ayu').style.opacity='1';
}
function ayuout(){
	document.getElementById('ayu').style.top='250px';
document.getElementById('ayu').style.opacity='0';	
}
function kullu(){
	document.getElementById('kullu').style.top='300px';
	document.getElementById('kullu').style.opacity='1';
}
function kulluout(){
	document.getElementById('kullu').style.top='250px';
	document.getElementById('kullu').style.opacity='0';
}
function tom(){
	document.getElementById('tom').style.top='300px';
	document.getElementById('tom').style.opacity='1';
}
function tomout(){
	document.getElementById('tom').style.top='250px';
	document.getElementById('tom').style.opacity='0';
}
function doggie(){
	document.getElementById('me').style.top='300px';
	document.getElementById('me').style.opacity='1';
}
function doggieout(){
	document.getElementById('me').style.top='250px';
	document.getElementById('me').style.opacity='0';
}
</script>

</head>
<body>
<nav class="menu">
  <ol>
    <li class="menu-item" style="padding:0px 0px;background:lightgreen"><a href="#0"><img src=logo2.png height=70px></a></li>
    <li class="menu-item" onClick="document.getElementById('aboutcon').style.display='block';document.getElementById('about').style.display='block'"><a href="#0" >About</a></li>
    <li class="menu-item">
      <a href="#0">Courses</a>
      <ol class="sub-menu">
	  <div id=mainnav>
        <li class="menu-item"><a onmouseover="cbse()">Cbse</a></li>
        <li class="menu-item"><a onmouseover="jee()">IIT JEE</a></li>
		<li class="menu-item"><a onmouseover="nda()">NDA/CDS Entry</a></li>
        <li class="menu-item"><a onmouseover="nda()">Graduate</a></li>
		<li class="menu-item"><a onmouseover="nda()">Post Graduate</a></li>
		<li class="menu-item"><a onmouseover="nda()">Library</a></li>
		<li class="menu-item"><a onmouseover="nda()">Whats going Around?</a></li>
		<li class=list><div class=course id=course>

		</div></li>
</div>
      </ol>
    </li>
    <li class="menu-item">
      <a href="#0">Get In</a>
      <ol class="sub-menu">
        <li class="menu-item"><a href="login.php">Login</a></li>
        <li class="menu-item"><a href="signup.php">Enroll/Register</a></li>
      </ol>
    </li>
    <li class="menu-item" onClick="document.getElementById('concon').style.display='block';document.getElementById('con').style.display='block'"><a href="#0">Contact</a></li>
  </ol>
</nav>
<div class=back>
<div class="stars">
</div>
<div class="twinkling"><img src="siteImg/b.png" height="150px" class="rocket"></div>
<div class="clouds"></div>
<div class=data>
</div>
</div>
<div class=aboutcon id=aboutcon>
<div class=about id=about>
<br>
<center><h1>About</h1></center>
<span class=close id=close onClick="document.getElementById('aboutcon').style.display='none';document.getElementById('about').style.display='none'">&times;</span>
<span class=id id=divi >
DIVYA GUPTA<br>
<pre>JAVA SCRIPT AND PHP CODES</pre>
</span>
<span class=id id=ayu> 
AYUSH GOUR<br>
<pre>HTML CODES</pre>
</span>
<span class=id id=kullu> 
KULDEEP SINGH<br>
<pre>PROJECT HEAD
CSS CODES</pre>
</span>
<span class=id id=tom>
DIKSHA SRIVASTAVA<br>
<pre>SERVER MANAGEMENT</pre>
</span>
<span class=id id=me>
SHIVANSHU YADAV<br>
<pre>DATABASE MANAGEMENT</pre>
</span>
<img src="siteImg/TEDDY.jpeg" alt="Divya Gupta" class=abimg onmouseover="divi()"onmouseout="diviout()">
<img src="siteImg/AYUSH.jpeg" alt="Ayush Gour" class=abimg onmouseover="ayu()"onmouseout="ayuout()">
<img src="siteImg/KULLU BABY.jpeg" alt="Kuldeep Shikhawat" class=abimg onmouseover="kullu()"onmouseout="kulluout()">
<img src="siteImg/diksha.jpg" alt="Diksha Srivastava" class=abimg onmouseover="tom()"onmouseout="tomout()">
<img src="siteImg/DOGGIE.jpg" alt="Shivanshu Yadav" class=abimg onmouseover="doggie()"onmouseout="doggieout()">

</div>
</div> 
<div class=concon id=concon>
<div class=con id=con>
<span class=close id=close onClick="document.getElementById('concon').style.display='none';document.getElementById('con').style.display='none'">&times;</span>
<center><span style="font-size:50px;font-weight:bolder;color:grey;text-shadow:1px 1px 3px black">CONTACT</span></center><br><br>
<form class=conform>
<input type=text class=conin id=t1 placeholder="ENTER YOUR NAME" required>

<input type=text class=conin id=t1 placeholder="MOBILE NO" required>
<input type=text class=conin  placeholder="ENTER EMAIL" required>
<p>Feel free to drop a message.</p>
<textarea placeholder="Your Message" required></textarea>
<input type=submit value=submit class="button">
<p style="font-size:15px;color:red;">mail : askd2@protonmail.com <br>Ring Us:  9876543XXX</p>
</form>

</div>
</div> 
</body>
</html>
