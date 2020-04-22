<?php
function calc()
{
		if($_POST['submit'])
	{
		$a = $_POST['first'];
		$b = $_POST['second'];
		$p = $_POST['operation'];
		$rez;
		if($p == '+')
			echo $rez = $a + $b;
		elseif($p == '-')
			echo $rez = $a - $b;
		elseif($p == '*')
			echo $rez = $a * $b;
		elseif($p == '/')		
		{
			if($b == 0 or $a == 0)
				echo "<span style='color: red'>You can not divide by zero</span>";
			else  echo $rez = $a / $b;
				
		}
		elseif($p == '^')
			echo $rez = pow($a, $b);	
	}
}
?>
<p style="display: block; width: 50%">Разработать функцию, которая на входе принимает
3 параметра (число, число, действие) и, в зависимости
от действия, выполняет математическую операцию.
Учесть, что нельзя делить на 0 и, если передано некорректное действие, сообщать об ошибке.</p>
<form action="" method="POST">
	<input type="text" name="first" required>
	<select name="operation" required>
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="*">*</option>
		<option value="/">/</option>
		<option value="^">^</option>
	</select>
	<input type="text" name="second" required>
	<input type="submit" name="submit" required>
</form>

<?php
	echo calc();
	echo "<br>Перейти на следующую задачу <a href='rand_color.php'>Перейти</a>";
?>

