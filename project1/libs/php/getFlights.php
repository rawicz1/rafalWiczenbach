<?php


	ini_set('display_errors', 'On');
	error_reporting(E_ALL);

	$executionStartTime = microtime(true);	

    $url = 'https://opensky-network.org/api/states/all?lamin=' . $_REQUEST['lamin'] . '&lomin=' . $_REQUEST['lomin'] . '&lamax=' . $_REQUEST['lamax'] . '&lomax=' . $_REQUEST['lomax'];


	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,$url);

	$result=curl_exec($ch);

	curl_close($ch);

	$decode = json_decode($result,true);	    


	echo json_encode($decode); 

?>