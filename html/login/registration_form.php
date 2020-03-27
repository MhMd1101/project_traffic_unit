<!DOCTYPE html>
<?php session_start(); ?>

<html lang="en">

<head>
    <title>Login V2</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form method="POST" action="../../logic/users/registerValidate.php" class="login100-form validate-form" role="form">
                    <span class="login100-form-title p-b-26">
						Sing Up
					</span>
                    <span class="login100-form-title p-b-28">
						<i class="zmdi zmdi-font"></i>
					</span>

                    <div class="wrap-input100 ">
                        <input class="input100" type="text" id="first_name" name="first_name">
                        <span class="focus-input100" data-placeholder="First Name"></span>
                        <?php if (isset($_SESSION['user_error']['firstName'])) {
                            echo $_SESSION['user_error']['firstName'];
                            unset($_SESSION['user_error']['firstName']);
                        }
                        ?>
                    </div>

                    <div class="wrap-input100 ">
                        <input class="input100" type="text" id="last_name" name="last_name">
                        <span class="focus-input100" data-placeholder="Last Name"></span>
                    </div>

                    <div class="wrap-input100 ">
                        <input class="input100" type="email" id="email" name="email">
                        <span class="focus-input100" data-placeholder="Email"></span>
                        <?php if (isset($_SESSION['user_error']['user_duplicate'])) {
                            echo $_SESSION['user_error']['user_duplicate'];
                            unset($_SESSION['user_error']['user_duplicate']);
                            }
                        ?>
                    </div>

                    <div class="wrap-input100 ">
                        <span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
                        <input class="input100" type="password" id="password" name="password">
                        <span class="focus-input100" data-placeholder="Password"></span>
                    </div>

                    <div class="wrap-input100 ">
                        <span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
                        <input class="input100" type="password" id="password_confirmation" name="password">
                        <span class="focus-input100" data-placeholder="Conferm Password"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
								Sign Up
							</button>
                        </div>
                    </div>

                    <div class="text-center p-t-50">
                        <span class="txt1">
							Don’t have an account?
						</span>

                        <a class="txt2" href="index.php">
							Login
						</a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

</html>