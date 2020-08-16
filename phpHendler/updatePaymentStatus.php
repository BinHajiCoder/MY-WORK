
<?php
 session_start();
include "db_Connection.php";
try{
       $regId=$_GET['updateID'];
       $updat='2';
       $sql = "Update vehicle_description set status=? where regNo = ?";
       $stmt = $db_con->prepare($sql);
       $stmt->execute(array($updat,$regId));
       $row = $stmt->rowCount();
       $db_con = null;
       if($row>0)
       {
           header("Location:../viewVehicleDescription.php");
        } 

       }catch (Exception $ex) {
        $_SESSION['errorMessage'] = "Operation fails ".$ex->getMessage();
        header("Location:../viewVehicleDescription.php");
        exit();
   }
   ?>
