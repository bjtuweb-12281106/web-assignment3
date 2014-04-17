<html>
<body>
<?php
$UserName1=$_POST["UserName"];
$Password1=$_POST["Password"];
$ConfirmPassword1=$_POST["ConfirmPassword"];
$Email1=$_POST["Email"];
include 'config.php';
function Check_ConfirmPassword($Password,$ConfirmPassword)
{
 $ConfirmPasswordGood="两次密码输入一致";
 if($Password1<>$ConfirmPassword1)
 {
  $ConfirmPasswordGood="两次密码输入不一致";
  return $ConfirmPasswordGood;
 }
 else
 return $ConfirmPasswordGood;
}
$ConfirmPasswordGood=Check_ConfirmPassword($Password1,$ConfirmPassword1);
$error=false;
if ($ConfirmPasswordGood !="两次密码输入一致")
{
 $error=true;
 echo $ConfirmPasswordGood;
 echo "<br>";
}
$query="select * from Data where Name='$UserName1' or Email='$Email1'";
$result=mysql_query($query);
$row=mysql_fetch_array($result);
while ($row)
{
 if ($row["Name"]==$UserName1)
 {
  $error=true;
  echo "用户名已存在<br>";
 }
 if ($row["Email"]==$Email1)
 {
  $error=true;
  echo "用户邮箱已经注册<br>";
 }
}
if ($error==false)
{
 $query="insert into Data (UserName,Password,Email)
 values ('$UserName1','$Password1','$Email1')";
 $result=mysql_query($query);
 echo "注册成功<br>";
 ?>
 <center><a href="index,php">返回登陆界面<br></a><center>
 <?php
}
?>
</body>
</html>