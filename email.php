<!DOCTYPE html>
<html>
<head>
    <title>Email</title>
</head>
<body>
    <?php
    // the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
try{
    mail("bhardiyajeet@gmail.com","My subject",$msg);
    echo "Email Sent";
}
catch(Exception $e){
    echo "Error: " . $e->getMessage();
}
?>
</body>
</html>

