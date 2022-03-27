<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/favicon.ico?v=2">
    <title>Verify Account</title>
    <?php include('header.php'); ?>
</head>

<body>
    <?php include('navigator.php'); ?>
    <div class="container-fluid">
        <div class="row p-5 my-4 rounded-3">
            <div class="col-md-5 d-flex flex-column justify-content-center align-items-center">
                <img style="width: 500px; height:auto;" src="<?= BASE_URL . PUBLIC_DIR . '/assets/img/verify.svg'; ?>" alt="">
                <h2 class="mt-3 fw-bold text-success">Thesis Project Management System</h2>
            </div>
            <div class="col-md-7">
                <a class="fs-5 mt-5" style="text-transform:none;" href="<?= site_url('user/choose'); ?>"><i class="fa-solid fa-arrow-left-long fa-lg text-dark"></i> Go Back</a>
                <h2 class="mt-5 mb-4">Verify Account</h2>
                <p class="mt-2 mb-4 fs-6"><span>Verify your account. After verifying your account, you can start creating a class.</span></p>

                <div id="message"></div>
                <form id="verify-validate" class="needs-validation" action="<?= site_url('user/verify_account'); ?>" method="post">  
                    <div class="col-12 mb-3">
                        <label for="email" class="form-label mb-0 fs-5">Email</label>
                        <input type="email" class="form-control form-control-lg" name="email" id="email" placeholder="Email" required>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="token" class="form-label mb-0 fs-5">Verification Code</label>
                        <input name="token" placeholder="Verification Code" id="token" type="password" class="form-control-lg form-control" required>
                    </div>  
                    <div class="mb-3 col-12">
                        <input type="submit" id="submit" class="btn btn-success btn-lg col-12" value="Verify">
                    </div>
                </form>
                <div class="signup-container text-center">
                    <span>Already have an account? <a href="<?= site_url('user/login'); ?>"> Sign in </a></span>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>
    <?= load_js(array('assets/js/validate')); ?>
</body>

</html>