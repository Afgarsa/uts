
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
    <input-set>
    <div class="list-input">
        <form action="/input.php">
            <div class="pertanyaan1">
                <label for="required_alamat">1. Alamat Mahasiswa Wajib Diisi</label>
                <br>
                <input type="radio" id="Iya_required" name="required_alamat">
                <label for="required_alamat">Iya</label>
                <input type="radio" id="tidak_required" name="required_alamat">
                <label for="required_alamat">Tidak</label>
            </div>

            <div class="pertanyaan2">
                <br>
                <label for="default-IPK">2. Default Nilai IPK Mahasiswa</label>
                <br>
                <input type="text" id="range-IPK" name="default-IPK" placeholder="3.00">
            </div>
        </form>
    </div>
    </input-set>
    <div class="setting-output">
        <br>
        <p>Setting Output</p>
    </div>
    <div class="list-output">
        <form action="result.php">
            <label for="showing-alamat">1. Alamat Mahasiswa Ditampilkan</label><br>
            <input type="radio" id="Iya_show" name="showing-alamat">
            <label for="showing-alamat">Iya</label>
            <input type="radio" id="Tidak_show" name="showing-alamat">
            <label for="showing-alamat">Tidak</label>

            <br>
            <div class="result2">
                <label for="showing-ipk">2. IPK Mahasiswa Ditampilkan</label><br>
                <input type="radio" id="Iya_IPK" name="showing-ipk">
                <label for="showing-ipk">Iya</label>
                <input type="radio" id="Tidak_IPK" name="showing-ipk">
                <label for="showing-ipk">Tidak</label>
    
                <br>
            </div>


            <div class="result3">
                <label for="ukuran-font">3. Ukuran Font:</label>
                <br>
                <input type="text" id="range-IPK" name="default-IPK" placeholder="12"> <span>px</span>
    
                <br>
    
            </div>
           
            <div class="result4">
                <label for="jenis-font">4. Jenis Font:</label>
                <br>
                <select id="jenis-font" name="jenis-font">
                <option value="normal">Normal</option>
                <option value="bold">Bold</option>
                <option value="italic">Italic</option>
                <option value="underline">Underline</option>
            </div>
           
            </select>
            <br><br>
                 <input type="reset" name="Reset" value="Reset">

                <input type="submit" name="Simpan" value="Simpan">
        </form>
    </div>
</body>
</html>