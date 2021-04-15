<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Book</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<div class="main">

    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <form action="handleaddbooks.php" method="POST" class="signup-form"
                      enctype="multipart/form-data">
                    <h2 class="form-title">Add Book</h2>
                    <div class="form-group">
                        <input type="text" class="form-input" name="ISBN" id="ISBN" placeholder="ISBN"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="Book_title" id="Book_title"
                               placeholder="Book title"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="Author" id="Author" placeholder="Book Author"/>
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-input" name="cover" id="file"/>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term"/>
                        <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all
                            statements in <a href="#" class="term-service">Terms of service</a></label>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="uploaddata" id="submit" class="form-submit" value="Add Book"/>
                    </div>
                    <div>
                        <a href="home.php" style="text-decoration: none">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </section>

</div>

<!-- JS -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>