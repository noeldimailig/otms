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
    <?php include('header.php'); ?>
</head>

<body>
    <?php include('navigator.php'); ?>
    <div class="container-fluid">
        <div class="row p-5 my-4 rounded-3">
            <div class="col-md-7 d-flex flex-column justify-content-center align-items-center">
                <img style="width: 350px; height:auto;" src="<?= BASE_URL . PUBLIC_DIR . '/assets/img/login.svg'; ?>" alt="">
                <h2 class="mt-3 fw-bold text-success">Thesis Project Management System</h2>
            </div>

            <div class="col-md-5">
                <h1 class="mb-4">Sign In</h1>
                <h5 class="mb-4">Sign in to continue to our application</h5>
                <a id="signin" class="col-12 btn btn-outline-secondary bg-white p-2" role="button" href="<?=$google_client->createAuthUrl()?>">
                    <!-- <img width="20px" style="margin-bottom:3px; margin-right:10px" alt="Google sign-in" src='https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png'> -->
                    <span class="fa fa-google"></span> Sign in with Google
                </a>

                <div class="signup-or-container mt-4 mb-4"><div class="signup-border"></div><span>or</span></div>

                <div style="color: red;">
                    <?= $this->session->flashdata('error'); ?>
                </div>

                <form action="<?= site_url('user/signin'); ?>" method="post" data-hs-cf-bound="true">
                    <div class="form-group col-12 mb-3">
                        <input name="email" placeholder="Email" id="email" type="email" class="form-control-lg form-control">
                    </div>
                    <div class="form-group col-12 mb-3">
                        <input name="password" placeholder="Password" id="password" type="password" class="form-control-lg form-control">
                    </div>
                    <div class="text-center mb-3">
                        <button type="button" class="btn btn-link"><span>Forgot password?</span></button>
                    </div>
                    <div class="form-group col-12 mb-3">
                        <input type="submit" id="submit" class="btn btn-lg col-12 btn-light" value="Log In">
                    </div>
                </form>

                <div class="signup-container text-center">
                    <span class="qa-test-login-signup-link">Don't have an account? <a href="<?= site_url('user/choose'); ?>"> Sign up </a></span>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>

</html>