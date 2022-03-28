<?php
include('config.php');

if(!isset($_SESSION['main_id'])){
    if(isset($_GET["code"])) {
        $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

        if(!isset($token['error'])){
            $google_client->setAccessToken($token['access_token']);
            $_SESSION['access_token']=$token['access_token'];

            $google_service = new Google_Service_Oauth2($google_client);
            $data = $google_service->userinfo->get();
            $_SESSION['user_email'] = $data['email'];
            $_SESSION['user_fname'] = $data['given_name'];
            $_SESSION['user_lname'] = $data['family_name'];
            $_SESSION['user_profile'] = $data['picture'];
            $_SESSION['user_gender'] = $data['gender'];
            $_SESSION['user_status'] = $data['verifiedEmail'];
            $_SESSION['user_gid'] = $data['id'];
            $_SESSION['data'] = $data;
        } else {
            redirect('user/login');
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allow Access</title>
    <?php include('header.php'); ?>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-success p-4">
        <div class="container-fluid d-flex align-items-center justify-content-center">
            <a href="<?= site_url('user/index'); ?>" class="navbar-brand fs-3 text-white">Thesis Management System</a>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row p-5 my-4">
            <div class="col-md-3"></div>
            <div class="col-md-6 d-flex flex-column align-items-center justify-content-center p-5 bg-light border border-light rounded-3">
                <h2 class="mb-5">Allow Access</h2>
                <div class="border border-5 border-success rounded-circle">
                    <img class="rounded-circle p-1" style="width: 100px; height: 100px;" src="<?= $_SESSION['user_profile']; ?>" alt="User profile">
                </div>
                <p class="fs-5 mt-5 text-center mb-5">By clicking Proceed you agree to the terms and conditions applicable to our service and acknowledge that your personal data will be used in accordance with our privacy policy.</p>
                <a class="btn btn-lg btn-success" href="<?= site_url('user/google'); ?>">Proceed</a>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>