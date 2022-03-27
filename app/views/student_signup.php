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
    <title>Student Account</title>
    <?php include('header.php'); ?>
</head>

<body>
    <?php include('navigator.php'); ?>
    <div class="container-fluid">
        <div class="row p-5 my-4 rounded-3">
            <div class="col-md-5 d-flex flex-column justify-content-center align-items-center">
                <img style="width: 500px; height:auto;" src="<?= BASE_URL . PUBLIC_DIR . '/assets/img/student.svg'; ?>" alt="">
                <h2 class="mt-3 fw-bold text-success">Thesis Project Management System</h2>
            </div>
            <div class="col-md-7">
                <a class="fs-5" style="text-transform:none;" href="<?= site_url('user/choose'); ?>"><i class="fa-solid fa-arrow-left-long fa-lg text-dark"></i> Go Back</a>
                <h2 class="mt-4 mb-4">Student Account</h2>
                <p class="mt-2 mb-4 fs-5"><span>Create your account. After creating your account, you can start joining a class together with your teachers and classmates.</span></p>

                <a id="signin" class="col-12 bg-white btn btn-outline-secondary p-2" role="button" href="<?=$google_client->createAuthUrl()?>">
                    <!-- <img width="20px" style="margin-bottom:3px; margin-right:10px" alt="Google sign-in" src='https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png'> -->
                    <span class="fa fa-google"></span> Sign up with Google
                </a>

                <div class="signup-or-container mt-4 mb-4"><div class="signup-border"></div><span>or</span></div>

                <div style="color: red;">
                    <?= $this->session->flashdata('error'); ?>
                </div>
                <form action="<?= site_url('user/register'); ?>" method="post" data-hs-cf-bound="true">
                    <div class="row">
                        <div class="form-group col-md-4 mb-2">
                            <label for="fname" class="form-label mb-0">First Name</label>
                            <input type="text" class="form-control form-control-sm mb-0" name="fname" id="fname" placeholder="First Name" required>
                        </div>
                        <div class="form-group col-md-2 mb-2">
                            <label for="mname" class="form-label mb-0">Middle Name</label>
                            <input type="text" class="form-control form-control-sm mb-0" name="mname" id="mname" placeholder="Middle Name">
                        </div>
                        <div class="form-group col-md-4 mb-2">
                            <label for="lname" class="form-label mb-0">Last Name</label>
                            <input type="text" class="form-control form-control-sm mb-0" name="lname" id="lname" placeholder="Last Name" required>
                        </div>
                        <div class="form-group col-md-2 mb-2">
                            <label for="nameex" class="form-label mb-0">Name Ext.</label>
                            <select name="nameex" id="nameex" class="form-control form-control-sm mb-0">
                                <option></option>
                                <option>Jr.</option>
                                <option>Sr.</option>
                                <option>I</option>
                                <option>II</option>
                                <option>III</option>
                            </select>
                        </div>
                    </div>    
                    <div class="row">
                        <div class="form-group col-md-6 mb-2">
                            <label for="uname" class="form-label mb-0">Username</label>
                            <input type="text" class="form-control form-control-sm mb-0" name="uname" id="uname" placeholder="Username" required>
                        </div>
                        <div class="form-group col-md-6 mb-2">
                            <label for="email" class="form-label mb-0">Email</label>
                            <input type="email" class="form-control form-control-sm mb-0" name="email" id="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6 mb-2">
                            <label for="password" class="form-label mb-0">Password</label>
                            <input name="password" placeholder="Password" id="password" type="password" class="form-control-sm form-control">
                        </div>
                        <div class="form-group col-md-6 mb-2">
                            <label for="confirm_password" class="form-label mb-0">Confirm Password</label>
                            <input name="confirm_password" placeholder="Repeat Password" id="confirm_password" type="password" class="form-control-sm form-control">
                        </div>  
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-3 mb-2">
                            <label class="form-label">Address</label>
                            <select name="region" class="form-control form-control-sm" id="region"></select>
                            <input type="hidden" class="form-control form-control-sm" name="region_text" id="region-text" required>
                        </div>
                        <div class="form-group col-sm-3 mb-2 province">
                            <label class="form-label">Province</label>
                            <select name="province" class="form-control form-control-sm" id="province"></select>
                            <input type="hidden" class="form-control form-control-sm" name="province_text" id="province-text" required>
                        </div>
                        <div class="form-group col-sm-3 mb-2">
                            <label class="form-label">City / Municipality</label>
                            <select name="city" class="form-control form-control-sm" id="city"></select>
                            <input type="hidden" class="form-control form-control-sm" name="city_text" id="city-text" required>
                        </div>
                        <div class="form-group col-sm-3 mb-2">
                            <label class="form-label">Barangay</label>
                            <select name="barangay" class="form-control form-control-sm" id="barangay"></select>
                            <input type="hidden" class="form-control form-control-sm" name="barangay_text" id="barangay-text" required>
                        </div>
                    </div>  
                    <div class="row">
                        <div class="form-group col-md-6 mb-2">
                            <label for="contact" class="form-label mb-0">Contact No.</label>
                            <input type="text" class="form-control form-control-sm mb-0" name="contact" id="contact" placeholder="Contact No." required>
                        </div> 
                        <div class="form-group col-md-3 mb-2">
                            <label for="gender" class="form-label mb-0">Gender</label>
                            <select name="gender" id="gender" class="form-control form-control-sm mb-0">
                                <option value="N/A">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3 mb-3">
                            <label for="bdate" class="form-label mb-0">Birthdate</label>
                            <input type="date" class="form-control form-control-sm mb-0" name="bdate" id="bdate">
                        </div> 
                    </div>         
                    <div class="form-group mb-3">
                        <input type="submit" id="submit" disabled class="btn btn-light btn-lg col-12" value="Sign Up">
                    </div>
                </form>
                <div class="signup-container text-center">
                    <span>Already have an account? <a href="<?= site_url('user/login'); ?>"> Sign in </a></span>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>

</html>