$().ready(function() {
    // alpha
    jQuery.validator.addMethod("numeric", function(value, element) {
        return this.optional(element) || /^[0-9]+$/i.test(value);
    }, "Input must contain numbers only.");

    // alpha
    jQuery.validator.addMethod("alpha", function(value, element) {
        return this.optional(element) || /^[a-z]+$/i.test(value);
    }, "Input must contain only letters.");

    // alpha_space
    jQuery.validator.addMethod("alpha_space", function(value, element) {
        return this.optional(element) || /^[a-z\s]+$/i.test(value);
    }, "Input must contain only letters and spaces.");

    // alpha_numeric
    jQuery.validator.addMethod("alpha_numeric", function(value, element) {
        return this.optional(element) || /^[a-z0-9]+$/i.test(value);
    }, "Input must contain only letters, or numbers.");

    // alpha_numeric_space
    jQuery.validator.addMethod("alpha_numeric_space", function(value, element) {
        return this.optional(element) || /^[a-z0-9\s]+$/i.test(value);
    }, "Input must contain only letters, numbers, or spaces.");

    // alpha_numeric_dash_space
    jQuery.validator.addMethod("alpha_numeric_dash_space", function(value, element) {
        return this.optional(element) || /^[a-z0-9\-\s]+$/i.test(value);
    }, "Input must contain only letters, numbers, spaces, or dashes.");

    // alpha_numeric_dash_space_underscore
    jQuery.validator.addMethod("alpha_numeric_dash_space", function(value, element) {
        return this.optional(element) || /^[a-z0-9\-\s\_]+$/i.test(value);
    }, "Input must contain only letters, numbers, spaces, underscore, or dashes.");

    // alpha_numeric_dash
    jQuery.validator.addMethod("alpha_numeric_dash", function(value, element) {
        return this.optional(element) || /^[a-z0-9\-]+$/i.test(value);
    }, "Input must contain only letters, numbers, or dashes.");

    // alpha_numeric_underscore
    jQuery.validator.addMethod("alpha_numeric_underscore", function(value, element) {
        return this.optional(element) || /^[a-z0-9\_]+$/i.test(value);
    }, "Input must contain only letters, numbers, or underscore.");

    /* ---------------------- End Custom Methods -------------------------------------- */

    // test
    $("#verify-validate").validate({
        rules: {
            email: {
                required: true,
                maxlength: 100,
                email: true
            },
            token: {
                required: true,
                maxlength: 5,
                minlength: 5,
                digits: true
            },
        },
        messages: {
            email: {
                required: "This field is required.",
                maxlength: "You have reach the maximum input value.",
                email: "Please input a valid email."
            },
            token: {
                required: "This field is required.",
                maxlength: "You have reach the maximum input value.",
                digits: "Please input numbers only.",
                minlength: "Please enter 5 digit only",
            }
        }
    });

    /* Signin */
    $("#signin-validate").validate({
        rules: {
            email: {
                required: true,
                maxlength: 100,
                email: true
            },
            password: {
                required: true
            }
        },
        messages: {
            email: {
                required: "This field is required.",
                maxlength: "You have reach the maximum input value.",
                email: "Please input a valid email."
            },
            password: {
                required: "Please enter a password"
            }
        }
    });

    /* Signin */
    $("#forgot-validate").validate({
        rules: {
            email: {
                required: true,
                maxlength: 100,
                email: true
            },
            password: {
                required: true,
                maxlength: 100,
                minlength: 8,
            },
            confirm_password: {
                required: true,
                maxlength: 100,
                minlength: 8,
                equalTo: "#password"
            },
        },
        messages: {
            email: {
                required: "This field is required.",
                maxlength: "You have reach the maximum input value.",
                email: "Please input a valid email."
            },
            password: {
                required: "This field is required.",
                maxlength: "You have reach the maximum input value.",
                minlength: "Please enter at least 8 characters.",
            },
            confirm_password: {
                required: "This field is required.",
                maxlength: "You have reach the maximum input value.",
                minlength: "Please enter at least 8 characters.",
                equalTo: "Password do not match."
            }
        }
    });

    /* Add Student */
    $("#signup-validate").validate({
        rules: {
            fname: {
                required: true,
                maxlength: 50,
                minlength: 2,
                alpha_space: true
            },
            mname: {
                maxlength: 50,
                minlength: 2,
                alpha_space: true
            },
            lname: {
                required: true,
                maxlength: 50,
                minlength: 2,
                alpha_space: true
            },
            uname: {
                maxlength: 20,
                minlength: 5,
            },
            email: {
                required: true,
                maxlength: 100,
                email: true
            },
            password: {
                required: true,
                maxlength: 100,
                minlength: 8,
            },
            confirm_password: {
                required: true,
                maxlength: 100,
                minlength: 8,
                equalTo: "#password"
            },
            region: {
                required: true
            },
            province: {
                required: true
            },
            city: {
                required: true
            },
            barangay: {
                required: true
            },
            contact: {
                required: true,
                maxlength: 11,
                minlength: 11,
                digits: true
            },
            gender: {
                required: true
            },
            bdate: {
                required: true
            },
            designation: {
                required: true
            },
            position: {
                required: true
            }
        },
        messages: {
            fname: {
                required: "This field is required.",
                maxlength: "You have reach the maximum input value.",
                minlength: "Please enter more than 2 characters.",
                alpha_space: "Please input letters, and spaces only."
            },
            mname: {
                maxlength: "You have reach the maximum input value.",
                minlength: "Please enter more than 2 characters.",
                alpha_space: "Please input letters, and spaces only."
            },
            lname: {
                required: "This field is required.",
                maxlength: "You have reach the maximum input value.",
                minlength: "Please enter more than 2 characters.",
                alpha_space: "Please input letters, and spaces only."
            },
            uname: {
                maxlength: "You have reach the maximum input value.",
                minlength: "Please enter more than 4 characters.",
            },
            email: {
                required: "This field is required.",
                maxlength: "You have reach the maximum input value.",
                email: "Please input a valid email."
            },
            password: {
                required: "This field is required.",
                maxlength: "You have reach the maximum input value.",
                minlength: "Please enter at least 8 characters.",
            },
            confirm_password: {
                required: "This field is required.",
                maxlength: "You have reach the maximum input value.",
                minlength: "Please enter at least 8 characters.",
                equalTo: "Password do not match."
            },
            region: {
                required: "This field is required."
            },
            province: {
                required: "This field is required."
            },
            city: {
                required: "This field is required."
            },
            barangay: {
                required: "This field is required."
            },
            contact: {
                required: "This field is required.",
                maxlength: "You have reach the maximum input value.",
                digits: "Please input numbers only.",
                minlength: "Please enter your 11 digit contact no.",
            },
            gender: {
                required: "This field is required.",
            },
            bdate: {
                required: "This field is required."
            },
            designation: {
                required: "This field is required."
            },
            position: {
                required: "This field is required."
            }
        },
    });
    $("#a-details").validate({
        rules: {
            uname: {
                maxlength: 20,
                minlength: 5,
            },
            email: {
                required: true,
                maxlength: 100,
                email: true
            },
            password: {
                maxlength: 100,
                minlength: 8,
            },
            confirm_password: {
                maxlength: 100,
                minlength: 8,
                equalTo: "#password"
            }
        },
        messages: {
            uname: {
                maxlength: "You have reach the maximum input value.",
                minlength: "Please enter more than 4 characters.",
            },
            email: {
                required: "This field is required.",
                maxlength: "You have reach the maximum input value.",
                email: "Please input a valid email."
            },
            password: {
                maxlength: "You have reach the maximum input value.",
                minlength: "Please enter at least 8 characters.",
            },
            confirm_password: {
                maxlength: "You have reach the maximum input value.",
                minlength: "Please enter at least 8 characters.",
                equalTo: "Password do not match."
            }
        },
    });

    $("#p-details").validate({
        rules: {
            fname: {
                required: true,
                maxlength: 50,
                minlength: 2,
                alpha_space: true
            },
            mname: {
                maxlength: 50,
                minlength: 2,
                alpha_space: true
            },
            lname: {
                required: true,
                maxlength: 50,
                minlength: 2,
                alpha_space: true
            },
            region: {
                required: true
            },
            province: {
                required: true
            },
            city: {
                required: true
            },
            barangay: {
                required: true
            },
            contact: {
                required: true,
                maxlength: 11,
                minlength: 11,
                digits: true
            },
            gender: {
                required: true
            },
            bdate: {
                required: true
            }
        },
        messages: {
            fname: {
                required: "This field is required.",
                maxlength: "You have reach the maximum input value.",
                minlength: "Please enter more than 2 characters.",
                alpha_space: "Please input letters, and spaces only."
            },
            mname: {
                maxlength: "You have reach the maximum input value.",
                minlength: "Please enter more than 2 characters.",
                alpha_space: "Please input letters, and spaces only."
            },
            lname: {
                required: "This field is required.",
                maxlength: "You have reach the maximum input value.",
                minlength: "Please enter more than 2 characters.",
                alpha_space: "Please input letters, and spaces only."
            },
            region: {
                required: "This field is required."
            },
            province: {
                required: "This field is required."
            },
            city: {
                required: "This field is required."
            },
            barangay: {
                required: "This field is required."
            },
            contact: {
                required: "This field is required.",
                maxlength: "You have reach the maximum input value.",
                digits: "Please input numbers only.",
                minlength: "Please enter your 11 digit contact no.",
            },
            gender: {
                required: "This field is required.",
            },
            bdate: {
                required: "This field is required."
            }
        },
    });
});

