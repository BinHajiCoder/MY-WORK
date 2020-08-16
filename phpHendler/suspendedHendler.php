
<?php
 session_start();
include "db_Connection.php";
if (isset($_POST['btnSave']))
{
     try 
    {
    $licenc=$_POST['suspL'];
    $susDate=$_POST['suspdate'];
    $reason=$_POST['suspReason'];
  
    
    
    $regNo=$_SESSION['regNoVehicle'];
    
    $susp =$_POST['suspended'];
    
    if ($susp=='Yes'){
        
        $sql1 ="insert into suspended_licenc values (?,?,?,?,?)"; 
        $stmt2 = $db_con->prepare($sql1);
        $stmt2->execute(array(NULL,$licenc,$susDate,$reason,$regNo));
        $rows = $stmt2->rowCount();
        if ($rows>0)
        {
            $_SESSION['inserted']="Record inserted successfully";
            header("Location:../previousLisenceForm.php");
            exit();
        }
    } else {
            header("Location:../previousLisenceForm.php");
            exit();
        
    }
    
    
    }
    catch (Exception $ex) 
    {
        $_SESSION['errorMessages']="inserted fail".$ex->getMessage();
        header("Location:../suspendedForm.php");
        exit();

    }
    
    
    
}



?>