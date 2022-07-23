<?= $this->extend('admin/admin_layout') ?>

<?= $this->section('content') ?>

<h4 class="mb-5">Projects List</h4>

<table class="table">
    <?php if (session()->getFlashData('post')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashData('post'); ?>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashData('cancel')) : ?>
        <div class="alert alert-danger" role="alert">
            <?= session()->getFlashData('cancel'); ?>
        </div>
    <?php endif; ?>

    <thead>
        <tr>
            <th id="">#</th>
            <th id="">Title</th>
            <th id="">Picture</th>
            <th id=""> Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($projects as $pj) : ?>
            <tr>
                <td><?= $pj['id'] ?></td>
                <td>
                    <strong><?= $pj['title'] ?></strong><br>
                    <small class="text-muted"><?= $pj['created_at'] ?></small>
                </td>
                <td>
                    <img id="img-project" src="/img/<?= $pj['picture']; ?>" class="card-img-top" alt="...">
                </td>
                <td>
                    <a href="<?= base_url('admin/projects/' . $pj['id'] . '/edit') ?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="#" data-href="<?= base_url('admin/projects/' . $pj['id'] . '/delete') ?>" onclick="confirmToDelete(this)" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<div id="confirm-dialog" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h2 class="h2">Are you sure?</h2>
                <p>The project will be deleted</p>
            </div>
            <div class="modal-footer">
                <a href="#" role="button" id="delete-button" class="btn btn-danger">Delete</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<script>
    function confirmToDelete(el) {
        $("#delete-button").attr("href", el.dataset.href);
        $("#confirm-dialog").modal('show');
    }
</script>


<?= $this->endSection() ?>