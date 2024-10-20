<?php include('10header.php') ?>
<!-- ----------------------------------------------------------------------------------- -->
  <style>
    table {
      width: 100%;
    }

    th, td {
      padding: 8px;
      border-bottom: 1px solid #ddd;
    }

    input[type="text"], input[type="date"], input[type="email"],
    select {
      width: 100%;
      padding: 6px 10px;
      margin: 4px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    button {
      background-color: #4CAF50;
      color: white;
      padding: 8px 12px;
      border: none;
      cursor: pointer;
    }

    button:hover {
      opacity: 0.8;
    }
  </style>
<!-- ---------------------------------------------------------------------PICKUP-------------- -->
<h2 align="center">Pickup Service Payment</h2>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Pet Center</th>
        <th>Date</th>
        <th>Time</th>
        <th>Reason</th>
        <th>Price</th>
        <th>Payment</th>
        <th>Payment Link</th>
      </tr>
    </thead>
    <tbody>


<?php
$username = $_SESSION['username'];
$q = "SELECT * FROM appointment WHERE owner = '$username'";
$result = mysql_query($q);
$count = mysql_num_rows($result);
if($count == 0)
{
?>
</tbody>
  </table>
<?php
echo "No payment pending!";  

}else{
    while($row=mysql_fetch_assoc($result))
        {
?>
            <tr>
                <td><?php echo $row['apt_id']; ?></td>
                <td><?php echo $row['petcenter']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['time']; ?></td>
                <td><?php echo $row['reason']; ?></td>
                <td><?php echo $row['apt_rate']; ?></td>
                <td><?php echo $row['payment']; ?></td>
                <?php 
                if($row['payment'] == 'Billed')
                {
                    ?>
<td><a href="a.php?payment_id=<?php echo $row['apt_id']; ?>">Pay Now</a></td>
                    <?php
                }?>
                
                
            </tr>
<?php }} ?>




    </tbody>
  </table>
<!-- ------------------------------------------------------------------------VACCINE----------- -->
<br>
  <h2 align="center">VACCINE Service Payment</h2>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Request By</th>
        <!-- <th>Date</th>
        <th>Time</th> -->
        <th>Reason</th>
        
        <th>Price</th>
        <th>Payment</th>
        <th>Payment Link</th>
      </tr>
    </thead>
    <tbody>


<?php
$username = $_SESSION['username'];
$q = "SELECT * FROM vaccine_breeding WHERE owner = '$username' AND options='Vaccine'";
$result = mysql_query($q);
$count = mysql_num_rows($result);
if($count == 0)
{
?>
</tbody>
  </table>
<?php
echo "No Data!";  

}else{
    while($row2=mysql_fetch_assoc($result))
        {
?>
            <tr>
                <td><?php echo $row2['vb_id']; ?></td>
                <td><?php echo $row2['req_raised_by']; ?></td>
                <td><?php echo $row2['options']; ?></td>
                <td><?php echo $row2['rate']; ?></td>
                <td><?php echo $row2['payment']; ?></td>
                <?php 
                if($row2['payment'] == 'Billed')
                {
                    ?>
<td><a href="a.php?payment_id=<?php echo $row2['vb_id']; ?>">Pay Now</a></td>
                    <?php
                }?>
                
                
            </tr>
<?php }} ?>




    </tbody>
  </table>
<!-- ------------------------------------------------------------------BREEDING----------------- -->
<br>
<h2 align="center">BREEDING Service Payment</h2>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Request By</th>
        <!-- <th>Date</th>
        <th>Time</th> -->
        <th>Reason</th>
        
        <th>Price</th>
        <th>Payment</th>
        <th>Payment Link</th>
      </tr>
    </thead>
    <tbody>


<?php
$username = $_SESSION['username'];
$q = "SELECT * FROM vaccine_breeding WHERE owner = '$username' AND options='Breeding'";
$result = mysql_query($q);
$count = mysql_num_rows($result);
if($count == 0)
{
?>
</tbody>
  </table>
<?php
echo "No Data!";  

}else{
    while($row2=mysql_fetch_assoc($result))
        {
?>
            <tr>
                <td><?php echo $row2['vb_id']; ?></td>
                <td><?php echo $row2['req_raised_by']; ?></td>
                <td><?php echo $row2['options']; ?></td>
                <td><?php echo $row2['rate']; ?></td>
                <td><?php echo $row2['payment']; ?></td>
                <?php 
                if($row2['payment'] == 'Billed')
                {
                    ?>
<td><a href="a.php?payment_id=<?php echo $row2['vb_id']; ?>">Pay Now</a></td>
                    <?php
                }?>
                
                
            </tr>
<?php }} ?>




    </tbody>
  </table>
<!-- ----------------------------------------------------------------------------------- -->
<?php include('11footer.php') ?>
