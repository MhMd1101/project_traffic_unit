<?php
include_once "../vendor/include/header.php";
include_once "../vendor/include/navbar.php";
?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Input File Demo - Styling native file input</title>
<link rel="stylesheet" href="login/css/input-file.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<style>
    form {
        direction: rtl;
        text-align: right;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 18px;
        font-weight: bold;
        line-height: 1.8;
        /* background-color: #eae6e64a; */
        margin-top: 50px;
        margin-bottom: 50px;
        display: block;
        width: 100%;
        max-width: 787px;
        margin: 0 auto;
    }
</style>
</head>

<body>

<!-- form-horizontal -->
    <form class="form-group" method="post" action="" enctype="multipart/form-data">
        <h1 class="text-center">تسجيل بيانات الرخصة </h1>

        <div>
            <label> الاسم </label> <input class="form-control" type="text" name="username" placeholder="Username">

            <label> الرقم القومي </label> <input class="form-control" type="number" name="" placeholder="National ID">

            <label> السن </label> <input class="form-control" type="number" name="age" placeholder="Age">
        </div>
        <br><br>
        <label> صور الشخصية </label> <input type="file" name="files" multiple>
        <!-- <br> -->
        <label> صور الرقم القؤمي </label> <input type="file" name="files" multiple>
        <!-- <br> -->
        <label> صور المؤاهل الدراسي </label> <input type="file" name="files" multiple>
        <!-- <br> -->
        <label> صور الشهادة الصحية </label> <input type="file" name="files" multiple>
        <!-- <br> -->
        <input class="btn btn-success btn-lg text-center btn-block" type="submit" value="Send">
        <br>
    </form>

    <script src="login/js/input-file.js"></script>
    <script>
        new InputFile({
            // options
        });
    </script>

    <?php include_once "../vendor/include/footer.php"; ?>