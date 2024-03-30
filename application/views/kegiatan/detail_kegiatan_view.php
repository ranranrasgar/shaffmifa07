<div class="">
    <div class="page-title" style="padding: 8px">
        <div class="title_left">
            <h1><i class="fa fa-users"></i>Detail Kegiatan</h1>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><?php echo $row->NM_KEGIATAN; ?></h2>
                    <?php if ($this->session->userdata('role') == 'superadmin') {
                        echo '<h2 class="pull-right" style="color: #E0E0E0">created at ' . $row->D_CREATED . ' </h2>';
                    } ?>
                    <div class="clearfix"></div>
                    <label>Tanggal <?php echo $row->TGL_MULAI ?> s/d <?php echo $row->TGL_SELESAI ?></label>
                </div>

                <!-- <tr>
                    <td style="text-align: center;">
                        <img style="width: 50% ; height: 50%;" alt="Gambar Kegiatan" src="<?php echo base_url(); ?>assets/images/upload/kegiatan/<?php echo $row->FOTO; ?>">
                    </td>
                </tr> -->

                <div class="x_content">
                    <div class="row">
                        <div class="col-lg-6">
                            <img class="pull-right" style="height: 100%;width: 100%" src="<?php echo base_url(); ?>assets/images/upload/kegiatan/<?php echo $row->FOTO; ?>">
                        </div>
                        <div class="col-md-auto">
                            <?php
                            $jenkel = $row->STATUS;
                            if ($jenkel == '1') {
                                $jenkel = 'Selesai';
                            } else {
                                $jenkel = 'Baru';
                            }
                            ?>

                            <label>Nama Kegiatan</label>
                            <p>&emsp;&nbsp;<?php echo $row->NM_KEGIATAN ?></p>


                            <label>Jenis Kegiatan</label>
                            <p>&emsp;&nbsp;<?php echo $row->JNS_KEGIATAN ?></p>

                            <label>Deskripsi Kegiatan</label>
                            <p>&emsp;&nbsp;<?php echo $row->DESC_KEGIATAN ?></p>

                            <label>Mulai Tanggal</label>
                            <p>&emsp;&nbsp;<?php echo $row->TGL_MULAI ?></p>

                            <label>Selesai</label>
                            <p>&emsp;&nbsp;<?php echo $row->TGL_SELESAI ?></p>
                            <label>Anggaran Rp.</label>
                            <p>&emsp;&nbsp;<?php echo $row->RP_ANGGARAN ?></p>
                            <label>Status</label>
                            <p>&emsp;&nbsp;<?php echo $jenkel ?></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>