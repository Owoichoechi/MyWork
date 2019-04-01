<?php

session_start();


if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");    
}
else {
    
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
}
?>
<?php
if(isset($_POST['radio'])) {
    $value = $_POST['radio'];
    if($value == "1") {
        echo "SOMETHING HERE FOR VALUE 1";
    } elseif($value == "2") {
        echo "SOMETHING HERE FOR VALUE 2";
    }elseif($value == "3"){
	echo "SOMETHING HERE FOR VALUE 3";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Requisition Form</title>
<style>
.error {color: #FF0000;}
</style>
</head>
<link rel="stylesheet" type="text/css" href="myProject.css"/>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<body>
<font style="text-align:center;margin-left:48%">
<a href="logout.php" align="center">Log Out</a>
</font>
<br/>
<div class= "header">
<table border="0">
<tr>
<td width="60px"></td>
<td>
<img src="http://directtocits.000webhostapp.com/logo.jpg" style="border-radius:90%;height:90px;width:90px;padding:4px" />
</td>
<td></td>
<td>
<h3> CENTRE FOR INFORMATION AND TELECOMMUNICATION SERVICE(CITS)</h3>
</td>
</tr>
</table>
<?php
echo "<b>".date('l\, F jS\, Y ')."</b>";
?>
</div>
<div  align="center" style="background:orange;opacity:0.5%">
 <form  method="POST" action="log.php">
 <div class="radio">
 FAULT/REQUEST FORM<br><br>
NB: Please mark the appropriate
<br />
<p>

<label>
<input type="radio" name="rating" value="SYSTEM FAULT" />
SYSTEM FAULT(S)
</label>
<label>
<input type="radio" name="rating"  value="ACCESSORIES"/>
ACCESSORIES
</label>
<label>
<input type="radio" name="rating" value="DEVICE REPLACEMENT"/>
DEVICE REPLACEMENT
</label>
</p>


  
  
</div>


<div class= "input-group"  align="center">
<label>Your Name</label>
<input type="text" value="<?=$first_name." ".$last_name ;?>" name="repo" required>
</div>
	<div class= "input-group"   align="center">
<label>Your email </label>
<input type="text" value="<?=$email ;?>" name="email" required>
</div>	<div class= "input-group">
<label>Designation</label>
<input type="text" name="desig" required>
</div>
	<div class= "input-group"  align="center">
<label>Department</label>
<input type="text" name="dept" required>
</div>

<fieldset>
<legend>Fill Out Month/Date/Year</legend>
<br> <br>
  
  
  
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker").datepicker();
  } );
  </script>
 
<input type="text" id="datepicker" name="date" required>
 
 
</fieldset>
<div class= "input-group" align="center">
<textarea style="margin-left:36%;width:260px" type="text" id="message" placeholder="FAULT/REQUEST" cols="30" rows="5" name="message1" required></textarea>
</div>
	<div class= "input-group" align="center">
<textarea style="margin-left:36%;width:260px" type="text" id="message" placeholder="Fault Description" cols="30" rows="5" name="message2" required></textarea>
</div>
<div class= "input-group" align="center">
<button style="margin-left:36%;width:260px" type="submit" name="register" class="btn"> Submit </button>
</div>

</form>
</div>
<h3> All filled and duly signed form should be submitted for prompt action<span>.....</span></h3>




</body>

</html>