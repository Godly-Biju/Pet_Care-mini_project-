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
	  <table>
      <tr>
        <td>
          Enter your query
        </td>
        <td>
          <input type="textarea" name="query" required>
        </td>
      </tr>
      <tr>
        <td>
          
        </td>
        <td>
          <input type="submit" name="querysub" value="Submit Your Query">
        </td>
      </tr>
  </table></form>
</div>
<!-- ----------------------------------------------------------------------------------- -->
 <?php include('11footer.php') ?>