<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>welkom</h1>

<p>u bent niet ingelogd login om verder te gaan</p>

<a href="login.php">login</a>
</body>
</html>

<?php 
if(!isset ($_SESSION['user'])){
echo "Niet ingelogd <br>";
}
?>