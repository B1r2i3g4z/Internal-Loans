<div class="box">
        
	       <div class="box-body">
			<div class="panel panel-success">
            <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-dollar"></i>&nbsp;Apply New Loan</h3>
            </div>

            <hr>	
           <div class="" style="font-weight:bolder; background-color:#00b259; color:#ffffff; font-size:25px;">&nbsp;Personal Information</div>
            <hr>

             <div class="box-body">

			 <form class="form-horizontal" method="post" enctype="multipart/form-data" action="process_loan_info.php">
			  <?php echo '<div class="alert" style="background-color:#e0bf7e;" >
			  <a href = "#" class = "close" data-dismiss= "alert"> &times;</a>
  				<strong>Note that&nbsp;</strong> &nbsp;&nbsp;Some Fields are Rquired.
				</div>'?>
             <div class="box-body">
				
			
			 <div class="form-group">
                <label for="" class="col-sm-2 control-label" style="color:  #00b259; font-weight:bolder;">Employee Name</label>
				 <div class="col-sm-10">
                <select name="borrower" class="customer select2" style="width: 100%;">
				<option selected="selected">--Select Employee Name--</option>
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
                  <label for="" class="col-sm-2 control-label" style="color:  #00b259; font-weight:bolder;">Employee Account</label>
                  <div class="col-sm-10" style="color:#00b259">
                  <select class="account select2" name="account" style="width: 100%; color:#00b259; ">
				<option selected="selected">--Select Employee Account--</option>
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
                  <label for="" class="col-sm-2 control-label" style="color:  #00b259; font-weight:bolder;">Employee Phone</label>
                  <div class="col-sm-10">
                  <input name="amount" type="text" class="form-control" placeholder="Amount" required>
                  </div>
                  </div>
		
		 <div class="form-group">
                  	<label for="" class="col-sm-2 control-label" style="color: #00b259; font-weight:bold;">Department ot team</label>
                  	<div class="col-sm-10">
					<textarea name="desc"  class="form-control" rows="4" cols="80"></textarea>
           			 </div>
					 </div>
		
                     <hr>	
<div class=""  style="font-weight:bolder; background-color:#00b259; color:#ffffff; font-size:25px;">&nbsp;Loan Details</div>
<hr>

		 <div class="form-group">
                <label for="" class="col-sm-2 control-label" style="color:#009900">Loan amount requested</label>
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
                  	<label for="" class="col-sm-2 control-label" style="color:#009900">Purpose of the loan</label>
                  	<div class="col-sm-10">
                      <select class="account select2" name="account" style="width: 100%;">
				<option selected="selected">--e.g.., emergency, education, etc--</option>
					<textarea name="remarks"  class="form-control" rows="4" cols="80"></textarea>
           			 </div>
          	</div>

              
		 <div class="form-group">
                  	<label for="" class="col-sm-2 control-label" style="color:#009900">Repayment terms</label>
                  	<div class="col-sm-10">
                      <select class="account select2" name="account" style="width: 100%;">
				<option selected="selected">--Months or pay periods--</option>
					<textarea name="desc"  class="form-control" rows="4" cols="80"></textarea>
           			 </div>
					 </div>
                     
                     
		 <div class="form-group">
                  	<label for="" class="col-sm-2 control-label" style="color:#009900">Preffered payment methods</label>
                  	<div class="col-sm-10">
                      <select class="account select2" name="account" style="width: 100%;">
				<option selected="selected">--deduction from salary, direct deposit, etc--</option>
					<textarea name="desc"  class="form-control" rows="4" cols="80"></textarea>
           			 </div>
					 </div>

	<hr>	
