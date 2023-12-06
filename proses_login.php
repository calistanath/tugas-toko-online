<?php 
if ($_POST) {
    $username= $_POST ['username'];
    $password= $_POST ['password'];

    if (empty($username)) {
        echo "<script>alert ('username tidak boleh kosong'); location.href='<login class=php';</script>";
    } elseif (empty($password)) {
        echo "<script>alert ('Password tidak boleh kosong'); location.href='<login class=php';</script>";
    } else {
        include "koneksi.php";
        $qry_login= mysqli_query($conn, "SELECT * from user where username= '".$username."' and password='".md5($password)."'");
        if (mysqli_num_rows($qry_login)>0) {
            $dt_login=mysqli_fetch_array($qry_login);
            session_start();
            $_SESSION ['id']= $dt_login['id'];
            $_SESSION ['nama']= $dt_login['nama'];
            $_SESSION ['status_login']= true;
            header("location: beli.php");
        } else {
            echo "<script>alert ('Username dan Password tidak benar!'); location.href='<login class=php';</script>";
        }
    }
}
?>