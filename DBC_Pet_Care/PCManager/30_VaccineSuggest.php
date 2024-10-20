<?php include "1header.php" ?>
<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
<h1 align="center">Suggest</h1>
<?php
// Fetch data from the table
//$query = "SELECT * FROM register LEFT JOIN vaccine_breeding ON register.pet_id = vaccine_breeding.pet_id WHERE vaccine_breeding.options = 'Breeding' AND (vaccine_breeding.status=0 OR vaccine_breeding.status=3) AND doc_approval = 1";
$query = "SELECT * FROM register Where register.pet_name != ''";
$result = mysql_query($query);

if(mysql_num_rows($result) == 0)
{
    echo "<Script>alert('No new Cases!');</script>";
}

?>
<!-- Right side column. Contains the navbar and content of the page -->


<table border='1px' align="center" style="width:90%;"> 
        <tr align="center">
            <th><center>Pet ID</center></th>
            <th><center>Pet Name</center></th>
            <th><center>Pet Type</center></th>
            <th><center>Owner Name</center></th>
            
            <th><center>View</center></th>
        </tr>
        <?php //foreach ($data as $row):
            
            while($row=mysql_fetch_assoc($result))
{
            ?>
            <tr align="center">
                
                <td><?php echo $row['pet_id']; ?></td>
                <td><?php echo $row['pet_name']; ?></td>
                <td><?php echo $row['pet_type']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><a href="30_view.php?id='<?php echo $row['pet_id']; ?>'">View</a></td>
            </tr>
        <?php //endforeach; 
    } ?>
    </table>


</div>
<!-- /.content-wrapper -->
<?php include "99footer.php" ?>