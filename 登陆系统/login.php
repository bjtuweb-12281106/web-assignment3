<?php
include 'config.php';
$username = $_POST["name"];
$password = $_POST["password"];
$query="select * from Data where Name='$username'";
$result=mysql_query($query);
$row=mysql_fetch_array($result);
if($row)
{
	if($row["Password"]=$password)
		header("Location:lognin_go.php");;
	else {
		echo "�������"<br>;
		<a href="SignUp.php">ע��</a><br>
			}
}
	else
	{
		echo "�û�ûע�ᡣ"<br>;
		<a href="SignUp.php">ע��</a><br>
	}

setcookie("mycookie_name", $username);
setcookie("count", ++$count);

?>
<html>
<head>
</head>
<body>
Welcome <? echo $_POST["name"] ?>!<br/>
You have visited the site <? echo $count ?> times.
<a href="logout.php">logout</a>
</body>
</html>