<?php include('10header.php') ?>

<!-- ----------------------------------------------------------------------------------- -->
<div class="container" style="height: 100%;">
	  <style>
    table {
      width: 100%;
    }

    th, td {
      padding: 8px;
      border-bottom: 1px solid #ddd;
    }

    input[type="text"],input[type="date"],input[type="email"],input[type="textarea"],
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
  <h2 align="center"> Reachout to our 24/7 Online Vet service</h2>
  <form method="POST" action="controller.php">
<?php
$user = $_SESSION['username'];
$q="SELECT * FROM online_consult WHERE user='$user'";
$result=mysql_query($q);
$row = mysql_fetch_assoc($result);
$query = $row['query'];
$doc_note = $row['doc_note'];
$status = $row['status'];
if($status == 0)
{
  echo "<h3 align='center'>";
  echo "Please wait for some more time. Doctor will soon reply you.</h3>";
}
else
{
?>
	  <table>
      <tr>
        <td>
          Your Query 
        </td>
        <td>
          <!-- <input type="textarea" name="query"> -->
          <?php echo $query;?>
        </td>
      </tr>
      <tr>
        <td>
          Doctor's Reply
        </td>
        <td>
          <!-- <input type="submit" name="querysub" value="Submit Your Query"> -->
          <?php echo $doc_note;?>
        </td>
      </tr>
  </table>
<?php } ?>
</form>
</div>
<!-- ----------------------------------------------------------------------------------- -->
 <?php include('11footer.php') ?>