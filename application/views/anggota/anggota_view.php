<div class="">
    <div class="page-title" style="padding: 8px">
        <div class="title_left">
            <h1 style="font-size: 24px;"><i class="fa fa-users"></i> Anggota</h1>
        </div>
    </div>

    <?php if ($this->session->userdata('role') == 'superadmin') {
        echo '<button id="printButton" class="btn btn-primary pull-right"><i class="fa fa-print"></i></button>';
        //1 echo ' <a href="cetak_anggota.php" target="_blank">Cetak Data Anggota</a>';
    } ?>

    <?php if ($this->session->userdata('role') == 'superadmin') {

        echo '<a href="' . base_url() . 'anggota/add" class="btn btn-primary pull-right"><i class="fa fa-plus"></i></a>';
    } ?>

    <div class="clearfix"></div>
    <!-- <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label for="filterPekerjaan">Filter Pekerjaan:</label>
                <select class="form-control" id="filterPekerjaan">
                    <option value="">Semua Pekerjaan</option>
                    <?php foreach ($daftarPekerjaan as $pekerjaan) : ?>
                        <option value="<?php echo $pekerjaan->PEKERJAAN ?>">
                            <?php echo $pekerjaan->PEKERJAAN ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="filterPekerjaan">Filter Pekerjaan:</label>
                <select class="form-control" id="filterPekerjaan">
                    <option value="">Semua Pekerjaan</option>
                    <?php foreach ($daftarPekerjaan as $pekerjaan) : ?>
                        <option value="<?php echo $pekerjaan->PEKERJAAN ?>">
                            <?php echo $pekerjaan->PEKERJAAN ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="filterPekerjaan">Filter Pekerjaan:</label>
                <select class="form-control" id="filterPekerjaan">
                    <option value="">Semua Pekerjaan</option>
                    <?php foreach ($daftarPekerjaan as $pekerjaan) : ?>
                        <option value="<?php echo $pekerjaan->PEKERJAAN ?>">
                            <?php echo $pekerjaan->PEKERJAAN ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
    </div> -->
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_content">


                    <div class="row">

                        <div class="table-responsive-sm">
                            <table id="datatable" class="table table-sm table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <!-- <th>Alamat</th> -->
                                        <th>No.Telp/Wa</th>
                                        <th>Pekerjaan</th>
                                        <!-- <th>Bidang Usaha</th> -->
                                        <th>L/P</th>
                                        <?php if ($this->session->userdata('role') == 'superadmin') {
                                            echo '<th>Action</th>';
                                        } ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($this->db->count_all('anggota') == 0) {
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
                                        foreach ($list as $listAnggota) {
                                            $gen = '';
                                            if ($listAnggota->GENDER == 'L') {
                                                $gen = 'L';
                                            } else {
                                                $gen = 'P';
                                            }
                                    ?>
                                            <tr>
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $listAnggota->ID_ANGGOTA ?></td>
                                                <td>
                                                    <a href="<?php echo base_url() ?>anggota/detail?idtf=<?php echo $listAnggota->ID_ANGGOTA ?>"><?php echo $listAnggota->FULL_NAME ?></a>


                                                </td>

                                                <!-- <td><?php echo $listAnggota->ALAMAT ?></td> -->
                                                <td><?php echo $listAnggota->TELP ?></td>
                                                <td><?php echo $listAnggota->PEKERJAAN ?></td>
                                                <!-- <td><?php echo $listAnggota->BDG_USAHA ?></td> -->
                                                <td>
                                                    <?php if ($gen == 'L') : ?>
                                                        <i class="fas fa-male text-primary" title="Laki-laki"></i> Laki-Laki
                                                    <?php elseif ($gen == 'P') : ?>
                                                        <i class="fas fa-female text-danger" title="Perempuan"></i> Perempuan
                                                    <?php else : ?>
                                                        <?php echo $gen; ?>
                                                    <?php endif; ?>
                                                </td>

                                                <?php if ($this->session->userdata('role') == 'superadmin') : ?>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton_<?php echo $listAnggota->ID_ANGGOTA ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fa fa-cog"></i> <span class="caret"></span>
                                                            </button>
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton_<?php echo $listAnggota->ID_ANGGOTA ?>">
                                                                <li><a class="dropdown-item" href="<?php echo base_url() ?>anggota/detail?idtf=<?php echo $listAnggota->ID_ANGGOTA ?>">View</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="<?php echo base_url() ?>anggota/edit?idtf=<?php echo $listAnggota->ID_ANGGOTA ?>">Edit</a>
                                                                </li>
                                                                <li><a class="dropdown-item" onclick="sweets('<?php echo $listAnggota->ID_ANGGOTA ?>')" href="#">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                <?php endif; ?>

                                                <!-- <?php if ($this->session->userdata('role') == 'superadmin') : ?>
                                                <td>
                                                    <a href="<?php echo base_url() ?>anggota/detail?idtf=<?php echo $listAnggota->ID_ANGGOTA ?>" class="btn btn-info btn-xs">
                                                        <i class="fa fa-list"> </i>
                                                    </a>
                                                    <a href="<?php echo base_url() ?>anggota/edit?idtf=<?php echo $listAnggota->ID_ANGGOTA ?>" class="btn btn-success btn-xs">
                                                        <i class="fa fa-edit"> </i>
                                                    </a>
                                                    <a onclick="sweets('<?php echo $listAnggota->ID_ANGGOTA ?>')" class="btn btn-danger btn-xs">
                                                        <i class="fa fa-trash"> </i>
                                                    </a>
                                                </td>
                                            <?php endif; ?> -->
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
                window.location.href = "<?php echo base_url() ?>anggota/delete?rcgn=" + id;
            });
    }
</script>

<script>
    $(document).ready(function() {
        // Fungsi untuk menangani pencetakan ketika tombol cetak diklik
        $("#printButton").click(function() {
            window.print(); // Panggil fungsi window.print() untuk memicu pencetakan
        });
    });
</script>