$('form').on('submit', function (e) {
    if ($(this).hasClass('ajax-form')) {
        e.preventDefault();

        let action = $(this).attr('action');
        let formData = new FormData(this);
        let method = $(this).attr('method');
        if (!method) {
            method = "post";
        }

        $('[id^=validation_error_]').html('&nbsp;');

        let inputFields = $('input.validation-invalid');
        inputFields.removeClass('validation-invalid');


        $.ajax({
            url: action,
            method: method,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            complete: function (result) {
                //SUCCESS
            },
            error: function (result) {
                let data = result.responseJSON;
                let errors = data.errors;

                if (!jQuery.isEmptyObject(errors)) {
                    for (let field in errors) {
                        if (!errors.hasOwnProperty(field)) continue;
                        let message = errors[field][0];

                        let inputField = $('#' + field);
                        inputField.addClass('validation-invalid');

                        let errorText = $('#validation_error_' + field)
                        errorText.html(message);
                    }
                }
            },
            success: function (result) {
                if (result.hasOwnProperty('redirect')) {
                    document.location.href = result.redirect;
                }
            }
        });
    }
});
