<?php
$data = "saya belajar PHP di SMKN 2 BUDURAN";
echo $data;

$isi = "hari ini saya belajar php";
$materi = "Materi Belajar PHP ";
$sekolah = ["TK Acumalaka", "SDN KEMIRI", "SMPN 6 SDA",  "SMKN 2 BUDURAN"];
$identitas = ["Rajaki Dimas Baim J.", "Baldes Kemiri"];
$judul = "curiculum vitae";
$hobies = [];
$skill = ["HTML Expert","CSS Expert","PHP Newbie"];
$list1 = "Variabel";
$list2 = "Array";
$list3 = "Pengujian";
$list4 = "Pengulangan";
$list5 = "Function";
$list6 = "Class";
$list7 = "Object";
$list8 = "Framework";
$list9 = "PHP dan MySQL";

    $list = 
        ["Variabel", 

        "Array",

        "Pengujian", 

        "Pengulangan", 

        "Function", 

        "Class", 

        "Object", 

        "Framework", 

        "PHP dan MySQL"];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        .kamar{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1><?= $judul; ?></h1>
    </div>
    <div class="identitas">
        <table>
            <thead>
                <tr>
                    <th>Identitas</th>
                </tr>
                <tr>
                    <th>Nama</th>
                    <th><?= $identitas[0]; ?></th>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <th><?= $identitas[1]; ?></th>
                </tr>
            </thead>
        </table>
    </div>
    <div class="kamar">
        <h1><?= $data; ?></h1>
    <h1>Belajar PHP</h1>

    <p><?= $isi; ?></p>

    <h2><?= $materi; ?></h2>

    <ol>
        <li><?$list[0]?></li>
        <p>Variabel adalah wadah artau tempat menyimpan data.</p>
        <p>data bisa berupa text atau string bisa juga berupa angka atau numeric, data juga bisa gabungan antara text, angka, dan simbol</p>
        <li><?=$list[1];?></li>
        <li><?=$list[2];?></li>
        <li><?=$list[3];?></li>
        <li><?=$list[4];?></li>
        <li><?=$list[5];?></li>
        <li><?=$list[6];?></li>
        <li><?=$list[7];?></li>
        <li><?=$list[8];?></li>
    </ol>
    </div>
</body>
</html>