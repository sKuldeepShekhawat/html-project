<html>
<style>
body{
	background:red
}
h1{
	font-weight:bolder;
	font-family:sans-serif;
	color:white;
	font-size:70px;
}
#nav_log{
	box-shadow:;
}
</style>
<body>
<div id=nav_log>
<h1 id="myP" >This is an example paragraph.</h1>
<button type="button" >Add shadow to text</button>
<p><b>Note:</b> Internet Explorer 9 and earlier do not support the textShadow property.</p>
</div>
<script>
function myFunction() {
	w=1;x=x1=0;y=y1=0;z=0;
var a=x+"px "+y+"px "+z+"px rgba(0,0,0,0.1)"
var b=","
var c=x+"px "+y+"px "+z+"px"+w+"px rgba(0,0,0,0.1)"
for(i=0;i<60;i++){
	a+=b+(x+=1)+"px "+(y+=0.2)+"px "+(z)+"px rgba(0,0,0,0.4)";
	c+=b+"<br>"+(x1+=1)+"px "+(y1+=1)+"px "+z+"px "+w+"px rgba(0,0,0,0.6)";
}
	document.write(c);
  document.getElementById("myP").style.textShadow = a
  document.getElementById("nav_log").style.boxShadow = c
}
myFunction()
</script>
</body>
</html>
