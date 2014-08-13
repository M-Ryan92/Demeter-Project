$(document).ready(function() {
 var form = $('#form');
  var submit = $('#submitButton');
  var inputEmail = $('#newsinput');
  var showSubscribe = $('.showsubscribe');
  
  form.on('submit', function(e) {
    e.preventDefault(); 

    $.ajax({
      url: 'saveSubscription.php',
      type: 'POST',
      dataType: 'html', // request type html/json/xml
      data: form.serialize(),
      beforeSend: function() {
        inputEmail.prop( "disabled", true );
        submit.html('Versturen...');
      },
      success: function(data) {
        inputEmail.prop( "disabled", false );
        inputEmail.css('display', 'none');
        submit.css('display', 'none');
        form.trigger('reset');
        submit.html('Inschrijven');
        showSubscribe.css('display', 'block');
        showSubscribe.html(data);
      },
      error: function(e) {
        console.log(e)
      }
    });
  });
});