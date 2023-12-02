<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Thanh toán</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="checkout" style="padding: 0 100px 10px 100px;">
    <div id="customer_details" class="col2-set" style="display: flex; justify-content: center;">
        <div class="col-1" style="width: 100%">
            <div class="woocommerce-billing-fields">
                <h3>Chi tiết thanh toán</h3>

                <div class="form-row form-row-first validate-required">
                    <span><strong>Mã đơn hàng : </strong></span>
                    <?= $order['id_order'] ?>
                </div>

                <div class="form-row form-row-first validate-required">
                    <span><strong>Tên người mua hàng : </strong></span>
                    <?= $order['username'] ?>
                </div>

                <div class="form-row form-row-first validate-required">
                    <span><strong>Địa chỉ nhận : </strong></span>
                    <?= $order['address'] ?>
                </div>

                <div class="form-row form-row-first validate-required">
                    <span><strong>Email : </strong></span>
                    <?= $order['email'] ?>
                </div>

                <div class="form-row form-row-first validate-required">
                    <span><strong>Số điện thoại : </strong></span>
                    <?= $order['phone'] ?>
                </div>

                <div class="form-row form-row-first validate-required">
                    <span><strong>Phương thức thanh toán : </strong></span>
                    <?php
                    switch ($order['pay']) {
                        case 1:
                            $textmess = 'Thanh toán khi nhận hàng';
                            break;
                        case 2:
                            $textmess = 'Thanh toán chuyển khoản';
                            break;
                        case 3:
                            $textmess = 'Thanh toán trực tiếp';
                            break;
                    }
                    echo $textmess;
                    ?>
                </div>
            </div>
        </div>

    </div>

    <div id="order_review" style="position: relative;">
        <h3 id="order_review_heading">Đơn hàng của bạn</h3>
        <div id="payment">
            <table class="shop_table">
                <thead>
                    <tr>
                        <th class="product-name">Tên sản phẩm</th>
                        <th class="product-total">Tổng</th>
                    </tr>
                </thead>
                <?php
                $tongdh = 0;
                foreach ($orderDetails as $orderDetail) {
                    $tong = $orderDetail['total_order'] * $orderDetail['quantity'];
                    $tongdh += $tong;
                ?>
                    <tbody>
                        <tr class="cart_item">
                            <td class="product-name">
                                <?= $orderDetail['name_pro'] ?> <strong class="product-quantity">× <?= $orderDetail['quantity'] ?></strong> </td>
                            <td class="product-total">
                                <span class="amount">$ <?= $orderDetail['total_order'] ?></span>
                            </td>
                        </tr>
                    </tbody>
                <?php
                }
                ?>
                <tr class="order-total">
                    <th>Tổng đơn hàng</th>
                    <td><strong><span class="amount">$ <?= $tongdh ?></span></strong> </td>
                </tr>
            </table>
        </div>
    </div>
</div>