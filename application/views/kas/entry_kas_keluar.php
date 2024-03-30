<div class="">
    <div class="page-title" style="padding: 8px">
        <div class="title_left">
            <h1 style="font-size: 24px;"><i class="fa fa-arrow-up"></i> Kas Keluar</h1>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Masukkan data kas keluar</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <!-- Notif -->
                    <?php $announce = $this->session->userdata('announce') ?>
                    <?php if (!empty($announce)) : ?>
                        <?php if ($announce == 'Berhasil menyimpan data') : ?>
                            <div class="alert alert-success fade in">
                                <?php echo $announce; ?>
                            </div>
                        <?php else : ?>
                            <div class="alert alert-danger">
                                <?php echo $announce; ?>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                    <!-- <form method="post" action="<?php echo base_url(); ?>kas/submitKasKeluar" role="form" enctype="multipart/form-data"> -->
                    <form method="post" action="<?php echo base_url(); ?>kas/submitKasKeluar" role="form" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">No. Kwitansi</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="ID_KAS" class="form-control col-md-7 col-xs-12" value="<?php echo $kode ?>" readonly="readonly">
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="date" name="TGL_KAS" id="TGL_KAS" class="form-control">
                                </div>
                            </div>
                             -->
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="date" name="TGL_KAS" id="TGL_KAS" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ID Anggota</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" id="slcAgta" name="slcAgta">
                                        <option value="">Pilih ID Anggota</option>
                                        <?php foreach ($anggota as $agt) : ?>
                                            <option value="<?php echo $agt->ID_ANGGOTA ?>"><?php echo $agt->ID_ANGGOTA . " - " . $agt->FULL_NAME ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <!-- <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ID Anggota</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" id="slcAgta" name="slcAgta">
                                        <option value="">Pilih ID Anggota</option>
                                        <?php foreach ($anggota as $agt) : ?>
                                            <option><?php echo $agt->ID_ANGGOTA ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div> -->
                            <!-- <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Anggota</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="tbNama" id="tbNama" class="form-control" placeholder="Pilih Kolom ID Anggota" readonly="readonly">
                                </div>
                            </div> -->
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jumlah Rp.</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="number" id="RP_KELUAR" name="RP_KELUAR" class="form-control" min="0" step="0.01" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Keterangan</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <!-- <input type="text" name="tbMemo" class="form-control"> -->
                                    <textarea id="KETERANGAN" name="KETERANGAN" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Petugas</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input readonly="readonly" name="tbPetugas" class="form-control" value="<?php echo $petugas ?>">
                                </div>
                            </div>

                            <hr />
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url() ?>assets/vendors/jquery/dist/jquery.min.js"></script>
<!-- <script type="text/javascript">
    $(function() {
        $("#slcAgta").change(function() {
            var agt = $(this).val();
            $.ajax({
                url: "<?php echo base_url() ?>kas/searchAgtName",
                type: "POST",
                data: {
                    "id": agt
                },
                cache: false,
                success: function(huh) {
                    $("#tbNama").val(huh);
                }
            })
        })
    })
</script> -->

<script>
    // Ambil elemen input tanggal
    var inputTanggal = document.getElementById('TGL_KAS');

    // Dapatkan tanggal hari ini dalam format yyyy-MM-dd
    var today = new Date().toISOString().slice(0, 10);

    // Set nilai input tanggal dengan tanggal hari ini
    inputTanggal.value = today;
</script>