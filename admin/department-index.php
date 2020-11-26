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
                                    <div class="card card-bordered">
                                        <div class="card-inner card-inner-md">
                                            <div class="card-title-group">
                                                <h6 class="card-title">Senarai Jabatan</h6>
                                                <div class="card-action">
                                                    <a href="admin/department-add.php" class="link link-sm">Tambah <em class="icon ni ni-plus"></em></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .card -->
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