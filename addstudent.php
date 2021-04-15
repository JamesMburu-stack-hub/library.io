<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Student</title>

    <!--    <link rel="stylesheet" href="bootstrap/css/style.css">-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <style>
        body {
            background-color: #426e8a;
            font-family: Roboto;
        }

        .signupform {
            background-color: #d4d4d4;
            text-align: center;
            margin: 50px;
            border-radius: 8px;
        }
    </style>
</head>
<body>
<div class="container m-4">
    <div>
        <form action="handlesignup.php" method="post" class="signupform">
            <h3 class="text-center">Add student</h3>
            <p class="text-center">To library database</p>

            <div class="row p-3">
                <div class="col">
                    <input type="text" class="form-control" name="firstname" placeholder="Enter first name" required>
                </div>

                <div class="col">
                    <input type="text" class="form-control" name="lastname" placeholder="Enter last name" required>
                </div>
            </div>
            <div class="row p-3">
                <div class="col">
                    <input type="text" class="form-control" name="phoneno" placeholder="Enter phone number" required>
                </div>

                <div class="col">
                    <input type="text" class="form-control" name="libcode" placeholder="Enter library code" required>
                </div>
            </div>
            <div class="row p-3">
                <div>
                    <input type="email" class="form-control" name="email" placeholder="example@gmail.com" required>
                </div>
            </div>
            <div class="row p-3">
                <div>
                    <input type="password" class="form-control" name="password" placeholder="password" required>
                </div>
            </div>
            <div class="row p-3">
                <div>
                    <input type="password" class="form-control" name="confirmpassword" placeholder="confirm password"
                           required>
                </div>
            </div>
            <div class="row p-2">
                <div>
                    <input type="checkbox" class="form-check-input" name="checkbox" required> I accept Terms And
                    conditions
                </div>
            </div>
            <div class="row p-2">
                <div>
                    <button class="btn btn-success btn-lg" name="addstud">ADD</button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>