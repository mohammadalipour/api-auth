$(document).on('submit', '#login-form', function (e) {
    e.preventDefault();

    $('input').parent().removeClass('has-error');

    $.ajax({
        method: $(this).attr('method'),
        url: $(this).attr('action'),
        data: $(this).serialize(),
        dataType: "json"
    }).done(function (data) {
        $('.login-message').removeClass('has-error');
        $('.login-message').text(data.message);

        if(data.success){
            window.location.replace("/pane/home");
        }
    }).fail(function (data) {
        if (jQuery.isEmptyObject(data.responseJSON)) {
            // location.reload();
        } else {
            $.each(data, function (key, value) {
                $.each(value.errors, function (k, v) {
                    $('.login-message').addClass('has-error');
                    $('.login-message').text(v);
                });
            });
        }
    });
});