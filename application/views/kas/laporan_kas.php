<div class="">
    <div class="page-title" style="padding: 8px">
        <div class="title_left">
            <h1 style="font-size: 24px;"><i class="fa fa-users"></i> Buku Kas</h1>
        </div>
    </div>
    <?php if ($this->session->userdata('role') == 'superadmin') {
        echo '<a href="' . base_url() . 'kas/addKaskeluar" class="btn btn-primary pull-right"><i class="fa fa-minus"></i></a>';
        echo '<a href="' . base_url() . 'kas/addKasmasuk" class="btn btn-primary pull-right"><i class="fa fa-plus"></i></a>';
    } ?>

    <div class="clearfix"></div>

    <!-- Filter Tanggal -->
    <div class="row" style="margin-bottom: 10px;">
        <div class="col-md-6">
            <label for="tanggal_mulai">Tanggal Mulai:</label>
            <input type="date" id="tanggal_mulai" name="tanggal_mulai" class="form-control">
        </div>
        <div class="col-md-6">
            <label for="tanggal_selesai">Tanggal Selesai:</label>
            <input type="date" id="tanggal_selesai" name="tanggal_selesai" class="form-control">
        </div>
    </div>

    <!-- End Filter Tanggal -->
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Buku <small>Kas</small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <div class="row">
                        <table id="datatable" class="table table-sm table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th data-orderable="false">No</th>
                                    <th data-orderable="false">Tanggal</th>
                                    <th data-orderable="false">No.Kwitansi</th>
                                    <th data-orderable="false">Nama Anggota</th>
                                    <th data-orderable="false">Kas Masuk</th>
                                    <th data-orderable="false">Kas Keluar</th>
                                    <th data-orderable="false">Saldo</th>
                                    <th data-orderable="false">Keterangan</th>
                                    <th data-orderable="false">Action</th>
                                    <!-- <?php if ($this->session->userdata('role') == 'superadmin') {
                                                echo '<th>Action</th>';
                                            } ?> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $jmlMasuk = 0;
                                $jmlKeluar = 0;
                                $no = 1;

                                if ($total == 0) {
                                    echo '
                                        <tr>
                                            <td colspan="12">
                                            <div class="alert alert-warning" role="alert">
                                            Tidak ada data ' . $title . ', <a href="' . base_url() . 'kas/addKasmasuk' . '" class="alert-link">Entry Kas Masuk</a>.
                                                </div>
                                            </td>
                                        </tr>
                                        ';
                                } else {

                                    foreach ($list as $listKas) { ?>
                                <tr>
                                    <td><?php echo $no ?></td>
                                    <td><?php echo date('d/m/Y', strtotime($listKas->TGL_KAS)); ?></td>
                                    <td><a
                                            href="<?php echo base_url() ?>kas/detail?idtf=<?php echo $listKas->ID_KAS ?>"><?php echo $listKas->ID_KAS ?></a>
                                    </td>
                                    <td><?php echo $listKas->FULL_NAME ?></td>
                                    <td style="text-align: right;">
                                        <?php echo number_format($listKas->RP_MASUK, 0, ',', '.') ?></td>
                                    <td style="text-align: right;">
                                        <?php echo number_format($listKas->RP_KELUAR, 0, ',', '.') ?></td>
                                    <td style="text-align: right;">
                                        <?php echo number_format($listKas->Saldo, 0, ',', '.') ?></td>
                                    <td><?php echo $listKas->KETERANGAN ?></td>

                                    <?php if ($this->session->userdata('role') == 'superadmin') : ?>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button"
                                                data-toggle="dropdown">
                                                <i class="fa fa-gear"></i><span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a
                                                        href="<?php echo base_url() ?>kas/detail?idtf=<?php echo $listKas->ID_KAS ?>">Detail</a>
                                                </li>
                                                <li><a
                                                        href="<?php echo base_url() ?>kas/edit?idtf=<?php echo $listKas->ID_KAS ?>">Edit</a>
                                                </li>
                                                <li><a onclick="sweets('<?php echo $listKas->ID_KAS ?>')">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- <a href="<?php //echo //base_url() 
                                                                    ?>kas/detail?idtf=<?php //echo $listKas->ID_KAS 
                                                                                                                ?>" class="btn btn-info btn-xs">
                                                        <i class="fa fa-list"> </i>
                                                    </a>
                                                    <a href="<?php //echo //base_url() 
                                                                ?>kas/edit?idtf=<?php // echo $listKas->ID_KAS 
                                                                                                        ?>" class="btn btn-success btn-xs">
                                                        <i class="fa fa-edit"> </i>
                                                    </a>
                                                    <a onclick="sweets('<?php //echo $listKas->ID_KAS 
                                                                        ?>')" class="btn btn-danger btn-xs">
                                                        <i class="fa fa-trash"> </i>
                                                    </a> -->
                                    </td>
                                    <?php else : ?>
                                    <td>
                                        <a href="<?php echo base_url() ?>kas/detail?idtf=<?php echo $listKas->ID_KAS ?>"
                                            class="btn btn-info btn-xs">
                                            <i class="fa fa-list"> </i>
                                        </a>
                                    </td>
                                    <?php endif; ?>
                                </tr>
                                <?php
                                        $no++;
                                        $jmlMasuk = $jmlMasuk + $listKas->RP_MASUK;
                                        $jmlKeluar = $jmlKeluar + $listKas->RP_KELUAR;
                                    } ?>

                                <?php

                                }
                                ?>

                            </tbody>
                            <?php if ($jmlMasuk > 0) { ?>
                            <tfoot>

                                <tr>
                                    <td colspan="4" style="text-align: right;">Jumlah</td>
                                    <td style="text-align: right;"><?php echo number_format($jmlMasuk, 0, ',', '.') ?>
                                    </td>
                                    <td style="text-align: right;"><?php echo number_format($jmlKeluar, 0, ',', '.') ?>
                                    </td>
                                    <td style="text-align: right;">
                                        <?php echo number_format($jmlMasuk - $jmlKeluar, 0, ',', '.') ?></td>
                                    <td colspan="2"></td>
                                </tr>
                            </tfoot>
                            <?php } ?>
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
            window.location.href = "<?php echo base_url() ?>kas/delete?rcgn=" + id;
        });
}
</script>

