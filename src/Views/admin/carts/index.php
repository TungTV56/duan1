<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Products</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/admin/dashboard"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Products</a> </li>
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
                                    <h5>Danh sách Products</h5>

                                    <a href="/admin/products/create" class="btn btn-info btn-sm">Tạo mới</a>
                                </div>
                                
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Mã sản phẩm</th>
                                                    <th>Tên sản phẩm</th>
                                                    <th>Giá</th>
                                                    <th>Số lượng</th>
                                                    <th>Tổng tiền</th>
                                                    <th>image</th>
                                                    <th>User name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Adress</th>
                                                    <th>hình thức thanh toán</th>
                                                    <!-- <th>Action</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($carts as $cart) {
                                                ?>
                                                    <tr>
                                                        <td><?= $cart['masp'] ?></td>
                                                        <td><?= $cart['tensp'] ?></td>
                                                        <td>$<?= number_format($cart['giasp'], 0, ',', '.') ?></td>
                                                        <td><?= $cart['soluong'] ?></td>
                                                        <td>$<?= $cart['tongsl'] ?></td>
                                                        <td><img src="<?= $cart['img'] ?>" alt="" width="100px"></td>
                                                        <td><?= $cart['username'] ?></td>
                                                        <td><?= $cart['email'] ?></td>
                                                        <td><?= $cart['phone'] ?></td>
                                                        <td><?= $cart['address'] ?></td>
                                                        <td><?= $cart['pttt'] ?></td>
                                                        <!-- <td>
                                                            <a href="/admin/products/update?id=<?= $product['id'] ?>" class="btn btn-primary btn-sm">Cập nhật</a>

                                                            <form action="/admin/products/delete?id=<?= $product['id'] ?>" method="post">
                                                                <button type="submit" onclick="return confirm('Bạn có chắc chắn xóa?');" class="btn btn-danger btn-sm mt-2">Xóa</button>
                                                            </form>
                                                        </td> -->
                                                    </tr>
                                                <?php } ?>
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