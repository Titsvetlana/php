<?php
function tag()
{    
	if($_POST['submit'])
	{
		$a = $_POST['tag_nav'];
		$b = $_POST['width'];
		$c = $_POST['height'];
		$d = $_POST['background-color'];
		$t = $_POST['text'];;	
	}
    echo "<$a style='display: block; width: $b; height: $c; background-color: $d'>$t</.$a>";
}

?> 
<p style="display: block; width: 50%">Разработать функцию вывода HTML-элемента, которая на входе принимает название тега и класс стилейи строит на странице соответствующий элемент.</p>
<form action="" method="POST">
	<input type="text" name="tag_nav" placeholder="tag">
	<input type="text" name="width" placeholder="width">
	<input type="text" name="height" placeholder="height">
	<input type="text" name="background-color" placeholder="background-color">
	<input type="text" name="text" placeholder="text">
	<input type="submit" name="submit" required>
</form>


<?php   
    echo tag();
   
    echo "<br>Перейти на следующую задачу <a href='chess.php'>Перейти</a>";
    echo "<br>Вернуться на главную <a href='index.php'>Вернуться</a>";
?>