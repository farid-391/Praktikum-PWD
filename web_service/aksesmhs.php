<?php
$url = "http://localhost/praktikumpwd/web_service/getdatamhs.php";
$client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($client);
$result = json_decode($response);
foreach ($result as $data) {
 echo "<p>";
 echo "NIM : " . $data->nim . "<br />";
 echo "Nama : " . $data->nama . "<br />";
 echo "jenis kel : " . $data->jkel . "<br />";
 echo "Alamat : " . $data->alamat . "<br />";
 echo "Tgl Lahir : " . $data->tgllhr . "<br />";
 echo "</p>";
}