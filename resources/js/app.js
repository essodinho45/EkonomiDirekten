import './bootstrap';

import.meta.glob([
    '../img/**',
]);

$("form.wpcf7-form").submit(function (e) {
    e.preventDefault();
    var token = $("input[name=_token]").val(); // The CSRF token
    var name = $("input[name=name]").val();
    var email = $("input[name=email]").val();
    var subjcet = $("input[name=subjcet]").val();
    var message = $("textarea[name=message]").val();

    $.ajax({
        type: 'POST',
        url: '/contact',
        dataType: 'json',
        data: { _token: token, name: name, email: email, subjcet: subjcet, message: message },
        success: function (data) {
            alert(data.success);
        }
    });
});
