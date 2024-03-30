<div class="">
    <div class="page-title" style="padding: 8px">
        <div class="title_left">
            <h1><i class="fa fa-users"></i>  Edit Kegiatan</h1>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Perbarui data kegiatan</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <?php
                            $announce = $this->session->flashdata('announce');
                            if(!empty($announce)){
                                if($announce == 'Berhasil menyimpan data'){
                                    echo '
                                        <div class="alert alert-success">
                                        '.$announce.'
                                        </div>
                                    ';
                                }else{
                                    echo '
                                        <div class="alert alert-danger">
                                        '.$announce.'
                                        </div>
                                    ';
                                }
                            }
                        ?>
                            <form method="post" action="<?php echo base_url() ?>kegiatan/submitEdit" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                                <input type="hidden" readonly name="id" value="<?php echo $detail->ID_KEGIATAN ?>">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Kegiatan
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="NM_KEGIATAN" value="<?php echo $detail->NM_KEGIATAN ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jenis Kegiatan
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="JNS_KEGIATAN" value="<?php echo $detail->JNS_KEGIATAN ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Deskripsi Kegiatan
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="DESC_KEGIATAN" value="<?php echo $detail->DESC_KEGIATAN ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mulai
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="date" name="TGL_MULAI" value="<?php echo $detail->TGL_MULAI ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Selesai
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="date" name="TGL_SELESAI" value="<?php echo $detail->TGL_SELESAI ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Anggaran Ep.
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="number" name="RP_ANGGARAN" value="<?php echo $detail->RP_ANGGARAN ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Foto
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" name="fotoedit" class="form-control col-md-7 col-xs-12" required>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <a class="btn btn-primary" href="<?php echo base_url() ?>kegiatan">Kembali</a>
                                        <input type="submit" class="btn btn-success" name="submit" value="Simpan">
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
