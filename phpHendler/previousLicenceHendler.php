
<?php
 session_start();
include "db_Connection.php";
if (isset($_POST['btnSave']))
{
     try 
    {
    $preL=$_POST['preLicen'];
    $issDate=$_POST['predateI'];
    $expireD=$_POST['predateE'];
  
    
    
    $regNo=$_SESSION['regNoVehicle'];
    
    $user1=$_SESSION['user'];
    $regNoV=$_SESSION['regVehcle'];
    
    $previous =$_POST['previous'];
    
    if ($previous=='Yes'){
        
        $sql1 ="insert into previously_licence values (?,?,?,?,?)"; 
        $stmt2 = $db_con->prepare($sql1);
        $stmt2->execute(array(NULL,$preL,$issDate,$expireD,$regNo));
        $rows = $stmt2->rowCount();
        if ($rows>0)
        {
            $_SESSION['inserted']="Record inserted successfully";
            header("Location:../previousLisenceForm.php");
            exit();
        }
    } else {
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
                header("Location:../previousLisenceForm.php");
                exit();
            }
        
    }
    
    
    }
    catch (Exception $ex) 
    {
        $_SESSION['errorMessages']="inserted fail".$ex->getMessage();
        header("Location:../previousLisenceForm.php");
        exit();

    }
    
    
    
}



?>