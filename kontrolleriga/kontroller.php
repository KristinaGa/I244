<?php 
session_start();
require_once('head.html'); 
    $pildid = array(
            "nameless1.jpg",
            "nameless2.jpg",
            "nameless3.jpg",
            "nameless4.jpg",
            "nameless5.jpg",
            "nameless6.jpg");


if (!empty($_GET["mode"])){
    $page = $_GET["mode"];
} else {
	$page = "pealeht";
}

	switch ($page) {
	    case "pealeht":
	    	include("pealeht.php");
	    break;

	    case "galerii":
	    	include('galerii.php'); 
	    break;
	    
	    case "vote": 
	    	include('vote.php');
	    break;
	    
	    case "tulemus": 
	    	include('tulemus.php'); 
	    break;
	}

require_once('foot.html');
?>