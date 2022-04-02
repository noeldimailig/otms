<nav class="navbar navbar-expand-lg bg-success p-4 mt-0 fixed-top">
    <div class="container-fluid">
        <a href="<?= site_url('user/index'); ?>" class="navbar-brand text-white">OTMS</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="<?= site_url('user/index'); ?>" class="nav-item nav-link">Home</a>
                <a href="<?= site_url('user/archive'); ?>" class="nav-item nav-link">Archives</a>
                <a href="<?= site_url('user/conference'); ?>" class="nav-item nav-link">Conference</a>
            </div>
            <div class="navbar-nav ms-auto">              	
                <a href="<?= site_url('user/login'); ?>" class="nav-item nav-link">Login</a>
                <a href="<?= site_url('user/choose'); ?>" class="nav-item nav-link">Register</a>
            </div>
        </div>
    </div>
</nav>