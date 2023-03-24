<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php

		$directory = 'nom_dossier';

		$mask = 'exemple_{}_';

		$i = 0;


		foreach (glob($directory . '/*.*') as $filename) {
	 
	  		$new_filename = str_replace('{}', $i, $mask);

	 		rename($filename, $directory . '/' . $new_filename);

	 		$i++;
		}
	?>
</body>
</html>