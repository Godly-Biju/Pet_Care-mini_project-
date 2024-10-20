<?php
include('../db_connect.php');

// ------------------------------------- ADD Doc --------------------------------------
if(isset($_POST['Adddoc'])){
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $license = $_POST['license'];
    $password = $_POST['Password'];
$flag=0;
//Checking for duplicate email
    $Q_check_email = mysql_query("SELECT login.username,reg_doc.email FROM login,reg_doc WHERE login.username='".$email."' OR reg_doc.email='".$email."'");
        $resultx = mysql_fetch_array($Q_check_email);
        if($resultx){ //echo "in";
            $flag = 1;
            echo "<script>alert('Email-ID is already existed!')</script>";
        }

if($flag == 0)
{
    $q="INSERT INTO reg_doc(name,gender,dob,email,ph_no,address,license) 
    VALUES('$name','$gender','$dob','$email','$phone','$address','$license')
    "; //echo $q;    
    $result=mysql_query($q);

    $q2="INSERT INTO login(username,password,type) 
    VALUES('$email','$password','Doctor')
    "; //echo $q;    
    $result2=mysql_query($q2);
    
    if($result AND $result2){
        echo "<script>alert('Dcotor Added Successfully!');</script>";
        echo "<script>location.href='Admin_home.php';</script>";
    }
    else{
        echo "<script>alert('Failed!');</script>";
        echo "<script>location.href='Admin_home.php';</script>";
    
    }
}
else{
    echo "<script>alert('Registeration failed!');</script>";
    echo "<script>location.href='Admin_home.php';</script>";
}
    
    }
    // ------------------------------------- ADD Doc CLOSE--------------------------------------
    
    /*
    OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO
    OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO
    
    
    
    OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO
    OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO
    */
?>