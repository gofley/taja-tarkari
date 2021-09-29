<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>login</title>
  <link rel="stylesheet" type="text/css" href="../styles.css">
</head>
<body>
  <center>
    <div class="header">
    <h2>Login</h2>
  </div>
   
  <form method="post" action="login.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label>Username</label><br>
      <input type="text" name="username" >
    </div><br><br>
    <div class="input-group">
      <label>Password</label><br>
      <input type="password" name="password">
    </div><br><br>
    <div class="input-group">
      <button type="submit" class="btn" name="login_user">Login</button>
    </div>
    <p>
      Not yet a member? <a href="admin_register.php">Sign up</a>
    </p>
  </form>
  </center>
</body>
</html>