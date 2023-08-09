<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="icon" type="image/x-icon" href="helping.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900|Shrikhand&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            justify-content: center;
        }

        * {
            box-sizing: border-box;
        }

        .nav-link:hover {
            border-bottom: 1px solid #fff;
        }

        .bg-text {
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/opacity/see-through */
            color: #fff;
            font-weight: bold;
            border: 3px solid #f1f1f1;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            width: 80%;
            padding: 20px;
            text-align: center;
        }

        .bg-image {
            background-image: url("./stethoscope.jpg");

            height: 100%;

            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: scroll;
        }

        .bg-text {
            background-color: rgb(0, 0, 0);

            background-color: rgba(0, 0, 0, 0.4);

            color: white;
            font-weight: bold;
            border: 1px solid #f1f1f1;

            width: 80%;
            padding: 20px;
            text-align: center;
            border: none;
            border-radius: 1rem;
        }





        * {
            scroll-behavior: smooth;
        }

        ::-webkit-scrollbar {
            width: 1px;
        }

        ::-webkit-scrollbar-track {
            background-color: #000;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #fff;
        }
    </style>
</head>

<body style="background-color: black;">
    <nav class="navbar navbar-expand-lg mt-3 navbar-dark " style="background-color: none">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">
                <i class="fa fa-heartbeat text-danger" aria-hidden="true">&nbsp;Medicare</i>
            </a>
            <span class="navbar-toggler-icon d-block d-sm-block d-md-block d-lg-none text-light" type="button"
                data-bs-toggle="offcanvas" data-bs-target="#menuoffcanvas" style="cursor: pointer">
                <!-- <i class="fa fa-bars" aria-hidden="true"></i> -->
            </span>

            <div class="collapse navbar-collapse" id="collapsible_navbar">
                <ul class="navbar-nav me-auto text-dark">
                    <li class="nav-item">
                        <!-- <a href="#" class="nav-link text-light">
                            <i class="fa fa-home" aria-hidden="true">&nbsp;Home</i></a> -->
                        <form action="homepage.php" method="post">
                            <button class="btn text-light nav-link">
                                <i class="fa fa-home" aria-hidden="true">&nbsp;Home</i>

                            </button>
                        </form>
                    </li>
                    <li class="nav-item">
                        <a href="#footer" class="nav-link text-light ">
                            <i class="fa fa-info" aria-hidden="true">&nbsp;About us</i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#footer" class="nav-link text-light ">
                            <i class="fa fa-handshake-o" aria-hidden="true">&nbsp;Contact us</i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <!-- <a href="#" class="nav-link ">
                            <i class="fa fa-ambulance" aria-hidden="true">&nbsp;Sevices</i>
                        </a> -->
                        <form action="tablets.php" method="post">
                            <button class="btn text-light nav-link">
                                <i class="fa fa-ambulance" aria-hidden="true">&nbsp;Sevices</i>


                            </button>
                        </form>
                    </li>
                    <li class="nav-item">
                        <!-- <a href="#" class="nav-link ">
                            <i class="fa fa-user-md" aria-hidden="true">&nbsp;Doctors</i>
                        </a> -->
                        <form action="doctors.php" method="post">
                            <button class="btn text-light nav-link">
                                <i class="fa fa-user-md" aria-hidden="true">&nbsp;Doctors</i>


                            </button>

                        </form>
                    </li>
                    <!-- <li class="nav-item">
                        <a href="#" class="nav-link "> Blog </a>
                    </li>
                    <li class="nav-item"> -->
                    <!-- <a href="#" class="nav-link ">
                            <i class="fa fa-calendar" aria-hidden="true">&nbsp;Appointments</i>
                        </a> -->
                    <form action="doctors.php" method="post">
                        <button class="btn text-light nav-link">
                            <i class="fa fa-calendar" aria-hidden="true">&nbsp;Appointments</i>


                        </button>
                    </form>
                    </li>
                </ul>
                <form action="#" class="d-flex">
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#login" type="button">
                        Login &nbsp;<i class="fa fa-sign-in" aria-hidden="true"></i>


                    </button>



                </form>
            </div>
        </div>
    </nav>
    <!-- login modal -->
    <?php
    $lemail = "";
    $lpassword = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["login"])) {
            $lemail = $_POST["lemail"];
            $lpassword = $_POST["lpassword"];
        }
    } ?>


    <div class="modal " id="login">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title text-center">
                        Login

                    </h2>
                    <button class="btn-close" data-bs-dismiss="modal" type="button">


                    </button>

                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-header">
                            <h3 style="font-size: 40px;" class="text-danger text-center">MediCare

                                <i class="fa fa-heartbeat" aria-hidden="true"></i>

                            </h3>

                        </div>
                        <div class="card-body">
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                <label for="lemail" class="form-label">
                                    Email:
                                </label>
                                <input type="text" name="lemail" id="lemail" placeholder="Valid Email"
                                    class="form-control">


                                <label for="lpassword" class="form-label">
                                    Password:
                                </label>
                                <input type="password" name="lpassword" id="lpassword" placeholder="Password"
                                    class="form-control">

                                <div class="card-footer mt-3">
                                    <div class="d-grid">
                                        <button class="btn btn-success " name="login">
                                            Login

                                        </button>

                                    </div>

                                </div>


                            </form>


                        </div>

                        <div class="card-footer">
                            <h5 class="mark"> Dont't have an Account yet!

                            </h5>
                            <button class="btn btn-secondary" data-bs-target="#register" data-bs-toggle="modal">
                                Register

                            </button>

                        </div>

                    </div>

                </div>


            </div>

        </div>

    </div>



    <!-- php register validation -->
    <?php
    $rfnameErr = $rlnameErr = $remailErr = $rpasswordErr = "";
    $rfname = $rlname = $remail = $rpassword = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["register"])) {
            // fname validation
            if (empty($_POST["rfname"])) {
                $rfnameErr = "Not be Empty";
            } else {
                $rfname = test_input($_POST["rfname"]);
                if (!preg_match("/[a-zA-Z\s]*/", $rfname)) {
                    $rfnameErr = "Enter Correctly";
                }

            }
            // last name validation
            if (empty($_POST["rlname"])) {
                $rlnameErr = "Not be Empty";
            } else {
                $rlname = test_input($_POST["rlname"]);
                if (!preg_match("/[a-zA-Z\s]*/", $rlname)) {
                    $rlnameErr = "Enter Correctly";
                }

            }
            // email validation
            if (empty($_POST["remail"])) {
                $remailErr = "Not be Empty";
            } else {
                $remail = test_input($_POST["remail"]);
                if (!filter_var($remail, FILTER_VALIDATE_EMAIL)) {
                    $remailErr = "Enter Correctly";
                }
            }

            // password validation
            if (empty($_POST["rpassword"])) {
                $rpasswordErr = "Not be Empty";
            } else {
                $rpassword = test_input($_POST["rpassword"]);
                if (!preg_match("/[a-zA-Z0-9`~!@#$%^&*(\.,\-_]*/", $rpassword)) {
                    $rpasswordErr = "Enter Correctly";
                }
            }




        }
    }



    ?>

    <!-- register modal -->
    <div class="modal " id="register">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">

                        Register

                    </h2>
                    <button class="btn-close" data-bs-dismiss="modal" type="button">


                    </button>


                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-header">
                            <h3 style="font-size: 40px;" class="text-danger text-center">MediCare

                                <i class="fa fa-heartbeat" aria-hidden="true"></i>

                            </h3>

                        </div>
                        <div class="card-body">
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                <label for="rfname" class="form-label">
                                    First Name:
                                </label> <span class="text-danger">
                                    <?php echo ($rfnameErr); ?>

                                </span>
                                <input type="text" name="rfname" id="rfname" class="form-control"
                                    placeholder="First Name">

                                <label for="rlname" class="form-label">
                                    Last Name:
                                </label> <span class="text-danger">
                                    <?php echo ($rlnameErr); ?>

                                </span>
                                <input type="text" name="rlname" id="rlname" class="form-control"
                                    placeholder="Last Name">

                                <label for="remail" class="form-label">
                                    Email:

                                </label> <span class="text-danger">
                                    <?php echo ($remailErr); ?>

                                </span>
                                <input type="text" name="remail" id="remail" placeholder="Email" class="form-control">

                                <label for="rpassword" class="form-label">
                                    Password:
                                </label> <span class="text-danger">
                                    <?php echo ($rpasswordErr); ?>

                                </span>
                                <input type="password" name="rpassword" id="rpassword" class="form-control"
                                    placeholder="Password">

                                <div class="card-footer mt-3">
                                    <div class="d-grid">
                                        <button class="btn btn-success " name="register">
                                            Register

                                        </button>

                                    </div>

                                </div>

                            </form>

                        </div>
                        <div class="card-footer">
                            <h5 class="mark"> Already have an Account!

                            </h5>
                            <button class="btn btn-secondary" data-bs-target="#login" data-bs-toggle="modal">
                                Login

                            </button>



                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- database connection for register -->
    <?php
    $servername = "localhost";

    $username = "root";
    $password = "";
    $dbname = "medical_care";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // if ($conn) {
    //     echo ("<h2 class=text-success>connected<h2>");
    // } else {
    //     echo ("<h2 class=text-success>not connected<h2>");
    
    // }
    
    if ($rfname != "" && $rlname != "" && $remail != "" && $rpassword != "") {
        $sql = "INSERT INTO registers VALUES('$rfname','$rlname','$remail','$rpassword')";
        if (mysqli_query($conn, $sql)) {
            ?>
            <script>
                $(document).ready(function () {
                    $("#successful_register").modal('show');
                });
            </script>
            <?php


        } else {
            ?>
            <script>
                $(document).ready(function () {
                    $("#unsuccessful_register").modal('show');
                });
            </script>

        <?php }


    }
    ?>
    <!-- successfully registered modal -->
    <div class="modal  " id="successful_register">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="Alert!">
                        Alert!

                    </h2>
                    <button class="btn-close" type="button" data-bs-dismiss="modal">

                    </button>

                </div>
                <div class="modal-body text-bg-success ">
                    Successfully registered


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>

                </div>


            </div>

        </div>

    </div>

    <!-- modal register unsuccessful -->
    <div class="modal  " id="unsuccessful_register">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="Alert!">
                        Alert!

                    </h2>
                    <button class="btn-close" type="button" data-bs-dismiss="modal">

                    </button>

                </div>
                <div class="modal-body  ">
                    <h3 class="text-danger">
                        Registration unsuccessful

                    </h3>
                    <h6 class="text-success">
                        Try Again

                    </h6>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>

                </div>


            </div>

        </div>

    </div>


    <!--inserting into logins table  -->
    <?php



    $last_login_time = date("Y-m-d H:i:s");
    $last_login_ip = $_SERVER['REMOTE_ADDR'];

    $sql2 = "SELECT * FROM registers WHERE Email='$lemail'";
    $lresult = mysqli_query($conn, $sql2);
    if (mysqli_num_rows($lresult) == 1) {
        $row = mysqli_fetch_assoc($lresult);
        if ($lpassword === $row["Password"]) {
            $last_login_time = date("Y-m-d H:i:s");
            $last_login_ip = $_SERVER['REMOTE_ADDR'];
            $sql3 = "INSERT INTO logins(email,last_login_time,last_login_ip) VALUES('$lemail','$last_login_time ','$last_login_ip')";
            if (mysqli_query($conn, $sql3)) {
                ?>
                <script>
                    $(document).ready(function () {
                        $("#lsuccess").modal('show');
                    });
                </script>



                <?php
            } else {
                ?>
                <script>
                    $(document).ready(function () {
                        $("#lnotsuccess").modal('show');
                    });
                </script>
                <?php
            }
        }

    }




    ?>
    <!-- modal for successful login -->
    <div class="modal" id="lsuccess">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="text-warning">
                        Alert!

                    </h2>
                    <button class="btn-close" type="button" data-bs-dismiss="modal">

                    </button>


                </div>
                <div class="modal-body">
                    <h3 class="text-success">
                        Successfully Logged in

                    </h3>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>

                </div>

            </div>

        </div>

    </div>

    <!-- login unsuccessful modal -->
    <div class="modal" id="lnotsuccess">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="text-warning">
                        Alert!

                    </h2>
                    <button class="btn-close" type="button" data-bs-dismiss="modal">

                    </button>


                </div>
                <div class="modal-body">
                    <h3 class="text-danger">
                        Login unsuccessful !

                    </h3>
                    <h6 class="text-success">
                        Try Again!

                    </h6>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>

                </div>

            </div>

        </div>

    </div>






    <div class="offcanvas offcanvas-start offcanvas-lg text-bg-dark text-center" id="menuoffcanvas"
        style="width: 15rem">
        <div class="offcanvas-header">
            <h2 class="offcanvas-title">Menu</h2>
            <button class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <nav class="navbar text-bg-dark navbar-dark d-block">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light">
                            <i class="fa fa-home" aria-hidden="true">&nbsp;Home</i></a>
                    </li>

                    <li class="nav-item">
                        <a href="#footer" class="nav-link text-light">
                            <i class="fa fa-info" aria-hidden="true">&nbsp;About us</i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#footer" class="nav-link text-light">
                            <i class="fa fa-handshake-o" aria-hidden="true">&nbsp;Contact us</i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <!-- <a href="#" class="nav-link">
                            <i class="fa fa-ambulance" aria-hidden="true">&nbsp;Sevices</i>
                        </a> -->

                        <form action="tablets.php" method="post">
                            <button class="btn text-light">
                                <i class="fa fa-ambulance" aria-hidden="true">&nbsp;Sevices</i>

                            </button>

                        </form>
                    </li>
                    <li class="nav-item">
                        <!-- <a href="#" class="nav-link">
                            <i class="fa fa-user-md" aria-hidden="true">&nbsp;Doctors</i>
                        </a> -->
                        <form action="doctors.php" method="post">
                            <button class="btn text-light">
                                <i class="fa fa-user-md" aria-hidden="true">&nbsp;Doctors</i>

                            </button>
                        </form>
                    </li>
                    <!-- <li class="nav-item">
                        <a href="#" class="nav-link"> Blog </a>
                    </li> -->
                    <li class="nav-item">
                        <!-- <a href="#" class="nav-link"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                            Appointments </a> -->
                        <form action="doctors.php" method="post">
                            <button class="btn text-light">
                                <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                Appointments

                            </button>
                        </form>
                    </li>

                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#login" type="button">
                        Login &nbsp;<i class="fa fa-sign-in" aria-hidden="true"></i>


                    </button>

                </ul>
            </nav>
        </div>
    </div>
    <div class="bg-image">
        <div class="container mt-4 bordered bg-text">
            <h2>
                “Good health and good sense are two of life's greatest blessings.”
            </h2>
            <h1 style="font-size: 50px">
                <marquee behavior="" direction="ltr"><i class="fa fa-stethoscope" aria-hidden="true"
                        style="font-size: 60px"></i></marquee>
            </h1>
            <h3>
                <p>
                    welcome to online <br />
                    <span class="text-danger" style="font-size: larger; font-weight: bolder">Medicare</span>
                </p>
            </h3>
        </div>
    </div>

    <!-- doctors description -->
    <div class="container-fluid text-bg-dark p-2 ">
        <h3 class="h3  border border-4 text-center border-success shadow-lg p-2 rounded mt-2 ">
            Meet Our Doctors
        </h3>
    </div>
    <!-- doctor consultancy part -->
    <div class=" container-fluid text-bg-dark">
        <!-- see all -->
        <div class="">
            <form action="doctors.php" method="post">
                <button class="btn btn-sm text-light">
                    view All

                </button>

            </form>

        </div>



        <div class="row ">
            <div class="owl-carousel owl-theme">
                <div class="item h-100">
                    <div class="card text-bg-dark mt-2  h-100 border">

                        <div class="card-img-top">
                            <div class="ratio ratio-4x3">
                                <img src="./doctor1.jpg" alt="" class="img-fluid rounded">

                            </div>

                        </div>


                        <div class="card-header">
                            <h2 class="card-title h2">
                                Dr. Michaela Singh

                            </h2><br>
                            <h4 class=" text-success b">Qualification:
                                <h6 class="text-secondary">
                                    MBBS&nbsp;,&nbsp;BDS
                                </h6>
                            </h4>

                        </div>
                        <div class="card-body">
                            <h6 class="" style="text-indent: 2rem;">Dr. Singh is a board-certified dermatologist with
                                over 10 years
                                of
                                experience treating a variety of skin conditions. She completed her medical degree at
                                the University
                                of
                                California, San Francisco and her residency at the Mayo Clinic.</h6>


                        </div>
                        <div class="card-footer">
                            <form action="doctors.php" method="post">
                                <div class="d-grid">
                                    <button class="btn btn-success btn-lg">
                                        Online Consult

                                    </button>

                                </div>

                            </form>


                        </div>

                    </div>

                </div>
                <div class="item h-100">
                    <div class="card text-bg-dark mt-2 h-100 border ">

                        <div class="card-img-top ">
                            <div class="ratio ratio-4x3">
                                <img src="./doctor2.jpg" alt="" class="img-fluid rounded">

                            </div>

                        </div>


                        <div class="card-header">
                            <h2 class="card-title h2">
                                Dr. Marcus Lee

                            </h2><br>
                            <h4 class=" text-success b">Qualification:
                                <h6 class="text-secondary">
                                    MBBS&nbsp;,&nbsp;DO
                                </h6>
                            </h4>

                        </div>
                        <div class="card-body">
                            <h6 class="" style="text-indent: 2rem;">Dr. Lee is a family medicine physician with a
                                passion for
                                preventative care. He earned his medical degree from the Western University of Health
                                Sciences and
                                completed his residency at the University of Arizona.</h6>


                        </div>
                        <div class="card-footer">

                            <form action="doctors.php" method="post">
                                <div class="d-grid">
                                    <button class="btn btn-success btn-lg">
                                        Online Consult

                                    </button>

                                </div>

                            </form>



                        </div>

                    </div>

                </div>
                <div class="item h-100">
                    <div class="card text-bg-dark mt-2 h-100 border">

                        <div class="card-img-top ">
                            <div class="ratio ratio-4x3">
                                <img src="./doctor5.jpg" alt="" class="img-fluid rounded">

                            </div>

                        </div>


                        <div class="card-header">
                            <h2 class="card-title h2">
                                Dr. Sanaa Patel

                            </h2><br>
                            <h4 class=" text-success b">Qualification:
                                <h6 class="text-secondary">
                                    MD&nbsp;
                                </h6>
                            </h4>

                        </div>
                        <div class="card-body">
                            <h6 class="h6" style="text-indent: 1rem;">Dr. Patel is an obstetrician/gynecologist who
                                specializes in
                                high-risk pregnancies. She received her medical degree from Yale University and
                                completed her
                                residency
                                at Johns Hopkins Hospital.</h6>


                        </div>
                        <div class="card-footer">

                            <form action="doctors.php" method="post">
                                <div class="d-grid">
                                    <button class="btn btn-success btn-lg">
                                        Online Consult

                                    </button>

                                </div>

                            </form>



                        </div>

                    </div>

                </div>
                <div class="item">
                    <div class="card text-bg-dark mt-2 h-100 border">

                        <div class="card-img-top">
                            <div class="ratio ratio-4x3">
                                <img src="./doctor6.jpg" alt="" class="img-fluid rounded">

                            </div>

                        </div>


                        <div class="card-header">
                            <h2 class="card-title h2">
                                Dr. Kyle Johnson

                            </h2><br>
                            <h4 class=" text-success b">Qualification:
                                <h6 class="text-secondary">
                                    phD&nbsp;
                                </h6>
                            </h4>

                        </div>
                        <div class="card-body">
                            <h6 class="h6" style="text-indent: 1rem;">Dr. Johnson is a clinical psychologist who focuses
                                on
                                cognitive
                                behavioral therapy. He earned his doctorate from the University of Pennsylvania and
                                completed his
                                postdoctoral fellowship at UCLA.</h6>


                        </div>
                        <div class="card-footer">

                            <form action="doctors.php" method="post">
                                <div class="d-grid">
                                    <button class="btn btn-success btn-lg">
                                        Online Consult

                                    </button>

                                </div>

                            </form>



                        </div>

                    </div>

                </div>
                <div class="item h-100">
                    <div class="card text-bg-dark mt-2 h-100  border">

                        <div class="card-img-top">
                            <div class="ratio ratio-4x3">
                                <img src="./doctor5.jpg" alt="" class="img-fluid rounded">

                            </div>

                        </div>


                        <div class="card-header">
                            <h2 class="card-title h2">
                                Dr. Juan Rodriguez

                            </h2><br>
                            <h4 class=" text-success b">Qualification:
                                <h6 class="text-secondary">
                                    DVM&nbsp;
                                </h6>
                            </h4>

                        </div>
                        <div class="card-body">
                            <h6 class="h6" style="text-indent: 1rem;">Dr. Rodriguez is a veterinarian with expertise in
                                small animal
                                medicine. He received his veterinary degree from Cornell University and completed his
                                residency at the
                                University of California, Davis.</h6>


                        </div>
                        <div class="card-footer">

                            <form action="doctors.php" method="post">
                                <div class="d-grid">
                                    <button class="btn btn-success btn-lg">
                                        Online Consult

                                    </button>

                                </div>

                            </form>



                        </div>

                    </div>

                </div>


            </div>


        </div>





    </div>


    <!-- Some healthy tips -->
    <div class="container-fluid text-bg-dark mt-1  ">
        <div class="card-header">
            <h3 class="h3  border border-4 text-center border-success shadow-lg p-2 rounded ">
                Today's health tip!
            </h3>

        </div>
        <div class="row">
            <div id="accordian">
                <div class="col-md-12 mt-3">

                    <div class="card text-bg-dark  mt-2" style="filter: drop-shadow(0px 0px 10px #000);">
                        <div class="card-header text-center text-bg-dark ">
                            <a href="#eye" class="btn text-light" data-bs-toggle="collapse">
                                <h5>
                                    Eye Precautions &nbsp;<i class="fa fa-eye" aria-hidden="true"></i>

                                </h5>

                            </a>

                        </div>
                        <div id="eye" class="collapse" data-bs-parent="#accordian">
                            <div class="card-body border rounded " data-mdb-animation=" fade-in">
                                <h6>
                                    <li>

                                        Eat a healthy, balanced diet. Your diet should include plenty or fruits and
                                        vegetables, especially
                                        deep yellow and green leafy vegetables. Eating fish high in omega-3 fatty acids,
                                        such as salmon,
                                        tuna, and halibut can also help your eyes.

                                    </li>
                                </h6>
                                <h6>
                                    <li>

                                        Maintain a healthy weight. Being overweight or having obesity increases your
                                        risk of developing
                                        diabetes. Having diabetes puts you at higher risk of getting diabetic
                                        retinopathy or glaucoma.

                                    </li>
                                </h6>

                            </div>

                        </div>

                    </div>





                </div>
                <div class="col-md-12 mt-3 mb-3">
                    <div class="card text-bg-dark" style="filter: drop-shadow(0px 0px 20px #000);">
                        <div class="card-header text-center text-bg-dark ">
                            <a href="#heart" data-bs-toggle="collapse" class="btn text-light">
                                <h5>
                                    Heart Precautions&nbsp;<i class="fa fa-heart-o" aria-hidden="true"></i>

                                </h5>
                            </a>

                        </div>
                        <div id="heart" class="collapse" data-bs-parent="#accordian">
                            <div class="card-body border rounded ">
                                <h6>
                                    <li>
                                        Don't smoke or use tobacco
                                        One of the best things you can do for your heart is to stop smoking or using
                                        smokeless tobacco.
                                        Even
                                        if
                                        you're not a smoker, be sure to avoid secondhand smoke.
                                    </li>
                                </h6>
                                <h6>
                                    <li>
                                        Get moving: Aim for at least 30 to 60 minutes of activity daily
                                        Regular, daily physical activity can lower the risk of heart disease. Physical
                                        activity helps
                                        control
                                        your weight. It also reduces the chances of developing other conditions that may
                                        put a strain on
                                        the
                                        heart, such as high blood pressure, high cholesterol and type 2 diabetes.
                                    </li>

                                </h6>
                                <h6>
                                    <li>
                                        Manage stress
                                        Some people cope with stress in unhealthy ways — such as overeating, drinking or
                                        smoking. Finding
                                        alternative ways to manage stress — such as physical activity, relaxation
                                        exercises or meditation
                                        —
                                        can
                                        help improve your health.
                                    </li>
                                </h6>

                            </div>

                        </div>

                    </div>

                </div>
            </div>



        </div>
    </div>




    <!-- tablets -->

    <div class="container-fluid text-bg-dark mt-3  ">
        <h3 class="h3  border border-4 text-center border-success shadow-lg  rounded p-2 ">
            Medical Suggestions:
        </h3>
        <h6 class="float-end">
            <!-- view all -->
            <form action="tablets.php" method="post">
                <button class="btn btn-sm text-light">
                    view All

                </button>

            </form>
        </h6>
        <div class="row mt-5 gx-4 ">
            <div class="col-sm-4 col-md-4 mb-3 mt-3">
                <div class="card text-bg-dark h-100 border">
                    <div class="card-img-top">
                        <div class="ratio ratio-4x3 ">
                            <img src="./tablets1.jpg" alt="" class="img-fluid rounded">

                        </div>

                    </div>
                    <div class="card-header">
                        <h2 class="card-title">
                            Ibuprofen

                        </h2>

                    </div>
                    <div class="card-body">
                        <h3 class="text-success">Usage:
                            <h5 class="text-muted">

                                Used to relieve pain and reduce inflammation in conditions such as headache, menstrual
                                cramps,
                                toothache, arthritis, and fever
                            </h5>
                        </h3>

                    </div>
                    <div class="card-footer">
                        <!-- book tablet -->
                        <form action="#" method="post">
                            <div class="d-grid">
                                <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#orders"
                                    type="button">
                                    Order now &nbsp;


                                </button>

                            </div>
                        </form>

                    </div>



                </div>


            </div>
            <div class="col-sm-4 col-md-4 mb-3 mt-3">
                <div class="card text-bg-dark h-100 border">
                    <div class="card-img-top">
                        <div class="ratio ratio-4x3">
                            <img src="./tablet2.jpg" alt="" class="img-fluid rounded">

                        </div>

                    </div>
                    <div class="card-header">
                        <h2 class="card-title">
                            Amoxicillin

                        </h2>

                    </div>
                    <div class="card-body">
                        <h3 class="text-success">Usage:
                            <h5 class="text-muted">

                                An antibiotic used to treat various bacterial infections such as respiratory infections,
                                urinary tract
                                infections, and skin infections.


                            </h5>
                        </h3>

                    </div>
                    <div class="card-footer">
                        <!-- book tablet -->
                        <form action="#" method="post">
                            <div class="d-grid">
                                <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#orders"
                                    type="button">
                                    Order now &nbsp;


                                </button>

                            </div>
                        </form>

                    </div>



                </div>

            </div>
            <div class=" col-sm-4 col-md-4 mb-3 mt-3">
                <div class="card text-bg-dark h-100 border">
                    <div class="card-img-top">
                        <div class="ratio ratio-4x3">
                            <img src="./tablet7.jpg" alt="" class="img-fluid rounded">

                        </div>

                    </div>
                    <div class="card-header">
                        <h2 class="card-title">
                            Aspirin


                        </h2>

                    </div>
                    <div class="card-body">
                        <h3 class="text-success">Usage:
                            <h5 class="text-muted">

                                Used to relieve pain and reduce fever, and also helps to prevent blood clots that can
                                lead to heart
                                attack or stroke.
                            </h5>
                        </h3>

                    </div>
                    <div class="card-footer">
                        <!-- book tablet -->
                        <form action="#" method="post">
                            <div class="d-grid">
                                <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#orders"
                                    type="button">
                                    Order now &nbsp;


                                </button>

                            </div>
                        </form>

                    </div>



                </div>

            </div>

        </div>



    </div>
    <!-- second row -->

    <div class="container-fluid text-bg-dark">
        <div class="row">
            <div class="col-sm-4 col-md-4 mb-3 mt-3">
                <div class="card text-bg-dark h-100 border">
                    <div class="card-img-top">
                        <div class="ratio ratio-4x3">
                            <img src="./tablet6.jpeg" alt="" class="img-fluid rounded">

                        </div>

                    </div>
                    <div class="card-header">
                        <h2 class="card-title">
                            Alprazolam


                        </h2>

                    </div>
                    <div class="card-body">
                        <h3 class="text-success">Usage:
                            <h5 class="text-muted">

                                A benzodiazepine medication used to treat anxiety disorders, panic disorders, and
                                anxiety caused by depression
                            </h5>
                        </h3>

                    </div>
                    <div class="card-footer">
                        <!-- book tablet -->
                        <form action="#" method="post">
                            <div class="d-grid">
                                <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#orders"
                                    type="button">
                                    Order now &nbsp;


                                </button>

                            </div>
                        </form>

                    </div>



                </div>




            </div>
            <div class="col-sm-4 col-md-4 mb-3 mt-3">
                <div class="card text-bg-dark h-100 border">
                    <div class="card-img-top">
                        <div class="ratio ratio-4x3">
                            <img src="./tablet3.jpeg" alt="" class="img-fluid rounded">

                        </div>

                    </div>
                    <div class="card-header">
                        <h2 class="card-title">
                            Omeprazole


                        </h2>

                    </div>
                    <div class="card-body">
                        <h3 class="text-success">Usage:
                            <h5 class="text-muted">

                                A proton pump inhibitor medication used to treat stomach ulcers, gastroesophageal reflux
                                disease (GERD), and other conditions caused by excess stomach acid.

                            </h5>
                        </h3>

                    </div>
                    <div class="card-footer">
                        <!-- book tablet -->
                        <form action="#" method="post">
                            <div class="d-grid">
                                <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#orders"
                                    type="button">
                                    Order now &nbsp;


                                </button>

                            </div>
                        </form>

                    </div>



                </div>



            </div>
            <div class="col-sm-4 col-md-4 mb-3 mt-3">
                <div class="card text-bg-dark h-100 border">
                    <div class="card-img-top">
                        <div class="ratio ratio-4x3">
                            <img src="./tablet10.jpg" alt="" class="img-fluid rounded">

                        </div>

                    </div>
                    <div class="card-header">
                        <h2 class="card-title">
                            Diphenhydramine


                        </h2>

                    </div>
                    <div class="card-body">
                        <h3 class="text-success">Usage:
                            <h5 class="text-muted">
                                An antihistamine medication used to treat allergic reactions, insomnia, and motion
                                sickness.



                            </h5>
                        </h3>

                    </div>
                    <div class="card-footer">
                        <!-- book tablet -->
                        <form action="#" method="post">
                            <div class="d-grid">
                                <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#orders"
                                    type="button">
                                    Order now &nbsp;


                                </button>

                            </div>
                        </form>

                    </div>



                </div>



            </div>

        </div>

    </div>
    <!-- footer -->
    <div class="container-fluid text-bg-dark mt-2 pt-2 " id="footer">


        <div class="row text-center ">
            <div class="col-sm-4 ">

                <a href="#" style="text-decoration: none;">About Us</a><br>
                <a href="mailto:mamillapallisumanth8@gmail.com" style="text-decoration: none;">FAQs</a><br>
                <a href="#" style="text-decoration: none;">Careers</a><br>
                <a href="#" style="text-decoration: none;">Terms and conditions</a><br>
                <a href="#" style="text-decoration: none;">Privacy Policy</a>




            </div>
            <div class="col-sm-4">
                <form action="doctors.php" method="post">
                    <button class="btn ">
                        Doctors

                    </button>
                </form><br>
                <form action="doctors.php" method="post">
                    <button class="btn ">
                        All Doctors

                    </button>
                </form><br>
                <form action="doctors.php" method="post">
                    <button class="btn ">
                        consultancy

                    </button>
                </form><br>


            </div>
            <div class="col-sm-4">
                <a href="https://www.nytimes.com/guides/tmagazine/skincare-routine" style="text-decoration: none;">Skin
                    care</a><br>
                <a href="https://www.babycarestores.in/" style="text-decoration: none;">Baby care</a><br>
                <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public?gclid=CjwKCAjw3POhBhBQEiwAqTCuBplWn6XSY0S2DMfqFmf98ap4kkl2mkgdg4XkMww72vseKo1nrsIqhRoCLkcQAvD_BwE"
                    style="text-decoration: none;">Covid Essentials</a>

            </div>


        </div>

    </div>
    <div class="container-fluid text-bg-dark ">
        <div class="row text-center ">
            <div class="col-sm-6">
                <i class="fa fa-heartbeat text-danger " aria-hidden="true" style="font-size: 40px;">&nbsp;Medicare</i>


            </div>
            <div class="col-sm-6">
                <h3>Find us on:</h3>
                <i class="fa fa-linkedin text-primary" aria-hidden="true" style="font-size: larger;">&nbsp;
                    <a href="https://www.linkedin.com/mwlite/in/mamillapalli-sumanth-756670231" class="text-light"
                        style="text-decoration: none;">linkedin</a>
                </i><br>
                <i class="fa fa-facebook-square text-primary" aria-hidden="true" style="font-size: larger;">
                    <a href="#" class="text-light" style="text-decoration: none;">Facebook</a>

                </i><br>
                <i class="fa fa-envelope  text-danger" aria-hidden="true" style="font-size: larger;">
                    <a href="mailto:mamillapallisumanth8@gmail.com" class="text-light"
                        style="text-decoration: none;">Email</a>
                </i><br>
                <i class="fa fa-instagram text-danger" aria-hidden="true" style="font-size: larger;">
                    <a href="https://www.instagram.com/simple_sumanth__/" class="text-light"
                        style="text-decoration: none;">Instagram</a>
                </i>


            </div>

        </div>


    </div>
    <div class="container-fluid  text-bg-dark text-center">
        <h5>&copy;&nbsp;2023</h5>
        <h5> Devolped by:</h5>
        <h6 class="text-muted">
            Mamillapalli Sumanth
        </h6>

    </div>










    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(".owl-carousel").owlCarousel({
            loop: false,
            margin: 10,
            autoplay: false,
            autoheight: true,

            dots: false,

            nav: true,
            responsive: {
                0: {
                    items: 1.1,
                },
                600: {
                    items: 2.1,
                },
                700: {
                    items: 2.3,
                },
                1000: {
                    items: 3.1,
                },
                800: {
                    items: 2.4,
                },
            },
        });
    </script>
    <script>
        document.getElementById("toastbtn").onclick = function () {
            var toastElList = [].slice.call(document.querySelectorAll(".toast"));
            var toastList = toastElList.map(function (toastEl) {
                return new bootstrap.Toast(toastEl);
            });
            toastList.forEach((toast) => toast.show());
        };
    </script>

    <!-- php validation -->
    <?php
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $fnameErr = $lnameErr = $emailErr = $phnoErr = $stateErr = $cityErr = $pincodeErr = $mnameErr = "";
    $fname = $lname = $email = $phno = $city = $state = $pincode = $mname = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["order"])) {
            if (empty($_POST["mname"])) {
                $mnameErr = "Not be Empty";

            } else {
                $mname = test_input($_POST["mname"]);
                if (!preg_match("/[a-zA-Z\-\s\.]*/", $mname)) {
                    $mnameErr = "Enter Correctly";
                }
            }
            // fname validation
            if (empty($_POST["fname"])) {
                $fnameErr = "Not be Empty";
            } else {
                $fname = test_input($_POST["fname"]);
                if (!preg_match("/[a-zA-Z\s]*/", $fname)) {
                    $fnameErr = "Enter Correctly ";
                }
            }
            // last name validation
            if (empty($_POST["lname"])) {
                $lnameErr = "Not be Empty";
            } else {
                $lname = test_input($_POST["lname"]);
                if (!preg_match("/[a-zA-Z\s]*/", $lname)) {
                    $lnameErr = "Enter Correctly";
                }
            }

            // phone number validation
    
            if (empty($_POST["phno"])) {
                $phnoErr = "Not be Empty";
            } else {
                $phno = test_input($_POST["phno"]);
                if (!preg_match("/[0-9]{10}/", $phno)) {
                    $phnoErr = "Enter Correctly";
                }
            }

            // email validation
    
            if (empty($_POST["email"])) {
                $emailErr = "Not be Empty";
            } else {
                $email = test_input($_POST["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Enter Correctly";
                }
            }

            if (empty($_POST["state"])) {
                $stateErr = "Not be Empty";

            } else {
                $state = test_input($_POST["state"]);
                if (!preg_match("/[a-zA-Z\-\s\.]*/", $state)) {
                    $stateErr = "Enter Correctly";
                }
            }


            // city validation
            if (empty($_POST["city"])) {
                $cityErr = "Not be Empty";

            } else {
                $city = test_input($_POST["city"]);
                if (!preg_match("/[a-zA-Z\-\s\.]*/", $city)) {
                    $cityErr = "Enter Correctly";
                }
            }
            // pincode validation
    
            if (empty($_POST["pincode"])) {
                $pincodeErr = "Not be Empty";
            } else {
                $pincode = test_input($_POST["pincode"]);
                if (!preg_match("/[0-9]{6}/", $pincode)) {
                    $pincodeErr = "Enter Correctly";
                }
            }

            // mname validation
    


        }
    }


    ?>


    <!-- modal -->
    <div class="modal" id="orders">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">
                        Fill Your Details

                    </h2>
                    <button class="btn-close" data-bs-dismiss="modal" type="button">

                    </button>


                </div>
                <div class="modal-body">

                    <div class="card">
                        <div class="card-header">
                            <h3 style="font-size: 40px;" class="text-danger text-center">MediCare

                                <i class="fa fa-heartbeat" aria-hidden="true"></i>

                            </h3>


                        </div>

                        <div class="card-body">
                            <!-- medicine name -->
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                                <label for="mname" class="form-label">
                                    Medicine Name:
                                </label>
                                <span class="text-danger">
                                    <?php echo ($mnameErr); ?>

                                </span>


                                <input type="text" name="mname" id="mname" class="form-control"
                                    placeholder="Tablet Name you Want">

                                <label for="fname" class="form-label">
                                    First Name:
                                </label>
                                <span class="text-danger">
                                    <?php echo ($fnameErr); ?>

                                </span>
                                <input type="text" name="fname" class="form-control" id="fname"
                                    placeholder="First Name">


                                <label for="lname" class="form-label">
                                    Last Name:
                                </label> <span class="text-danger">
                                    <?php echo ($lnameErr); ?>

                                </span>
                                <input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name">


                                <label for="phno" class="form-label">
                                    Phone Number:

                                </label> <span class="text-danger">
                                    <?php echo ($phnoErr); ?>

                                </span>
                                <input type="text" name="phno" id="phno" class="form-control"
                                    placeholder="Phone Number">

                                <label for="email" class="form-label">
                                    Email:
                                </label> <span class="text-danger">
                                    <?php echo ($emailErr); ?>

                                </span>

                                <input type="text" name="email" id="email" placeholder="Email" class="form-control">


                                <label for="state" class="form-label">
                                    State:
                                </label> <span class="text-danger">
                                    <?php echo ($stateErr); ?>

                                </span>
                                <input type="text" name="state" id="state" class="form-control" placeholder="State">



                                <label for="city" class="form-label">
                                    City:

                                </label> <span class="text-danger">
                                    <?php echo ($cityErr); ?>

                                </span>
                                <input type="text" name="city" id="city" class="form-control" placeholder="City">


                                <label for="pincode" class="form-label">
                                    PinCode:
                                </label> <span class="text-danger">
                                    <?php echo ($pincodeErr); ?>

                                </span>
                                <input type="number" name="pincode" id="pincode" placeholder="pincode"
                                    class="form-control">

                                <div class="card-footer">
                                    <div class="d-grid">
                                        <button class="btn btn-sm btn-success" name="order">
                                            Place Order

                                        </button>

                                    </div>

                                </div>


                            </form>



                        </div>




                    </div>



                </div>


            </div>


        </div>

    </div>

    <script>
        $('#orders').on('submit', function () {
            $(#orders).on('hide.bs.modal', function (e) {
                e.preventDefault();
            })
        });
    </script>

    <!-- orders database -->

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "medical_care";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if ($conn) {
        // echo ("<h4 class=text-light>connected</h4>");
    }
    if ($mname != "" && $fname != "" && $lname != "" && $phno != "" && $email != "" && $state != "" && $city != "" && $pincode != "") {
        $sql = "INSERT INTO orders (Medicine_Name,First_name,Last_name,Ph_no,Email,StateN,City,PinCode) VALUES('$mname','$fname','$lname','$phno','$email','$state','$city','$pincode')";

        if (mysqli_query($conn, $sql)) {
            ?>
            <script>
                $(document).ready(function () {
                    $("#orderplaced").modal('show');
                });
            </script>
        <?php } else {
            ?>
            <script>
                $(document).ready(function () {
                    $("#orderplaced").modal('show');
                });
            </script>


            <?php
        }



    }

    ?>

    <div class="modal" id="orderplaced" data-bs-backdrop="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal title text-dark">
                        Your Order have been placed

                    </h4>
                    <button class="btn-close" type="button" data-bs-dismiss="modal">

                    </button>

                </div>
                <div class="modal-body">
                    <h2 class="text-center text-success">
                        Your Order have been placed

                    </h2>

                </div>

            </div>

        </div>

    </div>

    <div class="modal" id="notorderplaced">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <button class="btn-close" type="button" data-bs-dismiss="modal">

                    </button>

                </div>
                <div class="modal-body">
                    <h2 class="text-center text-danger">
                        Your Order have not been placed
                        <h4 class="text-success">
                            try again

                        </h4>


                    </h2>

                </div>

            </div>

        </div>

    </div>


</body>

</html>