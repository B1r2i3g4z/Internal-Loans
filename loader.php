<?php include "config/connect.php";?>

<!DOCTYPE html>
<html>
<head>

<style>
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #00b259;
  border-right: 16px solid  #e0bf7e;
  border-bottom: 16px solid #00b259;
  border-left: 16px solid  #e0bf7e;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
  margin:auto;
  
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
</head>
<body>
<br><br><br><br><br><br><br><br><br>
<div style="width:100%;text-align:center;vertical-align:bottom">
		<div class="loader"></div>
<?php
session_start();
echo '<meta http-equiv="refresh" content="2;url=application/dashboard.php?tid='.$_SESSION['tid'].'">';
echo '<br>';
echo'<span class="itext" style="color: black">Logging IN. Please Wait!...</span>';
?>
</div>
</body>
</html>
