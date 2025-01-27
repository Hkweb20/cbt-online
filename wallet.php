<?php
session_start();
if (!isset($_SESSION["user_id"])){
header("Location: login.php");
}

require './inc/web-info.php';
require 'inc/user_servicePrice.php';
require 'bilpay_acc.php';
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

        <!--**********************************
            Header start
        ***********************************-->
        <?php require './inc/header.php'; ?>

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
                <p>Wallet Balance ₦: <strong> <?php   ?></strong></p>
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

                
                    <!-- Section for O'Level Result Upload History -->
                    <div class="row my-5">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Transfer History</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="display" style="min-width: 845px">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Reference</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                    <th>Transaction Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>#123456789</td>
                                                    <td>₦2,500.00</td>
                                                    <td>Completed</td>
                                                    <td>2025/01/20</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>#987654321</td>
                                                    <td>₦1,000.00</td>
                                                    <td>Pending</td>
                                                    <td>2025/01/18</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>#456789123</td>
                                                    <td>₦5,000.00</td>
                                                    <td>Completed</td>
                                                    <td>2025/01/15</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>#654321987</td>
                                                    <td>₦3,000.00</td>
                                                    <td>Failed</td>
                                                    <td>2025/01/12</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>#789012345</td>
                                                    <td>₦4,000.00</td>
                                                    <td>Completed</td>
                                                    <td>2025/01/10</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>#123987456</td>
                                                    <td>₦2,000.00</td>
                                                    <td>Pending</td>
                                                    <td>2025/01/05</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Reference</th>
                                                    <th>Amount</th>
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
        <?php  echo require './inc/footer.php'; ?>
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

<!-- Bootstrap JS (includes Popper for dropdowns and tooltips) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</html>
