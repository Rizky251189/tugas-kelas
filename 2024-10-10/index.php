<form action="" method="POST">
    nama:
        <input type="text" name="nama" placeholder="masukan nama">
        <input type="text" name="alamat" placeholder="masukan alamat">
        <input type="submit" value="simpan">
</form>

<?php
$host = '127.0.0.1';
$user = 'root';
$password = '';
$database = 'sekolah';

$koneksi = mysqli_connect($host, $user, $password, $database);

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $sql = "INSERT INTO siswa VALUES ('', '$nama', '$alamat');";
    
    echo $sql;
}



$query = "SELECT * FROM siswa";
//echo $query;

$result = mysqli_query($koneksi, $query);
//var_dump($result);

$nama = mysqli_fetch_assoc($result);
//var_dump($nama);

echo '<h1>Data Siswa</h1>';
echo '<table border=2>';
echo '<thead>
            <tr>
                <th>id</th>
                <th>Nama</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>';

while ($row = mysqli_fetch_array($result)){
    echo '<tr>';
    echo '<td>'.$row[0].'</td>';
    echo '<td>'.$row[1].'</td>';
    echo '<td>'.$row[2].'</td>';
    echo '</tr>';
    //echo $row[1];
    //echo '&nbsp&nbsp';
    //echo $row[2];
    //echo "<br>";
}
    echo '</body>';
    echo '</table>';

    echo '<h1>Data Siswa</h1>';
    $query = "SELECT * FROM kelas";
//echo $query;

$result = mysqli_query($koneksi, $query);
//var_dump($result);

echo '<table border=2>';
echo '<thead>
            <tr>
                <th>id</th>
                <th>kelas</th>
                <th>keterangan</th>
            </tr>
        </thead>
        <tbody>';

while ($row = mysqli_fetch_array($result)){
    echo '<tr>';
    echo '<td>'.$row[0].'</td>';
    echo '<td>'.$row[1].'</td>';
    echo '<td>'.$row[2].'</td>';
    echo '</tr>';
    //echo $row[1];
    //echo '&nbsp&nbsp';
    //echo $row[2];
    //echo "<br>";
}
    echo '</body>';
    echo '</table>';
    

    
?>