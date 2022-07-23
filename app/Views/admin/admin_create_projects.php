<?= $this->extend('admin/admin_layout') ?>

<?= $this->section('content') ?>

<form action="<?= base_url('admin/projects/save') ?>" method="post" id="create-project" enctype="multipart/form-data">
    <?= csrf_field(); ?>

    <h4>Project Create Form</h4>

    <div id="form-create-project">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" value="<?= old('title'); ?>" class="form-control <?= ($validation->hasError('title')) ? 'is-invalid' : ''; ?> " placeholder="Project title" autofocus required>
            <div id="validationServer03Feedback" class="invalid-feedback">
                <?= $validation->getError('title'); ?>
            </div>
        </div>

        <div class="form-group">
            <div class="mb-3">
                <label for="picture" class="form-label">Picture</label>
                <input type="file" name="picture" class="form-control <?= ($validation->hasError('picture')) ? 'is-invalid' : ''; ?>" id="picture" onchange="imgPreview()" required>
                <div id="validationServer03Feedback" class="invalid-feedback">
                    <?= $validation->getError('picture'); ?>
                </div>
            </div>
            <div class="col-sm-2">
                <img src="" class="img-thumbnail img-preview" alt="">
            </div>
        </div>

        <div class="form-group">
            <textarea name="content" value="<?= old('content'); ?>" class="form-control" cols="30" rows="10" placeholder="Project content"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" name="status" value="post" class="btn btn-success"> Post </button>

            <?php session()->setFlashData('cancel', 'Project canceled!'); ?>
            <a id="cancel-project" class="btn btn-danger" href="<?= base_url('admin/projects'); ?>"> Cancel </a>
        </div>
    </div>

</form>


<?= $this->endSection() ?>