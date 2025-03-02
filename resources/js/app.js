import './bootstrap';

import.meta.glob([
    '../img/**',
]);

$("form.wpcf7-form").submit(function (e) {
    e.preventDefault();
    var token = $("input[name=_token]").val(); // The CSRF token
    var name = $("input[name=name]").val();
    var email = $("input[name=email]").val();
    var subject = $("input[name=subject]").val();
    var message = $("textarea[name=message]").val();
    console.log($("input[name=subject]").val());
    console.log(subject);
    console.log({ _token: token, name: name, email: email, subject: subject, message: message });
    $.ajax({
        type: 'POST',
        url: '/contact',
        dataType: 'json',
        data: { _token: token, name: name, email: email, subject: subject, message: message },
        success: function (data) {
            alert(data.success);
        }
    });
});
