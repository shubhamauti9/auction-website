<?php    


function sending($email,$otp,$id)
{
	
	$message = "One Time Password for verification OTPID: ".$id." and PASSWORD: ".$otp ;
	$subject = "OTP for verification";
	$headers = 'From: BOLY  bolyml19@gmail.com ';
	if(mail("$email",$subject,$message,$headers))
	{
		return 1;
	}
	else
	{
		return 0;
	}
}


?>