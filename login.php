<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"  />
  <link rel="stylesheet" type="text/css" href="/style/main.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src=""></script>
  <script src="/JS/login.js"></script>
</head>
<body>
  <div id="main">
    <form>
      <h3>Login</h3>
      <input type="text" name="username" placeholder="username" />
      <input type="password" name="password" placeholder="password" />
      <button id="submit">login</button>
    </form>
  </div>
</body>
</html>
