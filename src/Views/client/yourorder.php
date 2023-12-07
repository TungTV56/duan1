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

<form enctype="multipart/form-data" action="/order" class="checkout" method="post" name="checkout" style="padding: 0 100px 10px 100px;">

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
                ?>
                <!-- <tr class="order-total">
                    <th>Tổng đơn hàng</th>
                    <td><strong><span class="amount">$ <?= $total_order ?></span></strong> </td>
                </tr> -->
            </table>
            <div class="form-row place-order">
                <input type="submit" data-value="Place order" value="Đặt hàng" id="place_order" name="pay" class="button alt">
            </div>
            <a href="/client/showorder">xem thanh toán</a>
        </div>
    </div>
</form>