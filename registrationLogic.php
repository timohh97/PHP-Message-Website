<?php

$database = new mysqli('localhost','timohh97_admin1','449060data','timohh97_phpdata') or die();

  if($_POST['password']==$_POST['repeatPassword'])
  {

    $flag = true;

    $newusername = $_POST['username'];

    $queryForUsernameCheck = "SELECT username FROM messenger";

    $column= $database->query($queryForUsernameCheck);

    $usernameArray = Array();

    while($result = $column->fetch_assoc())
    {
       $usernameArray[] = $result['username'];
    }

    foreach($usernameArray as $element)
    {
      if($element==$newusername)
      {
        echo "<script> alert('This username already exists!') </script>";
           echo "<script> window.location = 'https://www.message.timoschessl.com/register.php'</script>";
        $flag=false;
      }
    }

    if($flag)
    {
    $password = $_POST['password'];
    $email = $_POST['email'];
    $id = rand();
    
    $passwordHashed = password_hash($password,PASSWORD_DEFAULT);

    $queryForInsert = "INSERT INTO messenger (id,username,password,email) VALUES ('$id','$newusername','$passwordHashed','$email')";

    $database->query($queryForInsert);

    echo "<script> alert('Created new account successfully!') </script>";
    echo "<script> window.location = 'https://www.message.timoschessl.com/register.php'</script>";
    }


  }
  else {
    echo "<script> alert('The passwords dont match!') </script>";
       echo "<script> window.location = 'https://www.message.timoschessl.com/register.php'</script>";
  }

?>