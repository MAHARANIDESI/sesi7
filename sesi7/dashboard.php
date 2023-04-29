<?php
    session_start();
    if(!isset($_SESSION["LOGIN"])){
        header ("location: login.php");

    }
    if($_SESSION["login"]==""){
    header ("location: login.php");
    }
    $konten="<h3>Selamat Datang ".$_SESSION.["user"]."</h3>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
</head>
<body>

    <ul>
            <li><a haref="?aksi=dtmhs">DataMahasiswa</a> </li>
            <li><a haref="?aksi=dtdsn">DataDosen</a> </li>
            <li><a haref="?aksi=dtmk">DataMatakuliah</a> </li>
            <li><a haref="?aksi=dtuser">Datauser</a> </li>
            <li><a haref="?aksi=logout"><?=$_SESSION["USER"]?>-logout</a> </li>
    <ul>

    
</body>
</html>