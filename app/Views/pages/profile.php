<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<!--My Profile -->
<section id="home">
    <div class="container">
        <header>
            <h1><span class="">I'm</span> Muhammad Haerul</h1>
            <p><span class="efek-ngetik"></span></p>
            <img src="/img/profile_picture.png" alt="Profile Picture" title="Muhammad Haerul" width="200px">
        </header>
    </div>
</section>

<section id="profile">
    <div class="container">
        <h3>Profile</h3>
        <p> I am Muhammad Haerul, one of the millions of superior generations who were born in Indonesia not by chance. Nor is it an ordinary event, but a destiny that will be written beautifully, and it takes a long struggle to arrive at the end of the story. I don't know what my destiny will be one day. But what I do know is that I am ready and able to face it, because I believe I am the superior generation of the pride of the Indonesian nation. I am not the only superior generation of Indonesians, but Indonesia has chosen me because I will serve and build this country.</p>
        <button type="button" class="btn btn-secondary"> Download Resume </button>
    </div>
</section>
<!-- End My Profile -->

<?= $this->endSection() ?>