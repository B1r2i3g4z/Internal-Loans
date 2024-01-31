<?php include("include/header.php"); ?>
<div class="wrapper">

<?php include("include/top_bar.php"); ?>
  <!-- Left side column. contains the logo and sidebar -->
<?php include("include/side_bar.php"); ?>
  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="font-size:30px; color:#121212;">
        List of Emails 
      </h1>
      <ol class="breadcrumb" style="font-size:15px; font-weight:bolder; color:#121212;">
        <li><a style="font-size:15px; font-weight:bold; color:#121212;" href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-dashboard" ></i> Home</a></li>
        <li class="active"style="font-size:15px; font-weight:bold; color:#121212;"> <a href="listemail.php?id=<?php echo $_SESSION['tid']; ?>">Email </a></li>
        <li class="active" style="font-size:15px; font-weight:bold; color:#121212;">List</li>
      </ol>
    </section>
    <section class="content">
		<?php include("include/listemail_data.php"); ?>
	</section>
</div>	

<?php include("include/footer.php"); ?>