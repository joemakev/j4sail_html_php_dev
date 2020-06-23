<?php require_once('php-inc-header.php'); ?>

    <!-- Main Content -->
    <section id="main">
        <div class="pageHeader bgCover bgTopRight mb60" style='background-image:url(assets/img/placeholder-1920x450.png)'>
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

        <div class="blogBox mb60">
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

                        <div class="widget productCat blogCat">
                            <h5 class="title mb-3 textBlue"><b>Blog Categories</b></h5>
                            <nav>
                                <ul>
                                    <li>
                                        <a href="#">Blog Category 1</a>
                                        <ul>
                                            <li><a href="#">Sub Blog Category 1</a></li>
                                            <li><a href="#">Sub Blog Category 2</a></li>
                                            <li><a href="#">Sub Blog Category 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Blog Category 2</a></li>
                                    <li>
                                        <a href="#">Blog Category 3</a>
                                        <ul>
                                            <li><a href="#">Sub Blog Category 1</a></li>
                                            <li><a href="#">Sub Blog Category 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Blog Category 4</a></li>
                                    <li><a href="#">Blog Category 5</a></li>
                                </ul>
                            </nav>
                        </div>

                        <div class="widget productRelated blogRelated">
                            <h5 class="title mb-3 textBlue"><b>Related Posts</b></h5>
                            <nav>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <div>
                                                <img src="assets/img/placeholder-300x300.png" alt="product">
                                            </div>
                                            <div>
                                                <strong>Sample Title for Blog Post 1</strong>
                                                <p>
                                                    <span>March 16, 2020</span>
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div>
                                                <img src="assets/img/placeholder-300x300.png" alt="product">
                                            </div>
                                            <div>
                                                <strong>Sample Title for Blog Post 2</strong>
                                                <p>
                                                    <span>February 21, 2020</span>
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div>
                                                <img src="assets/img/placeholder-300x300.png" alt="product">
                                            </div>
                                            <div>
                                                <strong>Sample Title for Blog Post 3</strong>
                                                <p>
                                                    <span>January 8, 2020</span>
                                                </p>
                                            </div>
                                        </a>
                                    </li>

                                </ul>
                            </nav>
                        </div>

                        <div class="widget productCat blogArchive mb-0">
                            <h5 class="title mb-3 textBlue"><b>Archives</b></h5>
                            <nav>
                                <ul>
                                    <li>
                                        <a href="#">December 2020</a>
                                        <ul>
                                            <li><a href="#">December 3, 2020</a></li>
                                            <li><a href="#">December 1, 2020</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">October 2020</a></li>
                                    <li><a href="#">July 2020</a></li>
                                </ul>
                            </nav>
                        </div>

                    </div> <!-- sidebar -->

                    <div class="blogList col-md-9">
                        <div class="blogItem">
                            <a href="#" class="photo">
                                <img src="assets/img/placeholder-400x400.png" alt="blog photo">
                            </a>
                            <div class="text">
                                <h3 class="mb-2"><b><a href="#" class="textBlue">Sample Title for Blog Post 16</a></b></h3>
                                <div class="blogAuthor mb-2">
                                    <a href="#">Category 1</a>
                                    <span>December 31, 2020</span>
                                    <span>Written by Author</span>
                                </div>
                                <div class="excerpt mb-2">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </div>
                                <div>
                                    <a href="#" class="readMore">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="blogItem">
                            <a href="#" class="photo">
                                <img src="assets/img/placeholder-400x400.png" alt="blog photo">
                            </a>
                            <div class="text">
                                <h3 class="mb-2"><b><a href="#" class="textBlue">Sample Title for Blog Post 15</a></b></h3>
                                <div class="blogAuthor mb-2">
                                    <a href="#">Category 2</a>
                                    <span>December 30, 2020</span>
                                    <span>Written by Author</span>
                                </div>
                                <div class="excerpt mb-2">
                                    Ei qui diceret voluptua luptatum, te dolorum detracto hendrerit sed, ad per offendit consetetur. Offendit eleifend moderatius ex vix, quem odio mazim et qui, purto expetendis cotidieque quo cu, veri persius vituperata ei nec. Vivendum intellegat et qui, ei denique consequuntur vix. Pri posse graeco definitiones cu, id eam populo quaestio adipiscing, usu quod malorum te.
                                </div>
                                <div>
                                    <a href="#" class="readMore">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="blogItem">
                            <a href="#" class="photo">
                                <img src="assets/img/placeholder-400x400.png" alt="blog photo">
                            </a>
                            <div class="text">
                                <h3 class="mb-2"><b><a href="#" class="textBlue">Sample Title for Blog Post 14</a></b></h3>
                                <div class="blogAuthor mb-2">
                                    <a href="#">Category 3</a>
                                    <span>December 29, 2020</span>
                                    <span>Written by Author</span>
                                </div>
                                <div class="excerpt mb-2">
                                    Pri posse graeco definitiones cu, id eam populo quaestio adipiscing, usu quod malorum te. Offendit eleifend moderatius ex vix, quem odio mazim et qui, purto expetendis cotidieque quo cu, veri persius vituperata ei nec. Scripta periculis ei eam, te pro movet reformidans. Scripta periculis ei eam, te pro movet reformidans. No epicuri hendrerit consetetur sit, sit dicta adipiscing ex.
                                </div>
                                <div>
                                    <a href="#" class="readMore">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="blogItem">
                            <a href="#" class="photo">
                                <img src="assets/img/placeholder-400x400.png" alt="blog photo">
                            </a>
                            <div class="text">
                                <h3 class="mb-2"><b><a href="#" class="textBlue">Sample Title for Blog Post 13</a></b></h3>
                                <div class="blogAuthor mb-2">
                                    <a href="#">Category 4</a>
                                    <span>December 28, 2020</span>
                                    <span>Written by Author</span>
                                </div>
                                <div class="excerpt mb-2">
                                    Offendit eleifend moderatius ex vix, quem odio mazim et qui, purto expetendis cotidieque quo cu, veri persius vituperata ei nec. Scripta periculis ei eam, te pro movet reformidans. Vivendum intellegat et qui, ei denique consequuntur vix. Offendit eleifend moderatius ex vix, quem odio mazim et qui, purto expetendis cotidieque quo cu, veri persius vituperata ei nec.
                                </div>
                                <div>
                                    <a href="#" class="readMore">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="blogItem">
                            <a href="#" class="photo">
                                <img src="assets/img/placeholder-400x400.png" alt="blog photo">
                            </a>
                            <div class="text">
                                <h3 class="mb-2"><b><a href="#" class="textBlue">Sample Title for Blog Post 12</a></b></h3>
                                <div class="blogAuthor mb-2">
                                    <a href="#">Category 5</a>
                                    <span>December 27, 2020</span>
                                    <span>Written by Author</span>
                                </div>
                                <div class="excerpt mb-2">
                                    Qui gloriatur scribentur et, id velit verear mel, cum no porro debet. Offendit eleifend moderatius ex vix, quem odio mazim et qui, purto expetendis cotidieque quo cu, veri persius vituperata ei nec. Vivendum intellegat et qui, ei denique consequuntur vix. Vivendum intellegat et qui, ei denique.
                                </div>
                                <div>
                                    <a href="#" class="readMore">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="productPageInfo blogPagination">
                            <div class="pageNumber">
                                <ul>
                                    <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li><span>2</span></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                                </ul>
                            </div>
                        </div>


                    </div> <!-- blogList -->
                </div>
            </div>
        </div> <!-- blogBox -->
        
    </section> <!-- end of #main -->

    <?php require_once('php-inc-cta-bottom.php'); ?>

<?php require_once('php-inc-footer.php'); ?>