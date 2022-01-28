<html>
    <head>
        <style type='text/css'>
            body, html {
                margin: 0;
                padding: 0;
            }
            body {
                color: black;
                display: table;
                font-family: montserrat, Georgia;
                font-size: 28px;
                text-align: center;
            }
            .container {
                width: 750px;
                height: 500px;
                display: table-cell;
                vertical-align: middle;
                margin:10px;
            }
            .logo {
                color: #38435F;
            }

            .marquee {
                color: #38435F;
                font-size: 48px;
                margin: 20px;
            }
            .assignment {
                margin: 20px;
            }
            .person {
                border-bottom: 2px solid black;
                font-size: 32px;
                font-style: italic;
                margin: 20px auto;
                width: 400px;
            }
            .reason {
                margin: 20px;
            }
            .container-background{
                margin-top:100px;
            }
        </style>
    </head>
    <body>
        <div class="container-background">
            <table>
                <td>
                <div class="logo">
                Lumintu Logic
                </div>
                </td>
            </table>   
        <div class="container">
            <div class="marquee">
                Certificate of Completion
            </div>

            <div class="assignment">
                This certificate is presented to
            </div>

            <div class="person">
                Ari Sukarno
            </div>

            <div class="reason">
                Peserta Magang Terbaik<br/>
                di Lumintu Logic
            </div>
            <?php
                require_once 'phpqrcode/qrlib.php';
                $file = "qrsertif/AriSukarizo.png";
                $link = 'https://symposium.kratonjogja.id/';
                $sertif = QRcode::png($link, $file);
                echo "<center><img src='".$file."'><center>";
                
            ?>
        </div>
    </body>
</html>
