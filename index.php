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
            <div class="row mt-5 vw-100">
                <div class="col-lg-8 col-12 offset-lg-2">
                    <div class="form-control p-4">
                        <h1>Say Happy New Year 🎉🥳</h1>

                        <p>Send a customized New Year greeting to your friends in a different way</p>
                        <br>
                        <div class="row g-3">
                            <div class="col-12 col-md-6">
                                <label for="sfname" class="form-label">Your First Name :</label>
                                <input type="text" id="sfname" class="form-control focus-ring focus-ring-success"/>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="slname" class="form-label">Your Last Name :</label>
                                <input type="text" id="slname" class="form-control focus-ring focus-ring-success" />
                            </div>
                        </div>
                        <br>
                        <div class="row g-3">
                            <div class="col-12 col-md-6">
                                <label for="rfname" class="form-label">Receiver's First Name :</label>
                                <input type="text" id="rfname" class="form-control focus-ring focus-ring-success" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="rlname" class="form-label">Receiver's Last Name :</label>
                                <input type="text" id="rlname" class="form-control focus-ring focus-ring-success" />
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-12">
                                <label for="cmsg" class="form-label">Custom Message :</label>
                                <textarea rows="5" class="form-control focus-ring focus-ring-success" id="cmsg"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="row g-3">
                            <div class="col-12 col-md-6">
                                <div class="btn btn-success d-grid" type="submit" onclick="saveGreeting();">Save Greeting</div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="btn btn-danger d-grid" onclick="clr();">Clear</div>
                            </div>
                        </div>
                        <br>
                        <div class="alert alert-success d-none"  id="link_container" role="alert" onclick="coppy();">
                            <span id="link"></span>
                            <i class="bi bi-clipboard ms-2" id="clipBtn"></i>
                        </div>
                    </div>
                    <div class="row">
                            <p class="text-center mt-5" style="font-size:0.8rem;">Copyright &copy; 2023-2024 Darshana Wishwajith</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.5.1/dist/confetti.browser.min.js"></script>

</body>

</html>