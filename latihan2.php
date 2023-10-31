<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
 .au{
     padding-top: 5px;
 }
</style>

</head>
<body>
    <div class="container"><br><br>
    <h1>Toko Wayang Kami</h1>
    <p>Program Aplikasi sederhana menghitung penjualan barang Toko Wayang Kami</p>
   <form method="post" action="">
   <label for="Nama Barang">Nama Barang</label>
    <input type="text" class="form-control col-sm-6" name="Nama_Barang" placeholder="" value="" required=""><br>
    <label for="Harga Barang">Harga Barang</label>
    <input type="text" class="form-control col-sm-6" name="Harga_Barang" placeholder="" value="" required=""> <br>
    <label for="Jumlah Barang">Jumlah Barang</label>
    <input type="text" class="form-control col-sm-6" name="Jumlah_Barang" placeholder="" value="" required=""><br>
   
    <button type="submit" class="btn btn-primary" name="submit">PAY!!!</button>
    </form>
    <hr class="my-4">

    
    <?php 
    if (isset($_POST['submit'])){
    $nama_barang = $_POST['Nama_Barang'];
    $harga_barang = $_POST['Harga_Barang'];
    $jumlah_barang = $_POST['Jumlah_Barang'];
   
    echo "<div class='au'>";
    echo "<h3> Jumlah yang harus di bayarkan</h3>";

    $hasil = $harga_barang * $jumlah_barang;
    $diskon = $hasil * 0.05;
    $total = $hasil - $diskon;
    
 
    echo "Nama Barang  : $nama_barang<br>";
    echo "Harga Barang   : $harga_barang<br>";
    echo "Jumlah Barang : $jumlah_barang<br>";
    echo "Diskon Barang : 5% ";
    echo "<h4 class='text-md-start'>Rp. $total</h4>";
    echo "</div>";
    }
    ?>
    </div>
</body>
</html>