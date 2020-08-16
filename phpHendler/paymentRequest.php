<?php
session_start();
include "db_Connection.php";
if (isset($_POST['btnSave']))
{
    try{
        $reg=$_POST['reg'];
        $users=$_SESSION['user'];
        
        $sql="SELECT * FROM vehicle_description v,users u where u.userName=v.userName and "
                . "v.regNo_Vehicle=? and v.userName=? order by regNo desc limit 1;";
        $statement=$db_con->prepare($sql);
        $statement->execute(array($reg,$users));
        $row =$statement->fetchAll(PDO::FETCH_ASSOC);
        if ($row)
            {
            foreach ($row as $print) 
            {
                
                $_SESSION['reg3'] = $print['regNo_Vehicle'];
                $_SESSION['status4']=$print['status'];
                $_SESSION['reg4']=$print['regNo'];
                
                header("Location:../viewPaymentForm.php");
                exit();
            }
            
            
        }
        else{
            $db_con=null;
            $_SESSION['errorMessages']="Request Fail. Try again";
            header("Location:../paymentView.php");
            exit();
     }
        
    } catch (Exception $ex) {
        die($ex->getMessage());

    }
    
    
    
    
}
?>


