<?php

if(isset($_POST['submit'])){
 $name = $_PoOST['name'];
 $subject = $_PoOST['subject'];
 $mailFrom = $_PoOST['mail'];
 $message = $_PoOST['message']; 
 
 $mailTo = "dbierman@willowstick.com";
 $headers = "From: ".$mailFrom;
 $txt = "You have received an email from ".$name.".\n\n".$message; 
 
 mail($mailTo,$subject,$txt,$headers);
 header("Location: index.php?mailsend")