<?php
	if($_COOKIE['user'] == ''):
?>
<script src="assets/javascript/jquery.min.js"></script>
<script src="assets/ajax.js"></script>	
<div class="sidebar_container">
	<div class="sidebar">
		<h2>Вход</h2>
		<form id="login">
							
			<input type="text" name="login" placeholder="логин" />
			<input type="password" name="password" placeholder="пароль" />
			<button type="submit" id="login-btn">Войти</button>
			<div class="lables_passreg_text">
				<span><a href="register.php">регистрация</a></span>
			</div>
			<p class="msg none"></p>
		</form>
	</div>
</div>


<?php else:?>
<div class="sidebar_container">
	<div class="sidebar">
		<a onclick="openbox('box'); return false" class="auth"><p><?=$_COOKIE['user']?></p></a>
		<div id="box" style="display: none;">	
			<a href="exit.php">
				<input type="submit" class="btn" value="выйти" />
			</a>
		</div>
	</div>
</div>

<script>
	function openbox(box) 
	{
		display = document.getElementById('box').style.display;
		if(display == "none") {
			document.getElementById('box').style.display = "block";
		}
		else {
			document.getElementById('box').style.display = "none";
		}
	}
</script>

<?php endif;?>