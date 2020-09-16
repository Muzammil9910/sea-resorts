<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$msg = $_POST['msg'];
$to = "muzammil1611f@aptechgdn.net,$email";
$subject = "$name . filled an information form";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Fullname</th>
<th>E-mail Address</th>
<th>Phone Number</th>
<th>Message</th>
</tr>
<tr>
<td>$name</td>
<td>$email</td>
<td>$phone</td>
<td>$msg</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: muzammil1611f@aptechgdn.net' . "\r\n";
$headers .= 'Cc: ahmedraza1612b@aptechgdn.net' . "\r\n";

mail($to,$subject,$message,$headers);

header('Location:index.php');
?>