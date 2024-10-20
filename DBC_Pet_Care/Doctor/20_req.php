<?php include "1header.php" ?>
<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
<h1 align='center'>Breeding requests</h1>



<?php
// Fetch data from the table 
$query = "SELECT * FROM vaccine_breeding INNER JOIN register ON vaccine_breeding.pet_id = register.pet_id WHERE vaccine_breeding.doc_approval = 'New Case' AND vaccine_breeding.options = 'Breeding'";
$result = mysql_query($query);

if(mysql_num_rows($result) == 0)
{
    echo "<Script>alert('No new Cases!');</script>";
}

?>
<!-- Right side column. Contains the navbar and content of the page -->


<table border='1px' align="center" style="width:90%;"> 
        <tr align="center">
            <th><center>Req ID</center></th>
            <th><center>Raised_by</center></th>
            <th><center>Pet ID</center></th>
            <th><center>Pet Name</center></th>
            <th><center>Pet Type</center></th>
            <th><center>Pet Gender</center></th>
            <th><center>Pet DOB</center></th>
            <th><center>Owner</center></th>

            <th><center>Approve</center></th>
            <th><center>Reject</center></th>
        </tr>
        <?php //foreach ($data as $row):
            
            while($row=mysql_fetch_assoc($result))
{
            ?>
            <tr align="center">
                <td><?php echo $row['vb_id']; ?></td>
                <td><?php echo $row['req_raised_by']; ?></td>
                <td><?php echo $row['pet_id']; ?></td>
                <td><?php echo $row['pet_name']; ?></td>
                <td><?php echo $row['pet_type']; ?></td>
                <td><?php echo $row['pet_gender']; ?></td>
                <td><?php echo $row['pet_dob']; ?></td>
                <td><?php echo $row['owner']; ?></td>
                <td><a href="Controller.php?vb_idba='<?php echo $row['vb_id']; ?>'">Approve</a></td>
                <td><a href="Controller.php?vb_idbr='<?php echo $row['vb_id']; ?>'">Reject</a></td>
            </tr>
        <?php //endforeach; 
    } ?>
    </table>





</div>
<!-- /.content-wrapper -->
<?php include "99footer.php" ?>