<?php
if(isset($_FILES['uploadedImage']) && ($_FILES['uploadedImage']['error'] == UPLOAD_ERR_OK))
{
	require_once('PHPMail/PHPMailerAutoload.php');
	
	$fromAddr = $_POST['email'];
	$bodytext = $_POST['Description'];
	$file_to_attach = $_FILES["uploadedImage"]["tmp_name"];
	
	$emailName = explode('@', $fromAddr);
	$emailName = $emailName[0];
	
	$fileName = $_FILES['uploadedImage']['name'];
	$ext = pathinfo($fileName, PATHINFO_EXTENSION);
	$newFileName = date('m')."_".$emailName.".".$ext;
	
	$email = new PHPMailer;
	
	//$email->SMTPDebug = 2; 
	
	$email->isSMTP();	// telling the class to use SMTP
	$email->SMTPAuth = false;	// Enable SMTP authentication
	$email->Port = 25;	// TCP port to connect to
	$email->Host = "relay-hosting.secureserver.net";	// SMTP server
	$mail->FromName = "nicholls@james.com"; 
//	$email->Username = "hello@mmosermedia.com";	// SMTP username
//	$email->Password = "mm0s3rL0nd0n";	// SMTP password
//	$email->SMTPSecure = 'ssl';	// Enable TLS encryption, `ssl` also accepted
	$email->setFrom('nicholls@james.com', $emailName." - Photo Submission");
	$email->AddAddress('james@nicholls.com');
	
	$email->Subject = 'Photography Challenge';
	$email->Body = "New Photo Submission from ".$emailName."\n \n".$bodytext;
	$email->WordWrap = 50;
	
	$email->AddAttachment($file_to_attach, $newFileName);
	
	if(!$email->send())
	{
		header("refresh:3;url=http://localhost:80/");
		
		echo '<div id="redir" style="font-family: arial,helvetica; color:DarkSlateBlue; background-color:lightgreen; width:100%; height:100%; font-size:72px; text-align:center; vertical-align: middle; line-height: 540px;">Message could not be sent.</div>';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
		
	} else {
		
		header("refresh:3;url=http://localhost:80/");
		
		echo '<div id="redir" style="font-family: arial,helvetica; color:DarkSlateBlue; background-color:lightgreen; width:100%; height:100%; font-size:72px; text-align:center; vertical-align: middle; line-height: 540px;">Message sent successfully!</div>';		
	}
}
?>
