<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     include("menupage.php");
    ?>
    <h1>Welcome!!<?php echo $_SESSION['anyname']; ?> you have sucessfully logged in!!!</h1>
</body>
</html>