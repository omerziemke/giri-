<?php
$baglan=mysql_connect("localhost","root","12345678"); // Kullanıcı adı ve şifreniz
if(!$baglan){
die('Bağlantı Hatası:' . mysql_error()); //Doğru değilse ekrana php hata mesajı yazdır
}
$vt_sec=mysql_select_db("deneme",$baglan);//veritabanını seç
if(!vt_sec){
die("Veritabanı Hatası:".mysql_error()); //Doğru değilse ekrana php hata mesajı yazdır
}
            $name=$_POST["isim"];
            $surname=$_POST["soyisim"];
            $tc=$_POST["tc"];
            $dt=$_POST["dogum_tarihi"];
            $email=$_POST["email"];
            $tel=$_POST["phone"];
            $sifre=$_POST["sifre"];
          
            
          $ekle=mysql_query("insert into kayit(isim,soyisim,email,tc,tel,sifre) values('$name','$surname','$email','$tc','$tel','$sifre')");
            header ("Location:index.php");
            ?>