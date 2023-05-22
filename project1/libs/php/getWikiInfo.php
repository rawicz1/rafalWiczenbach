<?php

	ini_set('display_errors', 'On');
	error_reporting(E_ALL);

	$executionStartTime = microtime(true);
	
    $country= $_REQUEST['country'];

    $url = "http://api.geonames.org/wikipediaSearchJSON?q=" . urlencode($country) . "&maxRows=1&username=rawiczhub";
 
   	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,$url);

	$result=curl_exec($ch);

	curl_close($ch);

	$decode = json_decode($result,true);	    

    $wikiUrl = $decode['geonames'][0]['wikipediaUrl'];

    

	echo json_encode($decode); 

?>