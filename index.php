<?php
    session_start();
?>
<!doctype html>
<html>
<head>
            
             <?php include 'pages/headerLink.php';?>
            <script type="text/javascript">
                history.pushState(null, null, '');
                window.addEventListener('popstate', function(event){
                history.pushState(null, null, '');
                });

            </script>
            
            <script type="text/javascript">
            function notEmptys(){
                var fast=$("#f_Name").val();
                var last=$.trim($("#l_Name").val());
                
                if(fast==""){
                    document.getElementById("fast").value="";
                    document.getElementById("fast").placeholder="Enter fast name";
                    document.getElementById("fast").style.color="#003e3e";
                    document.getElementById("fast").style.borderColor="red";
                    return false;
                }
                else
                    return true;
                
                 
            }
        </script>

    </head>
    <body style="background: #f5f5f5">
            
            <div class="app-wrap">
                    <header class="app-header">
                            <div class="container-fluid" style="background-image: linear-gradient(to top right,#edfd69 ,  #0766a7);">
                                    <div class="row gutters" >
                                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 ">
                                                <img src="image/carLi.png" alt="" class="col-md-6 col-sm-12 col-xs-12"/>
                                            </div>
                                    </div>
                            </div>
                    </header>
                    <div class="app-container">
                         <header class="page-header" style="background: #0766a7">
                                    <div class="container-fluid">
                                            <div class="row">
                                                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12">
                                                            <div class="page-title">
                                                                    <h3>DEPARTMENT OF TRANSORT AND LICENSE</h3>
                                                            </div>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                                    </div>
                                            </div>
                                    </div>
                               
                            </header>
                            <!-- END: .page-header -->
                            
                            <!-- BEGIN: .main-content -->
                            <div class="main-content">

                                    <!-- Row starts -->
                                    <div class="row gutters">
                                        

                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                                    <div class="card todo-container">
                                                        <div class="card-header" style="text-align: center">User Login</div>
                                                            <div class="card-body">


                                                                <form action="phpHendler/loginHendler.php" method="POST" style="margin-top: -70px;margin-bottom: -30px">
                                                                <div class="row justify-content-md-center">
                                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="login-screen">
                                                                                        <div class="login-box">
                                                                                            <a href="#" class="login-logo" style="margin-top: -10px">
                                                                                                <img src="image/carLi.png" alt="" class="col-md-12 col-sm-12 col-xs-12"/>
                                                                                                </a>
                                                                                                <div class="form-group">
                                                                                                    <input type="text" required="required" name="user" class="form-control" placeholder="Username" />
                                                                                                </div>
                                                                                                <div class="form-group">
                                                                                                    <input type="password" required="required" name="pass" class="form-control" placeholder="Password" />
                                                                                                </div>
                                                                                                <div class="actions">
                                                                                                    <button type="submit" name="btnLogin" class="btn btn-primary btn-block">Login</button>
                                                                                                        <a href="#">Forgot password?</a>
                                                                                                       <?php
                                                                                                            if (isset($_SESSION['invaliduser'])){
                                                                                                         ?>
                                                                                                        <div style="margin-top: 5px">
                                                                                                             <p style="color:red;text-align:center;"> <?php echo $_SESSION['invaliduser'];?> </p> 

                                                                                                         </div>
                                                                                                         <?php } ?>
                                                                                                </div>
                                                                                                <div class="mt-4">
                                                                                                    <a href="userRegs.php" class="additional-link">Not Registered? <span>Create an Account</span></a>
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                                </form>
                                                            </div>
                                                    </div>
                                            </div>
                                         
                                         
                                         <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12" >
                                                    <div class="card" style="min-height:420px">
                                                            <div class="card-header">Application for a Public Service vehicle licence (Taxi).</div>
                                                            <div class="card-body">
                                                                    <div class="customScroll4">
                                                                        <div style="padding-bottom:10px">
                                                                            Please Upload the following items when apply the licence :-
                                                                        </div>
                                                                        <ol  >
                                                                            <li style="padding-bottom:10px">A vehicle registration certificate</li>
                                                                            <li  style="padding-bottom:10px">Owner's acceptable identification</li>
                                                                            <li  style="padding-bottom:10px">Receipt for payment of application</li>
                                                                            <li  style="padding-bottom:10px">Vehicle inspection certificate (previous year)&nbsp;<span style="color: #8E2323">{ If we have }</span></li>
                                                                            <li  style="padding-bottom:10px">Road licence (previous year)</li>
                                                                        </ol>
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
        <?php session_destroy(); ?>
    </body>
</html>