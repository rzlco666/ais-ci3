    <!-- END HOME -->
    <section class="bg-home bg-light" id="home">
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="home-content">
                                <h1 class="home-title">Applied Information System Research </h1>
                                <!--
                                <p class="text-muted mt-4 f-20">Vestibulum egestas magna ut aliquet sodales nunc
                                    fermentum ligula
                                    quis tidunt vitae massa.</p>
                                -->
                                <div class="mt-4">
                                    <a href="#web" class="btn btn-primary smoothlink">Explore More</a>
                                    <a href="https://www.youtube.com/watch?v=VWbZ4Q22ZMk" class="btn btn-outline-primary video-play-icon text-dark">
                                        <i class="mdi mdi-play-circle-outline text-dark mr-2"></i>Watch Intro Video
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4 pt-2">
                            <div class="home-img">

                                <img width="450px" src="<?= base_url(); ?>/public/assets/images/logo-FIT.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END HOME -->

    <!-- START SERVICES -->
    <section class="section bg-services" id="web">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box text-center">
                        <h3 class="title-heading mt-4">Project</h3>
                        <img src="<?= base_url(); ?>/public/assets/images/home-border.png" height="15" class="mt-3" alt="">
                    </div>
                </div>
            </div>

            <?php 

            foreach(array_chunk($berkas->result(), 2) as $entriesRow) {
                echo '<div class="row mt-5 pt-4">';
                foreach ($entriesRow as $row) {
                    ?>
                    <div class="col-lg-6">
                            <div class="services-box p-4 mt-4">
                        
                            <a href="<?php echo $row->url; ?>" target="_blank">
                                <img style="border-radius: 2%;" src="data:<?php echo $row->nama_thumbnail; ?>;base64,<?php echo $row->thumbnail; ?>" height="100%" width="100%">
                            </a>

                            <h5 class="mt-4"><a href="<?php echo $row->url; ?>" target="_blank"><?php echo $row->nama_project; ?></a></h5>
                            <p class="text-muted mt-3"><?php echo $row->deskripsi_project; ?></p>
                            <table border="0">
                                <tr>
                                    <td style="color: #20c997;"><div class="icon dripicons-brush"></div></td>
                                    <td>&nbsp;</td>
                                    <td class="text-muted">Developer</td>
                                    <td class="text-muted">:</td>
                                    <td class="text-muted"><b><?php echo $row->owner; ?></b></td>
                                </tr>
                                <tr>
                                    <td style="color: #20c997;"><div class="icon dripicons-phone"></div></td>
                                    <td>&nbsp;</td>
                                    <td class="text-muted">No. Telp.</td>
                                    <td class="text-muted">:</td>
                                    <td class="text-muted"><?php echo $row->no_telp; ?></td>
                                </tr>
                                <tr>
                                    <td style="color: #20c997;"><div class="icon dripicons-mail"></div></td>
                                    <td>&nbsp;</td>
                                    <td class="text-muted">E-mail</td>
                                    <td class="text-muted">:</td>
                                    <td class="text-muted"><?php echo $row->email; ?></td>
                                </tr>

                                <tr>
                                    <td style="color: #20c997;"><div class="icon dripicons-location"></div></td>
                                    <td>&nbsp;</td>
                                    <td class="text-muted">Alamat</td>
                                    <td class="text-muted">:</td>
                                    <td class="text-muted"><?php echo $row->alamat; ?></td>
                                </tr>
                            </table>

                            <div class="mt-3">
                                <a href="<?php echo $row->url; ?>" target="_blank" class="text-primary f-16">Learn More <i class="mdi mdi-arrow-right ml-1"></i></a>
                            </div>

                        </div>
                        </div>
                <?php
                }
                echo '</div>';
            }

            ?>
            
        </div>
    </section>
    <!-- END SERVICES -->

   

    <!-- START CONTACT -->
    <section class="section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box text-center">
                        <h3 class="title-heading mt-4">Contact Us</h3>
                        <!--
                        <p class="text-muted f-17 mt-3">Vivamus ac nulla ultrices laoreet neque mollis mi morbi
                            elementum mauris
                            sit amet arcu <br> fringilla auctor In eleifend maximus nisi sed vulputate.</p>
                        -->
                        <img src="<?= base_url(); ?>/public/assets/images/home-border.png" height="15" class="mt-3" alt="">
                    </div>
                </div>
            </div>

            <div class="row mt-5 pt-4">
                <div class="col-lg-6">
                    <div class="mt-4 home-img text-center">
                        <div class="animation-2"></div>
                        <div class="animation-3"></div>
                        <img src="<?= base_url(); ?>/public/assets/images/features/img-3.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="custom-form mt-4">
                        <div id="message"></div>
                        <form method="post" action="<?php echo base_url(); ?>landing/proses">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-3">
                                        <?php 
                                            if($this->session->flashdata('success_kirim') !='')
                                            {
                                                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
                                                echo $this->session->flashdata('success_kirim');
                                                echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                      </button>';
                                                echo '</div>';
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-3">
                                        <label class="contact-lable">Full Name</label>
                                        <input required name="name" id="name" class="form-control" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-3">
                                        <label class="contact-lable">Email Address</label>
                                        <input required name="email" id="email" class="form-control" type="email">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-3">
                                        <label class="contact-lable">Subject</label>
                                        <input required name="subject" id="subject" class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-3">
                                        <label class="contact-lable">Your Message</label>
                                        <textarea required name="comments" id="comments" rows="5"
                                            class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 mt-3 text-right">
                                    <button type="submit" class="submitBnt smoothlink btn btn-primary btn-round">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- END CONTACT -->