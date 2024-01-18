<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login Of Medimart</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-blue-Gradient-Blue-gradient-login-form.css">
    <link rel="stylesheet" href="assets/css/Login-Form-blue-Gradient.css">
</head>
<body>
    <section>
        <div class="lgp-hd">
            <h2><strong>MediMart</strong></h2>
            <h5><strong>Admin Login</strong></h5>
        </div>
        <div class="container login-cont">
            <div class="row">
                <div class="col-10 col-sm-6 col-md-4 col-lg-4 offset-1 offset-sm-3 offset-md-4 offset-lg-4 login-col"><i class="icon ion-lock-combination"></i>
                    <form class="login-form" method="post" action="LoginValidate.php">
                        <div class="form-group mb-3"><input class="form-control form-control-lg lg-frc" name="username" type="text" required="" placeholder="Enter User ID"></div>
                        <div class="form-group mb-3"><input class="form-control form-control-lg lg-frc" name="pass" type="password" required="" placeholder="Enter Password"></div>
                        <div class="form-group mb-3"><button class="btn btn-light btn-lg login-btn" type="submit"><strong>Login</strong></button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>