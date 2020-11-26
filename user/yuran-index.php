
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
                        <div class="nk-content-wrap">
                            <div class="nk-block-head nk-block-head-lg">
                                <div class="nk-block-head-sub"><span>Pembayaran</span></div>
                                <div class="nk-block-between-md g-4">
                                    <div class="nk-block-head-content">
                                        <h2 class="nk-block-title fw-normal">Yuran Keahlian</h2>
                                        <div class="nk-block-des">
                                            <p>Berikut adalah sejarah akaun pembayaran anda.</p>
                                        </div>
                                    </div>
                                    <div class="nk-block-head-content">
                                        <ul class="nk-block-tools gx-3">
                                            <li><a href="#" class="btn btn-white btn-dim btn-outline-primary"><em class="icon ni ni-download-cloud"></em><span><span class="d-none d-sm-inline-block">Get</span> Statement</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .nk-block-head -->
                            <div class="nk-block">
                                <div class="card card-bordered">
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
</div>
</body>

</html>