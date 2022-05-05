<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "PHPMailer/src/Exception.php";
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$name = trim($_POST["formInputName"]);
$email = trim($_POST['formInputEmail']);
$phone = trim($_POST['formInputPhone']);
$text = trim($_POST['formInputTextarea']);


$mail = new PHPMailer();
$mail->IsSMTP();
$mail->CharSet = "UTF-8";
$mail->Host = "salonkimjoon.com";
$mail->SMTPAuth = true;
$mail->Username = "info@salonkimjoon.com";
$mail->Password = "Shinee123@";

$mail->From = "info@salonkimjoon.com";
$mail->FromName = "Kim Joon";
$mail->AddAddress("fsunshine99@gmail.com", "Kim Joon Hair");
// set word wrap to 50 characters
$mail->WordWrap = 50;
// set email format to HTML
$mail->IsHTML(true);
$mail->Subject = "Contact Form Index Page";


$mail->Body = '<span style="font-family:Times New Roman, sans-serif; font-size:20px">'
    .
    "Name: " . $name . "<p>" .
    "Email: " . $email . "<p>" .
    "Phone: " . $phone . "<p>" .
    "Text: " . $text . "<p>"
    . '</span>';
$mail->AltBody = "Contact Form Index Page";

// if (!$mail->Send()) {
//     echo "Lỗi gửi không thành công email thông báo đến. <p>";
//     echo "Error: " . $mail->ErrorInfo;
//     exit;
// }

?>

<html>
<div class="secondary">
    <h3>Bạn đã đặt lịch hẹn thành công, nhớ đến đúng giờ bạn nhé </h3>
</div>

</html>