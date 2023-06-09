<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir</title>
</head>
<body>
    
<fieldset>
        <img src="https://muhammadiyah2sch.000webhostapp.com/sipdn-web/assets/img/logo_dikdasmen.svg" height="100" style="margin: 5px;" alt="">
            <h1>NOTA PEMBAYARAN</h1>
            <table>
                <?php
                $nama = $_POST['nama'];
                $harga = $_POST['harga'];
                $jumlah = $_POST['jumlah'];
                ?>
                <tr>
                    <td>Nama Barang :</td>
                    <td><?php echo $nama?></td>
                </tr>
                <tr>
                    <td>Harga Barang :</td>
                    <td><?php echo "Rp." . number_format($harga, 2, ",", "."); ?></td>
                </tr>
                <tr>
                    <td>Jumlah Barang :</td>
                    <td><?php echo $jumlah?></td>
                </tr>
                <tr>
                    <td>Total Barang :</td>
                    <td><?php $total = $harga*$jumlah;
                    echo "Rp." . number_format($total, 2, ",", ".");
                    ?></td>
                </tr>
                <tr>
                    <td>Discount 10% :</td>
                    <td><?php 
                    $discount=(($total*10)/100);
                    if  ($total >= 1000000)
                        {
                            $total_bayar=($total-$discount);
                            echo "Rp." . number_format($discount, 2, ",", ".");
                        }else{
                            echo "Tidak Dapat diskon";
                        }
                        ?></td>
                </tr>
                <tr>
                    <td>Total Bayar :</td>
                    <td><?php 
                    if ($total >= 1000000){
                        $total_bayar=($total-$discount);
                        echo "Rp." . number_format($total_bayar, 2, ",", ".");
                    }else{
                        echo "Rp." . number_format($total, 2, ",", ".");
                    }
                    ?>
                    </td>
                </tr>
            </table>
            <a href="formulir.php">Kembali</a>
            <p>Barang Yang Sudah Dibeli Tidak Bisa Dikembalikan/Ditukarkan <br>
                Jl. Masjid Al-Falah, Ciamis Jawa Barat</p>
</fieldset>
</body>
</html>
