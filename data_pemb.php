<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Halaman Pembimbing</title>
</head>
<body>
    <div class="hal-pemb">
        <nav class="nav">
            <img class="img-wk2" src="img/wikrama-removebg-preview.png" alt="">
            <ul class="ul">
                <li class="li-nav"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg>
                <a class="link-nav" href="hal_pemb.php">Beranda</a></li>
                <li class="li-nav"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><path d="M64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H288V352c0-17.7 14.3-32 32-32h80V96c0-8.8-7.2-16-16-16H64zM288 480H64c-35.3 0-64-28.7-64-64V96C0 60.7 28.7 32 64 32H384c35.3 0 64 28.7 64 64V320v5.5c0 17-6.7 33.3-18.7 45.3l-90.5 90.5c-12 12-28.3 18.7-45.3 18.7H288z"/></svg>
                <a class="link-nav" href="data_pemb.php">Data Rayon</a></li>
                <li class="logout"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 192 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l210.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128zM160 96c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 32C43 32 0 75 0 128L0 384c0 53 43 96 96 96l64 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l64 0z"/></svg>
                <a href="index.php">Logout</a></li>
            </ul>
        </nav>
        <h3 class="rayon">Sukasari 1</h3>
        <h3 class="tgl">15-09-2023 <button class="btn-ubah">Ubah</button></h3>
        <table class="tb-datsis">
            <tr>
                <th class="tb-th">No.</th>
                <th class="th">NIS</th>
                <th class="th">Nama Siswa</th>
                <th class="tb-thh">Keterangan</th>
            </tr>
        </table>
        <table class="tb-datsis2">
            <tr>
                <td class="tb-td">1.</td>
                <td class="td">12200000</td>
                <td class="td">Septian</td>
                <td class="tb-tdd">
                    <input type="checkbox">Hadir
                    <input type="checkbox">Tidak Hadir
                </td>
            </tr>
        </table>
    </div>
</body>
</html>