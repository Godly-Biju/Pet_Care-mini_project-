<?php
include('../db_connect.php');


// ------------------------------------- ADD PET --------------------------------------
if(isset($_POST['Addpet'])){
$pet_name = $_POST['pet_name'];
$pet_type = $_POST['pet_type'];
$pet_gender = $_POST['pet_gender'];
$dob = $_POST['dob'];
$owner_name = $_POST['owner_name'];
$owner_email = $_POST['owner_email'];
$phone_number = $_POST['phone_number'];
$address = $_POST['address'];

$q="UPDATE register SET 
pet_name='$pet_name',
pet_type='$pet_type',
pet_gender='$pet_gender',
pet_dob='$dob',
status = 'New',
address='$address'
WHERE email='$owner_email'"; echo $q;    
$result=mysql_query($q);

if($result){
    echo "<script>alert('Pet Added Successfully!');</script>";
    echo "<script>location.href='13index.php';</script>";
}
else{
    echo "<script>alert('Failed!');</script>";
    echo "<script>location.href='13index.php';</script>";

}
}
// ------------------------------------- ADD PET CLOSE--------------------------------------

/*
OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO
OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO



OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO
OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO
*/

// ------------------------------------- Online Consult Query --------------------------------------
if(isset($_POST['querysub'])){
    $query = $_POST['query'];

    $username = $_SESSION['username'];

$q="SELECT * FROM register WHERE email='$username'";
$result = mysql_query($q);
$row = mysql_fetch_assoc($result);
$name = $row['email'];
$pet_id = $row['pet_id'];

/*
Status 0 - User submitted only
1 - Doctor responded
*/

$q="INSERT INTO online_consult(user,query,pet_id,status)
VALUES('$name','$query','$pet_id','New Case')
";
$result = mysql_query($q);
if($result){
    echo "<script>alert('Your Query has been submitted to Vet Doctor, Please wait for Doctors response. Thank You!');</script>";
    echo "<script>location.href='13index.php';</script>";
}
else{
    echo "<script>alert('Submission Failed due to some issue. Contact Developer!');</script>";
    echo "<script>location.href='13index.php';</script>";

}
}
// ------------------------------------- Online Consult Query close--------------------------------------

/*
OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO
OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO



OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO
OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO
*/

// ------------------------------------- Book pickup apt--------------------------------------
if(isset($_POST['bookapt'])){
$username = $_SESSION['username'];
$q="SELECT * FROM register WHERE email='$username'";
$result = mysql_query($q);
$row = mysql_fetch_assoc($result);
$owner = $row['email'];
$pet_id = $row['pet_id'];

$reason = $_POST['reason'];
$date = $_POST['date'];
$time = $_POST['time'];

$q="INSERT INTO appointment(pet_id,owner,date,time,reason,apt_rate,status,payment)
VALUES('$pet_id','$owner','$date','$time','$reason',999,'New','Not Billed')
";
$result = mysql_query($q);
if($result){
    echo "<script>alert('Booking Success. We have Notified our people. Please wait while our people come and collect your Pet. Thank you!');</script>";
    echo "<script>location.href='13index.php';</script>";
}
else{
    echo "<script>alert('Submission Failed due to some issue. Contact Developer!');</script>";
    echo "<script>location.href='13index.php';</script>";

}
}
// ------------------------------------- Book pickup apt close--------------------------------------

/*
OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO
OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO



OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO
OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO
*/

// ------------------------------------- Book vaccince apt--------------------------------------
if(isset($_POST['bookaptvac'])){
    $username = $_SESSION['username'];
    $q="SELECT * FROM register WHERE email='$username'";
    $result = mysql_query($q);
    $row = mysql_fetch_assoc($result);
    $owner = $row['email'];
    $pet_id = $row['pet_id'];
    
    $note = $_POST['note'];

    $qc = "SELECT * FROM vaccine_breeding WHERE owner = '$owner' AND status != 'Complete'";
    $result = mysql_query($qc);
    $count = mysql_num_rows($result);
    if($count > 0)
    {
        echo "<script>alert('There is a request already raised with the site. Please wait while our people contact you. Thank you!');</script>";
        echo "<script>location.href='13index.php';</script>";
    }else
    {

    
   
    $q="INSERT INTO vaccine_breeding(req_raised_by,pet_id,owner,rate,options,doc_approval,status,payment)
    VALUES('$owner','$pet_id','$owner',800,'Vaccine','New Case','New Case','Not Billed')
    "; echo $q;
    $result = mysql_query($q);
    if($result){
        echo "<script>alert('Booking Success. We have Notified our people. Please wait while our people contact you. Thank you!');</script>";
        echo "<script>location.href='13index.php';</script>";
    }
    else{
        echo "<script>alert('Submission Failed due to some issue. Contact Developer!');</script>";
        echo "<script>location.href='13index.php';</script>";
    
    }
    }
}
// ------------------------------------- Book pickup apt close--------------------------------------

/*
OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO
OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO



OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO
OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO
*/

// ------------------------------------- Book vaccine apt--------------------------------------
// if(isset($_POST['bookaptvac'])){
//     $username = $_SESSION['username'];
//     $q="SELECT * FROM register WHERE email='$username'";
//     $result = mysql_query($q);
//     $row = mysql_fetch_assoc($result);
//     $owner = $row['email'];
//     $pet_id = $row['pet_id'];
    
//     $note = $_POST['note'];
   
//     $q="INSERT INTO vaccine_breeding(req_raised_by,pet_id,owner,options,status)
//     VALUES('$owner','$pet_id','$owner','Vaccine','New Case')
//     "; echo $q;
//     $result = mysql_query($q);
//     if($result){
//         echo "<script>alert('Booking Success. We have Notified our people. Please wait while our people contact you. Thank you!');</script>";
//         echo "<script>location.href='13index.php';</script>";
//     }
//     else{
//         echo "<script>alert('Submission Failed due to some issue. Contact Developer!');</script>";
//         echo "<script>location.href='13index.php';</script>";
    
//     }
//     }
// ------------------------------------- Book vaccine apt close--------------------------------------
/*
OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO
OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO



OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO
OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO
*/

// ------------------------------------- Book breeding apt--------------------------------------
if(isset($_POST['bookaptbre'])){
    $username = $_SESSION['username'];
    $q="SELECT * FROM register WHERE email='$username'";
    $result = mysql_query($q);
    $row = mysql_fetch_assoc($result);
    $owner = $row['email'];
    $pet_id = $row['pet_id'];
    
    $note = $_POST['note'];
   
    $q="INSERT INTO vaccine_breeding(req_raised_by,pet_id,owner,options,status)
    VALUES('$owner','$pet_id','$owner','Breeding','New Case')
    "; echo $q;
    $result = mysql_query($q);
    if($result){
        echo "<script>alert('Booking Success. We have Notified our people. Please wait while our people contact you. Thank you!');</script>";
        echo "<script>location.href='13index.php';</script>";
    }
    else{
        echo "<script>alert('Submission Failed due to some issue. Contact Developer!');</script>";
        echo "<script>location.href='13index.php';</script>";
    
    }
    }
// ------------------------------------- Book breeding apt close--------------------------------------





?>