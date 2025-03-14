import './bootstrap';

import.meta.glob([
    '../img/**',
]);

(function () {
    "use strict";

    let forms = document.querySelectorAll('.wpcf7-form');

    forms.forEach(function (e) {
        e.addEventListener('submit', function (event) {
            event.preventDefault();

            let thisForm = this;

            let action = thisForm.getAttribute('action');

            if (!action) {
                displayError(thisForm, 'The form action property is not set!')
                return;
            }
            thisForm.querySelector('.loading').classList.add('d-block');
            thisForm.querySelector('.error-message').classList.remove('d-block');
            thisForm.querySelector('.sent-message').classList.remove('d-block');

            let formData = new FormData(thisForm);

            php_email_form_submit(thisForm, action, formData);
        });
    });

    function php_email_form_submit(thisForm, action, formData) {
        fetch(action, {
            method: 'POST',
            body: formData,
            headers: { 'X-Requested-With': 'XMLHttpRequest' }
        })
            .then(response => {
                if (response.ok) {
                    return response.text()
                } else {
                    throw new Error(`${response.status} ${response.statusText} ${response.url}`);
                }
            })
            .then(data => {
                thisForm.querySelector('.loading').classList.remove('d-block');
                if (data.trim() == 'OK') {
                    thisForm.querySelector('.sent-message').classList.add('d-block');
                    thisForm.reset();
                } else {
                    throw new Error(data ? data : 'Form submission failed and no error message returned from: ' + action);
                }
            })
            .catch((error) => {
                displayError(thisForm, error);
            });
    }

    function displayError(thisForm, error) {
        if (!error) {
            thisForm.querySelector('.loading').classList.remove('d-block');
            thisForm.querySelector('.error-message').innerHTML = error;
            thisForm.querySelector('.error-message').classList.add('d-block');
        }
    }

})();

// $("form.wpcf7-form").submit(function (e) {
//     e.preventDefault();
//     var token = $("input[name=_token]").val(); // The CSRF token
//     var name = $("input[name=name]").val();
//     var email = $("input[name=email]").val();
//     var subject = $("input[name=subject]").val();
//     var message = $("textarea[name=message]").val();
//     console.log($("input[name=subject]").val());
//     console.log(subject);
//     console.log({ _token: token, name: name, email: email, subject: subject, message: message });
//     $.ajax({
//         type: 'POST',
//         url: '/contact',
//         dataType: 'json',
//         data: { _token: token, name: name, email: email, subject: subject, message: message },
//         success: function (data) {
//             alert(data.success);
//         }
//     });
// });
