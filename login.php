<!DOCTYPE html>
<html lang="zxx" class="js">

<?php
 session_start();

 $name = "ABDUL HANNAN BIN YUSOP";
 $short_name = $words = preg_split('/\s+/', $name, -1, PREG_SPLIT_NO_EMPTY);

 $_SESSION['user'] = [
         'id' => 1,
        'ic_no' => '960516135589',
        'name' => $name,
        'short_name' => $short_name[0]
 ];
?>
<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@@page-discription">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Ulumni@PMU</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="./assets/css/dashlite.css?ver=1.4.0">
    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=1.4.0">
</head>

<body class="nk-body npc-crypto ui-clean pg-auth">
<!-- app body @s -->
<div class="nk-app-root">
    <div class="nk-split nk-split-page nk-split-md">
        <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container">
            <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                <a href="#" class="toggle btn-white btn btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
            </div>
            <div class="nk-block nk-block-middle nk-auth-body">
                <div class="brand-logo pb-5">
                    <a href="" class="logo-link">
                        <img class="logo-light logo-img logo-img-lg" src="./images/logo.png"  alt="logo">
                        <img class="logo-dark logo-img logo-img-lg" src="./images/logo-dark.png" alt="logo-dark">
                    </a>
                </div>
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <h5 class="nk-block-title">Log Masuk</h5>
                        <div class="nk-block-des">
                            <p>Akses panel menggunakan No. Kad Pengenalan dan kod laluan anda.</p>
                        </div>
                    </div>
                </div><!-- .nk-block-head -->
                <form action="#">
                    <div class="form-group">
                        <div class="form-label-group">
                            <label class="form-label" for="default-01">No. Kad Pengenalan</label>
                        </div>
                        <input type="text" class="form-control form-control-lg" id="default-01" placeholder="123456789012">
                    </div><!-- .foem-group -->
                    <div class="form-group">
                        <div class="form-label-group">
                            <label class="form-label" for="password">Katalaluan</label>
                            <a class="link link-primary link-sm" tabindex="-1" href="#">Lupa Katalaluan?</a>
                        </div>
                        <div class="form-control-wrap">
                            <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch" data-target="password">
                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                            </a>
                            <input type="password" class="form-control form-control-lg" id="password" placeholder="Masukan Kataluan">
                        </div>
                    </div><!-- .foem-group -->
                    <div class="form-group">
                        <a href="user/index.php" class="btn btn-lg btn-primary btn-block">Log Masuk(User)</a>
                        <a href="admin/index.php" class="btn btn-lg btn-primary btn-block">Log Masuk(Admin)</a>
                    </div>
                </form><!-- form -->
            </div><!-- .nk-block -->
        </div><!-- .nk-split-content -->
        <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true" >
            <div class="slider-wrap w-100 w-max-550px p-3 p-sm-5 m-auto text-center" >
                <h3>Sistem Direktori Alumni PMU</h3>
                <h6>Tagline Alumni</h6>
                <p>(Gambar background)</p>
            </div><!-- .slider-wrap -->
        </div><!-- .nk-split-content -->
    </div><!-- .nk-split -->
</div><!-- app body @e -->
<!-- JavaScript -->
<script src="./assets/js/bundle.js?ver=1.4.0"></script>
<script src="./assets/js/scripts.js?ver=1.4.0"></script>
</body>

</html>