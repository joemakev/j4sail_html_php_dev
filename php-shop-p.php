<?php require_once('php-inc-header.php'); ?>

    <!-- Main Content -->
    <section id="main">
        <div class="pageHeader downSize bgCover mb60" style='background-image:url(assets/img/pixabay-computer-freephotocc-laptop-coffee-02.jpg)'>
            <div class="container">
                <div class="row">
                    <div class="ccol col-md-12">
                        <h2 class="page-title mb-3"><?php echo $pageName; ?></h2>
                        <ul class="breadcrumbs">
                            <li><a href="php-index-p.php">Home</a></li>
                            <li class="active"><?php echo $pageName; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- pageHeader -->

        <div class="shopBox mb60">
            <div class="container">
                <div class="row">
                    <div class="sidebar col-md-3">
                        <div class="widget search">
                            <h5 class="title mb-3 textBlue"><b>Search Site</b></h5>
                            <form class="searchForm" action="search.php" method="get">
                                <div class="simple-search input-group">
                                    <input class="form-control" name="s" type="search" placeholder="Search...">
                                    <span class="input-group-append">
                                        <button class="btn" type="submit">
                                            <i class="fa fa-search header-nav-top-icon"></i>
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div>

                        <div class="widget filterPrice">
                            <h5 class="title mb-3 textBlue"><b>Filter by Price</b></h5>
                            <div id="priceRangeSlider"></div>
                            <div class="priceText mt-3 mb-2">
                                <span>Price: </span>
                                <span>__</span>
                                <span> to </span>
                                <span>__</span>
                            </div>
                            <div>
                                <button class="btn btn-primary px-3 py-1">Filter</button>
                            </div>
                        </div>

                        <div class="widget productCat">
                            <h5 class="title mb-3 textBlue"><b>Product Categories</b></h5>
                            <nav>
                                <ul>
                                    <li>
                                        <a href="#">Computer Accessories</a>
                                        <ul>
                                            <li><a href="#">Processor</a></li>
                                            <li><a href="#">Hard Disk</a></li>
                                            <li><a href="#">Memory</a></li>
                                            <li><a href="#">Graphics Card</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Office Furnitures</a></li>
                                    <li><a href="#">Office Hardware</a></li>
                                    <li>
                                        <a href="#">IT Equipment</a>
                                        <ul>
                                            <li><a href="#">LAN Cables</a></li>
                                            <li><a href="#">Network Switch</a></li>
                                            <li><a href="#">Routers</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Power Tools for Engineering</a>
                                        <ul>
                                            <li><a href="#">Hammer Drill 13mm (Heavy Duty)</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <div class="widget productRelated mb-0">
                            <h5 class="title mb-3 textBlue"><b>Related Products</b></h5>
                            <nav>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <div>
                                                <img src="assets/img/products/product-related-01.jpg" alt="product">
                                            </div>
                                            <div>
                                                <strong>USB Flash Drive</strong>
                                                <p>
                                                    <span class="regPrice">$12.99</span>
                                                    <span class="currentPrice">$12.99</span>
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div>
                                                <img src="assets/img/products/product-related-02.jpg" alt="product">
                                            </div>
                                            <div>
                                                <strong>Hard Disk Drive SATA for DESKTOP</strong>
                                                <p>
                                                    <span class="regPrice">$124.00</span>
                                                    <span class="currentPrice">$99.00</span>
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div>
                                                <img src="assets/img/products/product-related-03.jpg" alt="product">
                                            </div>
                                            <div>
                                                <strong>Network Cable (1 box, 100 meters)</strong>
                                                <p>
                                                    <span class="regPrice">$72.00</span>
                                                    <span class="currentPrice">$55.45</span>
                                                </p>
                                            </div>
                                        </a>
                                    </li>

                                </ul>
                            </nav>
                        </div>

                    </div> <!-- sidebar -->

                    <div class="productList col-md-9">
                        <div class="row mb-4">
                            <div class="productPageInfo col-md-12">
                                <div class="sorting">
                                    <select id="sortSelect">
                                        <option selected value="Default Sorting">Default Sorting</option>
                                        <option value="Default">Sort by Price: Low to High</option>
                                        <option value="Latest">Sort by Latest</option>
                                        <option value="Price Low to High">Sort by Price: Low to High</option>
                                        <option value="Price High to Low">Sort by Price: High to Low</option>
                                    </select>
                                </div>
                                <div class="resultsCount">
                                    <span>Showing 1-8 of 100 products</span>
                                </div>
                                <div class="pageNumber">
                                    <ul>
                                        <li><span>1</span></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="productRow row">
                            <div class="product col-md-6">
                                <a href="php-product-detail-p.php">
                                    <figure class="photo">
                                        <div class="tagSale">
                                            <span>Sale</span>
                                        </div>
                                        <img src="assets/img/products/product-list-02.jpg" alt="product">
                                        <div class="overlay"></div>
                                    </figure>
                                    <div class="productInfo">
                                        <div class="productName"><strong>Portable Gaming Laptop Comodor5 Model</strong></div>
                                        <p class="price">
                                            <span class="regPrice">$2,000.00</span>
                                            <span class="currentPrice">$1,600.00</span>
                                            <span><button class="btn btn-sm btn-primary addToCart"><i class="fa fa-shopping-cart"></i> Add to Cart</button></span>
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="product col-md-6">
                                <a href="#">
                                    <figure class="photo">
                                        <img src="assets/img/products/product-list-01.jpg" alt="product">
                                        <div class="overlay"></div>
                                    </figure>
                                    <div class="productInfo">
                                        <div class="productName"><strong>Optical Gaming Mouse 1000 DPI</strong></div>
                                        <p class="price">
                                            <span class="currentPrice">$32.00</span>
                                            <span><button class="btn btn-sm btn-primary addToCart"><i class="fa fa-shopping-cart"></i> Add to Cart</button></span>
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="product col-md-6">
                                <a href="#">
                                    <figure class="photo">
                                        <img src="assets/img/products/product-list-03.jpg" alt="product">
                                        <div class="overlay"></div>
                                    </figure>
                                    <div class="productInfo">
                                        <div class="productName"><strong>24 Port Network Switch with Surge Protection</strong></div>
                                        <p class="price">
                                            <span class="currentPrice">$162.80</span>
                                            <span><button class="btn btn-sm btn-primary addToCart"><i class="fa fa-shopping-cart"></i> Add to Cart</button></span>
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="product col-md-6">
                                <a href="#">
                                    <figure class="photo">
                                        <div class="tagSale">
                                            <span>Sale</span>
                                        </div>
                                        <img src="assets/img/products/product-list-04.jpg" alt="product">
                                        <div class="overlay"></div>
                                    </figure>
                                    <div class="productInfo">
                                        <div class="productName"><strong>USB Drive 32 GB with cover</strong></div>
                                        <p class="price">
                                            <span class="regPrice">$10.50</span>
                                            <span class="currentPrice">$6.00</span>
                                            <span><button class="btn btn-sm btn-primary addToCart"><i class="fa fa-shopping-cart"></i> Add to Cart</button></span>
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="product col-md-6">
                                <a href="#">
                                    <figure class="photo">
                                        <div class="tagSale">
                                            <span>Sale</span>
                                        </div>
                                        <img src="assets/img/products/product-list-05.jpg" alt="product">
                                        <div class="overlay"></div>
                                    </figure>
                                    <div class="productInfo">
                                        <div class="productName"><strong>Comfortable Office Chair</strong></div>
                                        <p class="price">
                                            <span class="regPrice">$46.00</span>
                                            <span class="currentPrice">$38.00</span>
                                            <span><button class="btn btn-sm btn-primary addToCart"><i class="fa fa-shopping-cart"></i> Add to Cart</button></span>
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="product col-md-6">
                                <a href="#">
                                    <figure class="photo">
                                        <img src="assets/img/products/product-list-06.jpg" alt="product">
                                        <div class="overlay"></div>
                                    </figure>
                                    <div class="productInfo">
                                        <div class="productName"><strong>Memory RAM 8GB DDR5 Flash Access</strong></div>
                                        <p class="price">
                                            <span class="currentPrice">$16.00</span>
                                            <span><button class="btn btn-sm btn-primary addToCart"><i class="fa fa-shopping-cart"></i> Add to Cart</button></span>
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="product col-md-6">
                                <a href="#">
                                    <figure class="photo">
                                        <img src="assets/img/products/product-list-07.jpg" alt="product">
                                        <div class="overlay"></div>
                                    </figure>
                                    <div class="productInfo">
                                        <div class="productName"><strong>Hardened Carbon Steel Drill Bit 13</strong></div>
                                        <p class="price">
                                            <span class="currentPrice">$6.00</span>
                                            <span><button class="btn btn-sm btn-primary addToCart"><i class="fa fa-shopping-cart"></i> Add to Cart</button></span>
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="product col-md-6">
                                <a href="#">
                                    <figure class="photo">
                                        <div class="tagSale">
                                            <span>Sale</span>
                                        </div>
                                        <img src="assets/img/products/product-list-08.jpg" alt="product">
                                        <div class="overlay"></div>
                                    </figure>
                                    <div class="productInfo">
                                        <div class="productName"><strong>64-bit Multi-Threaded Processor @ 3.0 GHZ</strong></div>
                                        <p class="price">
                                            <span class="regPrice">$499.00</span>
                                            <span class="currentPrice">$399.00</span>
                                            <span><button class="btn btn-sm btn-primary addToCart"><i class="fa fa-shopping-cart"></i> Add to Cart</button></span>
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div> <!-- productRow -->

                        <div class="row mt-4">
                            <div class="productPageInfo col-md-12">
                                <div class="sorting">
                                    <select id="sortSelect">
                                        <option selected value="Default Sorting">Default Sorting</option>
                                        <option value="Default">Sort by Price: Low to High</option>
                                        <option value="Latest">Sort by Latest</option>
                                        <option value="Price Low to High">Sort by Price: Low to High</option>
                                        <option value="Price High to Low">Sort by Price: High to Low</option>
                                    </select>
                                </div>
                                <div class="resultsCount">
                                    <span>Showing 1-8 of 100 products</span>
                                </div>
                                <div class="pageNumber">
                                    <ul>
                                        <li><span>1</span></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div> <!-- productList -->

                </div>
            </div>
        </div> <!-- shopBox -->
        
    </section> <!-- end of #main -->

    <?php require_once('php-inc-cta-bottom.php'); ?>

<?php require_once('php-inc-footer.php'); ?>