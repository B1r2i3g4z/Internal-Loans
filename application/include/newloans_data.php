<div class="box">
        
	       <div class="box-body">
			<div class="panel panel-success">
            <div class="panel-heading">
            <h3 class="panel-title"  style="font-size:25px; font-weight:bold; color:#00b259;"><i class="fa fa-dollar"></i>&nbsp;New Loans</h3>
            </div>
             <div class="box-body">

			 <form class="form-horizontal" method="post" enctype="multipart/form-data" action="process_loan_info.php">
			  <?php echo '<div class="alert" style="background-color:#e0bf7e;color:white;" >
			  <a href = "#" class = "close" data-dismiss= "alert"> &times;</a>
  				<strong>Note that&nbsp;</strong> &nbsp;&nbsp;Some Fields are Rquired.
				</div>'?>
             <div class="box-body">
				
			
			 <div class="form-group">
                <label for="" class="col-sm-2 control-label" style="color: #00b259;font-size:18px;">Employee</label>
				 <div class="col-sm-10">
                <select name="borrower" class="customer select2" style="width: 100%;">
				<option selected="selected">--Select Employee --</option>
				<?php
				$get = mysqli_query($link, "SELECT * FROM borrowers order by id") or die (mysqli_error($link));
				while($rows = mysqli_fetch_array($get))
				{
				echo '<option value="'.$rows['id'].'">'.$rows['fname'].'&nbsp;'.$rows['lname'].'</option>';
				}
				?>
                </select>
              </div>
			  </div>
			  
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color: #00b259; font-size:18px;">Account Number</label>
                  <div class="col-sm-10">
                  <select class="account select2" name="account" style="width: 100%;">
				<option selected="selected">--Select Customer Account--</option>
                  <?php
				$getin = mysqli_query($link, "SELECT * FROM borrowers order by id") or die (mysqli_error($link));
				while($row = mysqli_fetch_array($getin))
				{
				echo '<option value="'.$row['id'].'">'.$row['account'].'</option>';
				}
				?>
				</select>
                  </div>
                  </div>
				 
		<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color: #00b259;font-size:18px;">Loan Amount</label>
                  <div class="col-sm-10">
                  <input name="amount" type="text" class="form-control" placeholder="Amount" required>
                  </div>
                  </div>
		
		 <div class="form-group">
                  	<label for="" class="col-sm-2 control-label" style="color: #00b259;font-size:18px;">Purpose of loan</label>
                  	<div class="col-sm-10">
					<textarea name="desc"  class="form-control" rows="4" cols="80"></textarea>
           			 </div>
					 </div>
		
		 <div class="form-group">
                <label for="" class="col-sm-2 control-label" style="color: #00b259;font-size:18px;">Date</label>
			 <div class="col-sm-10">
              <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input name="date_release" type="date" class="form-control pull-right" id="datepicker">
                </div>
              </div>
			  </div>
			  
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color: #00b259;font-size:18px;">Borrower</label>
                  <div class="col-sm-10">
<?php
$tid = $_SESSION['tid'];
$sele = mysqli_query($link, "SELECT * from user WHERE id = '$tid'") or die (mysqli_error($link));
while($row = mysqli_fetch_array($sele))
{
?>
                  <input name="agent" type="text" class="form-control" value="<?php echo $row['name']; ?>" readonly>
<?php } ?>
                  </div>
                  </div>
	<hr>	
