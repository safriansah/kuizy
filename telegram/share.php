<!DOCTYPE html>
<html>
    <head>
        <title>Kuizy - Share</title>
        <link rel="shortcut icon" href="https://bkwzea.bn.files.1drv.com/y4mCRO4CR7_hfnuGpK2AKpBNst8M4eokKcYvX-Dx-NH68Ym1haLsrfKyzK66tgA8XM_d9GKJBdQJUdQTDmp2E2KGYihQPaneF5IvmpL6ZTVLeO1T0PLqwbm79-a4yR1wQy4OGm17-7XpC874ar77NJdZuYLi-GmaBlTxnzW4Owa5qknUW-yfcPc1ZKI4YZ4iEs7uhhb7G4cwCYYAfe-i23sqQ?width=256&height=256&cropmode=none">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <style>
            * {
                box-sizing: border-box;
            }

            body {
                margin: 0; 
                padding: 5% 30%; 
                font-family: 'Berlin Sans FB';
                background: #289fdf;
                text-transform: capitalize;
            }

            a.button {
                background-color: #424242;
                display: inline-block;
                padding: 10px 20px;
                color: #FAFAFA;
                text-decoration: none;
                font-weight: 300;
                width: 100%;
                border-radius: 5px;
                position: relative;
            }

            a.button .icon {
                display: inline-block;
                position: absolute;
                width: 32px;
                height: 32px;
                top: 50%;
                transform: translateY(-50%);
            }

            a.button .icon + * {
                margin-left: 40px;
            }

            .container {
                width: 48.5%; 
                padding: 10px 5px; 
                display: inline-block;
            }

            .main {
                position: relative;
                background-color: #FAFAFA; 
                padding: 10px 20px; 
                text-align: center
            }
            .flyout {
                left: auto;
                top: auto;
                transform: none;
                margin: 10px 0;
                position: relative;
            }

            .flyout a.button {
                display: inline-block;
                box-shadow: 10px 10px 10px -8px rgba(0,0,0,0.2);
                width: 40px;
                height: 40px;
                border-radius: 50%;
                transition: .2s all;
            }

            .flyout a.button:hover {
              box-shadow: 10px 10px 10px -8px rgba(0,0,0,0.3);
            }

            .flyout a.button:not(:first-of-type) {
                margin-top: 10px;
            }

            .flyout a.button .icon {
                left: 50%;
                transform: translate(-50%, -50%);
                width: 18px;
                height: 18px;
            }

            @media only screen and (max-width: 855px) {
                body {
                    padding: 5%;
                    padding-bottom: 60px;
                }

                .container {
                    width: 100%;
                    padding: 2.5px 5px;
                }
            }
        </style>
        <script>
            function openDialog(uri) {
                 window.open(encodeURI(uri),'sharer','toolbar=0,status=0,width=580,height=325');
            }

        </script>
    </head>

    <body>
<?php
    include('../act/con.php');
    $q=$_GET['q'];
        $sql = "SELECT * FROM bot_nilai where id='$q'";
        $query = $conn->query($sql);
        $row = $query->fetch_assoc();;
?>
        <header style="background-color: #eee; text-align: center;">
            <img src="../telegram/img/logo.png" style="width: 48px; height: 48px; margin:12px auto;">
        </header>

        <div class="main">
            <p>Hi! <span style="font-size: 24px;"><?php echo $row['username']; ?></span> baru saja memainkan Game Kuizy</p>
            <p><?php echo "dan mendapatkan nilai :"?></p>
            <p style="font-size: 64px; margin: 20px 0"><?php echo $row['nilai']; ?></p> 
            <p><?php if($row['nilai']>=80) echo"Indonesia Bangga Padamu Nak!"; else if($row['nilai']>50)echo"Yaa.. Kamu Aman"; else echo"Orang Mana Sih Kamu?";?></p>
            <p style="margin-top: 50px;">Mau mencoba bermain juga?</p>
            <div style="position: relative; padding: 0 30px; margin-bottom: 20px;">
                <div class="container">
                    <a href="https://kuizy.wordpress.com/download/" target="_blank" class="button" style="background-color: #03605b; padding: 14px 0; border: 2px solid #111">
                        <img src="../telegram/img/download.png" alt="Download Aplikasi" class="icon">
                        <span style="display: inline-block">Download Aplikasi</span>
                    </a>
                </div>
                <div class="container">
                    <a href="http://t.me/kuizybot" target="_blank" class="button" style="background-color: #03605b ;padding: 14px 0; border: 2px solid #111">
                        <img src="../telegram/img/telegram.png" alt="Bot Telegram" class="icon">
                        <span style="display: inline-block">Bot Telegram</span>
                    </a>
                </div>
            </div>
            <p>Bagikan :</p>
            <div class="flyout">
                <a href="javascript:openDialog('https://www.facebook.com/sharer/sharer.php?u=http://kuizy.000webhostapp.com/share/<?php echo $q; ?>')" class="button" style="background-color: #3b5998">
                    <img src="../telegram/img/facebook.png" alt="Share to Facebook" class="icon">
                </a>
                <a href="javascript:openDialog('https://social-plugins.line.me/lineit/share?url=http://kuizy.000webhostapp.com/share/<?php echo $q; ?>')" class="button" style="background-color: #00ba00">
                    <img src="../telegram/img/line.png" alt="Share to Line" class="icon">
                </a>
                <a href="javascript:openDialog('https://telegram.me/share/url?text=Lihat skor Kuizy saya&url=http://kuizy.000webhostapp.com/share/<?php echo $q; ?>')" class="button" style="background-color: #2e87ca">
                    <img src="../telegram/img/telegram.png" alt="Share to Telegram" class="icon">
                </a>
                <a href="javascript:openDialog('whatsapp://send?text=Lihat skor Kuizy saya http://kuizy.000webhostapp.com/share/<?php echo $q; ?>')" class="button" style="background-color: #29a71a">
                    <img src="../telegram/img/whatsapp.png" alt="Share to Whatsapp" class="icon">
                </a>
                <a href="javascript:openDialog('https://twitter.com/intent/tweet?text=Lihat skor Kuizy saya&url=http://kuizy.000webhostapp.com/share/<?php echo $q; ?>')" class="button" style="background-color: #1ea1f3">
                    <img src="../telegram/img/twitter.png" alt="Share to Twitter" class="icon">
                </a>
            </div>
        </div>
    </body>
</html>
