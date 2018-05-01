$(document).ready(function () {
        new Validation('#form', {
            fields: [
                {
                    name: 'siteName',
                    rule: {
                        type: 'required',
                        prompt: 'Please Enter the site Name'
                    }
                }, {
                    name: 'siteUrl',
                    rule: {
                        type: 'required',
                        prompt: 'Please enter the site URL.'
                    }
                }
            ],
            submitOnValid: false,
            showErrorMessage: true,
            errorMessageText: "All Fields are(*) with mandatory ",
            errorGroupClass: "has-error has-feedback",
            successGroupClass: "has-success has-feedback"
        });

        $('#form')
            .on('is-valid', function (e) {
                console.log('valid');
            })
            .on('is-invalid', function (e) {
                console.log('invalid');
            });

    });