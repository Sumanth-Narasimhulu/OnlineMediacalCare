<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">

    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <style>
        * {
            scroll-behavior: smooth;
        }

        ::-webkit-scrollbar {
            width: 5px;
            height: 10px;
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
                    <form action="homepage.php" method="post">
                            <button class="btn text-light nav-link">
                                <i class="fa fa-home" aria-hidden="true">&nbsp;Home</i>

                            </button>
                        </form>
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
    <!-- login and registrations -->
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


    <?php
    $pnameErr = $emailErr = $phnoErr = $ageErr = $dateErr = "";
    $pname = $email = $phno = $age = $date = "";
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['apnt'])) {
            // name validation
            if (empty($_POST["pname"])) {
                $pnameErr = "Not be Empty";
            } else {
                $pname = test_input($_POST["pname"]);
                if (!preg_match("/[a-zA-Z\s]*/", $pname)) {
                    $pnameErr = "Enter Correctly";
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

            // phone number validation
            if (empty($_POST["phno"])) {
                $phnoErr = "Not be Empty";
            } else {
                $phno = test_input($_POST["phno"]);
                if (!preg_match("/[0-9]{10}/", $phno)) {
                    $phnoErr = "Enter Correctly";
                }
            }
            if (empty($_POST["age"])) {
                $ageErr = "Not be Empty";
            } else {
                $age = test_input($_POST["age"]);
            }
            if (empty($_POST["date"])) {
                $dateErr = "NOt be empty";
            } else {
                $date = test_input($_POST["date"]);

            }
        }
    }

    ?>
    <div class="container-fluid text-bg-dark ">
        <form action="userappoint.php" method="post">
            <button class="btn text-light float-end">
                Your Appointments &nbsp;<i class="fa fa-calendar" aria-hidden="true"></i>

            </button>
        </form>

        <h2 class="h2 border border-4  border-success rounded p-3">
            <marquee behavior="" direction="">
                Meet Our Doctors

            </marquee>
        </h2>

    </div>

    <div class="container-fluid text-bg-dark">
        <h2 class="border border-4 border-success text-center p-2 rounded text-bg-dark">
            Meet Our Cardiologists

        </h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card text-bg-dark h-100 border">
                    <div class="card-img-top">
                        <div class="ratio ratio-4x3">
                            <img src="./doctor5.jpg" alt="" class="rounded img-fluid">

                        </div>

                    </div>
                    <div class="card-header">

                        <h3 class="card-title">
                            Dr. Anna Smith
                            <h4 class="text-success">
                                Qualification:
                                <h5 class="text-muted">
                                    MD

                                </h5>


                            </h4>


                        </h3>



                    </div>
                    <div class="card-body">
                        Interventional Cardiology - surgeries include angioplasty, stenting, and catheterization to
                        diagnose and treat heart conditions.

                    </div>
                    <div class="card-footer">
                        <div class="d-grid">
                            <button class="btn btn-sm btn-light" data-bs-toggle="modal"
                                data-bs-target="#Appointment">Book Online Appointment

                            </button>


                        </div>

                    </div>

                </div>

            </div>
            <div class="col-md-4">
                <div class="card text-bg-dark h-100 border">
                    <div class="card-img-top">
                        <div class="ratio ratio-4x3">
                            <img src="./doctor1.jpg" alt="" class="rounded img-fluid">

                        </div>

                    </div>
                    <div class="card-header">
                        <h4 class="card-header">
                            <h3 class="card-title">
                                Dr. John Lee
                                <h4 class="text-success">
                                    Qualification:
                                    <h5 class="text-muted">
                                        DO

                                    </h5>

                                </h4>

                            </h3>

                        </h4>

                    </div>
                    <div class="card-body">
                        Cardiac Electrophysiology - specializes in treating heart rhythm disorders through procedures
                        such as ablation and pacemaker implantation.


                    </div>
                    <div class="card-footer">
                        <div class="d-grid">
                            <button class="btn btn-sm btn-light" data-bs-toggle="modal"
                                data-bs-target="#Appointment">Book Online Appointment

                            </button>


                        </div>

                    </div>

                </div>

            </div>
            <div class="col-md-4">
                <div class="card text-bg-dark h-100 border">
                    <div class="card text-bg-dark h-100">
                        <div class="card-img-top">
                            <div class="ratio ratio-4x3">
                                <img src="doctr unk2.jpg" alt="" class="rounded img-fluid">

                            </div>

                        </div>
                        <div class="card-header">
                            <h3 class="card-header">
                                Dr. Emily Brown
                                <h4 class="text-success">
                                    Qualification:
                                    <h5 class="text-muted">
                                        MD

                                    </h5>

                                </h4>


                            </h3>

                        </div>
                        <div class="card-body">
                            Cardiac Electrophysiology - specializes in treating heart rhythm disorders through
                            procedures such as ablation and pacemaker implantation.

                        </div>
                        <div class="card-footer">
                            <div class="d-grid">
                                <button class="btn btn-sm btn-light" data-bs-toggle="modal"
                                    data-bs-target="#Appointment">Book Online Appointment

                                </button>


                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- 2nd row cardo -->

    <div class="container-fluid text-bg-dark mt-3">

        <div class="row">
            <div class="col-md-4">
                <div class="card text-bg-dark h-100 border">
                    <div class="card-img-top">
                        <div class="ratio ratio-4x3">
                            <img src="./doctor6.jpg" alt="" class="rounded img-fluid">

                        </div>

                    </div>
                    <div class="card-header">

                        <h3 class="card-title">
                            Dr. Michael Chen
                            <h4 class="text-success">
                                Qualification:
                                <h5 class="text-muted">
                                    MD

                                </h5>


                            </h4>


                        </h3>



                    </div>
                    <div class="card-body">
                        Adult Congenital Heart Disease - specializes in treating adults with congenital heart defects,
                        and performs procedures such as cardiac catheterization and repair of congenital heart defects.

                    </div>
                    <div class="card-footer">
                        <div class="d-grid">
                            <button class="btn btn-sm btn-light" data-bs-toggle="modal"
                                data-bs-target="#Appointment">Book Online Appointment

                            </button>


                        </div>

                    </div>

                </div>

            </div>
            <div class="col-md-4">
                <div class="card text-bg-dark h-100 border">
                    <div class="card-img-top">
                        <div class="ratio ratio-4x3">
                            <img src="./doctor3.jpg" alt="" class="rounded img-fluid">

                        </div>

                    </div>
                    <div class="card-header">
                        <h4 class="card-header">
                            <h3 class="card-title">
                                Dr. Sarah Kim
                                <h4 class="text-success">
                                    Qualification:
                                    <h5 class="text-muted">
                                        DO

                                    </h5>

                                </h4>

                            </h3>

                        </h4>

                    </div>
                    <div class="card-body">
                        Non-Invasive Cardiology - specializes in diagnostic procedures such as echocardiograms, stress
                        tests, and Holter monitoring to evaluate heart function without invasive procedures.


                    </div>
                    <div class="card-footer">
                        <div class="d-grid">
                            <button class="btn btn-sm btn-light" data-bs-toggle="modal"
                                data-bs-target="#Appointment">Book Online Appointment

                            </button>


                        </div>

                    </div>

                </div>

            </div>
            <div class="col-md-4">
                <div class="card text-bg-dark h-100 border">
                    <div class="card text-bg-dark h-100">
                        <div class="card-img-top">
                            <div class="ratio ratio-4x3">
                                <img src="doctor.jpg" alt="" class="rounded img-fluid">

                            </div>

                        </div>
                        <div class="card-header">
                            <h3 class="card-header">
                                Dr. Emily Brown
                                <h4 class="text-success">
                                    Qualification:
                                    <h5 class="text-muted">
                                        MD

                                    </h5>

                                </h4>


                            </h3>

                        </div>
                        <div class="card-body">
                            Cardiac Electrophysiology - specializes in treating heart rhythm disorders through
                            procedures such as ablation and pacemaker implantation.

                        </div>
                        <div class="card-footer">
                            <div class="d-grid">
                                <button class="btn btn-sm btn-light" data-bs-toggle="modal"
                                    data-bs-target="#Appointment">Book Online Appointment

                                </button>


                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Eye doctors -->

    <div class="container-fluid text-bg-dark mt-3">
        <h2 class="border border-4 border-success text-center p-2 rounded text-bg-dark">
            Meet Our ophthalmologist

        </h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card text-bg-dark h-100 border">
                    <div class="card-img-top">
                        <div class="ratio ratio-4x3">
                            <img src="e1.jpg" alt="" class="rounded img-fluid">

                        </div>

                    </div>
                    <div class="card-header">

                        <h3 class="card-title">
                            Dr. David Kim
                            <h4 class="text-success">
                                Qualification:
                                <h5 class="text-muted">
                                    MD &nbsp;PhD

                                </h5>


                            </h4>


                        </h3>



                    </div>
                    <div class="card-body">
                        Dr. David Kim is a retina specialist who specializes in the medical and surgical treatment of
                        retinal disorders. He received his MD and PhD from the University of Michigan and completed his
                        residency and fellowship at the Wilmer Eye Institute at Johns Hopkins University.

                    </div>
                    <div class="card-footer">
                        <div class="d-grid">
                            <button class="btn btn-sm btn-light" data-bs-toggle="modal"
                                data-bs-target="#Appointment">Book Online Appointment

                            </button>


                        </div>

                    </div>

                </div>

            </div>
            <div class="col-md-4">
                <div class="card text-bg-dark h-100 border">
                    <div class="card-img-top">
                        <div class="ratio ratio-4x3">
                            <img src="e2.jpg" alt="" class="rounded img-fluid">

                        </div>

                    </div>
                    <div class="card-header">
                        <h4 class="card-header">
                            <h3 class="card-title">
                                Dr. Jessica Wong
                                <h4 class="text-success">
                                    Qualification:
                                    <h5 class="text-muted">
                                        MD

                                    </h5>

                                </h4>

                            </h3>

                        </h4>

                    </div>
                    <div class="card-body">
                        Dr. Jessica Wong is a pediatric ophthalmologist who specializes in the diagnosis and treatment
                        of eye problems in children. She received her MD from the University of California, San
                        Francisco (UCSF) and completed her residency and fellowship at the University of California, Los
                        Angeles (UCLA). She is a Fellow of the American Academy of Pediatrics (FAAP).

                    </div>
                    <div class="card-footer">
                        <div class="d-grid">
                            <button class="btn btn-sm btn-light" data-bs-toggle="modal"
                                data-bs-target="#Appointment">Book Online Appointment

                            </button>


                        </div>

                    </div>

                </div>

            </div>
            <div class="col-md-4">
                <div class="card text-bg-dark h-100 border">
                    <div class="card text-bg-dark h-100">
                        <div class="card-img-top">
                            <div class="ratio ratio-4x3">
                                <img src="e3.jpg" alt="" class="rounded img-fluid">

                            </div>

                        </div>
                        <div class="card-header">
                            <h3 class="card-header">
                                Dr. Emily Chen
                                <h4 class="text-success">
                                    Qualification:
                                    <h5 class="text-muted">
                                        MD

                                    </h5>

                                </h4>


                            </h3>

                        </div>
                        <div class="card-body">
                            Dr. Emily Chen is a cornea specialist who specializes in the diagnosis and treatment of
                            corneal disorders. She received her MD from the University of California, San Francisco
                            (UCSF) and completed her residency and fellowship at the Wilmer Eye Institute at Johns
                            Hopkins University. She is a Fellow of the American College of Surgeons (FACS).

                        </div>
                        <div class="card-footer">
                            <div class="d-grid">
                                <button class="btn btn-sm btn-light" data-bs-toggle="modal"
                                    data-bs-target="#Appointment">Book Online Appointment

                                </button>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- 2nd row eye -->
    <div class="container-fluid text-bg-dark mt-3">

        <div class="row">
            <div class="col-md-4">
                <div class="card text-bg-dark h-100 border">
                    <div class="card-img-top">
                        <div class="ratio ratio-4x3">
                            <img src="e4.jpg" alt="" class="rounded img-fluid">

                        </div>

                    </div>
                    <div class="card-header">

                        <h3 class="card-title">
                            Dr. Daniel Park
                            <h4 class="text-success">
                                Qualification:
                                <h5 class="text-muted">
                                    MD &nbsp;PhD

                                </h5>


                            </h4>


                        </h3>



                    </div>
                    <div class="card-body">
                        Dr. Daniel Park is a glaucoma specialist who specializes in the diagnosis and treatment of
                        glaucoma. she received her MD and PhD from the University of California, Los Angeles (UCLA) and
                        completed her residency and fellowship at the Wilmer Eye Institute at Johns Hopkins University.


                    </div>
                    <div class="card-footer">
                        <div class="d-grid">
                            <button class="btn btn-sm btn-light" data-bs-toggle="modal"
                                data-bs-target="#Appointment">Book Online Appointment

                            </button>


                        </div>

                    </div>

                </div>

            </div>
            <div class="col-md-4">
                <div class="card text-bg-dark h-100 border">
                    <div class="card-img-top">
                        <div class="ratio ratio-4x3">
                            <img src="e5.jpg" alt="" class="rounded img-fluid">

                        </div>

                    </div>
                    <div class="card-header">
                        <h4 class="card-header">
                            <h3 class="card-title">
                                Dr. Elizabeth Kim
                                <h4 class="text-success">
                                    Qualification:
                                    <h5 class="text-muted">
                                        MD

                                    </h5>

                                </h4>

                            </h3>

                        </h4>

                    </div>
                    <div class="card-body">
                        Dr. Elizabeth Kim is a neuro-ophthalmologist who specializes in the diagnosis and treatment of
                        eye problems related to the nervous system. She received her MD from the University of
                        California, San Francisco (UCSF) and completed her residency and fellowship at the University of
                        California, San Diego (UCSD). She is a Fellow of the American Academy of Neurology (FAAN).


                    </div>
                    <div class="card-footer">
                        <div class="d-grid">
                            <button class="btn btn-sm btn-light" data-bs-toggle="modal"
                                data-bs-target="#Appointment">Book Online Appointment

                            </button>


                        </div>

                    </div>

                </div>

            </div>
            <div class="col-md-4">
                <div class="card text-bg-dark h-100 border">
                    <div class="card text-bg-dark h-100">
                        <div class="card-img-top">
                            <div class="ratio ratio-4x3">
                                <img src="e7.jpg" alt="" class="rounded img-fluid">

                            </div>

                        </div>
                        <div class="card-header">
                            <h3 class="card-header">
                                Dr. Kevin Nguyen
                                <h4 class="text-success">
                                    Qualification:
                                    <h5 class="text-muted">
                                        MD

                                    </h5>

                                </h4>


                            </h3>

                        </div>
                        <div class="card-body">
                            Dr. Kevin Nguyen is an oculoplastic surgeon who specializes in the diagnosis and treatment
                            of eyelid and orbital disorders. He received his MD from Harvard Medical School and
                            completed his residency and fellowship at the Wilmer Eye Institute at Johns Hopkins
                            University.

                        </div>
                        <div class="card-footer">
                            <div class="d-grid">
                                <button class="btn btn-sm btn-light" data-bs-toggle="modal"
                                    data-bs-target="#Appointment">Book Online Appointment

                                </button>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- model -->

    <div class="modal" id="Appointment">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">
                        Book Appointment Here!

                    </h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>

                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3 style="font-size: 40px;" class="text-danger text-center">MediCare

                                <i class="fa fa-heartbeat" aria-hidden="true"></i>

                            </h3>



                        </div>
                        <div class="card-body">
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                <label for="pname" class="form-label">
                                    Patient Name:

                                </label>
                                <span class="text-danger h6">&nbsp; &nbsp;
                                    <?php echo ($pnameErr); ?>
                                </span>
                                <input type="text" id="pname" name="pname" class="form-control"
                                    placeholder="Patient Name">

                                <label for="email" class="form-label">
                                    Email:
                                </label> <span class="text-danger h6">&nbsp; &nbsp;
                                    <?php echo ($emailErr); ?>
                                </span>
                                <input type="text" class="form-control" id="email" placeholder="Email" name="email">


                                <label for="phno" class="form-label">
                                    Whatsapp Number:
                                </label>
                                <span class="text-danger h6">&nbsp; &nbsp;
                                    <?php echo ($phnoErr); ?>
                                </span>

                                <input type="number" class="form-control" id="phno" name="phno"
                                    placeholder="Whatsapp Number">
                                <label for="age" class="form-label">
                                    Age
                                </label>
                                <span class="text-danger h6">&nbsp; &nbsp;
                                    <?php echo ($ageErr); ?>
                                </span>
                                <input type="number" class="form-control" name="age" id="age " placeholder="Age">

                                <label for="date" class="form-label">
                                    Choose Date:
                                </label>
                                <input type="date" class="form-control" name="date" placeholder="date">
                                <div class="card-footer mt-4">
                                    <div class="d-grid">
                                        <button class="btn btn-sm btn-primary" name="apnt">
                                            Book Appointment

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

    <!-- php form validation -->

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


    <!-- data base connectio -->
    <?php
    $servername = "localhost";

    $username = "root";
    $password = "";
    $dbname = "medical_care";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        ?>
        <!-- <div class="toast show">
            <div class="toast-header">
                Not connected
                <button class="btn-close" data-bs-dismiss="toast">

                </button>

            </div>

        </div> -->
    <?php } else { ?>

        <!-- <div class="toast show">
            <div class="toast-header">
                <button class="btn-close" data-bs-dismiss="toast">

                </button>
                connected


            </div>

        </div> -->

    <?php }

    //  $sql = "CREATE DATABASE medical_care";
    // $sql = "CREATE TABLE DocAppointments (
    //     Sno INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //      Patient_Name VARCHAR(50) NOT NULL,Email VARCHAR(50) NOT NULL,Phone_number INT(10),Age INT(3) NOT NULL,ADate Date NOT NULL,reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    // )";
    

    if ($pname != "" && $email != "" && $phno != "" && $age != "" && $date != "") {
        $sql = "INSERT INTO DocAppointments (Patient_Name,Email,Phone_number,Age,ADate) VALUES('$pname','$email','$phno','$age','$date') ";
        if (mysqli_query($conn, $sql)) {
            ?>


            ?>
            <script>
                $(document).ready(function () {
                    $("#booked").modal('show');
                });
            </script>
        <?php } else {
            ?>
            <script>
                $(document).ready(function () {
                    $("#notbooked").modal('show');
                });
            </script>


            <?php
        }
    }
    ?>
    <?php
    $_SESSION["phno"] = $phno;
    ?>

    <div class="modal" id="booked">
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
                        Your Appointment has been placed

                    </h2>

                </div>

            </div>

        </div>

    </div>

    <div class="modal" id="notbooked">
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
                    <h2 class="text-center text-danger">
                        Your Appointment has not been placed
                        <h3 class="text-success">
                            Try Again
                        </h3>


                    </h2>

                </div>

            </div>

        </div>

    </div>

    <?php
    $_SESSION["phno"] = $phno;
    ?>






</body>

</html>