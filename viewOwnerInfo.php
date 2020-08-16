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
								<div class="card-header">View Owner Information</div>
								<div class="card-body">
                                                                    
                                                                    <?php
                                                                        $sql="SELECT * FROM taxi_recording.users where role='Owner';";
                                                                         $stmt = $db_con->prepare($sql);
                                                                         $stmt->execute();
                                                                         $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                                                         if($rows)
                                                                         {

                                                                     ?>
                                                                    
                                                                    <div class="table-responsive">
									<table id="basicExample" class="table table-bordered">
										<thead>
											<tr>    
                                                                                                <th>S.NO</th>
												<th>Full Name</th>
												<th>Address</th>
												<th>Gender</th>
												<th>District</th>
												<th>Shehia</th>
												<th>Email</th>
												<th>Details</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
                                                                                    <?php
                                                                                        $sno =1;
                                                                                        foreach ($rows as $print)
                                                                                        {
                                                                                            $user_name= $print['userName'];
                                                                                            $full_name= $print['fullName'];
                                                                                            $adres= $print['adress'];
                                                                                            $gender= $print['gender'];
                                                                                            $dist= $print['district'];
                                                                                            $shehia= $print['shehia'];
                                                                                            $email= $print['email'];
                                                                                            $active= $print['actives'];

                                                                                      ?>
											<tr>
												<td><?php echo $sno ?></td>
												<td><?php echo $full_name ?></td>
												<td><?php echo $adres ?></td>
												<td><?php echo $gender ?></td>
												<td><?php echo $dist ?></td>
												<td><?php echo $shehia ?></td>
												<td><?php echo $email ?></td>
                                                                                                <td><a href="viewDetail.php?idView=<?php echo  $user_name ?>"> View Details </a></td>
                                                                                                <td>
                                                                                                    <?php if ($active=='Active'){?>
                                                                                                    <a href="phpHendler/activeUser.php?activeId=<?php echo  $user_name ?>">
                                                                                                    <span class="badge badge-success col-md-12 "><?php echo $active ?></span>
                                                                                                    </a>
                                                                                                    <?php } else {?>
                                                                                                    <a href="phpHendler/inactiveUser.php?inactiveId=<?php echo  $user_name ?>">
                                                                                                    <span class="badge badge-danger col-md-12"><?php echo $active ?></span>
                                                                                                    </a>
                                                                                                    <?php }?>
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
					<!-- Row ends -->
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


</html>