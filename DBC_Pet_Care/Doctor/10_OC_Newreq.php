<?php include "1header.php" ?>
<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
<h1 align='center'>New Online Consulations</h1>



<?php
// Fetch data from the table
$query = "SELECT * FROM online_consult INNER JOIN register ON online_consult.pet_id = register.pet_id WHERE online_consult.status = 0";
$result = mysql_query($query);

if(mysql_num_rows($result) == 0)
{
    echo "<Script>alert('No new Cases!');</script>";
}

?>
<!-- Right side column. Contains the navbar and content of the page -->


<table border='1px' align="center" style="width:90%;"> 
        <tr align="center">
            <th><center>Consult ID</center></th>
            <th><center>Customer</center></th>
            <th><center>Query</center></th>
            <th><center>Pet ID</center></th>
            <th><center>Pet Name</center></th>
            <th><center>Pet Type</center></th>
            <th><center>Pet Gender</center></th>
            <th><center>Pet DOB</center></th>
            <th><center>View</center></th>
        </tr>
        <?php //foreach ($data as $row):
            
            while($row=mysql_fetch_assoc($result))
{
            ?>
            <tr align="center">
                <td><?php echo $row['consult_id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['query']; ?></td>
                <td><?php echo $row['pet_id']; ?></td>
                <td><?php echo $row['pet_name']; ?></td>
                <td><?php echo $row['pet_type']; ?></td>
                <td><?php echo $row['pet_gender']; ?></td>
                <td><?php echo $row['pet_dob']; ?></td>
                <td><a href="10_OC_view.php?consult_id='<?php echo $row['consult_id']; ?>'">View</a></td>
            </tr>
        <?php //endforeach; 
    } ?>
    </table>





</div>
<!-- /.content-wrapper -->
<?php include "99footer.php" ?>