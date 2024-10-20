<?php include('../db_connect.php'); ?>

<?php



//--------------------------------DOC Approve Breed -------------------------------
if(isset($_GET['vb_idba']))
{
    $vb_id = $_GET['vb_idba'];
    $table_name = "vaccine_breeding";
    $query = mysql_query("UPDATE $table_name SET doc_approval='Approved' WHERE vb_id = $vb_id");
//echo "UPDATE $table_name SET doc_approval='Approved' WHERE vb_id = '$vb_id'";
    if($query)
    {
        echo "<Script>alert('Approved!');</script>";
        echo "<script>location.href='20_req.php'</script>";
        echo "success";
    }
    else
    {
        echo "FAiled";
    }
    
}

//--------------------------------DOC Rej Breed --- -------------------------------
if(isset($_GET['vb_idbr']))
{
    $vb_id = $_GET['vb_idbr'];
    $table_name = "vaccine_breeding";
    $query = mysql_query("UPDATE $table_name SET doc_approval='Rejected' WHERE vb_id = $vb_id");

    if($query)
    {
        echo "<script>location.href='20_req.php'</script>";
        echo "success";
    }
    else
    {
        echo "FAiled";
    }
    
    
}

//--------------------------------DOC Approve vac ---------------------------------
if(isset($_GET['vb_idva']))
{
    $vb_id = $_GET['vb_idva'];
    $table_name = "vaccine_breeding";
    $query = mysql_query("UPDATE $table_name SET doc_approval='Approved' WHERE vb_id = $vb_id");
    

    if($query)
    {
        echo "<Script>alert('Approved!');</script>";
        echo "<script>location.href='21_req.php'</script>";
        echo "success";
    }
    else
    {
        echo "FAiled";
    }
    
}

//-------------------------------DOC Rej vac ----------------------------------
if(isset($_GET['vb_idvr']))
{
    $vb_id = $_GET['vb_idvr'];
    $table_name = "vaccine_breeding";
    $query = mysql_query("UPDATE $table_name SET doc_approval='Rejected' WHERE vb_id = $vb_id");

    if($query)
    {
        echo "<script>location.href='21_req.php'</script>";
        echo "success";
    }
    
    else
    {
        echo "FAiled";
    }
    
}

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
    status = 'Completed',
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

// if(isset($_GET['statusap']))
// {
//     $consult_id = $_SESSION['SESS_consult_id'];
//     $status = $_GET['statusap'];
//     $q = "UPDATE online_consult 
//     SET status = $status
//     WHERE consult_id=$consult_id";
//     echo $q;
//     $result=mysql_query($q);
//     if($result)
//     {
//         echo "<Script>alert('Approved!');</script>";
//     echo "<Script>location.href='10_OC_Newreq.php';</script>";
//     }else
//     {
//         echo "Failed";
//     }
    
// }

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



?>