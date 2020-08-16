<?php
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
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 o">
							</div>
                                                    
                                                    
						</div>
					</div>
				</header>

				<div class="main-content"> 
                                                                        
                                    <!-- BEGIN .Custom-header -->
                                    <header class="custom-banner" style="min-height:390px">
                                            <div class="container-fluid">
                                                    <div class="row gutters" style="margin-top: 55px">
                                                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 ">
                                                                    <div class="welcome-msg">
                                                                        <?php
                                                                        $users=$_SESSION['user'];
                                                                        include 'phpHendler/db_Connection.php';
                                                                        $sql = "SELECT * from users where userName=?";
                                                                         $stmt = $db_con->prepare($sql);
                                                                        $stmt->execute(array($users));
                                                                        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                                                        foreach ($rows as $print)
                                                                        {?>
                                                                        <div class="welcome-user-thumb">
                                                                            <img src="images/<?php echo $print['imageUpload']; ?>" />
                                                                        </div>
                                                                            <div class="welcome-title">
                                                                                <span> Hello,&nbsp;<?php echo $print['userName']; ?></span>
                                                                            </div>
                                                                            <div class="welcome-designation">
                                                                                    <span> Welcome to Car License Management System </span>
                                                                            </div>
                                                                        <a href="home.php" class="btn btn-success btn-sm">Role: <?php echo $print['role']; ?></a>
                                                                        
                                                                    </div>
                                                            </div>
                                                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 " style="border-top: 1px solid #D8D8BF;margin-top: 15px;">
                                                            <div class="row" style="margin-top: 15px;">
                                                                <div class="col-md-2">
                                                                    <label><b style="color: white">Full Name : </b></label>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <span style="color: #A62A2A"><b> <?php echo $print['fullName']; ?></b> </span>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <label><b style="color: white">Address : </b></label>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <span style="color: #A62A2A"><b> <?php echo $print['adress']; ?> </b></span>
                                                                </div>
                                                            </div>
                                                            <div class="row" style="margin-top: 15px;">
                                                                <div class="col-md-2">
                                                                    <label><b style="color: white">Gender :</b> </label>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <span style="color: #A62A2A"><b> <?php echo $print['gender']; ?> </b></span>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <label><b style="color: white">Shehia : </label>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <span style="color: #A62A2A;margin-left: 80px" class="pull-right"> <?php echo $print['shehia']; ?> </span>
                                                                </div>
                                                            </div>
                                                            <div class="row" style="margin-top: 15px;">
                                                                <div class="col-md-2">
                                                                    <label><b style="color: white">Email : </b></label>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <span style="color: #A62A2A"> <?php echo $print['email']; ?> </span>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <label><b style="color: white">District : </b></label>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <span style="color: #A62A2A"> <?php echo $print['district']; ?> </span>
                                                                </div>
                                                            </div>
                                                            <div class="row" style="margin-top: 15px;">
                                                                <div class="col-md-2">
                                                                     <label><b style="color: white">Phone No : </b></label>
                                                                </div>
                                                                <div class="col-md-4">
                                                                   <span style="color: #A62A2A"> <?php echo $print['phoneNo']; ?> </span>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <label><b style="color: white">D.O.B : </b></label>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <span style="color: #A62A2A"> <?php echo $print['dob']; ?> </span>
                                                                </div>
                                                            </div>
                                                            <div class="row" style="margin-top: 15px;">
                                                                <div class="col-md-2">
                                                                     <label><b style="color: white">House No : </b></label>
                                                                </div>
                                                                <div class="col-md-4">
                                                                   <span style="color: #A62A2A"> <?php echo $print['hourseNo']; ?> </span>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <label> <b style="color: white">Status : </b></label>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <span style="color: #A62A2A"> <?php echo $print['actives']; ?> </span>
                                                                </div>
                                                            </div>
                                                            
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                            </div>
                                    </header>
                                    <!-- END: .Custom-header -->                      
                            </div>
                                
                                
                                
				<footer class="main-footer">©2020 Side .Java</footer>
			</div>
		</div>
            
		<?php include 'pages/foterLink.php';?>
		
	</body>


</html>