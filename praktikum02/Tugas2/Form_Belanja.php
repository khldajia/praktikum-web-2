<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja Online</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="container-fluid">
        <h3>Belanja Online</h3>
        <form method="POST" action="Form_Belanja.php">
            <br><br>
            <div class="row">
                <div class="col-md-8">
                    <form role="form">
                        <div class="form-group">
                            <form method="POST">
                                <div class="form-group row">
                                    <label for="Customer" class="col-4 col-form-label">Nama Customer</label>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fa fa-address-card"></i>
                                                </div>
                                            </div>
                                            <input id="Customer" name="Customer" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-4">Pilih Produk</label>
                                    <div class="col-8">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv" required>
                                            <label for="produk_0" class="custom-control-label">TV</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas" required>
                                            <label for="produk_1" class="custom-control-label">Kulkas</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin cuci" required>
                                            <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Jumlah" class="col-4 col-form-label">Jumlah</label>
                                    <div class="col-8">
                                        <input id="Jumlah" name="Jumlah" type="text" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="container-fluid">
                            <br><br><br><br><br><br>
                            <div class="row">
                                <div class="col-md-12">
                                    <br /> Nama Customer : Putri Fredilina<br /> Produk Pilihan : Mesin Cuci<br /> Jumlah Beli : 2 <br /> Total Belanja : Rp.7.600.000.-<br ?>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-4">
                    <table class="table">
                        <div id="harga">
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" data-parent="#card-444962" href="#card-element-978065">Daftar Harga</a>
                                </div>
                                <div id="harga" class="harga">
                                    <div class="card-body">
                                        TV : Rp.4.200.000
                                    </div>
                                <div id="harga" class="harga">
                                    <div class="card-body">
                                        Kulkas : Rp.3.100.000
                                    </div>
                                <div id="harga" class="harga">
                                    <div class="card-body">
                                        Mesin Cuci : Rp.3.800.000
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" data-parent="#card-444962" href="#card-element-230517">Harga Dapat Berubah Setiap Saat</a>
                                </div>
                    </table>
                </div>
            </div>
         </div>
            </div>
            </div>   
    <table class="table">
        <tr class="table table-primary">
            <td>Nama</td>
            <td>Produk</td>
            <td>Jumlah</td>
            <td>Total Belanja</td>
        </tr>
        <?php
        if (isset($_POST["submit"])) {
            $nama = $_POST["Customer"];
            $produk = $_POST["produk"];
            $jumlah = $_POST["Jumlah"];
            if ($produk == "tv") {
                $harga = 4200000;
            } 
            elseif ($produk == "kulkas") {
                $harga = 3100000;
            }
             elseif ($produk == "mesin cuci") {
                $harga = 3800000;
            }
            $Total = $harga * $jumlah;
        } ?>
        <tr class="table table-secondary">
            <td><?= $nama ?></td>
            <td><?= $produk ?></td>
            <td><?= $jumlah ?></td>
            <td><?= $Total ?></td>
        </tr>
        <?php ?>
    </table>
    </div>
</body>
</html>