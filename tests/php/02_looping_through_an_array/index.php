<?php
	/*$stuff = array("aymane", "SI646");
	
	foreach($stuff as $k => $v) 
	{
		echo "Key= ", $k, " Val= ", $v, "\n";
	}*/
	
	// counted loop
	
	$stuff  = array("aymane", "764743", "hello ", "there");

	for($i=0; $i < count($stuff); $i++)
	{
		echo "I=", $i, " Val=", $stuff[$i], "\n";
	}
?>
