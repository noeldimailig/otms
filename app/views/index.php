<?php
if(isset($_SESSION['username'])){
    echo '<h4 class="mt-3 px-1">ID: ' . $_SESSION['user_id'] . '</h4><br>' . 
        '<h4 class="mt-2 px-1">EMAIL: ' . $_SESSION['user_email'] . '</h4><br>';
}else{
    header('Location: http://localhost/otms/user/login');
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
    <?= load_css(array('assets/css/style')); ?>
</head>
<body>
    <br><hr>
    <a href="<?= site_url('user/logout'); ?>" class="btn btn-dark btn-lg">LOGOUT</a>
</body>
</html>