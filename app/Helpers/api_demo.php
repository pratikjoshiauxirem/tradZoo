 <?php
 $ch= curl_init();
 $url="http://www.geoplugin.net/json.gp?base_currency=USD";
 curl_setopt($ch,CURLOPT_URL,$url);
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
 $resp= curl_exec($ch);
 if($e = curl_error($ch)){
    echo $e;
 }
 else{
    $decoded=json_decode($resp);
    print_r($decoded);
 }
 curl_close($ch);
 ?>
