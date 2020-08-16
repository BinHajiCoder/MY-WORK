
<?php
 session_start();
include "db_Connection.php";
try{
       $actId=$_GET['activeId'];
       $updat='Inactive';
       $sql = "Update users set actives=? where userName = ?";
       $stmt = $db_con->prepare($sql);
       $stmt->execute(array($updat,$actId));
       $row = $stmt->rowCount();
       $db_con = null;
       if($row>0)
       {
           header("Location:../viewOwnerInfo.php");
        } 

       }catch (Exception $ex) {
        $_SESSION['errorMessage'] = "Operation fails ".$ex->getMessage();
        header("Location:../viewOwnerInfo.php");
        exit();
   }
   ?>
