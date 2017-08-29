<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"  />
  <link rel="stylesheet" type="text/css" href="style/main.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src=""></script>
  <script src="JS/login.js"></script>
</head>
<body>
  <div id="main">
    <form action="phpscripts/login.php">
      <input type="text" name ="username" placeholder="Username" />
      <input type="text" name ="e-mail" placeholder="e-mail" />
      <input type="text" name ="firstname" placeholder="firstname" />
      <input type="text" name ="lastname" placeholder="Lastname" />
      <input type="number" name ="age" placeholder="age" />
      <input class="password" id="password" type="password" name ="password" placeholder="password"  />
      <input class="password" id="second_password" type="password" name ="second_password" placeholder="repeat password"  />
      <input type="submit"></input>
    </form>
  </div>

</body>
</html>
