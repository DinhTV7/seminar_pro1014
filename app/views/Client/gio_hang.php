<?php
include('./app/controllers/CartController.php');
?>

<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-20">
                    <div class="card-body">
                        <div class="shop-cart-box">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a href="cart.html" class="active">
                                        <i class="feather-shopping-cart"></i> Shopping Cart
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="address.html">
                                        <i class="feather-map"></i> Address
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="delivery.html">
                                        <i class="feather-truck"></i> Delivery
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="payment.html">
                                        <i class="feather-credit-card"></i> Payment
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive shopping-table">
                    <table class="table">
                        <thead>
                            <tr class="table-head">
                                <th>Product</th>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Product Price</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $tong_tien_hang = 0;
                            $thue = 0;
                            $tong_hoa_don = 0;
                            foreach ($cart as $productId => $productData) :
                                $quantity = $productData['quantity'];
                                $san_pham = chi_tiet_san_pham($productId);
                                $id = $san_pham['id'];
                                $ten_san_pham = $san_pham['ten_san_pham'];
                                $gia = $san_pham['gia'];
                                $gia_khuyen_mai = $san_pham['gia_khuyen_mai'];
                                $mo_ta = $san_pham['mo_ta'];
                                $so_luong = $san_pham['so_luong'];
                                $image = $san_pham['image'];
                                // Tính giá trị cho sản phẩm hiện tại và cộng vào tổng tiền hàng
                                $tien_hang = $gia_khuyen_mai * $quantity;
                                $tong_tien_hang += $tien_hang;

                                $thue = $tong_tien_hang * 0.1;

                                $tong_hoa_don = $tong_tien_hang + $thue;
                            ?>
                                <tr class="table-head">
                                    <td class="image product-thumbnail">
                                        <a href="#"><img src="./public/assets/img/shop/product-11.jpg" class="img-fluid" alt></a>
                                    </td>
                                    <td><a href="#"><?php echo $ten_san_pham ?></a></td>
                                    <td class="text-center detail-info" data-title="Stock">
                                        <div class="detail-extralink mr-15">
                                            <div class="detail-qty border radius">
                                                <a href="#" class="qty-down <?php echo 'qty-down'.$productId; ?>"><i class="fi-rs-angle-small-down"></i></a>
                                                <span class="qty-val"><?php echo $productData['quantity']; ?></span>
                                                <a href="#" class="qty-up <?php echo 'qty-up'.$productId; ?>"><i class="fi-rs-angle-small-up"></i></a>
                                            </div>
                                        </div>
                                    </td>
                                    <td><?php echo number_format($gia_khuyen_mai) ?> VNĐ</td>
                                    <td><?php echo number_format($tien_hang) ?> VNĐ</td>
                                    <!-- Khi click thì sẽ xóa sản phẩm khỏi giỏ hàng -->
                                    <td>
                                        <a href="#" class="table-btn-close remove_product" data-product-id="<?php echo $productId; ?>">
                                            <i class="feather-x-circle"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="shop-cart">
                <div class="row">
                    <div class="col-lg-8 col-md-6">

                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="shop-cart-info">
                                    <p>Tổng tiền hàng: <span><?php echo number_format($tong_tien_hang) ?> VNĐ</span></p>
                                    <p>Thuế <span><?php echo number_format($thue) ?> VNĐ</span></p>
                                    <p>Tổng tiền <span><?php echo number_format($tong_hoa_don) ?> VNĐ</span></p>
                                    <a href="checkout.html" class="btn checkout-btn w-100">Go To Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>