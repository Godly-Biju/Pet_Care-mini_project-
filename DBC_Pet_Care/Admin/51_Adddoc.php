<?php include "1header.php" ?>
<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
<h1 align="center">Add New Doctor</h1>
<style>
        table {
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
        }
        label {
            font-weight: bold;
        }
        input[type=text], input[type=email], input[type=tel], textarea {
            width: 300px;
        }
    </style>
    <!-- <script>
        window.addEventListener('DOMContentLoaded', function() {
            // Calculate the minimum date allowed (18 years ago from today)
            var today = new Date();
            var minDate = new Date(today.getFullYear() - 18, today.getMonth(), today.getDate());

            // Format the minimum date as YYYY-MM-DD
            var minDateString = minDate.toISOString().slice(0, 10);

            // Set the minimum attribute of the dob input field
            document.getElementById('dob').setAttribute('min', minDateString);
        });
    </script> -->
<form action="AdminController.php" method="POST">
        <table align="center">
            <tr>
                <td><label for="name">Name:</label></td>
                <td><input type="text" name="name" id="name" pattern="[A-Za-z ]+" required></td>
            </tr>
            <tr>
                <td><label>Gender:</label></td>
                <td>
                    <input type="radio" name="gender" value="male" required> Male
                    <input type="radio" name="gender" value="female" required> Female
                </td>
            </tr>
            <tr>
                <td><label for="dob">Date of Birth:</label></td>
                <td><input type="date" id="dob" name="dob" max="<?php echo date('Y-m-d', strtotime('-18 years')); ?>" required></td>
            </tr>
            <tr>
                <td><label for="email">Email:</label></td>
                <td><input type="email" name="email" id="email" required></td>
            </tr>
            <tr>
                <td><label for="phone">Phone Number:</label></td>
                <td><input type="tel" name="phone" id="phone" pattern="[0-9]{10}" required></td>
            </tr>
            <tr>
                <td><label for="address">Address:</label></td>
                <td><textarea name="address" id="address" required></textarea></td>
            </tr>
            <tr>
                <td><label for="license">License:</label></td>
                <td><input type="text" name="license" id="license" required></td>
            </tr>
            <tr>
                <td><label for="license">Password:</label></td>
                <td><input type="text" name="Password" id="license" required></td>
            </tr>
            <tr>
                <td></td><td><input type="submit" name="Adddoc" value="Save Now"></td>
    </tr>
        </table>
        <br>
        
    </form>
</div><!-- /.content-wrapper -->
<?php include "99footer.php" ?>