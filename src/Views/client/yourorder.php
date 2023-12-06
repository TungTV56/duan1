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
                        <th class="product-name">Tên sản phẩm</th>
                        <th class="product-total">Tổng</th>
                    </tr>
                </thead>
                <?php
                $total_order = 0;
                foreach ($_SESSION['cart'] as $item) {
                    $total_amount = $item['price'] * $item['quantity'];
                    $total_order += $total_amount;
                ?>
                    <input type="hidden" value="<?= $total_order ?>" name="total_order">
                    <tbody>
                        <tr class="cart_item">
                            <td class="product-name">
                                <?= $item['name'] ?> <strong class="product-quantity">× <?= $item['quantity'] ?></strong> </td>
                            <td class="product-total">
                                <span class="amount">$ <?= $total_amount ?></span>
                            </td>
                        </tr>
                    </tbody>
                <?php
                }
                ?>
                <tr class="order-total">
                    <th>Tổng đơn hàng</th>
                    <td><strong><span class="amount">$ <?= $total_order ?></span></strong> </td>
                </tr>
            </table>
            <div class="form-row place-order">
                <input type="submit" data-value="Place order" value="Đặt hàng" id="place_order" name="pay" class="button alt">
            </div>
        </div>
    </div>
</form>