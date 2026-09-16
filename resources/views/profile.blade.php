<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Profile</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .profile-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            max-width: 360px;
            padding: 20px;
        }

        .avatar-circle {
            width: 160px;
            height: 160px;
            border-radius: 50%;
            background-color: #e0e0e0;
            border: 2px solid #777777;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 35px;
            overflow: hidden;
        }

        .avatar-svg {
            width: 100%;
            height: 100%;
        }

        .info-box {
            width: 100%;
            background-color: #d9d9d9;
            color: #000000;
            text-align: center;
            padding: 14px 20px;
            margin-bottom: 18px;
            font-size: 20px;
            font-weight: 500;
            border-radius: 2px;
        }

        .info-box:last-child {
            margin-bottom: 0;
        }
    </style>
</head>
<body>

    <div class="profile-card">
        <!-- Circle Avatar -->
        <div class="avatar-circle">
            <svg class="avatar-svg" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <!-- Outer background circle -->
                <circle cx="50" cy="50" r="50" fill="#e0e0e0"/>
                <!-- Head -->
                <circle cx="50" cy="38" r="18" fill="#ffffff" stroke="#777777" stroke-width="2"/>
                <!-- Body / Shoulders -->
                <path d="M 18 85 C 18 60, 32 56, 50 56 C 68 56, 82 60, 82 85 Z" fill="#ffffff" stroke="#777777" stroke-width="2"/>
            </svg>
        </div>

        <!-- Info Boxes: Nama, Kelas, NPM -->
        <div class="info-box">
            {{ !empty($nama) ? $nama : ($data['nama'] ?? 'Ikbal Feri') }}
        </div>

        <div class="info-box">
            {{ !empty($kelas) ? $kelas : ($data['kelas'] ?? 'B') }}
        </div>

        <div class="info-box">
            {{ !empty($npm) ? $npm : ($data['npm'] ?? '2417051031') }}
        </div>
    </div>

</body>
</html>