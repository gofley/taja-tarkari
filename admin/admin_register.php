<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
</head>
<body>
  
  <center>
    <div class="header">
    <h2>Register</h2>
  </div>
  <form method="post" action="admin_register.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label>Username</label><br>
      <input type="text" name="username" value="<?php echo $username; ?>">
    </div><br><br>
   
    <div class="input-group">
      <label>Password</label><br>
      <input type="password" name="password_1">
    </div><br><br>
    <div class="input-group">
      <label>Confirm password</label><br>
      <input type="password" name="password_2">
    </div><br><br>
    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    <p>
      Already a member? <a href="login.php">Sign in</a>
    </p>
  </form>
  </center>
</body>
</html>