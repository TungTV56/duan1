<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Giỏ hàng</h2>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End Page title area -->

<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md">
                <div class="product-content-right">
                    <div class="woocommerce">
                        <form method="post" action="">
                            <table cellspacing="0" class="shop_table cart">
                                <thead>
                                    <tr>
                                        <th class="product-remove">STT</th>
                                        <th class="product-thumbnail">Hình ảnh</th>
                                        <th class="product-name">Sản phẩm</th>
                                        <th class="product-price">Giá</th>
                                        <th class="product-quantity">Số lượng</th>
                                        <th class="product-subtotal">Tổng tiền</th>
                                        <th class="product-remove">Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    $total_order = 0;
                                    foreach ($cartPro as $item) {
                                        $total_amount = $item['price'] * $item['quantity'];
                                        $total_order += $total_amount;
                                    ?>
                                        <tr class="cart_item">
                                            <td>
                                                <?= $i + 1 ?>
                                            </td>

                                            <td class="product-thumbnail">
                                                <a href="/client/product-detail?idsp=<?= $item['id'] ?>"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="<?= $item['image'] ?>"></a>
                                            </td>

                                            <td class="product-name">
                                                <a href="/client/product-detail?idsp=<?= $item['id'] ?>"><?= $item['name'] ?></a>
                                            </td>

                                            <td class="product-price">
                                                <span class="amount">$ <?= $item['price'] ?></span>
                                            </td>

                                            <td class="product-quantity">
                                                <div class="quantity buttons_added">
                                                    <!-- <input type="button" class="minus" value="-"> -->
                                                    <input type="number" size="4" class="input-text qty text" title="Qty" value="<?= $item['quantity'] ?>" min="0" step="1">
                                                    <!-- <input type="button" class="plus" value="+"> -->
                                                </div>
                                            </td>

                                            <td class="product-subtotal">
                                                <span class="amount">$ <?= $total_amount ?></span>
                                            </td>

                                            <td class="product-remove">
                                                <a title="Remove this item" onclick="return confirm('Bạn có chắc chắn xóa?');" class="remove" href="/deleteCart?i=<?= $i ?>">×</a>
                                            </td>
                                        </tr>
                                    <?php
                                        $i++;
                                    }
                                    ?>
                                    <tr>
                                        <td class="actions" colspan="7">
                                            <div style="display: flex; justify-content: space-between;">
                                                <div>
                                                    <a href="/" style="padding: 10px; text-decoration: none; border: none; border-radius: 5px; color: black; background: #0000ff36;">tiếp tục mua hàng</a>
                                                </div>
                                                <div>
                                                    <a href="/client/order" style="padding: 10px; text-decoration: none; border: none; border-radius: 5px; color: black; background: #0000ff36;">Thanh toán</a>
                                                    <a href="/deleteCart" onclick="return confirm('Bạn có chắc chắn xóa?');" style="padding: 10px; text-decoration: none; border: none; border-radius: 5px; color: black; background: #0000ff36;">Xóa giỏ hàng</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>

                        <div class="cart-collaterals">


                            <div class="cross-sells">
                                <h2>Có thể bạn quan tâm</h2>
                                <ul class="products">
                                    <li class="product">
                                        <a href="single-product.html">
                                            <img width="325" height="325" alt="T_4_front" class="attachment-shop_catalog wp-post-image" src="/ustora/img/product-2.jpg">
                                            <h3>Ship Your Idea</h3>
                                            <span class="price"><span class="amount">£20.00</span></span>
                                        </a>

                                        <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="22" rel="nofollow" href="single-product.html">Select options</a>
                                    </li>

                                    <li class="product">
                                        <a href="single-product.html">
                                            <img width="325" height="325" alt="T_4_front" class="attachment-shop_catalog wp-post-image" src="/ustora/img/product-4.jpg">
                                            <h3>Ship Your Idea</h3>
                                            <span class="price"><span class="amount">£20.00</span></span>
                                        </a>

                                        <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="22" rel="nofollow" href="single-product.html">Select options</a>
                                    </li>
                                </ul>
                            </div>


                            <div class="cart_totals ">
                                <h2>Cart Totals</h2>

                                <table cellspacing="0">
                                    <tbody>
                                        <tr class="cart-subtotal">
                                            <th>Tổng tiền</th>
                                            <td><span class="amount">$ <?= $total_order ?></span></td>
                                        </tr>

                                        <tr class="shipping">
                                            <th>Shipping and Handling</th>
                                            <td>Free Shipping</td>
                                        </tr>

                                        <tr class="order-total">
                                            <th>Tổng đơn hàng</th>
                                            <td><strong><span class="amount"><?= $i ?></span></strong> </td>
                                        </tr>
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