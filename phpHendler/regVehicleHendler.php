
<?php
 session_start();
include "db_Connection.php";
if (isset($_POST['btnSave']))
{
     try 
        {

        $regNo =$_POST['regNo'];
        $type=$_POST['typVehicl'];
        $seating=$_POST['seating'];
        $station=$_POST['station'];


        $fullNam=$_POST['fullName'];
        $adres=$_POST['adres'];
        $phon=$_POST['phone'];
        $dlicence=$_POST['dlicence'];
        $issueDate=$_POST['issDate'];
        $expireD=$_POST['exDate'];

        $userNam=$_SESSION['user'];


        $file1=$_FILES['V_Image']['tmp_name'];
        move_uploaded_file($_FILES["V_Image"]["tmp_name"],"../vehicleIMG/" . $_FILES["V_Image"]["name"]);
        $upload_dir1=$_FILES["V_Image"]["name"];

        $files2=$_FILES['R_Image']['tmp_name'];
        move_uploaded_file($_FILES["R_Image"]["tmp_name"],"../roadLicenceIMG/" . $_FILES["R_Image"]["name"]);
        $ide_dir2=$_FILES["R_Image"]["name"];
    
 
    
            
        $sql1 ="insert into vehicle_description values (?,?,?,?,?,?,?,?,?)"; 
        $stmt2 = $db_con->prepare($sql1);
        $stmt2->execute(array(NULL,$regNo,$type,$seating,$station,$userNam,$upload_dir1,$ide_dir2,'0'));
        $row4 = $stmt2->rowCount();

        

        if($row4>0)
        {
            $sql6="SELECT vehicle_description.regNo,vehicle_description.regNo_Vehicle FROM vehicle_description,users where users.userName=vehicle_description.userName 
                    and vehicle_description.userName=? order by regNo desc LIMIT 1";
            $statement2=$db_con->prepare($sql6);
            $statement2->execute(array($userNam));
            $row6 =$statement2->fetchAll(PDO::FETCH_ASSOC);

            if ($row6)
                {
                foreach ($row6 as $prints) 
                {
                    $regNumber=$prints['regNo'];
                    $_SESSION['regNoVehicle'] = $prints['regNo'];
                    $_SESSION['regVehcle']=$prints['regNo_Vehicle'];
                    
                    $sql5 ="insert into drivers values (?,?,?,?,?,?,?,?)"; 
                    $stmt5 = $db_con->prepare($sql5);
                    $stmt5->execute(array(NULL,$fullNam,$adres,$phon,$dlicence,$issueDate,$expireD,$regNumber));
                    $row5 = $stmt5->rowCount();

                    $_SESSION['inserted']="Record inserted successfully";
                    header("Location:../publicServiceForm.php");
                    exit();
                }
            }else{
                $db_con=null;
                $_SESSION['errorMessages']="Try again";
                header("Location:../vehicleDriverRegForm.php");
                exit();

            }
        }
        else{
            $db_Con=null;
            $_SESSION['errorMessages']="Try again....";
            header("Location:../vehicleDriverRegForm.php");
            exit();
        }
            
        
    
    }
    catch (Exception $ex) 
    {
        $_SESSION['errorMessage']="inserted fail".$ex->getMessage();
        header("Location:../vehicleDriverRegForm.php");
        exit();

    }
    
    
    
}



?>