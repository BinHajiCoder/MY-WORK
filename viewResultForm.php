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
                                                   <div class="row gutters">
                                                        
                                                       
                                                       
                                                       
                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" >
                                                            <div class="card">
                                                                <div class="card-header"> View Result Information</div>
                                                                <div class="card-body" style="background: #edf2f3">
                                                                    
                                                                    <form action="phpHendler/requestRegistrationVehicleNo.php" method="POST">
                                                                        <div class="col-xl-4 col-lg col-md-4 col-sm-4 col-12">
                                                                            <label>Please Select Vehicle Registration No :</label>
                                                                                <div class="form-group">
                                                                                    <select class="form-control selectpicker is-warning" required="required" name="reg" data-live-search="true">
                                                                                        <option data-tokens="">------- Select Reg No ------</option>
                                                                                        
                                                                                        <?php 
                                                                                        $users=$_SESSION['user'];
                                                                                            $sql = "SELECT distinct regNo_Vehicle FROM vehicle_description v,users u where u.userName=v.userName and v.userName=? ";
                                                                                            $stmt = $db_con->prepare($sql);
                                                                                            $stmt->execute(array($users));
                                                                                            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                                                                            foreach ($rows as $print)
                                                                                            {
                                                                                                $regN = $print['regNo_Vehicle'];
                                                                                                ?>
                                                                                        
                                                                                        <option data-tokens="<?php echo $regN;?>"><?php echo $regN;?></option>
                                                                                        
                                                                                        <?php
                                                                                            }
                                                                                          ?>
                                                                                    </select>
                                                                                </div>
                                                                        </div>
                                                                        <div class="row gutters" style="margin-top: 40px">
										<div class="col-xl-4 col-lg col-md-4 col-sm-4 col-12">
                                                                                    <input type="submit" class="btn btn-success btn-rounded" name="btnSave" value="Requeast Result">
                                                                                </div>
                                                                            </div>
                                                                    </form>
                                                                    
                                                                    <hr>
                                                                    
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <label style="color: red"> If complete to register the vehicle discription, select the request Reg No to view the result. if not register  the vehicle please register fist then view result. </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                   </div>
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