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
    <link rel="stylesheet" href="css/css2/framework.css"/>
    <link rel="stylesheet" href="../profile/css/master.css"/>
    <link rel="stylesheet" href="css/all.min.css"/>
    <link rel="stylesheet" href="css/normalize.css"/>
    <link rel="shortcut icon" type="image/x-icon" href="../imgs/logo3.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
    <table id ="table" class = "table p-20" style="    position: absolute;
    right: 50%;
    top: 20%;">
                        <thead class = "alert-info">
                            <tr>
                                <th>Code ID</th>
                                <th>Code</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $q_time = $conn->query("SELECT * FROM `coupon`") or die(mysqli_error());
                            while($f_time = $q_time->fetch_array()){
                                
                        ?>	
                            <tr>
                                <td><?php echo $f_time['code_id']?></td>
                                <td><?php echo htmlentities($f_time['code'])?></td>
                                <td><?php echo htmlentities($f_time['status'])?></td>
                            </tr>
                        <?php
                            }
                        ?>	
                        </tbody>
    </table>
</body>
</html>