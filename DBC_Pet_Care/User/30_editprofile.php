<?php include('10header.php') ?>
<!-- ----------------------------------------------------------------------------------- -->
<?php
$username  = $_SESSION['username'];

$q="SELECT * FROM register WHERE email='$username'";
$result = mysql_query($q);
$row = mysql_fetch_assoc($result);
$name = $row['name'];
$pet_name = $row['pet_name'];
$pet_type = $row['pet_type'];
$pet_dob = $row['pet_dob'];
$email = $row['email'];
$pet_gender = $row['pet_gender'];
$address = $row['address'];
$phone_no = $row['phone_no'];
?>
<div class="container" style="height: 100%;">
	  <style>
    table {
      width: 100%;
    }

    th, td {
      padding: 8px;
      border-bottom: 1px solid #ddd;
    }

    input[type="text"],input[type="date"],input[type="email"],
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
  <h2 align="center"> Edit Profile</h2>
  <form method="POST" action="controller.php">
	  <table>
    <tr>
      <th>Pet name:</th>
      <td><input type="text" name="pet_name" value="<?php echo $pet_name; ?>" required></td>
    </tr>
    <tr>
      <th>Pet Type:</th>
      <td><input type="text" name="pet_type" value="<?php echo $pet_type; ?>" placeholder="Eg: Dog, Cat etc" required></td>
    </tr>
    <!-- <tr>
      <th>Breed:</th>
      <td><input type="text" name="pet_breed"></td>
    </tr> -->
    <tr>
      <th>Pet's Gender:</th>
      <td>
        <select name="pet_gender" required>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Pet's DOB:</th>
      <td><input type="date" id="dob" name="dob" value="<?php echo $pet_dob; ?>"  required></td>
      <!-- max="<?php echo date('Y-m-d', strtotime('-18 years')); ?>" -->
    </tr>
    <tr>
      <th>Owner Name:</th>
      <td><input type="text" name="owner_name" value="<?php echo $name; ?>" readonly></td>
    </tr>
    <tr>
      <th>Owner Email:</th>
      <td><input type="email" name="owner_email" value="<?php echo $email; ?>" readonly></td>
    </tr>
    <tr>
      <th>Phone Number:</th>
      <td><input type="text" name="phone_number" value="<?php echo $phone_no; ?>" readonly></td>
    </tr>
    <tr>
      <th>Address:</th>
      <td><input type="text" name="address" value="<?php echo $address; ?>" required></td>
    </tr>
    <tr><td></td>
      <td colspan="2">
        <button type="submit" name="Addpet">Save</button>
      </td>
    </tr>
  </table>
  </form>
</div>
<!-- ----------------------------------------------------------------------------------- -->
 <?php include('11footer.php') ?>