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

<body data-bs-theme="dark">

    <div class="container">
        <div class="row">
            <!-- <div class="col-12 d-flex justify-content-center">
                <div class="col-3 d-flex flex-column justify-content-center align-items-center timer-bg p-4 rounded-4  me-2">
                    <h5>Days</h5>
                    <span class="number">00</span>
                </div>
                <div class="col-3 col-3 d-flex flex-column justify-content-center align-items-center timer-bg p-4 rounded-4 me-2">
                    <h5>Hours</h5>
                    <span class="number">00</span>
                </div>
                <div class="col-3 col-3 d-flex flex-column justify-content-center align-items-center timer-bg p-4 rounded-4 me-2">
                    <h5>Minutes</h5>
                    <span class="number">00</span>
                </div>
                <div class="col-3 col-3 d-flex flex-column justify-content-center align-items-center timer-bg p-4 rounded-4">
                    <h5>Seconds</h5>
                    <span class="number">00</span>
                </div>
            </div> -->

            <div class="row mt-5 mb-5 vw-100">
                <div class="col-lg-8 col-12 offset-lg-2">
                    <div class="form-control p-4">
                        <h1>Say Happy New Year 🎉🥳</h1>

                        <p>Send a customized New Year greeting to your friends in a different way</p>
                        <br>
                        <div class="row g-3">
                            <div class="col-12 col-md-6">
                                <label for="sfname" class="form-label">Your First Name :</label>
                                <input type="text" id="sfname" class="form-control" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="slname" class="form-label">Your Last Name :</label>
                                <input type="text" id="slname" class="form-control" />
                            </div>
                        </div>
                        <br>
                        <!-- <div class="row">
                            <div class="col-12">
                                <label class="form-label">Your Email :</label>
                                <input type="email" id="semail" class="form-control" />
                            </div>
                        </div>
                        <br> -->
                        <div class="row g-3">
                            <div class="col-12 col-md-6">
                                <label for="rfname" class="form-label">Receiver's First Name :</label>
                                <input type="text" id="rfname" class="form-control" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="rlname" class="form-label">Receiver's Last Name :</label>
                                <input type="text" id="rlname" class="form-control" />
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-12">
                                <label for="cmsg" class="form-label">Custom Message :</label>
                                <textarea rows="5" class="form-control" id="cmsg"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="row g-3">
                            <div class="col-12 col-md-6">
                                <div class="btn btn-success d-grid">Save Greeting</div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="btn btn-danger d-grid">Clear</div>
                            </div>
                        </div>
                        <br>
                        <div class="alert alert-success" role="alert" onclick="coppy();">
                            <span id="link">http://localhost/happy-new-year-2024/index.php?id=6643465bf334cd</span>
                            <i class="bi bi-clipboard ms-2" id="clipBtn"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>