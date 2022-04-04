$(document).ready(function(){
    $('#create-class').on('submit', function(e){
        e.preventDefault();
        var form = $(this);
        var url = form.attr('action');
    
        $.ajax({
            url: url,
            type: 'POST',
            data: form.serialize(),
            success: function(response) {
                var res = JSON.parse(response);
                if(res.status != false){
                    $('#message').show();
                    alertSuccess('message', res.msg);
                    $('#code').val('');
                    $('#description').val('');
                    $('#units').val('');
                    $('#name').val('');
                    $('#section').val('');
                    $('#day').val(1);
                    setTimeout(function(){
                    $('#message-content').remove();
                    $('#message').hide();
                    }, 3000);
                    setTimeout(function(){location.reload();},4000);
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
  
    $('#update-class').on('submit', function(e){
        e.preventDefault();
        var form = $(this);
        var url = form.attr('action');
    
        $.ajax({
            url: url,
            type: 'POST',
            data: form.serialize(),
            contentType: false,
            cache: false,
            processData: false,
            success: function(response) {
                var res = JSON.parse(response);
                if(res.status != false){
                $('#message').show();
                alertSuccess('message', res.msg);
                $('#code').val('');
                $('#description').val('');
                $('#units').val('');
                $('#name').val('');
                $('#section').val('');
                $('#day').val(1);
                setTimeout(function(){
                    $('#message-content').remove();
                    $('#message').hide();
                }, 3000);
                setTimeout(function(){location.reload();},4000);
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

    $('#accept-student').on('submit', function(e){
        e.preventDefault();
        var form = $(this);
        var url = form.attr('action');
    
        $.ajax({
            url: url,
            type: 'POST',
            data: form.serialize(),
            success: function(response) {
                var res = JSON.parse(response);
                if(res.status != false){
                    $('#student'+res.id).remove();
                    $('#accept-status').show();
                    alertSuccess('accept-status', res.msg);
                        setTimeout(function(){
                            $('#message-content').remove();
                            $('#message').hide();
                            location.reload();
                    }, 3000);
                } else {
                    $('#accept-status').show();
                    alertError('accept-status', res.msg);
                    setTimeout(function(){
                    $('#message-content').remove();
                    $('#message').hide();
                    }, 3000);
                }
            }
        });
    });

    $('#student-join-class').on('submit', function(e){
        e.preventDefault();
        var form = $(this);
        var url = form.attr('action');
    
        $.ajax({
            url: url,
            type: 'POST',
            data: form.serialize(),
            success: function(response) {
                var res = JSON.parse(response);
                if(res.status != false){
                    $('#join-class-message').show();
                    alertSuccess('join-class-message', res.msg);
                        setTimeout(function(){
                            $('#message-content').remove();
                            $('#message').hide();
                            location.reload();
                    }, 3000);
                } else {
                    $('#join-class-message').show();
                    alertError('join-class-message', res.msg);
                    setTimeout(function(){
                    $('#message-content').remove();
                    $('#message').hide();
                    }, 3000);
                }
            }
        });
    });

    $(document).on('click', '.deny', function (){
        $(this).closest('.join-request').remove();
    });
   
});

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
        '</div>');
}
  