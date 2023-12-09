<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Thông tin đơn hàng</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<form enctype="multipart/form-data" action="" class="checkout" method="post" name="checkout" style="padding: 0 100px 10px 100px;">

    <div id="order_review" style="position: relative;">
        <h3 id="order_review_heading">Đơn hàng của bạn</h3>
        <div id="payment">
            <table class="shop_table">
                <thead>
                    <tr>
                        <th class="product-name">Mã đơn hàng</th>
                        <th class="product-total">Ngày đặt hàng</th>
                        <th class="product-total">Số lượng mặt hàng</th>
                        <th class="product-total">Tổng tiền</th>
                        <th class="product-total">Trạng thái</th>
                    </tr>
                </thead>
                <?php
                if (isset($_SESSION['user'])) {
                    $total_order = 0;
                    $i = 0;
                    foreach ($listOrder as $item) {
                        switch ($item['status']) {
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
                        <tbody>
                            <tr class="cart_item">
                                <td>
                                    <span><?= $item['id_order'] ?></span>
                                </td>

                                <td>
                                    <span><?= $item['order_date'] ?></span>
                                </td>

                                <td>
                                    <span><?= $countOrder[$i] ?></span>
                                </td>

                                <td>
                                    <span>$ <?= $item['total_order'] ?></span>
                                </td>

                                <td>
                                    <span><?= $status ?></span>
                                </td>
                            </tr>
                        </tbody>
                    <?php
                        $i++;
                    }
                } 
                if (isset($_SESSION['iddh']) && !isset($_SESSION['user'])) {
                    switch ($listOrderIddh['status']) {
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
                    <tbody>
                        <tr class="cart_item">
                            <td>
                                <span><?= $listOrderIddh['id_order'] ?></span>
                            </td>

                            <td>
                                <span><?= $listOrderIddh['order_date'] ?></span>
                            </td>

                            <td>
                                <span><?= $countOrder ?></span>
                            </td>

                            <td>
                                <span>$ <?= $listOrderIddh['total_order'] ?></span>
                            </td>

                            <td>
                                <span><?= $status ?></span>
                            </td>
                        </tr>
                    </tbody>
                <?php
                }
                ?>
            </table>
            <a href="/client/showorder"> >>xem thông tin vừa đặt</a>
        </div>
    </div>
</form>