            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Project</h3>
                            <p class="text-subtitle text-muted">Pesan masuk</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>home">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Pesan</li>
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
                                if($this->session->flashdata('success_hapus_pesan') !='')
                                {
                                    echo '<div class="alert alert-success alert-dismissible show fade" role="alert">';
                                    echo $this->session->flashdata('success_hapus_pesan');
                                    echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                                    echo '</div>';
                                }
                            ?>
                            
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Sender</th>
                                        <th>Email Sender</th>
                                        <th>Pesan</th>
                                        <th>Dikirim Pada</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $no = 1;
                                        foreach($pesan->result() as $row)
                                        {
                                    ?>
                                    <tr>
                                        <td width="7%"><?php echo $no++; ?></td>
                                        <td>
                                            <?php echo $row->name; ?>
                                        </td>
                                        <td>
                                            <?php echo $row->email; ?>
                                        </td>
                                        <td width="35%">
                                            <b><?php echo $row->subject; ?></b><br>
                                            <?php echo $row->comments; ?>
                                        </td>
                                        <td>
                                            <p>
                                                <?php 
                                                    echo date("d M Y",strtotime($row->dikirim))
                                                ?>
                                            </p>
                                            <p>
                                                <?php 
                                                    echo 'Jam : '.date("H:i",strtotime($row->dikirim))
                                                ?>
                                            </p>
                                        </td>
                                        <td>
                                            <a href="mailto:<?php echo $row->email; ?>" target="_blank" class="btn btn-sm btn-primary"><i class="bi bi-reply-fill"></i></a>&nbsp;
                                            <a href="<?php echo base_url(); ?>landing/delete/<?php echo $row->id_pesan; ?>" class="btn btn-sm btn-secondary"><i class="bi bi-trash-fill"></i></a>
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