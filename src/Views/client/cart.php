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
                                    foreach ($_SESSION['cart'] as $idsp => $item) {
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
                                                    <!-- <input type="number" size="4" class="input-text qty text" title="Qty" value="<?= $item['quantity'] ?>" min="0" step="1"> -->
                                                    <!-- <input type="button" class="plus" value="+"> -->
                                                    <a href="/decrementQuantity?id=<?= $idsp ?>" class="btn btn-danger">-</a>
                                                    <button type="button" class="btn btn-info"><?= $item['quantity'] ?></button>
                                                    <a href="/incrementQuantity?id=<?= $idsp ?>" class="btn btn-success">+</a>
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
                                    $_SESSION['stt'] = $i;
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
                                    <?php
                                    foreach ($products as $product) {
                                        $link = "/client/product-detail?idsp=" . $product["p_id"];
                                    ?>
                                        <li class="product mt-3">
                                            <a href="<?= $link ?>">
                                                <img width="350px" alt="T_4_front" class="attachment-shop_catalog wp-post-image" src="<?= $product['p_image'] ?>">
                                                <h4><?= $product['p_name'] ?></h4>
                                                <span class="price"><span class="amount">$ <?= $product['p_price'] ?></span></span>
                                            </a>
                                            <form action="/client/cart" method="post">
                                                <input type="hidden" name="id" value="<?= $product['p_id'] ?>">
                                                <input type="hidden" name="name" value="<?= $product['p_name'] ?>">
                                                <input type="hidden" name="price" value="<?= $product['p_price'] ?>">
                                                <input type="hidden" name="image" value="<?= $product['p_image'] ?>">
                                                <button type="submit" name="addToCart" style="padding: 5px;">Add to cart</button>
                                            </form>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>


                            <div class="cart_totals ">
                                <h2>Tổng giỏ hàng</h2>

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