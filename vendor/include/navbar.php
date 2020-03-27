<!-- ##################################################################  -->
<div class="wrapper">
    <header class="header">
        <section class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col col-sm-4 col-xs-12">
                        <div class="contact">
                            <h2 class="text-center"><?php
                                                    if (isset($_SESSION['full_name'])) {
                                                        echo "Hello: " . $_SESSION['full_name'];
                                                    }
                                                    ?></h2>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-4">
                        <div class="join-us">
                            <p><span class="phone"><a href="#">Phone: +1023546789</a></span><span class="email"><a href="#">Email: Mohamed@gmail.com</a></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ##################################################################  -->
        <section class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <a href="index.php">
                            <div class="main-logo">
                                <img src="../vendor/layout/img/logo_unit.jpg" alt="">
                                <h2>SERVICES</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-7">
                        <div class="menu">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="index.php">HOME</a></li>
                                <li><a href="definition.php">ABOUT US</a></li>
                                <li><a href="service.php">SERVICES</a></li>
                                <!-- <li><a href="#">PORTFOLIO </a></li> -->
                                <li><a href="contact.php">CONTACT</a></li>
                                <!-- ============== php ============================ -->
                                <?php
                                if (isset($_SESSION['full_name'])) {
                                ?>
                                    <li class="">
                                        <a class="" href="../logic/users/logout.php">LOGOUT</a>
                                    </li>
                                <?php
                                }
                                ?>
                                <?php
                                if (!isset($_SESSION['full_name'])) {
                                ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="login">Login</a>
                                    </li>
                                <?php
                                }
                                ?>
                                <!-- ============== php ============================ -->

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <!-- ##################################################################  -->