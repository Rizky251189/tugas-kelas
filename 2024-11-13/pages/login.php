<div class="login">
    <h1>login</h1>
    <div class="login">
    <h1>register</h1>
    <form action="" method="post">
        <input type="email" name="email" required placeholder="masukan email">
        <input type="password" name="password" required placeholder="masukan password">
        <input type="submit" name="login" value="login">
    </form>
   <?php
    if (isset($_POST['login'])){
        $email = $_POST['email'];
        $sql = "SELECT * FROM customer WHERE email = '$email' AND password = '$password'";
        echo $sql;
        $hasil = mysqli_query($koneksi ,$sql);
        $hasil = mysqli_num_rows(result: $hasil);
        echo $baris;
        
    }
    ?>
</div>
</div>