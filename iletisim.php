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
    <div  id="form">
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
    </body>
</html>