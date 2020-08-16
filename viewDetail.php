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
					<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="card">
								<div class="card-header"> Owner Information Detail</div>
								<div class="card-body">
                                                                    
                                                                    
                                                                    <?php
                                                                        $idViews=$_GET['idView'];
                                                                        $sql = "SELECT * from users where userName=?";
                                                                         $stmt = $db_con->prepare($sql);
                                                                        $stmt->execute(array($idViews));
                                                                        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                                                        foreach ($rows as $print)
                                                                        {?>
                                                                    
                                                                    <div class="row gutters">
                                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6" >
                                                                            <div class="card" >
                                                                                <div class="card-body" style="margin-bottom: 5px">
                                                                                    
                                                                                    <div class="row justify-content-sm-center" >
                                                                                        <div class="col-md-6" >
                                                                                            <label><b>Full Name : </b></label>
                                                                                                <span style="color: #A62A2A"> <?php echo $print['fullName']; ?> </span>
                                                                                            </div>
                                                                                            <div class="col-md-6">
                                                                                                <label><b>Address : </b></label>
                                                                                                <span style="color: #A62A2A"> <?php echo $print['adress']; ?> </span>
                                                                                            </div>
                                                                                    </div>
                                                                                    
                                                                                    <div class="row justify-content-sm-center" style="margin-top: 15px">
                                                                                        <div class="col-md-6 pull-left" >
                                                                                            <label><b>Gender : </b></label>
                                                                                            <span style="color: #A62A2A"> <?php echo $print['gender']; ?> </span>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <label><b>Shehia : </b></label>
                                                                                            <span style="color: #A62A2A"><?php echo $print['shehia']; ?> </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                    <div class="row justify-content-sm-center" style="margin-top: 15px">
                                                                                        <div class="col-md-6">
                                                                                            <label><b>Email : </b></label>
                                                                                            <span style="color: #A62A2A"> <?php echo $print['email']; ?> </span>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <label><b>District : </b></label>
                                                                                            <span style="color: #A62A2A"> <?php echo $print['district']; ?></span>
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                     <div class="row justify-content-sm-center" style="margin-top: 15px">
                                                                                        <div class="col-md-6">
                                                                                            <label><b>Phone No : </b></label>
                                                                                            <span style="color: #A62A2A"> <?php echo $print['phoneNo']; ?> </span>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <label><b>D.O.B : </b></label>
                                                                                            <span style="color: #A62A2A">  <?php echo $print['dob']; ?> </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                    <div class="row justify-content-sm-center" style="margin-top: 15px">
                                                                                        <div class="col-md-6">
                                                                                            <label><b>House No : </b></label>
                                                                                            <span style="color: #A62A2A"> <?php echo $print['hourseNo']; ?> </span>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <label><b> Status : </b></label>
                                                                                            <span style="color: #A62A2A"> <?php echo $print['actives']; ?></span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row justify-content-sm-center" style="margin-top: 15px">
                                                                                        <div class="col-md-6">
                                                                                            <label><b>User Name : </b></label>
                                                                                            <span style="color: #A62A2A"> <?php echo $print['userName']; ?> </span>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <label> <b>Role :</b> </label>
                                                                                            <span style="color: #A62A2A"><?php echo $print['role']; ?></span>
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                                            <div class="card">
                                                                                <div class="card-body">
                                                                                    
                                                                                    
                                                                                    
                                                                                    <div class="row justify-content-sm-center">
                                                                                        <div class="col-md-12">
                                                                                            <a href="identification/<?php echo $print['id_Identification']; ?>" download="Identification">
                                                                                                <img src="identification/<?php echo $print['id_Identification']; ?>" alt="Identification" title="Download Identification" class="img-thumbnail img img-responsive"/>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <?php } ?>
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


</html>