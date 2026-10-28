<!-- Header -->
<nav class="navbar navbar-expand-sm lightblue">
</nav>

<nav class="navbar navbar-expand-sm navbar-custom">
    <div class="container">
        <a href="<?= base_url() ?>" class="navbar-brand text-uppercase fs-5">
            <img src="assets/images/logo/Storm_Shield_Logo.png" alt="Logo" width="70">
            STORM SHIELD
        </a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
            <span class="navbar-toggler-icon"></span>   
        </button>

        <div class="collapse navbar-collapse" id="list2">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="<?= base_url() ?>" class="nav-link <?= (current_url() == base_url()) ? 'active' : '' ?>">HOME</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url() . 'aboutus' ?>" class="nav-link <?= (current_url() == base_url() . 'aboutus') ? 'active' : '' ?>">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url() . 'updates' ?>" class="nav-link <?= (current_url() == base_url() . 'updates') ? 'active' : '' ?>">UPDATES</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url() . 'socials' ?>" class="nav-link <?= (current_url() == base_url() . 'socials') ? 'active' : '' ?>">SOCIALS</a>
                </li>
            </ul>
        </div>
    </div>
</nav>