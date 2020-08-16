
<?php
 session_start();
include "db_Connection.php";
try{
       $deId=$_GET['deniedId'];
       $pay=$_GET['pay'];
       $updat='-1';
       $sql = "Update vehicle_description set status=? where regNo = ?";
       $stmt = $db_con->prepare($sql);
       $stmt->execute(array($updat,$deId));
       $row = $stmt->rowCount();
       $db_con = null;
       if($row>0)
       {
            $updat2='1';
            $sql1 = "Update payment set check=? where regNo = ? and paymentID=?";
            $stmt2 = $db_con->prepare($sql1);
            $stmt2->execute(array($updat2,$deId,$pay));
            $rows = $stmt2->rowCount();
            $db_con = null;
            if($rows>0)
            {
               header("Location:../AdminPaymenReply.php");
             }
           
           
        } 

       }catch (Exception $ex) {
        $_SESSION['errorMessage'] = "Operation fails ".$ex->getMessage();
        header("Location:../AdminPaymenReply.php");
        exit();
   }
   ?>
