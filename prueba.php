<?php

$data = json_decode( file_get_contents('https://pokeapi.co/api/v2/pokemon'), true );

for ($i=0; $i < sizeof($data["results"]); $i++)
{ 
	echo $data["results"][$i]["name"];
}

?>