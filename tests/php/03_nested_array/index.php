<?php

$products = array(
	'paper' => array(
		'copier' => "Multipurpose",
		'inkjet' => "inkjet printer",
		'laser' => "Laser printer",
		'photo' => "Photographic Paper"),
	'pens' => array(
		'ball' => "Ball Point",
		'hilite' => "Highlighters",
		'marker' => "markers"),
	'misc' => array(
		'tape' => "stick tape",
		'glou' => "adhesives",
		'clips' => "paperclips")
);

echo $products["pens"]["marker"];
?>
