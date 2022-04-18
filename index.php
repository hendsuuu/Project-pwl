<?php
session_start();
if (empty($_SESSION['msg']["arrMsg"]))
	$_SESSION['msg']["arrMsg"]=array(); 					
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hendra S</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
</head>
<body>
    <!--sidebar-->
    <input type="checkbox" id="check">
    <div class="sidebar">
        <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#skill">Skills</a></li>
            <li><a href="">Portofolio</a></li>
            <li><a href="">Contact</a></li>
        </ul>
    </div>
    <!-- Headerr-->
    <Header>
        <div class="container">
            <h1><a href="">Hendra</a></h1>
        <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#skill">Skills</a></li>
            <li><a href="">Portofolio</a></li>
            <li><a href="">Contact</a></li>
        </ul>
        <!-- Menu mobile -->
        <label for="check" class="mobile-menu"><i class="fa-solid fa-bars"></i></i></label>
        </div>
        
    </Header> 
    <!--BANNER-->
    <section class="banner">
        <div class="container">
            <div class="container-left">
                <img src="img/profil.png" alt="" >
                <h2>Hai . . .<br>
                    Saya adalah seorang <span class="ngetik"> </span>
                </h2>
                <p>selamat datang di website Profile saya!</p>
            </div>
            
        </div>
        <div class="container-right">
            
            <form action="add.php"  method="POST">
                
                <div class="secreto">
                    <h3>Kirim Pesan Kepada Hendra ! ! !</h3>
                    <p>Pesan :</p><textarea class="message" name="message" rows="8" cols="50" id="" required></textarea>
                    <p>Nama samaran :</p><input class="nama" type="text" name="anon" id="" required>
                </div>
                <input class="button" type="reset" name="reset" value="X">
                <input class="btn-kirim" type="submit" name="submit" value="kirim">
            </form>
        </div>   
    </section>
    <div class="cont-secreto">
        <div class="msg">
            <h2>SECRETO</h2>
                <?php
                if (!empty($_SESSION['msg'])){
                    
                    $max=sizeof($_SESSION['msg']['arrMsg']);

                    
                    $i = 1;
                    foreach($_SESSION['msg']['arrMsg'] as $x =>$array){
                        echo "<div class=komen>"."<h4>".$array['anon']."</h4>"."<br><p>".$array['komentar']."</p><br>"."</div>";
                        $i++;
                    }
                    echo "<br>";

                    // for ($i=0;$i<$max;$i++){
                    // 	while (list ($key, $val) = each ($_SESSION['cart']['arrCart'][$i])) { 
                    // 		echo "$key -> $val &nbsp"; 
                    // 	}
                    // 	echo "<br />";	
                    // }	
                   // echo "<center><bottom><a href=php/cart-remove.php>Hapus Komentar</a><bottom><center>";
                }else
                    echo "Tidak ada komentar";

                ?>
            
        </div>
    </div>
    <section class="content">
        <div class="isi" >
            <h2>ABOUT</h2><a name ="about"></a><a name ="about2"></a>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, temporibus. Molestias vitae asperiores repudiandae animi quasi aut quam, a officia architecto sed repellendus minima necessitatibus tenetur ratione expedita deleniti. Harum!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias blanditiis nihil iste nisi suscipit aspernatur illum officiis ducimus. Similique impedit dolores aliquid ducimus quisquam eveniet obcaecati excepturi molestias consequuntur incidunt.
            </p>
    
        </div>
        <div class="isi" >
            <h2>SKILLS</h2><a name ="skill"></a><a name ="skill2"></a>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam laborum error sapiente maxime voluptates earum tempore, eos aperiam dolores molestias quos amet quibusdam, rerum unde fugiat asperiores est nihil laudantium?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo inventore consectetur, perferendis quidem nostrum animi alias voluptatem, voluptas laboriosam cumque fugit obcaecati delectus dolore assumenda molestias expedita. Ipsa, voluptate iusto?</p>
    
        </div>
    
    </section>

    <footer>
        <div class="conten">
            <h3>Content</h3>
            <i class="fa-solid fa-angle-right"></i><a href="#"> About</a><br>
            <i class="fa-solid fa-angle-right"></i><a href=""> skill</a><br>
            <i class="fa-solid fa-angle-right"></i><a href=""> Portofolio</a><br>
            <i class="fa-solid fa-angle-right"></i><a href=""> Contact</a><br>
        </div>
        
        <div class="sosmed">
            <h3>Contact US</h3>
            <i class="fa-brands fa-whatsapp"> </i> 081234222797<br>
            <i class="fa-brands fa-instagram"></i> hendsuuuu<br>
            <i class="fa-solid fa-at"></i> Mail<br>
            <i class="fa-brands fa-github"></i> hendsuuu<br>
        </div>
        <div class="alamat">
            <h3>Alamat</h3>
            <i class="fa-solid fa-location-arrow"></i>  Pati Jawa Tengah,Indonesia</p>
        </div>
    </footer>
    <div class="footer2">
    <p>copyright &copy;2022 by <span>Hendra Sutrisno</span></p>
    </div>
   



    <script src="js/script.js">

    </script>
    
</body>
</html>