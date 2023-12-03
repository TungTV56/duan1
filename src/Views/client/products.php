<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Sản phẩm</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <?php
            foreach ($products as $product) {
                $linksp = "/client/product-detail?idsp=" . $product['id'];
            ?>
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="<?php echo $product['image']; ?>" alt="">
                        </div>
                        <h2><a href="<?= $linksp ?>"><?= $product['name'] ?></a></h2>
                        <div class="product-carousel-price">
                            <ins>$<?= $product['price'] ?>
                        </div>

                        <div class="product-option-shop">
                            <form action="/client/cart" method="post" class="cart">
                                <input type="hidden" name="id" value="<?= $product['id'] ?>">
                                <input type="hidden" name="name" value="<?= $product['name'] ?>">
                                <input type="hidden" name="price" value="<?= $product['price'] ?>">
                                <input type="hidden" name="image" value="<?= $product['image'] ?>">
                                <button class="add_to_cart_button" type="submit" name="addToCart">Add to cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>