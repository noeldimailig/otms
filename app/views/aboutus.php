<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/favicon.ico?v=2">
    <title>About Us</title>
    <?php include('header.php'); ?>
</head>

<body>
    <?php include('navigator.php'); ?>
    
    <div class="about-section">
        <h1 class="mb-4 h1">The Project</h1>
        <p class="mb-3">The goal of this project is to innovate the learning environment on conducting research, </p>
        <p>to apply more attention to this field and to enhance the efficiency of traditional research or thesis practices.</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="row mt-5">
                <div class="col-lg-5">
                    <img src="<?= BASE_URL . PUBLIC_DIR . '/assets/img/info.png'; ?>" class="img-fluid">
                </div>
                <div class="col-md-12 col-lg-7">
                    <br><br><br><br>
                    <h2 class="mb-4">System Overview</h2>
                    <p class="mb-3">A website that manages thesis related courses and archives research papers. This system consists of the following portal;  </p>
                    <p class="mb-3"><strong>Admin Portal</strong>,the admin creates a faculty account, creates thesis related courses, and assigns courses to the instructor. </p>
                    <p class="mb-3"><strong>Teacher’s Portal</strong>, the teachers can assign projects or activities to the course. Viewing and accepting proposals and manuscripts will be easy to the system.
                            The teacher could also manipulate the defense proper and create conferences.</p>
                    <p class="mb-3"><strong>Student Portal</strong>, the students upload proposals, activities and also the approved manuscript. 
                        They can also view their manuscripts comments and recommendations.</p>
                    <p class="mb-3"><strong>Research Office Portal</strong>, all the students final research paper are store in an archive under the research office account. 
                        Statistics and records are available if the research office needs it or a studnet have any concern regarding their files.</p>
                </div>
            </div>
            <?php include('footer.php'); ?>
        </div>
    </div>
</body>

</html>