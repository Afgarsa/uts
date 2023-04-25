<?php
// set cookies
if(isset($_POST['submit'])) {
    setcookie("alamat", $_POST['alamat'], time()+3600); // cookies akan kadaluarsa dalam satu jam
    setcookie("ukuran", $_POST['ukuran'], time()+3600);
}

// set sessions
session_start();
if(isset($_POST['submit'])) {
    $_SESSION['nrp'] = $_POST['nrp'];
    $_SESSION['nama'] = $_POST['nama'];
    $_SESSION['alamat'] = $_POST['alamat'];
    $_SESSION['IPK'] = $_POST['IPK'];

// jika alamat di setting di uncheck
    if(isset($_COOKIE['alamat']) && $_COOKIE['alamat'] == 0) {
        $_SESSION['alamat'] = "";
    } else {
        $_SESSION['alamat'] = $_POST['alamat'];
    }
    header("Location: result.php"); // redirect ke halaman display.php
    exit;
// masih bug
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/input.css">
    <title>Input</title>
</head>
<body>
    <div class="nav-container">
        <div class="wrapper">
            <nav>
                <ul class="nav-items">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="setting.php">Setting</a>
                    </li>
                    <li>
                        <a href="input.php">Input</a>
                    </li>
                    <li>
                        <a href="result.php">Display</a>
                    </li>
                </ul>
                    <img class="logo-btn" src="images/Logo.png" alt="" />
            </nav>
        </div>
    </div>

    
    <div class="Judul">
        <h1>Let's Input</h1>
    </div>


    <input-set>
    <div class="list-input">
        <form action="/input.php">
            <div class="pertanyaan1">
                <label for="NRP-Mahasiswa">1. NRP Mahasiswa</label>
                <br>
                <input type="text" id="NRP-Mahasiswa" name="NRP-Mahasiswa" placeholder="Tulis NRP Mahasiswa Disini">
            </div>

            <div class="pertanyaan2">
                <br>
                <label for="Nama-Mahasiswa">2. Nama Mahasiswa</label>
                <br>
                <input type="text" id="Nama-Mahasiswa" name="Nama-Mahasiswa" placeholder="Tulis Nama Mahasiswa Disini">
            </div>

            <div class="pertanyaan3">
                <br>
                <label for="Alamat-Mahasiswa">3. Alamat Mahasiswa</label>
                <br>
                <input type="textArea" id="Alamat-Mahasiswa" name="Alamat-Mahasiswa" placeholder="Tulis Alamat Mahasiswa Disini">
            </div>

            <div class="pertanyaan4">
                <br>
                <label for="IPK-Mahasiswa">4. IPK Mahasiswa</label>
                <br>
                <input type="text" id="IPK-Mahasiswa" name="IPK-Mahasiswa" placeholder="Tulis IPK Mahasiswa Disini">
            </div>

            <br>
                 <input type="reset" name="Reset" value="Reset">
                <input type="submit" name="Simpan" value="Simpan">

        </form>
    </div>
    </input-set>
        </form>
</body>
</html>