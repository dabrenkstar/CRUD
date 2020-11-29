
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design for Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Start your project here-->
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 offset-sm-3">
                <!-- Default form login -->
                <form class="text-center border border-light p-5" action="controller.php" method="POST">
                <input type="hidden" name="method" value="login">
                    <p class="h4 mb-4">Sign in</p>

                    <!-- Email -->
                    <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail" name="email">

                    <!-- Password -->
                    <input type="password" id="defaultLoginFormPassword" class="form-control mb-4"
                        placeholder="Password" name="password">

                    <div class="d-flex justify-content-around">
                        <div>
                            <!-- Remember me -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                                <label class="custom-control-label" for="defaultLoginFormRemember" name="remember">Remember me</label>
                            </div>
                        </div>
                        <div>
                            <!-- Forgot password -->
                            <a href="">Forgot password?</a>
                        </div>
                    </div>

            <!-- Sign in button -->
            <button class="btn btn-info btn-block my-4" type="submit">Sign in</button>

            <!-- Register -->
            <p>Not a member?
                <a href="">Register</a>
            </p>

            <!-- Social login -->
            <p>or sign in with:</p>

            <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
            <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
            <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
            <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

            </form>
        </div>
    </div>
    <!-- Default form login -->
    </div>
    <!-- End your project here-->

    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript"></script>

</body>

</html>