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
                    <div class="col-md-12 mb20">
                        <h4 class="text-primary mb-3"><b>Contact Info</b></h4>
                        <div class="contact-info">
                            <h2 class='mb-3'>Phone: <b class="text-primary">(890) 7654321</b></h2>
                            <p><i class="far fa-envelope"></i> test@gmail.com</p>
                            <p><i class="far fa-map"></i> 567 Cross Road St., New Theater, Saturn City, 1747, Pluto</p>
                        </div>
                        <hr class="mt20 mb-0">
                    </div>
                    <div class="col-md-12">
                        <form id="contactForm" class="contactForm" method="post" v-cloak>
                            <h3 class='mb-3'><b>Contact Form</b></h3>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" placeholder="Your name" v-model='form.inputs.name' :class='form.errors.name ? "error_input" : ""'>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control" placeholder="Your email" v-model='form.inputs.email' :class='form.errors.email ? "error_input" : ""'>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="number" class="form-control" placeholder="Phone number" v-model='form.inputs.phone' :class='form.errors.phone ? "error_input" : ""'>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" placeholder="Subject">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <textarea type="text" rows="6" class="form-control" placeholder="Your message" v-model='form.inputs.message' :class='form.errors.message ? "error_input" : ""'></textarea>
                                </div>
                                <div class="col-md-12">
                                    <div v-show='!isLoading'><button class="btn btn-primary px-4 py-3" @click='submitForm(event, "contact")'><b>Submit</b> <i class="fab fa-telegram-plane"></i></button></div>
                                    <div v-show='isLoading'><strong>Sending form, please wait..</strong></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section> <!-- contactInfo -->

    </section> <!-- end of #main -->

    <div class="contactMap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.646600417405!2d120.99981301436885!3d14.562190781921979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c976df52ca99%3A0xbf1b9c274340cb1d!2s1818%20Dian%20St%2C%20Manila%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1585203686359!5m2!1sen!2sph" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div> <!-- contactMap -->

    <?php require_once('php-inc-cta-bottom.php'); ?>

<?php require_once('php-inc-footer.php'); ?>