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
								<div class="card-header">View Vehicle Description </div>
								<div class="card-body">
                                                                    <div class="row" style="margin-bottom: 10px">
                                                                        <div class="col-md-6">
                                                                            <a href="vehicleDriverRegForm.php"><button input="button" name="btnAdd" class="btn btn-success">Add Vehicle </button></a>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    <div class="table-responsive">
									<table id="basicExample" class="table table-bordered">
										<thead>
											<tr>    
												<th>Registration No</th>
												<th>Type Of Vehicle</th>
												<th>Seat Capacity</th>
												<th>Station</th>
												<th>Certificate IMG</th>
												<th>Road Licence IMG</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>hg</td>
												<td>hg</td>
												<td>gh</td>
												<td>hg</td>
												<td>gh</td>
												<td>hg</td>
												<td>
                                                                                                     <a href="#" class="btn btn-primary btn-sm">
                                                                                                        <i class="icon-pencil3"></i>
                                                                                                    </a>
                                                                                                    
                                                                                                    <a href="#" class="btn btn-danger btn-sm">
                                                                                                        <i class="icon-times"></i>
                                                                                                    </a>
                                                                                                </td>
                                                                                                
											</tr>
										</tbody>
									</table>
                                                                        
                                                                    </div>
                                                                    
								</div>
							</div>
						</div>
					</div>
					<!-- Row ends -->
                                        <div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="card">
								<div class="card-header">View Driver who will operate the vehicle </div>
								<div class="card-body">
                                                                    <div class="table-responsive">
									<table id="rowSelection" class="table table-bordered">
										<thead>
											<tr>    
												<th>Full Name</th>
												<th>Address</th>
												<th>Phone</th>
												<th>Licence No</th>
												<th>Issue Date</th>
												<th>Expire Date</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>hg</td>
												<td>gh</td>
												<td>hg</td>
												<td>gh</td>
												<td>hg</td>
												<td>ghg</td>
                                                                                                <td>
                                                                                                    <a href="#" class="btn btn-primary btn-sm">
                                                                                                        <i class="icon-pencil3"></i>
                                                                                                    </a>
                                                                                                    
                                                                                                    <a href="#" class="btn btn-danger btn-sm">
                                                                                                        <i class="icon-times"></i>
                                                                                                    </a>
                                                                                                </td>
											</tr>
										</tbody>
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