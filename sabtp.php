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

   $coden=$_POST['textfield'];
	$namelname=$_POST['textfield2'];
	$tel=$_POST['textfield3'];
	$address=$_POST['textfield4'];
$takh=$_POST['select'];
$bakhsh=$_POST['select2'];
 $insert_query="INSERT INTO `pezeshk`(`code_n`, `name_p`, `tel`, `address`, `tekhsos`, `bakhsh`) VALUES ('$coden','$namelname','$tel','$address','$takh','$bakhsh')";
mysqli_query($link, "SET NAMES utf8");
 $insert= mysqli_query($link,$insert_query);
if($insert)
{
	echo "اطلاعات با موفقیت ثبت گردید";
}
?>