<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="<?= base_url(); ?>"><img src="<?= base_url(); ?>/public/assets/images/logo-FIT.png" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item <?php if ($title == 'Dashboard') echo "active"; ?>">
                            <a href="<?= base_url(); ?>home" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item <?php if ($title == 'Create Project') echo "active"; ?> <?php if ($title == 'List Project') echo "active"; ?> has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>Project</span>
                            </a>
                            <ul class="submenu <?php if ($title == 'Create Project') echo "active"; ?> <?php if ($title == 'List Project') echo "active"; ?>">
                                <li class="submenu-item <?php if ($title == 'Create Project') echo "active"; ?>">
                                    <a href="<?= base_url(); ?>upload/create">Add Project</a>
                                </li>
                                <li class="submenu-item <?php if ($title == 'List Project') echo "active"; ?>">
                                    <a href="<?= base_url(); ?>upload">List Project</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item <?php if ($title == 'Kotak Masuk') echo "active"; ?>">
                            <a href="<?= base_url(); ?>pesan" class='sidebar-link'>
                                <i class="bi bi-chat-dots-fill"></i>
                                <span>Kotak Masuk</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>

        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>