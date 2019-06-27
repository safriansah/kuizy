<?php
    include('../act/con.php');
    include('bot.php');
    
    $z=15;
    $reply="";
    $menu[0]="\n/start untuk menampilkan pilihan menu";
    $menu[1]="\n\n/playAlatMusik \nuntuk bermain kategori Alat Musik\n/playLagu \nuntuk bermain kategori Lagu\n/playPakaian \nuntuk bermain kategori Pakaian\n/playRumah \nuntuk bermain kategori Rumah\n/playTari \nuntuk bermain kategori Tari\n\n/stop \nuntuk berhenti di tengah permainan\n\n/topAlatMusik \nuntuk melihat nilai tertinggi kategori Alat Musik\n/topLagu \nuntuk melihat nilai tertinggi kategori Lagu\n/topPakaian \nuntuk melihat nilai tertinggi kategori Pakaian\n/topRumah \nuntuk melihat nilai tertinggi kategori Rumah\n/topTari \nuntuk melihat nilai tertinggi kategori Tari";
    // Setting token bot API
    // Token didapatkan dari melakukan pembuatan bot pada BotFather ditelegram
    $botToken = "543612644:AAEpB5p-CYhJcG0IsY90c1Gxu1zOqQjfHcE";
    
    // Base Url untuk mengakses API dari telegram bot
    $website = "https://api.telegram.org/bot".$botToken;
    
    // Mengambil informasi dari webhook, informasi yang didapat akan diparse dan dimasukkan kedalam variable $message
    $content = file_get_contents("php://input");
    $update = json_decode($content, TRUE);
    $message = $update["message"];

    // Beberapa variable yang dibutuhkan dalam proses auto responder
    // Mengambil unique chat id dari tiap user
    $chatId = $message["chat"]["id"];
    $user = $message["chat"]["username"];
    
    $mybot = new bot($chatId,$conn);
    // Mengambil text message yang dikirmkan oleh user
    $key= $message["text"];
    $keyboard = array(array("/start"));

    // Melakukan pengecheckan data pada tabel sesuai dengan keyword yang terismpan pada variable $text
    if($key=="/start"){
        $keyboard = array(array("/playAlatMusik","/topAlatMusik"),array("/playLagu","/topLagu"),array("/playPakaian","/topPakaian"),array("/playRumah","/topRumah"),array("/playTari","/topTari"));
        if($mybot->setuser($user))$balasan="selamat datang di KuizyBot! :)";
        else $balasan="selamat datang $user di KuizyBot! :)";
    }
    else if($key=="/playAlatMusik" || $key=="/playLagu" || $key=="/playPakaian" || $key=="/playRumah" || $key=="/playTari"){
        $mybot->updatenomor('1');
        if($key=="/playAlatMusik") $kat=1;
        else if($key=="/playLagu") $kat=2;
        else if($key=="/playPakaian") $kat=3;
        else if($key=="/playRumah") $kat=4;
        else $kat=5;        
        $mybot->deletemain();
        $mybot->setmain($z,$kat);
        $mybot->setwaktu();
        $keyboard = array(array("/a","/b"),array("/c","/d"));
        $balasan="Waktu : 120 Detik\n";
        $balasan.=$mybot->getsoal();
    }
    else if($key=="/a" || $key=="/b" || $key=="/c" || $key=="/d"){
        if($mybot->getnomor()=="0") $balasan = "Keyword tidak ada";
        else{
            $nomor=$mybot->getnomor();
            $waktu=$mybot->getwaktu();
            $nomor++;
            $subkey=substr($key,1);
            $mybot->jawab($subkey);
            $mybot->updatenomor($nomor);
            if($mybot->getnomor()>$z || $waktu>120){                
                if($waktu>120){
                    $balasan="Waktu anda habis\n";
                    $sisa=0;
                }
                else $sisa=120-$waktu;
                $balasan.=$mybot->hitung($z,$user,$sisa);
                $mybot->updatenomor('0');
                $mybot->deletemain();
            }
            else{
                $keyboard = array(array("/a","/b"),array("/c","/d"));
                $balasan="Sisa Waktu : ".(120-$waktu)." Detik\n";
                $balasan.=$mybot->getsoal();
            }
        }
    }
    else if($key=="/topAlatMusik" || $key=="/topLagu" || $key=="/topPakaian" || $key=="/topRumah" || $key=="/topTari"){
        if($key=="/topAlatMusik") $kat=1;
        else if($key=="/topLagu") $kat=2;
        else if($key=="/topPakaian") $kat=3;
        else if($key=="/topRumah") $kat=4;
        else $kat=5;
        $subkey=substr($key,4);
        $balasan="Nilai Tertinggi Kategori $subkey:\n";
        $balasan.=$mybot->getnilai($kat);
    }
    else if($key=="/stop"){
        $mybot->updatenomor('0');
        $mybot->deletemain();
        $balasan="Anda telah berhenti";
    }
    else {
        $balasan = "Keyword tidak ada";
    }
    $resp = array("keyboard" => $keyboard,"resize_keyboard" => false,"one_time_keyboard" => false);
    $reply = json_encode($resp);
    
    // Mengirim pesan menggunakan api telegram menggunakan API sendMessage
    // ex : https://api.telegram.org/bot[token]/sendmessage?text=[message]]&chat_id=[chatid]]
    file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".urlencode($balasan)."&reply_markup=".$reply);
?>
