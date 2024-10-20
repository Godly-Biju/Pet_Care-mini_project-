<?php include "1header.php" ?>


<?php
// Fetch data from the table
$query = "SELECT * FROM reg_doc";
$result = mysql_query($query);

?>
<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
<h1 align='center'>Available Doctor's</h1>
<table border='1px' align="center" style="width:90%;"> 
        <tr align="center">
            <th><center>Name</center></th>
            <th><center>Gender</center></th>
            <th><center>Date of Birth</center></th>
            <th><center>Email</center></th>
            <th><center>Phone Number</center></th>
            <th><center>Address</center></th>
            <th><center>License</center></th>
        </tr>
        <?php //foreach ($data as $row):
            
            while($row=mysql_fetch_assoc($result))
{
            ?>
            <tr align="center">
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['dob']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['ph_no']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['license']; ?></td>
            </tr>
        <?php //endforeach; 
    } ?>
    </table>
</div>

<!-- /.content-wrapper -->
<?php  include "99footer.php" ?>