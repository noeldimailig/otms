<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>

<!DOCTYPE html> 

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>My Profile</title> 
        <?php include('default/header.php'); ?>
    </head> 
  
    <body>
        <?php include('default/topbar.php'); ?>
        <main>
            <div class="container" id="main">
                <div class="row mt-5">
                    <div class="col-lg-12 d-flex align-items-start justify-content-between border border-light rounded p-0">
                        <div class="col-lg-3 col-md-2 col-sm-12 p-3 bg-light rounded-start">
                            <div class="text-center mb-3">
                                <img class="border border-4 border-success rounded-circle" style="width: 100px; height: 100px;" src="<?= check_dp($data['profile']);?>" alt="">
                            </div>
                            <div class="d-flex flex-column align-items-start justify-content-center">
                                <p>Personal Details</p>
                                <p class="fs-6 text-secondary"><span class="mx-2 text-success"><i class="fas fa-user"></i></span><?= $data['fname'].' '.$data['mname'].' '.$data['lname'].' '.$data['name_ex'];; ?></p>
                                <p class="fs-6 text-secondary"><span class="mx-2 text-success"><i class="fas fa-mars-and-venus"></i></span><?php if($data['gender'] != "") echo $data['gender']; else echo "Not Defined"; ?></p>
                                <p class="fs-6 text-secondary"><span class="mx-2 text-success"><i class="fa-solid fa-cake-candles"></i></span><?php if($data['bdate'] != "") echo date('F d, Y', strtotime($data['bdate'])); else echo "Not Defined"; ?></p>
                                <p class="fs-6 text-secondary"><span class="mx-2 text-success"><i class="fa-solid fa-phone"></i></span><?php if($data['contact'] != "") echo $data['contact']; else echo "Not Defined"; ?></p>
                                <p class="fs-6 text-secondary">
                                    <span class="mx-2 text-success"><i class="fas fa-location-dot"></i></span>
                                    <?= $data['address'][0].', '.$data['address'][1].', '.$data['address'][2].', '.$data['address'][3]; ?>
                                </p>
                            </div>
                            <div class="d-flex flex-column align-items-start justify-content-center">
                                <p>Account Details</p>
                                <p class="fs-6 text-secondary"><span class="mx-2 text-success"><i class="fas fa-user"></i></span><?php if($data['username'] != "") echo $data['username']; else echo "Not Defined"; ?></p>
                                <p class="fs-6 text-secondary"><span class="mx-2 text-success"><i class="fas fa-mars-and-venus"></i></span><?= $data['designation']; ?></p>
                                <p class="fs-6 text-secondary"><span class="mx-2 text-success"><i class="fas fa-user-graduate"></i></span><?= $data['position']; ?></p>
                                <p class="fs-6 text-secondary"><span class="mx-2 text-success"><i class="fas fa-envelope"></i></span><?= $data['email']; ?></p>
                            </div>
                        </div>
                        <div class="col-lg-9 d-flex flex-column align-items-start justify-content-center p-3">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                                    type="button" role="tab" aria-controls="nav-profile" aria-selected="true">Personal Details</button>
                                    <button class="nav-link" id="nav-account-tab" data-bs-toggle="tab" data-bs-target="#nav-account"
                                    type="button" role="tab" aria-controls="nav-account" aria-selected="false">Account details</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active p-3 border" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <?php //echo $this->session->userdata('lname'); //var_dump($data); ?>
                                    <form action="<?php echo site_url('user/update_personal_details'); ?>" class="needs-validation" method="post" id="p-details">
                                        <p class="fs-2 mx-3 mb-0">Edit Details</p>
                                        <div id="p-message"></div>
                                        <div class="d-flex align-items-start justify-content-between">
                                            <div class="col-lg-4 d-flex flex-column align-items-center justify-content-center p-3">
                                                <div class="form-group col-12 mb-2">
                                                    <label for="fname" class="form-label mb-0">First Name</label>
                                                    <input type="hidden" name="p-details-email" class="form-control" id="p-details-email" value="<?= $data['email']; ?>">
                                                    <input type="text" class="form-control form-control-lg mb-0" name="fname" id="fname" value="<?= $data['fname']; ?>" placeholder="First Name" required>
                                                </div>
                                                <div class="form-group col-12 mb-2">
                                                    <label for="mname" class="form-label mb-0">Middle Name</label>
                                                    <input type="text" class="form-control form-control-lg mb-0" name="mname" id="mname" value="<?= $data['mname']; ?>" placeholder="Middle Name">
                                                </div>
                                                <div class="form-group col-12 mb-2">
                                                    <label for="lname" class="form-label mb-0">Last Name</label>
                                                    <input type="text" class="form-control form-control-lg mb-0" name="lname" id="lname" value="<?= $data['lname']; ?>" placeholder="Last Name" required>
                                                </div>
                                                <div class="form-group col-12 mb-2">
                                                    <label for="nameex" class="form-label mb-0">Name Ext.</label>
                                                    <select name="nameex" id="nameex" class="form-select form-select-lg mb-0">
                                                        <?php 
                                                            $name_ex = $data['name_ex'];
                                                            $value = 'value="'.$name_ex.'" selected>'.$name_ex.'</option>'; 
                                                        ?>
                                                        <option value="">Select Name Extension</option>
                                                        <option <?php if($name_ex == "Jr.") echo $value; else echo 'value="Jr.">Jr.'; ?> </option>
                                                        <option <?php if($name_ex == "Sr.") echo $value; else echo 'value="Sr.">Sr.'; ?> </option>
                                                        <option <?php if($name_ex == "II") echo $value; else echo 'value="II">II'; ?> </option>
                                                        <option <?php if($name_ex == "III") echo $value; else echo 'value="III">III'; ?> </option>
                                                        <option <?php if($name_ex == "IV") echo $value; else echo 'value="IV">IV'; ?> </option>
                                                        <option <?php if($name_ex == "V") echo $value; else echo 'value="V">V'; ?> </option>
                                                    </select>
                                                </div>
                                            </div> 
                                            <div class="col-lg-4 d-flex flex-column align-items-center justify-content-center mb-2 p-3">
                                                <div class="form-group col-12 mb-2">
                                                    <label class="form-label m-0">Address</label>
                                                    <select name="region" class="form-control form-control-lg" id="region" required>
                                                    </select>
                                                    <input type="hidden" class="form-control form-control-sm" name="region_text" id="region-text" value="<?= $data['address'][0]; ?>">
                                                </div>
                                                <div class="form-group col-12 mb-2 province">
                                                    <label class="form-label m-0">Province</label>
                                                    <select name="province" class="form-control form-control-lg" id="province" required>
                                                        <option value="<?= $data['address'][1]; ?>"><?= $data['address'][1]; ?></option>
                                                    </select>
                                                    <input type="hidden" class="form-control form-control-sm" name="province_text" id="province-text" value="<?= $data['address'][1]; ?>">
                                                </div>
                                                <div class="form-group col-12 mb-2">
                                                    <label class="form-label m-0">City / Municipality</label>
                                                    <select name="city" class="form-control form-control-lg" id="city" required>
                                                        <option value="<?= $data['address'][2]; ?>"><?= $data['address'][2]; ?></option>
                                                    </select>
                                                    <input type="hidden" class="form-control form-control-sm" name="city_text" id="city-text" value="<?= $data['address'][2]; ?>">
                                                </div>
                                                <div class="form-group col-12 mb-2">
                                                    <label class="form-label m-0">Barangay</label>
                                                    <select name="barangay" class="form-control form-control-lg" id="barangay" required>
                                                        <option value="<?= $data['address'][3]; ?>"><?= $data['address'][3]; ?></option>
                                                    </select>
                                                    <input type="hidden" class="form-control form-control-sm" name="barangay_text" id="barangay-text" value="<?= $data['address'][3]; ?>">
                                                </div>
                                            </div>  
                                            <div class="col-lg-4 d-flex flex-column align-items-end justify-content-center mb-2 p-3">
                                                <div class="col-12 mb-2">
                                                    <label for="contact" class="form-label mb-0">Contact No.</label>
                                                    <input type="text" class="form-control form-control-lg mb-0" name="contact" id="contact" value="<?= $data['contact']; ?>" placeholder="Contact No." required>
                                                </div> 
                                                <div class="col-12 mb-2">
                                                    <label for="gender" class="form-label mb-0">Gender</label>
                                                    <select name="gender" id="gender" class="form-select form-select-lg mb-0" required>
                                                        <option value="N/A">Select Gender</option>
                                                        <option value="<?= $data['gender']; ?>" selected><?= $data['gender']; ?></option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 mb-2">
                                                    <label for="bdate" class="form-label mb-0">Birthdate</label>
                                                    <input type="date" class="form-control form-control-lg mb-0" name="bdate" id="bdate" value="<?= $data['bdate']; ?>" required>
                                                </div> 
                                                <div class="col-12 d-flex align-items-end justify-content-end mb-2 w-100">
                                                    <a href="<?= site_url('faculty/index'); ?>" class="btn btn-secondary btn-lg mx-1" role="button">Cancel</a>
                                                    <input class="btn btn-success btn-lg" type="submit" name="p-details-submit" id="p-details-submit" value="Save Changes"> 
                                                </div>
                                            </div>      
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade p-3 border" id="nav-account" role="tabpanel" aria-labelledby="nav-account-tab">
                                    <form class="needs-validation" action="<?php echo site_url('user/update_account_details'); ?>" class="px-3" style="width:922px;height:auto;" method="post" id="a-details">
                                        <p class="fs-2 mb-0">Edit Details</p>
                                        <div id="a-message" class="mb-1"></div>
                                        <div class="col-12 d-flex flex-column align-items-center justify-content-center">
                                            <input type="hidden" name="a-email" class="form-control" id="a-email" value="<?php echo $data['email']; ?>">
                                            <div class="col-lg-6 form-group mb-2">
                                                <label class="form-label mb-0" for="uname">Username</label>
                                                <input type="text" name="uname" class="form-control form-control-lg" id="uname" value="<?= $data['username']; ?>" placeholder="Username" required>
                                            </div>
                                            <div class="col-lg-6 form-group mb-2">
                                                <label class="form-label mb-0" for="password">Password</label>
                                                <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Password">
                                            </div>
                                            <div class="col-lg-6 form-group mb-2">
                                                <label class="form-label mb-0" for="confirm_password">Confirm Password</label>
                                                <input type="password" name="confirm_password" class="form-control form-control-lg" id="confirm_password" placeholder="Confirm Password">
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <label class="form-label mb-0" for="designation" class="form-label mb-0">Designation</label>
                                                <select name="designation" id="designation" class="form-select form-select-lg mb-0" required>
                                                    <?php 
                                                        $salutation = $data['designation'];
                                                        $value = 'value="'.$salutation.'" selected>'.$salutation.'</option>'; 
                                                        $mam = "Ma'am";
                                                    ?>
                                                    <option value="">Select Salutation</option>
                                                    <option <?php if($salutation == "Sir") echo $value; else echo 'value="Sir">Sir'; ?> </option>
                                                    <option <?php if($salutation == "Ma'am") echo $value; else echo 'value="'.$mam.'">'.$mam; ?> </option>
                                                    <option <?php if($salutation == "Dr.") echo $value; else echo 'value="Dr.">Dr.'; ?> </option>
                                                    <option <?php if($salutation == "Mr.") echo $value; else echo 'value="Mr.">Mr.'; ?> </option>
                                                    <option <?php if($salutation == "Ms.") echo $value; else echo 'value="Ms.">Ms.'; ?> </option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <label class="form-label mb-0" for="position" class="form-label mb-0">Position</label>
                                                <select name="position" id="position" class="form-select form-select-lg mb-0" required>
                                                    <option value="" disabled>Select Position</option>
                                                    <?php 
                                                        $position = $data['position'];
                                                        $value = 'value="'.$position.'" selected>'.$position.'</option>'; 
                                                    ?>
                                                    <option <?php if($position == "Instructor I") echo $value; else echo 'value="Instructor I">Instructor I'; ?> </option>
                                                    <option <?php if($position == "Instructor II") echo $value; else echo 'value="Instructor II">Instructor II'; ?> </option>
                                                    <option <?php if($position == "Instructor III") echo $value; else echo 'value="Instructor III">Instructor III'; ?> </option>
                                                    <option <?php if($position == "Professor") echo $value; else echo 'value="Professor">Professor'; ?> </option>
                                                    <option <?php if($position == "Assistant Professor") echo $value; else echo 'value="Assistant Professor">Assistant Professor'; ?> </option>
                                                </select>
                                            </div>
                                            <div class="col-12 d-flex align-items-end justify-content-center mb-2 w-100">
                                                <a href="<?= site_url('faculty/index'); ?>" class="btn btn-secondary btn-lg mx-1" role="button">Cancel</a>
                                                <input class="btn btn-success btn-lg mt-1" type="submit" name="a-details-submit" id="a-details-submit" value="Save Changes">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>  
        </main>
        <?php include('default/footer.php'); ?>
        <?= load_js(array('assets/faculty/classes')); ?>
        <script>
            $(document).ready(()=>{
                $('#region').append($('<option></option>').attr('value', "<?= $data['address'][0]; ?>").text('<?= $data['address'][0]; ?>'));
                $('#region').prop('selectedIndex', 1);
            });
        </script>
    </body> 
</html> 