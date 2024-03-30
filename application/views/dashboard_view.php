<div class="">
    <div class="page-title" style="padding: 8px">
        <div class="title_left">
            <h1 style="font-size: 24px;"><i class="fa fa-dashboard"></i> Dashboard</h1>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row top_tiles">
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-6">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-users"></i></div>
                <div class="count">
                    <?php echo $agtCount ?>
                </div>
                <h3>Anggota</h3>
                <p>Jumlah anggota terdaftar</p>
            </div>
        </div>
        <?php // if ($this->session->userdata('role') == 'superadmin') : ?>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <div class="tile-stats">
                    <div class="icon"><i class="fa fa-user"></i></div>
                    <div class="count">
                        <?php echo $ptgCount ?>
                    </div>
                    <h3>Petugas</h3>
                    <p>Jumlah petugas terdaftar</p>
                </div>
            </div>
            <!-- <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-6">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-list-alt"></i></div>
                <div class="count">
                    <?php echo $trnCount ?>
                </div>
                <h3>Peminjaman</h3>
                <p>Total jumlah donasi</p>
            </div>
        </div> -->
        <!-- <?php // else : ?>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <div class="tile-stats">
                    <div class="icon"><i class="fa fa-arrow-up"></i></div>
                    <div class="count">
                        <?php // echo $pnjCount ?>
                    </div>
                    <h3>Keuangan</h3>
                    <p>Total jumlah transaksi</p>
                </div>
            </div>
        <?php // endif; ?> -->
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-6">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-users"></i></div>
                <div class="count">

                    <?php
                    $jmlKasMasuk = $sumKasList[0]->d ?? 0;
                    echo number_format($jmlKasMasuk, 0, ',', '.');
                    ?>

                </div>
                <h3>Kas Masuk</h3>
                <p>Jumlah Kas Masuk</p>
            </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-6">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-book"></i></div>
                <div class="count">
                    <?php
                    $jmlKasKeluar = $sumKasList[0]->k ?? 0;
                    echo number_format($jmlKasKeluar, 0, ',', '.');
                    ?>

                </div>
                <h3>Kas Keluar</h3>
                <p>Jumlah Kas Keluar</p>
            </div>
        </div>

    </div>
    <div class="row">
        <!-- <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><i class="fa fa-list"></i>  DATA PAGURON</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <label>Nama </label>
                    <p>&emsp;&nbsp;
                        <?php // echo $this->db->get('perpus')->row('NAMA_P') ?>
                    </p>
                    <label>Alamat</label>
                    <p>&emsp;&nbsp;
                        <?php //echo $this->db->get('perpus')->row('ALAMAT_P') ?>
                    </p>
                    <label>Tentang</label>
                    <p>&emsp;&nbsp;
                        <?php //echo $this->db->get('perpus')->row('ABOUT') ?>
                    </p>
                </div>
            </div>
        </div> -->
        <div class="col-md-12 col-sm-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><i class="fa fa-flag"></i> Statistik Kas</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-5">
                            <?php
                            // $query1 = $this->db->select_sum('rp_masuk', 'rp_masuk')->get('kas')->result();
                            // if ($query1[0]->rp_masuk === null || $query1[0]->rp_masuk == 0) {
                            //     $rst1 = '0'; // Atau sesuaikan dengan nilai default yang diinginkan jika rp_masuk adalah null atau nol
                            // } else {
                            //     $rst1 = number_format($query1[0]->rp_masuk, 0, ',', '.');
                            // }
                            // $query2 = $this->db->select_sum('rp_keluar', 'rp_keluar')->get('kas')->result();
                            // if ($query2[0]->rp_keluar === null || $query1[0]->rp_masuk == 0) {
                            //     $rst1 = '0'; // Atau sesuaikan dengan nilai default yang diinginkan jika rp_masuk adalah null atau nol
                            // } else {
                            //     $rst1 = number_format($query1[0]->rp_masuk, 0, ',', '.');
                            // }
                            
                            // $rst2 = number_format($query2[0]->rp_keluar, 0, ',', '.'); // Format mata uang untuk rp_keluar

                            $jmlKasMasukFormat = number_format($jmlKasMasuk, 0, ',', '.'); // Format mata uang untuk min
                            $jmlKasKeluarFormat = number_format($jmlKasKeluar, 0, ',', '.'); // Format mata uang untuk min
                            
                            
                            $min = $jmlKasMasuk - $jmlKasKeluar;
                            $minFormatted = number_format($min, 0, ',', '.'); // Format mata uang untuk min
                            
                          //  $jmlKasMasuk = $KasMasukList[0]->d ?? 0;

                            ?>
                            <div style="padding-top: 23px; padding-left: 20px">

                                <?php echo '<h4 class="text-right">Kas Masuk Rp. <b>' . $jmlKasMasukFormat . '</b></h6>'; ?>
                                <?php echo '<h4 class="text-right">Kas Keluar Rp. <b>' . $jmlKasKeluarFormat . '</b></h6>'; ?>
                                <?php echo '<h4 class="text-right">Saldo Kas Rp. <b>' . $minFormatted . '</b></h6>'; ?>

                            </div>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <!-- <canvas id="bookgraph"></canvas> -->
                            <div id="bookgraph"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><i class="fa fa-users"></i>  Anggota <small>terbaru</small></h2>
                    <h2 class="pull-right"><small><a href="<?php echo base_url() ?>anggota">Lihat Selengkapnya >></a></small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ID</th>
                                <th>Nama Lengkap</th>
                                <th>Jenkel</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $agtNo = $agtCount;
                            foreach ($agtList as $agt) : ?>
                            <?php if ($agt->GENDER == 'L') {
                                    $g = 'Laki-laki';
                                } else {
                                    $g = 'Perempuan';
                                } ?>
                            <tr>
                                <th scope="row"><?php echo $agtNo; ?></th>
                                <td><?php echo $agt->ID_ANGGOTA ?></td>
                                <td><?php echo $agt->FULL_NAME ?></td>
                                <td><?php echo $g ?></td>
                            </tr>
                            <?php $agtNo--;
                            endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><i class="fa fa-book"></i>  Kas <small>Masuk</small></h2>
                    <h2 class="pull-right"><small><a href="<?php echo base_url() ?>kas">Lihat Selengkapnya >></a></small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>No.Reff</th>
                                <th>Tanggal</th>
                                <th>Nama Anggota</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $bkNo = $kasCount;
                            foreach ($kasList as $bk) : ?>
                            <tr>
                                <th scope="row"><?php echo $bkNo; ?></th>
                                <td><?php echo $bk->ID_KAS ?></td>
                                <td><?php echo $bk->TGL_KAS ?></td>
                                <td><?php echo $bk->FULL_NAME ?></td>
                                <td><?php echo number_format($bk->RP_MASUK, 0, ',', '.') ?></td>

                            </tr>
                            <?php $bkNo--;
                            endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="row">
        <?php if ($this->session->userdata('role') == 'superadmin') : ?>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><i class="fa fa-user"></i> Petugas <small>terbaru</small></h2>
                        <h2 class="pull-right"><small><a href="<?php echo base_url() ?>petugas">Lihat Selengkapnya >></a></small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ID</th>
                                    <th>Nama Lengkap</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $ptgNo = $ptgCount;
                                foreach ($ptgList as $ptg) : ?>
                                    <?php if ($ptg->ROLE == 'admin') {
                                        $r = 'Petugas';
                                    } else {
                                        $r = 'Admin';
                                    } ?>
                                    <tr>
                                        <th scope="row"><?php echo $ptgNo; ?></th>
                                        <td><?php echo $ptg->ID_ADMIN ?></td>
                                        <td><?php echo $ptg->FULLNAME ?></td>
                                        <td><?php echo $ptg->USERNAME ?></td>
                                        <td><?php echo $r ?></td>
                                    </tr>
                                <?php $ptgNo--;
                                endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><i class="fa fa-list-alt"></i> Transaksi<small>terbaru</small></h2>
                        <h2 class="pull-right"><small><a href="<?php echo base_url() ?>transaksi">Lihat Selengkapnya >></a></small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Tanggal</th>
                                    <th>Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $ct = $trnCount;
                                foreach ($trnList as $trn) : ?>
                                    <tr>
                                        <th scope="row"><?php echo $ct; ?></th>
                                        <td><?php echo $trn->ID_PINJAM ?></td>
                                        <td><?php echo $trn->FULL_NAME ?></td>
                                        <td><?php echo $trn->TGL_PINJAM ?></td>
                                        <td><?php echo $trn->JML_BUKU ?></td>
                                    </tr>
                                <?php $ct--;
                                endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div> -->
</div>


<script src="<?php echo base_url() ?>assets/vendors/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/highcharts.js"></script>
<script>
    $(function() {
        var chart;
        $(document).ready(function() {
            // Build the chart
            chart = new Highcharts.Chart({
                chart: {
                    renderTo: 'bookgraph',
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    width: null,
                    height: 300,
                    marginTop: 1
                },
                title: {
                    text: 'Grafik Saldo Kas'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage}%</b>',
                    percentageDecimals: 1
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: false
                        },
                        showInLegend: true
                    }
                },
                legend: {
                    align: 'center',
                    verticalAlign: 'bottom',
                    floating: true
                },
                series: [{
                    type: 'pie',
                    name: 'Presentase',
                    data: [
                        ['Masuk', <?php echo $jmlKasMasuk ?>],
                        ['Keluar', <?php echo $jmlKasKeluar ?>],
                    ]
                }]
            });
        });

    });
</script>