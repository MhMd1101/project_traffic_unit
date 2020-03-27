<?php 
    include_once "../vendor/include/header.php"; 
    include_once "../vendor/include/navbar.php"; 
?>

<?php

// Chack If User name Coming Form A Rwqusr

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Assing Valiables

    $user = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
    $msg = filter_var($_POST['massage'], FILTER_SANITIZE_STRING);

    // Creating Array Of Errors

    $formErrors = array();

    if (strlen($user) <= 3) {
        $formErrors[] = "Username Must be Larger Than <strong> 3 </strong> Character's";
    }
    if (strlen($phone) < 11) {
        $formErrors[] = "Cell Phone Must be Larger Than <strong> 11 </strong> Nunber's";
    }
    if (strlen($msg) < 10) {
        $formErrors[] = "The Massage Must be Larger Than <strong> 10 </strong> Character's";
    }

    // If Not Errors Send To Email 
    $headers = 'Form: ' . $email . '\r\n';
    $myEmail = 'mohamed24793@gmail.com';
    $subject = 'Contact Form';

    if (empty($formErrors)) {
        
        mail($myEmail, $subject, $msg, $headers);
        
        $user   = '';
        $email  = '';
        $phone  = '';
        $msg    = '';

        $success = "<div class='alert alert-success'> We Have Recived Your Massage</div>";

    }

}

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Hello, world!</title>
</head>

<body>

    <div class="container">
        <h1 class="text-center"> Contact Me</h1>
        <form class="contact-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <?php
                    if (!empty($formErrors)) { ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="start">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                <?php
                        foreach ($formErrors as $arror) {
                            echo $arror . "<br />";
                        }
                ?>
                </div>  
            <?php } ?>
            <?php if(isset($success)) {echo $success;} ?>
            <div class="form-group">
                <label class="sr-only" for="username">Username</label>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text "> <i class="fa fa-user fa-fw"></i> </div>
                    </div>
                    <input class="form-control username" type="text" name="username" value="<?php if (isset($user)) {echo $user;} ?>" placeholder="Type Your Username">
                </div>
                <span class="asterisx">*</span>
                <div class="alert alert-danger custom-alert">
                    Username Must be Larger Than <strong> 3 </strong> Character's
                </div>
            </div>
            <div class="form-group">
                <label class="sr-only" for="email">Email</label>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-envelope fa-fw"></i></div>
                    </div>
                    <input class="form-control email" type="email" name="email" value="<?php if (isset($email)) { echo $email;} ?>" placeholder="Plases Type Avalid Email" />
                </div>
                <span class="asterisx">*</span>
                <div class="alert alert-danger custom-alert">
                    Email Can't Be <strong> Empty </strong>
                </div>
            </div>
            <div class="form-group">
                <label class="sr-only" for="phone">Call_Phone</label>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-phone fa-fw"></i></div>
                    </div>
                    <input class="form-control phone" type="text" name="phone" value="<?php if (isset($phone)) {echo $phone;} ?>" placeholder="Type Your Cell Phone ">
                </div>
                <span class="asterisx">*</span>
                <div class="alert alert-danger custom-alert">
                    Cell Phone Must be Larger Than <strong> 11 </strong> Nunber's
                </div>
            </div>
            <div class="form-group">
                <textarea class="form-control massage" name="massage" rows="5" placeholder="Your Massage! "><?php if (isset($msg)) {echo $msg;} ?></textarea>
                <span class="asterisx">*</span>
                <div class="alert alert-danger custom-alert">
                    The Massage Must be Larger Than <strong> 10 </strong> Character's
                </div>
            </div>
            <input class="btn btn-success btn-block" type="submit" value="Send Massage">
            <i class="fa fa-paper-plane send-masage fa-fw fa-lg "></i>
        </form>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.js "></script>
    <script src="js/bootstrap.js "></script>
    <script src="js/popper.min.js "></script>
    <script src="js/all.min.js "></script>
    <script src="js/script.js"></script>
</body>

</html>

<?php include_once "../vendor/include/footer.php"; ?>
