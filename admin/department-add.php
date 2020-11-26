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
                                <div class="card card-bordered">
                                    <div class="card-inner">
                                        <div class="card-head">
                                            <h5 class="card-title">Tambah Jabatan</h5>
                                        </div>
                                        <form action="#" class="gy-3">
                                            <div class="row g-3 align-center">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-label" for="code">Kod</label>
                                                        <span class="form-note">Min:1 | Max: 6</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="code" id="code" value="" placeholder="JTMK" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-3 align-center">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-label" for="name">Nama</label>
                                                        <span class="form-note"></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="name" value="" placeholder="Jabatan Teknologi Maklumatt" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-3">
                                                <div class="col-lg-7 offset-lg-5">
                                                    <div class="form-group mt-2">
                                                        <button type="submit" class="btn btn-lg btn-primary">Tambah</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
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

</html>