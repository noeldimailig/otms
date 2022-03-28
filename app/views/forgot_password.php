<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1,user-scalable=no">
    <link rel="shortcut icon" href="/favicon.ico?v=2">
    <title>Forgot Password</title>
    <?php include('header.php'); ?>
</head>

<body>
    <?php include('navigator.php'); ?>
    <div class="container-fluid">
        <div class="row p-5 my-4 rounded-3">
            <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
                <img style="width: 500px; height:auto;" src="<?= BASE_URL . PUBLIC_DIR . '/assets/img/forgot.svg'; ?>" alt="">
                <h2 class="mt-3 fw-bold text-success">Thesis Project Management System</h2>
            </div>

            <div class="col-md-6">
                <h1 class="mb-4 mt-5">Forgot Password</h1>
                <p class="fs-6 mb-4">Enter your email and new password and we'll send you verification code to reset your password.</p>
                
                <div id="message"></div>

                <form id="forgot-validate" class="needs-validation" action="<?= site_url('user/forgot_password'); ?>" method="post">
                    <div class="form-group col-md-12 mb-3">
                        <input name="email" placeholder="Email" id="email" type="email" class="form-control-lg form-control" required>
                    </div>
                    <div class="form-group col-md-12 mb-3">
                        <input name="password" placeholder="Password" id="password" type="password" class="form-control-lg form-control" required>
                    </div>
                    <div class="form-group col-md-12 mb-3">
                        <input name="confirm_password" placeholder="Confirm Password" id="confirm_password" type="password" class="form-control-lg form-control" required>
                    </div>
                    <div class="form-group col-md-12 mb-4">
                        <input type="submit" id="submit" class="btn btn-lg col-12 btn-success" value="Send">
                    </div>
                </form>

                <div class="d-flex align-items-between justify-content-between fs-6">
                    <a href="<?= site_url('user/login'); ?>">Sign In</a>
                    <a href="<?= site_url('user/choose'); ?>">Sign Up</a>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>
    <?= load_js(array('assets/js/validate')); ?>
</body>

</html>