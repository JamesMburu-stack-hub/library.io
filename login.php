<!doctype html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="icon" href="images/library.jpg" type="image/icon type">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
</head>
<body class="img js-fullheight" style="background-image: url(images/signup-bg.jpg); background-size: cover;">
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="login-wrap p-0">
                    <h3 class="text-center text-light"><i class="fas fa-book-open fa-2x"></i></h3>
                    <h5 class="mb-4 text-center text-light">Library Management</h5>
                    <form action="handlelogin.php" method="post" class="signin-form">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input id="password-field" name="password" type="password" class="form-control"
                                   placeholder="Password" required>
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                        <br>
                        <div class="w-50">
                            <label class="checkbox-wrap checkbox-primary text-center">Remember Me
                                <input type="checkbox" checked>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary submit px-3">Login</button>
                        </div>
                        <div class="form-group d-md-flex">
                            <div class="w-50 text-md-left">
                                <a href="index.php" class="text-light">Sign up</a>
                            </div>
                            <div class="w-50 text-md-right text">
                                <a href="resetpassword.php" class="text-light">Forgot Password</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
