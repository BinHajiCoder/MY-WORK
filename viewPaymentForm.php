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
                                            
                                                
                                                <?php
                                                    $reg3=$_SESSION['reg3'];
                                                    $user3=$_SESSION['user'];
                                                    $sql2="SELECT * FROM vehicle_description v,users u where u.userName=v.userName and v.regNo_Vehicle=? "
                                                            . "and v.userName=? order by regNo desc limit 1;";
                                                    $stmt2 = $db_con->prepare($sql2);
                                                    $stmt2->execute(array($reg3,$user3));
                                                    $rows2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);

                                                    foreach ($rows2 as $print)
                                                    {

                                                   ?>
                                                
                                                
                                                <div class="card-body">
                                                    
                                                    <?php
                                                    if($print['status']==2)
                                                    {?>
                                                    <form action="phpHendler/paymentHendler.php" method="POST" enctype="multipart/form-data">
                                                    <div class="row gutters">
                                                        
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6" >
                                                            <div class="card" style="min-height: 255px">
                                                                <div class="card-header"> Payment Form</div>
                                                                <div class="card-body" style="margin-bottom: 5px">

                                                                    <div class="row justify-content-sm-center" >
                                                                        <div class="col-xl-6 col-lg col-md-6 col-sm-6 col-12">
                                                                                    <label>Branch Name</label>
											<div class="form-group">
                                                                                            <input class="form-control is-warning" required="required" name="branch" placeholder="Enter Branch Name" type="text">
											</div>
										</div>
                                                                        
                                                                        <div class="col-xl-6 col-lg col-md-6 col-sm-6 col-12">
                                                                                    <label>Account No</label>
											<div class="form-group">
                                                                                            <input class="form-control is-warning" required="required" name="acc" placeholder="Enter Account No" type="number">
											</div>
										</div>
                                                                        
                                                                        
                                                                    </div>
                                                                    
                                                                    <div class="row justify-content-sm-center" >
                                                                        <div class="col-xl-6 col-lg col-md-6 col-sm-6 col-12">
                                                                                    <label>Amount</label>
											<div class="form-group">
                                                                                            <input class="form-control is-warning" required="required" name="amount" placeholder="Enter Amount " type="number">
											</div>
										</div>
                                                                        
                                                                        <div class="col-xl-6 col-lg col-md-6 col-sm-6 col-12">
											<label>Upload Payment Receipt</label>
											<div class="custom-file">
                                                                                            <input type="file" class="form-control"  name="receipt" required="required">
											
											</div>
										</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6" >
                                                            <div class="card" style="min-height: 255px">
                                                                <div class="card-body" id="pubYes">

                                                                    <div class="row justify-content-sm-center" style="margin-top: 25px">
                                                                        <div class="col-md-12" >
                                                                            <label><b>Please upload the payment receipt.......</b></label>
                                                                                
                                                                            </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="row gutters" style="margin-top: 20px">
                                                            <div class="col-xl-12 col-lg col-md-12 col-sm-12 col-12">
                                                                <a href="paymentView.php"><button type="button" class="btn btn-danger btn-rounded">Cancel Data</button></a>
                                                                <input type="submit" class="btn btn-success btn-rounded" name="btnSave" value="Submit Data">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </form>
                                                    <?php }
                                                        else if($print['status']>=4)
                                                        {?>
                                                    
                                                    <div class="offset-md-2 col-md-8 offset-md-2 bg-success text-center" style="color: white"><h3>The application complete. Please view the result.</h3></div>
                                                     <div class="col-md-12" style="font-size: 14pt; margin-top: 20px"></div>
                                                    
                                                    <?php }
                                                        else 
                                                        {?>
                                                    
                                                    <div class="offset-md-2 col-md-8 offset-md-2 bg-danger text-center" style="color: white"><h3>Please weit the application is proceed...!!!</h3></div>
                                                     <div class="col-md-12" style="font-size: 14pt; margin-top: 20px"></div>
                                                     <?php
                                                        }
                                                        ?>
                                                </div>
                                                <?php } ?>
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