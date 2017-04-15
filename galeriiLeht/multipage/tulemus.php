<?php require_once('head.html'); ?>	
	<h3>Valiku tulemus</h3>
	
	<?php if (empty($_GET)) {
		echo "<p>Hääletamiseks vali pilt!</p>";
	} else {
		echo "Hääletasid pildi nr " . $_GET["pilt"] . " poolt.";
	} ?>
<?php require_once('foot.html'); ?>