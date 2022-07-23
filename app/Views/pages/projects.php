<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<!--My Project -->
<section id="project">
    <div class="container">
        <h3>Projects</h3>
        <div class="row row-cols-1 row-cols-md-3 g-4">

            <?php foreach ($projects as $pj) : ?>

                <div class="col">
                    <div class="card h-100">
                        <img src="/img/<?= $pj['picture']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $pj['title']; ?></h5>
                            <p class="card-text"><?= $pj['content']; ?></p>
                        </div>
                    </div>
                </div>

            <?php endforeach ?>
        </div>
    </div>
</section>
<!-- End My Project -->

<?= $this->endSection() ?>