<nav class="navbar navbar-expand-lg bg-success p-4">
    <div class="container-fluid">
        <a href="<?= site_url('user/index'); ?>" class="navbar-brand">OTMS</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="<?= site_url('user/home'); ?>" class="nav-item nav-link">Home</a>
                <a href="<?= site_url('user/home'); ?>" class="nav-item nav-link">Archives</a>
                <a href="<?= site_url('user/home'); ?>" class="nav-item nav-link">Conference</a>
            </div>
            <div class="navbar-nav ms-auto">              	
                <a href="<?= site_url('user/login'); ?>" class="nav-item nav-link">Login</a>
                <a href="<?= site_url('user/signup'); ?>" class="nav-item nav-link">Register</a>
            </div>
        </div>
    </div>
</nav>