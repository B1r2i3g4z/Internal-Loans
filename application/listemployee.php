<?php include("include/header.php"); ?>
<div class="wrapper">

<?php include("include/top_bar.php"); ?>
  <!-- Left side column. contains the logo and sidebar -->
<?php include("include/side_bar.php"); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="font-size:25px; color:#121212;">
        List of Employees
      </h1>
      <ol class="breadcrumb" style="font-size:15px; font-weight:bold; color:#121212;">
        <li><a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> <a href="newpayments.php?id=<?php echo $_SESSION['tid']; ?>">Employees</a></li>
        <li class="active">List</li>
      </ol>
    </section>
    <section class="content">
		<?php include("include/listemployee_data.php"); ?>
	</section>
</div>	

<?php include("include/footer.php"); ?>