$('#signup-validate').submit(function(e) {
    e.preventDefault();

    var form = $(this);
    var url = form.attr('action');
    $.ajax({
        url: url,
        type: 'POST',
        data: form.serialize(),
        success: function(response) {
            var res = JSON.parse(response);
            if(res.error == false) {
              $('#message').show();
                alertSuccess('message', res.msg);
                setTimeout(function(){
                  $('#message-content').remove();
                  $('#message').hide();
                  location.replace('http://localhost/otms/user/verify');
                }, 6000);
                var today = moment().format('YYYY-MM-DD');
                $('#fname').val("");
                $('#mname').val("");
                $('#lname').val("");
                $('#nameex').val("");
                $('#region').val("");
                $('#province').val("");
                $('#city').val("");
                $('#barangay').val("");
                $('#contact').val("");
                $('#gender').val("");
                $('#bdate').val(today);
                $('#designation').val("");
                $('#position').val("");
                $('#password').val("");
                $('#confirm_password').val("");
            } else {
              $('#message').show();
              alertError('message',res.msg);
              setTimeout(function(){
                $('#message-content').remove();
                $('#message').hide();
              }, 3000);
            }
        }
    });
});

$('#p-details').submit(function(e) {
    e.preventDefault();

    var form = $(this);
    var url = form.attr('action');
    $.ajax({
        url: url,
        type: 'POST',
        data: form.serialize(),
        success: function(response) {
            var res = JSON.parse(response);
            if(res.error == false) {
              $('#p-message').show();
                alertSuccess('p-message', res.msg);
                setTimeout(function(){
                  $('#message-content').remove();
                  $('#message').hide();
                  location.reload();
                }, 6000);
            } else {
              $('#p-message').show();
              alertError('p-message', res.msg);
              setTimeout(function(){
                $('#message-content').remove();
                $('#message').hide();
              }, 3000);
            }
        }
    });
});

