var element,
	input = document.getElementById('newsinput'),
	btn = document.getElementById('newsbutton');

function setVisible(obj){
	element = obj;
	obj.style.display = 'none';

	input.value = '';
	input.style.display = 'block';
	btn.style.display = 'block';

	input.focus();
	input.onblur = reset;
}

function reset(){
	input.style.display = 'none';
	btn.style.display = 'none';
	element.style.display = 'block';
}