<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Happy New Year 2024</title>

    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="resources/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<body data-bs-theme="dark" onload="new_year_timer();">

    <?php

    include "connection.php";

    if ((isset($_GET["id"])) && !$_GET['id'] == "") {

        $msg_id = $_GET["id"];

        $all_rs = Database::search("SELECT `sender`.`sfname`, `sender`.`slname`, `receiver`.`rfname`, `receiver`.`rlname`, `message`.`msg` FROM `message` INNER JOIN `sender` ON `message`.`Sender_id` = `sender`.`id` INNER JOIN `receiver` ON `message`.`Receiver_id` = `receiver`.`id` WHERE `message`.`id` = '" . $msg_id . "'");

        $all_data = $all_rs->fetch_assoc();
    ?>
        <div class="container" id="counter">
            <div class="row vh-100 d-flex align-items-center">
                <div class="col-12 d-flex justify-content-center mt-5">
                    <div class="col-3 d-flex flex-column justify-content-center align-items-center timer-bg p-4 rounded-4  me-2">
                        <h5 class="timer_text">Days</h5>
                        <span class="number" id="days">00</span>
                    </div>
                    <div class="col-3 col-3 d-flex flex-column justify-content-center align-items-center timer-bg p-4 rounded-4 me-2">
                        <h5 class="timer_text">Hours</h5>
                        <span class="number" id="hours">00</span>
                    </div>
                    <div class="col-3 col-3 d-flex flex-column justify-content-center align-items-center timer-bg p-4 rounded-4 me-2">
                        <h5 class="timer_text">Minutes</h5>
                        <span class="number" id="minutes">00</span>
                    </div>
                    <div class="col-3 col-3 d-flex flex-column justify-content-center align-items-center timer-bg p-4 rounded-4">
                        <h5 class="timer_text">Seconds</h5>
                        <span class="number" id="seconds">00</span>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6 col-12 offset-md-3">
                        <div class="alert alert-warning d-flex justify-content-center" role="alert">
                            <span><i class="bi bi-alarm"></i> Please wait patiently for the surprise! 😉</span>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <p class="text-center mt-5" style="font-size:0.8rem;">Copyright &copy; 2023-2024 Darshana Wishwajith</p>
                </div>
            </div>
        </div>

        <div class="container d-none" id="ten-counter">
            <div class="row">
                <div class="col-12 d-flex justify-content-center align-items-center vh-100">
                    <h1 style="font-size:10rem; font-weight:bold;" id="ten_counter_number" style="overflow: hidden !important;">10</h1>
                </div>
            </div>
        </div>

        <div class="container d-none" id="confetti-canvas" >
            <div class="row">
                <div class="col-12 d-flex justify-content-center align-items-center">

                    <div class="col-12">
                        <div class="row">
                            <div class="col-6">Sender's First Name : <span class="fw-bold" id="sfname"><?php echo $all_data["sfname"] ?></span></div>
                            <div class="col-6">Sender's Last Name : <span class="fw-bold" id="slname"><?php echo $all_data["slname"] ?></span></div>
                        </div>
                        <div class="row">
                            <div class="col-6">Receiver's First Name : <span class="fw-bold" id="rfname"><?php echo $all_data["rfname"] ?></span></div>
                            <div class="col-6">Receiver's Last Name : <span class="fw-bold" id="rlname"><?php echo $all_data["rlname"] ?></span></div>
                        </div>
                        <div class="row">
                            <div class="col-12">Custom Message : <span class="fw-bold" id="cmsg"><?php echo $all_data["msg"] ?></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php
    } else {
        header("Location:index.php");
    }
    ?>


    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="confetti.browser.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.5.1/dist/confetti.browser.min.js"></script>

</body>

</html>