<script>
// Fungsi untuk mengatur nilai default pada input tanggal mulai dan tanggal selesai
function setDefaultDate() {
    // Mendapatkan nilai dari Local Storage jika tersedia
    var defaultStartDate = localStorage.getItem('defaultStartDate');
    var defaultEndDate = localStorage.getItem('defaultEndDate');

    // Mendapatkan elemen input tanggal mulai dan tanggal selesai
    var inputTanggalMulai = document.getElementById('tanggal_mulai');
    var inputTanggalSelesai = document.getElementById('tanggal_selesai');

    // Mengatur nilai default pada input tanggal mulai dan tanggal selesai
    if (defaultStartDate !== null) {
        inputTanggalMulai.value = defaultStartDate;
    }
    if (defaultEndDate !== null) {
        inputTanggalSelesai.value = defaultEndDate;
    }
}

// Panggil fungsi setDefaultDate saat halaman dimuat
document.addEventListener('DOMContentLoaded', setDefaultDate);

// Fungsi untuk menangani perubahan nilai pada input tanggal
function filterByDate() {
    // Mendapatkan nilai dari input tanggal mulai dan tanggal selesai
    var tanggalMulai = document.getElementById('tanggal_mulai').value;
    var tanggalSelesai = document.getElementById('tanggal_selesai').value;

    // Menyimpan nilai terakhir pada Local Storage
    localStorage.setItem('defaultStartDate', tanggalMulai);
    localStorage.setItem('defaultEndDate', tanggalSelesai);

    // Mengubah URL dengan menambahkan parameter tanggal mulai dan tanggal selesai
    var url = '<?php echo base_url("kas/index"); ?>';
    // Periksa apakah ada parameter query string di URL
    if (url.indexOf('?') !== -1) {
        url += '&tanggal_mulai=' + tanggalMulai + '&tanggal_selesai=' + tanggalSelesai;
    } else {
        url += '?tanggal_mulai=' + tanggalMulai + '&tanggal_selesai=' + tanggalSelesai;
    }
    window.location.href = url;
}

// Menambahkan event listener untuk memanggil fungsi filterByDate() saat nilai input tanggal berubah
document.getElementById('tanggal_mulai').addEventListener('change', filterByDate);
document.getElementById('tanggal_selesai').addEventListener('change', filterByDate);
</script>

