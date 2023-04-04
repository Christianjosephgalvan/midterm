<?php 

header('Access-Control-Allow-Origin: *');

$myObj =json_decode(file_get_contents('mobile.json'));
/*$myObj->name = 'John Ravan';
$myObj->age = 22;
$myObj->city = "New York";*/


$myJSON = json_encode($myObj);

echo $myJSON;
/*
$drinks = json_decode(file_get_contents('drinks.json'));
foreach($drinks as $drink) {
	echo '<li>'.$drink->name.' $'.$drink->price.'</li>';
}*/
?>
