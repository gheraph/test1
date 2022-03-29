<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>تایید نام کاربری و کلمه عبور</title>
	<style>
		body
		{
			background-color: #FDFDFD;
		}
	</style>
</head>

<body>
	<?php
	$us=$_POST['textfield'];
	$ps=$_POST['textfield2'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "darman";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `username`, `password` FROM `login` WHERE username='$us' and password='$ps'";
	  mysqli_query($conn, "SET NAMES utf8");
$result = $conn->query($sql);
mysqli_query($conn, "SET NAMES utf8");
$count=$result->num_rows;
if($count==1)
{$_SESSION["u"]=$username;
header('location:adminpage.php');
}
$conn->close();
?> 
  </tbody>
</table>

</body>
</html>