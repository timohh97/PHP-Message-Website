<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="main.css">
    <title>Create a new account</title>
  </head>
  <body>
      <div id="container">
    <h2>Create a new account</h2>
    <form action="registrationLogic.php" method="post">
      <input type="text" name="username" placeholder="New username" required>
      <br>
      <br>
      <input type="email" name="email" placeholder="Your email adress" required>
      <br>
      <br>
      <input type="password" name="password" placeholder="Password" required>
      <br>
      <br>
      <input type="password" name="repeatPassword" placeholder="Repeat password" required>
      <br>
      <br>
      <button type="submit" name="submit">Create a new account</button>
    </form>
    <br>
    <a href="index.html">I already have an account (Login)</a>
    </div>
  </body>
</html>