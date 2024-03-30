<div class="">
    <div class="page-title" style="padding: 8px">
        <div class="title_left">
            <h1 style="font-size: 24px;"><i class="fa fa-users"></i> Edit Anggota</h1>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Perbarui data anggota</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <?php
                        $announce = $this->session->flashdata('announce');
                        if (!empty($announce)) {
                            if ($announce == 'Berhasil menyimpan data') {
                                echo '
                                        <div class="alert alert-success">
                                        ' . $announce . '
                                        </div>
                                    ';
                            } else {
                                echo '
                                        <div class="alert alert-danger">
                                        ' . $announce . '
                                        </div>
                                    ';
                            }
                        }
                        ?>
                        <form method="post" action="<?php echo base_url() ?>anggota/submitEdit" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                            <input type="hidden" readonly name="id" value="<?php echo $detail->ID_ANGGOTA ?>">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">NIK
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="nik" value="<?php echo $detail->NIK ?>" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><span style="color: red;">*</span> Nama Lengkap</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="nama_lengkap" value="<?php echo $detail->FULL_NAME ?>" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><span style="color: red;">*</span> Telepon</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="telp" value="<?php echo $detail->TELP ?>" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><span style="color: red;">*</span> Jenis Kelamin</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" name="gender">
                                        <option value="L" <?php echo ($detail->GENDER == 'L') ? 'selected' : ''; ?>>Laki-Laki</option>
                                        <option value="P" <?php echo ($detail->GENDER == 'P') ? 'selected' : ''; ?>>Perempuan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tempat Lahir
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="tmp_lahir" value="<?php echo $detail->TMP_LAHIR ?>" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal Lahir
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="date" name="tgl_lahir" value="<?php echo $detail->TGL_LAHIR ?>" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Alamat Sesuai KTP
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="alamat" value="<?php echo $detail->ALAMAT ?>" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Alamat Domisili
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="alamat_domisili" value="<?php echo $detail->ALAMAT_DOMISILI ?>" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pendidikan
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="pendidikan" value="<?php echo $detail->PENDIDIKAN ?>" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pekerjaan
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="pekerjaan" value="<?php echo $detail->PEKERJAAN ?>" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Bidang Usaha
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="bidang_usaha" value="<?php echo $detail->BDG_USAHA ?>" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <a class="btn btn-primary" href="<?php echo base_url() ?>anggota">
                                        <i class="fa fa-arrow-left"></i> Back
                                    </a>
                                    <input type="submit" class="btn btn-primary" name="submit" value="Simpan">


                                    <!-- <input type="submit" class="btn btn-success" name="submit" value="Simpan"> -->

                                    <!-- <button type="submit" class="btn btn-primary" name="submit">
                                        <i class="fa fa-save"></i> Simpan
                                    </button> -->

                                    <!-- <button id="printButton" class="btn btn-primary pull-right"><i class="fa fa-print"></i></button> -->

                                </div>
                            </div>

                            <!-- <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <a class="btn btn-primary" href="<?php echo base_url() ?>anggota">Kembali</a>
                                    <input type="submit" class="btn btn-success" name="submit" value="Simpan">
                                </div>
                            </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>