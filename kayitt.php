<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">

<body>

    <div>
        <h3>Kayıt Formu</h3>
        <form action="login_control.php" name="kayit" method="post">
            <label for="isim">İsim:</label><br>
            <input type="text" id="ad" name="isim" placeholder="Adınızı giriniz.." required /><br>

            <label for="soyisim">Soyisim:</label><br>
            <input type="text" id="soyad" name="soyisim" placeholder="Soyadınızı Giriniz.." required /><br>

            <label for="tc">TC NO:</label><br>
            <input id="tc" type="text" name="tc" maxlength=11 placeholder="TC'nizi giriniz.." required /> <br>

            <label for="date">Dogum Tarihi:</label> <br>
            <input id="dt" type="date" name="dogum_tarihi" /><br>

            <label for="email">E_mail:</label><br>
            <input id="email" type="email" name="email" placeholder="E-mail'inizi Giriniz.." required /><br>

            <label for="email_kontrol">E_mail Tekrar:</label><br>
            <input id="email2" type="email" name="email_control" placeholder="E-mail'inizi Giriniz.." required /><br>

            <label for="text">Telofon NO:</label><br>
            <input id="tel" type="tel" name="phone" maxlength=11 placeholder="Telofon Numaranızı Giriniz.." /><br>
              
<!--
            <label for="Bilgi">Bilgi</label><br>
            <input  type="text" name="bilgi" maxlength=11 placeholder="Bilgi Giriniz.." /><br>

            <label for="cinsiyet">Cinsiyet:</label>
            ERKEK <input type="radio"  name="cinsiyet" value="E"/>
            KADIN <input type="radio" name="cinsiyet"  value="K"/><br><br>
            -->
             <label for="sifre">Şifre:</label><br>
            <input type="text" id="sifre" name="sifre" placeholder="Sifrenizi giriniz.." required /><br>

            <label for="sifre2">Şifre Tekrar:</label><br>
            <input type="text" id="sifre2" name="sifre2" placeholder="Sifrenizi Tekrar Giriniz.." required /><br>

            <button type="submit" onclick="kontrol();">
                Kayıt Ol
            </button>
        </form>
    </div>

    <script>
        function kontrol() {
            var tc = document.getElementById("tc").value;
            var email = document.getElementById("email").value;
            var email2 = document.getElementById("email2").value;
            var dt = document.getElementById("dt").value;
            var ad = document.getElementById("ad").value;
            var soyad = document.getElementById("soyad").value;
            var tel = document.getElementById("tel").value;
            var cinsiyet = document.getElementsByName("cinsiyet").value;
            alert(""+cinsiyet);
            var boyut = email.length;
            var kontrol = 0;
            var son = email.substring((boyut - 4), boyut);
            if (email == email2) {
                if (".com" != son) {

                    alert("E-posta yanlış");
                    return;
                }
                for (var i = 0; i < email.length; i++) {
                    if (email.charAt(i) == "@") {
                        kontrol = 1;
                    }


                }
                if (kontrol != 1) {
                    alert("E-posta yanlış");
                    return;
                }

            }

            if (ad == "") {
                alert("İsminizi Giriniz");
                return;
            }
            if (soyad == "") {
                alert("soyisminizi Giriniz");
                return;
            }
            var tr = new Date();
            var yil = tr.getFullYear();
            var temp = new Array();

            temp = dt.split("-");
            var yil2 = parseInt(temp[0]);
            if (email == "") {
                alert("Emailinizi Giriniz");
                return;
            }
            if (tel == "") {
                alert("Telofon Numaranızı Giriniz");
                return;
            }
            if (email != email2) {
                alert("E-mail adreslerini kontrol ediniz");
                return;
            }
            if (email == email2) {


            }
            var yas = yil - yil2;
            alert(yas + " yaşındasınız");
             
        }

    </script>
</body>

</html>
