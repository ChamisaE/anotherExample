<?php
echo '<h1> A List of Near Earth Objects</h1>
 		<p>Provided by the NASA Asteroids-NeoWs API</p> 
     <br/>';
$url = curl_init('https://api.nasa.gov/neo/rest/v1/feed?start_date=2019-11-15&end_date=2019-11-21&api_key=f1NN7ANpqHGvZkORKVl5H8jvXxgAGk9jpWMOOhx0');
/*$ch = curl_init('https://images-api.nasa.gov/search?q');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);*/
$data = curl_exec($url);
$code = curl_getinfo($url, CURLINFO_HTTP_CODE);


      curl_close($url);

      var_dump($data);
