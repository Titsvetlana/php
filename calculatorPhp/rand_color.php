 <p style="display: block; width: 50%">Разработать функцию генерации случайного цвета,
которая возвращает случайный цвет в HEX-формате, вывести на страницу DIV, зарисованный цветом,
который вернет функция.</p>
<?php
function color()
{
	$rand_color = "#".substr(md5(rand()), 0, 6);
    echo '<div style="width: 100px; height: 100px;background-color: '.$rand_color.'"></div>';
    echo $rand_color;
}
    
    echo color();
    echo "<br>Перейти на следующую задачу <a href='tag.php'>Перейти</a>";
    echo "<br>Вернуться на главную <a href='index.php'>Вернуться</a>";
    ?>
   