<header id="header" class="fixed-top">
    <div class="container d-flex align-items-between justify-content-between">
        <div class="d-flex flex-row align-items-center justify-content-between">
            <h4 class="logo me-auto"><a href="<?php echo site_url('faculty/index'); ?>">OTMS</a></h4>
            <form class="d-flex  px-2">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
      
        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
            <li><a href="<?php echo site_url('faculty/index'); ?>">Home</a></li>
            <li><a href="<?php echo site_url('faculty/classes/'. encrypt_id($_SESSION['user_id'])); ?>">Classes</a></li>
            <li><a href="<?php echo site_url('faculty/files'); ?>">Files</a></li>
            <!-- <li><a href="<?php //echo site_url('faculty/conference'); ?>">Conference</a></li> -->
            <?php if($this->session->userdata('user_email')) : ?> 
                <li class="dropdown d-flex flex-row justify-content-center">
                    <a href="<?php echo site_url('faculty/profile'); ?>">
                        <img class="mx-1" src="<?php echo check_dp($this->session->userdata('user_profile')); ?>" alt="" style="width: 20px; height: 20px; border-radius: 50%;">
                        <span><?php if(isset($_SESSION['username'])) echo $_SESSION['username']; else echo $_SESSION['fname'].' '.$_SESSION['lname']; ?></span> <i class="fa-solid fa-caret-down"></i>
                    </a>
                    <ul>
                        <li><a href="<?php echo site_url("faculty/myprofile/". encrypt_id($_SESSION['user_id'])); ?>">My Profile</a></li>
                        <li><a href="<?php echo site_url('user/logout'); ?>">Log Out</a></li>  
                    </ul>
                </li>
            </ul>
            <?php endif ?>
        </nav><!-- .navbar -->
    </div>
</header><!-- End Header -->