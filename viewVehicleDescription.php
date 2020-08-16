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
        <script>
        function Delete(){
                return confirm("do you want to delete?");
        }
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
                                    <?php if(isset($_SESSION['deleted'])){?>
                                    <div class="col-md-12 bg-success" id="success-msg" style="margin-bottom: 10px"><label class="success" style="color: white;text-align: center;"><?php echo $_SESSION['deleted']; ?></label></div>
                                    <?php }?>
                                    <!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="card">
								<div class="card-header">View Vehicle Description </div>
								<div class="card-body">
                                                                    
                                                                    <?php
                                                                        $sql="SELECT * FROM taxi_recording.vehicle_description order by regNo desc;";
                                                                         $stmt = $db_con->prepare($sql);
                                                                         $stmt->execute();
                                                                         $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                                                         if($rows)
                                                                         {

                                                                     ?>
                                                                    
                                                                    <div class="table-responsive">
									<table id="basicExample" class="table table-bordered">
										<thead>
											<tr>     <th>S.NO</th>
												<th>Registration No</th>
												<th>Type Of Vehicle</th>
												<th>Seat Capacity</th>
												<th>Station</th>
												<th>Certificate IMG</th>
												<th>Road Licence IMG</th>
                                                                                                <th>Checked</th>
                                                                                                <th>View Reply</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
                                                                                     <?php
                                                                                        $sno =1;
                                                                                        foreach ($rows as $print)
                                                                                        {
                                                                                            $regNo= $print['regNo_Vehicle'];
                                                                                            $type= $print['typeVehicle'];
                                                                                            $seat= $print['seateCapacity'];
                                                                                            $staion= $print['station'];
                                                                                            $certif= $print['certificateInfor'];
                                                                                            $road= $print['roadCertificateLicence'];
                                                                                            $idReg= $print['regNo'];
                                                                                            $status= $print['status'];

                                                                                      ?>
                                                                                        
											<tr>
												<td><?php echo $sno ?></td>
												<td><?php echo $regNo ?></td>
												<td><?php echo $type ?></td>
												<td><?php echo $seat ?></td>
												<td><?php echo $staion ?></td>
												<td><?php echo $certif ?></td>
                                                                                                <td><?php echo $road ?></td>
                                                                                                <td>
                                                                                                <?php if ($status>=2){?>
                                                                                                <span class="badge badge-success col-md-12 ">Checked</span>
                                                                                                <?php } else {?>
                                                                                                <span class="badge badge-danger col-md-12">Not Checked</span>
                                                                                                <?php }?>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <a  href="MoreViewVehicleForm.php?viewID=<?php echo  $idReg ?>">View Reply</a>
                                                                                                </td>
												<td>
                                                                                                    <a href="phpHendler/deleteVehicleDiscription.php?IdDelVehicle=<?php echo  $idReg ?>" onclick ="return Delete()" class="btn btn-danger btn-sm">
                                                                                                        <i class="icon-times"></i>
                                                                                                    </a>
                                                                                                </td>
                                                                                                
											</tr>
                                                                                        <?php
                                                                                        $sno++;
                                                                                        }
                                                                                        ?> 
										</tbody>
                                                                                 <?php }
                                                                                ?>
									</table>
                                                                        
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
		
            <script src="datatables/dataTables.min.js" type="text/javascript"></script>
            <script src="datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
            <script src="datatables/custom/custom-datatables.js" type="text/javascript"></script>
            <script src="datatables/custom/fixedHeader.js" type="text/javascript"></script>
            
            
	</body>

<?php 
        unset($_SESSION['errorMessage']);
        unset($_SESSION['inserted']);
        unset($_SESSION['deleted']);
        unset($_SESSION['updated']);
    ?>
</html>