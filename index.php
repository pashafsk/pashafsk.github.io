<?php


// Get cURL resource
$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://query1.finance.yahoo.com/v7/finance/options/lly',
    CURLOPT_USERAGENT => 'Codular Sample cURL Request'
));
// Send the request & save response to $resp
$resp = curl_exec($curl);
$json_pretty = json_encode(json_decode($resp), JSON_PRETTY_PRINT);
echo($json_pretty);
// Close request to clear up some resources
curl_close($curl);
?>