<?php 
require_once 'library/config.php';
require_once 'library/functions.php';
?><?php
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['comments'];
$servername="localhost";
$username="root";
$password="";
$dbname="project1";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
die("Connection Failed : ".$conn->connect_error);
}
$sql="INSERT INTO feedback(name,email,comments) VALUES ('$a','$b','$c')";
if ($conn->query($sql) === TRUE)
 {
  echo "<b>New record created successfully</b>";
}
 else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title> Auction </title>
<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="css/menu.css" type="text/css">
<link rel="stylesheet" href="css/print.css" type="text/css" media="print">
<script language="javascript" src="javascript/jquery.min.js"></script>
<script language="javascript" src="javascript/jquery.bxSlider.js"></script>
<script language="javascript" src="javascript/jcarousellite_1.0.1.js"></script>    
<!--[if IE]>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen, projection">
<![endif]-->
<style>
body{ margin-top:10px; background:#ffffff url(images/bg-body.jpg) repeat-x; }
#catBox1 { font-family:Verdana,Arial,Sans-Serif;font-size:12px; margin-top:10px;margin-bottom:10px;}
#catBox1 .title { text-align:left; font-size:16px; font-weight:bold; padding:5px; padding-left:20px; border-bottom:1px dashed #0066B3; color:#0066B3;}
.catBoxContent1 p { padding-left:10px; padding-top:10px; padding-right:10px; line-height:20px;}
.catBoxContent1 ul li{ list-style:none; display:block; padding-bottom:5px;}
.catBoxContent1 a { text-decoration:none;}

</style>
<script type="text/javascript">
	$(document).ready(function(){
        $(".newsticker-jcarousellite").jCarouselLite({
		vertical: true,
		hoverPause:true,
		visible: 3,
		auto:500,
		speed:1000
	});
});
</script>
<style>
</style>
</head>

<body>

<div class="container">
	<div id="header" class="span-24">
		<img src="images/logo.jpg" />
    </div>
 <?php include('menu.php');?>
   
  <div id="sidebar-1" class="span-5 border">
  	<?php include('left.php');?>
	
    </div>
  <div id="content" class="span-13 border">
	

<div class="span-12">
<div id="catBox1">    
<div class="title"> Feedback.</div>
<div class="catBoxContent1">


<form action="feedback.php" method="POST" name="myForm" onsubmit="return val()">

<font face="verdana" color="#A6C0CE">Your name:</font> <br>
<input type="text" name="name"  required/><br>
<br>

<font face="verdana" color="#A6C0CE">Your email:</font> <br>
<input type="text" name="email" id="email" required/><br>
<br>

<font face="verdana" color="#A6C0CE">Your comments: </font><br>
<textarea name="comments" rows="5" cols="25" required/></textarea><br><br>

<input type="Submit" value="Submit" onclick="val()"/>
<input type="reset" value="Clear">
 
</form>


</div> <!-- catBoxLeft-->
</div><!-- catBox-->
</div><!-- span-13 -->

</div>

<div class="span-6 last">
	<?php include('slider.php'); ?>

<hr/>
      <?php include('footer.php'); ?>
	  
</div>

</body>
</html>