<?php require_once('php-inc-header.php'); ?>

    <!-- Main Content -->
    <section id="main">
        <div class="pageHeader bgCover mb60" style='background-image:url(assets/img/placeholder-1920x450.png)'>
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

        <section class="contactInfo mb60">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="text-primary mb-3"><b>Tell Us About Your Project</b></h4>
                        <p class="mb-0">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Elitr iudico dignissim ea sed, duis moderatius definitiones no cum. Offendit eleifend moderatius ex vix, quem odio mazim et qui, purto expetendis cotidieque quo cu, veri persius vituperata ei nec. Scripta periculis ei eam, te pro movet reformidans.</p>
                    </div>
                    <div class="fileDownloadList col-md-6">
                    <h4 class="text-primary mb-3"><b>File Download</b></h4>
                        <ul>
                            <li>
                                <a href="files/pdf-test.pdf" target="_blank">
                                    <span>Inquiry Form</span>
                                    <i class="far fa-file-pdf"></i>
                                </a>
                            </li>
                            <li>
                                <a href="files/pdf-test.pdf" target="_blank">
                                    <span>Specification Sheet</span>
                                    <i class="far fa-file-pdf"></i>
                                </a>
                            </li>
                            <li>
                                <a href="files/pdf-test.pdf" target="_blank">
                                    <span>Sample Projects</span>
                                    <i class="far fa-file-pdf"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12"><hr></div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form id="inquireForm" class="contactForm" method="post" v-cloak>
                            <h3 class='mb-3'><b>Fill Out The Form Below:</b></h3>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" placeholder="Your name*" v-model='form.inputs.name' :class='form.errors.name ? "error_input" : ""'>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control" placeholder="Your email*" v-model='form.inputs.email' :class='form.errors.email ? "error_input" : ""'>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="number" class="form-control" placeholder="Phone number*" v-model='form.inputs.phone' :class='form.errors.phone ? "error_input" : ""'>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" placeholder="Company*" v-model='form.inputs.company' :class='form.errors.company ? "error_input" : ""'>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <textarea type="text" rows="6" class="form-control" placeholder="Tell us about it*" v-model='form.inputs.message' :class='form.errors.message ? "error_input" : ""'></textarea>
                                </div>
                                <div class="col-md-12">
                                    <div v-show='!isLoading'><button class="btn btn-primary px-4 py-3" @click='submitForm(event, "inquireForm")'><b>Inquire Now</b> <i class="fab fa-telegram-plane"></i></button></div>
                                    <div v-show='isLoading'><strong>Sending form, please wait..</strong></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section> <!-- contactInfo -->

    </section> <!-- end of #main -->

    <?php require_once('php-inc-cta-bottom.php'); ?>

<?php require_once('php-inc-footer.php'); ?>