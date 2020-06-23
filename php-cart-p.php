<?php require_once('php-inc-header.php'); ?>

    <!-- Main Content -->
    <section id="main">
        <?php require_once('php-inc-page-header-mini.php'); ?>

        <div class="cartBox mb60">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="shop_table shop_table_responsive cart table">
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">&nbsp;</th>
                                        <th class="product-name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Subtotal</th>
                                        <th class="product-remove">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="cart_item">
                                        <td class="product-thumbnail">
                                            <a href="#"><img src="assets/img/products/product-related-01.jpg" alt="product"></a>
                                        </td>
                                        <td data-title="Product" class="product-name">
                                            <a href="#">Rare Gadget Item No. 1</a>
                                        </td>
                                        <td data-title="Price" class="product-price">
                                            <span class="amount">$890.00</span>
                                        </td>
                                        <td data-title="Quantity" class="product-quantity">
                                            <div class="quantity quantityBox">
                                                <button class="minus"><i class="fa fa-minus-circle"></i></button>
                                                <input type="number" step="1" min="1" value="1" value="1" size="4">
                                                <button class="plus"><i class="fa fa-plus-circle"></i></button>
                                            </div>
                                        </td>
                                        <td data-title="Total" class="product-subtotal">
                                            <span class="amount">$890.00</span>
                                        </td>
                                        <td class="product-remove">
                                            <a class="remove" href="#"><i class="fas fa-times"></i></a>                   
                                        </td>
                                    </tr>

                                    <tr class="cart_item">
                                         <td class="product-thumbnail">
                                            <a href="#"><img src="assets/img/products/product-related-02.jpg" alt="product"></a>
                                        </td>
                                        <td data-title="Product" class="product-name">
                                            <a href="#">Rare Gadget Special Good Useful Item No. 2</a>
                                        </td>
                                        <td data-title="Price" class="product-price">
                                            <span class="amount">$600.00</span>
                                        </td>
                                        <td data-title="Quantity" class="product-quantity">
                                            <div class="quantity quantityBox">
                                                <button class="minus"><i class="fa fa-minus-circle"></i></button>
                                                <input type="number" step="1" min="1" value="1" value="1" size="4">
                                                <button class="plus"><i class="fa fa-plus-circle"></i></button>
                                            </div>
                                        </td>
                                        <td data-title="Total" class="product-subtotal">
                                            <span class="amount">$600.00</span>
                                        </td>
                                        <td class="product-remove">
                                            <a class="remove" href="#"><i class="fas fa-times"></i></a>                    
                                        </td>
                                    </tr>

                                    <tr class="cart_item">
                                         <td class="product-thumbnail">
                                            <a href="#"><img src="assets/img/products/product-related-03.jpg" alt="product"></a>
                                        </td>
                                        <td data-title="Product" class="product-name">
                                            <a href="#">Rare Gadget Special Good Useful Item No. 3</a>
                                        </td>
                                        <td data-title="Price" class="product-price">
                                            <span class="amount">$900.00</span>
                                        </td>
                                        <td data-title="Quantity" class="product-quantity">
                                            <div class="quantity quantityBox">
                                                <button class="minus"><i class="fa fa-minus-circle"></i></button>
                                                <input type="number" step="1" min="1" value="1" value="1" size="4">
                                                <button class="plus"><i class="fa fa-plus-circle"></i></button>
                                            </div>
                                        </td>
                                        <td data-title="Total" class="product-subtotal">
                                            <span class="amount">$900.00</span>
                                        </td>
                                        <td class="product-remove">
                                            <a class="remove" href="#"><i class="fas fa-times"></i></a>                    
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-md-6 pt-3">
                        <div class="cart-form coupon">
                            <input type="submit" value="Update cart" name="update_cart" class="btn btn-secondary mb-4">
                            <div> 
                                <input type="text" placeholder="Coupon code" value="" id="coupon_code" class="form-control default mb-3" name="coupon_code"> 
                                <input type="submit" value="Apply" name="apply_coupon" class="btn btn-primary">
                            </div>
                        </div>
                    </div>

                    <div class="cart_total_box col-md-6 pt-3">
                        <h3><b>Cart Totals</b></h3>
                        <div class="table-responsive">
                            <table class="cart-total table">
                                <tbody>
                                    <tr class="cart-subtotal">
                                        <th>Subtotal</th>
                                        <td class="text-right" data-title="Subtotal"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>2,390.00</span></td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td class="text-right" data-title="Total"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span><b>2,390.00</b></span> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="wc-proceed-to-checkout text-right">
                            <a href="php-checkout-p.php" class="btn btn-primary py-3 px-4"><b>Proceed to Checkout</b></a>
                        </div>
                    </div>
                </div>




            </div>
        </div> <!-- cartBox -->
        
    </section> <!-- end of #main -->

    <?php require_once('php-inc-cta-bottom.php'); ?>

<?php require_once('php-inc-footer.php'); ?>