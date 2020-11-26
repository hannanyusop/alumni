
<!DOCTYPE html>
<html lang="zxx" class="js">

<?php include('include/head.php') ?>

<body class="nk-body npc-invest bg-lighter ">
<div class="nk-app-root">

    <div class="nk-wrap ">

        <?php include('include/topbar.php') ?>

        <div class="nk-content nk-content-lg nk-content-fluid">
            <div class="container-xl wide-lg">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                            <div class="nk-block">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title">Maklumat Peribadi</h5>
                                        <div class="nk-block-des">
                                            <p>Sila pastikan semua maklumat yang bertanda <b class="font-weight-bold text-danger">*</b> diisi.</p>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="card card-bordered">
                                    <div class="nk-data data-list">
                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                            <div class="data-col">
                                                <span class="data-label">Gambar<b class="font-weight-bold text-danger"> *</b></span>
                                                <span class="data-value text-soft">
                                                    <img src="../images/avatar/b-sm.jpg" class="img-fluid">
                                                </span>
                                            </div>
                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                        </div>
                                        <div class="data-item">
                                            <div class="data-col">
                                                <span class="data-label">Nama Penuh</span>
                                                <span class="data-value"><?= $user['name'] ?></span>
                                            </div>
                                            <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                                        </div>
                                        <div class="data-item">
                                            <div class="data-col">
                                                <span class="data-label">No. Kad Pengenalan</span>
                                                <span class="data-value"><?= $user['ic_no'] ?></span>
                                            </div>
                                            <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                                        </div>
                                        <div class="data-item">
                                            <div class="data-col">
                                                <span class="data-label">No. Matrik</span>
                                                <span class="data-value">20DIP19801</span>
                                            </div>
                                            <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                                        </div>
                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                            <div class="data-col">
                                                <span class="data-label">Kaum<b class="font-weight-bold text-danger"> *</b></span>
                                                <span class="data-value">KEDAYAN</span>
                                            </div>
                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                        </div>
                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                            <div class="data-col">
                                                <span class="data-label">Agama<b class="font-weight-bold text-danger"> *</b></span>
                                                <span class="data-value">ISLAM</span>
                                            </div>
                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                        </div>
                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                            <div class="data-col">
                                                <span class="data-label">Tarikh Lahir<b class="font-weight-bold text-danger"> *</b></span>
                                                <span class="data-value">16 MAY 1996</span>
                                            </div>
                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                        </div>
                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                            <div class="data-col">
                                                <span class="data-label">Warganegara<b class="font-weight-bold text-danger"> *</b></span>
                                                <span class="data-value">MALAYSIA</span>
                                            </div>
                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                        </div>
                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                            <div class="data-col">
                                                <span class="data-label">Alamat Tetap<b class="font-weight-bold text-danger"> *</b></span>
                                                <span class="data-value">
                                                    POX 349, KAMPUNG PAHLAWAN, JALAN PANDARUAN, 98700 LIMBANG, SARAWAK
                                                </span>
                                            </div>
                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                        </div>
                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                            <div class="data-col">
                                                <span class="data-label">No. Telefon (R)<b class="font-weight-bold text-danger"> *</b></span>
                                                <span class="data-value text-soft">-TIADA-</span>
                                            </div>
                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                        </div>
                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                            <div class="data-col">
                                                <span class="data-label">No. Telefon (Tel Bimbit)<b class="font-weight-bold text-danger"> *</b></span>
                                                <span class="data-value text-soft">-TIADA-</span>
                                            </div>
                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                        </div>
                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                            <div class="data-col">
                                                <span class="data-label">Email<b class="font-weight-bold text-danger"> *</b></span>
                                                <span class="data-value text-soft">-TIADA-</span>
                                            </div>
                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                        </div>
                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                            <div class="data-col">
                                                <span class="data-label">CV/Resume</span>
                                                <span class="data-value text-soft">-TIADA-</span>
                                            </div>
                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                        </div>
                                    </div><!-- .nk-data -->
                                </div>
                            </div><!-- .nk-block -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content @e -->
        <!-- footer @s -->
        <?php include('include/footer.php'); ?>
        <!-- footer @e -->
    </div>
    <!-- wrap @e -->
<!-- app-root @e -->
<!-- JavaScript -->
</body>

</html>