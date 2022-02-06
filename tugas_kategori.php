
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if_else</title>
</head>
<body>
    <h2>PERHITUNGAN BMI ANDA</h2>
    <form action="" method="post">
        masukkan nama anda: 
        <input type=text name="namanya" placeholder=nama></input><br>
        Masukkan Tinggi Badan anda: 
        <input type=number name="tinggi_badan" placeholder="tinggi badan"></input><br>
        Masukkan berat badan anda : 
        <input type=number name="berat_badan" placeholder="berat badan"></input><br>
        <input name="tombol_simpan" type=submit value=simpan>
    </form>
    
</body>
</html>

<?php
$nama=$_POST['namanya'];
$tinggi = $_POST['tinggi_badan'];
$berat = $_POST['berat_badan'];
$tinggi_conf = $tinggi/100;
$BMI=$berat/($tinggi_conf*$tinggi_conf);
 echo("namanya : $nama <br>");
 echo("Tinggi : $tinggi<br>");
 echo("Berat : $berat <br>");
 echo("BMI Ideal anda adalah : $BMI ");
 if($BMI <=18.5 ){
    echo ("Anda Tergolong Kurus");
 }elseif($BMI >= 18.5 || $BMI <= 24.9){
    echo ("Anda Tergolong Normal");
 }elseif($BMI >= 25 || $BMI <= 29.9){
    echo ("Anda Tergolong overweight");
 }elseif($BMI >= 30.0){
    echo ("Anda Tergolong obesitas");
 }else{
    echo("anda tidak mempunyai badan");
 }
?>
