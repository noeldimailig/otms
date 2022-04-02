<!DOCTYPE html>

<html lang="en" class="h-100">

<?php require_once(APP_DIR."views/Default/head.php"); ?>

<body class="d-flex flex-column h-100">


    <!-- topbar -->
    <?php require_once(APP_DIR."views/Default/topbar.php"); ?>
    <!-- end topbar -->

    <!-- Container - Fluid -->
    <div class="container-fluid pt-5">
        <!-- Row -->
        <div class="row">


            <!-- sidebar -->
            <?php require_once(APP_DIR."views/Default/sidebar_faculty.php"); ?>
            <!-- end side bar -->


            <!-- Main -->
            <!-- <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 bg-white maincontent"> -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 maincontent">

                <!-- BreadCrumb -->
                <nav aria-label="breadcrumb" class="pt-3 mb-2 bg-white border-bottom mx-2">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="" class="breadcrumb-link"><i class="fa fa-dashboard"></i>
                                Dashboard</a></li>
                        <li class="breadcrumb-item">  </li>
                    </ul>
                </nav>
                <!-- End BreadCrumb -->

                <!-- title -->
                <div class="justify-content-between align-items-center pt-1 pb-2 mb-3 border-bottom mx-2">
                    <h5 class="h5 mt-3 mb-0 color-darkgray"> Courses List <small>/</small></h5>
                </div>
                <!-- end title -->
                <div class="card">
                                
                                <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseTable"
                                    aria-expanded="true" aria-controls="collapseTable">
                                    <span class="card-icon"><i class="fa fa-map"></i></span> Courses<i
                                        class="fa fa-caret-down pull-right"></i>
                                </div>
                                <div class="card-body accordion-collapse collapse show p-0" id="collapseTable-disable">
                                
                                    <!-- Table Div -->
                                    <div class="table-responsive">

                                        <!-- Table -->
                                        <table class="table table-bordered table-hover table-sm mb-0">
                                        

                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Full Name</th>
                                                    <th>ID No.</th>
                                                    <th>Program</th>
                                                    <th>Course Code</th>
                                                    <th>Course Description</th>
                                                    <th>Units</th>
                                                    <th>Room</th>
                                                    <th>Section</th>
                                                    <th>Schedule</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>

                                            <tbody>

                                                
                                                
                                                <tr class="">
                                                    <?php 
                                                        $counter = 1;
                                                        foreach($all_courses as $course) {
                                                    ?>
                                                    <td><?php echo $counter++; ?></td>
                                                    <td><?php echo $course['fname'] .' '. $course['mname'] .' '. $course['lname'] ?>  </td>
                                                    <td><?php echo $course['id_number']; ?></td>
                                                    <td><?php echo $course['prog_desc']; ?></td>
                                                    <td><?php echo $course['course_code']; ?></td>
                                                    <td><?php echo $course['course_desc']; ?></td>
                                                    <td><?php echo $course['units']; ?></td>
                                                    <td><?php echo $course['room']; ?></td>
                                                    <td><?php echo $course['section']; ?></td>
                                                    <td><?php echo $course['schedule']; ?></td>
                                                    <td><?php echo $course['status']; ?></td>
                                                    <td>
                                                        <a href="#"><button
                                                                class="btn btn-mini btn-info">Edit</button>
                                                        </a>
                                                        
                                                    </td>
                                                    <?php } ?>
                                                </tr>
                                               
                                            </tbody>

                                            <tfoot>
                                                <tr></tr>
                                            </tfoot>
                                        </table>
                                        <!-- End Table -->


                                        <!-- pagination -->
                                        <nav class="mt-2 ml-2 mb-0">
                                            <ul class="pagination pagination-sm">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="#" tabindex="-1"
                                                        aria-disabled="true">Previous</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item active" aria-current="page">
                                                    <a class="page-link" href="#">2 <span
                                                            class="sr-only">(current)</span></a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">Next</a>
                                                </li>
                                            </ul>
                                        </nav>
                                        <!-- End pagination -->


                                    </div>
                                    <!-- End Table Div -->
                              
                                </div>
                            </div>


                <!-- container-fluid -->
                <div class="container-fluid-xxl pb-2">


                </div>
                <!-- End container-fluid -->



                <!-- Footer -->
                <?php require_once(APP_DIR."views/Default/footbar.php"); ?>
                <!-- End Footer -->


            </main>
            <!-- End Main -->



        </div>
        <!-- End Row -->
    </div>
    <!-- End Container - Fluid -->

    <?php require_once(APP_DIR."views/Default/footer.php"); ?>