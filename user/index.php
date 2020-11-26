
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
                        <div class="nk-block-head nk-block-head-lg wide-xs mx-auto">
                            <div class="nk-block-head-content text-center">
                                <h2 class="nk-block-title fw-normal">Hi, <?= $user['short_name'] ?></h2>
                                <div class="nk-block-des">
                                    <p>Selamat datang ke <strong>Sistem Direktori Alumni Politeknik Mukah</strong>.</p>
                                </div>
                            </div>
                        </div><!-- .nk-block-head -->
                        <div class="nk-block">
                            <div class="card card-custom-s1 card-bordered">
                                <div class="row no-gutters">
                                    <div class="col-lg-4">
                                        <div class="card-inner-group">
                                            <div class="card-inner">
                                                <h5>Sila Selesaikan Pendaftaran</h5>
                                                <p>Hanya beberapa minit diperlukan untuk menyelesaikan pendaftaran.</p>
                                            </div>
                                            <div class="card-inner">
                                                <ul class="list list-step">
                                                    <li class="list-step-current">Maklumat Peribadi</li>
                                                    <li class="list-step-done">Maklumat Pengajian</li>
                                                    <li>Maklumat Pekerjaan</li>
                                                    <li>Pembayaran Yuran Keahlian</li>
                                                </ul>
                                            </div>
                                            <div class="card-inner">
                                                <div class="align-center gx-3">
                                                    <div class="flex-item">
                                                        <div class="progress progress-sm progress-pill w-80px">
                                                            <div class="progress-bar" data-progress="25"></div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-item">
                                                        <span class="sub-text sub-text-sm text-soft">1/4 Completed</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                    <div class="col-lg-8">
                                        <div class="card-inner card-inner-lg h-100">
                                            <div class="align-center flex-wrap flex-md-nowrap g-3 h-100">
                                                <div class="nk-block-image w-200px flex-shrink-0 order-first order-md-last">
                                                </div>
                                                <div class="nk-block-content">
                                                    <div class="nk-block-content-head">
                                                        <h4>Maklumat Peribadi</h4>
                                                        <span class="sub-text sub-text-sm text-soft">Sila lengkapkan : </span>
                                                    </div>
                                                    <ul class="list list-sm list-cross">
                                                        <li>Gambar Profil</li>
                                                        <li>No Telefon (R)</li>
                                                        <li>Emel</li>
                                                        <li>No Telefon (R)</li>
                                                    </ul>
                                                    <a href="#" class="btn btn-lg btn-primary">Lengakapkan Maklumat</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div><!-- .card -->
                        </div><!-- .nk-block -->
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
</div>
<!-- app-root @e -->
<!-- JavaScript -->
<script src="./assets/js/bundle.js?ver=1.4.0"></script>
<script src="./assets/js/scripts.js?ver=1.4.0"></script>
<script src="./assets/js/charts/chart-invest.js?ver=1.4.0"></script>
</body>

</html>