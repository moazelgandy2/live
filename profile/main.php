<?php


if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 10)) {
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-profile.css">
    <title>Fourth Dimention</title>
</head>
<body>
    <ul class="navigation">
    <li>
            <a href="../index.php">
            <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
            <span class="text">Home</span>
            </a>
        </li>
        <li>
            <a href="../index.php">
            <span class="icon"><ion-icon name="book-outline"></ion-icon></span>
            <span class="text">Lectures</span>
            </a>
        </li>
        <li>
            <a href="#">
            <span class="icon"><ion-icon name="person-circle-outline"></ion-icon><ion-ion></ion-ion></span>
            <span class="text">Profile</span>
            </a>
        </li>        
        <li>
            <a href="#">
            <span class="icon"><ion-icon name="chatbox-ellipses-outline"></ion-icon></span>
            <span class="text">Support</span>
            </a>
        </li>
    </ul>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>