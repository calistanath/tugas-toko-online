<!DOCTYPE html>
<html lang="en">
<head>
    <title>Coffee Mood</title>
    <?php 
    include "koneksi.php";
    ?>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="home" id="home">
        <div class="navbar">
            <h2> COFFEE <span class="top"> MOOD </span> </h2>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#shop">Shop</a></li>
                <li><a href="#footer">Contact Us</a></li>
                <li><a href="keranjang.php">Cart</a></li>
            </ul>
        </div>
        <div class="home-text" align="center">
            <h1> Start your day <br> with coffee </h1>
            <p> Coffee Mood got anything you needs. Start your day with us! </p>
            <a href="#shop" class="btn"> Shop Now </a>
        </div>
    </div>

    <div class="about">
        <div class="about-img">
            <img src="assets/about.png"></a>
        </div>
        <div class="about-text" id="about">
            <h3> OUR HISTORY </h3>
            <p> Di Coffee Mood, kami adalah pencinta kopi sejati, dan kami percaya bahwa kopi adalah <br> 
            lebih dari sekadar minuman. Ini adalah medium yang memungkinkan kita merayakan <br> 
            momen-momen indah dalam kehidupan, dan kami ingin berbagi kecintaan kami pada kopi <br> 
            dengan Anda. Kami bangga menyajikan kopi berkualitas tertinggi dari biji kopi terpilih dari <br> 
            seluruh dunia. Setiap biji kopi kami dipanggang dengan cinta dan keahlian oleh para ahli <br> 
            panggang kami untuk menciptakan rasa yang kaya dan nikmat dalam setiap cangkir. <br> 
            Kami juga berkomitmen untuk berkelanjutan dan mendukung petani kopi yang berkomitmen <br> 
            untuk praktik-praktik budidaya yang ramah lingkungan. </p>
        </div>        
    </div>
    <div class="shop" id="shop">
        <h3> OUR POPULAR PRODUCTS </h3>
        <div class="products">
            <?php
            $qry_produk=mysqli_query($conn,"SELECT * from produk");
            while($dt_produk=mysqli_fetch_array($qry_produk)){
                ?>
                <div class="product-card">
                    <div class="card" >
                    <img src="assets/<?=$dt_produk['foto']?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-nama"><?=$dt_produk['nama_produk']?></h5>
                        <p class="card-harga"><?=substr($dt_produk['harga'], 0,1000)?></p>
                        <a href="beli.php?id_produk=<?=$dt_produk['id_produk']?>" class="btr"> Buy </a>
                    </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
        </div>
    </div>
    <div class="footer" id="footer">
    <?php include "footer.php" ?>
    </div>
</body>
</html>