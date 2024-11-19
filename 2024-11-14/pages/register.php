<div class="register">
    <h1>register</h1>
    <form action="" method="post">
        <input type="email" name="email" required placeholder="masukan email">
        <input type="password" name="password" required placeholder="masukan password">
        <input type="submit" name="register" value="register">
    </form>
</div>
<?php
    if (isset($_POST['register'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        echo $email ,$password;
        $sql = "INSERT INTO (email ,password) VALUES ('$email' ,'$password')";
        echo $sql;
        mysqli_query($koneksi ,$sql);
        header('location:index.php?menu=login');
    }
?>