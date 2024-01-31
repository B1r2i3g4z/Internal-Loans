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
        Sent Mail
      </h1>
      <ol class="breadcrumb"  style="font-size:15px; font-weight:bold; color:#121212;">
        <li><a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> <a href="inboxmessage.php?id=<?php echo $_SESSION['tid']; ?>">Inbox</a></li>
        <li class="active">Sent</li>
      </ol>
    </section>
    <section class="content">
		<?php include("include/outboxmessage_data.php"); ?>
	</section>
</div>	

<?php include("modal/outboxmessage_modal.php"); ?>

<?php include("include/footer.php"); ?>