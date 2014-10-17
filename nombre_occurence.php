<?php
$tablettre = array();
$phrase ='Dans la mesure ou un quart de la consommation electrique mondiale est absorbee par l\'eclairage, l\'invention de la diode bleue revet une importance considerable en termes d\'economies d\'energie';




for($i='a'; $i<='z'; $i++)
{
   $valeur = mb_substr_count($phrase, $i);
   $tablettre[$i] = $valeur;
   if($i=='z'){break;}
}

echo("</br> ///Affichage par ordre alphabetique///</br></br> ");
foreach ($tablettre as $lettre => $valeur) 
{

	if ($valeur>1) 
	{

		echo "La lettre ".$lettre." apparait ".$valeur." foi(s)</br>";
	}
	
}

echo("</br> ///Affichage par ordre d'occurence///</br></br> ");
asort($tablettre);

foreach ($tablettre as $lettre => $valeur) 
{
	
	if ($valeur>1) 
	{

		echo "La lettre ".$lettre." apparait ".$valeur." foi(s)</br>";
	}
	
}


