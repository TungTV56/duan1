<div class="slider-area">
    <!-- Slider -->
    <div class="block-slider block-slider4">
        <ul class="" id="bxslider-home4">
            <li>
                <img src="/uploads/anh5.jpg" style="width: 400px;" alt="Slide">
                <div class="caption-group">
                    <h2 class="caption title">
                        iphone <span class="primary">15 <strong>pro max</strong></span>
                    </h2>
                    <h4 class="caption subtitle">Chính hãng</h4>
                    <a class="caption button-radius" href="/client/product-detail?idsp=1"><span class="icon"></span>Đi mua</a>
                </div>
            </li>
            <li><img src="/uploads/download.jpg" style="width: 400px;" alt="Slide">
                <div class="caption-group">
                    <h2 class="caption title">
                        samsung ultra <span class="primary"><strong>Max</strong>
                    </h2>
                    <h4 class="caption subtitle">Ram 256GB</h4>
                    <a class="caption button-radius" href="/client/product-detail?idsp=2"><span class="icon"></span>Đi mua</a>
                </div>
            </li>
            <li><img src="/uploads/xiaomi-13-t-xanh-duong-thumb-thumb-600x600 (1).jpg" style="width: 400px;" alt="Slide">
                <div class="caption-group">
                    <h2 class="caption title">
                        xiaomi <span class="primary">13<strong>T</strong></span>
                    </h2>
                    <h4 class="caption subtitle">Sản phẩm mới giá rẻ</h4>
                    <a class="caption button-radius" href="/client/product-detail?idsp=3"><span class="icon"></span>Đi mua</a>
                </div>
            </li>
        </ul>
    </div>
    <!-- ./Slider -->
</div> <!-- End slider area -->

<div class="maincontent-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="latest-product">
                    <h2 class="section-title">Sản phẩm mới nhất</h2>
                    <div class="product-carousel">
                        <?php
                        foreach ($products as $product) {
                            $link = "/client/product-detail?idsp=" . $product["p_id"];
                            // $linkCart = "/client/cart?idsp=" . $product["p_id"];
                        ?>
                            <div class="single-product">
                                <form action="/client/cart" method="post">
                                    <input type="hidden" name="id" value="<?= $product['p_id'] ?>">
                                    <input type="hidden" name="name" value="<?= $product['p_name'] ?>">
                                    <input type="hidden" name="price" value="<?= $product['p_price'] ?>">
                                    <input type="hidden" name="image" value="<?= $product['p_image'] ?>">
                                    <div class="product-f-image">
                                        <img src="<?= $product['p_image'] ?>" alt="">
                                        <div class="product-hover">
                                            <a class="add-to-cart-link">
                                                <button type="submit" name="addToCart" style="padding: 0;"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                            </a>
                                        </div>
                                    </div>

                                    <h2><a href="<?= $link ?>"><?= $product['p_name'] ?></a></h2>

                                    <div class="product-carousel-price">
                                        <ins>$<?= $product['p_price'] ?></ins> <del>$100.00</del>
                                    </div>
                                </form>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End main content area -->

<div class="product-widget-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <h2 class="product-wid-title">Tất cả sản phẩm</h2>
            <div class="col-md-4" style="width: 100%;padding: 0;">
                <div class="single-product-widget" style="display: flex;justify-content: space-between;flex-wrap: wrap;">
                    <?php
                    foreach ($allproducts as $item) {
                        $link = "/client/product-detail?idsp=" . $item["id"];
                    ?>
                        <div class="single-wid-product" style="width: 30%;">
                            <a href="<?= $link ?>"><img src="<?= $item['image'] ?>" alt="" class="product-thumb"></a>
                            <h2><a href="<?= $link ?>"><?= $item['name'] ?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$<?= $item['price'] ?></ins>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End product widget area -->

<div class="promo-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo1">
                    <i class="fa fa-refresh"></i>
                    <p>30 Days return</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo2">
                    <i class="fa fa-truck"></i>
                    <p>Free shipping</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo3">
                    <i class="fa fa-lock"></i>
                    <p>Secure payments</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo4">
                    <i class="fa fa-gift"></i>
                    <p>New products</p>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End promo area -->