<div class=""  style="font-weight:bolder; background-color:#00b259; color:#ffffff; font-size:25px;">&nbsp;Employment Information</div>
<hr>
				  
			<div class="form-group">
				<label for="" class="col-sm-2 control-label" style="color:#009900">Job title</label>
				<div class="col-sm-10">
  		  		<input type='file' name="image" onChange="readURL(this);" required/>
       			 <img id="blah"  src="../avtar/user2.png" alt="Image Here" height="100" width="100"/>
			</div>
			</div>
			
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Legnth of Employment</label>
                  <div class="col-sm-10">
                  <input name="grela" type="text" class="form-control" placeholder="Relationship" required>
                  </div>
                  </div>
			
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Monthly income</label>
                  <div class="col-sm-10">
                  <input name="g_name" type="text" class="form-control" required placeholder = "Guarantor's Name">
                  </div>
                  </div>
				  
				  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Employment status</label>
                  <div class="col-sm-10">
                  <select class="account select2" name="account" style="width: 100%;">
				<option selected="selected">--Full time, Part time--</option>
                  <input name="g_phone" type="text" class="form-control" required placeholder = "Guarantor's Name">
                  </div>
                  </div>
				  
                  <hr>	
<div class=""  style="font-weight:bolder; background-color:#00b259; color:#ffffff; font-size:25px;">&nbsp;Financial Information</div>
<hr>
				 
				 <div class="form-group">
                  	<label for="" class="col-sm-2 control-label" style="color:#009900">Monthly expenses</label>
                  	<div class="col-sm-10">
                      <input name="g_phone" type="text" class="form-control" required placeholder = "e.g rent, utilities, etc">
					<textarea name="gaddress"  class="form-control" rows="4" cols="80"></textarea>
           			 </div>
          	</div> 
			
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Outstanding depts</label>
                  <div class="col-sm-10">
                  <input name="g_phone" type="text" class="form-control" required placeholder = "if any">
                  <input name="status" type="text" class="form-control" value="Pending" readonly="readonly">
                  </div>
                  </div>
				  					
			<div class="form-group">
                  	<label for="" class="col-sm-2 control-label" style="color:#009900">Assets</label>
                  	<div class="col-sm-10">
                      <input name="g_phone" type="text" class="form-control" required placeholder = "if applicable">
					<textarea name="remarks"  class="form-control" rows="4" cols="80"></textarea>
           			 </div>
          	</div>
			
            <div class="form-group">
                  	<label for="" class="col-sm-2 control-label" style="color:#009900">Monthly budget breakdown</label>
                  	<div class="col-sm-10">
                      <input name="g_phone" type="text" class="form-control" required placeholder = "if applicable">
					<textarea name="remarks"  class="form-control" rows="4" cols="80"></textarea>
           			 </div>
          	</div>
<hr>	
<div class=""  style="font-weight:bolder; background-color:#00b259; color:#ffffff; font-size:25px;">&nbsp;Credit History</div>
<hr>	
					
					 <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Credit score</label>
                  <div class="col-sm-10">
                      <input name="g_phone" type="text" class="form-control" required placeholder = "if applicable">
					<textarea name="remarks"  class="form-control" rows="4" cols="80"></textarea>
           			 </div>
          	</div>
        


				  
				   <div class="form-group">
                <label for="" class="col-sm-2 control-label" style="color:#009900">Previous loans</label>
			 <div class="col-sm-10">
                      <input name="g_phone" type="text" class="form-control" required placeholder = "if applicable">
              </div>
			  </div>
				  
				  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Amount to Pay</label>
                  <div class="col-sm-10">
                  <input name="amount_topay" type="number" class="form-control" placeholder="Amount to Pay" >
                  </div>
                  </div>
		
			 
			  <div align="right">
              <div class="box-footer">
                				<button type="reset" class="btn btn-primary btn-flat"><i class="fa fa-times">&nbsp;Reset</i></button>
                				<button name="save_loan" type="submit" class="btn btn-success btn-flat"><i class="fa fa-save">&nbsp;Save</i></button>

              </div>
			  </div>
			  </form>
			  

           
</div>	
</div>
</div>
</div>