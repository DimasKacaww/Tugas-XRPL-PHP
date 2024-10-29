<?php 

$ident =[
    "Rajaki Dimas B.J",
    "X-RPL",
    "Jalan Balai desa Kemiri",
    "nanangbima70@gmail.com",
    "085785209391"
];

$hobi =[
    "Ngoding",
    "Menyanyi",
    "Mendengarkan musik",
    "Ngegame"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curiculum Vitae</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/509e14b917.js" crossorigin="anonymous"></script>
</style>
</head>
<body>
    <div class="container">
        <section class="profile">
            <div class="profile-img">
               <img src="profile.jpg" alt="profile-picture">
            </div>
        </section>
        <section class="body">
            <div class="n0">
                <h1> <strong>Identitas</strong></h1>
                <div class="ident">
                <p><i class="fas fa-user"></i>:<?= $ident[0] ?></p>
                <p><i class="fas fa-university">:</i><?= $ident[1]?></p>
                <p><i class="fas fa-home"></i>:<?= $ident[2]?></p>
                <p><i class="fas fa-envelope"></i>:<?= $ident[3]?></p>
                <p><i class="fas fa-phone"></i>:<?= $ident[4]?></p>
                </div>
            </div>
            <div class="n1">
                <h1> <strong>Hobi</strong></h1>
                <ul class="hobi">
                    <li><?= $hobi[0] ?></li>
                    <li><?= $hobi[1]?></li>
                    <li><?= $hobi[2]?></li>
                    <li><?= $hobi[3]?></li>
                </ul>
            </div>
            <div class="n2">
                <h1> <strong>Riwayat Pendidikan</strong></h1>
                <ol class="edu">
                    <li>
                        <h2>SDN Kemiri</h2>
                        <p>2014 - 2020</p>
                    </li>
                    <li>
                        <h2>SMP NEGERI 6 SIDOARJO</h2>
                        <p>2021 - 2024</p>
                    </li>
                </ol>
            </div>
            <div class="n3">
                <h1> <strong>Keahlian</strong></h1>
                <div class="html">
                    <h2>HTML</h2>
                    <div class="html1">
                        <h1 class="n31">90%</h1>
                    </div>
                </div>
                <div class="css">
                    <h2>CSS</h2>
                    <div class="css1">
                        <h1 class="n32">85%</h1>
                    </div>
                </div>
                <div class="PHP">
                    <h2>PHP</h2>
                    <div class="php1">
                        <h1 class="n33">70%</h1>
                    </div>
                </div>
            </div>
            <div class="n4">
                <h1> <strong>Medsos :</strong></h1>
                <div class="medsos">
                <a href="https://www.instagram.com/dmsbim/profilecard/?igsh=MWRlNm4xbHp2bzZ3eg%3D%3D"><i class="fab fa-instagram"></i> @dmsbim</a>
                <a href="+62 857-8520-9391"><i class="fab fa-whatsapp">
                </i>+62 857-8520-9391</a>
                <a href="https://github.com/DimasKacaww"><i class="fab fa-github"></i>DimasKensho.</a>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
