
<?php
 session_start();
include "db_Connection.php";
if (isset($_POST['btnSave']))
{
     try 
    {
    $dat =$_POST['date'];
    $licen=$_POST['licenc'];
    
    
    $regNo=$_SESSION['regNoVehicle'];
    $user1=$_SESSION['user'];
    $regNoV=$_SESSION['regVehcle'];
    
    $public =$_POST['public'];
    
    if ($public=='Yes'){
        
        $sql1 ="insert into public_service values (?,?,?,?)"; 
        $stmt2 = $db_con->prepare($sql1);
        $stmt2->execute(array(NULL,$dat,$licen,$regNo));
        $rows = $stmt2->rowCount();
        if ($rows>0)
        {
            $_SESSION['inserted']="Record inserted successfully";
            header("Location:../licenceVehicleForm.php");
            exit();
        }
    } 
    if ($public=='No') {
            $stat='1';
           $sql = "Update vehicle_description set status=? where vehicle_description.userName=? and vehicle_description.regNo_Vehicle=? ";
           $stmt = $db_con->prepare($sql);
           $stmt->execute(array($stat,$user1,$regNoV));
           $row = $stmt->rowCount();
          
           if($row>0)
           {
               header("Location:../viewResultForm.php");
            } else {
                $_SESSION['errorMessages']="update  fail";
                header("Location:../publicServiceForm.php");
                exit();
            }
    }
    
    
    }
    catch (Exception $ex) 
    {
        $_SESSION['errorMessages']="inserted fail".$ex->getMessage();
        header("Location:../vehicleDriverRegForm.php");
        exit();

    }
    
    
    
}



?>