<?php include "1header.php" ?>
<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
<h1 align="Center">Welcome, <?php echo getName(); ?></h1>

<?php

// $off_id=$_SESSION['unique_id'] ;
// $sql="SELECT * FROM offreg WHERE off_id='".$off_id."'";
// $result=mysql_query($sql);
// $bill=mysql_fetch_assoc($result);
// if($bill['off_status'] == 1)
//   $stat = '1';
// else
//   $stat = '0';

// if($stat == 0)
// {
//   echo "<font style='color: red' size='14px'>Your Account needs to be Verified to Perform Officer level work!</font><br>";
//   echo "<font>******Go to <b>My Account</b> and Fill your details for verification and wait for approval.</font>";
// }
// else
// {


$vtsql = "SELECT COUNT( email ) FROM register";
    $resultvt = mysql_query($vtsql);
    $rowsvt = mysql_fetch_row($resultvt);

$vtsql2 = "SELECT COUNT( apt_id ) FROM appointment where petcenter='$user'";
    $resultvt2 = mysql_query($vtsql2);
    $rowsvt2 = mysql_fetch_row($resultvt2);

$vtsql3 = "SELECT COUNT( apt_id ) FROM appointment where status=0";
    $resultvt3 = mysql_query($vtsql3);
    $rowsvt3 = mysql_fetch_row($resultvt3); 

// $vtsql4 = "SELECT COUNT( user_id ) FROM userreg where user_status=8";
//     $resultvt4 = mysql_query($vtsql4);
//     $rowsvt4 = mysql_fetch_row($resultvt4);

 

?>
<div style="padding-left: 30px">
<h1 align="Center">Dashboard</h1>
<table border="1px" style="width: 95%">
    
    <tr>
      <td style="padding-left: 5px" align="center">
        <b>Number of Pet's Registered </b>
      </td>
      <td style="padding-left: 5px" align="center" width="40%">
        <?php echo $rowsvt[0]; ?>
        
      </td></tr>
      <tr><td style="padding-left: 5px" align="center">
      <b>Number of cases Handled by you </b>
      </td>
      <td style="padding-left: 5px" align="center" width="20%">
        <?php echo $rowsvt2[0]; ?>
        
      </td></tr>
      <tr><td style="padding-left: 5px" align="center">
      <b> New Cases </b>
      </td>
      <td style="padding-left: 5px" align="center" width="20%">
        <?php echo $rowsvt3[0]; ?>
        
      </td>
    </tr>
    <!-- <tr><td style="padding-left: 5px" align="center">
        Number of Rejected User's 
      </td>
      <td style="padding-left: 5px" align="center" width="20%">
        <?php echo $rowsvt4[0]; ?>
        
      </td>
    </tr> -->
    
  </table>

  <br><img src="dist/img/dashboard_img.jpg" width="98%" align="center">
<br></div>

</div><!-- /.content-wrapper -->
<?php include "99footer.php" ?>