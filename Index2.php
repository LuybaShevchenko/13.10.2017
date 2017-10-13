<?php
$person=[
'lastName'=>'Иванов',
'firstName'=>'Иван',
'patronymic'=>'Иванович',
'avgOderCost'=>'15000',
];
$fields=[
'lastName'=>'Фамилия',
'firstName'=>'Имя',
'patronymic'=>'Отчество',

];

foreach ($person as $field=> $value){
if (isset ($fields [$field])){
	$fieldName=$fields [$field];
	
}

else {$fieldName=$field;
}

echo '<p>'.$fieldName.': '.$value.'</p>';

}

?>

