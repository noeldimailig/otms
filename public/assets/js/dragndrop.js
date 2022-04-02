$(document).ready(function(){
    $('#mydocs').DataTable();
  
    var today = moment().format('YYYY-MM-DD');
    $('#year').val(today);
  
    $('input[type="file"]').change(function(e){
      var fileName = e.target.files[0].name;
      $('#drop-text').html(fileName);
    });
  
    $('#drag-area').on('dragover', function(e){
      e.stopPropagation();
      e.preventDefault();
      $(this).addClass('file_drag_over');
      return false;
    });
    $('#drag-area').on('dragleave', function(e){
      e.stopPropagation();
      e.preventDefault();
      $(this).removeClass('file_drag_over');
      return false;
    });
  
    $('#drag-area').on('drop', function(e){
      e.stopPropagation();
      e.preventDefault();
      $(this).removeClass('file_drag_over');
  
      var file = document.getElementById('file');
      file.files = e.originalEvent.dataTransfer.files;
      $('#drop-text').html(file.files[0].name);
    });
  
    $('#uploadDoc').on('submit', function(e){
      e.preventDefault();
      var form = $(this)[0];
      var url = form.getAttribute('action');
  
      var formData = new FormData(form);
      var file = document.getElementById('file').files;
      formData.append('file', file);
  
      $.ajax({
        url: url,
        type: 'POST',
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
        success: function(response) {
          var res = JSON.parse(response);
          if(res.status != false){
            $('#message').show();
            alertSuccess('message', res.msg);
            $('#title').val('');
            $('#authors').val('');
            $('#description').val('');
            $('#year').val('');
            $('#publisher').val('');
            $('#category').val(1);
            $('#drop-text').html('Drop Files Here');
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
  
    var u_today = moment().format('YYYY-MM-DD');
    $('#u_year').val(u_today);
  
    $('input[type="file"]').change(function(e){
      var u_fileName = e.target.files[0].name;
      $('#u-drop-text').html(u_fileName);
    });
  
    $('#u-drag-area').on('dragover', function(e){
      e.stopPropagation();
      e.preventDefault();
      $(this).addClass('file_drag_over');
      return false;
    });
    $('#u-drag-area').on('dragleave', function(e){
      e.stopPropagation();
      e.preventDefault();
      $(this).removeClass('file_drag_over');
      return false;
    });
  
    $('#u-drag-area').on('drop', function(e){
      e.stopPropagation();
      e.preventDefault();
      $(this).removeClass('file_drag_over');
  
      var u_file = document.getElementById('u_file');
      u_file.files = e.originalEvent.dataTransfer.files;
      $('#u-drop-text').html(u_file.files[0].name);
    });
  
    $('#updateDoc').on('submit', function(e){
      e.preventDefault();
      var u_form = $(this)[0];
      var u_url = u_form.getAttribute('action');
  
      var u_formData = new FormData(u_form);
      var u_file = document.getElementById('u_file').files;
      u_formData.append('file', u_file);
  
      $.ajax({
        url: u_url,
        type: 'POST',
        data: u_formData,
        contentType: false,
        cache: false,
        processData: false,
        success: function(response) {
          var res = JSON.parse(response);
          if(res.status != false){
            $('#u-message').show();
            alertSuccess('u-message', res.msg);
            $('#u_title').val('');
            $('#u_authors').val('');
            $('#u_description').val('');
            $('#u_year').val('');
            $('#u_publisher').val('');
            $('#u_category').val(1);
            $('#u-drop-text').html('Drop Files Here');
            setTimeout(function(){
              $('#message-content').remove();
              $('#u-message').hide();
            }, 3000);
  
            setTimeout(function(){location.reload();},4000);
          } else {
            $('#u-message').show();
            alertError('u-message', res.msg);
            setTimeout(function(){
              $('#message-content').remove();
              $('#u-message').hide();
            }, 3000);
          }
        }
      });
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
  
  
    $('.edit').click(function(){
      var $row = $(this).closest('tr');
      var id = $row.find('.t_id').text();
      var title = $row.find('.t_title').text();
      var author = $row.find('.t_author').text();
      var desc = $row.find('.t_desc').text();
      var year = $row.find('.t_year').text();
      var pub = $row.find('.t_pub').text();
      var category = $row.find('.t_cat').text();
      var filename = $row.find('.t_file').text();
  
      $('#u_did').val(id);
      $('#u_title').val(title);
      $('#u_authors').val(author);
      $('#u_description').val(desc);
      var p_year = moment(year).format('YYYY-MM-DD');
      $('#u_year').val(p_year);
      $('#u_publisher').val(pub);
      $('#u_description').val(desc);
      $('#u_filename').val(filename);
      $('#u_category option:selected').text(category);
      $('#u-drop-text').html(filename);
    });
  