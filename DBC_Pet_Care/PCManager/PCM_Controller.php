<?php include('../db_connect.php'); ?>

<?php

//--------------------------------Online Consult-------------------------------
if(isset($_POST['feedbacksub']))
{
    $username = $_SESSION['username'];
$q="SELECT * FROM reg_doc WHERE email='$username'";
$result = mysql_query($q);
$row = mysql_fetch_assoc($result);
$doc_id = $row['doc_id'];

    $consult_id = $_SESSION['SESS_consult_id'];
    $doc_note = $_POST['feedback'];

    $q = "UPDATE online_consult 
    SET doc_id = $doc_id,
    status = 1,
    doc_note='$doc_note' WHERE consult_id=$consult_id";
    echo $q;
    $result=mysql_query($q);
    if($result)
    {
        echo "<Script>alert('Saved');</script>";
        echo "<Script>location.href='10_OC_Newreq.php';</script>";
    }else
    {
        echo "Failed";
    }
    
}








//--------------------------------Assign-------------------------------
if(isset($_GET['apt_id']))
{
    echo "In";
    //$apt_id = $_GET['apt_id'];
    $id = $_SESSION['SESS_apt_id'];

    $username = $_SESSION['username'];
$q="SELECT * FROM register_petcenter WHERE email='$username'";
$result = mysql_query($q);
$row = mysql_fetch_assoc($result);
$pc_user = $row['email'];

    $q = "UPDATE appointment 
    SET status = 'Assigned',
    petcenter = '$pc_user'
    WHERE apt_id='$id'";
    //echo $q;
    $result=mysql_query($q);
    if($result)
    {
        echo "<Script>alert('Assigned!');</script>";
        echo "<Script>location.href='10_newapt.php';</script>";
    }else
    {
        echo "Failed";
    }
    
}



//--------------------------------Inform Breeding-------------------------------
if(isset($_GET['InformUserBreeding']))
{
    //$apt_id = $_GET['apt_id'];
    $id = $_SESSION['SESS_pet_id'];
echo $id;
    $username = $_SESSION['username'];
$q="SELECT * FROM register WHERE pet_id=$id";
$result = mysql_query($q);
$row = mysql_fetch_assoc($result);

$req_by = $username;
$pet_idx = $row['pet_id'];
$owner = $row['email'];
$rate = 800;
$options = 'Breeding';

$Check = mysql_query("SELECT * FROM vaccine_breeding WHERE status='New Case' AND pet_id=$pet_idx AND options='Breeding'");
if(mysql_num_rows($Check) != 1)
{
    echo "<Script>alert('Already Added!');</script>";
    echo "<Script>location.href='20_breedsug.php';</script>";
}else{
    $q = "INSERT INTO vaccine_breeding(req_raised_by,pet_id,owner,rate,options,doc_approval,status,payment) 
    VALUES('$req_by','$pet_idx','$owner',$rate,'$options','New Case','New Case','Not Billed')";
    
        $result=mysql_query($q);
        if($result)
        {
            echo "<Script>alert('Added for approval from Doc!');</script>";
            echo "<Script>location.href='20_breedsug.php';</script>";
        }else
        {
            echo "Failed";
        }
}


    
}



//--------------------------------Inform Vaccine-------------------------------
if(isset($_GET['InformUserVaccine']))
{
    //$apt_id = $_GET['apt_id'];
    $id = $_SESSION['SESS_pet_id'];
echo $id;
    $username = $_SESSION['username'];
$q="SELECT * FROM register WHERE pet_id=$id";
$result = mysql_query($q);
$row = mysql_fetch_assoc($result);

$req_by = $username;
$pet_idx = $row['pet_id'];
$owner = $row['email'];
$rate = 800;
$options = 'Vaccine';

$q = "INSERT INTO vaccine_breeding(req_raised_by,pet_id,owner,rate,options,doc_approval,status,payment) 
VALUES('$req_by','$pet_idx','$owner',$rate,'$options','New Case','New Case','Billed')";

    $result=mysql_query($q);
    if($result)
    {
        echo "<Script>alert('Added for approval from Doc!');</script>";
        echo "<Script>location.href='30_VaccineSuggest.php';</script>";
    }else
    {
        echo "Failed";
    }
    
}

// if(isset($_GET['statusrj']))
// {
//     $consult_id = $_SESSION['SESS_consult_id'];
//     $status = $_GET['statusrj'];
//     $q = "UPDATE online_consult 
//     SET status = $status
//     WHERE consult_id=$consult_id";
//     echo $q;
//     $result=mysql_query($q);
//     if($result)
//     {
//         echo "<Script>alert('Rejected!');</script>";
//     echo "<Script>location.href='10_OC_Newreq.php';</script>";
//     }else
//     {
//         echo "Failed";
//     }
// }



//--------------------------------Inform Breeding -------------------------------
// if(isset($_GET['InformUserBreeding']))
// {
//     $apt_id = $_GET['InformUserBreeding'];
// }




//-----------------------------------BREEDING COMPLETE CANCEL------------------
if(isset($_GET['BreedingComplete']))
{
    $vb_id = $_GET['BreedingComplete'];

    $q = "UPDATE vaccine_breeding SET
    status = 'Complete',
    payment = 'Billed'
    WHERE vb_id=$vb_id";
    echo $q;
    $result=mysql_query($q);
    if($result)
    {
        echo "<Script>alert('Breeeding Completed info passed to owner. Billing Success!');</script>";
        echo "<Script>location.href='homepage.php';</script>";
    }else
    {
        echo "Failed";
        echo "<Script>alert('Something Happened. Try Again!');</script>";
    }
}

if(isset($_GET['BreedingCancel']))
{

}
?>