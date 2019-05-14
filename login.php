<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <style>
    .form{
    width: 400px;
    padding: 10px;
    border: solid thin #ddd;
    margin: auto;
        margin-top: 100px;
        text-align: center;
        border-radius: 20px;
}
        .form input{
            padding:10px;
            width: 300px;
            margin-top: 10px;
            border:none;
            border-bottom: solid thin #ddd;
        }
        .btn{
            background-color: #333;
            color: #fff;
            font-weight: bold;
        }
        .link{
            margin=100px;
        }
    </style>
    
</head>
<body>
           
    
    <div class="form">
        <form action="" method="post">
        
            <input id="email" type="email" name ="email"  placeholder="E-mailinizi Giriniz"><br>
             <input id="sifre" type="text" name ="sifre" placeholder="Sifrenizi Giriniz..."><br>
            <input type="submit" class="btn" value="Giriş" onclick="control();"><br>
            <a class="link" href="kayitt.php" target="_blank">Kayıt Ol</a>
            </form>
            <?php 

     
         $email=$_POST["email"];
         $sifre=$_POST["sifre"];

         if($email==""|| $sifre==""){
            echo "Lütfen Boş Alan Bırakmayınız";
         }else{
           error_reporting(0);
           mysql_connect('localhost', 'root', '12345678')or die("Bağlantı Kurulamadı");
            mysql_select_db('deneme')or die('Veritabanı Bulunamadı');

            $kontrol=mysql_query("SELECT *FROM kayit WHERE email='$email'");
            if(mysql_num_rows($kontrol)>0){

                $par=mysql_fetch_array($kontrol);
                $gsifre=$par["sifre"];
                if ($gsifre==$sifre) {
                     header ("Location:index.php");
                }else{
                    echo "Sifreniz Yanlış...";
                }
            }else{
                echo "Kullanıcı Bulunamadı";
            }
         }


           


     ?>
        </div>
          
      


</body>
</html>