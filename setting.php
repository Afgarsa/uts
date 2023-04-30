<?php
// Pasang lifetime cookie 1 jam
$cookie_lifetime = 3600;

// Cek form input
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil value form
    $address_required = isset($_POST['address_required']) ? $_POST['address_required'] : 'off';
    $default_gpk = isset($_POST['default_gpk']) ? $_POST['default_gpk'] : '';

    // Set cookies
    setcookie('address_required', $address_required, time() + $cookie_lifetime);
    setcookie('default_gpk', $default_gpk, time() + $cookie_lifetime);
    setcookie('has_input_setting', 'yes', time() + $cookie_lifetime);
}

// Ambil cookies form input
$address_required = isset($_COOKIE['address_required']) ? $_COOKIE['address_required'] : 'off';
$default_gpk = isset($_COOKIE['default_gpk']) ? $_COOKIE['default_gpk'] : '';

// Cek submit form display
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil value form
    $print_address = isset($_POST['print_address']) ? $_POST['print_address'] : 'off';
    $print_gpk = isset($_POST['print_gpk']) ? $_POST['print_gpk'] : 'off';
    $font_size = isset($_POST['font_size']) ? $_POST['font_size'] : '';
    $wrap_format = isset($_POST['wrap_format']) ? $_POST['wrap_format'] : 'normal';

    // Set cookies
    setcookie('print_address', $print_address, time() + $cookie_lifetime);
    setcookie('print_gpk', $print_gpk, time() + $cookie_lifetime);
    setcookie('font_size', $font_size, time() + $cookie_lifetime);
    setcookie('wrap_format', $wrap_format, time() + $cookie_lifetime);
    setcookie('has_display_setting', 'yes', time() + $cookie_lifetime);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Refresh the page
    header('location:#popup');
}

// Ambil cookies form display
$print_address = isset($_COOKIE['print_address']) ? $_COOKIE['print_address'] : 'off';
$print_gpk = isset($_COOKIE['print_gpk']) ? $_COOKIE['print_gpk'] : 'off';
$font_size = isset($_COOKIE['font_size']) ? $_COOKIE['font_size'] : '';
$wrap_format = isset($_COOKIE['wrap_format']) ? $_COOKIE['wrap_format'] : 'normal';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/setting.css">
    <title>Setting</title>
</head>
<body>
    <div id="popup" class="overlay">
        <div class="popup">
            <h2>Berhasil Simpan !</h2>
            <div class="content">
                Setting kamu sudah tersimpan
            </div>
            <div class="footer">
                <a href="#">Kembali</a>
            </div>
        </div>
    </div>
    <div id="popupNoset" class="overlay">
        <div class="popup">
            <h2>Kamu belum setting!</h2>
            <div class="content">
                Harap setting terlebih dahulu sebelum memasukkan data mahasiswa!
            </div>
            <div class="footer">
                <a href="#">Tutup</a>
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
                <div class="logo">
                    <img class="logo-btn" src="images/Logo.png" alt="" />
                </div>
            </nav>
        </div>
    </div>

    <div class="content">
        <form action="#popup" method="post">
            <div class="Judul">
                <h1>Setting Simulation</h1>
            </div>
            <div class="deskripsi">
                <p>Aturlah simulasi data yang diinginkan supaya bisa mendapatkan hasil yang maksimal, pengaturan ini kami akan simpan melalui cookies sehingga dapat meningkatkan pengalalaman anda terkait simulasi ini !</p>
            </div>
            <div class="setting-input">
                <br>
                <p>Setting Input</p>
            </div>
            <div class="list-input">
                <div class="pertanyaan1">
                    <label>1. Alamat Mahasiswa Wajib Diisi</label>
                    <br>
                    <label>
                        <input type="radio" name="address_required" value="on" <?php if ($address_required === 'on') { echo 'checked'; } ?>>
                        Iya
                    </label>
                    <label>
                        <input type="radio" name="address_required" value="off" <?php if ($address_required === 'off') { echo 'checked'; } ?>>
                        Tidak
                    </label>
                </div>

                <div class="pertanyaan2">
                    <br>
                    <label for="default_gpk">2. Default Nilai IPK Mahasiswa</label>
                    <br>
                    <input type="number" name="default_gpk" min="0" max="4" step="0.01" value="<?php echo $default_gpk; ?>" placeholder="3,00">
                </div>
            </div>
            <div class="setting-output">
                <br>
                <p>Setting Output</p>
            </div>
            <div class="list-output">
                <label>1. Alamat Mahasiswa Ditampilkan</label><br>
                <label>
                    <input type="radio" name="print_address" value="on" <?php if ($print_address === 'on') { echo 'checked'; } ?>/>
                    Iya
                </label>
                <label>
                    <input type="radio" name="print_address" value="off" <?php if ($print_address === 'off') { echo 'checked'; } ?>/>
                    Tidak
                </label>
                <br>
                <div class="result2">
                    <label>2. IPK Mahasiswa Ditampilkan</label><br>
                    <label>
                        <input type="radio" name="print_gpk" value="on" <?php if ($print_gpk === 'on') { echo 'checked'; } ?>>
                        Iya
                    </label>
                    <label>
                        <input type="radio" name="print_gpk" value="off" <?php if ($print_gpk === 'off') { echo 'checked'; } ?>>
                        Tidak
                    </label>
                    <br>
                </div>
                <div class="result3">
                    <label for="ukuran-font">3. Ukuran Font:</label>
                    <br>
                    <input type="number" name="font_size" min="0" value="<?php echo $font_size; ?>" placeholder="16"> <span>px</span>
                    <br>
                </div>
                <div class="result4">
                    <label for="wrap_format">4. Jenis Font:</label>
                    <br>
                    <select id="wrap_format" name="wrap_format">
                        <option value="normal" <?php if ($wrap_format === 'normal') { echo 'selected'; } ?>>Normal</option>
                        <option value="bold" <?php if ($wrap_format === 'bold') { echo 'selected'; } ?>>Bold</option>
                        <option value="italic" <?php if ($wrap_format === 'italic') { echo 'selected'; } ?>>Italic</option>
                        <option value="underline" <?php if ($wrap_format === 'underline') { echo 'selected'; } ?>>Underline</option>
                    </select>
                </div>
                <br><br>
                <button type="reset">Reset</button>
                <button type="submit">Save</button>
            </form>
        </div>
    </div>
</body>
</html>