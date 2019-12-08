<?php

// Read JSON file
$json = file_get_contents('./76FFF0EFD882B707444E22AAAA870F0DB0F625BEF78BEBF003E4B893AEFCFAFD1.json');

//Decode JSON
$json_data = json_decode($json,true);

//Print data
print_r($json_data);

?>

{
"id":"1",
"ac":"76FFF0EFD882B707444E22AAAA870F0DB0F625BEF78BEBF003E4B893AEFCFAFD",
"cdkey":"Crack-Mobi-PisoWifi",
"status":"active",
"dateActivated":"2019-08-09 02:00:05",
"notes":"Marvin448",
"ip":"110.54.179.111",
"lastUpdate":"2019-11-28 04:00:30",
"userId":"1","activatingIP":"49.151.178.183",
"email":null
}
