<?php
session_start();
if(!isset($_SESSION['u']))
	header("location:login.php");
else
	echo "<p style=\"font-family: 'B Koodak'; text-align: center;\">ورود شما با موفقیت به قسمت مدیریت انجام گرفت</p>"
	
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
    <meta charset="utf-8">
    <title>ثبت اطلاعات حضور پزشک</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">


    <link rel="stylesheet" href="style.css" media="screen">
    <link rel="stylesheet" href="style.responsive.css" media="all">


    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>


<style>.art-content .art-postcontent-0 .layout-item-0 { margin-bottom: 5px;  }
.art-content .art-postcontent-0 .layout-item-1 { border-spacing: 10px 0px; border-collapse: separate;  }
.art-content .art-postcontent-0 .layout-item-2 { border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-top-width:1px;border-right-width:1px;border-bottom-width:1px;border-left-width:1px;border-top-color:#E4BE8B;border-right-color:#E4BE8B;border-bottom-color:#E4BE8B;border-left-color:#E4BE8B; color: #1A1A1A; background: #F7ECDE; padding-right: 10px;padding-left: 10px; border-radius: 10px;  }
.art-content .art-postcontent-0 .layout-item-3 { color: #292929; border-spacing: 10px 0px; border-collapse: separate;  }
.ie7 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
.ie6 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
#x {
  width: 100%;
  padding: 50px 0;
  text-align: center;
  background-color: #FFE09F;
  margin-top: 20px;
}
</style></head>
<body>
<div id="art-main">
    <div id="art-hmenu-bg" class="art-bar art-nav">
    </div>
    <div class="art-sheet clearfix">
<?php
		include("menutop2.php");
		?>
<header class="art-header">

    <div class="art-shapes">
        
            </div>






                
                    
</header>
<div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content"><article class="art-post art-article">
                                
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout-wrapper layout-item-0">
<div class="art-content-layout layout-item-1">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-2" style="width: 100%" >
        <h1 style="text-align: right; font-family: 'B Titr'"><span style="color: #000000;">راهنمای استفاده از خدمات سایت</span></h1>
		<hr>
        <p style="text-align: right; font-family: 'B Mitra'; font-size: 16px;"><span style="color: #000000;">جهت استفاده بهتر از خدمات سایت بهتر است در درمانگاه تشکیل پرونده دهید تا راحتتر بتوانید از خدمات پزشکی و درمانی درمانگاه بهره مند گردید</span></p>
		<hr color="#FB0509">
		<form style="float: right;" dir="rtl" id="form1" name="form1" method="post" action="sabth.php">
			<table width="150%">
  <tbody>
    <tr>
			  <?php
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

$sql = "SELECT * FROM `pezeshk`";
	  mysqli_query($conn, "SET NAMES utf8");
$result = $conn->query($sql);
mysqli_query($conn, "SET NAMES utf8");
if ($result->num_rows > 0) {
  // output data of each row
  
	   
   
	  ?>
		   <td> <label style="text-align: right; font-family: 'B Mitra'; font-size: 16px;" for="select">انتخاب پزشک:</label>
    <select style="text-align: right; font-family: 'B Mitra'; font-size: 16px;" name="select" id="select">
		<?php
	while($row = $result->fetch_assoc()) {
	?>
		<option value="<?php  echo  $row["code_n"] ; ?>"><?php  echo  $row["name_p"]; ?></option>
				  <?php
  }
	   }
	 {
  echo "0 results";
}
$conn->close();
?>
    </select></td>
    </tr>
      <td> <label style="text-align: right; font-family: 'B Mitra'; font-size: 16px;" for="select">روز حضور:</label>
    <select style="text-align: right; font-family: 'B Mitra'; font-size: 16px;" name="select2" id="select2">
		<option value="">انتخاب کنید</option>
		<option value="شنبه">شنبه</option>
		<option value="یکشنبه">یکشنبه</option>
		<option value="دوشنبه">دوشنبه</option>
		<option value="سه شنبه">سه شنبه</option>
		<option value="چهارشنبه">چهارشنبه</option>
		<option value="پنجشنبه">پنجشنبه</option>
		<option value="جمعه">جمعه</option>
    </select></td>
      <td><label style="text-align: right; font-family: 'B Mitra'; font-size: 16px;" for="textfield2">ساعت حضور:</label>
    <input style="text-align: right; font-family: 'B Mitra'; font-size: 16px;" type="text" name="textfield2" id="textfield2"></td>
    </tr>
  </tbody>
</table>
  <p>
    <input style="text-align: right; font-family: 'B Mitra'; background-color: #CBFC8A; font-size: 16px;" type="submit" name="submit" id="submit" value="ثبت برای نوبت">
    <input style="text-align: right; background-color: #F49091; font-family: 'B Mitra'; font-size: 16px;" type="reset" name="reset" id="reset" value="انصراف">
  </p>
</form>
    </div>
    </div>
</div>
</div>                               
                

</article></div>
                    </div>
                </div>
            </div>
    </div>
<footer class="art-footer">
  <div class="art-footer-inner">
<p><br></p>
<p style="text-align: center;">Copyright © 2020-2022. All Rights Reserved.</p>
<p style="text-align: center;"><br></p>
    <p class="art-page-footer">
        <span id="art-footnote-links" style="font-family: 'B Mitra'; font-size: 15px;">تهیه شده توسط تیم مبینا دارابی و زهرا نعمتی</span>
    </p>
  </div>
</footer>

</div>

 
</body></html>
<script>
function myFunction() {
  var x = document.getElementById("x");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>