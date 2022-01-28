<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="x-apple-disable-message-reformatting">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="email/style.css">
    <title>$sertif</title>
    <head>
    <style>
        .card-body {

        }
        .card text-center{
            height: 500px;
            width: 500pc;
        }
        .card-title,
         .card-text{
            color: black;
        }

        .card-text{
            font-style: reguler;
            margin-left: 50px;
        }

        .barcode{
            align-content: right;
        }

        .webinar{
            color: black;
            font-weight: bold;
        }

        .workshop{
            color: black;
            font-weight: bold;
        }
        .card{

        }
        .card .card-dalem{
            margin-top:180px;
            margin-left:60px;
            margin-right:60px;
            text-align:center;
            border-radius: 60px 60px 60px 60px;
        }
        .barcode{
            align-items:right;
        }
    </style>
    </head>
    <body>
   
    <div class="card bg-dark text-white">
        <img src="assets/img/background.png" class="card-img" alt="...">
        <div class="card-img-overlay">
            <div class="card card-dalem">
                <div class="card-body">
                    <h1 class="card-title">CERTIFICATE OF PARTICIPATION</h1>
                    <H4 class="card-text">INTERNATIONAL WEBINAR WORKSHOP ON JAVANESE CULTURE 2022</h4>
                    <br>
                    <H3 class="card-text" style="text-align:left;">Ini di isi namanya</h4>
                    <hr style="height: 5px; width: 80%; color: black; opacity: 100%;">
                    <p class="card-text" style="text-align:left;">Has attended</p>
                    <br>
                    <br>
                    <br>
                    <p class="webinar" style="text-align:left; margin-left:50px;">Webinar</p>
                    <p class="sesi" style="text-align:left; margin-left:50px;">
                        <?php
                        ?>
                    </p>
                    <p class="workshop" style="text-align:left; margin-left:50px;">Workshop</p>
                    <p class="sesi" style="text-align:left; margin-left:50px;"></p>
                    <br>
                    <br>
                    <br>
                    <div class="barcode">
                        <?php
                            require_once 'phpqrcode/qrlib.php';
                            $file = "qrsertif/AriSukarizo.png";
                            $link = 'https://symposium.kratonjogja.id/';
                            $sertif = QRcode::png($link, $file);
                            echo "<img src='".$file."'>";        
                        ?>
                    </div>
                    <p class="card-text">KERATON NGAYOGYAKARTA HADININGRAT</p>
                </div>
            </div>
        </div>
    </div>



