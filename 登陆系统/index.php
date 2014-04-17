<html>
<head>
</head>
<body>
  <?php
    if (!$_COOKIE["mycookie_name"]) {
      ?>
  <form action="login.php" method="post">
    用户名 : <input type="text" name="name"/>
    密码 : <input type="password" name="password"/>
    <input type="submit"/>
  </form>
  <a href="SignUp.php">注册新用户</a><br>
<?php } else { ?>
  You already logged in. <a href="logout.php">logout</a>
<?php } ?>
</body>
</html>

