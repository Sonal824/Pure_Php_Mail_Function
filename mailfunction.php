<?php
/*-------------------- FUNCTIONS ----------------------------*/
//SEND_MAIL
function SendEmail($to,$from,$subject,$content)
{
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$headers .= "From: ".$from."\r\n";
		$headers .= "Reply-To: ".$from."\r\n";
		$headers .= "Return-Path: ".$from."\r\n";
		$message="<html>
					<body>
						<table width='100%' border='0' cellspacing='0' cellpadding='0'>
							<tr>
								<td>".$content."</td>
							</tr>
						</table>
					</body>
					</html>";
		if(@mail($to,$subject,$message,$headers))
			return true;
		else
			return false;
}

$result  = SendEmail('email@gmail.com','sona@sona.com','Cron Job Amazon Test','456');

echo $result ; 
/*-------------------- FUNCTIONS  END----------------------------*/
?>