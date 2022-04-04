<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>

<!DOCTYPE html> 

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Home</title> 
        <?php include('default/header.php'); ?>
    </head> 
  
    <body>
        <?php include('default/topbar.php'); ?>
        <main>
            <?php //var_dump($data); ?>
            <div class="px-5 mx-5" id="main">
                <div class="row mt-5">
                    <div class="col-lg-3 col-md-4 bg-white p-3">
                        <div class="card mb-5 bg-white border border-light">
                            <div class="card-body">
                                <div class="text-center">
                                    <img class="border border-5 border-success rounded-circle" style="width: 150px; height: 150px;" src="<?= check_dp($data['faculty']['profile']);?>" alt="">
                                    <h4 class="mt-3 mb-0"><?= $data['faculty']['fname']. ' ' .$data['faculty']['lname']; ?></h4>
                                    <p class="mb-0"><?php if($data['faculty']['position'] == "") echo "Instructor"; else echo $data['faculty']['position']; ?></p>
                                </div>
                                <div class="mt-3 border-1 border-bottom mb-4">
                                    <div class="d-flex flex-row align-items-between justify-content-between">
                                        <div class="d-flex flex-row align-items-center justify-content-center">
                                            <i class="fa-solid fa-chalkboard-user fs-4 mb-2"></i>
                                            <h6 class="text-center px-2">Total Class</h6>
                                        </div>
                                        <span class="fs-4"><?= $data['total_class']['total']; ?></span>
                                    </div>
                                </div>
                                <div class="mt-3 border-1 border-bottom mb-4">
                                    <div class="d-flex flex-row align-items-between justify-content-between">
                                        <div class="d-flex flex-row align-items-center justify-content-center">
                                            <i class="fa-solid fa-users fs-4 mb-2"></i> 
                                            <h6 class="text-center px-2">Total Student</h6>
                                        </div>
                                        <span class="fs-4"><?= $data['total_students']['total']; ?></span>
                                    </div>
                                </div>
                                <div class="text-center"><a href="my-profile.html" title="">My Profile</a></div>
                            </div>
                        </div>

                        <!-- <div class="list-group">
                            <div id="message"></div>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        <img class="border border-1 border-success rounded-circle" style="width: 30px; height: 30px;" src="<?php echo BASE_URL . PUBLIC_DIR.'/assets/img/Noel.png';?>" alt="">
                                        <p class="px-2 m-0">Noel Dimailig</p>
                                    </div>
                                    <div class="d-flex flex-row w-25 justify-content-between align-items-center">
                                        <input type="submit" value="&#x2716;" class="btn btn-secondary btn-sm">
                                        <input type="submit" value="&#x2714;" class="btn btn-success btn-sm">
                                    </div>
                                </div>
                            </a>
                        </div> -->
                    </div>
                    <div class="col-lg-6 col-md-8 p-3"></div>
                    <div class="col-lg-3 col-md-4 bg-white">
                        <div class="bg-white border border-light p-3">
                            <div class="d-flex justify-content-between p-3 py-2 pb-0 mb-2 border-bottom border-secondary bg-white">
                                <p>Schedule</p>
                                <i class="fa-solid fa-ellipsis-vertical"></i>
                            </div>
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between align-items-center">
                                        <div class="bg-info rounded-circle"><i class="fa-solid fa-file fs-5 p-3 text-white"></i></div>
                                        <div class="px-4">
                                            <small class="text-secondary">3 days ago</small>
                                            <p class="mb-1 fs-6">Some placeholder content in a paragraph.</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between align-items-center">
                                        <div class="bg-info rounded-circle"><i class="fa-solid fa-file fs-5 p-3 text-white"></i></div>
                                        <div class="px-4">
                                            <small class="text-secondary">3 days ago</small>
                                            <p class="mb-1 fs-6">Some placeholder content in a paragraph.</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between align-items-center">
                                        <div class="bg-info rounded-circle"><i class="fa-solid fa-file fs-5 p-3 text-white"></i></div>
                                        <div class="px-4">
                                            <small class="text-secondary">3 days ago</small>
                                            <p class="mb-1 fs-6">Some placeholder content in a paragraph.</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between align-items-center">
                                        <div class="bg-info rounded-circle"><i class="fa-solid fa-file fs-5 p-3 text-white"></i></div>
                                        <div class="px-4">
                                            <small class="text-secondary">3 days ago</small>
                                            <p class="mb-1 fs-6">Some placeholder content in a paragraph.</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between align-items-center">
                                        <div class="bg-info rounded-circle"><i class="fa-solid fa-file fs-5 p-3 text-white"></i></div>
                                        <div class="px-4">
                                            <small class="text-secondary">3 days ago</small>
                                            <p class="mb-1 fs-6">Some placeholder content in a paragraph.</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="bg-white border border-light p-3 mt-5">
                            <div class="d-flex justify-content-between p-3 py-2 pb-0 mb-2 border-bottom border-secondary bg-white">
                                <p>Notifications</p>
                                <i class="fa-solid fa-ellipsis-vertical"></i>
                            </div>
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between align-items-center">
                                        <div class="bg-info rounded-circle"><i class="fa-solid fa-file fs-5 p-3 text-white"></i></div>
                                        <div class="px-4">
                                            <small class="text-secondary">3 days ago</small>
                                            <p class="mb-1 fs-6">Some placeholder content in a paragraph.</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between align-items-center">
                                        <div class="bg-info rounded-circle"><i class="fa-solid fa-file fs-5 p-3 text-white"></i></div>
                                        <div class="px-4">
                                            <small class="text-secondary">3 days ago</small>
                                            <p class="mb-1 fs-6">Some placeholder content in a paragraph.</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between align-items-center">
                                        <div class="bg-info rounded-circle"><i class="fa-solid fa-file fs-5 p-3 text-white"></i></div>
                                        <div class="px-4">
                                            <small class="text-secondary">3 days ago</small>
                                            <p class="mb-1 fs-6">Some placeholder content in a paragraph.</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between align-items-center">
                                        <div class="bg-info rounded-circle"><i class="fa-solid fa-file fs-5 p-3 text-white"></i></div>
                                        <div class="px-4">
                                            <small class="text-secondary">3 days ago</small>
                                            <p class="mb-1 fs-6">Some placeholder content in a paragraph.</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between align-items-center">
                                        <div class="bg-info rounded-circle"><i class="fa-solid fa-file fs-5 p-3 text-white"></i></div>
                                        <div class="px-4">
                                            <small class="text-secondary">3 days ago</small>
                                            <p class="mb-1 fs-6">Some placeholder content in a paragraph.</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>  
        </main>
        <?php include('default/footer.php'); ?>
    </body> 
</html> 