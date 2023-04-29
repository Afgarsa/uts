<?php
session_start();

// Cek apakah form telah disimpan
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil value form
    $nrp = $_POST['nrp'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $gpk = $_POST['gpk'];

    // Buat array student baru
    $student_data = array(
        'nrp' => $nrp,
        'name' => $name,
        'address' => $address,
        'gpk' => $gpk
    );

    // Cek apakah session student_data sudah ada
    if (!isset($_SESSION['student_datas'])) {
        // Jika tidak, buat session baru
        $_SESSION['student_datas'] = array($student_data);
    } else {
        // Jika iya, append data student yang baru kedalam session
        array_push($_SESSION['student_datas'], $student_data);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Refresh the page
    header('location:#popup');
}
?>

<?php
// Ambil cookies form input
$address_required = isset($_COOKIE['address_required']) ? $_COOKIE['address_required'] : 'off';
$default_gpk = isset($_COOKIE['default_gpk']) ? $_COOKIE['default_gpk'] : '';
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
    <div id="popup" class="overlay">
        <div class="popup">
            <h2>Berhasil Simpan Mahasiswa!</h2>
            <div class="content">
                Data mahasiswa telah tersimpan! Data dapat dilihat di halaman display.
            </div>
            <div class="footer">
                <a href="#">Kembali</a>
            </div>
        </div>
    </div>
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

    <div class="content">
        <div class="Judul">
            <h1>Let's Input</h1>
        </div>
        <input-set>
            <div class="list-input">
                <form action="#popup" method="post">
                    <div class="pertanyaan1">
                        <label for="nrp" class="required">1. NRP Mahasiswa</label>
                        <br>
                        <input type="text" id="nrp" name="nrp" placeholder="Tulis NRP Mahasiswa Disini" required>
                    </div>

                    <div class="pertanyaan2">
                        <br>
                        <label for="name" class="required">2. Nama Mahasiswa</label>
                        <br>
                        <input type="text" id="name" name="name" placeholder="Tulis Nama Mahasiswa Disini" required>
                    </div>

                    <div class="pertanyaan3">
                        <br>
                        <label for="address" class="<?php if ($address_required === 'on') { echo 'required'; } ?>">3. Alamat Mahasiswa</label>
                        <br>
                        <textarea
                                type="text"
                                id="address"
                                name="address"
                                placeholder="Tulis Alamat Mahasiswa Disini"
                            <?php if ($address_required === 'on') { echo 'required'; } ?>
                        ></textarea>
                    </div>

                    <div class="pertanyaan4">
                        <br>
                        <label for="gpk" class="required">4. IPK Mahasiswa</label>
                        <br>
                        <input
                                type="number"
                                min="0" max="4"
                                step="0.01"
                                id="gpk"
                                name="gpk"
                                placeholder="IPK Mahasiswa (0-4)"
                                value="<?php echo $default_gpk; ?>"
                                required
                        >
                    </div>

                    <br>
                    <button type="reset">Reset</button>
                    <button type="submit">Simpan</button>

                </form>
            </div>
        </input-set>
    </div>
</body>
</html>