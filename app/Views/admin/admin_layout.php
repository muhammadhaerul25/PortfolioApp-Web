<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Muhammad Haerul's portfolio</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('css/style_admin.css') ?>">

    <!-- Custom scripts for all pages-->
    <script defer src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script defer src="<?= base_url('js/bootstrap.min.js') ?>"></script>

    <script defer>
        function imgPreview() {
            const picture = document.querySelector("#picture");
            const pictureLabel = document.querySelector('.form-label');
            const imgPreview = document.querySelector('.img-preview');

            //Script img file name
            //pictureLabel.textContent = picture.files[0].name;

            //Script img preview
            const filePicture = new FileReader();
            filePicture.readAsDataURL(picture.files[0]);

            filePicture.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }
    </script>

</head>

<body>

    <?= $this->include('admin/navbar') ?>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <?= $this->renderSection('content') ?>
            </div>
        </div>
    </div>

    <?= $this->include('admin/footer') ?>

</body>

</html>