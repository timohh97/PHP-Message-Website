<?php

$to = $_POST["dropdown"];

$database = new mysqli("localhost","timohh97_admin1","449060data","timohh97_phpdata");

$queryForRow = "SELECT * FROM messenger WHERE username='$to'";

$row = mysqli_query($database,$queryForRow);

$rowArray = mysqli_fetch_array($row);

$to = $rowArray[3];


$message = $_POST["message"];
$subject = "Timo Schessl Messenger";
$headers ="Message:";

if(strlen($message)>1)
{
    mail($to,$subject,$message,$headers);
    echo  "<script type='text/javascript'>alert('Your message was sent!');</script>";
    echo "<script>window.location = 'loginSuccess.php'</script>";
}
else
{
    echo "<script type='text/javascript'>alert('Please enter at least 2 characters for your message!');</script>";
     echo "<script>window.location = 'loginSuccess.php'</script>";
}


?>