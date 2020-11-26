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

                                            <div class="card card-bordered">
                                                <div class="card-inner">
                                                    <div class="card-head">
                                                        <h5 class="card-title">Senarai Pelajar</h5>
                                                    </div>
                                                    <form action="#">
                                                        <div class="row g-4">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="trip_no">No. Kad Pengenalan /No. Matrix</label>
                                                                    <div class="form-control-wrap">
                                                                        <input id="trip_no" name="trip_no" type="text" class="form-control" placeholder="20DIP19175">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="form-label">Jantina</label>
                                                                    <ul class="custom-control-group g-3 align-center">
                                                                        <li>
                                                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="pay-card-1">
                                                                                <label class="custom-control-label" for="pay-card-1">Lelaki</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="pay-bitcoin-1">
                                                                                <label class="custom-control-label" for="pay-bitcoin-1">Perempuan</label>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="form-label">Jabatan</label>
                                                                    <ul class="custom-control-group g-3 align-center">
                                                                        <li>
                                                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="com-email-1" checked>
                                                                                <label class="custom-control-label" for="com-email-1">FTMK</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="com-email-1">
                                                                                <label class="custom-control-label" for="com-email-1">JP</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="com-sms-1">
                                                                                <label class="custom-control-label" for="com-sms-1">FKM</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="com-phone-1">
                                                                                <label class="custom-control-label" for="com-phone-1">FKE</label>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
<!--                                                            <div class="col-12">-->
<!--                                                                <div class="form-group">-->
<!--                                                                    <button type="submit" class="btn btn-lg btn-primary">Search (Ajax)</button>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                            <div class="card card-bordered">
                                                <div class="card-inner p-0 border-top">
                                                    <div class="nk-tb-list nk-tb-orders">
                                                        <div class="nk-tb-item nk-tb-head">
                                                            <div class="nk-tb-col"><span>No. K/P</span></div>
                                                            <div class="nk-tb-col tb-col-sm"><span>Nama</span></div>
                                                            <div class="nk-tb-col tb-col-md"><span>Jabatan</span></div>
                                                            <div class="nk-tb-col tb-col-md"><span>Kos</span></div>
                                                            <div class="nk-tb-col"><span>Tahun Graduasi</span></div>
                                                            <div class="nk-tb-col"><span class="d-none d-sm-inline">Status Maklumat</span></div>
                                                            <div class="nk-tb-col"><span>&nbsp;</span></div>
                                                        </div>
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col">
                                                                <span class="tb-lead"><a href="#">960516135589</a></span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <div class="user-card">
                                                                    <div class="user-name">
                                                                        <span class="tb-lead">ABDUL HANNAN BIN YUSOP</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <span class="tb-sub">JTMK</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <span class="tb-sub">DIP</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="tb-sub tb-amount">2018</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="badge badge-dot badge-dot-xs badge-success">Lengkap</span>
                                                            </div>
                                                            <div class="nk-tb-col nk-tb-col-action">
                                                                <div class="dropdown">
                                                                    <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                                        <ul class="link-list-plain">
                                                                            <li><a href="admin/student-view.php">Lihat</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col">
                                                                <span class="tb-lead"><a href="#">960519111235</a></span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <div class="user-card">
                                                                    <div class="user-name">
                                                                        <span class="tb-lead">WONG SUN HUM</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <span class="tb-sub">JTMK</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <span class="tb-sub">DIP</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="tb-sub tb-amount">2018</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="badge badge-dot badge-dot-xs badge-danger">Tidak</span>
                                                            </div>
                                                            <div class="nk-tb-col nk-tb-col-action">
                                                                <div class="dropdown">
                                                                    <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                                        <ul class="link-list-plain">
                                                                            <li><a href="admin/student-view.php">Lihat</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col">
                                                                <span class="tb-lead"><a href="#">930519111235</a></span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <div class="user-card">
                                                                    <div class="user-name">
                                                                        <span class="tb-lead">MOHD ANUAR BIN YUSOFF</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <span class="tb-sub">JTMK</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <span class="tb-sub">DIP</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="tb-sub tb-amount">2018</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="badge badge-dot badge-dot-xs badge-danger">Tidak</span>
                                                            </div>
                                                            <div class="nk-tb-col nk-tb-col-action">
                                                                <div class="dropdown">
                                                                    <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                                        <ul class="link-list-plain">
                                                                            <li><a href="admin/student-view.php">Lihat</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .card -->
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