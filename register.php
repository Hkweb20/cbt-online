<?php  
require  './inc/web-info.php';
require './inc/lib.links.php';

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
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Create New  Account</h4>
                                    <form action=""  id="reg_form">
                                    <div class="form-group">
                                            <label><strong>First Name</strong></label>
                                            <input type="text" class="form-control" placeholder="First name" name="first_name">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Last Name</strong></label>
                                            <input type="text" class="form-control" placeholder="Last name" name="last_name">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Username</strong></label>
                                            <input type="text" class="form-control" placeholder="username" name="username">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Email</strong></label>
                                            <input type="email" class="form-control" placeholder="hello@example.com" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Phone Number</strong></label>
                                            <input type="phone" class="form-control" placeholder="Phone Number" name="phone">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>State</strong></label>
                                            <input type="text" class="form-control" placeholder="State" name="state">
                                        </div>
                                   
                                        <div class="form-group">
                                            <label><strong>User Tyoe</strong></label>
                                            <select class="form-control"  name="user_type">
                                                <option value="user_type">user type</option>
                                                <option  value="student">Student</option>
                                                <option value="cafe_owner">Cafe owner</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" class="form-control" name="password">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Confirm Password</strong></label>
                                            <input type="password" class="form-control" name="confirm_password">
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-block">Sign me up</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Already have an account? <a class="text-primary" href="login">Sign in</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>

    <!--endRemoveIf(production)-->

    <script>
        $(document).ready(function(){
            $('#form').submit(function(e){
                e.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    type: "post",
                    url: "api/register.api",
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
            Swal.close();
            if (response.status == 'success') {
              iziToast.success({
                title: 'sucess',
                message: response.message,
                position: 'topRight', // Position at the top-right of the page
              });
              setTimeout(function(){
                window.location.href="login.php";
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
</body>

</html>