<?php
                                session_start();
                
                                if (!isset($_SESSION['SESSION_EMAIL'])) {
                                    header("Location: ../signup/index.php");
                                    die();
                                }

                                include 'connect.php';
                                $tim = date("H:i", strtotime("+0 HOURS"));
                                $date = date("Y-m-d", strtotime("+0 HOURS"));
                                // echo "Error: " . $sqll . "<br>" . $conn->error;








                                mysqli_query($conn,"UPDATE timee SET time = NOW()  WHERE student_name='{$_SESSION['SESSION_EMAIL']}'");
                                $query = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");
                                $query2 = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");
                                $query3 = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");
                                $query4 = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");
                                $query5 = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");
                                $queryyy = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");
                                $ti = mysqli_query($conn , "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'")


                                // if (mysqli_num_rows($query) > 0) {
                                //     $row = mysqli_fetch_assoc($query);

                                //     echo "Welcome " . $row['name'] . " <a href='../signup/logout.php'>Logout</a>";
                                // }
?>

<?php




                                $queryy = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");
                                $code = mysqli_query($conn, "SELECT * FROM users WHERE code='{$_SESSION['SESSION_EMAIL']}'");   
                                
                            

?>  




<?php
// $code = mysqli_query("SELECT code FROM `coupon` WHERE code");



?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <link rel="stylesheet" href="css/css2/framework.css"/>
    <link rel="stylesheet" href="../profile/css/css2/master.css"/>
    <link rel="stylesheet" href="css/all.min.css"/>
    <link rel="stylesheet" href="css/normalize.css"/>
    <link rel="shortcut icon" type="image/x-icon" href="../imgs/logo3.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />
  </head>
  <body>
    <div class="page d-flex">
          <div class="sidebar bg-white p-20 p-relative">
            <h3 class="p-relative txt-c mt-0">Fourh Dimention</h3>

            <div class="container">
                <ul>
                    <li>
                        <a class=" d-flex algin-center fs-14 c-black rad-6 p-10" href="dashboard.php">
                        <i class="fa-solid fa-chart-bar fa-fw"></i>
                        
                        <span class="hide-mobile">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a class="active d-flex algin-center fs-14 c-black rad-6 p-10" href="profile.php">
                        <i class="fa-solid fa-user fa-fw"></i>                        
                        <span>Profile</span>
                        </a>
                    </li>
                    <li id="ex">
                        <a class=" d-flex algin-center fs-14 c-black rad-6 p-10" href="watch1.php">
                        <i class="fa-solid fa-chalkboard-user fa-fw"></i>
                        
                        <span id="myBtn" class="php">Explanations</span>
                        </a>
                    </li>
                    <li id="lo">
                        <a class=" d-flex algin-center fs-14 c-black rad-6 p-10" href="">
                        <i class="fa-solid fa-chalkboard-user fa-fw"></i>
                        <i class=" pl-10 fa-solid fa-lock" style="padding-left:10px ;"></i>
                        
                        <span id="myBtn" class="php">Explanations</span>
                        </a>
                    </li>
                    

                    <li id="ex2">
                        <a class=" d-flex algin-center fs-14 c-black rad-6 p-10" href="lectures.php">
                        <i class="fa-solid fa-book-open fa-fw"></i>                    
                        <span>Lectures</span>
                        </a>
                    </li>
                    <li id="lo2">
                        <a class=" d-flex algin-center fs-14 c-black rad-6 p-10" href="">
                        <i class="fa-solid fa-book-open fa-fw"></i>
                        <i class=" pl-10 fa-solid fa-lock" style="padding-left:10px ;"></i>
                
                        <span>Lectures</span>
                        </a>
                    </li>
                    <li id="ex3">
                        <a class=" d-flex algin-center fs-14 c-black rad-6 p-10" href="question.php">
                        <i class="fa-solid fa-question fa-fw"></i>
                        
                        <span>Question</span>
                        </a>
                    </li>
                    <li id="lo3">
                        <a class=" d-flex algin-center fs-14 c-black rad-6 p-10" href="">
                        <i class="fa-solid fa-question fa-fw"></i>
                        <i class=" pl-10 fa-solid fa-lock" style="padding-left:10px ;"></i>
                        
                        <span>Question</span>
                        </a>
                    </li>
                    <li>
                        <a class=" d-flex algin-center fs-14 c-black rad-6 p-10" href="../signup/forgot-password.php">
                        <i class="fa-solid fa-headset fa-fw"></i>
                        
                        <span>Help</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
      <div class="content w-full">
        <!-- Start Head -->
        <div class="head bg-white p-15 between-flex">
          <div class="search p-relative">
            <input class="p-10" type="search" placeholder="Type A Keyword" />
          </div>
          <div class="icons d-flex align-center">
            <span class="notification p-relative">
              <i class="fa-regular fa-bell fa-lg"></i>
            </span>
            <img src="imgs/avatar.png" alt="" />
          </div>
        </div>
        <!-- End Head -->
        <h1 class="p-relative">Profile</h1>
        <div class="profile-page m-20">
          <!-- Start Overview -->
          <div class="overview bg-white rad-10 d-flex align-center">
            <div class="avatar-box txt-c p-20">
              <!-- <img class="rad-half mb-10" src="imgs/avatar.png" alt="" /> -->
              <h2 class="c-grey">Name:</h2>
              <h4 class="m-0"><?php
                                if (mysqli_num_rows($query) > 0) {
                                            $row = mysqli_fetch_assoc($query);
                                            $t = mysqli_fetch_assoc($ti);
                                            echo " " . $row['name'] ;
                                            // " <a href='../signup/logout.php'>Logout</a>"
                                        }

                            ?></h4>

            </div>
            <div class="info-box w-full txt-c-mobile">
              <!-- Start Information Row -->
              <div class="box p-20 d-flex align-center">
                <!-- <h4 class="c-grey fs-15 m-0 w-full">General Information</h4> -->

                <div class="fs-14">

                    <span class="c-grey"><h2>Accout Status:</h2></span>
                    <span class="c-green" style="font-weight: 700;">
                        <div id="not">
                                <?php
                                    if ($t['active'] =="Yes") {
                                        $ms='Actice' ;
                                        echo $ms;
                                        echo "<script>
                                        const element = document.getElementById('lo');
                                        const element2 = document.getElementById('lo2');
                                        const element3 = document.getElementById('lo3');
                                        element.remove();
                                        element2.remove();
                                        element3.remove();
                                        </script>";                      
                                    }
                                    else{
                                        $Color = "red";
                                        $ms2= "Inactive";
                                        echo '<div style="Color:'.$Color.'">'.$ms2.'</div>';
                                        echo "<script>
                                        const element = document.getElementById('ex');
                                        const element2 = document.getElementById('ex2');
                                        const element3 = document.getElementById('ex3');
                                        element.remove();
                                        element2.remove();
                                        element3.remove();
                                        </script>";
                                    }
                                ?>
                        </div>
                    </span>
                </div>

              </div>

            </div>
          </div>
        </div>
        <!-- Start Input Active Code -->
        <div class="active overview bg-white rad-10 d-flex align-center p-20" id="ac">
            <div class="inputdiv">
                <form action="validatecode.php"  method="post">
                    <input type="text" name="activeac" class="activeac rad-6 "  placeholder="Input Activating Code">
                    <input type="submit" class="btn-shape btn-active">
                </form>
                    
            </div>
            </div>
        <!-- End Input Active Code -->

      </div>
    </div>

  </body>
</html>
