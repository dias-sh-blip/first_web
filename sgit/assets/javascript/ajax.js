// auth.php
$(document).ready (function () {
	$("#login-btn").click (function (e){
		e.preventDefault();
		

		let login = $('input[name="login"]').val(),
			password = $('input[name="password"').val();

		$.ajax({
			url: '/auth.php',
			type: 'POST', 
			dataType: 'json',
			data: {
				login: login,
				password: password
			},
			success (data) {
				if (data.status){
					document.location.href = '/index.php';
				}
				$('.msg').removeClass('none').text(data);
			}

		})
	})
});