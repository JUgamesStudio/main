<?php>

$name = $_POST['name']
$email = $_POST['email']
$subject = $_POST['subject']
$messaage = $_POST['messaage']

$mailheader = "From:".$name."<".$email.">"\r\n"

$recipient = "msjstudio2828@gmail.com";

mail($recipient, $subject, $messaage, $mailheader)
or die("Error!");

echo'alert("Hello! I am an alert box!!");';



?>