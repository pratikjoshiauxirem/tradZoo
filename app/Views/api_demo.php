<style>
    /* div{
        display: none;
    } */
</style>
 <?php

 $geo_API= curl_init();
 $url="http://www.geoplugin.net/json.gp?base_currency=USD";
 curl_setopt($geo_API,CURLOPT_URL,$url);
 curl_setopt($geo_API,CURLOPT_RETURNTRANSFER,true);
 $resp= curl_exec($geo_API);
 if($e = curl_error($geo_API)){
    echo $e;
 }
 else{
    $decoded=json_decode($resp,true);
    $city= $decoded["geoplugin_city"];
    $region= $decoded["geoplugin_regionName"];
    $country= $decoded["geoplugin_countryName"];
   
 }
 curl_close($geo_API);
 

 //Session API
$post = array(
    'city'=>$city,
    'region'=>$region,
    'country'=>$country
);

$postText = http_build_query($post);

$url = "https://api.tradzoo.com/webIntroTrack/createWebIntroPageSession";

$session_api = curl_init();
curl_setopt($session_api, CURLOPT_URL, $url);
curl_setopt($session_api, CURLOPT_RETURNTRANSFER, true);
curl_setopt($session_api, CURLOPT_POST, true);
curl_setopt($session_api, CURLOPT_POSTFIELDS, $postText); 

$result_session_api = curl_exec($session_api);
// echo $result;
if($e = curl_error($session_api)){
    echo $e;
 }
 else{
    echo $result_session_api;
   //  $decoded_session_api=json_decode($result,true);

   //  echo $decoded_session_api["status"];
 }
 curl_close($session_api);
// Tracking API
 $post = array(
    'type'=>'youtube',
    'sessionID'=>'120'
    
);

$postText = http_build_query($post);

$url = "https://api.tradzoo.com/webIntroTrack/buttonClickWebIntroPage";

$tracking_api = curl_init();
curl_setopt($tracking_api, CURLOPT_URL, $url);
curl_setopt($tracking_api, CURLOPT_RETURNTRANSFER, true);
curl_setopt($tracking_api, CURLOPT_POST, true);
curl_setopt($tracking_api, CURLOPT_POSTFIELDS, $postText); 

$result = curl_exec($tracking_api);
// echo $result;
if($e = curl_error($tracking_api)){
    echo $e;
 }
 else{
    echo $result;
    $decoded_session_api=json_decode($result,true);

    echo $decoded_session_api["status"];
 }
 curl_close($tracking_api);

 ?>
 <script>
   const text= document.getElementById('text');
   const textArray=Array.from(text);
   textArray
 </script>

