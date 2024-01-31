<?php include("include/header.php"); ?>
<div class="wrapper">

<?php include("include/top_bar.php"); ?>
  <!-- Left side column. contains the logo and sidebar -->
<?php include("include/side_bar.php"); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
	<!-- Content Header (Page header) -->
    <section class="content-header" style="font-size:30px; color:#121212;">
      <h1>
       New Message
      </h1>
      <ol class="breadcrumb"  style="font-size:15px; font-weight:bold; color:#121212;">
        <li><a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> <a href="listmessage.php?id=<?php echo $_SESSION['tid']; ?>">My Mail</a></li>
        <li class="active">Create</li>
      </ol>
    </section>
    <section class="content">
		<?php include("include/newmessage_data.php"); ?>
	</section>
</div>	

<?php include("include/footer.php"); ?>