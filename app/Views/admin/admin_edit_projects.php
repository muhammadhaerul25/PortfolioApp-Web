<?= $this->extend('admin/admin_layout') ?>

<?= $this->section('content') ?>

<h4>Project Edit Form</h4>

<form action="" method="post" id="edit-project" enctype="multipart/form-data">
    <?= csrf_field(); ?>

    <input type="hidden" name="id" value="<?= $projects['id'] ?>" />
    <input type="hidden" name="oldPicture" value="<?= $projects['picture']; ?>">

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" placeholder="Project title" value="<?= $projects['title'] ?>" required>
    </div>

    <div class="form-group">
        <div class="mb-3">
            <label for="picture" class="form-label">Picture</label>
            <input type="file" name="picture" class="form-control" value="<?= $projects['picture'] ?>" id="picture" onchange="imgPreview()">
        </div>
        <div class="col-sm-2">
            <img src="/img/<?= $projects['picture']; ?>" class="img-thumbnail img-preview" alt="">
        </div>
    </div>


    <div class="form-group">
        <textarea name="content" class="form-control" cols="30" rows="10" placeholder="Project content"><?= $projects['content'] ?></textarea>
    </div>

    <div class="form-group">
        <button type="submit" name="status" value="published" class="btn btn-success"> Post </button>

        <?php session()->setFlashData('cancel', 'Project canceled for editing!'); ?>
        <a id="cancel-project" class="btn btn-danger" href="<?= base_url('admin/projects'); ?>"> Cancel </a>
    </div>
</form>


<?= $this->endSection() ?>