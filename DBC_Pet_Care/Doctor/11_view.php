<?php include "1header.php" ?>
<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">


<style type="text/css">
    table{
        padding-left: 20px;
        margin-left: 20px;
        width: 90%;
        border: 1px solid black;
    }
    th{
        border: 1px solid black;
        text-align: center;
    }
    td{
        border: 1px solid black;
        text-align: left;
        padding-left: 10px;
    }
    tbody{
        text-align: center;
    }
    textarea{
        width: 100%;
    }
</style>

<?php

$consult_id = $_GET['consult_id'];
$_SESSION['SESS_consult_id'] = $consult_id;
// Fetch data from the table
$query = "SELECT * FROM online_consult INNER JOIN register ON online_consult.pet_id = register.pet_id WHERE consult_id = $consult_id";
$result = mysql_query($query);
$row=mysql_fetch_assoc($result);

$username = $row['email'];
//Point 2.1 - Age calculator
$age_sql = "SELECT DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(),pet_dob)), '%Y') + 0 AS age FROM register WHERE email='$username'";
$calc_age = mysql_query($age_sql);
$age = mysql_fetch_assoc($calc_age);
?>
<form action="Controller.php" method="POST">
<table>
    <caption><h1 align='center'>Detailed view</h1></caption>
    <tr>
        <th>
            Consult ID : 
        </th>
        <td>
            <?php echo $row['consult_id']; ?>
        </td>
    </tr>
    <tr>
        <th>
            Customer : 
        </th>
        <td>
            <?php echo $row['name']; ?>
        </td>
    </tr>
    <tr>
        <th>
            User's Query : 
        </th>
        <td>
            <?php echo $row['query']; ?>
        </td>
    </tr>
    <tr>
        <th>
            Pet ID : 
        </th>
        <td>
            <?php echo $row['pet_id']; ?>
        </td>
    </tr>
    <tr>
        <th>
            Pet Name : 
        </th>
        <td>
            <?php echo $row['pet_name']; ?>
        </td>
    </tr>
    <tr>
        <th>
            Pet Type : 
        </th>
        <td>
            <?php echo $row['pet_type']; ?>
        </td>
    </tr>
    <tr>
        <th>
            Pet Gender : 
        </th>
        <td>
            <?php echo $row['pet_gender']; ?>
        </td>
    </tr>
    <tr>
        <th>
            Pet DOB : 
        </th>
        <td>
            <?php echo $row['pet_dob']."(Age:".$age['age']." Years)"; ?>
        </td>
    </tr>
    <tr>
        <th>
             Feedback : 
        </th>
        <td>
            <?php echo $row['doc_note']; ?>
            <!-- <textarea name="feedback" value='' required> </textarea> -->
            
        </td>
    </tr>
    <!-- <tr>
        <th>
             Approve the Request : 
        </th>
        <td>
            <button><a href="Controller.php?statusap='Approved'">Approve</button>
        </td>
    </tr>
    <tr>
        <th>
             Reject the Request : 
        </th>
        <td>
        <button><a href="Controller.php?statusrj='Rejected'">Reject</button>
        </td>
    </tr> -->

</table>

</form>




</div>
<!-- /.content-wrapper -->
<?php




?>


<?php include "99footer.php" ?>