<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>PHP sissejuhatus</title>
	</head>
	
	<body>
		<?php
			$tekst = 'minu peegelpildis tekst';
				for ($pikkus = strlen($tekst)-1, $j = 0; $j<$pikkus; $pikkus--, $j++) {
					list($tekst[$j], $tekst[$pikkus]) = array($tekst[$pikkus], $tekst[$j]);
				}
			echo $tekst;
		?>
	</body>
</html>
