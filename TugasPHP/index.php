<?php 

$nama = "Aqila"; 
$umur = 17; 
$sekolah = "SMKN 2 Bandung";
$hobi = "Menulis"; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Aqila</title>
    <!-- Judul halaman -->
    <style>
         /* Reset margin dan padding agar konsisten di seluruh perangkat */
         * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Style untuk body */
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            background: #F7B5CA; /* Warna latar */
            display: flex; /* Menggunakan Flexbox untuk memusatkan konten */
            justify-content: center; /* Pusatkan secara horizontal */
            align-items: center; /* Pusatkan secara vertikal */
            height: 100vh; /* Tinggi penuh dari viewport */
            color: #333; /* Warna teks */
        }

        /* Style untuk kotak profil */
        .profile-box {
            background-color: #FFEFEF; /* Warna latar belakang kotak profil */
            padding: 40px; /* Padding di dalam kotak */
            border-radius: 12px; /* Sudut kotak yang membulat */
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1); /* Bayangan lembut */
            max-width: 400px; /* Maksimal lebar kotak */
            width: 100%; /* Membuat kotak responsif */
            transition: transform 0.3s ease-in-out; /* Transisi halus saat efek hover */
        }

        /* Efek hover pada kotak profil */
        .profile-box:hover {
            transform: scale(1.05); /* Perbesar sedikit saat di-hover */
        }

        /* Style untuk judul */
        .profile-box h1 {
            font-size: 28px; /* Ukuran font yang lebih besar */
            margin-bottom: 20px; /* Jarak bawah untuk judul */
            color: #021526; /* Warna teks judul */
            text-align: center; /* Membuat tampilan text di tengah */
        }

        /* Style untuk paragraf di dalam kotak */
        .profile-box p {
            font-size: 18px; /* Ukuran font untuk teks */
            line-height: 1.6; /* Spasi antar baris */
            margin-bottom: 15px; /* Jarak bawah antar paragraf */
        }

        /* Style untuk teks yang ditebalkan */
        .profile-box p strong {
            color: #021526; /* Warna yang sedikit lebih gelap untuk teks yang ditebalkan */
        }

        /* Responsivitas untuk perangkat mobile */
        @media (max-width: 768px) {
            .profile-box {
                padding: 30px; /* Kurangi padding di perangkat lebih kecil */
            }

            .profile-box h1 {
                font-size: 24px; /* Sesuaikan ukuran font judul */
            }

            .profile-box p {
                font-size: 16px; /* Sesuaikan ukuran font teks */
            }
        }
    </style>
</head>

<body>

<div class="profile-box">
    <!-- Menampilkan profil dengan menggunakan variabel PHP -->
    <h1>Profil Singkat</h1>
    <p><strong>Nama:</strong> <?php echo $nama; ?></p>
    <p><strong>Umur:</strong> <?php echo $umur; ?> tahun</p>
    <p><strong>Sekolah:</strong> <?php echo $sekolah; ?></p>
    <p><strong>Hobi:</strong> <?php echo $hobi; ?></p>
</div>

</body>

</html>