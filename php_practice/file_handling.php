<?php                  // not working
$file = "employees.csv";
$f = fopen($file, "a");

$newFields = array(
    array('Tom', 'Jones', 36, 'Accountant'),
    array('Freda', 'Williams', 45, 'Analyst'),
    array('Brenda', 'Collins', 34, 'Engineer'));

foreach($newFields as $fields)  {
	fputcsv($f, $fields);
}
fclose($f);

$f1 = fopen($file, "r");
while ($record = fgetcsv($f1)) {
    foreach($record as $field) {
        echo "<pre> $field </pre>" ;
    }
}
fclose($f1);
