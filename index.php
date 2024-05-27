
<?php
include 'logic.php';
$proses = new beli();
$proses->setHarga(15530,16530,16130,16570);
if(isset($_POST['tampil'])){
    $proses->jumlah = $_POST['jumlah'];
    $proses->jenis = $_POST ['jenis'];
    $proses->tampil();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

   <center> <form action="" method="post">

        <!-- UNTUK JUMLAH LITER -->
        <label for="jumlah">Jumlah Liter :</label>
        <input type="number" name = "jumlah" require>

        <!-- UNTUK JENIS BAHAN BAKAR -->
        <label for="jenis" >Bahan Bakar      : </label>

        <!-- JENIS JENIS -->
        <select name="jenis" id="">  
            
        <option value="" disabled selected>Shell</option>
        <option value="SSuper">SSuper</option>
        <option value="SVPower">SVPower</option>
        <option value="SVPowerDiesel">SVPowerDiesel</option>
        <option value="SVPowerNitro">SVPowerNitro</option>
        </select>

        <button  name = "tampil">Bayar</button>



    </form></center>
    




    
    <style>
            body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
    }

    form {
        background-color: #fff;
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        margin-bottom: 10px;
    }

    input[type="number"],
    select {
        width: 100%;
        padding: 8px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button {
        background-color: #4caf50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }

    center {
        display: block;
        margin-top: 20px;
    }
    </style>
</body>
</html>

