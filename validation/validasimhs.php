<html>
 <head>
 <style>
 .error {color: #FF0000;}
 .table {
    border : 1pt solid black;
    border-spacing: 0px;
 }
 .row td{
    border : 0.8pt solid black;
    padding: 4px;
 }
 
</style>
 </head>
 
 <body>
 <?php
 // define variables and set to empty values
 $namaErr = $nimErr = $emailErr = $genderErr = "";
 $nama = $nim =  $email = $gender = $alamat = "";
 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 if (empty($_POST["nama"])) {
 $namaErr = "Nama harus diisi";
 }else {
 $nama = test_input($_POST["nama"]);
 }

 if (empty($_POST["nim"])) {
  $nimErr = "Nim harus diisi";
  }else {
  $nim = test_input($_POST["nim"]);
}
 
 if (empty($_POST["email"])) {
 $emailErr = "Email harus diisi";
 }else {
 $email = test_input($_POST["email"]);
 
 // check if e-mail address is well-formed
 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 $emailErr = "Email tidak sesuai format"; 
 }
 }
 
 if (empty($_POST["alamat"])) {
 $alamat = "";
 }else {
 $alamat = test_input($_POST["alamat"]);
 }
 
 if (empty($_POST["gender"])) {
 $genderErr = "Gender harus dipilih";
 }else {
 $gender = test_input($_POST["gender"]);
 }
 }
 
 function test_input($data) {
 $data = trim($data);
 $data = stripslashes($data);
 $data = htmlspecialchars($data);
 return $data;
 }
 ?>
 
 <p><span class = "error">* Harus Diisi.</span></p>
 
 <form method = "post" action = "<?php 
 echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 <table>
 <tr>
 <td>Nama:</td>
 <td><input type = "text" name = "nama">
 <span class = "error">* <?php echo $namaErr;?></span>
 </td>
 </tr>

 <tr>
 <td>NIM:</td>
 <td><input type = "text" name = "nim">
 <span class = "error">* <?php echo $nimErr;?></span>
 </td>
 </tr>
 
 <tr>
 <td>E-mail: </td>
 <td><input type = "text" name = "email">
 <span class = "error">* <?php echo $emailErr;?></span>
 </td>
 </tr>
 
 <tr>
 <td>Alamat:</td>
 <td> <textarea name = "alamat" rows = "5" cols = "40"></textarea></td>
 </tr>
 
 <tr>
 <td>Gender:</td>
 <td>
 <input type = "radio" name = "gender" value = "L">Laki-Laki
 <input type = "radio" name = "gender" value = "P">Perempuan
 <span class = "error">* <?php echo $genderErr;?></span>
 </td>
 </tr>
 <td>
 <input type = "submit" name = "submit" value = "Submit"> 
 </td>
 </table>
 </form>
 
<table class="table">
    <tr class="row">
        <td>Nama</td>
        <td> <?php echo $nama;?> </td>
    </tr>
    <tr class="row">
        <td>NIM</td>
        <td> <?php echo $nim;?></td>
    </tr>
    <tr class="row">
        <td>Email</td>
        <td> <?php echo $email;?></td>
    </tr>
    <tr class="row">
        <td>Gender</td>
        <td><?php echo $gender;?></td>
    </tr>
    <tr class="row">
        <td>Alamat</td>
        <td><?php echo $alamat;?></td>
    </tr>
</table>
</body>
</html>