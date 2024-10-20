<?php include "1header.php" ?>
<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
<h1 align="center">New Breeding Requests</h1>
<?php
// Fetch data from the table
//$query = "SELECT * FROM register LEFT JOIN vaccine_breeding ON register.pet_id = vaccine_breeding.pet_id WHERE vaccine_breeding.options = 'Breeding' AND (vaccine_breeding.status=0 OR vaccine_breeding.status=3) AND doc_approval = 1";
$query = "SELECT * FROM vaccine_breeding INNER JOIN register ON vaccine_breeding.pet_id = register.pet_id WHERE doc_approval = 'Approved' AND options = 'Breeding' AND vaccine_breeding.status = 'New Case'";
$result = mysql_query($query);

if(mysql_num_rows($result) == 0)
{
    echo "<Script>alert('No new Cases!');</script>";
}

?>
<!-- Right side column. Contains the navbar and content of the page -->


<table border='1px' align="center" style="width:90%;"> 
        <tr align="center">
            <th><center>Request ID</center></th>
            <th><center>Requestded By</center></th>
            <!-- <th><center>Query</center></th> -->
            <th><center>Pet ID</center></th>
            <th><center>Pet Name</center></th>
            <th><center>Pet Type</center></th>
            <th><center>Pet Owner</center></th>
            <th><center>Doctor</center></th>
            <!-- <th><center>Owner Name</center></th>
            <th><center>Owner Phone No</center></th>
            <th><center>Owner Address</center></th> -->
            <th><center>View</center></th>
            <th><center>Cancel</center></th>
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
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['doc_approval']; ?></td>
                <td><a href="PCM_Controller.php?BreedingComplete='<?php echo $row['vb_id']; ?>'">Complete</a></td>
                <td><a href="PCM_Controller.php?BreedingCancel='<?php echo $row['vb_id']; ?>'">Cancel</a></td>
            </tr>
        <?php //endforeach; 
    } ?>
    </table>


</div>
<!-- /.content-wrapper -->
<?php include "99footer.php" ?>