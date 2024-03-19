<?php
$subject = 'MY TEST EMAIL';
echo '============' . "\n";
echo $subject . "\n";
echo '============' . "\n";
$firstName = 'Valentin';
$text1 = "firstName : {$firstName}" . "\n";
$text2 = "This is the second line of the message.";
$text3 = "And this is the third line.";
$text4 = "We can combine multiple lines into one message.";
$text5 = "This email is just a test.";
$text6 = "Have a nice day!";
$message = $text1 . $text2 . $text3. $text4. $text5;
$message .= $text6;
echo $message;
$headers = 'From:student.539a.SMTP@gmail.com';
if (mail('valentin.tsekhmystro@gmail.com', $subject, $message, $headers)) {
    echo "\nEmail sent successfully!";
} else {
    echo "\nFailed to send email.";
}

?>
