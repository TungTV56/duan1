<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Thống kê</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/admin/dashboard"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Thống kê</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Thống kê</h5>
                                </div>

                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Mã danh mục</th>
                                                    <th>Tên danh mục</th>
                                                    <th>Số lượng</th>
                                                    <th>Giá cao nhất</th>
                                                    <th>Giá thấp nhất</th>
                                                    <th>Giá trung bình</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($statisticals as $thongke) {
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <?= $thongke['madm'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $thongke['tendm'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $thongke['countsp'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $thongke['maxprice'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $thongke['minprice'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $thongke['avgprice'] ?>
                                                        </td>
                                                    </tr>
                                                </tbody>

                                                <?php
                                                }
                                                ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>