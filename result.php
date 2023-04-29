<?php
session_start();

// Ambil cookies form display
$print_address = isset($_COOKIE['print_address']) ? $_COOKIE['print_address'] : 'off';
$print_gpk = isset($_COOKIE['print_gpk']) ? $_COOKIE['print_gpk'] : 'off';
$font_size = isset($_COOKIE['font_size']) ? $_COOKIE['font_size'] : '16';
$wrap_format = isset($_COOKIE['wrap_format']) ? $_COOKIE['wrap_format'] : 'normal';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/result.css">
    <title>Result</title>
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

    <div class="header-container">
        <p>DATA RESULT</p>
    </div>

    <div class="hasil-input">
        <!-- Student data display -->
        <?php if (isset($_SESSION['student_datas'])): ?>
            <?php foreach ($_SESSION['student_datas'] as $student_data): ?>
                <?php
                   $wrap_style = "";
                   switch ($wrap_format) {
                       case "normal":
                            $wrap_style = "";
                       break;
                       case "bold":
                           $wrap_style = "font-weight: 700";
                       break;
                       case "italic":
                           $wrap_style = "font-style: italic;";
                       break;
                       case "underline":
                           $wrap_style = "text-decoration: underline";
                       break;
                   }
                ?>
                <div class="box" style="font-size: <?php echo $font_size ?>px; <?php echo $wrap_style ?>">
                    <div class="identitas">
                        <strong>Nama:</strong><?php echo $student_data['name']; ?>&nbsp;<span>(<?php echo $student_data['nrp']; ?>)</span>
                    </div>
                    <?php if ($print_address === 'on'):  ?>
                        <div class="alamat">
                            <strong>Alamat:</strong><br>
                            <?php echo $student_data['address'] ?>
                        </div>
                    <?php endif ?>
                    <?php if ($print_gpk === 'on'): ?>
                    <div class="ipk">
                        <strong>IPK:</strong> <?php echo $student_data['gpk'] ?>
                    </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
   </div>
</body>
</html>