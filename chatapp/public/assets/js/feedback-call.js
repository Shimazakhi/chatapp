
jQuery(document).ready(function ($) {

    $("#message-form").submit(function () {
        var formData = new FormData($('#message-form')[0]);
        $.ajax({
            type: "POST",
            url: "/send-message",
            data: formData,
            processData: false,
            contentType: false,
            success: function (msg) {
                if (msg == 'success') {
                    clearInput();
                } else {
                    result = msg;
                    updateChat('System',msg,'system');
                    clearInput();
                }

            }
        });
        return false;
    })

});

