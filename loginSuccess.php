<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="main.css">
    <title>Messenger</title>
  </head>
  <body>
      <div id="container">
    <h2>Send a message to:</h2>
    
    <?php
        $connection = new mysqli("localhost","timohh97_admin1","449060data","timohh97_phpdata");
        
        $query = "SELECT * FROM messenger";
        
        $result = mysqli_query($connection,$query);
        
        
        echo '<form action="mailServer.php" method="post">
        <select name="dropdown">'; 
        
        while($row= mysqli_fetch_row($result)) {
            echo '
                
            <option value="'.$row[1].'">'.$row[1].'</option>';
               }

        echo '</select><br><br>
        <textarea type="text" name="message" placeholder="Your message...." required></textarea><br><br>
        <button type="submit" name="submit">Send message</button></form>';
        
        ?>
        
        
    
    <br>
    <a href="index.html">Logout</a>
    </div>
  </body>
</html>