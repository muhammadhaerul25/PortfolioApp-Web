<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<!-- My Contact -->
<section id="contact">
    <div class="container">
        <h3>Contacts</h3>
        <div class="row align-items-start">
            <div class="col">
                <h5>Location</h5>
                <p>Polewali Mandar, West Sulawesi, Indonesia</p>
            </div>

            <div class="col">
                <h5>Phone</h5>
                <p>(+62) 85 298 414 891</p>
            </div>

            <div class="col">
                <h5>Email</h5>
                <p>haerulm20h@stundet.unhas.ac.id</p>
            </div>

            <br><br><br><br><br>

            <form>
                <p>Let's get in touch. Send me a message:</p>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name:</label>
                    <input type="" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Message:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <!-- Button Trigger Modal -->
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal"> Send Message </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Send Message</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body"> Send a message to Muhammad Haerul </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger">Yes</button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
</section>
<!-- End My Contact -->

<?= $this->endSection() ?>