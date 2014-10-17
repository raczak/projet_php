<?php

$note['patrick']=array('maths'=>12,'anglais'=>8,'musique'=>20);
$note['gilles']=array('maths'=>12,'anglais'=>15,'musique'=>8);
$note['david']=array('maths'=>10,'anglais'=>17,'musique'=>17);

$noteMaxMatiere = array();
$noteMinMatiere = array();

foreach($note as $cle => $element)
{
	echo 'Note max de ' . $cle . ' vaut ' . max($element) . ' et min vaut ' .min($element). '<br />';
	
	foreach ($element as $key => $value) 
	{
		if($value>$noteMaxMatiere[$key])
		{
			$noteMaxMatiere[$key]= $value;
		}
		else if ($value<$noteMinMatiere[$key]) 
		{
			$noteMinMatiere[$key]= $value;
		}
	}
    

}
//print_r($noteMinMatiere);
foreach ($noteMaxMatiere as $key => $value) 
{
	echo 'La meilleur note en ' . $key . ' vaut ' . $value .'<br />';
}

foreach ($noteMinMatiere as $key => $value) 
{
	echo 'La moins bonne note en ' . $key . ' vaut ' . $value .'<br />';
}

?>