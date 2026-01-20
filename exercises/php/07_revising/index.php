<html>
<head>
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<title>Document</title>
</head>


<body>
	<?php
		require_once 'classes/Car.php';

		$mercedes = new Car("bmw", "black");

		$variable_1 = $mercedes->setBrandColor("mercedes car", "red");
		echo "the result : " . $variable_1 . "\n"; 
	?>
</body>
</html>
