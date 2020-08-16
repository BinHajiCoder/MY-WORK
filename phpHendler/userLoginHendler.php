
<?php
 session_start();
include "db_Connection.php";
if (isset($_POST['btnSave']))
{
    
    $fullname =$_POST['fullname'];
    $addres=$_POST['adres'];
    $shehia=$_POST['shehia'];
    $house=$_POST['house'];
    $gender=$_POST['gender'];
    $dist=$_POST['district'];
    $phon=$_POST['phone'];
    $datB=$_POST['dateB'];
    $user=$_POST['userName'];
    $pass=$_POST['pass'];
    $email=$_POST['email'];
    
    
    $file=$_FILES['Image']['tmp_name'];
    move_uploaded_file($_FILES["Image"]["tmp_name"],"../images/" . $_FILES["Image"]["name"]);
    $upload_dir=$_FILES["Image"]["name"];
    
    $files=$_FILES['idImage']['tmp_name'];
    move_uploaded_file($_FILES["idImage"]["tmp_name"],"../identification/" . $_FILES["idImage"]["name"]);
    $ide_dir=$_FILES["idImage"]["name"];
    
    try 
    {
    
    $sql ="SELECT userName FROM users where users.userName=?"; 
    $stmt = $db_con->prepare($sql);
    $stmt->execute(array($user));
    $stmt->fetchAll(PDO::FETCH_ASSOC);
    $row = $stmt->rowCount();
    
    
    if($row<1)
        {
            $sql1 ="insert into users values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)"; 
            $stmt2 = $db_con->prepare($sql1);
            $stmt2->execute(array($user,$pass,'Owner',$fullname,$addres,$gender,$dist,$shehia,$email,$phon,$datB,$house,'Active',$ide_dir,$upload_dir));
            $rows = $stmt2->rowCount();
            if ($rows>0)
            {
                $_SESSION['inserted']="record inserted successfully";
                header("Location:../index.php");
                exit();
            }
            
        }else{
            $_SESSION['errorMessage']="User Name alredy exist, choose another";
            header("Location:../userRegs.php");
            exit();
        }
    
    }
    catch (Exception $ex) 
    {
        $_SESSION['errorMessage']="inserted fail".$ex->getMessage();
        header("Location:../userRegs.php");
        exit();

    }
    
    
    
}



?>