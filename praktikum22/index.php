<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<h2 class="card-header" >Belanja Online</h2>

<div class="row">
    <form class="col-8 card">
    <br>
    <div class="ml-3">
        <div class="form-group row">
        <label for="customer" class="col-2 col-form-label">Customer</label> 
        <div class="col-4">
        <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control" required="required">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-2">Produk</label> 
        <div class="col-4">
        <div class="custom-control custom-radio custom-control-inline">
            <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv" required="required"> 
            <label for="produk_0" class="custom-control-label">TV</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas" required="required"> 
            <label for="produk_1" class="custom-control-label">KULKAS</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin" required="required"> 
            <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
        </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="jumlah" class="col-2 col-form-label">Jumlah</label> 
        <div class="col-4">
        <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control" required="required">
        </div>
    </div> 
    <div class="form-group row">
        <div class="offset-2 col-4">
        <button name="submit" type="submit" class="btn btn-success">Kirim</button>
        </div>
    </div>
    </form>
</div>
    <table class="col-4">
        <tr>
            <th class="card-header bg-primary container-fluid">
                Daftar Harga
            </th>
        </tr>
        <tr >
            <td class="card-footer container-fluid">
                TV : 4.200.000
            </td>
        </tr>
        <tr >
            <td class="card-footer container-fluid">
                Kulkas : 3.100.000
            </td>
        </tr>
        <tr>
            <td class="card-footer container-fluid">
                Mesin Cuci : 3.800.000
            </td>
        </tr>
        <tr>
            <th  class="card-header bg-primary container-fluid">
                Harga dapat berubah seetiap saat
            </th>
        </tr>
    </table>
</div>


<div class="card-header">
    <?php require_once "proses.php"?>
    <div class="ml-3">
        <?php
        echo "Nama Customer: " . $nama;
        echo "<br>";
        echo "Produk Pesanan: " . $pesanan;
        echo "<br>";
        echo "Jumlah Beli: : " . $jumlah;
        echo "<br>";
        echo "Harga Total: Rp." . $total;
        ?>
    </div>
</div>


</body>
</html>