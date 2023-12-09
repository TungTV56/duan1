<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Đơn hàng</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/admin/dashboard"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Đơn hàng</a> </li>
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
                                    <h5>Danh sách đơn hàng</h5>
                                </div>

                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Mã Đơn hàng</th>
                                                    <th>Khách hàng</th>
                                                    <th>Số lượng mặt hàng</th>
                                                    <th>Tổng tiền</th>
                                                    <th>Trạng thái đơn hàng</th>
                                                    <th>Ngày đăt hàng</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 0;
                                                foreach ($listOrder as $order) {
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
                                                    <tr>
                                                        <td><?= $order['id_order'] ?></td>
                                                        <td>
                                                            Tên: <?= $order['username'] ?><br>
                                                            Email: <?= $order['email'] ?><br>
                                                            SĐT: <?= $order['phone'] ?><br>
                                                            Địa chỉ: <?= $order['address'] ?><br>
                                                        </td>
                                                        <td><?= $countOrder[$i] ?></td>
                                                        <td>$<?= $order['total_order'] ?></td>
                                                        <td><?= $status ?></td>
                                                        <td><?= $order['order_date'] ?></td>
                                                        <td>
                                                            <a href="/admin/carts/update?id=<?= $order['id'] ?>" class="btn btn-primary btn-sm">Cập nhật</a>

                                                            <form action="/admin/carts/delete?id=<?= $order['id'] ?>" method="post">
                                                                <button type="submit" onclick="return confirm('Bạn có chắc chắn xóa?');" class="btn btn-danger btn-sm mt-2">Xóa</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                <?php
                                                $i++;
                                                }
                                                ?>
                                            </tbody>

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