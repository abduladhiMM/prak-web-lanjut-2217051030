<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <a href="https://lordicon.com/"></a>
    <style>
        * {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, #18053D, #631482); /* Ubah warna gradasi */
        }

        .container {
            text-align: center;
            padding: 40px; /* Perbesar padding */
            border-radius: 15px;
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            width: 400px; /* Lebar container lebih besar */
        }

        .profile-pic {
            width: 150px;
            height: 150px;
            background: rgba(255, 255, 255, 0.2); /* Warna putih transparan */
            border-radius: 15px; /* Sudut melengkung */
            margin: 0 auto;
            display: flex; /* Tambahkan ini */
            justify-content: center; /* Tambahkan ini */
            align-items: center; /* Tambahkan ini */
            backdrop-filter: blur(10px); /* Tambahkan efek blur */
            -webkit-backdrop-filter: blur(10px); /* Tambahkan untuk dukungan Safari */
            border: 1px solid rgba(255, 255, 255, 0.3); /* Border transparan */
        }

        .info {
            margin-top: 20px;
        }

        .info .name {
            padding: 10px 0; /* Sedikit tambah padding */
            margin: 0; /* Hilangkan margin antar elemen */
            font-weight: bold; /* Nama tebal */
            font-size: 24px; /* Ukuran font lebih besar */
            color: white; /* Ubah warna teks menjadi putih */
        }

        .info .other-info {
            padding: 5px 0; /* Sedikit padding */
            margin: 0; /* Hilangkan margin antar elemen */
            font-size: 18px; /* Ukuran font standar */
            font-weight: normal; /* Font standar */
            background: none; /* Hilangkan background */
            box-shadow: none; /* Hilangkan bayangan */
            color: white; /* Ubah warna teks menjadi putih */
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="profile-pic">
            <script src="https://cdn.lordicon.com/lordicon.js"></script>
            <lord-icon
                src="https://cdn.lordicon.com/gkgkfbzm.json"
                trigger="loop"
                delay="1000"
                stroke="bold"
                colors="primary:#121331,secondary:#ffffff"
                style="width:500px;height:500px">
            </lord-icon>
        </div>
        <div class="info">
            <div class="name">{{$nama}}</div>
            <div class="other-info">{{$npm}}</div>
            <div class="other-info">{{$kelas}}</div>
        </div>
    </div>

</body>
</html>
