<form action="" method="POST">
        <input type="number" name="bulan" placeholder="masukan bulan">
        <input type="number" name="tanggal" placeholder="masukan tanggal">,
        <input type="submit" value="kirim" name="tombol">
</form>
<?php
    // echo "belajar php";
    if (isset($_POST["tombol"])) {
        
    
        $bulan = $_POST["bulan"];
        $tanggal = $_POST["tanggal"];
       

        echo $bulan;
        echo "<br>";
        echo $tanggal;

        $keterangan = "salah";
        if ($bulan > 0 && $bulan < 13 && $tanggal > 0 && $tanggal > 32) {
            $keterangan = "benar";
        }
        echo $keterangan;
        if ($bukan > 0 && $bukan < 13) {
            // $keterangan = "benar";
            if ($tanggal > 0 && $tanggal < 32) {
                // $keterangan = "benar";
                if ($bukan == 1 && $tanggal > 0 && $tanggal < 20) {
                    $keterangan = "capricon";
                }
                if ($bukan == 1 && $tanggal > 20 && $tanggal < 32) {
                    $keterangan = "aquarius";
                }
                if ($bukan == 2 && $tanggal > 0 && $tanggal < 18) {
                    $keterangan = "pisces";
                }
                if ($bukan == 2 && $tanggal > 18 && $tanggal < 29) {
                    $keterangan = "aries";
                }
                if ($bukan == 3 && $tanggal > 0 && $tanggal < 18) {
                    $keterangan = "taurus";
                }
                if ($bukan == 3 && $tanggal > 18 && $tanggal < 32) {
                    $keterangan = "gemini";
                }
                if ($bukan == 4 && $tanggal > 0 && $tanggal < 19) {
                    $keterangan = "cancer";
                }
                if ($bukan == 4 && $tanggal > 20 && $tanggal < 31) {
                    $keterangan = "leo";
                }
                if ($bukan == 5 && $tanggal > 0 && $tanggal < 20) {
                    $keterangan = "virgo";
                }
                if ($bukan == 5 && $tanggal > 20 && $tanggal < 32) {
                    $keterangan = "libra";
                }
                if ($bukan == 6 && $tanggal > 0 && $tanggal < 20) {
                    $keterangan = "scorpio";
                }
                if ($bukan == 6 && $tanggal > 20 && $tanggal < 31) {
                    $keterangan = "sagitarius";
                }
                if ($bukan == 7 && $tanggal > 0 && $tanggal < 20) {
                    $keterangan = "M";
                }
                if ($bukan == 7 && $tanggal > 20 && $tanggal < 32) {
                    $keterangan = "Titik Koma";
                }
                if ($bukan == 8 && $tanggal > 0 && $tanggal < 20) {
                    $keterangan = "Jurassic";
                }
                if ($bukan == 8 && $tanggal > 20 && $tanggal < 32) {
                    $keterangan = "Pokcoy";
                }
                if ($bukan == 9 && $tanggal > 0 && $tanggal < 20) {
                    $keterangan = "Rizzler";
                }
                if ($bukan == 9 && $tanggal > 20 && $tanggal < 31) {
                    $keterangan = "Liefste";
                }
                if ($bukan == 10 && $tanggal > 0 && $tanggal < 20) {
                    $keterangan = "Bokong";
                }
                if ($bukan == 10 && $tanggal > 20 && $tanggal < 32) {
                    $keterangan = "Corntall";
                }
                if ($bukan == 11 && $tanggal > 0 && $tanggal < 20) {
                    $keterangan = "Jakarta";
                }
                if ($bukan == 11 && $tanggal > 20 && $tanggal < 31) {
                    $keterangan = "Arip";
                }
                if ($bukan == 12 && $tanggal > 0 && $tanggal < 20) {
                    $keterangan = "Lumut";
                }
                if ($bukan == 12 && $tanggal > 20 && $tanggal < 32) {
                    $keterangan = "Gedang";
                }
            }
        }
        echo $keterangan;
    }
?>