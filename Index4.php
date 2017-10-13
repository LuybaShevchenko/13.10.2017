<?php
$groups=[
'101'=>'4.2',
'102'=>'4.0',
'103'=>'4.8',
'104'=>'4.6',
'105'=>'3.8',
];
$sum =0;
$avg=0;

foreach ($groups as  $group){
	$sum+=$group;
}
	
$avg= $sum/count($groups);


foreach ($groups as $index => $group)
if ($avg < $group){

	$gx=$index;
echo '<p> Группа '.$gx.'</p>';
}


?>

