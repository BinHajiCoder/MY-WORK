<?php
 session_start();
include "db_Connection.php";;

// accepted
if(isset($_GET['acceptId']))
{
    

        $set1='5';
        $id1=$_GET['acceptId'];
        $query= "update vehicle_description set status=? where regNo=?";
        $stmt1 = $db_con->prepare($query);
        $stmt1->execute(array($set1,$id1));
        $rows = $stmt1->rowCount();
        $date= date('20'.'y/m/d');
        if($rows)
        {
             $sql1 ="insert into result values (?,?,?,?)"; 
            $stmt2 = $db_con->prepare($sql1);
            $stmt2->execute(array(NULL,$id1,'2020-08-12','2022-12-01'));
            $row3 = $stmt2->rowCount();
            if ($row3)
            {
                header("Location:../AdminPaymenReply.php");
            }
            
         } 
         else{
            $db_con=null;
            $_SESSION['errorMessage']="Request Fail. Try again";
            header("Location:../AdminPaymenReply.php");
            exit();
         }
    
    
}

//denied
if(isset($_GET['deniedId']))
{
   $set='4';
   $id=$_GET['deniedId'];
    $querys= "update vehicle_description set status=? where regNo=?";
        $stmt = $db_con->prepare($querys);
        $stmt->execute(array($set,$id));
        $row = $stmt->rowCount();
        $db_con = null;
        if($row)
        {
            header("Location:../AdminPaymenReply.php");
         } 
         else{
            $db_con=null;
            $_SESSION['errorMessages']="Request Fail. Try again";
            header("Location:../AdminPaymenReply.php");
            exit();
         }
}