<div class="">
    <div class="page-title" style="padding: 8px">
        <div class="title_left">
            <h1   style="font-size: 24px;"><i class="fa fa-users"></i> Tambah Anggota</h1>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Masukkan data anggota</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <!-- Notif -->
                        <?php $announce = $this->session->userdata('announce') ?>
                        <?php if (!empty($announce)) : ?>
                            <?php if ($announce == 'Berhasil menyimpan data') : ?>
                                <div class="alert alert-success"><?php echo $announce; ?></div>
                            <?php else : ?>
                                <div class="alert alert-danger"><?php echo $announce; ?></div>
                            <?php endif; ?>
                        <?php endif; ?>

                        <form method="post" action="<?php echo base_url() ?>anggota/submit" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ID AGT
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="kode" class="form-control col-md-7 col-xs-12" value="<?php echo $kode ?>" readonly="readonly">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">NIK
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="nik" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><span style="color: red;">*</span> Nama Lengkap</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="nama_lengkap" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><span style="color: red;">*</span> Telepon</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="number" name="telp" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            
                            <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><span style="color: red;">*</span> Jenis Kelamin</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" name="gender">
                                        <option value="L">Laki-Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tempat Lahir
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="tmp_lahir" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal Lahir
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="tgl_lahir" id="single_cal1" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Alamat Sesuai KTP
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea type="text" name="alamat" class="form-control col-md-7 col-xs-12"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Alamat Domisili
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea type="text" name="alamat_domisili" class="form-control col-md-7 col-xs-12"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pendidikan
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="pendidikan" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pekerjaan
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="pekerjaan" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Bidang Usaha
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="bidang_usaha" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Foto
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="file" name="foto" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <a class="btn btn-primary" href="<?php echo base_url('anggota') ?>">Kembali</a>
                                    <button class="btn btn-primary" type="reset">Reset</button>
                                    <input type="submit" class="btn btn-success" name="t" value="Simpan">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>