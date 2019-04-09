<?php
$to ='test@RenanBatronelMones@gmail.com';
$subject ='this is just a test message';
$message ='<h1>hi there</h1><p> thanks for cooperation.</p>';
$headers ="From: The Sender Name <sender@RenanBatronelMones@gmail.com>\r\n";
$headers .="Reply-To:replyto@RenanBatronelMones@gmail.com\r\n";
$headers .="Content-type: text/html\r\n";
mail($to, $subject, $message, $headers);
?>