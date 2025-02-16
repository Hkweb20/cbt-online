<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="./vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


</head>

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
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="./images/logo.png" alt="">
                <img class="logo-compact" src="./images/logo-text.png" alt="">
                <img class="brand-title" src="./images/logo-text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-bell"></i>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-user"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-shopping-cart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="ti-bookmark"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-heart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-image"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class="all-notification" href="#">See all notifications <i
                                            class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="./app-profile.html" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="./email-inbox.html" class="dropdown-item">
                                        <i class="icon-envelope-open"></i>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="./page-login.html" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                    <li><a href="./index.html"><i
                                class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                    </li>
                    <li class="nav-label">Navigations</li>
                    <li><a href="wallet.html" aria-expanded="false"><i class="icon icon-globe-2"></i><span
                        class="nav-text">e-wallet</span></a></li>
                    <li><a href="widget-basic.html" aria-expanded="false"><i class="icon icon-globe-2"></i><span
                            class="nav-text">Transaction History</span></a></li>
                    <li><a href="widget-basic.html" aria-expanded="false"><i class="icon icon-globe-2"></i><span
                                class="nav-text">How It works</span></a></li>
                    <li><a href="widget-basic.html" aria-expanded="false"><i class="icon icon-globe-2"></i><span
                                    class="nav-text">Profile</span></a></li>
                    <li><a href="widget-basic.html" aria-expanded="false"><i class="icon icon-globe-2"></i><span
                                            class="nav-text">Change Password</span></a></li>
                    <li> <a href="./page-login.html" class="dropdown-item">
                        <i class="icon-key"></i>
                        <span class="ml-2">Logout </span>
                    </a></li>
                  
                   
                    <li class="nav-label">Forms</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-form"></i><span class="nav-text">Forms</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./form-element.html">Form Elements</a></li>
                            <li><a href="./form-wizard.html">Wizard</a></li>
                            <li><a href="./form-editor-summernote.html">Summernote</a></li>
                            <li><a href="form-pickers.html">Pickers</a></li>
                            <li><a href="form-validation-jquery.html">Jquery Validate</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Table</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-layout-25"></i><span class="nav-text">Table</span></a>
                        <ul aria-expanded="false">
                            <li><a href="table-bootstrap-basic.html">Bootstrap</a></li>
                            <li><a href="table-datatable-basic.html">Datatable</a></li>
                        </ul>
                    </li>
                </ul>
            </div>


        </div>
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
                    <a href="jamb-o-level-upload.php" class="card-link text-decoration-none">
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
                    <a href="jamb-reprinting.html" class="card-link text-decoration-none">
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
        <div class="footer bg-primary text-white py-4">
            <div class="container">
                <div class="row">
                    <!-- Footer Content: Flexbox for larger screens, stacked on mobile -->
                    <div class="col-12 d-flex flex-column flex-md-row justify-content-between">
                        
                        <!-- Image Section (Optional, if you want to add an image) -->
                        <div class="footer-image mb-3 mb-md-0">
                            <img src="your-image-url.png" alt="Logo" class="img-fluid" style="max-width: 150px;">
                        </div>
                        
                        <!-- Useful Links -->
                        <div class="useful-links mb-3 mb-md-0">
                            <h6 class="text-warning">Useful Links</h6>
                            <ul class="list-unstyled">
                                <li><a href="#" class="text-white">Home</a></li>
                                <li><a href="#" class="text-white">How It Works</a></li>
                                <li><a href="#" class="text-white">Contact Us</a></li>
                                <li><a href="#" class="text-white">Sign Up</a></li>
                                <li><a href="#" class="text-white">Login</a></li>
                                <li><a href="#" class="text-white">Online Services</a></li>
                            </ul>
                        </div>
        
                        <!-- Contact Us -->
                        <div class="contact-us mb-3 mb-md-0">
                            <h6 class="text-warning">Contact Us</h6>
                            <p>Email: <a href="mailto:embassybusinesscafe@gmail.com" class="text-warning">embassybusinesscafe@gmail.com</a></p>
                            <p>Care Line: <a href="tel:+2347033914475" class="text-warning">07033914475</a></p>
                        </div>
        
                        <!-- Account Details -->
                        <div class="account-details mb-3 mb-md-0">
                            <h6 class="text-warning">Account Details</h6>
                            <p><strong>MONIEPOINT MFB</strong><br>Account Name: Embassy Cafe 3<br>Account Number: 5718988504</p>
                            <p><strong>ZENITH BANK</strong><br>Account Name: Embassy Business Cafe<br>Account Number: 1017247141</p>
                        </div>
                    </div>
                </div>
        
                <!-- Copyright Section (Always at the bottom) -->
                <div class="row mt-4">
                    <div class="col-12 text-center">
                        <p class="mb-0">Copyright © 2025 Embassy e-Services. All Rights Reserved. Designed & Developed by <a href="#" target="_blank" class="text-warning">Quixkit</a></p>
                    </div>
                </div>
            </div>
        </div>
        
        
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
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>


    <!-- Vectormap -->
    <script src="./vendor/raphael/raphael.min.js"></script>
    <script src="./vendor/morris/morris.min.js"></script>


    <script src="./vendor/circle-progress/circle-progress.min.js"></script>
    <script src="./vendor/chart.js/Chart.bundle.min.js"></script>

    <script src="./vendor/gaugeJS/dist/gauge.min.js"></script>

    <!--  flot-chart js -->
    <script src="./vendor/flot/jquery.flot.js"></script>
    <script src="./vendor/flot/jquery.flot.resize.js"></script>

    <!-- Owl Carousel -->
    <script src="./vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <!-- Counter Up -->
    <script src="./vendor/jqvmap/js/jquery.vmap.min.js"></script>
    <script src="./vendor/jqvmap/js/jquery.vmap.usa.js"></script>
    <script src="./vendor/jquery.counterup/jquery.counterup.min.js"></script>


    <script src="./js/dashboard/dashboard-1.js"></script>

</body>

</html>