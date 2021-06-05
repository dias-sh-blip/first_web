<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Book Info</title>
	<link rel="stylesheet" href="assets/css/style.css">
	<script src="assets/javascript/scripts.js"></script>
</head>
<body>
	<div class="main">
		<?php require "header.php"?>
		</div>
		<div class="site_content">
				<?php require "autorithation.php"?>

			<div class="content">
				
				<h1>1984</h1>
				
				<div class="info_book_page">
					<span class="label">рейтинг: </span><span class="value">8.0 / 10</span>
					<span class="label">год: </span><span class="value">1949</span>
					<span class="label">автор: </span><span class="value">Джордж Оруэлл</span>
				</div>
				<hr>	
				<h2>Описание книги</h2>
				<div class="descriptions_book">
					<img src="assets/img/1984.jpg">В письме своему издателю Фреду Уорбургу от 22 октября 1948 года Оруэлл сообщил, что первая мысль о романе возникла у него в 1943 году. Он органично продолжает тему «преданной революции», раскрытую в «Скотном дворе». Первыми названиями романа были «Последний человек в Европе» и «Live and Dead» («Живые и мёртвые»). Появляются основные моменты и линии — двухминутки ненависти, двоемыслие, новояз, любовь и страх в тоталитарном обществе и пр.
				</div>

				<hr>

				<h2>Отзывы</h2>
				<?php 
				if($_COOKIE['user'] == ''):?>				
				<p>Вы не авторизованны</p>
				<?php else:?>
				<div class="send">	
					<form method="post" action="coment.php" id="review">

						<textarea name="coment"></textarea>
						<input class="btn" type="submit" value="отправить">

					</form>
				</div>
				<?php endif;?>
				<?php 
				$mysqli = new mysqli("localhost", "root", "root", "website");
				$sel_comments = mysqli_query($mysqli, "SELECT * FROM `coments` WHERE `book` = '1984'");
				while ($sel_comments_wh = mysqli_fetch_assoc($sel_comments)) {
				?>
				<div class="reviews">
					<div class="review_name">
						<?php echo $sel_comments_wh['login']; ?> 
					</div>
					<div class="review_text">
						<?php echo $sel_comments_wh['coment']; ?>
					</div>
						<?php 
						echo "<hr>";
						echo "<br>";?>
				</div>	
				<?php } ?>
			</div>

		</div>


	<?php require "footer.php"?>
	</div>
	
</body>
</html>