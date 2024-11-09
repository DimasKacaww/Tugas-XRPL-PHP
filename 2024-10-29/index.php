<?php
    $sekolah = [
    "TK ALIRSYAD CANDI", // Array satu dlemet
    "SDN Kemiri SDA",
    "SMPN 6 SDA",
    "SMKN 2 BUDURAN" ];
    
    $sekolahs = [
        "TK" => "TK ALIRSYAD CANDI",// Array assoclative
        "SDN" => "SDN KEMIRI SDA",
        "SMPN" => "SMPN 6 SDA",
        "SMKN" => "SMKN 2 BUDURAN",
        "PT" => "Universitas Negeri Surabaya"
    ];

    $skills = [
    "C++" => "Expert",
    "HTML" => "Newbie",
    "CSS" => "Newbie",
    "PHP" => "Intermediate",
    "JavaScrip" => "Intermediate"
];

$identitas =[
    "Nama" => "Rajaki Dimas Baim Julyandra",
    "Alamat" => "Jl.Balai Desa Kemiri",
    "Email" => "nanangbima70@gmail.com",
    "Tiktok" => "-",
    "IG" => "@dmsbim"
];

$hobi =[
    "Coding",
    "Nyanyi",
    "Ngegame",
    "Mancing"
];



    echo $sekolah [0]; //Array satu dlemet
    echo "<br>";
    echo $sekolahs ["TK"]; //Array assoclative
    echo "</br>";
    echo $sekolah[1];
    echo "<br>";
    echo $sekolahs ["SDN"];

    echo "<br>";


// Menampilkan semua Volume Array
for ($i = 0; $i < 4; $i++){
    echo $sekolah[$i];
    echo "<br>";
}

echo "<br>";

foreach ($sekolah as $key){
    echo $key;
    echo "<br>";
}

foreach ($sekolah as $key => $Value) {
    echo $key;
    echo "=";
    echo $value;
    echo "<br>";


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Identitas</h2>
    <table border="1px">
        <thead>
            <tr>
                <th>Identitas</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($identitas as $key => $value) {
            ?>
                <tr>
                    <td><?php echo $key ?></td>
                    <td><?php echo $value ?></td>
                </tr>
                <?php
            }

            ?>
        </tbody>
    </table>
    <hr>
    <h2>RIWAYAT SEKOLAH</h2>
    <table border="1px">
        <thead>
            <tr>
                <th>Jenjang</th>
                <th>Nama Sekolah</th>

            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($sekolah as $key => $value){
                echo "<tr>";
                echo "<td>";
                echo $key;
                echo "</td>";
                echo "<td>";
                echo $value;
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <hr>
    <h2>Skills</h2>
    <table border="1px">
        <thead>
            <tr>
                <th>Skill</th>
                <th>Level</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($skills as $key => $value){
            ?>
                <tr>
                <td><?php echo $key ?></td>
                <td><?php echo $value ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <hr>
    <h2>Hobi</h2>
    <ol>
            <?php
            foreach ($hobi as $key => $value){
            ?>
                    <li><?= $key ?></li>
            <?php
            }
            ?>
    </ol>
</body>
</html>