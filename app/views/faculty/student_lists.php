<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>

<!DOCTYPE html> 

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Classes</title> 
        <?php include('default/header.php'); ?>
    </head> 
  
    <body>
        <?php include('default/topbar.php'); ?>
        <main>
            <div class="container" id="main">
                <div class="row mt-5">
                    <div class="bg-white border-bottom border-secondary d-flex justify-content-between align-items-center p-3 pb-0">
                        <p class="fs-4">Students</p>
                        <div id="add-class" class="d-flex justify-content-center align-items-center mb-2" data-bs-toggle="modal" data-bs-target="#add-class-modal">
                            <i class="fa-solid fa-add fs-4"></i>
                        </div>
                    </div>
                    <?php if($data == null) : ?>
                        <div class="d-flex flex-column align-items-center justify-content-center mt-5">
                            <img style="width: 25rem;" src="<?php echo BASE_URL . PUBLIC_DIR.'/assets/img/no-class.svg';?>" alt="">
                            <div class="mt-5">
                                You do not have a class yet. Create your first class, add students, and start sharing thoughts.
                            </div>
                        </div>
                    <?php else :?>
                        <div class="row row-cols-1 row-cols-md-4 g-4 p-3">
                            <?php foreach($data['accepted'] as $student) : ?>
                                <div class="col">
                                    <div class="card" style="width: 18rem;">
                                        <div class="d-flex flex-column justify-content-center align-items-center p-3">
                                            <img class="border border-3 border-success rounded-circle" style="width: 50px; height: 50px;" src="<?= check_dp($student['profile']); ?>" alt="Profile Picture">
                                            <a href=""><p class="fs-5 m-0 mt-2"><?= $student['lname'] .' '. $student['fname']; ?></p></a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>   
            </div>  
        </main>
        <!-- Modal -->
        <div class="modal fade" id="add-class-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="<?php echo site_url('classes/create'); ?>" method="post" id="create-class">
                        <div class="modal-header">
                            <h5 class="modal-title" id="update">Create Class</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div id="message"></div>
                            <div class="form-group mb-1">
                                <label for="code">Course Code</label>
                                <input type="hidden" class="form-control" name="id" id="id" value="<?= encrypt_id($_SESSION['user_id']); ?>">
                                <input type="text" class="form-control" name="code" id="code" placeholder="Course Code">
                            </div>
                            <div class="form-group mb-1">
                                <label for="description">Description</label>
                                <input type="text" class="form-control" id="description" name="description" placeholder="Course Description">
                            </div>
                            <div class="form-group mb-1">
                                <label for="units">Units</label>
                                <input type="text" class="form-control" name="units" id="units" placeholder="No. of Units">
                            </div>
                            <div class="form-group mb-1">
                                <label for="name">Class Name</label>
                                <input type="name" class="form-control" name="name" id="name" placeholder="Class Name">
                            </div>
                            <div class="form-group mb-1">
                                <label for="section">Section</label>
                                <input type="text" class="form-control" name="section" id="section" placeholder="Section">
                            </div>   
                            <div class="row mb-2">
                                <div class="form-group col-md-4">
                                    <label for="day">Select Day</label>
                                    <select name="day" id="day" class="form-control col-md-6">
                                        <option value="Monday">Monday</option>
                                        <option value="Tuesday">Tuesday</option>
                                        <option value="Wednesday">Wednesday</option>
                                        <option value="Thursday">Thursday</option>
                                        <option value="Friday">Friday</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="start">Start</label>
                                    <input type="time" class="form-control" name="start" id="start">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="end">End</label>
                                    <input type="time" class="form-control" name="end" id="end">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="provider">Payment Provider</label>
                                    <select name="provider" id="provider" class="form-control col-md-6">
                                        <option value="">Provider</option>
                                        <option value="Paymaya">Paymaya</option>
                                        <option value="GCash">GCash</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="account">Account No.</label>
                                    <input type="text" class="form-control" id="account" name="account" placeholder="Account No.">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-success" name="submit" id="submit">
                        </div> 
                    </form>
                </div>
            </div>
        </div>
        <?php include('default/footer.php'); ?>
        <?= load_js(array('assets/faculty/classes')); ?>
    </body> 
</html> 