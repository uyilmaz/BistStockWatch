<?php
$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);
echo file_get_contents($_GET["url"], false, stream_context_create($arrContextOptions));
/*$response = get_web_page(urldecode($_GET["apiUrl"]));
$resArr = array();
$resArr = json_decode($response);
echo print_r($resArr);

function get_web_page($url) {
    $options = array(
        CURLOPT_RETURNTRANSFER => 1,   // return web page
        CURLOPT_HEADER         => 0,  // don't return headers
        CURLOPT_FOLLOWLOCATION => 1,   // follow redirects
        CURLOPT_MAXREDIRS      => 10,     // stop after 10 redirects
        CURLOPT_ENCODING       => "",     // handle compressed
        CURLOPT_USERAGENT      => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36", // name of client
        CURLOPT_AUTOREFERER    => 1,   // set referrer on redirect
        CURLOPT_CONNECTTIMEOUT => 120,    // time-out on connect
        CURLOPT_TIMEOUT        => 120,    // time-out on response
    ); 

    $ch = curl_init($url);
    curl_setopt_array($ch, $options);

    $content  = curl_exec($ch);

	echo($url);
	
    curl_close($ch);

    return $content;
}/

/*
// Get cURL resource
$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => urldecode($_GET["apiUrl"]),
    CURLOPT_USERAGENT => 'cURL'
));
// Send the request & save response to $resp
$resp = curl_exec($curl);
// Close request to clear up some resources

echo $resp;

curl_close($curl);*/
?>