<!-- Navigasi Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a href="<?= base_url('home') ?>"><img src="<?= base_url('img/profile_picture.png') ?>" title="Muhammad Haerul" style="width:50px"></a>
        <a class="navbar-brand" href="<?= base_url() ?>"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNavAltMarkup">
            <div class="navbar-nav me-auto mb-2 mb-lg-0">
                <a id="nl" class="nav-link" href="<?= base_url('profile') ?>"><b>Profile</b></a>
                <a id="nl" class="nav-link" href="<?= base_url('projects') ?>"><b>Projects</b></a>
                <a id="nl" class="nav-link" href="<?= base_url('contacts') ?>"><b>Contacts</b></a>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-dark" type="submit">Search</button>
                </form>
            </div>

            <div class="navbar-nav">
                <a id="nl" class="btn btn-primary" href="<?= base_url('login/index'); ?>"><b>Log in</b></a>
            </div>
        </div>
    </div>
</nav>
<!-- End Navigasi Bar -->