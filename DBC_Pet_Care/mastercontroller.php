<?php
//session_start();
include('db_connect.php');
// ------------------------------------- REGISTER--------------------------------------
if(isset($_POST['btnsignup'])){
    
    $type_of_account = trim($_POST['type_of_account']);
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone_number = trim($_POST['phone_number']);
    $password = trim($_POST['password']);
    $confirmpassword = trim($_POST['confirmpassword']);
    $username = $email;
    $isValid = true;
    //echo "TOA:".$type_of_account;
    // Check fields are empty or not
    if($name == '' || $email == '' || $phone_number == '' || $password == '' || $confirmpassword == ''){
        $isValid = false;
        $error_message = "Please fill all fields.";
    }

    // Check if confirm password matching or not
    if($isValid && ($password != $confirmpassword) ){
        $isValid = false;
        $error_message = "Confirm password not matching.";
    }

    // Check if Email-ID is valid or not
    if ($isValid && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $isValid = false;
          $error_message = "Invalid Email-ID.";
    }

    if($isValid){
        
        // Check if Email-ID already exists
        // $stmt = $connection->prepare("SELECT * FROM users WHERE email = ?");
        // $stmt->bind_param("s", $email);
        // $stmt->execute();
        // $result = $stmt->get_result();
        // $stmt->close();
        $query_register = mysql_query("SELECT login.username,register.email FROM login,register WHERE login.username='".$username."' OR register.email='".$username."'");
        $result = mysql_fetch_array($query_register);
        if($result){ //echo "in";
            $isValid = false;
            echo "<script>alert('Email-ID is already existed!')</script>";
            $error_message = "Email-ID is already existed.";
        }
        
    }

    // Insert records
    if($isValid){
        // $insertSQL = "INSERT INTO register(name,email,phone_number,password) VALUES(?,?,?,?)";
        // $stmt = $con->prepare($insertSQL);
        // $stmt->bind_param("ssis",$name,$email,$phone_number,$password);
        // $stmt->execute();
        // $stmt->close();
        //echo "TOA:".$type_of_account;
        switch($type_of_account)
        {
            case 'User':
                $sql_register = mysql_query("INSERT INTO register(email,name,phone_no,status) VALUES('$email','$name',$phone_number,'New')");
                //echo "INSERT INTO register VALUES('$name','$email',$phone_number)";
                $sql_login = mysql_query("INSERT INTO login VALUES('$email','$password','$type_of_account')");
                //echo "INSERT INTO login VALUES('$email','$password','$type_of_account')";
                if($sql_register && $sql_login)
                {
                    //$success_message = "Account created successfully.";
                    echo "<script>alert('Account created successfully.!')</script>";
                    echo "<script>location.href='index.php'</script>";
                }
                else
                {
                    //$error_message = "Registration failed due to any reason.";
                    echo "<script>alert('Registration failed due to any reason!')</script>";
                    echo "<script>location.href='index.php'</script>";
                }
                break;
                case 'PetCenter':
                    $sql_register_warehouse = mysql_query("INSERT INTO register_petcenter VALUES('$email','$name',$phone_number,0)");
                    //echo "INSERT INTO register_warehouse VALUES('$name','$email',$phone_number)";
                    $sql_login = mysql_query("INSERT INTO login VALUES('$email','$password','$type_of_account')");
                    //echo "INSERT INTO login VALUES('$email','$password','$type_of_account')";
                    if($sql_register_warehouse && $sql_login)
                    {
                        //$success_message = "Account created successfully.";
                        echo "<script>alert('Account created successfully.!')</script>";
                        echo "<script>location.href='index.php'</script>";
                    }
                    else
                    {
                        //$error_message = "Registration failed due to any reason.";
                        echo "<script>alert('Registration failed due to any reason!')</script>";
                        echo "<script>location.href='index.php'</script>";
                    }
                    break;
                default:
                    echo "<script>alert('Default error!')</script>";
                    break;
                    
        }
        
    }
}




// ------------------------------------- REGISTER CLOSE --------------------------------------




// ------------------------------------------------------------------------------LOGIN -->
// ------------------------------------------------------------------------------LOGIN 
if(isset($_POST['login']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];

$query = mysql_query("SELECT * FROM login WHERE username='$username' AND password='$password'");
$resultcount = mysql_num_rows($query);

if($resultcount == 1)
{
    $flag=0;
    $_SESSION['username'] = $username;
    //Fetching Type of user logging in
    while($row = mysql_fetch_array($query))
        {
        $flag=1;
        $type = $row['type'];
        }
    
    if($flag==1 && $type=="User")
    {
        echo "<script>location.href='User/13index.php'</script>";
        //echo "User login success";
    }
    else if($flag==1 && $type=="Admin")
            {
                echo "<script>location.href='Admin/Admin_home.php'</script>";
                echo "Admin login success";
            }
        else if($flag==1 && $type=="PetCenter")
                {
                    echo "PetCenter login success";
                    echo "<script>location.href='PCManager/Homepage.php'</script>";
                }
        
            else if($flag==1 && $type=="Doctor")
                    {
                        echo "Doctor login success";
                        echo "<script>location.href='Doctor/Homepage.php'</script>";
                    }
        }
else
{
        echo "<script>alert('ERROR-988: Invalid User ID and Password!')</script>";
        echo "<script>location.href='index.php'</script>";
}

}
// ------------------------------------------------------------------------------LOGIN CLOSE --
?>