<?php
    $sekolah = ["TK-AL-IRSYAD", "SDN KEMIRI", "SMPN 6 SIDOARJO",  "SMKN 2 BUDURAN"];
    $sekolahs = ["TK" => "TK-AL-IRSYAD", "SD" => "SDN KEMIRI", "SMP" => "SMPN 6 SIDOARJO", "SMK" => "SMKN 2 BUDURAN", "PT" => "INSTITUT TEKNOLOGI SURABAYA"];
    $skills = ["C++" => "EXPERT", "HTML" => "NEWBIE", "CSS" => "NEWBIE", "PHP" => "INTERMEDIATE", "JAVASCRIPT" => "INTERMEDIATE",];
    
$identitas = ["Nama" => "Rajaki Dimas Baim Julyandra.", "ALamat" => "Jl.Balai Desa Kemiri", "Status" => "PELAJAR", "No. Telp" => "085785209391", "Email" => "nanangbima70@gmail.com"];
    $hobi = ["Menyanyi" , "Musik", "Gaming", "Mancing"];
    echo $sekolah[0];
     echo "<br>";
       echo $sekolahs["TK"];
       echo "<br>";
        echo $sekolah[1];
        echo "<br>";
        echo $sekolahs["SD"];
        echo "<br>";
        echo "<br>";
    for ($i=0; $i < 4 ; $i++) { 
           echo $sekolah[$i];
           echo "<br>";
       }
    echo "<br>";
       foreach ($sekolah as $joni) {
           echo $joni;
           echo "<br>";
       }
     echo "<br>";
       foreach ($sekolahs as $key => $value) {
           echo $key;
           echo " = ";
           echo $value;
           echo "<br>";
       }
    echo "<br>";
       foreach ($skills as $key => $value) {
           echo $key;
           echo " = ";
           echo $value;
         echo "<br>";
       }

    if (isset($_GET['menu'])) {
        $menu = $_GET['menu'];
        echo $menu;
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
    <hr>
    <ul>
        <li><a href="?menu=home">Home</a></li>
        <li><a href="?menu=cv">CV</a></li>
        <li><a href="?menu=project">Project</a></li>
        <li><a href="?menu=contact">Contact</a></li>
    </ul>
    <h2>Identitas</h2>
    <table border="">
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
                    <td><?= $key ?></td>
                    <td><?= $value ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <hr>
    <h2>Riwayat Sekolah</h2>
    <table border="">
        <thead>
            <tr>
                <th>Jenjang</th>
                <th>Nama Sekolah</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach ($sekolahs as $key => $value) {
                    echo "<tr>";
                    echo "<td>".$key."</td>";
                    echo "<td>".$value."</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    <hr>
    <h2>Skills</h2>
    <table border="">
        <thead>
            <tr>
                <th>Skill</th>
                <th>Level</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($skills as $key => $value) {
            ?>
                <tr>
                    <td><?= $key ?></td>
                    <td><?= $value ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <hr>
    <h2>Hobi</h2>
    <ul>
        <?php 
        foreach ($hobi as $key) {
        ?>
            <li><?= $key ?></li>
        <?php
        }
        ?>
    </ul>

    <h6>Web ini di buat Dimas Ganteng</h6>
</body>
</html>