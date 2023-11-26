<section class="feature-products">
    <div class="container">
        <div class="section-title wow animate__animated animate__fadeIn" data-wow-delay="0">
            <h3>DANH SÁCH SẢN PHẨM</h3>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="feature-product-slider arrow-center position-relative">
                    <div class="slider-arrow slider-arrow-two carousel-4-columns-arrow" id="carousel-4-columns-arrows"></div>
                    
                    <div class="carousel-4-columns carousel-arrow-center" id="carousel-4-columns">
                    <?php
                    foreach ($list_san_pham as $san_pham) :
                        $id = $san_pham['id'];
                        $ten_san_pham = $san_pham['ten_san_pham'];
                        $gia = $san_pham['gia'];
                        $gia_khuyen_mai = $san_pham['gia_khuyen_mai'];
                        $mo_ta = $san_pham['mo_ta'];
                        $so_luong = $san_pham['so_luong'];
                        $image = $san_pham['image'];
                    ?>
                        <div class="product-card wow animate__animated animate__fadeIn product" data-wow-delay=".1s" data-id="<?php echo $id ?>">
                            <div class="product-img-col">
                                <div class="product-img product-img-zoom">
                                    <a href="index.php?act=san_pham&ma_sp=<?php echo $id ?>">
                                        <img class="default-img" src="./public/assets/img/shop/product-11.jpg" alt>
                                        <img class="hover-img" src="./public/assets/img/shop/product-11.jpg" alt>
                                    </a>
                                </div>
                                <div class="product-inner-details">
                                    <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    <a aria-label="Search" class="product-btn" href="#"><i class="fi-rs-search"></i></a>
                                    <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                    <a href="#" aria-label="Cart" class="product-btn add-to-cart button-add-to-cart"><i class="fi-rs-shopping-cart"></i></a>
                                </div>
                                <div class="product-badge">
                                    <span class="best">Sale</span>
                                </div>
                            </div>
                            <div class="product-content">
                                <h2><a href="index.php?act=san_pham&ma_sp=<?php echo $id ?>"><?php echo $ten_san_pham ?></a></h2>
                                <div class="product-card-bottom mt-0">
                                    <div class="product-price">
                                        <span><?php echo number_format($gia_khuyen_mai) ?> VĐN</span>
                                        <span class="old-price"><?php echo number_format($gia) ?> VĐN</span>
                                        <span class="discount-tag">-72%</span>
                                    </div>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="rating d-inline-block">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                        <span class="ml-5"> (3.5)</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>