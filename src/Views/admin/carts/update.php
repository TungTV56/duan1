<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Order</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/addmin/dashboard"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Order</a> </li>
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
                                    <h1>Cập nhật đơn hàng</h1>
                                </div>
                                <div class="card-block">
                                    <form action="" method="post">
                                        <label for="name">Trạng thái đơn hàng</label>
                                        <?php
                                        switch ($order['status']) {
                                            case 0:
                                                $status = 'Đơn hàng mới';
                                                break;
                                            case 1:
                                                $status = 'Đang xử lí';
                                                break;
                                            case 2:
                                                $status = 'Đã thanh toán';
                                                break;
                                        }
                                        ?>
                                        <input type="text" name="status" class="form-control" value="<?= $status ?>" readonly>

                                        <input type="radio" name="status" <?= ($order['status'] == 0) ? 'checked' : '' ?> value="0"> Đơn hàng mới <br>
                                        <input type="radio" name="status" <?= ($order['status'] == 1) ? 'checked' : '' ?> value="1"> Đang xử lý <br>
                                        <input type="radio" name="status" <?= ($order['status'] == 2) ? 'checked' : '' ?> value="2"> Đã thanh toán <br>

                                        <button type="submit" name="btn-submit" class="btn btn-info mt-3">Submit</button>
                                        <a href="/admin/carts" class="btn btn-primary mt-3">Quay lại d/s</a>
                                    </form>

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