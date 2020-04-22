<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
$leftMenu = [
    	['link'=>'Домой', 'href'=>'index.php'],
    	['link'=>'Шахматы', 'href'=>'chess.php'],
    	['link'=>'Генерации случайного цвета', 'href'=>'rand_color.php'],
    	['link'=>'Вывода HTML-элемента', 'href'=>'tag.php'],
    ];
?>
<div id="nav">
	<p style="display: block; width: 50%">Разработать функцию, которая строит блок меню.
На входе функция получает массив пунктов меню.Пункт меню состоит из текста, который будет внутри,
и названия класса для стилей.</p>
			<h2>Навигация по сайту</h2>
			<?php			    
				foreach ($leftMenu as $item) 
				{ 
					echo "<ul style='display: block; background-color: #8faef2; float: left; padding: 10px; list-style-type: none'>";
						echo "<li>";
							echo "<a href='{$item['href']}'> {$item['link']} </a>"; 
						echo "</li>";
					echo "</ul>";
				}			    
			?>
		</div>
</body>
</html>