<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register - Applied Information System Research - Telkom University</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Applied Information System Research - Telkom University" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>/public/assets_admin/css/bootstrap.css">

    <link rel="stylesheet" href="<?= base_url(); ?>/public/assets_admin/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/public/assets_admin/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/public/assets_admin/css/app.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/public/assets_admin/css/pages/auth.css">
    <link rel="shortcut icon" href="<?= base_url(); ?>/public/assets_admin/images/fav.ico">
</head>

<body>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="<?= base_url(); ?>"><img src="<?= base_url(); ?>/public/assets/images/logo-FIT.png" alt="Logo"></a>
                    </div>
                    <h1 class="auth-title">Sign Up</h1>
                    <p class="auth-subtitle mb-5">Input your data to register to our website.</p>

                    <?php 
                        if($this->session->flashdata('error') !='')
                        {
                            echo '<div class="alert alert-warning alert-dismissible show fade">';
                            echo $this->session->flashdata('error');
                            echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                            echo '</div>';
                        }
                    ?>

                    <form method="post" action="<?= base_url(); ?>register/proses">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Nama Lengkap" id="name" name="name">
                            <div class="form-control-icon">
                                <i class="bi bi-person-circle"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" id="username" name="username" placeholder="Username">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" id="password" name="password" placeholder="Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Sign Up</button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class='text-gray-600'>Already have an account? <a href="/login"
                                class="font-bold">Log
                                in</a>.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>

    <script src="<?= base_url(); ?>/public/assets_admin/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url(); ?>/public/assets_admin/js/bootstrap.bundle.min.js"></script>

    <script src="<?= base_url(); ?>/public/assets_admin/vendors/simple-datatables/simple-datatables.js"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

    <script src="<?= base_url(); ?>/public/assets_admin/vendors/apexcharts/apexcharts.js"></script>
    <script src="<?= base_url(); ?>/public/assets_admin/js/pages/dashboard.js"></script>

    <script src="<?= base_url(); ?>/public/assets_admin/js/main.js"></script>
    
</body>

</html>