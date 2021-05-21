
<body data-spy="scroll" data-target="#navbarCollapse">

    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark">
        <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand logo text-uppercase" href="index.html">
                <img src="<?= base_url(); ?>/public/assets//images/logo-FIT.png" alt="" height="22">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto navbar-center" id="mySidenav">

                    <li class="nav-item">
                        <a href="#home" class="nav-link smoothlink">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#web" class="nav-link smoothlink">Project</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link smoothlink">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->