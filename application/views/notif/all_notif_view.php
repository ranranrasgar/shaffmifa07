<div class="">
    <div class="page-title" style="padding: 8px">
        <div class="title_left">
            <h1 style="font-size: 24px;"><i class="fa fa-bell"></i> Pengumuman</h1>
        </div>
    </div>
    <a href="<?php echo base_url() ?>notification/add" class="btn btn-primary pull-right"><i class="fa fa-plus"></i></a>
    <!-- <?php if ($this->session->userdata('role') == 'superadmin') : ?>
        <a href="<?php echo base_url() ?>notification/add" class="btn btn-primary pull-right"><i class="fa fa-plus"></i></a>
    <?php endif; ?> -->
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <!-- <div class="x_title">
                    <h2>Semua Notifikasi</h2>
                    <div class="clearfix"></div>
                </div> -->
                <!-- <div class="x_content">
                    <?php if ($total == 0) : ?>
                    <div class="alert alert-danger">Tidak ada data</div>
                    <?php else : ?>
                        <?php foreach ($list as $ntf) : ?>
                        <div class="col-md-12 col-sm-12 col-xs-12"">
                            <div class="col-md-12 col-lg-6 col-xs-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <span><img style="border-radius: 5px;height: 29px;width: 29px" src="<?php echo base_url() ?>assets/images/upload/profile/<?php echo $ntf->PHOTO ?>" />&emsp;<?php echo $ntf->FULLNAME ?></span>
                                    </div>
                                    <div class="panel-body">
                                        <b><?php echo $ntf->JUDUL ?>.</b> <?php echo $ntf->ISI ?>
                                    </div>
                                    <div class="panel-footer" style="">
                                        <?php $tgl = date_create($ntf->DT);
                                        echo date_format($tgl, "D, d M Y"); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div> -->
                <div class="x_content">
                    <?php if ($total == 0) : ?>
                        <div class="alert alert-danger">Tidak ada data</div>
                    <?php else : ?>
                        <?php $count = 0;
                        // Pre-defined array of random colors
                        $randomColors = array('#d8e0ff', 'orange', 'yellow', 'cyan', 'purple', 'green', 'blue', 'red',   'pink',  'magenta');
                        $colorIndex = 0; // Index to track which color to use
                        $colorMap = array(); // Map to store colors for each user
                        foreach ($list as $ntf) : ?>
                            <?php
                            // Tentukan kelas CSS untuk setiap baris
                            $rowClass = ($count % 2 == 0) ? 'even-row' : 'odd-row';
                            $count++;

                            // Gunakan ID pengguna sebagai kunci untuk memeriksa warna yang telah ditetapkan
                            $userId = $ntf->ID_ADMIN;
                            // Inkrementasi indeks warna untuk warna berikutnya                           
                            if (!isset($colorMap[$userId])) {
                                // Warna belum ditetapkan, tetapkan warna acak baru
                                $colorMap[$userId] = $randomColors[$colorIndex];
                                $colorIndex++;
                            }
                            // Ambil warna dari array warna acak
                            $color = $colorMap[$userId];
                            ?>
                            <?php
                            if ($this->session->userdata('username') == $ntf->USERNAME) { ?>
                                <div class="chat-bubble" style="justify-content: left;">
                                <?php  } else { ?>
                                    <div class="chat-bubble" style="justify-content: right;">
                                    <?php } ?>
                                    <img src="<?php echo base_url() ?>assets/images/upload/profile/<?php echo $ntf->PHOTO ?>" alt="Profil" class="profile-img">
                                    <div class="chat-content" style="background-color: <?php echo $color; ?>;">
                                        <div class="chat-header">
                                            <?php
                                            echo  $ntf->JUDUL; ?>
                                        </div>
                                        <div class="chat-body">
                                            <?php echo $ntf->ISI ?>
                                        </div>
                                        <div class="chat-footer">
                                            <?php $tgl = date_create($ntf->DT);
                                            echo '<span style="color: #999999;">' . $ntf->USERNAME . ' - ' . date_format($tgl, "D, d M Y") . '</span>'; ?>


                                            <button class="btn btn-danger btn-xs" onclick="del('<?php echo $ntf->ID_NOTIF ?>')">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                    </div>
                                    <!-- <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="col-md-12 col-lg-6 col-xs-12">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <span><img style="border-radius: 5px;height: 29px;width: 29px" src="<?php echo base_url() ?>assets/images/upload/profile/<?php echo $ntf->PHOTO ?>" />&emsp;<?php echo $ntf->FULLNAME ?></span>
                                        </div>
                                        <div class="panel-body">
                                            <b><?php echo $ntf->JUDUL ?>.</b> <?php echo $ntf->ISI ?>
                                        </div>
                                        <div class="panel-footer">
                                            <?php $tgl = date_create($ntf->DT);
                                            echo date_format($tgl, "D, d M Y"); ?>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                                <?php endforeach; ?>
                            <?php endif; ?>
                                </div>

                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function del(id) {
            swal({
                    title: "Apakah anda yakin ingin menghapus data ?",
                    text: "Data tidak bisa di kembalikan",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Delete",
                    closeOnConfirm: false
                },
                function() {
                    window.location.href = "<?php echo base_url() ?>notification/delete?rcgn=" + id;
                });
        }
    </script>