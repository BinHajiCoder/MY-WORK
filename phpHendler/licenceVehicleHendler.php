
<?php
 session_start();
include "db_Connection.php";
if (isset($_POST['btnSave']))
{
     try 
    {
    $licence =$_POST['licenc'];
    $types=$_POST['type'];
    $seat=$_POST['seat'];
    $refuse=$_POST['refuse'];
    
    
    $regNo=$_SESSION['regNoVehicle'];
    
    $licenceV =$_POST['licence'];
    
    if ($licenceV=='Yes'){
        
        $sql1 ="insert into licencevehicle values (?,?,?,?,?)"; 
        $stmt2 = $db_con->prepare($sql1);
        $stmt2->execute(array(NULL,$licence,$seat,$types,$regNo));
        $rows = $stmt2->rowCount();
        if ($rows>0)
        {
            $_SESSION['inserted']="Record inserted successfully";
            header("Location:../suspendedForm.php");
            exit();
        }
    } else {
        $sql ="insert into refuseapplication values (?,?,?)"; 
        $stmt = $db_con->prepare($sql);
        $stmt->execute(array(NULL,$refuse,$regNo));
        $row = $stmt->rowCount();
        if ($row>0)
        {
            $_SESSION['inserted']="Record inserted successfully";
            header("Location:../suspendedForm.php");
            exit();
        }
    }
    
    
    }
    catch (Exception $ex) 
    {
        $_SESSION['errorMessages']="inserted fail".$ex->getMessage();
        header("Location:../licenceVehicleForm.php");
        exit();

    }
    
    
    
}



?>