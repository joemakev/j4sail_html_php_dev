console.log("--> theme.js");

/* 
---------------------------------
Variables
---------------------------------
*/
var targetMobileWidth = 991;


/* 
---------------------------------
Common Functions and Snippets
---------------------------------
*/
/*
Return the visible amount of px of any element currently in viewport.
Sample:
    $(elem).inViewport(function(px) {
        if(px >= targetPx && !$(this).hasClass('animated')) {
            //
        }
    });
*/
(function($, win) {
    $.fn.inViewport = function(cb) {
        return this.each(function(i,el){
            function visPx(){
            var H = $(this).height(),
                r = el.getBoundingClientRect(), t=r.top, b=r.bottom;
            return cb.call(el, Math.max(0, t>0? H-t : (b<H?b:H)));  
            } visPx();
            $(win).on("resize scroll", visPx);
        });
    };
}(jQuery, window));

function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var testVal = re.test(email);
    console.log('validateEmail():', testVal);
    return re.test(email);
}

function isFileTypeValid(fileName) {
    var extension = fileName.substr((fileName.lastIndexOf('.') +1));
    return /(pdf|zip|doc|docx)$/ig.test(extension);
}

function isFileSizeValid(file) {
    var FileSize = file.files[0].size / 1024 / 1024; // in MB
    if (FileSize > 3) {
        return false;
    }
    return true;
}

function animateOnShow(elem, targetPx) {
    $(elem).inViewport(function(px) {
        if(px >= targetPx && !$(this).hasClass('animated')) {
            var animClass = $(this).attr('data-anim');
            $(this).removeClass('invisible');
            $(this).addClass(animClass);
        }
    });
} //animateOnShow()

function moveElemOnResize() {
    $(window).resize(function() {
        moveMainMenu();
        moveTopMenu();
    });
} //moveElemOnResize()

function moveMainMenu() {
    var navMainDesktop = $("#navDesktopBox .header-nav.main");
    var navMainMobile = $("#navMobileBox .header-nav.main");
    // var winWidth = $(window).width();
    var winWidth = getWinWH().width;
    // console.log("winWidth:", winWidth);
    if (winWidth <= targetMobileWidth && navMainDesktop.length > 0) {   
        navMainDesktop.appendTo("#navMobileBox");
        // console.log('> #navMobileBox');
    } else if(winWidth > targetMobileWidth && navMainMobile.length > 0) {  
        navMainMobile.appendTo("#navDesktopBox");
        // console.log('> #navDesktopBox');
    }
} //moveMainMenu()

function moveTopMenu() {
    var navHeaderTop = $("#navHeaderTopBox #navHeaderTop");
    var navMobileTop = $("#navMobileTopBox #navHeaderTop");
    // var winWidth = $(window).width();
    var winWidth = getWinWH().width;
    // console.log("winWidth:", winWidth);
    if (winWidth <= targetMobileWidth && navHeaderTop.length > 0) {   
        navHeaderTop.appendTo("#navMobileTopBox");

    } else if(winWidth > targetMobileWidth && navMobileTop.length > 0) {  
        navMobileTop.appendTo("#navHeaderTopBox");

    }
} //moveMainMenu()


//Custom get window width and height
function getWinWH() {
    var wh = {width:0, height:0};

    var winWidth = window.innerWidth
    || document.documentElement.clientWidth
    || document.body.clientWidth;
    
    var winHeight = window.innerHeight
    || document.documentElement.clientHeight
    || document.body.clientHeight;

    wh.width = winWidth;
    wh.height = winHeight;

    return wh;
} //getWinWH()




/* 
---------------------------------
Theme class
---------------------------------
*/
function Theme(doc, body, header) {
    this.doc = doc;
    this.body = body;
    this.header = header;

} //Theme()


