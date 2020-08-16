<?php
 session_start();
include "db_Connection.php";
if (isset($_POST['btnLogin']))
{
    try{
        $username=$_POST['user'];
        $password=$_POST['pass'];
        $status='Active';
        $sql="select * from users where username=? and password=? and actives=?";
        $statement=$db_con->prepare($sql);
        $statement->execute(array($username,$password,$status));
        $row =$statement->fetchAll(PDO::FETCH_ASSOC);
        if ($row)
            {
            foreach ($row as $print) 
            {
                $_SESSION['user'] = $print['userName'];
                $_SESSION['pass']=$print['password'];
                $_SESSION['role']=$print['role'];
                $_SESSION['fullname']=$print['fullName'];
                $_SESSION['adress']=$print['adress'];
                $_SESSION['district']=$print['district'];
                $_SESSION['shehiya']=$print['shehia'];
                $_SESSION['hourseN']=$print['hourseNo'];
                $_SESSION['gender']=$print['gender'];
                $_SESSION['phon']=$print['phoneNo'];
                $_SESSION['dob']=$print['dob'];
                $_SESSION['email']=$print['email'];
                
                header("Location:../home.php");
                exit();
            }
            
            
        }
        else{
            $db_con=null;
            $_SESSION['invaliduser']="Invalid username or password or Not Active. Try again";
            header("Location:../index.php");
            exit();
     }
        
    } catch (Exception $ex) {
        die($ex->getMessage());

    }
    
    
    
    
}
?>


