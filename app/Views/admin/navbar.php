<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('admin/projects') ?>">Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('projects') ?>">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-secondary me-auto" href="<?= base_url('admin/projects/create') ?>">Post Project</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a id="nl" class="btn btn-danger" href="<?= base_url('logout'); ?>">Log out</a>
                </li>
            </ul>
        </div>
    </div>
</nav>