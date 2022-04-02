<!DOCTYPE html>

<html lang="en" class="h-100">

<?php require_once("includes/head.html"); ?>

<body class="d-flex flex-column h-100">


    <!-- topbar -->
    <?php require_once("includes/topbar.html"); ?>
    <!-- end topbar -->

    <!-- Container - Fluid -->
    <div class="container-fluid pt-5">
        <!-- Row -->
        <div class="row">


            <!-- sidebar -->
            <?php require_once("includes/sidebar.html"); ?>
            <!-- end side bar -->


            <!-- Main -->
            <!-- <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 bg-white maincontent"> -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2 maincontent">

                <!-- BreadCrumb -->
                <nav aria-label="breadcrumb" class="pt-3 mb-2 bg-white border-bottom mx-2">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="" class="breadcrumb-link"><i class="fa fa-dashboard"></i>
                                Dashboard</a></li>
                        <li class="breadcrumb-item"> mail </li>
                    </ul>
                </nav>
                <!-- End BreadCrumb -->

                <!-- title -->
                <div class="justify-content-between align-items-center pt-1 pb-2 mb-3 border-bottom mx-2">
                    <h5 class="h5 mt-3 mb-0 color-darkgray"> Reports <small>/</small></h5>
                </div>
                <!-- end title -->
                <div class="card">
                                
                                <div class="card-header" data-bs-toggle="collapse" data-bs-target="#collapseTable"
                                    aria-expanded="true" aria-controls="collapseTable">
                                    <span class="card-icon"><i class="fa fa-map"></i></span> Researches<i
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
                                                    <th>Authors</th>
                                                    <th>Title</th>
                                                    
                                                    <th>Program</th>
                                                    <th>Year Level</th>
                                                    <th>Options</th>
                                                </tr>
                                            </thead>

                                            <tbody>

                                                
                                                <tr class="">
                                                    <td>2</td>
                                                    
                                                    <td>Juan dela Cruz</td>
                                                    <td>Lorem ipsum dolor sit amet, </td>
                                                    
                                                    <td>BSIT</td>
                                                    <td>First Year</td>

                                                    <td>
                                                        <a href="#"><button
                                                                class="btn btn-mini btn-info">Print</button></a>
                                                        
                                                    </td>
                                                </tr>
                                                <tr class="">
                                                <td>2</td>
                                                    
                                                    <td>Juan dela Cruz</td>
                                                    <td>Lorem ipsum dolor sit amet, </td>
                                                    
                                                    <td>BSIT</td>
                                                    <td>First Year</td>

                                                    <td>
                                                        <a href="#"><button
                                                                class="btn btn-mini btn-info">Print</button></a>
                                                        
                                                    </td>
                                                </tr>
                                                
                                                <tr class="">
                                                <td>2</td>
                                                    
                                                    <td>Juan dela Cruz</td>
                                                    <td>Lorem ipsum dolor sit amet, </td>
                                                    
                                                    <td>BSIT</td>
                                                    <td>First Year</td>

                                                   <td>
                                                        <a href="#"><button
                                                                class="btn btn-mini btn-info">Print</button></a>
                                                        
                                                    </td>
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
                <?php require_once("includes/footbar.html"); ?>
                <!-- End Footer -->


            </main>
            <!-- End Main -->



        </div>
        <!-- End Row -->
    </div>
    <!-- End Container - Fluid -->

    <?php require_once("includes/footer.html"); ?>