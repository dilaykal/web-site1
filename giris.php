<?php
    $sifreerr = $emailerr = $boserr="";
    $sifre = $email = "";
    $sifreerr="şifreniz uygun formatta değil";
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    if(isset($_POST["mail"])){
        if (empty($_POST["mail"])) {
            $boserr = "Mail alanı doldurulmak zorunludur";
            echo $boserr;
        } 
        else {
            $email = test_input($_POST["mail"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailerr = "Yanlış e-mail formatı girdiniz";
            echo $emailerr;
            }
            else{
                echo "Mail adresiniz:"." ".$email;
            }
        }
        if (empty($_POST["sifre"])) {
            $sifreerr = "Bu alanı doldurunuz";
            echo $sifreerr;
        } 
        else{
            $sifre = $_POST["sifre"];
            $kontrol = "/\S*((?=\S{9,})(?=\S*[a-z]))\S*/";
            if(preg_match($kontrol,$sifre))
            {  
                echo "Şifreniz:"." ".$sifre;
            }
            else{
                echo "Şifreniz uygun formatta değil.";
            }        
        }
    }
    echo "<p> <a href='login.html'>&lt;GERİ DÖN&gt;</a></p> ";
?>