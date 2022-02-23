<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>OTMS</title>

    <link rel="shortcut icon" href=<?= '"'. BASE_URL . PUBLIC_DIR . '/assets/images/lg.jpg"'; ?>>
    <link rel="stylesheet" type="text/css" href=<?= '"'. BASE_URL . PUBLIC_DIR . '/assets/css/bootstrap.min.css"'; ?>>
    <link rel="stylesheet" type="text/css" href=<?= '"'. BASE_URL . PUBLIC_DIR . '/assets/css/fontawsom-all.min.css"'; ?>>
    <link rel="stylesheet" type="text/css" href=<?= '"'. BASE_URL . PUBLIC_DIR . '/assets/css/style.css"'; ?>>
</head>

<body>
    <div class="container-fluid ">
        <div class="container ">
            <div class="row ">
                
                <div class="col-sm-10 login-box">
                    <div class="row">
                       <div class="col-lg-4 col-md-5 box-de">
                           <div class="small-logo">
                                <i class="fab fa-asymmetrik"></i> Style Login
                            </div>
                            <div class="ditk-inf sup-oi">
                                <h2 class="w-100">Already Have an Account </h2>
                                <p>Simply login to your account by clicking the login Button</p>
                                <a href="<?= site_url('conference/index'); ?>">
                                    <button type="button" class="btn btn-outline-light">SIGN IN</button>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7 log-det">
                            
                            <h2>Create Account</h2>
                            <div class="row">
                                <ul>
                                    <li><i class="fab fa-facebook-f"></i></li>
                                    <li><i class="fab fa-twitter"></i></li>
                                    <li><i class="fab fa-linkedin-in"></i></li>
                                </ul>
                            </div>
                            <div class="row">
                                <p class="small-info">or use your email account</p>
                            </div>


                            <div class="text-box-cont">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                        <i class="far fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Full Name" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                 <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="far fa-envelope"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Email Address" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                 <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                               
                                <div class="input-group center sup mb-3">
                                    <button class="btn btn-success btn-round">SIGN UP</button>
                                </div>    
                            </div>
                            


                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<?= load_js(array('assets/js/jquery-3.2.1.min')); ?>
<?= load_js(array('assets/js/popper.min')); ?>
<?= load_js(array('assets/js/bootstrap.min')); ?>
<?= load_js(array('assets/js/script')); ?>


</html>
