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
        All Transaction
      </h1>
      <ol class="breadcrumb"  style="font-size:15px; font-weight:bold; color:#121212;">
        <li><a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>&&mid=<?php echo base64_encode("401"); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> <a href="customer.php?id=<?php echo $_SESSION['tid']; ?>&&mid=<?php echo base64_encode("410"); ?>">Customer</a></li>
        <li class="active">Transaction</li>
      </ol>
    </section>
    <section class="content">
		<?php include("include/transaction_data.php"); ?>
	</section>
</div>	

<?php include("modal/transaction_modal.php"); ?>

<?php include("include/footer.php"); ?>