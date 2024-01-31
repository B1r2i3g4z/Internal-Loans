<?php
// Module names array
$moduleNames = [
    "Email Panel", "Borrower Details", "Employee Wallet", "Loan Details",
    "Internal Message", "Missed Payment", "Payment", "Employee Details",
    "Module Permission", "Savings Account", "General Settings"
];
?>

<div class="row">
    <section class="content">  
        <div class="box box-success">
            <div class="box-body">
                <div class="table-responsive">
                    <div class="box-body">
                        <form method="post">
                            <a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>&&mid=<?php echo base64_encode("401"); ?>">
                                <button type="button" class="btn btn-flat btn-warning"  style="background-color:#e0bf7e;border-color:white;font-size:18px; font-weight:bold; color:#white;"><i class="fa fa-mail-reply-all"></i>&nbsp;Back</button>
                            </a> 
                            <hr>
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                <!-- Module Permission Alert -->
                                <?php echo '<div class="alert "style="background-color: #e0bf7e; color:white; font-weight:bold; font-size:15px">
                                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                                            <strong>Add Module Permission</strong> | <label style="background-color: #e0bf7e; color:white;  font-size:14px">Here you declare which module you want the user to get access to in their respective account.</label>
                                          </div>' ?>
                                <!-- Module Permission Form -->
                                <div class="box-body">
                                    <!-- User Name Selection -->
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label" style="color:#00b259; font-size:18px">User Name:</label>
                                        <div class="col-sm-10">
                                            <select name="tide" class="form-control select2" required>
                                                <?php
                                                $search_user = mysqli_query($link, "SELECT * FROM user WHERE id != '".$_SESSION['tid']."'") or die ("Error: " . mysqli_error($link));
                                                while($get_users = mysqli_fetch_array($search_user)) {
                                                    echo '<option value="'.$get_users['id'].'">'.$get_users['name'].'</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Module Permission Table -->
                                    <table class="table" border="0.95" style=" font-size:12px; color:#121212;">
                                        <thead>
                                            <tr style="font-size:15px; color:white;background-color:#00b259;">
                                                <th>S/No.</th>
                                                <th>Module Name</th>
                                                <th><div align="center">Create</div></th>
                                                <th><div align="center">Read</div></th>
                                                <th><div align="center">Update</div></th>
                                                <th><div align="center">Delete</div></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Loop through modules -->
                                            <?php for ($i = 0; $i < count($moduleNames); $i++) { ?>
                                                <tr>
                                                    <td width="30"><?php echo $i + 1; ?></td>
                                                    <td width="450"><?php echo $moduleNames[$i]; ?> <input type="hidden" name="module_<?php echo $i + 1; ?>" value="<?php echo $moduleNames[$i]; ?>"/></td>
                                                    <!-- Loop through permission types -->
                                                    <?php for ($j = 1; $j <= 4; $j++) { ?>
                                                        <td><div align="center"><input name="module_<?php echo $i + 1; ?>_permission_<?php echo $j; ?>" type="checkbox" value="On"></div></td>
                                                    <?php } ?>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    <!-- Save Button -->
                                    <div align="right">
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-info btn-flat" name="save" style="font-weight:bold; border-color:white;font-size:15px;background-color:#e0bf7e;"><i class="fa fa-save">&nbsp;Save Module</i></button>
                                        </div>
                                    </div>
                                    <!-- Save Permission Logic -->
                                    <?php
                                    if(isset($_POST['save'])) {
                                        $tide = mysqli_real_escape_string($link, $_POST['tide']);
                                        $get_verify = mysqli_num_rows(mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '$tide'"));
                                        if($get_verify == 11) {
                                            echo "<script>alert('Error: Permission Already granted. Please visit permission list to see!!');</script>";
                                        } else {
                                            // Loop through modules and permissions to insert into the database
                                            for ($i = 1; $i <= count($moduleNames); $i++) {
                                                $module = mysqli_real_escape_string($link, $_POST['module_'.$i]);
                                                for ($j = 1; $j <= 4; $j++) {
                                                    $permission_value = (isset($_POST['module_'.$i.'_permission_'.$j])) ? 1 : 0;
                                                    mysqli_query($link, "INSERT INTO emp_permission VALUES('','$tide','$module','$permission_value','$permission_value','$permission_value','$permission_value')") or die ("Error: " . mysqli_error($link));
                                                }
                                            }
                                            echo "<script>alert('Permission Added Successfully!!');</script>";
                                            echo "<script>window.location='permission_list.php?id=".$_SESSION['tid']."&&mid=".base64_encode("413")."';</script>";
                                        }
                                    }
                                    ?>
                                </div>
                            </form>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
