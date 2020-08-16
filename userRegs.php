<?php
    session_start();
?>
<!doctype html>
<html lang="en">
<head>
            
             <?php include 'pages/headerLink.php';?>

    </head>
    <body style="background: #f5f5f5">
            <div id="loading-wrapper">
                    <div id="loader"></div>
            </div>
            <div class="app-wrap">
                    <header class="app-header">
                            <div class="container-fluid" style="background-image: linear-gradient(to top right,#edfd69 ,  #0766a7);">
                                    <div class="row gutters" >
                                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 ">
                                                <img src="image/carLi.png" alt="" class="col-md-6 col-sm-12 col-xs-12"/>
                                            </div>
                                    </div>
                            </div>
                    </header>
                    <div class="app-container">
                            <header class="page-header" style="background: #0766a7">
                                    <div class="container-fluid">
                                            <div class="row">
                                                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12">
                                                            <div class="page-title">
                                                                    <h3>DEPARTMENT OF TRANSORT AND LICENSE</h3>
                                                            </div>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                                    </div>
                                            </div>
                                    </div>
                               
                            </header>
                            <!-- END: .page-header -->
                            
                            <!-- BEGIN: .main-content -->
                            <div class="main-content">

                                    <!-- Row starts -->
                                    <div class="row gutters">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" >
                                            
                                            
                                                    <?php if(isset($_SESSION['errorMessage'])){?>
                                                        <div class="col-md-12" id="error-msg" >
                                                            <label class="danger" style="color: red">
                                                            <?php echo $_SESSION['errorMessage']; ?>
                                                            </label>
                                                        </div>
                                                    <?php }?>
                                            
                                            
                                            
                                                    <div class="card" style="min-height:475px">
                                                            <div class="card-header">Application:</div>
                                                            <div class="card-body">
                                                                    <div class="customScroll4">
                                                                        <form action="phpHendler/userLoginHendler.php" method="POST" enctype="multipart/form-data">
                                                                            <span>
                                                                                    I / We the undersigned hereby apply for a public service licence to operate
                                                                                    a stage Taxi service for years in respect of the vehicle(s) mentioned hereunder.
                                                                                </span>
                                                                            <div class="row" style="margin-bottom: 20px;margin-top: 15px;border-bottom: 1px solid #0a8">
                                                                                <div class="col-md-12" style="padding-bottom: 10px">
                                                                                    <b>Particulars to be furnished applicant:</b>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row gutters">
                                                                                
										<div class="col-xl-4 col-lg col-md-4 col-sm-4 col-12">
                                                                                    <label>Full Name</label>
											<div class="form-group">
                                                                                            <input class="form-control is-warning" required="required" name="fullname" placeholder="Enter Full Name" type="text">
											</div>
										</div>
                                                                                <div class="col-xl-4 col-lg col-md-4 col-sm-4 col-12">
                                                                                    <label>Address</label>
											<div class="form-group">
                                                                                            <input class="form-control is-warning" required="required" name="adres" placeholder="Enter Addres" type="text">
											</div>
										</div>
                                                                                
                                                                                <div class="col-xl-4 col-lg col-md-4 col-sm-4 col-12">
                                                                                    <label>Gender</label>
											<div class="form-group">
                                                                                            <select class="form-control selectpicker is-warning" required="required" name="gender" >
												<option data-tokens="">------- Select Gender ------</option>
												<option data-tokens="Male">Male</option>
												<option data-tokens="Female">Female</option>
											</select>
										</div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row gutters" style="margin-top: 10px">
										
                                                                                <div class="col-xl-4 col-lg col-md-4 col-sm-4 col-12">
                                                                                    <label>House No</label>
											<div class="form-group">
                                                                                            <input class="form-control is-warning" required="required" name="house" placeholder="Enter House No" type="text">
											</div>
										</div>
                                                                                
                                                                                <div class="col-xl-4 col-lg col-md-4 col-sm-4 col-12">
                                                                                    <label>Shehia</label>
											<div class="form-group">
                                                                                            <input class="form-control is-warning" required="required" name="shehia" placeholder="Enter Shehia" type="text">
											</div>
										</div>
                                                                                <div class="col-xl-4 col-lg col-md-4 col-sm-4 col-12">
                                                                                    <label>District</label>
											<div class="form-group">
                                                                                            <select class="form-control selectpicker is-warning" required="required" name="district" data-live-search="true">
												<option data-tokens="">------- Select District ------</option>
												<option data-tokens="Wilaya Ya Mjini">Wilaya Ya Mjini</option>
												<option data-tokens="Wilaya Ya Kaskazini">Wilaya Ya Kaskazini</option>
                                                                                                <option data-tokens="Wilaya Ya Kusini">Wilaya Ya Kusini</option>
											</select>
										</div>
										</div>
                                                                            </div>
                                                                            <div class="row gutters" style="margin-top: 10px">
										<div class="col-xl-4 col-lg col-md-4 col-sm-4 col-12">
                                                                                    <label>Phone No</label>
											<div class="form-group">
                                                                                            <input class="form-control is-warning" name="phone" required="required" placeholder="Enter Phone No" type="text">
											</div>
										</div>
                                                                                <div class="col-xl-4 col-lg col-md-4 col-sm-4 col-12">
                                                                                    <label>Email</label>
											<div class="form-group">
                                                                                            <input class="form-control is-warning" name="email" required="required" placeholder="Enter Email" type="email">
											</div>
										</div>
                                                                                <div class="col-xl-4 col-lg col-md-4 col-sm-4 col-12">
                                                                                    <label>Date of Birth</label>
											<div class="form-group">
                                                                                            <input class="form-control is-warning" name="dateB" required="required" placeholder="Enter Date of Birth" type="date">
											</div>
										</div>
                                                                                
                                                                            </div>
                                                                             <div class="row gutters" style="margin-top: 10px">
										<div class="col-xl-4 col-lg col-md-4 col-sm-4 col-12">
                                                                                    <label>User Name</label>
											<div class="form-group">
                                                                                            <input class="form-control is-warning" name="userName" required="required" placeholder="Enter User Name" type="text">
											</div>
										</div>
                                                                                 
                                                                                 <div class="col-xl-4 col-lg col-md-4 col-sm-4 col-12">
                                                                                    <label>Upload Identification</label>
											<div class="custom-file">
                                                                                            <input type="file" class="form-control"  name="idImage" required="required">
											
											</div>
										</div>
                                                                                 
                                                                                <div class="col-xl-4 col-lg col-md-4 col-sm-4 col-12">
                                                                                    <label>Upload Image Profile</label>
											<div class="custom-file">
                                                                                            <input type="file" class="form-control"  name="Image" required="required">
											
											</div>
										</div>
                                                                            </div>
                                                                            <div class="row gutters" style="margin-top: 10px">
                                                                                
                                                                                <div class="col-xl-4 col-lg col-md-4 col-sm-4 col-12">
                                                                                    <label>Password</label>
											<div class="form-group">
                                                                                            <input class="form-control is-warning" name="pass" required="required" placeholder="Enter Password" type="password">
											</div>
										</div>
                                                                                
                                                                            </div>
                                                                            
                                                                            <div class="row gutters" style="margin-top: 40px">
										<div class="col-xl-4 col-lg col-md-4 col-sm-4 col-12">
                                                                                    <a href="index.php"><button type="button" class="btn btn-danger btn-rounded">Cancel Data</button></a>
                                                                                    <input type="submit" class="btn btn-success btn-rounded" name="btnSave" value="Submit Data">
                                                                                </div>
                                                                            </div>
                                                                            
                                                                        </form>
                                                                    </div>
                                                            </div>
                                                    </div>
                                            </div>

                                    </div>
                            </div>

                             <footer class="main-footer">©2020 Side .Java</footer>
                    </div>

            </div>
        <?php include 'pages/foterLink.php';?>
        
        <?php 
        unset($_SESSION['errorMessage']);
        ?>
    </body>
</html>