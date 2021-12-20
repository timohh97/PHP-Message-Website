<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="main.css">
    <title>Delete account</title>
  </head>
  <body>
      <div id="container">
    <h2>Delete my account</h2>
    <form action="deleteLogic.php" method="post">
      <input type="text" name="username" placeholder="Username" required><br>
      <br>
      <input type="password" name="password" placeholder="Password" required minlength="6"><br>
      <br>
      <button type="submit" name="submit">Delete</button>
    </form>
    <br>
    <a href="register.php">Create a new account</a>
    <br>
    <br>
    <a href="index.html">Login</a>
    </div>
  </body>
</html>