/* 
---------------------------------
Header functions
---------------------------------
*/
Theme.prototype.initHeaderFunc = function() {
    console.log("addHeaderFunc()");
    var self = this;
    var topShopLinks = this.header.find('.header-nav.top .shop a.nav-link');
    var navMobileButton = $('#navMobileButton');

    topShopLinks.click(function(e) {
        e.preventDefault();
        self.header.find('.headerModal').removeClass('show');
        var targetModal = self.header.find('.headerModal.' + $(this).attr('data-modal'));
        targetModal.addClass('show');
        console.log(targetModal);
        targetModal.find('input[type=search]').focus();
    });
    
    this.doc.on('click', function(e) {
        //Close the modal if clicked on anything except the modal itself or the open link, 
        if (!$(e.target).closest('#header .headerModal, #header .header-nav.top .shop a.nav-link').length) {
            self.header.find('.headerModal').removeClass('show');
        }
    });

    navMobileButton.click(function() {
        var navMobileBox = $('#navMobileBox');
        if(!navMobileBox.hasClass('show')) {
            $('#navMobileBox').addClass('show');
            $(this).addClass('active');
        } else {
            $('#navMobileBox').removeClass('show');
            $(this).removeClass('active');
        }
    });

    //Add subBtn elements (It is +/- menu toggle for mobile dropdown elements) 
    $('#header .header-nav.main .subBtnMenu').before('<span class="subBtn"><i class="fas fa-plus open"></i> <i class="fas fa-minus close"></i></span>');
    var navMobileSubBtn = $('#header .header-nav.main li .subBtn');

    navMobileSubBtn.click(function() {
        var targetDropDown = $(this).next('.dropdown-menu').first();
        if(!targetDropDown.hasClass('visible')) {
            targetDropDown.addClass('visible');
            $(this).addClass('active');
        } else {
            targetDropDown.removeClass('visible');
            $(this).removeClass('active');
        }
    });

    //Insert menu anchor elements
    $('#header').prepend(
        '<!-- Note: The top menu will move here on mobile -->' +
        '<div id="navMobileTopBox"></div>'
    );

    $('#header').append(
        '<!-- Note: The main menu will move here on mobile -->' +
        '<div id="navMobileBox"></div>'
    );

    //Begin menu movement, if necessary
    moveMainMenu();
    moveTopMenu();
    moveElemOnResize();

} //addHeaderFunc()


/* 
---------------------------------
Footer functions
---------------------------------
*/
Theme.prototype.initFooterFunc = function() {
    console.log("initFooterFunc()");

    //Vue instance for footer newsletter
    var vueFooterSignUp = new Vue({
        el: '#footerSignUp',

        mounted: function () {
            console.log("mounted()");
        },

        methods: {
            isValidFormInput: function() {
                console.log("isValidFormInput()");
                this.form.errors = {};
                this.form.errors.error_msg = "";
                var isValidInput = true;

                if(this.form.inputs.email == null || this.form.inputs.email == "") {
                    this.form.errors.email = "Email is required.<br>";
                    this.form.errors.error_msg += this.form.errors.email;
                } else if(!validateEmail(this.form.inputs.email)) {
                    this.form.errors.email = "Email is invalid.<br>";
                    this.form.errors.error_msg += this.form.errors.email;
                }

                console.log('this.form.errors.error_msg:', this.form.errors.error_msg);
                if(this.form.errors.error_msg) {
                    isValidInput = false;
                }
                return isValidInput;

            }, //isValidFormInput()

            submitForm: function(e, origin) {
                console.log("submitForm()");
                e.preventDefault();
                var that = this;

                //Validate input
                if(this.isValidFormInput()) {
                    this.form.inputs.origin = origin;
                    this.isLoading = true;
                    // console.log(that.form.inputs);

                    $.ajax({
                        type: "POST",
                        url: "php-send-email.php",
                        data: that.form.inputs,
                        dataType: 'json',
                        complete: function(result){
                            var email_stat = result.responseJSON.email_status;
                            console.log("email_stat:", email_stat);
                            that.isLoading = false;

                            if(email_stat) {
                                Swal.fire({
                                    title: 'Form was submitted.',
                                    text: 'Thank you for filling out the form.',
                                    icon: 'success',
                                });
                            } else {
                                Swal.fire({
                                    title: 'Something went wrong.',
                                    html: 'Please try again.',
                                    icon: 'error',
                                });
                            }

                        }
                    });

                } else {
                    Swal.fire({
                        title: 'Error!',
                        html: this.form.errors.error_msg,
                        icon: 'error',
                    })


                }

            }, //submitForm()

        }, //end of methods

        data: {
            isLoading:false,
            form: {
                errors: {},
                inputs: {
                    email: "",
                }
            }
                                                                        
        }, //End of data

    });

    //Back to top button
    $('#backToTop').click(function(){ 
        $('html,body').animate({ scrollTop: 0 }, 'slow');
        return false; 
    });

} //initFooterFunc()





/* 
---------------------------------
Init common functions
---------------------------------
*/
jQuery(document).ready(function($) {
    var j4Sail = new Theme($(document), $('body'), $('#header'));

    //Init header functions
    if(j4Sail.initHeaderFunc !== "undefined") {
        j4Sail.initHeaderFunc();
    }

    //Init Footer functions
    if(j4Sail.initFooterFunc !== "undefined") {
        j4Sail.initFooterFunc();
    }


}); //end of jQuery(document).ready