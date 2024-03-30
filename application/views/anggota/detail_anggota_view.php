<div class="">
    <div class="page-title" style="padding: 8px">
        <div class="title_left">
            <h1 style="font-size: 24px"><i class="fa fa-users"></i> Identitas Anggota</h1>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><?php echo $row->FULL_NAME; ?></h2>
                    <?php if ($this->session->userdata('role') == 'superadmin') {
                        echo '<h2 class="pull-right" style="color: #E0E0E0">created at ' . $row->D_CREATED . ' </h2>';
                    } ?>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-md-3">
                            <img class="pull-right" style="height: auto;width: 240px" src="<?php echo base_url(); ?>assets/images/upload/anggota/<?php echo $row->FOTO; ?>">
                        </div>
                        <div class="col-md-9">
                            <table class="table table-borderless" style="border: none !important;">
                                <tbody>
                                    <tr>
                                        <th scope="row">NIK</th>
                                        <td><?php echo $row->NIK ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nama Lengkap</th>
                                        <td><?php echo $row->FULL_NAME ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Jenis Kelamin</th>
                                        <td><?php echo ($row->GENDER == 'L') ? 'Laki-laki' : 'Perempuan' ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tempat Lahir</th>
                                        <td><?php echo $row->TMP_LAHIR ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tanggal Lahir</th>
                                        <td><?php echo $row->TGL_LAHIR ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Alamat Sesuai KTP</th>
                                        <td><?php echo $row->ALAMAT ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Alamat Domisili</th>
                                        <td><?php echo $row->ALAMAT_DOMISILI ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">No. Telepon</th>
                                        <td><?php echo $row->TELP ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Pendidikan</th>
                                        <td><?php echo $row->PENDIDIKAN ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Pekerjaan</th>
                                        <td><?php echo $row->PEKERJAAN ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Bidang Usaha</th>
                                        <td><?php echo $row->BDG_USAHA ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <a class="btn btn-primary" href="<?php echo base_url() ?>anggota">
                                    <i class="fa fa-arrow-left"></i> Back
                                </a>
                                <a id="printButton" class="btn btn-primary" href="<?php echo base_url() ?>anggota">
                                    <i class="fa fa-print"></i> Print
                                </a>
                                
                                <!-- <button id="printButton" class="btn btn-primary pull-right"><i class="fa fa-print"></i></button> -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        // Fungsi untuk menangani pencetakan ketika tombol cetak diklik
        $("#printButton").click(function() {
            window.print(); // Panggil fungsi window.print() untuk memicu pencetakan
        });
    });
</script>