<!-- <script>
    // Variabel global untuk menyimpan nilai awal tanggal mulai dan tanggal selesai
    var defaultStartDate = null;
    var defaultEndDate = null;

    // Fungsi untuk mengatur nilai default pada input tanggal mulai dan tanggal selesai
    function setDefaultDate() {
        // Jika variabel global belum ditetapkan, atur nilainya
        if (defaultStartDate === null || defaultEndDate === null) {
            // Mendapatkan tanggal hari ini
            var today = new Date();

            // Mengatur nilai default pada variabel global
            defaultStartDate = formatDate(today);
            defaultEndDate = formatDate(today);
        }

        // Mendapatkan elemen input tanggal mulai dan tanggal selesai
        var inputTanggalMulai = document.getElementById('tanggal_mulai');
        var inputTanggalSelesai = document.getElementById('tanggal_selesai');

        // Mengatur nilai default pada input tanggal mulai dan tanggal selesai
        inputTanggalMulai.value = defaultStartDate;
        inputTanggalSelesai.value = defaultEndDate;
    }

    // Fungsi untuk mengubah format tanggal menjadi 'YYYY-MM-DD'
    function formatDate(date) {
        var year = date.getFullYear();
        var month = (date.getMonth() + 1).toString().padStart(2, '0');
        var day = date.getDate().toString().padStart(2, '0');
        return year + '-' + month + '-' + day;
    }

    // Panggil fungsi setDefaultDate saat halaman dimuat
    document.addEventListener('DOMContentLoaded', setDefaultDate);

    // Fungsi untuk menangani perubahan nilai pada input tanggal
    function filterByDate() {
        // Mendapatkan nilai dari input tanggal mulai dan tanggal selesai
        var tanggalMulai = document.getElementById('tanggal_mulai').value;
        var tanggalSelesai = document.getElementById('tanggal_selesai').value;

        // Mengubah URL dengan menambahkan parameter tanggal mulai dan tanggal selesai
        var url = '<?php //echo base_url("kas/index"); 
                    ?>';
        // Periksa apakah ada parameter query string di URL
        if (url.indexOf('?') !== -1) {
            url += '&tanggal_mulai=' + tanggalMulai + '&tanggal_selesai=' + tanggalSelesai;
        } else {
            url += '?tanggal_mulai=' + tanggalMulai + '&tanggal_selesai=' + tanggalSelesai;
        }
        window.location.href = url;
    }

    // Menambahkan event listener untuk memanggil fungsi filterByDate() saat nilai input tanggal berubah
    document.getElementById('tanggal_mulai').addEventListener('change', filterByDate);
    document.getElementById('tanggal_selesai').addEventListener('change', filterByDate);
</script> -->

<!-- <script>
    // Fungsi untuk mengatur nilai default pada input tanggal mulai dan tanggal selesai
    function setDefaultDate() {
        // Mendapatkan elemen input tanggal mulai dan tanggal selesai
        var inputTanggalMulai = document.getElementById('tanggal_mulai');
        var inputTanggalSelesai = document.getElementById('tanggal_selesai');

        // Mendapatkan tanggal hari ini
        var today = new Date();

        // Mengatur nilai default pada input tanggal mulai dan tanggal selesai
        inputTanggalMulai.value = formatDate(today);
        inputTanggalSelesai.value = formatDate(today);
    }

    // Fungsi untuk mengubah format tanggal menjadi 'YYYY-MM-DD'
    function formatDate(date) {
        var year = date.getFullYear();
        var month = (date.getMonth() + 1).toString().padStart(2, '0');
        var day = date.getDate().toString().padStart(2, '0');
        return year + '-' + month + '-' + day;
    }

    // Panggil fungsi setDefaultDate saat halaman dimuat
    document.addEventListener('DOMContentLoaded', setDefaultDate);

    // Fungsi untuk menangani perubahan nilai pada input tanggal
    function filterByDate() {
        // Mendapatkan nilai dari input tanggal mulai dan tanggal selesai
        var tanggalMulai = document.getElementById('tanggal_mulai').value;
        var tanggalSelesai = document.getElementById('tanggal_selesai').value;

        // Mengubah URL dengan menambahkan parameter tanggal mulai dan tanggal selesai
        var url = '<?php //echo base_url("kas/index"); 
                    ?>';
        // Periksa apakah ada parameter query string di URL
        if (url.indexOf('?') !== -1) {
            url += '&tanggal_mulai=' + tanggalMulai + '&tanggal_selesai=' + tanggalSelesai;
        } else {
            url += '?tanggal_mulai=' + tanggalMulai + '&tanggal_selesai=' + tanggalSelesai;
        }
        window.location.href = url;
    }

    // Menambahkan event listener untuk memanggil fungsi filterByDate() saat nilai input tanggal berubah
    document.getElementById('tanggal_mulai').addEventListener('change', filterByDate);
    document.getElementById('tanggal_selesai').addEventListener('change', filterByDate);
</script> -->


<!-- <script>
    // Fungsi untuk menangani perubahan nilai pada input tanggal
    function filterByDate() {
        // Mendapatkan nilai dari input tanggal mulai dan tanggal selesai
        var tanggalMulai = document.getElementById('tanggal_mulai').value;
        var tanggalSelesai = document.getElementById('tanggal_selesai').value;

        // Mengubah URL dengan menambahkan parameter tanggal mulai dan tanggal selesai
        var url = '<?php //echo base_url("kas/index"); 
                    ?>';
        // Periksa apakah ada parameter query string di URL
        if (url.indexOf('?') !== -1) {
            url += '&tanggal_mulai=' + tanggalMulai + '&tanggal_selesai=' + tanggalSelesai;
        } else {
            url += '?tanggal_mulai=' + tanggalMulai + '&tanggal_selesai=' + tanggalSelesai;
        }
        window.location.href = url;
    }

    // Menambahkan event listener untuk memanggil fungsi filterByDate() saat nilai input tanggal berubah
    document.getElementById('tanggal_mulai').addEventListener('change', filterByDate);
    document.getElementById('tanggal_selesai').addEventListener('change', filterByDate);
</script> -->