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
    <title>لیست بیماران</title>
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
        <h1 style="text-align: right; font-family: 'B Titr'"><span style="color: #000000;">لیست کل بیماران</span></h1>
		<hr>
      
		<hr color="#FB0509">
		<table width="100%" border="1">
  <caption>
   اطلاعات بیماران
  </caption>
  <tbody>
    <tr>
	
	
		<th style="font-family: 'B Koodak';" scope="col">نوبت</th>
		<th style="font-family: 'B Koodak';" scope="col">بیمه</th>
		<th style="font-family: 'B Koodak';" scope="col">پزشک</th> 
		<th style="font-family: 'B Koodak';" scope="col">آدرس</th>
		 <th style="font-family: 'B Koodak';" scope="col">تلفن تماس</th>
		 <th style="font-family: 'B Koodak';" scope="col">نام خانوادگی</th>
      <th align="center" style="font-family: 'B Koodak';" scope="col">نام بیمار</th>
      <th style="font-family: 'B Koodak';" scope="col">شماره بیمه</th>
		 <th style="font-family: 'B Koodak';" scope="col">کد ملی</th>
    </tr>
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

$sql = "SELECT * FROM `nobat`";
	  mysqli_query($conn, "SET NAMES utf8");
$result = $conn->query($sql);
mysqli_query($conn, "SET NAMES utf8");
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  
	   
   
	  ?>
    <tr>
	
		<td align="center" style="font-family: 'B Koodak'; text-align: center;"><?php  echo  $row["nobat"] ; ?></td>
		<td align="center" style="font-family: 'B Koodak'; text-align: center;"><?php  echo  $row["noe_b"] ; ?></td>
		 <td align="center" style="font-family: 'B Koodak'; text-align: center;"><?php  echo  $row["pezeshk"] ; ?></td>
		 <td align="center" style="font-family: 'B Koodak'; text-align: center;"><?php  echo  $row["address"] ; ?></td>
		 <td align="center" style="font-family: 'B Koodak'; text-align: center;"><?php  echo  $row["tel"] ; ?></td>
		 <td align="center" style="font-family: 'B Koodak'; text-align: center;"><?php  echo  $row["lname"] ; ?></td>
		 <td align="center" style="font-family: 'B Koodak'; text-align: center;"><?php  echo  $row["name"] ; ?></td>
      <td align="center" style="font-family: 'B Koodak'; text-align: center;"><?php  echo  $row["sh_bimeh"] ; ?></td>
      <td align="center" style="font-family: 'B Koodak'; text-align: center;"><?php  echo  $row["codemeli"] ; ?></td>
    </tr>
	  <?php
		   
	   }
		  
  }
	  {
  echo "0 results";
}
$conn->close();
?> 
  </tbody>
</table>
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