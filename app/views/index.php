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
            $_SESSION['user_image'] = $data['picture'];
            $_SESSION['user_gender'] = $data['gender'];
            $_SESSION['user_status'] = $data['verifiedEmail'];
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
    <title>OTMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
    <?= load_css(array('assets/css/style')); ?>
</head>
<body>
    <br><hr>
    <a href="<?= site_url('user/logout'); ?>" class="btn btn-dark btn-lg">LOGOUT</a>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">Welcome User</div>
            <div class="panel-body">
                <!-- <img src="<?php //$_SESSION['user_image']?>" class="img-responsive img-circle img-thumbnail" /> -->
                <!-- <h3><b>Name :</b><?php //$_SESSION['user_fname']?> <?php //$_SESSION['user_lname']?></h3> -->
                <h3><b>UserID :</b> <?=$_SESSION['main_id']?> </h3>
                <h3><b>Email :</b> <?=$_SESSION['user_email']?> </h3>
                <!-- <h3><b>Status :</b> <?php //$_SESSION['user_status']?> </h3> -->
            </div>
        </div>
  </div>
</body>
</html>