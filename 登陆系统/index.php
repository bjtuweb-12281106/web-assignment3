<html>
<head>
</head>
<body>
  <?php
    if (!$_COOKIE["mycookie_name"]) {
      ?>
  <form action="login.php" method="post">
    �û��� : <input type="text" name="name"/>
    ���� : <input type="password" name="password"/>
    <input type="submit"/>
  </form>
  <a href="SignUp.php">ע�����û�</a><br>
<?php } else { ?>
  You already logged in. <a href="logout.php">logout</a>
<?php } ?>
</body>
</html>