$('#a-details').submit(function(e) {
    e.preventDefault();

    var form = $(this);
    var url = form.attr('action');
    $.ajax({
        url: url,
        type: 'POST',
        data: form.serialize(),
        success: function(response) {
            var res = JSON.parse(response);
            if(res.error == false) {
              $('#a-message').show();
                alertSuccess('a-message', res.msg);
                setTimeout(function(){
                  $('#message-content').remove();
                  $('#message').hide();
                  location.reload();
                }, 6000);
            } else {
              $('#a-message').show();
              alertError('a-message', res.msg);
              setTimeout(function(){
                $('#message-content').remove();
                $('#message').hide();
              }, 3000);
            }
        }
    });
});

$('#verify-validate').submit(function(e) {
    e.preventDefault();
    var form = $(this);
    var url = form.attr('action');
    $.ajax({
        url: url,
        type: 'POST',
        data: form.serialize(),
        success: function(response) {
            var res = JSON.parse(response);
            if(res.error == false) {
            $('#message').show();
            alertSuccess('message', res.msg);
            setTimeout(function(){
                $('#message-content').remove();
                $('#message').hide();

                location.replace('http://localhost/otms/user/login');
            }, 5000);
            $('#verify_email').val("");
            $('#verify_code').val("");
            } else {
            $('#message').show();
            alertError('message', res.msg);
            setTimeout(function(){
                $('#message-content').remove();
                $('#message').hide();
            }, 3000);
            }
        }
    });
});

