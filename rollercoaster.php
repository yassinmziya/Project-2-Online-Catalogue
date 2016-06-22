STATUS: 
<?php
if(fopen("rollercoaster.txt", "w+") == FALSE) {
	print("ERROR");
	exit;
}
print("GUCCI FAM");
$pointer = fopen("rollercoaster.txt", "w+");
$table = array(array("Ride Name", "Amusement Park", "Country", "Score"), 
		array("Thrill Rocket", "Fun City", "Tanzania", "10"),
		array("Flight Of The Bullocks", "Six Flags", "USA", "0"),
		array("The Fractured But Whole", "Arbitrary Fun Land", "UK", "3"),
		array("Rollercoaster", "Fun Park Land", "Greenland", "9"),
		array("Amusement Park Thrill Contraption", "Fun Park Land", "Greenland", '=3'));

$rows = array();
foreach($table as $i) {
	$newLine = implode("\t", $i);
	$rows[] = $newLine;
}

$contents = implode("\n", $rows);
fputs($pointer, $contents);

fclose($pointer);
?>