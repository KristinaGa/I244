<h3>Fotod</h3>
<div id="gallery">
	<?php foreach ($pildid as $nr => $pilt): ?>
		<img src="pildid/nameless<?php echo $nr+1;?>.jpg" alt="nimetu <?php echo $nr+1;?>" />
	<?php endforeach; ?>

