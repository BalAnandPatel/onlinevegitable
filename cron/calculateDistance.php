<?php


$host = "193.203.184.162";
$dsn = 'mysql:host=193.203.184.162;dbname=u564757906_vegitabledb';
$db_name = "u564757906_vegitabledb";
$username = "u564757906_vegitable";
$password = "Glintel@2024#$dkp";
$conn;

$query = "select * from orderItem  ";

$stmt = $pdo->prepare($query);
$stmt->bindParam(':langitude',0);
$stmt->bindParam(':longitude', 0);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

for(){
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.geoapify.com/v1/routing?waypoints=19.466532,73.600354|29.9176706,78.4439921&mode=drive&apiKey=9310a366ea3942779e10cfb0cb50164c',
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
echo $response;

$query = "updateorderItem set langitude=:langitude , longitude=:longitude where subId=:subId";

$stmt = $pdo->prepare($query);
$stmt->bindParam(':langitude',0);
$stmt->bindParam(':longitude', 0);
$stmt->bindParam(':longitude', 0);
$stmt->execute();

}
?>