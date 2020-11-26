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
                                            <h5 class="card-title">Tambah Program</h5>
                                        </div>
                                        <form action="#" class="gy-3">
                                            <div class="row g-3 align-center">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-label" for="dept_id">Jabatan</label>
                                                        <span class="form-note"></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <select class="form-select form-control form-control-lg" name="dept_id" id="dept_id" data-search="on" required>
                                                                <option value="default_option">- Pilih Jabatan -</option>
                                                                <option value="option_select_name">JTMK - JABATAN TEKNOLOGI MAKLUMAT & KOMUNIKASI</option>
                                                                <option value="option_select_name">JKE - JABATAN KEJURUTERAAN ELEKTRIK </option>
                                                                <option value="option_select_name">JP - JABATAN PERDAGANGAN </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-3 align-center">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-label" for="code">Kod Program</label>
                                                        <span class="form-note">Min: 1 | Max : 5</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <div class="custom-control-wrap">
                                                            <input type="text" name="code" id="code" class="form-control" placeholder="DIP" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-3 align-center">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-label" for="name">Nama Program</label>
                                                        <span class="form-note"></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="form-group">
                                                        <div class="custom-control-wrap">
                                                            <input type="text" name="name" id="name" class="form-control" placeholder="DIPLOMA TEKNOLOGI MAKLUMAT (PENGATURCARAAN)" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-3">
                                                <div class="col-lg-7 offset-lg-5">
                                                    <div class="form-group mt-2">
                                                        <button  class="btn btn-lg btn-primary submit">Tambah</button>
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

