<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Sari Rasa</title>

  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/login/css/style.css" media="screen" type="text/css" />

</head>

<body>

  <div class="login-card">
    <h1>Masuk</h1><br>
  <form method ="post" action="<?php echo base_url('index.php/Proseslogin/aksi_login') ?>">
    <input type="text" name="Email" placeholder="Username">
    <input type="password" name="Password" placeholder="Password">
    <input type="submit" name="login" class="login login-submit" value="Login">
  </form>

 <!--  <div class="login-help">
    <a href="#">Register</a> • <a href="#">Forgot Password</a>
  </div> -->
</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

  <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>

</body>

</html>