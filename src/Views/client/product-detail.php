 <div class="product-big-title-area">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="product-bit-title text-center">
                     <h2>Shop</h2>
                 </div>
             </div>
         </div>
     </div>
 </div>


 <div class="single-product-area">
     <div class="zigzag-bottom"></div>
     <div class="container">
         <div class="row">
             <div class="col-md-4">
                 <!-- <div class="single-sidebar">
                        <h2 class="sidebar-title">Search Products</h2>
                        <form action="">
                            <input type="text" placeholder="Search products...">
                            <input type="submit" value="Search">
                        </form>
                    </div> -->

                 <div class="single-sidebar">
                     <h2 class="sidebar-title">Sản phẩm</h2>
                     <?php
                        foreach ($products as $product) {
                            $linksp = "/client/product-detail?idsp=" . $product["p_id"];
                        ?>
                         <div class="thubmnail-recent">
                             <img src="<?= $product['p_image'] ?>" class="recent-thumb" alt="">
                             <h2><a href="<?= $linksp ?>"><?= $product['p_name'] ?></a></h2>
                             <div class="product-sidebar-price">
                                 <ins><?= $product['p_price'] ?></ins> <del>$100.00</del>
                             </div>
                         </div>
                     <?php
                        }
                        ?>
                 </div>

                 <!-- <div class="single-sidebar">
                     <h2 class="sidebar-title">Recent Posts</h2>
                     <ul>
                         <li><a href="">Sony Smart TV - 2015</a></li>
                         <li><a href="">Sony Smart TV - 2015</a></li>
                         <li><a href="">Sony Smart TV - 2015</a></li>
                         <li><a href="">Sony Smart TV - 2015</a></li>
                         <li><a href="">Sony Smart TV - 2015</a></li>
                     </ul>
                 </div> -->
             </div>

             <div class="col-md-8">
                 <div class="product-content-right">
                     <div class="product-breadcroumb">
                         <a href="/">Home</a>
                         <a href=""><?= $proDetail['name'] ?></a>
                     </div>

                     <div class="row">
                         <div class="col-sm-6">
                             <div class="product-images">
                                 <div class="product-main-img">
                                     <img src="<?= $proDetail['image'] ?>" alt="">
                                 </div>

                                 <!-- <div class="product-gallery">
                                        <img src="/ustora/img/product-thumb-1.jpg" alt="">
                                        <img src="/ustora/img/product-thumb-2.jpg" alt="">
                                        <img src="/ustora/img/product-thumb-3.jpg" alt="">
                                    </div> -->
                             </div>
                         </div>

                         <div class="col-sm-6">
                             <div class="product-inner">
                                 <h2 class="product-name"><?= $proDetail['name'] ?></h2>
                                 <div class="product-inner-price">
                                     <ins>$<?= $proDetail['price'] ?></ins> <del>$100.00</del>
                                 </div>

                                 <form action="/client/cart" method="post" class="cart">
                                     <input type="hidden" name="id" value="<?= $proDetail['id'] ?>">
                                     <input type="hidden" name="name" value="<?= $proDetail['name'] ?>">
                                     <input type="hidden" name="price" value="<?= $proDetail['price'] ?>">
                                     <input type="hidden" name="image" value="<?= $proDetail['image'] ?>">
                                     <div class="quantity">
                                         <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                     </div>
                                     <button class="add_to_cart_button" type="submit" name="addToCart">Add to cart</button>
                                 </form>

                                 <div class="product-inner-category">
                                     <p>Category: <a href="">Summer</a>. Tags: <a href="">awesome</a>, <a href="">best</a>, <a href="">sale</a>, <a href="">shoes</a>. </p>
                                 </div>

                                 <div role="tabpanel">
                                     <ul class="product-tab" role="tablist">
                                         <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                                         <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                                     </ul>
                                     <div class="tab-content">
                                         <div role="tabpanel" class="tab-pane fade in active" id="home">
                                             <h2>Product Description</h2>
                                             <?= $proDetail['description'] ?>
                                         </div>
                                         <!-- <div role="tabpanel" class="tab-pane fade" id="profile">
                                             <h2>Reviews</h2>
                                             <div class="submit-review">
                                                 <p><label for="name">Name</label> <input name="name" type="text"></p>
                                                 <p><label for="email">Email</label> <input name="email" type="email"></p>
                                                 <div class="rating-chooser">
                                                     <p>Your rating</p>

                                                     <div class="rating-wrap-post">
                                                         <i class="fa fa-star"></i>
                                                         <i class="fa fa-star"></i>
                                                         <i class="fa fa-star"></i>
                                                         <i class="fa fa-star"></i>
                                                         <i class="fa fa-star"></i>
                                                     </div>
                                                 </div>
                                                 <p><label for="review">Your review</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                                                 <p><input type="submit" value="Submit"></p>
                                             </div>
                                         </div> -->
                                     </div>
                                 </div>

                             </div>
                         </div>
                     </div>

                     
                     <iframe src="/client/comment?idsp=<?= $proDetail['id'] ?>" width="100%" height="500px" frameborder="0"></iframe>
                     <hr>

                     <div class="related-products-wrapper" style="width:200px;">
                         <h2 class="related-products-title">Sản phẩm cùng loại</h2>
                         <div class="related-products-carousel">
                             <?php

                                foreach ($spCungloai as $product) {
                                    $linkspCungloai = "/client/product-detail?idsp=" . $product["id"];
                                ?>
                                 <div class="single-product">
                                     <div class="product-f-image">
                                         <img src="<?= $product['image'] ?>" alt="">
                                         <div class="product-hover">
                                             <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                         </div>
                                     </div>

                                     <h2><a href="<?= $linkspCungloai ?>"><?= $product['name'] ?></a></h2>

                                     <div class="product-carousel-price">
                                         <ins>$<?= $product['price'] ?></ins> <del>$100.00</del>
                                     </div>
                                 </div>
                             <?php
                                }
                                ?>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>