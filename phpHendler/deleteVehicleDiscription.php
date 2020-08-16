
<?php
session_start();
include "db_Connection.php";
try{
       
       $id=$_GET['IdDelVehicle'];
       $sql = "delete from vehicle_description where regNo = ?";
       $stmt = $db_con->prepare($sql);
       $stmt->execute(array($id));
       $row = $stmt->rowCount();
       $db = null;
       if($row>0)
       {
           $_SESSION['deleted'] = "Record successfully deleted";
           header("Location:../viewVehicleDescription.php");
           exit();
       }
   } catch (Exception $ex) {
        $_SESSION['errorMessage'] = "Operation fails ".$ex->getMessage();
        header("Location:../viewVehicleDescription.php");
        exit();
   }