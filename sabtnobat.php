<?php
$server="localhost";
$user="root";
$pass="";
$dbname="darman";
$link=mysqli_connect($server,$user,$pass,$dbname);
if($link){echo "اتصال با موفقیت انجام شد";}

   $codemeli=$_POST['textfield'];
	$sh_bimeh=$_POST['textfield2'];
	$name=$_POST['textfield3'];
	$lname=$_POST['textfield4'];
	$tel=$_POST['textfield5'];
$adress=$_POST['textfield6'];
$pezashk=$_POST['select'];
$noe_bimeh=$_POST['select2'];
$nobat=$_POST['textfield7'];


 $insert_query="INSERT INTO `nobat`(`codemeli`, `sh_bimeh`, `name`, `lname`, `tel`, `address`, `pezeshk`, `noe_b`, `nobat`) VALUES ('$codemeli','$sh_bimeh','$name','$lname','$tel','$adress','$pezashk','$noe_bimeh','$nobat')";
mysqli_query($link, "SET NAMES utf8");
 $insert= mysqli_query($link,$insert_query);
if($insert)
{
	echo "اطلاعات با موفقیت ثبت گردید";
}
?>