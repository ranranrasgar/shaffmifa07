<div class="">
    <div class="page-title" style="padding: 8px">
        <div class="title_left">
            <h1 style="font-size: 24px;"><i class="fa fa-bell"></i> Pengumuman</h1>
        </div>
    </div>
    <?php if ($this->session->userdata('role') == 'superadmin') : ?>
        <a href="<?php echo base_url() ?>notification/add" class="btn btn-primary pull-right"><i class="fa fa-plus"></i></a>
    <?php endif; ?>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <!-- <div class="x_title">
                    <h2>Notifikasi</h2>
                    <div class="clearfix"></div>
                </div> -->
                <div class="x_content">
                    <?php if ($total == 0) : ?>
                        <div class="alert alert-danger">Tidak ada data</div>
                    <?php else : ?>
                        <?php $count = 0; foreach ($list as $ntf) : ?>
                            <!-- <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class=" col-md-12 col-lg-12 col-xs-12">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <?php $tgl = date_create($ntf->DT);
                                            echo date_format($tgl, "D, d M Y"); ?>
                                        </div>
                                        <div class="panel-body">
                                            <b><?php echo $ntf->JUDUL ?>.</b> <?php echo $ntf->ISI ?>
                                            <button class="btn btn-danger btn-xs pull-right" onclick="del('<?php echo $ntf->ID_NOTIF ?>')">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </div>
                                        <div class="panel-footer">
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="chat-bubble">
                                <img src="<?php echo base_url() ?>assets/images/upload/profile/<?php echo $ntf->PHOTO ?>" alt="Profil" class="profile-img">
                                <div class="chat-content">
                                    <div class="chat-header">
                                        <?php $tgl = date_create($ntf->DT);
                                        echo date_format($tgl, "D, d M Y"); ?>
                                    </div>
                                    <div class="chat-body">
                                        <b><?php echo $ntf->JUDUL ?>.</b> <?php echo $ntf->ISI ?>
                                    </div>
                                    <div class="chat-footer">
                                        <button class="btn btn-danger btn-xs" onclick="del('<?php echo $ntf->ID_NOTIF ?>')">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div> -->
                            <?php
                            // Tentukan kelas CSS untuk setiap baris
                            $rowClass = ($count % 2 == 0) ? 'even-row' : 'odd-row';
                            $count++;
                            ?>
                            <div class="chat-bubble">
                                <img src="<?php echo base_url() ?>assets/images/upload/profile/<?php echo $ntf->PHOTO ?>" alt="Profil" class="profile-img">
                                <div class="chat-content <?php echo $rowClass; ?>">
                                    <div class="chat-header">
                                        <?php $tgl = date_create($ntf->DT);
                                        echo date_format($tgl, "D, d M Y"); ?>
                                    </div>
                                    <div class="chat-body">
                                        <b><?php echo $ntf->JUDUL ?>.</b> <?php echo $ntf->ISI ?>
                                    </div>
                                    <div class="chat-footer">
                                        <button class="btn btn-danger btn-xs" onclick="del('<?php echo $ntf->ID_NOTIF ?>')">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function del(id) {
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
                window.location.href = "<?php echo base_url() ?>notification/delete?rcgn=" + id;
            });
    }
</script>

<script type="text/javascript">
    // Function to generate random color
    function generateRandomColor() {
        var letters = '0123456789ABCDEF';
        var color = '#';
        for (var i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }

    // Set background color for chat bubble
    document.addEventListener("DOMContentLoaded", function() {
        var chatBubble = document.getElementById("chatBubble");
        chatBubble.style.backgroundColor = generateRandomColor();
    });
</script>