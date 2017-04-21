<?php
$pildid = array(
	"pildid/nameless1.jpg",
	"pildid/nameless2.jpg",
	"pildid/nameless3.jpg",
	"pildid/nameless4.jpg",
	"pildid/nameless5.jpg",
	"pildid/nameless6.jpg");

$info = "";
if (!empty($_SESSION["voted_for"])){
	$info = "Hääletada saab üks kord! Valisid pildi: <br> <img src=\"".$_SESSION["voted_for"]."\"";
} else if (empty($_POST)){   
	$info = "Hääletamiseks vali pilt!";
} else {   
	$info = "Midagi läks valesti, sellist pilti pole.";
	foreach ($pildid as $pilt){
		if ($pilt === $_POST["pilt"]){
			$_SESSION["voted_for"] = $_POST["pilt"];
			$info = "Hääletatud!";
		}
	}
}
?>

<h3>Valiku tulemus</h3>
<p><?php echo
$info; ?></p>
<br><br>
<a href="sessioon_lopp.php">Alusta uut sessiooni!</a>