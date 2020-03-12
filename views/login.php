<?php
    ob_start();
print ('
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/png" href="./public/img/favicon.png">

    <!--===============================================================================================
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>-->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./public/login/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./public/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./public/login/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./public/login/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./public/login/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./public/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="./public/login/css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="./public/login/images/img-011.png" alt="IMG">
            </div>

            <form class="login100-form validate-form" method="post">
					<span class="login100-form-title">
						Acceso Miembro
					</span>

                <div class="wrap-input100 validate-input" data-validate = "Solo numeros">
                    <input class="input100" type="password" required pattern="[0-9]+" maxlength="8" required name="pass" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-building" aria-hidden="true"></i>
                    </span>
                </div>
                <!--===============================================================================================
                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input class="input100" type="password" name="pass" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                </div>-->

                <div class="container-login100-form-btn">
                    <!--<button class="login100-form-btn">
                        Entrar
                    </button>-->
                    <input class="login100-form-btn" type="submit"  value="Entrar">
                </div>

                <div class="text-center p-t-12">
						<span class="txt1">
							<!--Utilice DNI del propietario-->
						</span>
                    <a class="txt2" href="#">
                        <!--Username / Password?-->
                    </a>
                </div>

               <div class="text-center p-t-136">');
                   if (isset($_GET['error'])){
                       print ('<div class="alert alert-danger">');
                            print $_GET['error'];
                           ob_end_flush();
                    }
                   print ('</div> 
                   <!-- <a class="txt2" href="#">
                        Create your Account
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>-->
                </div>
            </form>
        </div>
    </div>
</div>




<!--===============================================================================================-->
<script src="./public/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="./public/login/vendor/bootstrap/js/popper.js"></script>
<script src="./public/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="./public/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="./public/login/vendor/tilt/tilt.jquery.min.js"></script>
<script >
    $(\'.js-tilt\').tilt({
        scale: 1.1
    })
</script>

<!--===============================================================================================-->
<script src="js/main.js"></script>

</body>
</html>');