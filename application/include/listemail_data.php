<div class="row">
		
	       
		    <section class="content">  
	        <div class="box box-success">
            <div class="box-body">
              <div class="table-responsive">
             <div class="box-body">
<form method="post">
			 <a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>"><button type="button" class="btn btn-flat btn-warning" style="font-size:18px; font-weight:bolder; background-color:#00b259; border-color:white;"><i class="fa fa-mail-reply-all"></i>&nbsp;Back</button> </a> 
			 <?php
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Email Template'") or die ("Error" . mysqli_error($link));

// Check if there are rows returned
if(mysqli_num_rows($check) > 0) {
    $get_check = mysqli_fetch_array($check);
    $pdelete = $get_check['pdelete'];
    $pcreate = $get_check['pcreate'];
} else {
    // Handle the case when no rows are returned, set default values or take appropriate action
    $pdelete = $pcreate = null; // Set default values or handle accordingly
}
?>

	 <?php echo ($pdelete == '1') ? '<button type="submit" class="btn btn-flat btn-danger" name="delete"><i class="fa fa-times"></i>&nbsp;Multiple Delete</button>' : ''; ?>	
	<?php echo ($pcreate == '1') ? '<a href="newemail.php?id='.$_SESSION['tid'].'"><button type="button" class="btn btn-flat btn-success"><i class="fa fa-plus"></i>&nbsp;Add Template</button></a>' : ''; ?>
	<a href="listprint.php" target="_blank" class="btn btn-info btn-flat" style="font-size:18px; font-weight:bolder; background-color:#e0bf7e;border-color:white;"><i class="fa fa-print"></i>&nbsp;Print</a>
<a href="listexcel.php" target="_blank" class="btn btn-success btn-flat"  style="font-size:18px; font-weight:bolder; background-color:#00b259;border-color:white;"><i class="fa fa-send"></i>&nbsp;Export Excel</a>
<a href="pdfmail.php" target="_blank" class="btn btn-info btn-flat"  style="font-size:18px; font-weight:bolder; background-color:#e0bf7e;border-color:white;"><i class="fa fa-file-pdf-o"></i>&nbsp;Export PDF</a>
	<hr>		
		  
			 <table id="example1" class="table table-bordered table-striped" style="background-color:#00b259; font-size:12px; color:#121212;">
                <thead>
                <tr style="font-size:13px; color:white;">
                  <th><input type="checkbox" id="select_all"/></th>
                  <th>ID</th>
                  <th>Sender ID</th>
				  <th>Receiver Email</th>
				  <th>Subject</th>
                  <th>Message</th>
                 </tr>
                </thead>
                <tbody> 
<?php
$select = mysqli_query($link, "SELECT * FROM etemplates") or die (mysqli_error($link));
if(mysqli_num_rows($select)==0)
{
echo "<div style= 'background-color:#e0bf7e; color: #ffffff; font-size:15px;' >No data found yet!.....Check back later!!</div>";
}
else{
while($row = mysqli_fetch_array($select))
{
$id = $row['id'];
$sender = $row['sender'];
$receiver_email = $row['receiver_email'];
$subject = $row['subject'];
$msg = $row['msg'];
?>   
                <tr>
				<td><input id="optionsCheckbox" class="checkbox" name="selector[]" type="checkbox" value="<?php echo $id; ?>"></td>
                <td><?php echo $id; ?></td>
                <td><?php echo $sender; ?></td>
				<td><?php echo $receiver_email; ?></td>
				<td><?php echo $subject; ?></td>
				<td><?php echo $msg; ?></td>
			    </tr>
<?php } } ?>
             </tbody>
                </table>  
<?php
						if(isset($_POST['delete'])){
						$idm = $_GET['id'];
							$id=$_POST['selector'];
							$N = count($id);
						if($id == ''){
						echo "<script>alert('Row Not Selected!!!'); </script>";	
						echo "<script>window.location='listemail.php?id=".$_SESSION['tid']."'; </script>";
							}
							else{
							for($i=0; $i < $N; $i++)
							{
								$result = mysqli_query($link,"DELETE FROM etemplates WHERE id ='$id[$i]'");
								echo "<script>alert('Row Delete Successfully!!!'); </script>";
								echo "<script>window.location='listemail.php?id=".$_SESSION['tid']."'; </script>";
							}
							}
							}
?>
</form>			

				

              </div>


	
</div>	
</div>
</div>	
</div>	