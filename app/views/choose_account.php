<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/favicon.ico?v=2">
    <?php include('header.php'); ?>
</head>

<body>
    <?php include('navigator.php'); ?>
    <div class="container-fluid">
        <div class="row p-5 my-4 rounded-3">
            <div class="col-md-5 d-flex flex-column justify-content-center align-items-center">
                <img style="width: 350px; height:auto;" src="<?= BASE_URL . PUBLIC_DIR . '/assets/img/signup.svg'; ?>" alt="">
                <h2 class="mt-3 fw-bold text-success">Thesis Project Management System</h2>
            </div>
            <div class="col-md-7">
                <div class="">
                    <a href="<?= site_url('user/login'); ?>"> Back</a>
                </div>
                <h3 class="mt-3 mb-3"><span>Choose an account</span></h3>
                <div class="usertypes-options">
                    <button class="btn btn-lg btn-outline-secondary py-2 mb-3">
                        <div class="row text-left">
                            <div class="col-md-2 d-flex flex-column align-items-center justify-content-center">
                                <i class="fa-solid fa-chalkboard-user"></i>    
                            </div>                        
                            <div class="col-md-10 d-flex flex-column align-items-start justify-content-start border border-dark">
                                <h5 class="mb-1 border border-dark"><span>Teacher Account</span></h5>
                                <p><span>For teachers, co-teachers, admins, coaches, club advisors, instructional tech</span></p>
                            </div>
                        </div>
                    </button>
                    <button class="btn btn-lg btn-outline-secondary py-2 mb-3">
                        <div class="row text-left">
                            <div class="col-md-2 d-flex flex-column align-items-center justify-content-center">
                                <i class="fa-solid fa-chalkboard-user"></i>    
                            </div>                        
                            <div class="col-md-10 d-flex flex-column align-items-start justify-content-start border border-dark">
                                <h5 class="mb-1 border border-dark"><span>Teacher Account</span></h5>
                                <p><span>For teachers, co-teachers, admins, coaches, club advisors, instructional tech</span></p>
                            </div>
                        </div>
                    </button>
                    <button class="btn btn-lg btn-outline-secondary py-2 mb-4">
                        <div class="row text-left">
                            <div class="col-md-2 d-flex flex-column align-items-center justify-content-center">
                                <i class="fa-solid fa-chalkboard-user"></i>    
                            </div>                        
                            <div class="col-md-10 d-flex flex-column align-items-start justify-content-start border border-dark">
                                <h5 class="mb-1 border border-dark"><span>Teacher Account</span></h5>
                                <p><span>For teachers, co-teachers, admins, coaches, club advisors, instructional tech</span></p>
                            </div>
                        </div>
                    </button>
                </div>
                <div class="signup-container text-center">
                    <span>Don't have an account? <a href="<?= site_url('user/login'); ?>"> Sign in </a></span>
                </div>
            </div>
        </div>
    <?php include('footer.php'); ?>
</body>

</html>