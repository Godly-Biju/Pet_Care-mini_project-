<?php include('../db_connect.php'); ?>

<?php

//--------------------------------ADMIN Approve User -------------------------------
if(isset($_GET['adm_app_user']))
{
    $user_id = $_GET['adm_app_user'];
    $table_name = "register";
    $query = mysql_query("UPDATE $table_name SET status='Approved' WHERE pet_id = '$user_id'");
    
    if($query)
    {
        echo "<Script>alert('Approved!');</script>";
        echo "<script>location.href='21a_view_newuser.php'</script>";
        echo "success";
    }
    else
    {
        echo "<Script>alert('Internal Error Occured!');</script>";
        echo "Internal Error Occured.";
        echo "<script>location.href='Admin_home.php'</script>";
    }
    
}

//--------------------------------ADMIN Reject User -------------------------------
if(isset($_GET['adm_rej_user']))
{
    $user_id = $_GET['adm_rej_user'];
    $table_name = "register";
    $query = mysql_query("UPDATE $table_name SET status='Rejected' WHERE pet_id = '$user_id'");

    if($query)
    {
        echo "<Script>alert('Rejected!');</script>";
        echo "<script>location.href='21a_view_newuser.php'</script>";
        echo "success";
    }
    else
    {
        echo "<Script>alert('Internal Error Occured!');</script>";
        echo "Internal Error Occured.";
        echo "<script>location.href='Admin_home.php'</script>";
    }
    
    
}

//--------------------------------ADMIN Approve PCC -------------------------------
if(isset($_GET['adm_app_wh']))
{
    $user_id = $_GET['adm_app_wh'];
    $table_name = "register_petcenter";
    $query = mysql_query("UPDATE $table_name SET status='Approved' WHERE email = '$user_id'");

    if($query)
    {
        echo "<Script>alert('Approved!');</script>";
        echo "<script>location.href='41a_new_wh_reg.php'</script>";
        echo "success";
    }
    else
    {
        echo "<Script>alert('Internal Error Occured!');</script>";
        echo "Internal Error Occured.";
        echo "<script>location.href='Admin_home.php'</script>";
    }
    
}

//--------------------------------ADMIN Reject PCC -------------------------------
if(isset($_GET['adm_rej_wh']))
{
    $user_id = $_GET['adm_rej_wh'];
    $table_name = "register_petcenter";
    $query = mysql_query("UPDATE $table_name SET status='Rejected' WHERE email = '$user_id'");

    if($query)
    {
        echo "<Script>alert('Rejected!');</script>";
        echo "<script>location.href='41a_new_wh_reg.php'</script>";
        echo "success";
    }
    
    else
    {
        echo "<Script>alert('Internal Error Occured!');</script>";
        echo "Internal Error Occured.";
        echo "<script>location.href='Admin_home.php'</script>";
    }
    
}
?>