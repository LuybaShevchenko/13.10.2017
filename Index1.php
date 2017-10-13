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
echo '<p>'.$fields[$field].': '.$value.'</p>';
}
}

?>