<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="index">
            <img src="res/img/vdLogoFull.png" alt="VixenDev Logo" width="30" height="24"
                class="d-inline-block align-text-top">
            Vixendev
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a <?= $currentPage == "index" ? "class='nav-link active' aria-current='page'" : "class='nav-link'"?>
                    href="#index">Home</a>
                <a <?= $currentPage == "about" ? "class='nav-link active' aria-current='page'" : "class='nav-link'"?>
                    href="#about">About</a>
                <a <?= $currentPage == "projects" ? "class='nav-link active' aria-current='page'" : "class='nav-link'"?>
                    href="#projects">Projects</a>
                <a <?= $currentPage == "contact" ? "class='nav-link active' aria-current='page'" : "class='nav-link'"?>
                    href="#contact">Contact</a>
            </div>
        </div>
    </div>
</nav>