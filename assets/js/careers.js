window.addEventListener('load', function () {
//Vue instance
var applyNowForm = new Vue({
    el: '#applyNowForm',

    mounted: function () {
        console.log("mounted()");
    },

    methods: {
        applyNowSubmit: function(e, origin) {
            console.log("applyNowSubmit()");
            e.preventDefault();

            //Validate input
            if(this.isValidApplyInput()) {
                var that = this;
                this.form.is_loading = true;

                this.form.inputs.origin = origin;
                
                var formData = new FormData();
                console.log("file:", this.form.inputs.file);
                if(this.form.inputs.file != null && typeof this.form.inputs.file != "undefined") {
                    formData.append('file', this.form.inputs.file);
                }             
                formData.append('origin', this.form.inputs.origin);
                formData.append('name', this.form.inputs.name);
                formData.append('email', this.form.inputs.email);
                formData.append('phone', this.form.inputs.phone);
                formData.append('position', this.form.inputs.position);
                // console.log(formData);

                $.ajax({
                    type: "POST",
                    url: "php-send-apply.php",
                    data: formData,
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    complete: function(result){
                        var email_stat = result.responseJSON.email_status;
                        console.log("email_stat:", email_stat);
                        that.form.is_loading = false;

                        if(email_stat) {
                            Swal.fire({
                                title: 'Form was submitted.',
                                text: 'Thank you for filling out the form.',
                                icon: 'success',
                            });
                        } else {
                            Swal.fire({
                                title: 'Something went wrong.',
                                text: 'Please try again.',
                                icon: 'error',
                            });
                        }

                    }
                });
            } else {
                Swal.fire({
                    title: 'Some values are required.',
                    html: this.form.errors.message,
                    icon: 'error',
                });
            }

        },


        isValidApplyInput: function() {
            console.log("isValidApplyInput()");
            this.form.errors = {};
            this.form.errors.message = "";
            var isValidInput = true;

            if(this.form.inputs.name == null || this.form.inputs.name == "") {
                this.form.errors.name = "Name is required.<br>";
                this.form.errors.message += this.form.errors.name;
            }

            if(this.form.inputs.email == null || this.form.inputs.email == "") {
                this.form.errors.email = "Email is required.<br>";
                this.form.errors.message += this.form.errors.email;
            }
            if(!validateEmail(this.form.inputs.email)) {
                this.form.errors.email = "Email is invalid.<br>";
                this.form.errors.message += this.form.errors.email;
            }

            if(this.form.inputs.phone == null || this.form.inputs.phone == "") {
                this.form.errors.phone = "Phone is required.<br>";
                this.form.errors.message += this.form.errors.phone;
            }
            if(this.form.inputs.position == null || this.form.inputs.position == "") {
                this.form.errors.position = "Position is required.";
                this.form.errors.message += this.form.errors.position;
            }

            if(this.form.errors.message) {
                isValidInput = false;
            }

            return isValidInput;
        },

        changeCareerFile: function(e) {
            console.log("changeCareerFile()");
            this.form.inputs.file = e.target.files[0];
            var tmpFilePath = URL.createObjectURL(this.form.inputs.file);
            this.form.inputs.file_name = this.form.inputs.file.name;
            console.log("file:", this.form.inputs.file);
            console.log("file_name:", this.form.inputs.file_name);

            var isValidFile = true;
            if(!isFileTypeValid(this.form.inputs.file_name)) {
                isValidFile = false;
                Swal.fire({
                    title: 'Invalid file type',
                    text: 'Only zip, .doc/.docx or .pdf files are allowed.',
                    icon: 'error',
                });
            }

            if(!isFileSizeValid(e.target)) {
                isValidFile = false;
                Swal.fire({
                    title: 'Invalid file size',
                    text: 'File size of more than 3mb is not allowed.',
                    icon: 'error',
                });

            }

            if(!isValidFile) {
                $("#resumeInput").val("");
                this.form.inputs.file = null;
                this.form.inputs.file_name = "";
            }
        },






    }, //end of methods


    data: {
        isLoading: false,
        form: {
            errors: {},
            inputs: {
                name: "",
                email: "",
                phone: "",
                position: "",
                file: null,
                file_name: "",
            },
            is_loading: false,
        },
    }, //End of data



});

}); //end of window.addEventListener