<div class=""  style="font-weight:bolder; background-color:#00b259; color:#ffffff; font-size:25px;">&nbsp;EMPLOYEE INFORMATION</div>
<hr>
				  
			<div class="form-group">
				<label for="" class="col-sm-2 control-label" style="color: #00b259;font-size:18px;">Passport</label>
				<div class="col-sm-10">
  		  		<input type='file' name="image" onChange="readURL(this);" /required>
       			 <img id="blah"  src="../avtar/user2.png" alt="Image Here" height="100" width="100"/>
			</div>
			</div>
			
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color: #00b259;font-size:18px;">Relationship</label>
                  <div class="col-sm-10">
                  <input name="grela" type="text" class="form-control" placeholder="Relationship" required>
                  </div>
                  </div>
			
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color: #00b259;font-size:18px;">Guarantor's Name</label>
                  <div class="col-sm-10">
                  <input name="g_name" type="text" class="form-control" required placeholder = "Guarantor's Name">
                  </div>
                  </div>
				  
				  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color: #00b259;font-size:18px;">Guarantor's Phone Number</label>
                  <div class="col-sm-10">
                  <input name="g_phone" type="text" class="form-control" required placeholder = "Guarantor's Name">
                  </div>
                  </div>
				  
				 
				 <div class="form-group">
                  	<label for="" class="col-sm-2 control-label" style="color: #00b259;font-size:18px;">Guarantor's Address</label>
                  	<div class="col-sm-10">
					<textarea name="gaddress"  class="form-control" rows="4" cols="80"></textarea>
           			 </div>
          	</div> 
			
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color: #00b259;font-size:18px;">Status</label>
                  <div class="col-sm-10">
                  <input name="status" type="text" class="form-control" value="Pending" readonly="readonly">
                  </div>
                  </div>
				  					
			<div class="form-group">
                  	<label for="" class="col-sm-2 control-label" style="color: #00b259;font-size:18px;">Remarks</label>
                  	<div class="col-sm-10">
					<textarea name="remarks"  class="form-control" rows="4" cols="80"></textarea>
           			 </div>
          	</div>
			
<hr>	
<div class=""  style="font-weight:bolder; background-color:#00b259; color:#ffffff; font-size:25px;">&nbsp;PAYMENT INFORMATION</div>
<hr>	
					
					 <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color: #00b259;font-size:18px;">Current Balance</label>
                  <div class="col-sm-10">
                  <input name="user" type="text" class="form-control" value="0.00" readonly>
                  </div>
                  </div>
				  
				   <div class="form-group">
                <label for="" class="col-sm-2 control-label" style="color: #00b259;font-size:18px;">Payment Date</label>
			 <div class="col-sm-10">
              <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input name="pay_date" type="date" class="form-control pull-right" id="datepicker2">
                </div>
              </div>
			  </div>
				  
				  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color: #00b259;font-size:18px;">Amount to Pay</label>
                  <div class="col-sm-10">
                  <input name="amount_topay" type="number" class="form-control" placeholder="Amount to Pay" >
                  </div>
                  </div>
				  
				  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color: #00b259;font-size:18px;">Teller By</label>
                  <div class="col-sm-10">
<?php
$tid = $_SESSION['tid'];
$sele = mysqli_query($link, "SELECT * from user WHERE id = '$tid'") or die (mysqli_error($link));
while($row = mysqli_fetch_array($sele))
{
?>
                  <input name="teller" type="text" class="form-control" value="<?php echo $row['name']; ?>" readonly>
<?php } ?>
                  </div>
                  </div>
				
				
				<div class="form-group">
                  	<label for="" class="col-sm-2 control-label" style="color: #00b259;font-size:18px;">Remarks</label>
                  	<div class="col-sm-10">
					<textarea name="remark"  class="form-control" rows="4" cols="80"></textarea>
           			 </div>
          	</div>
				  
			 </div>
			 
			  <div align="right">
              <div class="box-footer">
                				<button type="reset" class="btn btn-primary btn-flat"  style="background-color: #e0bf7e; border-color:white; font-size:18px;"><i class="fa fa-times">&nbsp;Reset</i></button>
                				<button name="save_loan" type="submit" class="btn btn-success btn-flat"  style="color: white;border-color:white; font-size:18px;"><i class="fa fa-save">&nbsp;Save</i></button>

              </div> 
			  </div>
			  </form>
			  

           
</div>	
</div>
</div>
</div>