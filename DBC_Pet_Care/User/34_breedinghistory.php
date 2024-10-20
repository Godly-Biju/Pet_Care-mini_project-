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
<h2 align="center">BREEDING Service History</h2>
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
                
                
                
            </tr>
<?php }} ?>




    </tbody>
  </table>

<!-- ----------------------------------------------------------------------------------- -->
<?php include('11footer.php') ?>
