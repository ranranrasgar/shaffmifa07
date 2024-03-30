<div class="">
    <div class="page-title" style="padding: 8px">
        <div class="title_left">
            <h1><i class="fa fa-users"></i> Kegiatan</h1>
        </div>
    </div>
    <?php if ($this->session->userdata('role') == 'superadmin') {
        echo '<a href="' . base_url() . 'kegiatan/add" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Tambah Kegiatan</a>';
    } ?>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>List Data <small>Kegiatan</small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <!-- Notif -->
                    <?php $announce = $this->session->userdata('announce') ?>
                    <?php if (!empty($announce)) : ?>
                        <?php if ($announce == 'Berhasil menyimpan data') : ?>
                            <div class="alert alert-success fade in"><?php echo $announce; ?></div>
                        <?php else : ?>
                            <div class="alert alert-danger fade in"><?php echo $announce; ?></div>
                        <?php endif; ?>
                    <?php endif; ?>
                    <div class="row">
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No.Reff</th>
                                    <th>Nama Kegiatan</th>
                                    <th>Jenis Kegiatan</th>
                                    <th>Deskripsi</th>
                                    <th>Mulai</th>
                                    <th>Selesai</th>
                                    <th>Anggaran</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    <!-- <?php if ($this->session->userdata('role') == 'superadmin') {
                                        echo '<th>Action</th>';
                                    } ?> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($this->db->count_all('kegiatan') == 0) {
                                    echo '
                                        <tr>
                                            <td colspan="6">
                                                <div class="alert alert-danger">
                                                    Tidak ada data
                                                </div>
                                            </td>
                                        </tr>
                                        ';
                                } else {
                                    $no = 1;
                                    foreach ($list as $listKegiatan) {
                                        $gen = '';
                                        if ($listKegiatan->STATUS == '1') {
                                            $gen = 'Selesai';
                                        } else {
                                            $gen = 'Baru';
                                        }
                                ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $listKegiatan->ID_KEGIATAN ?></td>
                                            <td><a href="<?php echo base_url() ?>kegiatan/detail?idtf=<?php echo $listKegiatan->ID_KEGIATAN ?>"><?php echo $listKegiatan->NM_KEGIATAN ?></a></td>
                                            <td><?php echo $listKegiatan->JNS_KEGIATAN ?></td>
                                            <td><?php echo $listKegiatan->DESC_KEGIATAN ?></td>
                                            <td><?php echo $listKegiatan->TGL_MULAI ?></td>
                                            <td><?php echo $listKegiatan->TGL_SELESAI ?></td>
                                            <td style="text-align: right;"><?php echo number_format($listKegiatan->RP_ANGGARAN,0,',','.') ?></td>
                                            <td><?php echo $gen ?></td>
                                            
                                            <?php if ($this->session->userdata('role') == 'superadmin') : ?>
                                                <td>
                                                    <a href="<?php echo base_url() ?>kegiatan/detail?idtf=<?php echo $listKegiatan->ID_KEGIATAN ?>" class="btn btn-info btn-xs">
                                                        <i class="fa fa-list"> </i>
                                                    </a>
                                                    <a href="<?php echo base_url() ?>kegiatan/edit?idtf=<?php echo $listKegiatan->ID_KEGIATAN ?>" class="btn btn-success btn-xs">
                                                        <i class="fa fa-edit"> </i>
                                                    </a>
                                                    <a onclick="sweets('<?php echo $listKegiatan->ID_KEGIATAN ?>')" class="btn btn-danger btn-xs">
                                                        <i class="fa fa-trash"> </i>
                                                    </a>
                                                </td>
                                            <?php else : ?>
                                                <td>
                                                <a href="<?php echo base_url() ?>kegiatan/detail?idtf=<?php echo $listKegiatan->ID_KEGIATAN ?>" class="btn btn-info btn-xs">
                                                    <i class="fa fa-list"> </i>
                                                </a>
                                            </td>
                                            <?php endif; ?>    
                                        </tr>
                                <?php
                                        $no++;
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function sweets(id) {
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
                window.location.href = "<?php echo base_url() ?>kegiatan/delete?rcgn="+id;
            });
    }
</script>