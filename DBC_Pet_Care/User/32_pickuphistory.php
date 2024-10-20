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
<h2 align="center">Appointment History</h2>
  <table>
    <thead>
      <tr>
        <th>Apt ID</th>
        <th>Pet Center</th>
        <th>Date</th>
        <th>Time</th>
        <th>Reason</th>
        <th>Price</th>
        <th>Payment</th>
      </tr>
    </thead>
    <tbody>


<?php
$username = $_SESSION['username'];
$q = "SELECT * FROM appointment WHERE owner = '$username'";
$result = mysql_query($q);
    while($row=mysql_fetch_assoc($result))
        {
?>
            <tr>
                <td><?php echo $row['apt_id']; ?></td>
                <td><?php echo $row['petcenter']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['time']; ?></td>
                <td><?php echo $row['reason']; ?></td>
                <td><?php echo 'Rs '.$row['apt_rate']; ?></td>
                <td><?php echo $row['payment']; ?></td>
                
                
            </tr>
<?php } ?>




    </tbody>
  </table>

<!-- ----------------------------------------------------------------------------------- -->
<?php include('11footer.php') ?>
