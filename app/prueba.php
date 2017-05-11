<?PHP
/*
$string = file_get_contents("employees.json");
//$json_a = json_decode($string, true);


$jsonIterator = new RecursiveIteratorIterator(
    new RecursiveArrayIterator(json_decode($string, TRUE)),
    RecursiveIteratorIterator::SELF_FIRST);
foreach ($jsonIterator as $key => $val) {
    if(is_array($val)) {
        echo "$key:\n";
    } else {
        echo "$key => $val\n";
    }
}*/

$string = file_get_contents("employees.json");
$json_a = json_decode($string, true);

foreach ($json_a as $person_name => $person_a) {
    echo $person_a['id']."\n";
	foreach ($person_a['skills'] as $person_namex => $person_ax) {
	echo $person_ax['skill']."\n";
	}
}

//echo $json_a['id'];
?>