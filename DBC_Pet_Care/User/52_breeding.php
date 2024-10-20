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

    textarea {
      width: 100%;
      height: 100px;
      padding: 6px 10px;
      margin: 4px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    input[type="date"],
    input[type="time"] {
      padding: 6px 10px;
      margin: 4px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }
  </style>

<div class="container" style="height: 80vh;">
    <form method="POST" action="controller.php">
        <h2 align="center">Book Pet breeding Appointment</h2>
        <table>
    <tr>
      <th>Write your note:</th>
      <td><textarea name="note" placeholder="Mention your query if any or mention 'none'"></textarea></td>
    </tr>
    
    <tr>
      <th></th>
      <td><input type="submit" name="bookaptbre" value="Book Appointment Now"></td>
    </tr>
  </table>
    </form>
	
</div>
<!-- ----------------------------------------------------------------------------------- -->
 <?php include('11footer.php') ?>