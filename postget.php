<!DOCTYPE html>
<html>
    <body>
        <h2>GET Method</h2>
        <form method="GET">
            Name:<input type="text" name="name">
            <input type="submit">
        </form>
    
<?php

if(isset($_GET['Name'])){
    echo "Name(GET):".$_GET['Name']."<br>";
}
?>

<hr>

<h2>POST Method</h2>
<form method="POST">
    Age:<input type="number" name="age">
    <input type="submit">
</form>

<?php

if(isset($_POST['Age'])){
    echo "Age(POST):".$_POST['age'];
}
?>
    </body>
</html>
