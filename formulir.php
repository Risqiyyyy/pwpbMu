<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir</title>
</head>

<body>
    <form action="kasir.php" method="POST">
        <fieldset>
        <img src="https://muhammadiyah2sch.000webhostapp.com/sipdn-web/assets/img/logo_dikdasmen.svg" height="100" style="margin: 5px;" alt="">
            <h1>Formulir Kasir</h1>
            <table>
                <tr>
                    <td>Nama Barang :</td>
                    <td><input type="text" name="nama" required/></td>
                </tr>
                <tr>
                    <td>Harga Barang :</td>
                    <td><input type="text" name="harga" required/></td>
                </tr>
                <tr>
                    <td>Jumlah Barang :</td>
                    <td><input type="text" name="jumlah" required/></td>
                </tr>
                <tr>
                    <td>
                        <button>Bayar</button>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>

</html>