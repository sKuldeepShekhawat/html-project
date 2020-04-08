<?php
session_start(); 
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 83886080) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
	  $d=$_FILES['image']['name'];
$_SESSION["img1"]="$d";
$a=$_SESSION["user"];
$conn=new mysqli("localhost","root","","project");
$sql="UPDATE userdata SET img='$d' WHERE user='$a'";
if($conn->query($sql)){
	header("Location:login.php");
}
   }
?>
<html>
<head>
   <title>image insertion</title>
   <style>
body{
   margin:0px;
   text-align:left;
   background:url("siteImg/html1.jpg");
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
   color:#429ef5;
   background:rgba(218, 238, 242,0.4);
   text-shadow:1px 1px 3px black;
   border-radius:5px;
   width:400px;
   text-align:center;
   padding:20px;
   transform:translate(-50%);
   position:relative;
   left:50%;
   top:25%;
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
          <form action = "" method = "POST" enctype = "multipart/form-data" class="majboori">
         <h2>CHOOSE YOUR PROFILE IMAGE</h2>
         <input type = "file" name = "image" />
         <input type = "submit" name=sub/>
			<?php if(isset($_FILES['image'])){ ?>
         <ul>
            <li>Sent file:<?php echo $_FILES['image']['name'];?>
            <li>File size:<?php echo $_FILES['image']['size'];?>
            <li>File type:<?php echo $_FILES['image']['type'] ?>
         </ul>
			<?php } ?>
      </form>
      </body>
</html>