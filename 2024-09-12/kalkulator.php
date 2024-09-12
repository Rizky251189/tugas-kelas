<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator kikyyyyyy</title>
    <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #f4f4f4;
                    margin: 0;
                    padding: 0;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                }
                .calculator {
                    background-color: #fff;
                    padding: 20px;
                    border-radius: 10px;
                    box-shadow: 0 0 15px rgba(0,0,0,0.2);
                }
                input, select {
                    padding: 10px;
                    margin: 10px 0;
                    border-radius: 5px;
                    border: 1px solid #ccc;
                    width: calc(100% - 24px);
                    font-size: 16px;
                }
                button {
                    padding: 10px;
                    width: 100%;
                    background-color: #28a745;
                    color: white;
                    border: none;
                    border-radius: 5px;
                    font-size: 16px;
                    cursor: pointer;
                }
                button:hover {
                    background-color: #218838;
                }
                h3 {
                    margin-top: 20px;
                }
    </style>
</head>
<body>

<div class="calculator">
    <h2>Kalkulator kikyyyyyk</h2>
         <form method="post">
            <input type="number" name="angka1" placeholder="Angka pertama" step="any" required>
                <select name="operator" required>
                    <option value="">Pilih operator</option>
                    <option value="+">Tambah (+)</option>
                    <option value="-">Kurang (-)</option>
                    <option value="">Kali ()</option>
                    <option value="/">Bagi (/)</option>
                </select>
             <input type="number" name="angka2" placeholder="Angka kedua" step="any" required>
        <button type="submit" name="submit">Hitung</button>
    </form>

    <?php
         if (isset($_POST['submit'])) {
            $angka1 = $_POST['angka1'];
            $angka2 = $_POST['angka2'];
            $operator = $_POST['operator'];
            $hasil = null;
            $error = null;

        // Validasi operator
                if (empty($operator)) {
                     $error = "Operator tidak valid!";
                } else {
         // Perhitungan berdasarkan operator
            switch ($operator) {
                case '+':
                    $hasil = $angka1 + $angka2;
                    break;
                case '-':
                    $hasil = $angka1 - $angka2;
                    break;
                case '*':
                    $hasil = $angka1 * $angka2;
                    break;
                case '/':
                    if ($angka2 == 0) {
                        $error = "Kesalahan: Tidak dapat membagi dengan nol!";
                    } else {
                        $hasil = $angka1 / $angka2;
                    }
                    break;
                default:
                    $error = "Operator tidak dikenali!";
            }
        }

        // Menampilkan hasil atau error
                  if ($error) {
                     echo "<h3 style='color:red;'>Error: $error</h3>";
                } else {
            echo "<h3>Hasil: $angka1 $operator $angka2 = $hasil</h3>";
        }
    }
    ?>
</div>

</body>
</html>