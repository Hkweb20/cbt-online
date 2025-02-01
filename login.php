<?php  

require  './inc/web-info.php';
require  './inc/lib.links.php';

?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?php   echo $webname; ?> -Login Page  </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link href="./css/style.css" rel="stylesheet">
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-4">
                    <div class="authincation-content">
                    <div class="row no-gutters">
    <div class="col-xl-12">
        <div class="auth-form">
            <h4 class="text-center mb-4">Sign in your account</h4>
            <form action="" id="loginform" method="post">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                        </div>
                        <input type="email" class="form-control" name="email" placeholder="user@example.com">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-lock"></i></span>
                        </div>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                </div>
                <div class="form-row d-flex justify-content-between mt-4 mb-2">
                    <div class="form-group">
                        <div class="form-check ml-2">
                            <input class="form-check-input" type="checkbox" id="basic_checkbox_1">
                            <label class="form-check-label" for="basic_checkbox_1">Remember me</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <a href="page-forgot-password.html">Forgot Password?</a>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block">Sign me in</button>
                </div>
            </form>
            <div class="new-account mt-3">
                <p>Don't have an account? <a class="text-primary" href="register.php">Sign up</a></p>
            </div>
        </div>
    </div>
</div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $('#loginform').submit(function(e){
                e.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    type: "post",
                    url: "api/login.php",
                    data: formData,
                    beforeSend: function() {
                        Swal.fire({
          title: 'Please wait...',
          html: 'Processing your request.',
          allowOutsideClick: false,
          didOpen: () => {
            Swal.showLoading();
          }
        });
                    },
          success: function(response) {
            console.log(response);
            Swal.close();
            if (response.status == 'success') {
              iziToast.success({
                title: 'sucess',
                message: response.message,
                position: 'topRight', // Position at the top-right of the page
              });
              setTimeout(function(){
                window.location.href="dashboard.php";
              },3000);
            } else {
              iziToast.error({
                title: 'Error',
                message: response.message,
                position: 'topRight'

              });
            }


                    }
                });
            });
        });
    </script>
    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>

</body>

</html>