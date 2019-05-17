<?php
include "baglan.php";
include "utils.php";

      $name=$_POST["isim"];
      $surname=$_POST["soyisim"];
      $tc=$_POST["tc"];
      $dt=$_POST["dogum_tarihi"];
      $email=$_POST["email"];
      $tel=$_POST["phone"];
      $sifre=$_POST["sifre"];
      $ekle=mysql_query("insert into kayit(isim,soyisim,email,tc,tel,sifre) values('$name','$surname','$email','$tc','$tel','$sifre')");

      $kullanici_mail=$_POST["email"];
      $isim=$_POST["isim"];
      if (!$mailer->setup()->eposta_gönderimi($kullanici_mail,$isim)){
            header ("Location:index.php");
      }
      echo "And error occurred. ";

           
?>