<?php require_once('head.html'); ?>	
	<h3>Fotod</h3>
    <div id="gallery">
        <?php foreach ($pildid as $jrk => $pilt): ?>
            <img src="pildid/nameless<?php echo $jrk+1;?>.jpg" alt="nimetu <?php echo $jrk+1;?>" />
        <?php endforeach; ?>
    </div>

    <?php endforeach;?>
<?php require_once('foot.html'); ?>	
