 
                                                                    
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