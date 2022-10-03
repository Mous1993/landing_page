$(document).ready(function () {
    $("form").submit(function (event) {
        // clear errors from previous submission if any
        $(".help-block").remove();

        var formData = {
            name: $("#name").val(),
            email: $("#email").val(),
            phone: $("#phone").val(),
        };

        $.ajax({
            type: "POST",
            url: "controller/Client_subscrib_request.php",
            data: formData,
            encode: true,
        }).done(function (data) {
            console.log(data);
            var data = $.parseJSON(data);
            // display errors
            if (!data.success) {
                if (data.errors.name) {
                    $("#name-group").html(
                        '<p class="help-block">' + data.errors.name + "</p>"
                    );
                }

                if (data.errors.email) {
                    $("#email-group").html(
                        '<p class="help-block">' + data.errors.email + "</p>"
                    );
                }

                if (data.errors.phone) {
                    $("#phone-group").html(
                        '<p class="help-block">' + data.errors.phone + "</p>"
                    );
                }
            } else {
                // success msg
                $("form").html(
                    '<div class="alert alert-success">' + data.message + "</div>"
                );
            }
        }).fail(function (data) {
            // If the server is broken or down for any reason
            $("form").html(
                '<div class="alert alert-danger">Could not reach server, please try again later.</div>'
            );
        });

        event.preventDefault();
    });
});