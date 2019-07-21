<?php
$to = 'pnssoftwares7@gmail.com';

$subject = 'Website Change Request';

$headers = "From: " . strip_tags($_POST['req-email']) . "\r\n";
$headers .= "Reply-To: ". strip_tags($_POST['req-email']) . "\r\n";
$headers .= "CC: susan@example.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = '<html><body>';
$message .= '<img src="https://drive.google.com/file/d/1zLMWSdFfXnaWM0IcyRMidzgJbNhh-9GT/view?usp=sharing" width="50px" height="50px"/>';

$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['req-name']) . "</td></tr>";
$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['req-email']) . "</td></tr>";
$message .= "<tr><td><strong>Type of Change:</strong> </td><td>" . strip_tags($_POST['typeOfChange']) . "</td></tr>";
$message .= "<tr><td><strong>Urgency:</strong> </td><td>" . strip_tags($_POST['urgency']) . "</td></tr>";
$message .= "<tr><td><strong>URL To Change (main):</strong> </td><td>" . $_POST['URL-main'] . "</td></tr>";
$addURLS = $_POST['addURLS'];
if (($addURLS) != '') {
    $message .= "<tr><td><strong>URL To Change (additional):</strong> </td><td>" . strip_tags($addURLS) . "</td></tr>";
}
$curText = htmlentities($_POST['curText']);           
if (($curText) != '') {
    $message .= "<tr><td><strong>CURRENT Content:</strong> </td><td>" . $curText . "</td></tr>";
}
$message .= "<tr><td><strong>NEW Content:</strong> </td><td>" . htmlentities($_POST['newText']) . "</td></tr>";
$message .= "</table>";
$message .= "</body></html>";
mail($to, $subject, $message, $headers);

?>


