jQuery(document).ready(function($) {

//Vue instance
var vueContact = new Vue({
    el: '#inquireForm',

    mounted: function () {
        console.log("mounted()");
    },

    methods: {
        isValidFormInput: function() {
            console.log("isValidFormInput()");
            this.form.errors = {};
            this.form.errors.error_msg = "";
            var isValidInput = true;

            if(this.form.inputs.name == null || this.form.inputs.name == "") {
                this.form.errors.name = "Name is required.<br>";
                this.form.errors.error_msg += this.form.errors.name;
            }

            if(this.form.inputs.email == null || this.form.inputs.email == "") {
                this.form.errors.email = "Email is required.<br>";
                this.form.errors.error_msg += this.form.errors.email;
            } else if(!validateEmail(this.form.inputs.email)) {
                this.form.errors.email = "Email is invalid.<br>";
                this.form.errors.error_msg += this.form.errors.email;
            }

            if(this.form.inputs.phone == null || this.form.inputs.phone == "") {
                this.form.errors.phone = "Phone is required.<br>";
                this.form.errors.error_msg += this.form.errors.phone;
            }

            if(this.form.inputs.company == null || this.form.inputs.company == "") {
                this.form.errors.company = "Company is required.<br>";
                this.form.errors.error_msg += this.form.errors.company;
            }

            if(this.form.inputs.message == null || this.form.inputs.message == "") {
                this.form.errors.message = "Message is required.<br>";
                this.form.errors.error_msg += this.form.errors.message;
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
                name: "",
                email: "",
                phone: "",
                company: "",
                message: "",
                origin: "",
            }
        }
                                                                     
    }, //End of data

});

}); //jQuery(document).ready









