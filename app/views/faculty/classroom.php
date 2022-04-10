<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>

<!DOCTYPE html> 

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?= $data['class']['room']; ?></title> 
        <?php include('default/header.php'); ?>
        <style>body {background-color: #EAECF4;}</style>
    </head> 
  
    <body>
        <?php include('default/topbar.php'); ?>
        <main>
            <div class="container" id="main">
                <?php //var_dump($data['student']); ?>
                <div class="row">
                    <div class="bg-secondary border border-dark rounded-top d-flex flex-column align-items-center justify-content-center mt-4">
                        <img style="width: auto; height: 10rem;" src="<?php echo BASE_URL . PUBLIC_DIR.'/assets/img/no-class.svg';?>" alt="">
                    </div>
                        <div class="col-lg-3 col-md-4">
                            <div>
                                <div class="bg-white mt-3 rounded">
                                    <li class="list-group-item list-group-item-action mb-2">
                                        <div class="d-flex flex-column justify-content-center align-items-start">
                                            <p class="fs-5 m-0">Instructor</p>
                                            <div class="d-flex flex-row justify-content-between align-items-center">
                                                <img class="border border-3 border-success rounded-circle" style="width: 50px; height: 50px;" src="<?= check_dp($data['faculty']['profile']); ?>" alt="">
                                                <p class="px-2 m-0"><?= $data['faculty']['lname'] .' '. $data['faculty']['fname']; ?></p>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                                <div class="list-group" id="student-list">
                                    <li class="list-group-item list-group-item-action">
                                        <div class="d-flex flex-column justify-content-center">
                                            <p class="fs-5 m-0">Students</p>
                                            <?php foreach($data['accepted'] as $student) : ?>
                                                <div class="d-flex flex-row justify-content-start align-items-center mb-2">
                                                    <img class="border border-3 border-success rounded-circle" style="width: 35px; height: 35px;" src="<?= check_dp($student['profile']); ?>" alt="">
                                                    <p class="px-2 m-0"><?= $student['lname'] .' '. $student['fname']; ?></p>
                                                </div>
                                            <?php endforeach; ?>
                                            <?php if($data['accepted'] != null) : ?>
                                                <a href="<?= site_url('classes/students/'. encrypt_id($data['class']['faculty_id']) . '/' . $data['class']['class_code']); ?>" class="text-end">View All</a>
                                            <?php endif; ?>
                                        </div>
                                    </li>
                                </div>
                            </div>
                            

                            <div class="rounded mt-4">
                                <!-- <div class="d-flex justify-content-between p-3 py-2 pb-0 mb-2 rounded-top border-bottom border-secondary bg-white">
                                    <p class="mt-2">Class Joining Requests</p>
                                    <i class="fa-solid fa-ellipsis-vertical mt-2"></i>
                                </div> -->
                                <div class="list-group">
                                    <a class="list-group-item list-group-item-action">
                                        <div id="join-requests" class="d-flex flex-column justify-content-center align-items-start">
                                            <div class="d-flex w-100 flex-row justify-content-between align-items-center py-2 <?php if($data['joining'] != null) : ?> echo border-bottom mb-3 <?php endif; ?>">
                                                <p class="fs-6 m-0">Class Joining Requests</p>
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </div>
                                            <div id="accept-status"></div>
                                            <?php foreach($data['joining'] as $student) : ?>
                                                <div id="student<?= encrypt_id($student['student_id']); ?>" class="d-flex justify-content-between align-items-center w-100 mb-3 join-request">
                                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                                        <img class="border border-1 border-success rounded-circle" style="width: 30px; height: 30px;" src="<?= check_dp($student['profile']); ?>" alt="Student profile">
                                                        <p class="px-2 m-0"><?= $student['lname'] .' '. $student['fname']; ?></p>
                                                    </div>
                                                    <div class="d-flex flex-row w-25 justify-content-between align-items-center">
                                                        <button type="submit" name="deny" title="Deny Student" class="deny btn btn-secondary btn-sm">&#x2716;</button>
                                                        <form id="accept-student" action="<?= site_url('classes/accept_student'); ?>">
                                                            <input type="hidden" name="course_id" id="course_id" value="<?= encrypt_id($data['class']['course_id']); ?>">
                                                            <input type="hidden" name="stud_id" id="stud_id" value="<?= encrypt_id($student['student_id']); ?>">
                                                            <input type="submit" name="accept" id="accept" title="Accept Student" value="&#x2714;" class="btn btn-success btn-sm">
                                                        </form>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-8 mt-3">
                        <div class="bg-white border border-light p-3 mt-3">
                            <div class="d-flex justify-content-between p-3 py-2 pb-0 mb-2 border-bottom border-secondary bg-white">
                                <p>Announcements</p>
                                <div class="pt-1">
                                    <div class="btn-group pull-right" role="group" aria-label="Basic mixed styles example" style="">
                                        <i class="fas fa-bullhorn fs-1" data-bs-toggle="modal" data-bs-target="#ModalAnnouncement"></i>
                                        <i class="fas fa-calendar-plus fs-1" data-bs-toggle="modal" data-bs-target="#ModalProject" ></i>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Announcement -->
                                <div class="modal fade" id="ModalAnnouncement" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Announcement</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?php echo site_url('classes/create_ann'); ?>" method="post">
                                                    <div class="col-md-12 mb-2">
                                                        <input type="hidden" class="form-control" name="id" id="id" value="<?= encrypt_id($_SESSION['user_id']); ?>">
                                                        <label for="title" class="form-label">Title</label>
                                                        <input type="text" class="form-control form-control-sm" name="title" id="title" placeholder="" maxlength="255" size="255" data-toggle="tooltip" data-placement="right" title="Title" required>
                                                    </div>
                                                    <div class="col-md-12 mb-2">
                                                        <label for="content" class="form-label">Content</label>
                                                        <textarea name="content" id="" name="content" id="content" class="form-control form-control-sm" cols="30" rows="5"></textarea>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <input type="submit" class="btn btn-success" name="submit" id="submit">
                                                    </div>
                                                </form>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Project -->
                                <div class="modal fade" id="ModalProject" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Activity</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" method="post">
                                                    <div class="col-md-12 mb-2">
                                                        <label for="Title" class="form-label">Title</label>
                                                        <input type="text" class="form-control form-control-sm" name="Title" id="Title" placeholder="" maxlength="255" size="255" data-toggle="tooltip" data-placement="right" title="Title" required>
                                                    </div>
                                                    <div class="col-md-12 mb-2">
                                                        <label for="Description" class="form-label">Description*</label>
                                                        <textarea name="Description" id="" class="form-control form-control-sm" cols="30" rows="5"></textarea>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save</button>
                                                    </div>
                                                </form>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php foreach($data['announcement'] as $announce) : ?>
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex flex-row justify-content">
                                        <img class="border border-3 border-success rounded-circle" style="width: 50px; height: 50px;" src="<?= check_dp($data['faculty']['profile']); ?>" alt="">
                                    </div>
                                    <div class="" >
                                        <h4 class="mb-0"><?= $data['faculty']['fname'] .' '. $data['faculty']['lname']; ?></h4>
                                        <span class="text-mute mt-0"> <i class="fa fa-clock-o"></i><?= $announce['date_posted']; ?></span>
                                    </div>
                                    <br>
                                    <p><?= $announce['content']; ?></p>
                                    <i class="fa fa-comments ms-3"></i> <span>Comments</span> 500 
                                </a>
                            </div>
                            <?php endforeach ?>
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        <img class="border border-3 border-success rounded-circle" style="width: 50px; height: 50px;" src="<?= check_dp($data['faculty']['profile']); ?>" alt="">
                                    </div>
                                    <div class="" style="">
                                        <h4 class="mb-0">Noel Dimailig</h4>
                                        <span class="text-mute mt-0"> <i class="fa fa-clock-o"></i> 30 mins ago</span>
                                    </div>
                                    <br>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Faucibus purus in massa tempor nec feugiat nisl pretium fusce. A erat nam at lectus urna duis convallis. Amet mattis vulputate enim nulla aliquet. Quam pellentesque nec nam aliquam sem et. Congue quisque egestas diam in arcu cursus euismod. Elementum sagittis vitae et leo duis ut diam quam.</p>
                                    <i class="fa fa-comments ms-3"></i> <span>Comments</span> 500
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 bg-white mt-3 mb-5">
                            <div class="bg-white border border-light p-3">
                                <div class="d-flex justify-content-between p-3 py-2 pb-0 mb-2 border-bottom border-secondary bg-white">
                                    <p>Class Code</p>
                                        
                                </div>
                                <div class="list-group">
                                    <div class="d-flex w-100 justify-content-between align-items-center">
                                        <div class="px-4">
                                            <label id="Code" value="ksksskksksks" >ksksskksksks</label>
                                        </div>
                                        <a class="nav-link dropdown" href="#" role="button" data-bs-toggle="dropdown"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#" onclick="myFunction()">Copy</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>  
        </main>
        <!-- Modal -->
       <!-- <div class="modal fade" id="add-class-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="<?php //echo site_url('classes/create'); ?>" method="post" id="create-class">
                        <div class="modal-header">
                            <h5 class="modal-title" id="update">Create Class</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div id="message"></div>
                            <div class="form-group mb-1">
                                <label for="code">Course Code</label>
                                <input type="hidden" class="form-control" name="id" id="id" value="<?php// encrypt_id($_SESSION['user_id']); ?>">
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
        </div> -->
        <?php include('default/footer.php'); ?>
        <?= load_js(array('assets/faculty/classes')); ?>
        <script>
        function myFunction() {
            /* Get the text field */
            var copyText = document.getElementById("Code");

            /* Select the text field */
            copyText.select();
            copyText.setSelectionRange(0, 99999); /* For mobile devices */

            /* Copy the text inside the text field */
            navigator.clipboard.writeText(copyText.value);

            /* Alert the copied text */
            alert("Copied the text: " + copyText.value);
            }
        </script>
    </body> 
</html> 