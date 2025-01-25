<?php
session_start();
if (!isset($_SESSION["user_id"])){
header("Location: login.php");
}

require './inc/web-info.php';
require 'inc/user_servicePrice.php';

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
         <?php  require './inc/nav.php'; ?>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <?php  require './inc/header.php'; ?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php  require './inc/sidebar.php'; ?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container">
                <div class="container my-5">
                    <!-- Section: Cards at the Top -->
                    <div class="row mb-5">
                        <!-- O'Level Result Upload Card -->
                        <div class="col-12 col-md-6 mb-4">
                            <div class="card h-100 shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-header  text-white border-bottom">Upload O'Level Result</h5>
                                    <div class="card-body">
                                        <?php if ($user['u_wallet'] >= $prices['jamb_olevelPrice']) {
    echo "<p class='bg-success p-2 text-white'>Hello {$user['u_userName']}, you have sufficient balance to proceed. Your wallet balance is Naira ₦{$user['u_wallet']} and the service price is Naira ₦{$prices['jamb_olevelPrice']}. Please proceed with your purchase.</p>";
} else {
    echo "<p class='bg-danger p-2 text-white'>Hello {$user['u_userName']}, your purchase cannot be completed due to insufficient balance. Your wallet balance is Naira ₦{$user['u_wallet']}, and the service price is Naira ₦{$prices['jamb_olevelPrice']}. Please fund your wallet to proceed with this service.</p>";
} ?>
                                            <!-- Amount Section -->
                                        <div class="mt-4">
                                            <h6>Service Charges</h6>
                                            <div class="input-group">
                                                <span class="input-group-text">₦</span>
                                                <input type="text" class="form-control" value="<?php echo $prices['jamb_olevelPrice'];  ?>" disabled>
                                            </div>
                                        </div>
                
                                        <!-- Payment Method Selection -->
                                        <div class="mt-4">
                                            <h6>Payment Method</h6>
                                            <select id="paymentMethod" class="form-control" onchange="toggleProceedButton()">
                                                <option value="">Select Payment Method</option>
                                                <option value="ewallet">e-Wallet</option>
                                            </select>
                                        </div>
                
                                        <!-- Proceed Button -->
                                        <div class="text-center mt-4">
                                        <?php if ($user['u_wallet'] >= $prices['jamb_olevelPrice']) {
                                             echo '<a href="olevel-upload-form.php">
                                             <button id="proceedButton" class="btn btn-primary" >Proceed</button>  </a>';
                                             }   ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                     </div>
                
                        <!-- How It Works Card -->
                        <div class="col-12 col-md-6 mb-4">
                            <div class="card h-100 shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-header text-primary border-bottom mb-3">How It Works</h5>
                                    <ul>
                                        <li>Fill the form below with your accurate details and submit</li>
                                        <li>Click the "Proceed" button to make payment for the service via e-Wallet or Debit Card</li>
                                        <li>Upon successful payment, click the Submit Entry under "O'Level Result Upload History" to enter your O'Level details</li>
                                        <li>Once your service is processed, you will be sent a confirmation email, and you will also be able to print the status of your entry</li>
                                    </ul>
                                    <p class="mt-4">For any enquiry or complaint, please send a mail to <a href="mailto:embassybusinesscafe@gmail.com">embassybusinesscafe@gmail.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <!-- Section for O'Level Result Upload History -->
                    <div class="row my-5">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">O'Level Result Upload History</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="display" style="min-width: 845px">
                                            <thead>
                                                <tr>
                                                    <th>Action</th>
                                                    <th>Type</th>
                                                    <th>Full Name</th>
                                                    <th>Profile Code/RegNo.</th>
                                                    <th>JAMB Year</th>
                                                    <th>Status</th>
                                                    <th>Remark</th>
                                                    <th>Submitted On</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Upload</td>
                                                    <td>O'Level Result</td>
                                                    <td>Tiger Nixon</td>
                                                    <td>12345ABC</td>
                                                    <td>2025</td>
                                                    <td>Approved</td>
                                                    <td>Documents verified</td>
                                                    <td>2025/01/20</td>
                                                </tr>
                                                <tr>
                                                    <td>Upload</td>
                                                    <td>O'Level Result</td>
                                                    <td>Garrett Winters</td>
                                                    <td>67890DEF</td>
                                                    <td>2025</td>
                                                    <td>Pending</td>
                                                    <td>Awaiting verification</td>
                                                    <td>2025/01/18</td>
                                                </tr>
                                                <tr>
                                                    <td>Upload</td>
                                                    <td>O'Level Result</td>
                                                    <td>Ashton Cox</td>
                                                    <td>11223GHI</td>
                                                    <td>2025</td>
                                                    <td>Approved</td>
                                                    <td>Completed submission</td>
                                                    <td>2025/01/15</td>
                                                </tr>
                                                <tr>
                                                    <td>Upload</td>
                                                    <td>O'Level Result</td>
                                                    <td>Shad Decker</td>
                                                    <td>44556JKL</td>
                                                    <td>2024</td>
                                                    <td>Rejected</td>
                                                    <td>Documents incomplete</td>
                                                    <td>2025/01/12</td>
                                                </tr>
                                                <tr>
                                                    <td>Upload</td>
                                                    <td>O'Level Result</td>
                                                    <td>Michael Bruce</td>
                                                    <td>78901MNO</td>
                                                    <td>2025</td>
                                                    <td>Approved</td>
                                                    <td>Details confirmed</td>
                                                    <td>2025/01/10</td>
                                                </tr>
                                                <tr>
                                                    <td>Upload</td>
                                                    <td>O'Level Result</td>
                                                    <td>Donna Snider</td>
                                                    <td>22334PQR</td>
                                                    <td>2025</td>
                                                    <td>Pending</td>
                                                    <td>Awaiting verification</td>
                                                    <td>2025/01/05</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Action</th>
                                                    <th>Type</th>
                                                    <th>Full Name</th>
                                                    <th>Profile Code/RegNo.</th>
                                                    <th>JAMB Year</th>
                                                    <th>Status</th>
                                                    <th>Remark</th>
                                                    <th>Submitted On</th>
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

</html>