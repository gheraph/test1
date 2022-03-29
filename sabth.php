<?php
session_start();
if(!isset($_SESSION['u']))
	header("location:login.php");
else
	echo "<p style=\"font-family: 'B Koodak'; text-align: center;\">ورود شما با موفقیت به قسمت مدیریت انجام گرفت</p>"
	
?>
<?php
$server="localhost";
$user="root";
$pass="";
$dbname="darman";
$link=mysqli_connect($server,$user,$pass,$dbname);
if($link){echo "اتصال با موفقیت انجام شد";}

   $coden=$_POST['select'];
	$roz=$_POST['select2'];
	$saeat=$_POST['textfield2'];
 $insert_query="INSERT INTO `hozor`(`coden`, `roz`, `saeat`) VALUES ('$coden','$roz','$saeat')";
mysqli_query($link, "SET NAMES utf8");
 $insert= mysqli_query($link,$insert_query);
if($insert)
{
	echo "اطلاعات با موفقیت ثبت گردید";
}
?>