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
 $ConfirmPasswordGood="������������һ��";
 if($Password1<>$ConfirmPassword1)
 {
  $ConfirmPasswordGood="�����������벻һ��";
  return $ConfirmPasswordGood;
 }
 else
 return $ConfirmPasswordGood;
}
$ConfirmPasswordGood=Check_ConfirmPassword($Password1,$ConfirmPassword1);
$error=false;
if ($ConfirmPasswordGood !="������������һ��")
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
  echo "�û����Ѵ���<br>";
 }
 if ($row["Email"]==$Email1)
 {
  $error=true;
  echo "�û������Ѿ�ע��<br>";
 }
}
if ($error==false)
{
 $query="insert into Data (UserName,Password,Email)
 values ('$UserName1','$Password1','$Email1')";
 $result=mysql_query($query);
 echo "ע��ɹ�<br>";
 ?>
 <center><a href="index,php">���ص�½����<br></a><center>
 <?php
}
?>
</body>
</html>