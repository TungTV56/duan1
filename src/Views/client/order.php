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

<form enctype="multipart/form-data" action="/order" class="checkout" method="post" name="checkout" style="padding: 0 100px 10px 100px;">
    <div id="customer_details" class="col2-set" style="display: flex; justify-content: center;">
        <div class="col-1" style="width: 100%">
            <div class="woocommerce-billing-fields">
                <h3>Chi tiết thanh toán</h3>
                <?php
                if (isset($_SESSION["user"])) {
                    $name = $_SESSION["user"]["username"];
                    $address = $_SESSION["user"]["address"];
                    $email = $_SESSION["user"]["email"];
                    $phone = $_SESSION["user"]["phone"];
                } else {
                    $name = "";
                    $address = "";
                    $email = "";
                    $phone = "";
                }
                ?>
                <p class="form-row form-row-first validate-required">
                    <label class="" for="username">Nhập tên</label>
                    <input type="text" value="<?= $name ?>" placeholder="" id="username" required name="username"  class="input-text ">
                </p>

                <p class="form-row form-row-first validate-required">
                    <label class="" for="address">Nhập địa chỉ</label>
                    <input type="text" value="<?= $address ?>" placeholder="" id="address" required name="address" class="input-text ">
                </p>

                <p class="form-row form-row-first validate-required">
                    <label class="" for="email">Nhập email</label>
                    <input type="email" value="<?= $email ?>" placeholder="" id="email" name="email" required class="input-text" style="width: 100%">
                </p>

                <p class="form-row form-row-first validate-required">
                    <label class="" for="phone">Nhập số điện thoại</label>
                    <input type="text" value="<?= $phone ?>" placeholder="" id="phone" name="phone" required class="input-text ">
                </p>

                <p class="form-row form-row-first validate-required">
                    <label class="" for="">Chọn hình thức thanh toán</label>
                    <input type="radio" checked name="pttt" value="1"> Thanh toán khi nhận hàng <br>
                    <input type="radio" name="pttt" value="2"> Thanh toán chuyển khoản <br>
                    <input type="radio" name="pttt" value="3"> Thanh toán trực tiếp <br>
                </p>
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