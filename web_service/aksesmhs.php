<?php
$url = "http://localhost/praktikumpwd/web_service/getdatamhs.php";
$client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($client);
$result = json_decode($response);
?>

<h3>Form Pencarian Dengan PHP MAHASISWA</h3>
<form action="" method="get">
<label>Cari :</label>
<input type="text" name="cari">
<input type="submit" value="Cari">
</form>
<?php 
    if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    echo "<b>Hasil pencarian : ".$cari."</b>";
    }
?>
<?php 
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        foreach ($result as $data) {
            if($data->nim===$cari){
                echo "<p>";
                echo "NIM : " . $data->nim . "<br />";
                echo "NIM : " . $data->nim . "<br />";
                echo "Nama : " . $data->nama . "<br />";
                echo "jenis kel : " . $data->jkel . "<br />";
                echo "Alamat : " . $data->alamat . "<br />";
                echo "Tgl Lahir : " . $data->tgllhr . "<br />";
                echo "</p>";
            }else{                
                break;
            }
        }
    }else{
        foreach ($result as $data) {
            echo "<p>";
            echo "NIM : " . $data->nim . "<br />";
            echo "Nama : " . $data->nama . "<br />";
            echo "jenis kel : " . $data->jkel . "<br />";
            echo "Alamat : " . $data->alamat . "<br />";
            echo "Tgl Lahir : " . $data->tgllhr . "<br />";
            echo "</p>";
        }
    }
?>


