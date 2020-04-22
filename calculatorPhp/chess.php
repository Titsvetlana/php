<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chess Bord</title>
</head>
<body>
	<p style="display: block; width: 50%">Разработать функцию вывода шахматной фигуры
на доске, которая на входе принимает номер строки,
номер столбца и название фигуры.</p>
	 <table width="600px" height="600px" border="1px">
		<?php
			function square()
			{
				for ($row = 1; $row <= 8; $row++)
				{ 
					echo "<tr>";
					for ($col = 1; $col <= 8; $col++)
					{ 
						$total = $row + $col;
						if ($total % 2 == 0)
						{
							echo "<td style='height: 40px; width: 40px; background-color: #d5e0ed'>&#9823;</td>";
						}
						elseif ($total % 2 != 0)
						{
							echo "<td style='height: 40px; width: 40px; background-color: #000'></td>";
						}
					}
					echo "</tr>";
				}
			}	
			echo square();
		?>
		
	</table> 
	<?php
    echo "<br>Перейти на следующую задачу <a href='menu.php'>Перейти</a>";
    echo "<br>Вернуться на главную <a href='index.php'>Вернуться</a>";
	?>
</body>
</html>