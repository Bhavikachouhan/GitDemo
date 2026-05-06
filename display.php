<?php

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Registration Details</title>
    </head>
    <body>
        <h3>Submitted registration details</h3>
        <table border="1" cellpadding="10">
            <tr>
                <td><?php echo $firstname; ?></td>
            </tr>
            <tr>
                <td><?php echo $lastname; ?></td>
            </tr>
            <tr>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <td><?php echo $password; ?></td>
            </tr>
        </table>
        <br>
        <a href="register.php">Go Back</a>
    </body>
</html>