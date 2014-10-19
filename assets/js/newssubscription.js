var element,
	input = document.getElementById('newsinput'),
	btn = document.getElementById('newsbutton');

function setVisible(obj){
	element = obj;
	obj.style.display = 'none';

  if(input == null || btn == null){
    input = document.getElementById('newsinput');
    btn = document.getElementById('newsbutton');
  }
	input.value = '';
	input.style.display = 'block';
	btn.style.display = 'block';

	input.focus();
	//input.onblur = reset;
}

function reset(){
	input.style.display = 'none';
	btn.style.display = 'none';
	element.style.display = 'block';
}
$(document).ready(function() {
 var form = $('#subscription');
  var submit = $('#newsbutton');
  var inputEmail = $('#newsinput');
  var showSubscribe = $('.showsubscribe');
  
  form.on('submit', function(e) {
    e.preventDefault(); 

    $.ajax({
      url: 'sendForm',
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
        //showSubscribe.html(data);
      },
      error: function(e) {
        console.log(e);
      }
    });
  });
});