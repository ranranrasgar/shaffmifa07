<div class="">
    <div class="page-title" style="padding: 8px">
        <div class="title_left">
            <h1><i class="fa fa-users"></i>  Tambah Kegiatan</h1>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Masukkan data kegiatan</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <!-- Notif -->
                        <?php $announce = $this->session->userdata('announce') ?>
                        <?php if(!empty($announce)): ?>
                            <?php if($announce == 'Berhasil menyimpan data'): ?>
                            <div class="alert alert-success"><?php echo $announce; ?></div>
                            <?php else: ?>
                            <div class="alert alert-danger"><?php echo $announce; ?></div>
                            <?php endif; ?>
                        <?php endif; ?>
                            <form method="post" action="<?php echo base_url() ?>kegiatan/submit" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Kegiatan
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="NM_KEGIATAN" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jens Kegiatan
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="JNS_KEGIATAN" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Deskripsi Kegiatan
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea type="text" name="DESC_KEGIATAN" class="form-control col-md-7 col-xs-12"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mulai
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="date" name="TGL_MULAI" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Selesai
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="date" name="TGL_SELESAI" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Status
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control" name="STATUS">
                                            <option value="0">Baru</option>
                                            <option value="1">Pengajuan</option>
                                            <option value="1">Pending</option>
                                            <option value="1">Selesai</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Foto
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" name="foto" class="form-control col-md-7 col-xs-12" required>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <a class="btn btn-primary" href="<?php echo base_url('kegiatan') ?>">Kembali</a>
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
