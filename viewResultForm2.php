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
                                                                    
                                                                    <?php
                                                                        $reg2=$_SESSION['reg1'];
                                                                        $user2=$_SESSION['user'];
                                                                        $sql2="SELECT * FROM vehicle_description v,users u where u.userName=v.userName and v.regNo_Vehicle=? "
                                                                                . "and v.userName=? order by regNo desc limit 1;";
                                                                        $stmt2 = $db_con->prepare($sql2);
                                                                        $stmt2->execute(array($reg2,$user2));
                                                                        $rows2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);

                                                                        foreach ($rows2 as $print)
                                                                        {

                                                                       ?>
                                                                    <div class="row" style="margin-top: 15px">
                                                                        <?php
                                                                        if($print['status']==0)
                                                                        {?>
                                                                        <div class="offset-md-2 col-md-8 offset-md-2 bg-danger text-center" style="color: white"><h3>Please complete the vehicle discription information...!!!</h3></div>
                                                                    <div class="col-md-12" style="font-size: 14pt; margin-top: 20px"></div>
                                                                    
                                                                    <?php }
                                                                        else if($print['status']==1)
                                                                        {?>
                                                                    
                                                                    <div class="offset-md-2 col-md-8 offset-md-2 bg-info text-center" style="color: white"><h3>Please wait your request is still processed!!!</h3></div>
                                                                    <div class="col-md-12" style="font-size: 14pt; margin-top: 20px"></div>
                                                                    
                                                                    <?php }
                                                                        else if($print['status']==2)
                                                                        {?>
                                                                    
                                                                    <div class="offset-md-2 col-md-8 offset-md-2 bg-info text-center" style="color: white"><h3>Please upload the payment receipt (Manage Payment)</h3></div>
                                                                    <div class="col-md-12" style="font-size: 14pt; margin-top: 20px"></div>
                                                                    
                                                                    <?php }
                                                                        else if($print['status']==3)
                                                                        {?>
                                                                    
                                                                    <div class="offset-md-2 col-md-8 offset-md-2 bg-info text-center" style="color: white"><h3>Please weit the application complete soon as possible.....!!!</h3></div>
                                                                    <div class="col-md-12" style="font-size: 14pt; margin-top: 20px"></div>
                                                                    
                                                                    <?php }
                                                                        else if($print['status']==4)
                                                                        {?>
                                                                        
                                                                            <div class="offset-md-2 col-md-8 offset-md-2 bg-danger text-center" style="color: white"><h3>Your request has been denied. Please visit the head department of licence for more information  </h3></div>
                                                                            <div class="col-md-12" style="font-size: 14pt; margin-top: 20px"></div>
                                                                    
                                                                    <?php }
                                                                        else
                                                                        {?>
                                                                            
                                                                            
                                                                            <?php
                                                                                $reg01=$_SESSION['reg1'];
                                                                                $user01=$_SESSION['user'];
                                                                                $sql01="SELECT * FROM vehicle_description v,users u,result r where u.userName=v.userName and v.regNo=r.regNo "
                                                                                        . "and v.regNo_Vehicle=? and v.userName=? order by v.regNo desc limit 1";
                                                                                $stmt02 = $db_con->prepare($sql01);
                                                                                $stmt02->execute(array($reg01,$user01));
                                                                                $rows02 = $stmt02->fetchAll(PDO::FETCH_ASSOC);

                                                                                foreach ($rows02 as $print01)
                                                                                {

                                                                            ?>
                                                                                
                                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 offset-md-3 offset-md-3" >
                                                                        <div class="card">
                                                                            <div class="card-body" style="background: #d1eaed">
                                                                                <div class="row" style="min-height: 200px;" >
                                                                                    <div class="col-md-12" style="background: #75dce8">
                                                                                        <div class="row" style="background: #d1eaed">
                                                                                            <div class="col-md-9"></div>
                                                                                            <div class="col-md-3" style="margin-bottom: 10px">
                                                                                                <button type="button" class="btn btn-orange btn-sm" onClick="window.print()">Prints 
                                                                                            <i class="icon icon-colours"></i></button>
                                                                                            </div>
                                                                                        </div>
                                                                                         <div class="row" id="pr">
                                                                                              <div class="col-md-12">
                                                                                         <div class="row" style="margin-top: 2%">
                                                                                                 <div class="col-md-4">Full Name</div>
                                                                                                 <div class="col-md-8"><?php echo ($print01['fullName']);?></div>
                                                                                          </div>
                                                                                         <div class="row" style="margin-top: 2%">
                                                                                                 <div class="col-md-4">Vehicle Lecense</div>
                                                                                                 <div class="col-md-8"><?php echo ($print01['regNo_Vehicle']);?></div>
                                                                                          </div>
                                                                                         <div class="row" style="margin-top: 2%">
                                                                                                 <div class="col-md-4">Vehicle Type</div>
                                                                                                 <div class="col-md-8"><?php echo ($print01['typeVehicle']);?></div>
                                                                                          </div>
                                                                                         
                                                                                         <div class="row" style="margin-top: 2%">
                                                                                                 <div class="col-md-4">Date Issue</div>
                                                                                                 <div class="col-md-8"><?php echo ($print01['dateIssue']);?></div>
                                                                                          </div>
                                                                                         
                                                                                         <div class="row" style="margin-top: 2%">
                                                                                                 <div class="col-md-4">Date Expire</div>
                                                                                                 <div class="col-md-8"><?php echo ($print01['dateExpire']);?></div>
                                                                                          </div>
                                                                                         </div>
                                                                                         </div>
                                                                                        
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <?php } ?>
                                                                    
                                                                    <?php
                                                                        }
                                                                        ?>
                                                                    
                                                                    </div>
                                                                     <?php } ?>
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