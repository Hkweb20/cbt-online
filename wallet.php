<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <!-- Datatable -->
    <link href="./vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="./css/style.css" rel="stylesheet">
    <!-- Bootstrap JS (ensure you have this included in your project) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

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
                    <li><a href="widget-basic.html" aria-expanded="false"><i class="icon icon-globe-2"></i><span
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
                <div class="container my-5">
                    <!-- Trigger button for the fund wallet modal -->
<!-- Trigger button for the fund wallet modal -->
<div class="container">
    <div class="row mb-4">
        <div class="col-12 col-md-4 mx-auto">
            <div class="card shadow-sm">
                <div class="mt-4 text-center">
                    <h5>My e-Wallet</h5>
                </div>
                <hr>
                <div class="card-body text-center">
                    <p>Wallet Balance: <strong>N10,000</strong></p>
                </div>
                <div class="card-footer text-center">
                    <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#fundWalletModal">
                        <i class="bi bi-wallet2"></i> Fund Wallet
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Fund Wallet Modal -->
<div class="modal fade" id="fundWalletModal" tabindex="-1" aria-labelledby="fundWalletModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="fundWalletModalLabel">Fund Wallet</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="p-2 bg-primary">Kindly Choose FLUTTERWAVE to avoid the extra ₦100 fee on PAYSTACK for transactions of ₦2,500 and above.</p>
                
                <form id="fundWalletForm">
                    <div class="mb-3">
                        <label for="amount" class="form-label">Amount</label>
                        <input type="number" class="form-control" id="amount" value="650">
                    </div>

                    <div class="row ms-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="paymentGateway" id="paystack" value="paystack" checked onchange="showBankDetails()">
                            <label class="form-check-label" for="paystack">
                                Paystack
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="paymentGateway" id="flutterwave" value="flutterwave" onchange="showBankDetails()">
                            <label class="form-check-label" for="flutterwave">
                                Flutterwave
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="paymentGateway" id="bankTransfer" value="bankTransfer" onchange="showBankDetails()">
                            <label class="form-check-label" for="bankTransfer">
                                Bank Transfer
                            </label>
                        </div>
                    </div>
                    
                    

                   <!-- Bank Transfer Section (hidden by default) -->
                   
                    <div id="bankDetails" style="display: none; border: 1px solid #ddd; padding: 15px; border-radius: 8px; background-color: #fff;">
                        <h6 class="mb-4" style="font-size: 1.2rem; font-weight: bold;">Bank Transfer Details</h6>
                        <div class="my-2">
                            <span class="text-danger">*</span> Please make payment into the bank account below, after which you are required to upload proof of payment
                        </div>
                        <table class="table table-sm table-bordered">
                            <tbody>
                                <tr>
                                    <th scope="row" style="width: 30%;">Account Name:</th>
                                    <td>Lorem, ipsum.</td>
                                </tr>
                                <tr>
                                    <th scope="row">Bank Name:</th>
                                    <td>MONIEPOINT MFB</td>
                                </tr>
                                <tr>
                                    <th scope="row">Account Number:</th>
                                    <td>XXXXXXXXXX</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="text-center"><strong>OR</strong></td>
                                </tr>
                                <tr>
                                    <th scope="row">Account Name:</th>
                                    <td>XXXXXXXX BUSINESS CAFE</td>
                                </tr>
                                <tr>
                                    <th scope="row">Bank Name:</th>
                                    <td>ZENITH BANK</td>
                                </tr>
                                <tr>
                                    <th scope="row">Account Number:</th>
                                    <td>XXXXXXXXX</td>
                                </tr>
                            </tbody>
                        </table>
                        
                    </div>


                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-outline-primary mt-3">Proceed</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

                
                    <!-- Section for O'Level Result Upload History -->
                    <div class="row my-5">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Bank Transfer History</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="display" style="min-width: 845px">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Reference</th>
                                                    <th>Amount</th>
                                                    <th>Payment Screenshot</th>
                                                    <th>Status</th>
                                                    <th>Transaction Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>#123456789</td>
                                                    <td>₦2,500.00</td>
                                                    <td><img src="screenshot1.jpg" alt="screenshot1" width="50"></td>
                                                    <td>Completed</td>
                                                    <td>2025/01/20</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>#987654321</td>
                                                    <td>₦1,000.00</td>
                                                    <td><img src="screenshot2.jpg" alt="screenshot2" width="50"></td>
                                                    <td>Pending</td>
                                                    <td>2025/01/18</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>#456789123</td>
                                                    <td>₦5,000.00</td>
                                                    <td><img src="screenshot3.jpg" alt="screenshot3" width="50"></td>
                                                    <td>Completed</td>
                                                    <td>2025/01/15</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>#654321987</td>
                                                    <td>₦3,000.00</td>
                                                    <td><img src="screenshot4.jpg" alt="screenshot4" width="50"></td>
                                                    <td>Failed</td>
                                                    <td>2025/01/12</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>#789012345</td>
                                                    <td>₦4,000.00</td>
                                                    <td><img src="screenshot5.jpg" alt="screenshot5" width="50"></td>
                                                    <td>Completed</td>
                                                    <td>2025/01/10</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>#123987456</td>
                                                    <td>₦2,000.00</td>
                                                    <td><img src="screenshot6.jpg" alt="screenshot6" width="50"></td>
                                                    <td>Pending</td>
                                                    <td>2025/01/05</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Reference</th>
                                                    <th>Amount</th>
                                                    <th>Payment Screenshot</th>
                                                    <th>Status</th>
                                                    <th>Transaction Date</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- JavaScript for enabling/disabling the Proceed button -->
                <script>
                    // Function to enable/disable the "Proceed" button based on payment method selection
                    function toggleProceedButton() {
                        var paymentMethod = document.getElementById('paymentMethod').value;
                        var proceedButton = document.getElementById('proceedButton');
                        
                        // Enable button if a payment method is selected, otherwise keep it disabled
                        if (paymentMethod !== "") {
                            proceedButton.disabled = false;
                        } else {
                            proceedButton.disabled = true;
                        }
                    }
                </script>
                
                
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
    


    <!-- Datatable -->
    <script src="./vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="./js/plugins-init/datatables.init.js"></script>

</body>
<script>
   function showBankDetails() {
    const paymentGateway = document.querySelector('input[name="paymentGateway"]:checked').value;
    const bankDetailsSection = document.getElementById('bankDetails');
    
    if (paymentGateway === 'bankTransfer') {
        bankDetailsSection.style.display = 'block';
    } else {
        bankDetailsSection.style.display = 'none';
    }
}

</script>
<!-- Bootstrap JS (includes Popper for dropdowns and tooltips) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</html>
