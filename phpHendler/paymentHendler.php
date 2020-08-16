
<?php
 session_start();
include "db_Connection.php";
if (isset($_POST['btnSave']))
{
     try 
    {
    $branch=$_POST['branch'];
    $acount=$_POST['acc'];
    $amount=$_POST['amount'];
    
    $file=$_FILES['receipt']['tmp_name'];
    move_uploaded_file($_FILES["receipt"]["tmp_name"],"../receipt/" . $_FILES["receipt"]["name"]);
    $receipt=$_FILES["receipt"]["name"];
    
    
    $user1=$_SESSION['user'];
    $regNoV=$_SESSION['reg3'];
    $regID=$_SESSION['reg4'];
        
        $sql1 ="insert into payment values (?,?,?,?,?,?,?)"; 
        $stmt2 = $db_con->prepare($sql1);
        $stmt2->execute(array(NULL,$branch,$acount,$amount,$receipt,$user1,$regID));
        $rows = $stmt2->rowCount();
        if ($rows>0)
        {
            
           $stat='3';
           $sql = "Update vehicle_description set status=? where vehicle_description.userName=? and vehicle_description.regNo_Vehicle=? ";
           $stmt = $db_con->prepare($sql);
           $stmt->execute(array($stat,$user1,$regNoV));
           $row = $stmt->rowCount();
          
           if($row>0)
           {
               header("Location:../viewResultForm.php");
            } else {
                $_SESSION['errorMessages']="update  fail";
                header("Location:../viewPaymentForm.php");
                exit();
            }
        }
    
    }
    catch (Exception $ex) 
    {
        $_SESSION['errorMessages']="inserted fail".$ex->getMessage();
        header("Location:../viewPaymentForm.php");
        exit();

    }
    
    
    
}



?>