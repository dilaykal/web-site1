<?php
        $örmail=$_POST["mail"];
        $örsifre=$_POST["sifre"];
        if (isset($_POST['mail'], $_POST['sifre'] ) && ($_POST['mail']!='') && ($_POST['sifre']!='')) {
            echo "Giriş İşleminiz Yapıldı...";
            echo "<br>"."Hoşgeldiniz"." ".$_POST['mail'] . "<br>"."Şifreniz:"." " . $_POST['sifre']."</b>";
        }else{
        echo"Bilgilerinizi Kontrol Edip Tekrar Giriş Yapın.<br>
        Eksik Bilgi Girdiniz...";
        }
?>