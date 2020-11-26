<!DOCTYPE html>
<html lang="eb" class="js">

<?php require "include/header.php" ?>

<body class="nk-body npc-subscription has-aside ui-clean ">
<div class="nk-app-root">
    <!-- main @s -->
    <div class="nk-main ">
        <!-- wrap @s -->
        <div class="nk-wrap ">
            <?php require "include/topbar.php" ?>
            <div class="nk-content ">
                <div class="container wide-xl">
                    <div class="nk-content-inner">
                        <?php include "include/menu.php" ?>
                        <div class="nk-content-body">
                            <div class="nk-content-wrap">

                                <div class="nk-block">
                                    <div class="row g-gs">
                                        <div class="col-xxl-8">
                                            <div class="nk-block nk-block-lg">
                                                <div class="nk-block-head">
                                                    <div class="nk-block-head-content">
                                                        <h4 class="title nk-block-title">Informasi Pelajar</h4>
                                                        <div class="nk-block-des">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card card-bordered card-preview">
                                                    <div class="card-inner">
                                                        <ul class="nav nav-tabs mt-n3">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" data-toggle="tab" href="#tabItem5"><em class="icon ni ni-user"></em><span>Peribadi</span></a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" data-toggle="tab" href="#tabItem6"><em class="icon ni ni-book"></em><span>Pengajian</span></a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" data-toggle="tab" href="#tabItem7"><em class="icon ni ni-briefcase"></em><span>Pekerjaan</span></a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" data-toggle="tab" href="#tabItem8"><em class="icon ni ni-money"></em><span>Pembayaran</span></a>
                                                            </li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="tabItem5">
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
                                                            <div class="tab-pane" id="tabItem6">
                                                                <div class="nk-data data-list">
                                                                    <div class="data-item">
                                                                        <div class="data-col">
                                                                            <span class="data-label">Tahun Graduasi</span>
                                                                            <span class="data-value">2017</span>
                                                                        </div>
                                                                        <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                                                                    </div>
                                                                    <div class="data-item">
                                                                        <div class="data-col">
                                                                            <span class="data-label">Diploma</span>
                                                                            <span class="data-value">DIPLOMA TEKNOLOGI MAKLUMAT (PERISIAN) </span>
                                                                        </div>
                                                                        <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                                                                    </div>
                                                                    <div class="data-item">
                                                                        <div class="data-col">
                                                                            <span class="data-label">Jabatan</span>
                                                                            <span class="data-value">Jabatan Teknologi Maklumat & Komunikasi</span>
                                                                        </div>
                                                                        <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                                                                    </div>
                                                                    <div class="data-item">
                                                                        <div class="data-col">
                                                                            <span class="data-label">HPNM</span>
                                                                            <span class="data-value">3.98</span>
                                                                        </div>
                                                                        <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="tabItem7">
                                                                <div class="nk-block">
                                                                    <div class="card card-bordered sp-plan">
                                                                        <div class="row no-gutters">
                                                                            <div class="col-md-8">
                                                                                <div class="sp-plan-info card-inner">
                                                                                    <div class="row gx-0 gy-3">
                                                                                        <div class="col-xl-9 col-sm-8">
                                                                                            <div class="sp-plan-name">
                                                                                                <h6 class="title">DATABASE ADMINISTRATOR</h6>
                                                                                                <p><span class="text-base">
                                                                    <b>HEXA COOPERATION SDN. BHD.</b><br>
                                                                    No 1-02, Jalan Bidara 7/1, Jalan Bidara 7, Bandar Saujana Utama, 47000 Sungai Buloh, Selangor
                                                                </span>
                                                                                                </p>
                                                                                                <p>
                                                                                                    Pegawai Dihubungi<span class="text-base"> : AMMAR MUNAJAF MOIN<br></span>
                                                                                                </p>
                                                                                                <p>
                                                                                                    No. Tel Syarikat <span class="text-base"> : +06-21321312<br></span>
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-xl-3 col-sm-4">
                                                                                            <div class="sp-plan-opt">
                                                                                                <span class="badge badge-primary badge-pill">2019 - Sekarang</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div><!-- .sp-plan-info -->
                                                                                <div class="sp-plan-desc card-inner">
                                                                                    <ul class="row gx-1">
                                                                                        <li class="col-6 col-lg-3">
                                                                                            <p><span class="text-soft">Jabatan</span> IT</p>
                                                                                        </li>
                                                                                        <li class="col-6 col-lg-6">
                                                                                            <p><span class="text-soft">Keterangan Tugas</span>
                                                                                                <small>
                                                                                                    Mengurus pangkalan data syarikat
                                                                                                </small>
                                                                                            </p>
                                                                                        </li>
                                                                                        <li class="col-6 col-lg-3">
                                                                                            <p><span class="text-soft">Sektor</span>Awam</p>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div><!-- .sp-plan-desc -->
                                                                            </div><!-- .col -->
                                                                            <div class="col-md-4">
                                                                                <div class="sp-plan-action card-inner">
                                                                                    <div class="sp-plan-btn">
                                                                                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#subscription-change"><span>Kemaskini</span></a>
                                                                                    </div>
                                                                                </div>
                                                                            </div><!-- .col -->
                                                                        </div><!-- .row -->
                                                                    </div><!-- .sp-plan -->

                                                                    <div class="card card-bordered sp-plan">
                                                                        <div class="row no-gutters">
                                                                            <div class="col-md-8">
                                                                                <div class="sp-plan-info card-inner">
                                                                                    <div class="row gx-0 gy-3">
                                                                                        <div class="col-xl-9 col-sm-8">
                                                                                            <div class="sp-plan-name">
                                                                                                <h6 class="title">PROGRAMMER</h6>
                                                                                                <p><span class="text-base">
                                                                    <b>DEVSTAKCK SDN. BHD.</b><br>
                                                                   26-3F, Jalan Setia Perdana BE U13/BE, Setia Alam, 40170 Shah Alam, Selangor
                                                                </span>
                                                                                                </p>
                                                                                                <p>
                                                                                                    Pegawai Dihubungi<span class="text-base"> : WAN FAKRU RAZI<br></span>
                                                                                                </p>
                                                                                                <p>
                                                                                                    No. Tel Syarikat <span class="text-base"> : +06-21321312<br></span>
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-xl-3 col-sm-4">
                                                                                            <div class="sp-plan-opt">
                                                                                                <span class="badge badge-secondary badge-pill">2017 - 2019</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div><!-- .sp-plan-info -->
                                                                                <div class="sp-plan-desc card-inner">
                                                                                    <ul class="row gx-1">
                                                                                        <li class="col-6 col-lg-3">
                                                                                            <p><span class="text-soft">Jabatan</span> IT</p>
                                                                                        </li>
                                                                                        <li class="col-6 col-lg-6">
                                                                                            <p><span class="text-soft">Keterangan Tugas</span>
                                                                                                <small>
                                                                                                    Membangunkan sistem untuk syarikat
                                                                                                </small>
                                                                                            </p>
                                                                                        </li>
                                                                                        <li class="col-6 col-lg-3">
                                                                                            <p><span class="text-soft">Sektor</span>Awam</p>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div><!-- .sp-plan-desc -->
                                                                            </div><!-- .col -->
                                                                            <div class="col-md-4">
                                                                                <div class="sp-plan-action card-inner">
                                                                                    <div class="sp-plan-btn">
                                                                                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#subscription-change"><span>Kemaskini</span></a>
                                                                                    </div>
                                                                                </div>
                                                                            </div><!-- .col -->
                                                                        </div><!-- .row -->
                                                                    </div><!-- .sp-plan -->

                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="tabItem8">
                                                                <table class="table table-tranx table-billing">
                                                                    <thead>
                                                                    <tr class="tb-tnx-head">
                                                                        <th class="tb-tnx-id"><span class="">#</span></th>
                                                                        <th class="tb-tnx-info">
                                                            <span class="tb-tnx-desc d-none d-sm-inline-block">
                                                                <span>Keterangan</span>
                                                            </span>
                                                                            <span class="tb-tnx-date d-md-inline-block d-none">
                                                                <span class="d-md-none">Tarikh</span>
                                                                <span class="d-none d-md-block">
                                                                    <span>Issue Date</span>
                                                                    <span>Due Date</span>
                                                                </span>
                                                            </span>
                                                                        </th>
                                                                        <th class="tb-tnx-amount">
                                                                            <span class="tb-tnx-total">Total</span>
                                                                            <span class="tb-tnx-status d-none d-md-inline-block">Status</span>
                                                                        </th>
                                                                    </tr><!-- .tb-tnx-head -->
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr class="tb-tnx-item">
                                                                        <td class="tb-tnx-id">
                                                                            <a href="#"><span>4947</span></a>
                                                                        </td>
                                                                        <td class="tb-tnx-info">
                                                                            <div class="tb-tnx-desc">
                                                                                <span class="title">Yuran 2019</span>
                                                                            </div>
                                                                            <div class="tb-tnx-date">
                                                                                <span class="date">10-05-2019</span>
                                                                                <span class="date">10-13-2019</span>
                                                                            </div>
                                                                        </td>
                                                                        <td class="tb-tnx-amount">
                                                                            <div class="tb-tnx-total">
                                                                                <span class="amount">RM59.00</span>
                                                                            </div>
                                                                            <div class="tb-tnx-status">
                                                                                <span class="badge badge-dot badge-warning">Due</span>
                                                                            </div>
                                                                        </td>
                                                                    </tr><!-- .tb-tnx-item -->
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- .card-preview -->
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                            <?php include "include/footer.php" ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

<script src="../assets/js/charts/gd-general.js?ver=1.4.0"></script>


</html>