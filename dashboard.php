<?php
require './inc/web-info.php';
$title = "Dashboard";
require './inc/header.link.php';


?>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
          <?php require './inc/nav.php'; ?>
        <!--**********************************
            Nav header end
        ***********************************-->
         <?php require './inc/header.php'; ?>
        <!--**********************************
            Header start
        ***********************************-->
        
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
          <?php   require './inc/sidebar.php'; ?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-12 col-md-4 mx-auto"> <!-- mx-auto centers the card -->
                        <div class="card shadow-sm">
                            <div class="mt-4 text-center">
                                <h5>My e-Wallet</h5>
                            </div>
                            <hr>
                            <div class="card-body text-center">
                                <p>Wallet Balance: <strong>N10,000</strong></p>
                            </div>
                            <div class="card-footer text-center">
                                <button class="btn btn-outline-primary ">
                                    <i class="bi bi-wallet2"></i> Fund Wallet
                                </button>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
            
        
            <!-- Second Section: Our Services -->
            <div class="row col-10 mb-5 mt-5 mx-auto">
                <div class="col-12">
                    <h3 class="text-center text-primary mb-4">Our Services</h3>
                </div>

                <!-- Dummy data for services, now with 7 services -->
                <div class="col-12 col-md-4 mb-4">
                    <a href="jamb-change-of-course.html" class="card-link text-decoration-none">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body text-center">
                                <h5 class="card-title text-primary">JAMB</h5>
                                <hr>
                                <h2 class="card-text">Change of Course/Institution.</h2>
                            </div>
                            <div class="card-footer text-center">
                                <button class="btn btn-outline-primary rounded">Change of Course/Institution</button>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-4 mb-4">
                    <a href="jamb-o-level-upload.html" class="card-link text-decoration-none">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body text-center">
                                <h5 class="card-title text-primary">JAMB</h5>
                                <hr>
                                <h2 class="card-text">O'Level Upload.</h2>
                            </div>
                            <div class="card-footer text-center">
                                <button class="btn btn-outline-primary rounded">600</button>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-4 mb-4">
                    <a href="#" class="card-link text-decoration-none">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body text-center">
                                <h5 class="card-title text-primary">JAMB</h5>
                                <hr>
                                <h2 class="card-text">Printing JAMB Result.</h2>
                            </div>
                            <div class="card-footer text-center">
                                <button class="btn btn-outline-primary rounded">1200</button>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Additional 4 services -->
                <div class="col-12 col-md-4 mb-4">
                    <a href="#" class="card-link text-decoration-none">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body text-center">
                                <h5 class="card-title text-primary">JAMB</h5>
                                <hr>
                                <h2 class="card-text">Print Admission Letter.</h2>
                            </div>
                            <div class="card-footer text-center">
                                <button class="btn btn-outline-primary rounded">1800</button>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-4 mb-4">
                    <a href="#" class="card-link text-decoration-none">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body text-center">
                                <h5 class="card-title text-primary">JAMB</h5>
                                <hr>
                                <h2 class="card-text">Reprinting Services.</h2>
                                <h4 class="card-text">DE Slip, Admission Letter, Original Result and Change of Course.</h4>
                            </div>
                            <div class="card-footer text-center">
                                <button class="btn btn-outline-primary rounded">Learn More</button>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-4 mb-4">
                    <a href="#" class="card-link text-decoration-none">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body text-center">
                                <h5 class="card-title text-primary">JAMB</h5>
                                <hr>
                                <h2 class="card-text">JAMB CAPS.</h2>
                            </div>
                            <div class="card-footer text-center">
                                <button class="btn btn-outline-primary rounded">Learn More</button>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-4 mb-4">
                    <a href="#" class="card-link text-decoration-none">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body text-center">
                                <h5 class="card-title text-primary">JAMB</h5>
                                <hr>
                                <h2 class="card-text">Other JAMB service.</h2>
                                <h4 class="card-text">Check Admission Status, Get O'Level Screenshot, Retrieve JAMB Reg.No/Profile Code.</h4>
                            </div>
                            <div class="card-footer text-center">
                                <button class="btn btn-outline-primary rounded">Learn More</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            
        
            <!-- Third Section: Scratch Card/Pin -->
            <div class="row mb-4">
                <div class="col-12">
                    <h3 class="text-center text-warning mb-4">Scratch Cards/Pins</h3>
                </div>
                <!-- Scratch Card options -->
                <div class="col-12 col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">WAEC</h5>
                            <button class="btn btn-success">Buy WAEC Card</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">NECO</h5>
                            <button class="btn btn-success">Buy NECO Card</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">NABTEB</h5>
                            <button class="btn btn-success">Buy NABTEB Card</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
       
           <?php require './inc/footer.php'; ?>
        
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <?php require './inc/footer.link.php'; ?>

</body>

</html>