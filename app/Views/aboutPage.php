<?= $this->extend('layout/main_layout') ?>
<?= $this->section('content') ?>
        <hr>
        <h5 class="about-title text-center">About us!</h5>
        <hr>
    <div class = "container mt-5">
        <div class="mb-5 p-3" style="max-width: 100%;">
            <div class="row g-0">
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="about-body">
                        <h5 class="about-title text-center">Cen-Tavo</h5>
                        <p class="about-text text-black">Cen-Tavo is a group passionate about the intersection of creativity and technology. Our team specializes in animation and game development, bringing stories to life through visually stunning designs and interactive experiences. With a shared vision of crafting engaging and immersive digital content, we aim to push the boundaries of creativity and deliver projects that captivate audiences and inspire imagination.</p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-10 col-sm-10 m-auto">
                    <img src="assets/images/logo/Storm_Shield_Logo.png" class="about-image rounded">
                </div>
            </div>
        </div>
    </div>

    <section class="boxes">
        <hr>
        <h5 class="about-title text-center">Meet the Team!</h5>
        <hr>
        <div class="container">
            
            <div class="box">
                <a href="<?= base_url()?>" class="navbar-brand text-center fs-5">
                    <img class="buttons" src="assets/images/Ezekiel.jpg">
                    <h3>Ezekiel</h3>
                </a>
            </div>
            <div class="box">
            <a href="<?= base_url()?>" class="navbar-brand text-center fs-5">
                    <img class="buttons" src="assets/images/Hannah.jpg">
                    <h3>Hannah</h3>
                </a>
            </div>
            <div class="box">
            <a href="<?= base_url()?>" class="navbar-brand text-center fs-5">
                    <img class="buttons" src="assets/images/Albert.jpg">
                    <h3>Albert</h3>
                </a>
            </div>
            <div class="box">
            <a href="<?= base_url()?>" class="navbar-brand text-center fs-5">
                    <img class="buttons" src="assets/images/Ghenvic.png">
                    <h3>Ghenvic</h3>
                </a>
            </div>
        </div>
    </section>
    <div class = "about-container container">
        <div class="mb-5 p-3" style="max-width: 100%;">
            <div class="row g-0">
                <div class="about-col col">
                    <div class="about-body">
                        <h2 class="about-title text-center">The Goal of Storm Shield</h2>
                        <p class="about-text text-black">The group created storm shield because this is filler text please replace this. This text is just a place holder so as it becomes an example.</p>
                    </div>
                </div>
                <div class="about-col col">
                    <div class="about-body">
                        <h2 class="about-title text-center">Why Create Storm Shield? </h2>
                        <p class="about-text text-black">The group created storm shield because this is filler text please replace this. This text is just a place holder so as it becomes an example.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection('content') ?>