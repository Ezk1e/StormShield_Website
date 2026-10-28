<?= $this->extend('layout/main_layout') ?>
<?= $this->section('content') ?>

    <?= $this->include('components/landing/hero_section') ?>

    <section class="flights mb-5 mt-5">
        <div class="home container">
            <h1 class="text-center mb-4">Characters</h1>
            <div id="flightsCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <p class="ubuntu text-center">Daniel</p>
                            <img src="assets/images/Characters/Daniel.png" class="img-hv places img-fluid rounded mb-3" alt="Manila">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <p class="ubuntu text-center">Olivia</p>
                            <img src="assets/images/Characters/Olivia.png" class="img-hv places img-fluid rounded mb-3" alt="Cebu">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <p class="ubuntu text-center">Finn</p>
                            <img src="assets/images/Characters/Finn.png" class="img-hv places img-fluid rounded mb-3" alt="Davao">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <p class="ubuntu text-center">Xinyi</p>
                            <img src="assets/images/Characters/Xinyi.png" class="img-hv places img-fluid rounded mb-3" alt="Davao">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <p class="ubuntu text-center">Adeyemi</p>
                            <img src="assets/images/Characters/Adeyemi.png" class="img-hv places img-fluid rounded mb-3" alt="Davao">
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#flightsCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon custom-carousel-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#flightsCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon custom-carousel-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

<?= $this->endSection('content') ?>