<?php
$day = rand(0, 10);
switch ($day) {
	case 1:
	case 2:
	case 3:
	case 4:
	case 5:
		echo $day, '<br>';
		echo 'Это рабочий день';
		break;
	case 6:
	case 7:
		echo $day, '<br>';
		echo 'Это выходной день';
		break;
}
?>