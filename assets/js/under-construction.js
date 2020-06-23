jQuery(document).ready(function($) {
    console.log('--> under-construction.js');

    //Adjust height of main container based on window height
    resize();
    window.onresize = function() {
        resize();
    };

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
                            console.log("email_status:", result.email_status);
                            that.isLoading = false;

                            if(result.email_status) {
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









}); //jQuery(document).ready()


function resize() {
    var wh = window.innerHeight;
    document.getElementById("contentBox").style.height = wh + "px";
}

function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var testVal = re.test(email);
    console.log('validateEmail():', testVal);
    return re.test(email);
}