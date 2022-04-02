<header id="header" class="fixed-top">
    <div class="container d-flex align-items-between justify-content-between">
        <div class="d-flex flex-row align-items-center justify-content-between">
            <h4 class="logo me-auto"><a href="<?php echo site_url('nav/index'); ?>">OTMS</a></h4>
            <form class="d-flex  px-2">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
      
      <nav id="navbar" class="navbar order-last order-lg-0">
          <ul>
            <li><a href="<?php echo site_url('nav/index'); ?>">Home</a></li>
            <li><a href="#">Classes</a></li>
            <li><a class="active" href="<?php echo site_url('nav/about'); ?>">Files</a></li>
            <li><a href="<?php echo site_url('nav/contact'); ?>">Conference</a></li>
            <?php // if($this->session->userdata('user_email')) : ?> 
              <li class="dropdown d-flex flex-row justify-content-center">
                  <a href="#">
                      <img class="mx-1" src="<?php echo BASE_URL . PUBLIC_DIR.'/profile_pictures/'.$this->session->userdata('user_profile'); ?>" alt="" style="width: 20px; height: 20px; border-radius: 50%;">
                      <span><?php echo $this->session->userdata('username'); ?></span> <i class="bi bi-chevron-down"></i>
                  </a>
                  <ul>
                      <?php //if($_SESSION['user_role'] == 2 || $_SESSION['user_role'] == 3) : ?>
                          <li><a href="<?php echo site_url('nav/dashboard'); ?>">Go to Dashboard</a></li>
                          <li><a href="<?php //echo site_url("nav/myprofile/". encrypt_id($_SESSION['user_id'])); ?>">My Profile</a></li>
                          <li><a href="<?php //echo site_url("nav/mydocuments/". encrypt_id($_SESSION['user_id'])); ?>">My Documents</a></li>
                          <li><a href="<?php //echo site_url('nav/mycitations/'. encrypt_id($_SESSION['user_id'])); ?>">Saved Citations</a></li>
                          <li><a href="<?php //echo site_url('nav/mybookmarks/'. encrypt_id($_SESSION['user_id'])); ?>">Bookmarked Documents</a></li>
                          <li><a href="<?php echo site_url('nav/logout'); ?>">Log Out</a></li>
                          <?php //else: ?>
                          <li><a href="<?php //echo site_url("nav/myprofile/". encrypt_id($_SESSION['user_id'])); ?>">My Profile</a></li>
                          <li><a href="<?php //echo site_url("nav/mydocuments/". encrypt_id($_SESSION['user_id'])); ?>">My Documents</a></li>
                          <li><a href="<?php //echo site_url('nav/mycitations/'. encrypt_id($_SESSION['user_id'])); ?>">Saved Citations</a></li>
                          <li><a href="<?php //echo site_url('nav/mybookmarks/'. encrypt_id($_SESSION['user_id'])); ?>">Bookmarked Documents</a></li>
                          <li><a href="<?php echo site_url('nav/logout'); ?>">Log Out</a></li>
                        <?php //endif ?>
                    </ul>
                </li>
            </ul>
            <?php //endif ?>
        </nav><!-- .navbar -->
    </div>
</header><!-- End Header -->