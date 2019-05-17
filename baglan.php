<?php 
$baglan=mysql_connect("localhost","root","12345678"); // Kullanıcı adı ve şifreniz
if(!$baglan){
die('Bağlantı Hatası:' . mysql_error()); //Doğru değilse ekrana php hata mesajı yazdır
}
$vt_sec=mysql_select_db("deneme",$baglan);//veritabanını seç
if(!vt_sec){
die("Veritabanı Hatası:".mysql_error()); //Doğru değilse ekrana php hata mesajı yazdır
}

 ?>