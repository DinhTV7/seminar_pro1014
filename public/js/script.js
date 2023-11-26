$(document).ready(function() {
    // Thêm sản phẩm vào giỏ hàng
    $(document).on('click', '.add-to-cart', function() {
        var productId = $(this).closest('.product').data('id');
        if (document.querySelector('.qty-val')) {
            var quantity = document.querySelector('.qty-val').innerHTML;
        } else {
            var quantity = 1;
        }
        addToCart(productId, quantity);
    });

    // Xóa sản phẩm khỏi giỏ hàng
    $(document).on('click', '.remove_product', function(e) {
        e.preventDefault();

        var productId = $(this).data('product-id');
        removeFromCart(productId);
    });

    displayCart();

    function addToCart(productId, quantity) {
        $.ajax({
            url: 'app/controllers/CartController.php',
            method: 'POST',
            data: { 
                product_id: productId,
                quantity: quantity
            },
            success: function() {
                displayCart();
                alert("Bạn đã cập nhật giỏ hàng thành công!");
            }
        });
    }

    function removeFromCart(productId) {
        $.ajax({
            url: 'app/controllers/CartController.php',
            method: 'POST',
            data: { remove_product_id: productId },
            success: function() {
                displayCart();
                alert("Sản phẩm đã được xóa khỏi giỏ hàng!");
                location.reload();
            }
        });
    }

    function displayCart() {
        // Load and display the cart
        $('#cart').load('cart.php');
    }
});
