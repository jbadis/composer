<?php
function amocrmErrors ($getCode, $getMessage,$domen){
	
	$data = array(
	'getCode' => $getCode, 
	'getMessage' =>$getMessage,
	'domen' => $domen	
	);
	
	$url = 'https://i.ingeni.space/amoerrors/';
    $ch = curl_init($url);
    $encodedData = $data;

    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $encodedData);
	curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36');  
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('application/x-www-form-urlencoded'));
    curl_exec($ch);
    curl_close($ch);    
} 

	
?>
