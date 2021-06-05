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
		<div class="site_content">
			<?php require "autorithation.php"?>
			<div class="content">
				
				<table>
					<tr>
						<th></th>
						<th>Книги</th>
						<th class="center">Год</th>
						<th class="center">Рейтинг</th>
					</tr>

					<tr>
						<td class="center"><img src="assets/img/1984.jpg"></td>
						<td>1. <a href="show.php">1984</a></td>
						<td class="center">1949</td>
						<td class="rating center">8.0</td>
					</tr>

					<tr>
						<td class="center"><img src="assets/img/malec.jpg"></td>
						<td>2. <a href="#">Малец</a></td>
						<td class="center">2017</td>
						<td class="center rating">7.7</td>
					</tr>
					<tr>
						<td class="center"><img src="assets/img/unesen.jpg"></td>
						<td>3. <a href="#">Унесенный ветром</a> </td>
						<td class="center">2017</td>
						<td class="rating center">9.0</td>
					</tr>
					<tr>
						<td class="center"><img src="assets/img/institut.jpg"></td>
						<td>4. <a href="#">Институт</a></td>
						<td class="center">2019</td>
						<td class="rating center">8.2</td>
					</tr>
					
					
					<tr>
						<td class="center"><img src="assets/img/protivostoyanie.jpg"></td>
						<td>5. <a href="#">Противостояние</a></td>
						<td class="center">1978</td>
						<td class="rating center">8.0</td>
					</tr>


					<tr>
						<td class="center"><img src="assets/img/metro-2033.jpg"></td>
						<td>6. <a href="#">Метро 2033</a></td>
						<td class="center">2008</td>
						<td class="rating center">7.8</td>
					</tr>

					<tr>
						<td class="center"><img src="assets/img/tekst.jpg"></td>
						<td>7. <a href="#">Текст</a></td>
						<td class="center">2017</td>
						<td class="rating center">7.8</td>
					</tr>

					<tr>
						<td class="center"><img src="assets/img/schegol.jpg"></td>
						<td>8. <a href="#">Щегол</a></td>
						<td class="center">2013</td>
						<td class="rating center">7.8</td>
					</tr>


					<tr>
						<td class="center"><img src="assets/img/cherchill-vtoraya-mirovaya-voyna.jpg"></td>
						<td>9. <a href="#">Вторая мировая война</a></td>
						<td class="center">1947</td>
						<td class="rating center">7.6</td>
					</tr>


					<tr>
						<td class="center"><img src="assets/img/celitel-spasti-sssr.jpg"></td>
						<td>10. <a href="#">Целитель. Спасти СССР!</a></td>
						<td class="center">2019</td>
						<td class="rating center">7.0</td>
					</tr>


					<tr>
						<td class="center"><img src="assets/img/ne-proschaus.jpg"></td>
						<td>11. <a href="#">Не прощаюсь</a></td>
						<td class="center">2011</td>
						<td class="rating center">6.2</td>
					</tr>


					<tr>
						<td class="center"><img src="assets/img/proishozhdenie.jpg"></td>
						<td>12. <a href="#">Происхождение</a></td>
						<td class="center">2017</td>
						<td class="rating center">8.8</td>
					</tr>



				</table>

			</div>
	
		</div>
	<?php require "footer.php"?>
	

	</div>
</body>
</html>