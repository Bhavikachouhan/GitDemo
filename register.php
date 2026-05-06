<!DOCTYPE html>
<html>
    <head>
        <title>Registration page</title>
    </head>
    <body>
        <h2>User Registration form</h2>
        <form action="display.php" method="POST">
            First Name:<input type="text" name="firstname" required><br><br>
            Last Name:<input type="text" name="lastname" required><br><br>
            Email:<input type="email" name="email" required><br><br>
            Password:<input type="password" name="password" required><br><br>
            <input type="submit" value="register">
        </form>
    </body>
</html>