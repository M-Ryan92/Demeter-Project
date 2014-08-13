$(document).ready(function() {
 var form = $('#form');
 var response = $('#formresponse');
    
  form.on('submit', function(e) {
    e.preventDefault(); 

    $.ajax({
      url: 'baseComponents/forms/SubmitForm.php',
      type: 'POST',
      dataType: 'html', // request type html/json/xml
      data: form.serialize(),
      beforeSend: function() {
        
      },
      success: function(data) {
          form.css("display", "none");
          response.css("display", "block");
      },
      error: function(e) {
        console.log(e);
      }
    });
  });
});