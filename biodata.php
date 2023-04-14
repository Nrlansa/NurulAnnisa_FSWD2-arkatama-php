<!DOCTYPE html>
<html>

<head>
    <title>Biodata Diri</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f1f1f1;
    }

    h1 {
        text-align: center;
        margin-top: 50px;
        margin-bottom: 20px;
    }

    .container {
        width: 80%;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
    }

    table {
        width: 100%;
        margin-top: 20px;
        border-collapse: collapse;
    }

    table td {
        padding: 10px;
        border-bottom: 1px solid #ddd;
    }

    table tr:last-child td {
        border-bottom: none;
    }

    ul {
        margin-top: 20px;
        margin-bottom: 20px;
    }

    ul li {
        margin-bottom: 10px;
    }

    ul li:last-child {
        margin-bottom: 0;
    }


    img {
        width: 120px;
        height: 145px;
        margin: 30px;
        margin-left: 40px;
    }
    </style>
</head>

<body>
    <div class="container">
        <h1>Biodata Diri</h1>
        <img src="img/nurul.jpg" alt="foto" width="" height="">
        <table>

            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?php echo "Nurul Annisa"; ?></td>
            </tr>
            <tr>
                <td>TTL</td>
                <td>:</td>
                <td><?php echo "12 maret 2002"; ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><?php echo "Perempuan"; ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?php echo "Jalan B. Katamso Gg. nanas no 40, ketapang, kalimantan Barat"; ?></td>
            </tr>
        </table>
        <h2>Riwayat Pendidikan</h2>
        <ul>
            <li><?php echo "SD Negeri 11 Matan Hilir Selatan, Kab. Ketapang, Kalimantan Barat (2008 - 2014)"; ?></li>
            <li><?php echo "MTS Negeri 2 Ketapang, Kalimantan Barat (2014 - 2017)"; ?></li>
            <li><?php echo "SMA Negeri 3 Ketapang, Kalimantan Barat(2017 - 2020)"; ?></li>
            <li><?php echo "Politeknik Negeri Ketapang, Kalimantan Barat (2020 - Sekarang)"; ?></li>
        </ul>
        <h2>Hobi</h2>
        <ul>
            <li><?php echo "Membaca Buku"; ?></li>

        </ul>
    </div>
</body>



</html>