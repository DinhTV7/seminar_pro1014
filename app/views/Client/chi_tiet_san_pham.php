<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 m-auto">
                <div class="product-detail accordion-detail product" data-id="<?php echo $chi_tiet_san_pham['id'] ?>">
                    <div class="row mb-50">
                        <div class="col-md-5 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                            <div class="detail-gallery">
                                <div class="position-relative">
                                    <div class="product-image-slider">
                                        <figure class="border-radius-7">
                                            <img src="./public/assets/img/shop/product-big-1.jpg" alt="product image" />
                                        </figure>
                                        <figure class="border-radius-7">
                                            <img src="./public/assets/img/shop/product-big-2.jpg" alt="product image" />
                                        </figure>
                                        <figure class="border-radius-7">
                                            <img src="./public/assets/img/shop/product-big-1.jpg" alt="product image" />
                                        </figure>
                                        <figure class="border-radius-7">
                                            <img src="./public/assets/img/shop/product-big-2.jpg" alt="product image" />
                                        </figure>
                                        <figure class="border-radius-7">
                                            <img src="./public/assets/img/shop/product-big-1.jpg" alt="product image" />
                                        </figure>
                                    </div>
                                    <span class="zoom-icon"><i class="feather-maximize-2"></i></span>
                                </div>

                                <div class="slider-nav-thumbnails">
                                    <div><img src="./public/assets/img/shop/product-big-1.jpg" alt="product image" />
                                    </div>
                                    <div><img src="./public/assets/img/shop/product-big-2.jpg" alt="product image" />
                                    </div>
                                    <div><img src="./public/assets/img/shop/product-big-1.jpg" alt="product image" />
                                    </div>
                                    <div><img src="./public/assets/img/shop/product-big-2.jpg" alt="product image" />
                                    </div>
                                    <div><img src="./public/assets/img/shop/product-big-1.jpg" alt="product image" />
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="detail-info pr-30 pl-30">
                                <h4 class="title-detail"><?php echo $chi_tiet_san_pham['ten_san_pham'] ?></h4>
                                <div class="clearfix product-price-cover">
                                    <div class="product-price primary-color float-left">
                                        <span class="current-price"><?php echo number_format($chi_tiet_san_pham['gia_khuyen_mai']) ?> VNĐ</span>
                                        <span class="old-price"><?php echo number_format($chi_tiet_san_pham['gia']) ?> VNĐ</span>
                                        <span class="save-price">-72%</span>
                                    </div>
                                </div>
                                <ul class="pro-code">
                                    <li>Product Code : <span class="text-black">T285HS</span></li>
                                    <li>Categories : <span class="text-black">Shirt</span></li>
                                </ul>
                                <div class="rating d-inline-block mb-3">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <i class="far fa-star"></i>
                                    <span class="ml-5"> (3.5)</span>
                                </div>
                                <p class="in-stock text-brand">Số lượng: <?php echo $chi_tiet_san_pham['so_luong'] ?></p>
                                <div class="detail-extralink">
                                    <div class="detail-qty border radius">
                                        <a href="#" class="qty-down"><i class="fi-rs-minus-small"></i></a>
                                        <span class="qty-val">1</span>
                                        <a href="#" class="qty-up"><i class="fi-rs-plus-small"></i></a>
                                    </div>
                                    <div class="size-select">
                                        <select class="form-select">
                                            <option>Size : Small ( $ 15.00 )</option>
                                            <option>Size : Medium ( $ 20.00 )</option>
                                            <option>Size : Large ( $ 25.00 )</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="product-extra-link2">
                                    <button type="submit" class="button button-add-to-cart add-to-cart me-3"><i class="fi-rs-shopping-cart"></i>Add to cart</button>
                                </div>
                                <div class="pro-share">
                                    <ul>
                                        <li class="me-2"><span>Share :</span></li>
                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="product-info">
                        <div class="tab-style3">
                            <ul class="nav nav-tabs text-uppercase">
                                <li class="nav-item">
                                    <a class="nav-link" id="Description-tab" data-bs-toggle="tab" href="#Description">Description</a>
                                </li>
                            </ul>
                            <div class="tab-content shop_info_tab entry-main-content">
                                        <?php echo $chi_tiet_san_pham['mo_ta'] ?>
                            </div>
                        </div>
                    </div>

                    <section class="feature-products">
                        <div class="container">
                            <div class="section-title wow animate__animated animate__fadeIn" data-wow-delay="0">
                                <h3>SẢN PHẨM TƯƠNG TỰ</h3>
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
                                                <div class="product-card wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                                    <div class="product-img-col">
                                                        <div class="product-img product-img-zoom">
                                                            <a href="chi_tiet_san_pham.php?act=san_pham">
                                                                <img class="default-img" src="./public/assets/img/shop/product-11.jpg" alt>
                                                                <img class="hover-img" src="./public/assets/img/shop/product-11.jpg" alt>
                                                            </a>
                                                        </div>
                                                        <div class="product-inner-details">
                                                            <a aria-label="Quick view" class="product-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                            <a aria-label="Search" class="product-btn" href="#"><i class="fi-rs-search"></i></a>
                                                            <a aria-label="Add To Wishlist" class="product-btn" href="wishlist.html"><i class="fi-rs-heart"></i></a>
                                                            <a href="cart.html" aria-label="Cart" class="product-btn"><i class="fi-rs-shopping-cart"></i></a>
                                                        </div>
                                                        <div class="product-badge">
                                                            <span class="best">Sale</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h2><a href="?act=san_pham"><?php echo $ten_san_pham ?></a></h2>
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

                </div>
            </div>
        </div>
    </div>
</div>