// auth.php
$(document).ready (function () {
	$("#login-btn").click (function (e){
		e.preventDefault();
		

		let login = $('input[name="login"]').val(),
			password = $('input[name="password"').val();

		$.ajax({
			url: '/auth.php',
			type: 'POST', 
			dataType: 'text',
			data: {
				login: login,
				password: password
			},
			success: function (data) {
				if (data){
					document.location.href = '/index.php';
				} 
				else {
					$('.msg').removeClass('none').text('Пользователь не известен');
				}
			}
			

		})
	})
});