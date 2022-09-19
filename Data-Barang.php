<?php
    include "koneksi.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sarpras</title>
    <link rel="stylesheet" href="Barang.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div class="Side-bar">
            <div class="logo">
                <img src="asset/logo.png" height="50px" alt="LOGO">
                <h3>INVE<span>TO</span></h3>
            </div>
            <div class="nav">
                <div><i class="fa-solid fa-house"></i><a href="tampilan.html">HOME</a></div>
                <div><i class="fa-solid fa-warehouse"></i><a href="Data-barang.php">DATA BARANG</a></div>
                <div><i class="fa-solid fa-id-card"></i><a href="Data-siswa.php">DATA SISWA</a></div>
            </div>
        </div>
        <div class="header">
            <h1>DATA BARANG</h1>
        </div>
        <div class="content">
            <form action="">
                <table>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </table>
            </form>
        </div>

    </div>

</body>
</html>