<?php


$host = "193.203.184.162";
$dsn = 'mysql:host=193.203.184.162;dbname=u564757906_vegitabledb';
$db_name = "u564757906_vegitabledb";
$username = "u564757906_vegitable";
$password = "Glintel@2024#$dkp";
$conn;

$query = "select subId,deliveryAddress from orderItem a  left join orderDetails b on a.orderId=b.orderId  where langitude=:langitude & longitude=:longitude ";
$x=0;
$stmt = $pdo->prepare($query);
$stmt->bindParam(':langitude',$x);
$stmt->bindParam(':longitude', $x);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);


for( $i=0;$i<sizeof($results);$i++){
  $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.geoapify.com/v1/geocode/search?text='.$results[$i]['deliveryAddress'].'&format=json&apiKey=9310a366ea3942779e10cfb0cb50164c',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
$resp= json_encode($response);

$query = "update orderItem set langitude=:langitude , longitude=:longitude where subId=:subId";

$stmt = $pdo->prepare($query);
$stmt->bindParam(':langitude',$resp['long']);
$stmt->bindParam(':longitude', $resp['lang']);
$stmt->bindParam(':longitude', $results[$i]['subId']);
$stmt->execute();


}


?>