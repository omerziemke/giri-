					<!DOCTYPE html>
					<html lang="en">
					<head>
						<meta charset="UTF-8">
						<title>Document</title>
					</head>
					<body>
						<?php 
					$baglan=mysql_connect("localhost","root","12345678"); // Kullanıcı adı ve şifreniz
					if(!$baglan){
					die('Bağlantı Hatası:' . mysql_error()); //Doğru değilse ekrana php hata mesajı yazdır
					}
					$vt_sec=mysql_select_db("deneme",$baglan);//veritabanını seç
					if(!vt_sec){
					die("Veritabanı Hatası:".mysql_error()); //Doğru değilse ekrana php hata mesajı yazdır
					} 
					    $email=$_COOKIE["email"];
					 $kontrol=mysql_query("SELECT *FROM kayit WHERE email='$email'");
					            if(mysql_num_rows($kontrol)>0){

					                $par=mysql_fetch_array($kontrol);
					                 echo "Hoş Geldin  ".$par["isim"];
					                  echo "<br>soyisim ".$par["soyisim"];
					                   echo "<br>TC ".$par["tc"];

					                 
					             }

					               
						 ?>

					</body>
					</html>