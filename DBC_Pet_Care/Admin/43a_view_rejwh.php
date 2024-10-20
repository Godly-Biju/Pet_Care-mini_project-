<?php include "1header.php" ?>
<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
<h1>Rejected Pet care center's List</h1>

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


// $vtsql = "SELECT COUNT( user_id ) FROM userreg";
//     $resultvt = mysql_query($vtsql);
//     $rowsvt = mysql_fetch_row($resultvt);

// $vtsql2 = "SELECT COUNT( user_id ) FROM userreg where user_status=1";
//     $resultvt2 = mysql_query($vtsql2);
//     $rowsvt2 = mysql_fetch_row($resultvt2);

// $vtsql3 = "SELECT COUNT( user_id ) FROM userreg where user_status=0";
//     $resultvt3 = mysql_query($vtsql3);
//     $rowsvt3 = mysql_fetch_row($resultvt3); 

// $vtsql4 = "SELECT COUNT( user_id ) FROM userreg where user_status=8";
//     $resultvt4 = mysql_query($vtsql4);
//     $rowsvt4 = mysql_fetch_row($resultvt4);

 

?>
<!-- <div style="padding-left: 30px">
<table border="1px" style="width: 95%">
    
    <tr>
      <td style="padding-left: 5px" align="center">
        Number of User's Registered 
      </td>
      <td style="padding-left: 5px" align="center" width="40%">
        <?php echo $rowsvt[0]; ?>
        
      </td></tr>
      <tr><td style="padding-left: 5px" align="center">
        Number of verified User's 
      </td>
      <td style="padding-left: 5px" align="center" width="20%">
        <?php echo $rowsvt2[0]; ?>
        
      </td></tr>
      <tr><td style="padding-left: 5px" align="center">
        Number of Not verified User's 
      </td>
      <td style="padding-left: 5px" align="center" width="20%">
        <?php echo $rowsvt3[0]; ?>
        
      </td>
    </tr>
    <tr><td style="padding-left: 5px" align="center">
        Number of Rejected User's 
      </td>
      <td style="padding-left: 5px" align="center" width="20%">
        <?php echo $rowsvt4[0]; ?>
        
      </td>
    </tr>
    
  </table>
<br></div> -->


<?php
$Table= "register_petcenter";
$query = "select * from $Table WHERE status='Rejected'";
$result = mysql_query($query);
if (!$result)
{
 $message = 'ERROR:' . mysql_error();
 return $message;
}
else
{
 $i = 0;
 echo '<table border=1 align=center style="width:95%"><tr>';
 while ($i < mysql_num_fields($result))
 {
  $meta = mysql_fetch_field($result, $i);
  echo "<th><center>".ucfirst($meta->name)."</center></th>";
  $i = $i + 1;
 }
 //echo '<th><center>Status</center></th>';
 //echo '<th><center>View</center></th>';
  
 $i = 0;
 
 while ($row = mysql_fetch_row($result))
 {
  echo '<tr>';
     $count = count($row);
     $y = 0;
     $idval='1';
     while ($y < $count)
       {
        $c_row = current($row);
        if($y==0)
           $unique_id=$c_row;
        
        if($y==1)
         {
            
              //echo "<td align=center><img src='$c_row' height='100' width='100'></td>";
              echo "<td align=center>" . $c_row . "</td>";
            
         }
         else 
        {
          echo "<td align=center>" . $c_row . "</td>";
                
         }

//         if($y==2)
//         {
          
//            $q2 = mysql_query("select user_status from userreg where user_id = '".$unique_id."'");
//            $r2 = mysql_fetch_array($q2);

// switch ($r2['user_status']) {
//   case "0":
//     echo "<td align=center><font style='color:red'><b>Not Verified</b></font></td>";
//     break;
//   case "1":
//     echo "<td align=center><font style='color:green'><b>Verified</b></font></td>";
//     break;
//   case "8":
//     echo "<td align=center><font style='color:orange'><b>Rejected</b></font></td>";
//     break;
//   case "9":
//     echo "<td align=center><font style='color:red'><b>Deleted</b></font></td>";
//     break;
//   default:
//     echo "<td align=center><font style='color:yellow'><b>Invalid</b></font></td>";
// }
// }
         next($row);
      $y = $y + 1;
       }
   //echo "<td align=center><a href='o_viewuser_details.php?id=$unique_id'>View</a></td>";
   //echo "<td align=center><a href='validateuser.php?id=$unique_id'>Reject</a></td>";
   //echo "<td align=center><a href='adm_ap_vo.php?id=$unique_id&op=DLoff'>Delete</a></td>";
   //$stat1=mysql_query("UPDATE REGISTER SET USER_STATUS='1' WHERE USER_ID='5'");
   //echo "<td><img width=100 height=100 src=userdocs/".$idval."_1.jpg></a></td>";
    //echo '<td><a href=rating.php><img src="images/star.jpg"></a></td>';
  echo '</tr>';
  $i = $i + 1;
 }
 echo '</table></body></html>';
 mysql_free_result($result);
}

//}


?>
</div>
<!-- /.content-wrapper -->
<?php include "99footer.php" ?>