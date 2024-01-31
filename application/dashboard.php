<?php include("include/header.php"); ?>
<div class="wrapper">

<?php include("include/top_bar.php"); ?>
  <!-- Left side column. contains the logo and sidebar -->
<?php include("include/side_bar.php"); ?>
  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    
	<!-- Content Header (Page header) -->
    <section class="content-header" >
      <h1 style="font-size: 35px !important">
        Dashboard
      </h1>
      <ol class="breadcrumb bg-yellow" style="font-size: 15px !important">
        <li><a href="dashboard.php<?php echo $_SESSION['tid']; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->

    <section class="content">
      <!-- Small boxes (Stat box) -->
		<?php include("include/dashboard_chart.php"); ?>   
	</section>
</div>
		
<?php include("include/footer.php"); ?>