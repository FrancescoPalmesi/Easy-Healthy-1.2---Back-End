const switchers = [...document.querySelectorAll('.switcher')]

switchers.forEach(item => {
	item.addEventListener('click', function() {
		switchers.forEach(item => item.parentElement.classList.remove('is-active'))
		this.parentElement.classList.add('is-active')
	})
})

const validateEmail = (email) => {
	return email.match(
	  /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
	);
  };
  
  const validate = () => {
	const $result = $('#result');
	const email = $('#login-email').val();
	$result.text('');
  
	if(validateEmail(email)){
	  $result.text(email + ' é valido.');
	  $result.css('color', 'green');
	} else{
	  $result.text(email + ' não é valido.');
	  $result.css('color', 'red');
	}
	return false;
  }
  
  $('#login-email').on('input', validate);

  const validate2 = () => {
	const $result = $('#result2');
	const email = $('#signup-email').val();
	$result.text('');
  
	if(validateEmail(email)){
	  $result.text(email + ' é valido.');
	  $result.css('color', 'green');
	} else{
	  $result.text(email + ' não é valido.');
	  $result.css('color', 'red');
	}
	return false;
  }
  
  $('#signup-email').on('input', validate2);