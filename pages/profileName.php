<!-- Row start -->
<div class="row gutters" >
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-12">

            <img src="image/carLi.png" alt="" class="col-md-6 col-sm-12 col-xs-12"/>


        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">

                <!-- Header actions start -->
                <ul class="header-actions">
                        

                        <li class="dropdown">
                                <a href="#" id="userSettings" class="user-settings clearfix" data-toggle="dropdown" aria-haspopup="true">
                                        <span class="avatar">
                                                <i class="icon-account_circle"></i>
                                        </span>
                                        <span class="user-name"><?php echo $_SESSION['user'] ?><i class="icon-chevron-small-down downarrow"></i></span>
                                </a>
                                <div class="dropdown-menu md dropdown-menu-right" aria-labelledby="userSettings">
                                        <div class="admin-settings">
                                                <ul class="admin-settings-list">
                                                        <li>
                                                                <a href="#">
                                                                        <span class="icon icon-face"></span>
                                                                        <span class="text-name">My Profile</span>
                                                                </a>
                                                        </li>
                                                </ul>
                                                <div class="actions">
                                                    <a href="index.php" class="btn btn-primary">Logout</a>
                                                </div>
                                        </div>
                                </div>
                        </li>
                </ul>

        </div>
</div>