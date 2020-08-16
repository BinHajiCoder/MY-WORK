 <?php 
    if (($_SESSION['role']) == "Admin") 
        {
?>
<div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
                <li class="nav-item dropdown active" >
                    <a class="nav-link " href="home.php"  role="button"  aria-haspopup="true" aria-expanded="false">
                                <i class="nav-icon icon-home"></i>
                                <span class="nav-item" style="font-family: Times New Roman">Home</span>
                        </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link " href="viewOwnerInfo.php"  role="button"  aria-haspopup="true" aria-expanded="false">
                                <i class="nav-icon icon-cogs"></i>
                                <span class="nav-item" style="font-family: Times New Roman">Owner Infor</span>
                        </a>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link " href="viewVehicleDescription.php" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="nav-icon icon-equalizer"></i>
                                <span class="nav-item" style="font-family: Times New Roman">View Vehicle Infor</span>
                        </a>
                </li>							
                <li class="nav-item dropdown">
                    <a class="nav-link " href="AdminPaymenReply.php"  role="button"  aria-haspopup="true" aria-expanded="false">
                                <i class="nav-icon icon-menu2"></i>
                                <span class="nav-item" style="font-family: Times New Roman">View Payment</span>
                        </a>
                </li>
                <li class="nav-item dropdown">
                        <a class="nav-link " href="#"  role="button"  aria-haspopup="true" aria-expanded="false">
                                <i class="nav-icon icon-lock-open"></i>
                                <span class="nav-item" style="font-family: Times New Roman">Change Password</span>
                        </a>
                </li>
        </ul>
</div>
<?php } else 
{?>

<div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
                <li class="nav-item dropdown active" >
                    <a class="nav-link " href="home.php"  role="button"  aria-haspopup="true" aria-expanded="false">
                                <i class="nav-icon icon-home"></i>
                                <span class="nav-item" style="font-family: Times New Roman">Home</span>
                        </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link " href="vehicleDriverRegForm.php"  role="button"  aria-haspopup="true" aria-expanded="false">
                                <i class="nav-icon icon-cogs"></i>
                                <span class="nav-item" style="font-family: Times New Roman">Manage Vehicle Discription</span>
                        </a>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link " href="paymentView.php" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="nav-icon icon-equalizer"></i>
                                <span class="nav-item" style="font-family: Times New Roman">Manage Payment</span>
                        </a>
                </li>							
                <li class="nav-item dropdown">
                    <a class="nav-link " href="viewResultForm.php"  role="button"  aria-haspopup="true" aria-expanded="false">
                                <i class="nav-icon icon-menu2"></i>
                                <span class="nav-item" style="font-family: Times New Roman">View Result</span>
                        </a>
                </li>
                <li class="nav-item dropdown">
                        <a class="nav-link " href="#"  role="button"  aria-haspopup="true" aria-expanded="false">
                                <i class="nav-icon icon-lock-open"></i>
                                <span class="nav-item" style="font-family: Times New Roman">Change Password</span>
                        </a>
                </li>
        </ul>
</div>
<?php } ?>
