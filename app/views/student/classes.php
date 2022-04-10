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
                        <p class="fs-4">Classes</p>
                        <div id="add-class" class="d-flex justify-content-center align-items-center mb-2" data-bs-toggle="modal" data-bs-target="#join-class-modal">
                            <i class="fa-solid fa-add fs-4"></i>
                        </div>
                    </div>

                    <?php if($data == null) : ?>
                        <div class="d-flex flex-column align-items-center justify-content-center mt-5">
                            <img style="width: 25rem;" src="<?php echo BASE_URL . PUBLIC_DIR.'/assets/img/join-class.png';?>" alt="">
                            <div class="mt-5">
                                You do not have a class yet. Join your first class.
                            </div>
                        </div> 
                    <?php else :?>
                        <div class="row row-cols-1 row-cols-md-4 g-4 p-3">
                            <?php foreach($data as $class) : ?>
                                <?php $student_id = $class['student_id']; ?>
                                <div class="col">
                                    <div class="card" style="width: 18rem;">
                                        <img src="<?php echo BASE_URL . PUBLIC_DIR.'/assets/img/'.$class['photo']; ?>"  class="card-img-top" alt="Class Photo">
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="<?= site_url('student_classes/open/'. encrypt_id($class['student_id']) . '/' . $class['class_code']); ?>"><?= $class['room']; ?></a></h5>
                                            <p class="card-text"><?= $class['schedule']; ?></p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="card-text fs-6 mb-0 text-scondary">Classmates</p>
                                                <p class="card-text fs-6 mb-0 text-scondary"><?= $class['count']; ?></p>
                                            </div>
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
        <div class="modal fade" id="join-class-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="<?php echo site_url('student/join_class'); ?>" method="post" id="student-join-class">
                        <div class="modal-header">
                            <h5 class="modal-title" id="update">Join with a code</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div id="join-class-message"></div>
                            <div class="form-group mb-1">
                                <label for="code">Class Code</label>
                                <input type="hidden" class="form-control" name="stud_join_id" id="stud_join_id" value="<?= encrypt_id($student_id); ?>">
                                <input type="text" class="form-control" name="join_code" id="join_code" placeholder="Class Code">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success" name="join" id="join">Join</button>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
        <?php include('default/footer.php'); ?>
        <?= load_js(array('assets/faculty/classes')); ?>
       <!-- <script>
            $(document).ready( function () {
                $('#admins').DataTable();
                $('#users').DataTable();
                });
        </script> -->
    </body> 
</html> 