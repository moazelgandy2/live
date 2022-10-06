<?php
	require_once 'connect.php';
    $query = mysqli_query($conn, "SELECT * FROM coupon");
    $fetch = mysqli_fetch_array($query);

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
    <h1><?php
    echo $query;
    
    ?></h1>
</body>
</html>