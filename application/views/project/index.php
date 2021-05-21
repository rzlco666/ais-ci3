            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Project</h3>
                            <p class="text-subtitle text-muted">List project ais-research</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>home">Dashboard</a></li>
                                    <li class="breadcrumb-item">Project</li>
                                    <li class="breadcrumb-item active" aria-current="page">List</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <a href="<?= base_url(); ?>upload/create" class="btn btn-primary">Tambah Project</a>
                        </div>
                        <div class="card-body">

                            <?php 
                                if($this->session->flashdata('error_project') !='')
                                {
                                    echo '<div class="alert alert-danger alert-dismissible show fade">';
                                    echo $this->session->flashdata('error');
                                    echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                                    echo '</div>';
                                }
                            ?>
             
                            <?php 
                                if($this->session->flashdata('success_project') !='')
                                {
                                    echo '<div class="alert alert-success alert-dismissible show fade">';
                                    echo $this->session->flashdata('success_project');
                                    echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                                    echo '</div>';
                                }
                            ?>

                            <?php 
                                if($this->session->flashdata('success_ubah_project') !='')
                                {
                                    echo '<div class="alert alert-success alert-dismissible show fade">';
                                    echo $this->session->flashdata('success_ubah_project');
                                    echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                                    echo '</div>';
                                }
                            ?>

                            <?php 
                                if($this->session->flashdata('success_hapus_project') !='')
                                {
                                    echo '<div class="alert alert-success alert-dismissible show fade">';
                                    echo $this->session->flashdata('success_hapus_project');
                                    echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                                    echo '</div>';
                                }
                            ?>
                            
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>Nama Project</th>
                                        <th>Deskripsi Project</th>
                                        <th>Developer</th>
                                        <th>Thumbnail</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $no = 1;
                                        foreach($berkas->result() as $row)
                                        {
                                    ?>
                                    <tr>
                                        <td width="10%"><h6><?php echo $row->nama_project; ?></h6></td>
                                        <td width="30%"><?php echo $row->deskripsi_project; ?></td>
                                        <td width="25%">
                                            <p><i class="bi bi-person-fill"></i> <span><?php echo $row->owner; ?></span></p>
                                            <p><i class="bi bi-phone-fill"></i> <span><?php echo $row->no_telp; ?></span></p>
                                            <p><i class="bi bi-envelope-fill"></i> <span><?php echo $row->email; ?></span></p>
                                            <p><i class="bi bi-map-fill"></i> <span><?php echo $row->alamat; ?></span></p>
                                        </td>
                                        <td width="30%">
                                            <img src="data:<?php echo $row->nama_thumbnail; ?>;base64,<?php echo $row->thumbnail; ?>" width="100%">
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>upload/edit/<?php echo $row->id_project; ?>" class="btn btn-sm btn-primary"><i class="bi bi-pencil-fill"></i></a>&nbsp;
                                            <a href="<?php echo base_url(); ?>upload/delete/<?php echo $row->id_project; ?>" class="btn btn-sm btn-secondary"><i class="bi bi-trash-fill"></i></a>
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>