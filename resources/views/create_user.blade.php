<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3 | Form Login</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #18053D, #631482);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        .form-container {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 16px;
            padding: 2rem;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.25);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            max-width: 400px;
            width: 100%;
            text-align: center; /* Center text */
        }

        .form-container h1 {
            color: white; /* Warna teks putih */
            margin-bottom: 1.5rem; /* Menambahkan jarak bawah */
        }

        .form-container label {
            font-weight: bold;
            display: block;
            margin-bottom: 0.5rem;
            color: white;
            text-align: left; /* Menyelaraskan label ke kiri */
        }

        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 1rem;
        }

        .form-container input {
            padding: 0.75rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
            max-width: 100%;
        }

        .form-container button {
            padding: 0.75rem;
            background-color: #18053D;
            color: white;
            font-size: 1rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            max-width: 100%;
            font-weight: bold;
        }

        .form-container button:hover {
            background-color: #43075B;
        }

        .form-container button:focus {
            outline: none;
            box-shadow: 0 0 0 2px #43075B;
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            margin-bottom: 1.5rem;
            text-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        .header h1 {
            margin-right: auto; /* Tambahkan ini untuk menggeser ke kiri */
        }

    </style>
</head>
<body>
    <div class="form-container">
        <div class="header">
            <h1>Welcome!!</h1>
            <script src="https://cdn.lordicon.com/lordicon.js"></script>
            <lord-icon
                src="https://cdn.lordicon.com/gqjpawbc.json"
                trigger="loop"
                stroke="bold"
                colors="primary:#121331,secondary:#ffffff"
                style="width:80px;height:80px; margin-left: 1rem;">
            </lord-icon>
        </div>

        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama: </label>
                <input type="text" name="nama" id="nama" required>
            </div>
            <div class="form-group">
                <label for="npm">NPM: </label>
                <input type="text" name="npm" id="npm" required>
            </div>
            <div class="form-group">
                <label for="kelas">Kelas: </label>
                <input type="text" name="kelas" id="kelas" required>
            </div>
            <div class="form-group">
                <button type="submit">
                    Submit
                </button>
            </div>
        </form>
    </div>
</body>
</html>
