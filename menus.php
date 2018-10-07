<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Date Menus</title>
</head>
<body>
<?php //menus.php script
/*This script calls and defines a function*/
function make_date_menus(){
	//array to store months:
	$months = [1 => 'January', 'February', 'March', 'April', 'May', 'June', 	'July', 'August', 'September', 'October', 'November', 'December'];

	//pull down menu:
	print '<select name="month">';
	foreach ($months as $key => $value){
		print "\n<option value=\"$key\">$value</option>";
	}
	print '</select>';

	//make the day pull-down menu:
	print '<select name="day">';
	for ($day = 1; $day <= 31; $day++){
		print "\n<option value=\"$day\">$day</option>";
	}
	print '</select>';

	//make the year pull-down menu:
	print '<select name="year">';
	$start_year = date('Y');
	for ($y = $start_year; $y <= ($start_year + 10); $y++){
		print "\n<option value=\"$y\">$y</option>";
	}
	print '</select>';
} 

//make form:
print '<form action="" method="post">';
make_date_menus();
print '</form>';
?>
</body>
</hmtl>
