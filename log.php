<?php

 
if(isset($_POST['register'])){
if(isset($_POST['rating'])) {
	
        $radio = $_POST['rating'];
			echo "<script>window.open('form.php','_self')</script></script>";
			}
				else{
					echo"<script>alert('Please select a fault before you submit the form')+window.open('form.php','_self')</script>";
				}
   $companyname = "CITS";
    $clientemail = $_POST['email'];
    $to = "johnhilman62@yahoo.com";
    $radio = $_POST['rating'];
    $from = $_POST['email']; 
    $report = $_POST['repo'];
    $designation= $_POST['desig'];
	$department= $_POST['dept'];
	$date = $_POST['date'];
	$fault = $_POST['message1'];
	$faultd = $_POST['message2'];
    $headers = "MIME-Version: 1.0" . "\r\n"."From:".$from;
    $headers2 = "Content-type:text/html;charset=UTF-8" . "\r\n"."From:".$to;
	
    $subject = "CITS REQUEST";
    $subject2 = "CITS REQUEST";
    $message1 = $report."
      Fault Selected:\n".$radio."\n\n"."Requested the following:"."\n"."Fault/Request:"."\n".$_POST['message1']."
	\n\n"."Fault Description:"."\n". $_POST['message2']."\n\n"."Department:"."\n\n
	".$department."\n\n"."Designation:"."\n\n".$designation. "\n\n".$date."\n\n";
    $message2 = "Here is a copy of your message. Print and take the copy to CITS 
	for authentication ".$report."\n\n".$message1 ;
   
    mail($to,$subject,$message1,$headers);
//Send the message to the clents email
    mail($clientemail,$subject2,$message2,$headers);
   echo"<script>alert('Your request has been successfully submitted,our support staff shall contact you as soon as possible') + window.open('form.php','_self') </script>";
			

    }
	

?>