<?php
include 'phpHendler/db_Connection.php';
session_start();
if(!isset($_SESSION['user']))
{
    header('location:index.php');
}
?>

<!Doctype html>
<html lang="en">
<head>
	<?php include 'pages/headerLink.php';?>
        <link href="datatables/dataTables.bs4.css" rel="stylesheet" type="text/css"/>
        <link href="datatables/dataTables.bs4-custom.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript">
             
             $(document).ready(function (){
                $("#preDefoult").show();
                $("#preYes").hide();
                $("#preNo").hide();
                
                $("#previousYes").click(function (){
	          $("#preYes").show();
	          $("#preNo").hide();
	          $("#preDefoult").hide();
	          
	        });
                $("#previousNo").click(function (){
	          $("#preYes").hide();
	          $("#preNo").show();
	          $("#preDefoult").hide();
	          
	        });
                });
        </script>
	</head>
        <body style="background: #D8D8BF">
		<div class="app-wrap">
			<header class="app-header">
				<div class="container-fluid" style="background-image: linear-gradient(to top right,#edfd69 ,  #0766a7);">

					<?php include 'pages/profileName.php';?>
				</div>
			</header>
			<!-- END: .app-heading -->
                        
			<div class="app-container">
				<nav class="navbar navbar-expand-lg navbar-menu">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon">
							<i class="icon-menu5"></i>
						</span>
					</button>
                                    
                                    <?php include 'menu.php';?>
				</nav>
                            
				<!-- BEGIN: .page-header, Title of the Page -->
				<header class="page-header">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
								<div class="page-title">
									<h3 style="font-family: Times New Roman;color: #D8D8BF">Welcome To Department of Transport and Licensing.</h3>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							</div>
                                                    
                                                    
						</div>
					</div>
				</header>

				<div class="main-content"> 
                                    <!-- Row start -->
                                    <div class="row gutters">
                                        
                                        <?php
                                            if (isset($_SESSION['errorMessages'])){
                                         ?>
                                        <div style="margin-top: 5px">
                                             <p style="color:red;text-align:center;"> <?php echo $_SESSION['errorMessages'];?> </p> 

                                         </div>
                                         <?php } ?>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <div class="card">
                                            
                                                <div class="card-body">
                                                    <form action="phpHendler/previousLicenceHendler.php" method="POST" enctype="multipart/form-data">
                                                    <div class="row gutters">
                                                        
                                                        <?php
                                                            if (isset($_SESSION['errorMessage'])){
                                                         ?>
                                                        <div style="margin-top: 5px">
                                                             <p style="color:red;text-align:center;"> <?php echo $_SESSION['errorMessage'];?> </p> 

                                                         </div>
                                                         <?php } ?>
                                                        
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6" >
                                                            <div class="card" style="min-height: 200px">
                                                                <div class="card-header"> Vehicle Previously licence Form</div>
                                                                <div class="card-body" style="margin-bottom: 5px">

                                                                    <div class="row justify-content-sm-center" >
                                                                        <div class="col-md-12" >
                                                                            <label><b style="color: #A62A2A">Has your vehicle (s) been previously licenced ?.... </b></label>
                                                                                
                                                                            </div>
                                                                    </div>
                                                                    <div class="row justify-content-sm-center" style="margin-top: 20px">
                                                                        <div class="col-md-6" >
                                                                            <label><b>Yes : </b></label>
                                                                            <input type="radio" name="previous" required="required" id="previousYes" value="Yes">
                                                                        </div>
                                                                        <div class="col-md-6" >
                                                                            <label><b>No : </b></label>
                                                                            <input type="radio" name="previous" required="required" id="previousNo" value="No">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row justify-content-sm-center" style="margin-top:  120px">
                                                                        <div class="col-md-12" >
                                                                            <label><b style="color: #A62A2A">If finished to list licennce no <span style="color: green">Click No</span> to continue the app </b></label>
                                                                                
                                                                            </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6" >
                                                            <div class="card" >
                                                                <div class="card-body" id="preYes">

                                                                    <div class="row justify-content-sm-center" style="margin-top: 25px">
                                                                        <div class="col-md-12" >
                                                                            <label><b>If Yes , list the licence Number.... </b></label>
                                                                                
                                                                            </div>
                                                                    </div>
                                                                    <div class="row justify-content-sm-center" style="margin-top: 10px">
                                                                        <div class="col-md-12" >
                                                                            <label>Licence Vehicle No :</label>
                                                                            <input class="form-control is-warning" name="preLicen" placeholder="Enter Licence Vehicle No" type="text">
                                                                            </div>
                                                                    </div>
                                                                    <div class="row justify-content-sm-center" style="margin-top: 10px">
                                                                        <div class="col-md-12" >
                                                                            <label>Issue Date :</label>
                                                                            <input class="form-control is-warning" name="predateI" placeholder="Enter the Issue Date" type="date">
                                                                            </div>
                                                                    </div>
                                                                    <div class="row justify-content-sm-center" style="margin-top: 10px">
                                                                        <div class="col-md-12" >
                                                                            <label>Expire Date  </b></label>
                                                                            <input class="form-control is-warning" name="predateE" placeholder="Enter the Expire Date" type="date">
                                                                            </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                                
                                                                <div class="card-body" id="preNo" style="min-height: 285px">

                                                                    <div class="row justify-content-sm-center" style="margin-top: 25px">
                                                                        <div class="col-md-12" >
                                                                            <label>
                                                                                <b>If No, continue the application.... </b>
                                                                            </label>
                                                                            <p></p>
                                                                                <p>Click <span style="color: green">Submit Data</span> to continue the application.</p>
                                                                            </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                                
                                                                
                                                                <div class="card-body" id="preDefoult" style="min-height: 287px">

                                                                    <div class="row justify-content-sm-center" style="margin-top: 25px">
                                                                        <div class="col-md-12" >
                                                                            <label><b>Please select if licence vehicle is one or more then one ..... </b></label>
                                                                                
                                                                            </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="row gutters" style="margin-top: 20px">
                                                            <div class="col-xl-12 col-lg col-md-12 col-sm-12 col-12">
                                                                <a href="suspendedForm.php"><button type="button" class="btn btn-danger btn-rounded">Cancel Data</button></a>
                                                                <input type="submit" class="btn btn-success btn-rounded" name="btnSave" value="Submit Data">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </form>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
					<!-- Row ends -->
                                    
                              
                                
                                
                                
				<footer class="main-footer">©2020 Side .Java</footer>
			</div>
		</div>
		<?php include 'pages/foterLink.php';?>
		
            <script src="datatables/dataTables.min.js" type="text/javascript"></script>
            <script src="datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
            <script src="datatables/custom/custom-datatables.js" type="text/javascript"></script>
            <script src="datatables/custom/fixedHeader.js" type="text/javascript"></script>
            
            
	</body>

        <?php 
        unset($_SESSION['errorMessage']);
        unset($_SESSION['errorMessages']);
        unset($_SESSION['inserted']);
        unset($_SESSION['deleted']);
        unset($_SESSION['updated']);
    ?>
</html>