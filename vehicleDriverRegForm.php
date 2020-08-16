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
                                        <?php
                                            if (isset($_SESSION['errorMessages'])){
                                         ?>
                                        <div style="margin-top: 5px">
                                             <p style="color:red;text-align:center;"> <?php echo $_SESSION['errorMessages'];?> </p> 

                                         </div>
                                         <?php } ?>
                                    <div class="row gutters">
                                        
                                        
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <div class="card">
                                            
                                                <div class="card-body">
                                                    <form action="phpHendler/regVehicleHendler.php" method="POST" enctype="multipart/form-data">
                                                    <div class="row gutters">
                                                        
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6" >
                                                            <div class="card" >
                                                                <div class="card-header"> Vehicle Description Form</div>
                                                                <div class="card-body" style="margin-bottom: 5px">

                                                                    <div class="row justify-content-sm-center" >
                                                                        <div class="col-md-6" >
                                                                            <label><b>Registration No : </b></label>
                                                                                <input class="form-control is-warning" required="required" name="regNo" placeholder="Enter Registration No" type="text">
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label><b>Type of Vehicle : </b></label>
                                                                                <input class="form-control is-warning" required="required" name="typVehicl" placeholder="Enter Type of vehicle" type="text">
                                                                            </div>
                                                                    </div>
                                                                    <div class="row justify-content-sm-center" style="margin-top: 15px">
                                                                        <div class="col-md-6" >
                                                                            <label><b>Seating Capacity : </b></label>
                                                                            <input class="form-control is-warning" required="required" name="seating" placeholder="Enter Seating Capacity" type="number">
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label><b>Station : </b></label>
                                                                                <input class="form-control is-warning" required="required" name="station" placeholder="Enter Station" type="text">
                                                                            </div>
                                                                    </div>
                                                                    <div class="row justify-content-sm-center" style="margin-top: 15px">
                                                                        <div class="col-md-6" >
                                                                            <label><b>Upload Vehicle Certificate : </b></label>
                                                                                <div class="custom-file">
                                                                                    <input type="file" class="form-control"  name="V_Image" required="required">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label><b>Upload Vehicle Road Licence : </b></label>
                                                                               <div class="custom-file">
                                                                                    <input type="file" class="form-control"  name="R_Image" required="required">
                                                                                </div>
                                                                            </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6" >
                                                            <div class="card" >
                                                                <div class="card-header"> Driver who will operate the vehicle</div>
                                                                <div class="card-body" style="margin-bottom: 5px">

                                                                    <div class="row justify-content-sm-center" >
                                                                        <div class="col-md-6" >
                                                                            <label><b>Full Name : </b></label>
                                                                                <input class="form-control is-warning" required="required" name="fullName" placeholder="Enter Full Name" type="text">
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label><b>Address : </b></label>
                                                                                <input class="form-control is-warning" required="required" name="adres" placeholder="Enter Address" type="text">
                                                                            </div>
                                                                    </div>
                                                                    <div class="row justify-content-sm-center" style="margin-top: 15px">
                                                                        <div class="col-md-6" >
                                                                            <label><b>Phone No Driver : </b></label>
                                                                                <input class="form-control is-warning" required="required" name="phone" placeholder="Enter Phone No" type="text">
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label><b>Licence No Driver : </b></label>
                                                                                <input class="form-control is-warning" required="required" name="dlicence" placeholder="Enter Licenece No" type="text">
                                                                            </div>
                                                                    </div>
                                                                    <div class="row justify-content-sm-center" style="margin-top: 15px">
                                                                        <div class="col-md-6" >
                                                                            <label><b>Issue Date Licence : </b></label>
                                                                            <input class="form-control is-warning" required="required" name="issDate" placeholder="Enter Issue Date" type="date">
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label><b>Expire Date Licence : </b></label>
                                                                                <input class="form-control is-warning" required="required" name="exDate" placeholder="Enter Expire Date" type="date">
                                                                            </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row gutters" style="margin-top: 20px">
                                                            <div class="col-xl-12 col-lg col-md-12 col-sm-12 col-12">
                                                                <a href="home.php"><button type="button" class="btn btn-danger btn-rounded">Cancel Data</button></a>
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