$('#forgot-validate').submit(function(e) {
    e.preventDefault();
    var form = $(this);
    var url = form.attr('action');
    $.ajax({
        url: url,
        type: 'POST',
        data: form.serialize(),
        success: function(response) {
            var res = JSON.parse(response);
            if(res.error == false) {
            $('#message').show();
            alertSuccess('message', res.msg);
            setTimeout(function(){
                $('#message-content').remove();
                $('#message').hide();

                location.replace('http://localhost/otms/user/verify');
            }, 5000);
            $('#email').val("");
            $('#password').val("");
            $('#confirm_password').val("");
            } else {
            $('#message').show();
            alertError('message', res.msg);
            setTimeout(function(){
                $('#message-content').remove();
                $('#message').hide();
            }, 3000);
            }
        }
    });
});

$('#signin-validate').submit(function(e) {
    e.preventDefault();
    var form = $(this);
    var url = form.attr('action');
    $.ajax({
        url: url,
        type: 'POST',
        data: form.serialize(),
        success: function(response) {
            var res = JSON.parse(response);
            if(res.error == false) {
            $('#message').show();
            alertSuccess('message', res.msg);
            setTimeout(function(){
                $('#message-content').remove();
                $('#message').hide();

                if(res.role == "Faculty")
                location.replace('http://localhost/otms/faculty/index');
                else if(res.role == "Staff")
                location.replace('http://localhost/otms/staff/index');
                else
                location.replace('http://localhost/otms/student/index');
            }, 5000);
            $('#email').val("");
            $('#password').val("");
            } else {
            $('#message').show();
            alertError('message', res.msg);
            setTimeout(function(){
                $('#message-content').remove();
                $('#message').hide();
            }, 3000);
            }
        }
    });
});



(function () {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
  
          form.classList.add('was-validated')
        }, false)
      })
  })()

  function consent() {
    //CONSENT
    var submit = document.getElementById('submit');
    var CONSENT = document.getElementById('CONSENT');
    if (CONSENT.checked) {
        submit.disabled = false;
    } else {
        submit.disabled = true;
    }
}

function alertSuccess(form, message) {
    $('#'+form).append(
      '<div id="message-content">' +
        '<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">' +
          '<symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">' +
            '<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>' +
          '</symbol>' +
        '</svg>' +
        '<div id="notify" style="display:none;" class="alert alert-success fade show d-flex align-items-center" role="alert">' +
          '<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>' +
          '<div>' + message + '</div>' +
        '</div>' +
      '</div>');
  }
  
  function alertError(form, message) {
    $('#'+form).append(
      '<div id="message-content">' +
        '<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">' +
          '<symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">' +
            '<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>' +
          '</symbol>' +
        '</svg>' +
        '<div class="alert alert-danger fade show d-flex align-items-center" role="alert">' +
          '<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>' +
            '<div>' + message + '</div>' +
        '</div>' +
      '</div>'
    );
}