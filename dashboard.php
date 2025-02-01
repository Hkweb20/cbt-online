<?php
session_start();
if (!isset($_SESSION["user_id"])){
header("Location: login.php");
}

require './inc/web-info.php';
require 'inc/user_servicePrice.php';

$title = "Dashboard";
require './inc/header.link.php';
//require 'bilpay_acc.php';

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
                                <p>Username : <?php  echo $user['u_userName']; ?></p>
                            </div>
                            <hr>
                            <div class="card-body text-center">
                                <p>Wallet Balance ₦: <strong> <?php  echo number_format($user['u_wallet']); ?></strong></p>
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
                                <button class="btn btn-outline-primary rounded"><?php echo $prices['jamb_olevelPrice']; ?></button>
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
                 <!-- Bank Transfer Section (hidden by default) -->
                   
                    <div id="bankDetails" style="border: 1px solid #ddd; padding: 15px; border-radius: 8px; background-color: #fff;">
                        <h6 class="mb-4" style="font-size: 1.2rem; font-weight: bold;">Bank Transfer Details</h6>
                        <div class="my-2">
                            <span class="text-danger">*</span> Please make payment into the bank account below, </div>
                        <table class="table table-sm table-bordered">
                            <tbody>
                                <tr>
                                    <th scope="row" style="width: 30%;">Account Name:</th>
                                    <td><?php echo $accountName;  ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Bank Name:</th>
                                    <td><?php echo $bankName; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Account Number:</th>
                                    <td><?php echo $accountNumber; ?></td>
                                </tr>
                               
                            </tbody>
                        </table>
                        
                    </div>


                    
                </form>
            </div>
        </div>
    </div>
</div>

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