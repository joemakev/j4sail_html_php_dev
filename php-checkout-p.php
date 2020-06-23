<?php require_once('php-inc-header.php'); ?>

    <!-- Main Content -->
    <section id="main">
        <?php require_once('php-inc-page-header-mini.php'); ?>

        <div class="checkoutBox mb60">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-12">
                        <div class="returnCustomerBox clickBox mb-4">
                            <div class="return-customer">
                                Returning customer? <a href="#" class="text-primary expandClick">Click here to login</a>
                            </div>
                            <form class="login-form inputForm mt-3" style="display: none;">
                                <p>If you have shopped with us before, please enter your details below. If you are a new customer, please proceed to the Billing section.</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Username or email *</label>
                                            <input type="text" name="name" id="name" class="form-control" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Password *</label>
                                            <input type="password" name="password" id="password" class="form-control" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="#" class="btn btn-primary mr-2">Login</a>
                                        <label class="forCheck" for="rememberCheck">
                                            <input name="rememberCheck" type="checkbox" id="rememberCheck"> Remember Me
                                        </label>
                                        <div class="mt-2"><a class="lost-password" href="#">Lost your password?</a></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    
                        <div class="haveCouponBox clickBox">
                            <div class="notice coupon">
                                Have a coupon? <a href="#" class="text-primary expandClick">Click here to enter your code</a>
                            </div>
                            <form class="checkout_coupon inputForm mt-3" method="post" style="display: none;">
                                <p>If you have a coupon code, please apply it below.</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="coupon"> 
                                            <input type="text" placeholder="Coupon code" value="" id="coupon_code" class="form-control mb-3" name="coupon_code"> 
                                            <input type="submit" value="Apply" name="apply_coupon" class="btn btn-primary">
                                        </div>     
                                    </div>       
                                </div>                                                             
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h3>Billing details</h3>
                        <form class="bill-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>First name <span class="text-primary">*</span></label>
                                        <input type="text" name="fname" id="fname" class="form-control" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Last name <span class="text-primary">*</span></label>
                                        <input type="text" name="lname" id="lname" class="form-control" required="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Company name (optional) <span class="text-primary">*</span></label>
                                        <input type="text" name="company" id="company" class="form-control" required="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Country <span class="text-primary">*</span></label>
                                        <?php require_once('php-inc-checkout-country.php'); ?>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Street address <span class="text-primary">*</span></label>
                                        <input type="text" name="street" id="street" class="form-control" required="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Postcode / ZIP (optional)</label>
                                        <input type="text" name="zipcode" id="zipcode" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Town / City <span class="text-primary">*</span></label>
                                        <input type="text" name="city" id="city" class="form-control" required="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Phone <span class="text-primary">*</span></label>
                                        <input type="text" name="phone" id="phone" class="form-control" required="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Email Address <span class="text-primary">*</span></label>
                                        <input type="email" name="email" id="email" class="form-control" required="">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="bill-checkbox">
                                        <label class="forCheck">
                                            <input type="checkbox" name="createaccount" id="createaccount" class="" required=""> Create an account?
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h3>Additional information</h3>
                                        <label>Order notes (optional)</label>
                                        <textarea type="text" rows="6" name="notes" id="your-notes" class="form-control" required=""></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <h3>Your oder</h3>
                        <div class="order-review table-responsive">
                            <table class="table shop_table shop_table_responsive shop-checkout">
                                <tbody>
                                    <tr class="cart_item no-border">
                                        <th class="product-name">Rare Gadget Item No. 1</th>
                                        <td class="product-total text-right">$890.00</td>
                                    </tr>
                                    <tr class="cart_item no-border">
                                        <th class="product-name">Rare Gadget Special Good Useful Item No. 2</th>
                                        <td class="product-total text-right">$600.00</td>
                                    </tr>
                                    <tr class="cart_item no-border">
                                        <th class="product-name">Rare Gadget Special Good Useful Item No. 3</th>
                                        <td class="product-total text-right">$900.00</td>
                                    </tr>
                                    <tr class="cart-subtotal no-border">
                                        <th><b>Cart Subtotal:</b></th>
                                        <td class="text-right">$2,390.00</td>
                                    </tr>
                                    <tr class="order-total">
                                        <th><b>Order Total:</b></th>
                                        <td class="text-right"><b>$2,390.00</b></td>
                                    </tr>
                                    <tr class="place-order">
                                        <th colspan="2">
                                            <p>Vivendum intellegat et qui, ei denique consequuntur vix. Nobis perfecto id vix, dicat vocent id nam. Scripta periculis ei eam, te pro movet reformidans. Ad per diam dicant interesset, lorem iusto sensibus ut sed. Prima zril primis eu sed, mei ei eirmod moderatius adversarium. Scripta periculis ei eam, te pro movet reformidans.</p>
                                            <a href="#" class="btn btn-primary py-3 px-4"><b>Place Order</b></a>
                                        </th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- checkoutBox -->
        
    </section> <!-- end of #main -->

    <?php require_once('php-inc-cta-bottom.php'); ?>

<?php require_once('php-inc-footer.php'); ?>