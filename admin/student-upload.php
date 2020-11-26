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
                                            <h5 class="card-title">Muatnaik Data Pelajar</h5>
                                        </div>
                                        <form action="#" class="gy-3">
                                            <div class="row g-3 align-center">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-label" for="tracking_no">Program</label>
                                                        <span class="form-note"></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <select class="form-select form-control form-control-lg" data-search="on" required>
                                                                <option value="default_option">- Pilih Program -</option>
                                                                <optgroup label="FTMK - Jabatan Teknologi Maklumat & Komunikasi">
                                                                    <option value="option_select_name">DIP - DIPLOMA TEKNOLOGI MAKLUMAT (PENGATURCARAAN) </option>
                                                                    <option value="option_select_name">DNS - DIPLOMA TEKNOLOGI MAKLUMAT (RANGKAIAN) </option>
                                                                </optgroup>
                                                                <optgroup label="JKE - Jabatan Kejuruteraan Elektrik">
                                                                    <option value="option_select_name">DEP - DIPLOMA KEJURUTERAAN ELEKTRONIK (KOMUNIKASI) </option>
                                                                    <option value="option_select_name">DEE - DIPLOMA KEJURUTERAAN ELEKTRIK DAN ELEKTRONIK </option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-3 align-center">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-label" for="year">Tahun Graduasi</label>
                                                        <span class="form-note"></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <select class="form-select form-control form-control-lg" data-search="on" required name="year" id="year">
                                                                <?php $year = 2015; do{ ?>
                                                                <option value="<?= $year ?>"><?= $year ?></option>
                                                                <?php $year++; }while($year <= date('Y')); ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-3 align-center">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-label" for="date">Fail</label>
                                                        <span class="form-note">Format: xls</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="form-group">
                                                        <div class="custom-control-wrap">
                                                            <div class="custom-file">
                                                                <input type="file" multiple="" class="custom-file-input" id="customFile">
                                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-3 align-center">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-label" for="date">Kumpulan Data</label>
                                                        <span class="form-note">Dijana secara automatik</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <div class="custom-control-wrap">
                                                            <input type="text" name="date" id="date" class="form-control" value="2" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-3">
                                                <div class="col-lg-7 offset-lg-5">
                                                    <div class="form-group mt-2">
                                                        <button  class="btn btn-lg btn-primary submit">Muatnaik</button>
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

