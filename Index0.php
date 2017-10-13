

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
'avgOderCost'=>'Средняя стоимость',
];

foreach ($person as $field=> $value){

echo '<p>'.$fields[$field].': '.$value.'</p>';

}			

?>