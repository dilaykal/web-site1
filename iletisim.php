<!DOCTYPE html>
<html>
    <head>
        <title>cevap</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="./js/jquery-3.6.0.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="./stil/style.css"/>
    </head>
    <body>
        <!-- menü oluşturma -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-danger  fixed-top ">
            <div class="container py-1">
                <!-- logo yerleştirildi -->
                <a href="" class="navbar-brand">Blog Sayfası</a>

                <!-- küçük ekranlar için buton koyuldu -->
                <button type="button" class="navbar-toggler"  data-toggle="collapse" data-target="#mynav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Linkler -->
                <div class=" container collapse navbar-collapse justify-content-end" id="mynav">
                    <ul class="navbar-nav">
                        <li class="nav-item d-flex ">
                        <a class="nav-link active" href="anasayfa.html" target="_blank">Hakkımda</a>
                        </li>
                        <li class="nav-item d-flex px-2">
                        <a class="nav-link" href="ozgecmis.html" target="_blank">Özgeçmiş</a>
                        </li>
                        <li class="nav-item d-flex px-2">
                        <a class="nav-link" href="sehrim.html" target="_blank">Şehrim</a>
                        </li>
                        <li class="nav-item d-flex px-2">
                            <a class="nav-link" href="takımımız.html" target="_blank">Takımımız</a>
                        </li>
                        <li class="nav-item d-flex px-2">
                            <a class="nav-link" href="ilgialanlarım.html" target="_blank">İlgi Alanlarım</a>
                        </li>
                        <li class="nav-item d-flex">
                            <a class="nav-link" href="iletisim.html" target="_blank">İletişim</a>
                        </li>
                    </ul>
                </div>
            
            </div>
          
        </nav>
        <div  id="form" style="height:800px; margin-top:63px;">
            <table class="table container " id="myform">
                <thead>
                    <tr>
                        <th>Bilgiler</th>
                        <th>Cevaplar</th>   
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>İsim</th>
                        <td><?php echo $_POST["ad"]?></td>
                    </tr>
                    <tr>
                        <th>Soyisim</th>
                        <td><?php echo $_POST["soyad"]?></td>
                    </tr>
                    <tr>                            
                        <th>Email</th>
                        <td><?php echo $_POST["eposta"]?></td>
                    </tr>
                    <tr>
                        <th >Cinsiyet</th>
                        <td><?php echo $_POST["cins"]?></td>
                    </tr>
                    <tr>
                        <th >Mesaj Gönderilme Sebebi</th>
                        <td><?php echo $_POST["konu"]?></td>
                    </tr> 
                    <tr>
                        <th>Mesaj</th>
                        <td><?php echo $_POST["mesaj"]?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- footer -->
        <div class=" bg-danger footer">
            <div class="isaret">
                <a href="https://www.instagram.com/accounts/onetap/?next=%2F" target="_blank"><i class="fab fa-instagram"></i></a> 
                <a href="https://github.com/dilaykal" target="_blank"><i class="fab fa-github"></i></a>
            </div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="anasayfa.html" target="_blank">Ana sayfa</a></li>
                <li class="list-inline-item"><a href="ozgecmis.html" target="_blank">Özgeçmiş</a></li>
                <li class="list-inline-item"><a href="ilgialanlarım.html" target="_blank">İlgi Alanlarım</a></li>
                <li class="list-inline-item"><a href="sehir.html" target="_blank">Şehir</a></li>
                <li class="list-inline-item"><a href="takımımız.html" target="_blank">Takımımız</a></li>
                <li class="list-inline-item"><a href="iletisim.html" target="_blank">İletişim</a></li>
            </ul>
            <p class="copyright">Dilay KAL © 2022</p>
        </div>
    </body>
</html>