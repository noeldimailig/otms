<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1,user-scalable=no">
    <link rel="shortcut icon" href="/favicon.ico?v=2">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?= load_css(array('assets/css/style')); ?>
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar fixed-top">
            <div class="d-flex align-items-center justify-content-center container">
                <a aria-label="Edmodo Homepage" href="/">OTMS
                </a>
            </div>
        </nav>
        <div class="container">
            <div class="col-md-18">
                <div class="page-content">
                <h3 class="page-title mt-2"><span>Welcome back! Log into your OTMS account</span></h3>
                    <div class="form-body">
                        <div class="form-group login-options">
                            <div class="UserIdentifierOptions mt-3">
                                <div role="group" class="btn-group"><span>Username or Email</span></div>
                            </div>
                        </div>
                        <div style="color: red;">
                            <?= $this->session->flashdata('error'); ?>
                        </div>
                        <form action="<?= site_url('user/signin'); ?>" method="post" data-hs-cf-bound="true">
                            <div class="position-relative form-group">
                                <input name="email" placeholder="Email or Username" type="email" class="qa-test-login-username form-control-lg form-control" value="">
                            </div>
                            <div class="position-relative form-group">
                                <input name="password" placeholder="Password" id="password" type="password" class="qa-test-login-password form-control-lg form-control" value="">
                            </div>
                            <div class="forgot-password-container text-center">
                                <button type="button" class="qa-test-forgot-password-btn btn btn-link"><span>Forgot password?</span></button>
                            </div>
                            <div class="form-group">
                                <input type="submit" id="qa-test-lightbox-login" class="btn btn-primary btn-lg btn-block" value="Log In">
                            </div>
                        </form>
                        <div class="signup-container text-center">
                            <span class="qa-test-login-signup-link">Don't have an account? <a href="<?= site_url('user/signup'); ?>"> Sign up </a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>