 <?php
require("phpmailer/class.phpmailer.php");
$mail = new PHPMailer();  // Instantiate your new class
$mail->IsSMTP();          // set mailer to use SMTP
$mail->SMTPAuth = true;   // turn on SMTP authentication
$mail->Host = "smtp.gmail.com"; // specify main and backup server
$mail->SMTPSecure= "ssl"; //  Used instead of when only POP mail is selected
$mail->Port = 465;        //  Used instead of 587 when only POP mail is selected

$mail->Username = $_POST[mail];  // SMTP username, you could use your google apps address too.
$mail->Password = $_POST[pwd]; // SMTP password

$mail->From = $_POST[mail]; //Aparently must be the same as the UserName
$mail->FromName = $_POST[from];
$mail->Subject = $_POST[subject];
$mail->Body = $_POST[body];
$value=array();
$value[0]=$_POST[attachment];
for($i=0;$i<1;$i++)
	{
		$mail->AddAttachment($value[$i]);
	}
//$mail->AddAttachment($value);
$mail->AddAddress($_POST[tomail],$_POST[to]);

if(!$mail->Send())
{
  echo "There was an error sending the message:" . $mail->ErrorInfo;
  exit;
}
echo "Done…\n";

?>
 
