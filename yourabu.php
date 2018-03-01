<?php
date_default_timezone_set('Asia/Islamabad');
$yx = opendir('myToken');
while($isi=readdir($yx))
if($isi != '.' && $isi != '..'){ 
$token=$isi;

$stat= json_decode(auto('https://graph.facebook.com/me/home?fields=id,from,comments&limit=5&access_token='.$token),true);
for($i=1;$i<=count($stat[data]);$i++){ 
$x=$stat[data][$i-1][id].'~'; 
$y= fopen('komen.txt','a');
fwrite($y,$x); fclose($y);

$name = json_decode(auto('https://graph.facebook.com/'.$stat[data][$i-1][from][id].'?fields=name&access_token='.$token),true);
$exp_nam = explode(' ',$stat[data][$i-1][from][name]);
$nama = $gender.' '.$exp_nam[0];
$tags = explode(' ',$stat[data][$i-1][from][id]);
$tagged_name = ' @['.$tags[0].':1] ';
$kata= array(
'cinta.php',
'motivasi.php',
'motto.php',
'bijak.php',
);

$jam = array(
'01',
'02',
'03',
'04',
'05',
'06',
'07',
'08',
'09',
'10',
'11',
'12',
'13',
'14',
'15',
'16',
'17',
'18',
'19',
'20',
'21',
'22',
'23',
'24',
'00',
);
 
$sapa = array(
'',
);
$ucapan = gmdate('H',time()+7*3600); 
$ucapan = str_replace($jam,$sapa,$ucapan);

$emo=array (
'  ',
);

$text = array(
'   😘 '.$tagged_name.' 😘 STICKER+MENTION COMMENT WALI FULL SCURE SITE HEI. 😘
 😘👉 UNIQUE-TOP-REACT,TK 👈😘👉 UNIQUE BOT TEAM 👈😘 ',

'    🔰 TUMBI LGALO BOT ACHA CHAL RAHA HAI AYAN ALI KA. 🔰 '.$tagged_name.' 🔰 
  🔰👉 UNIQUE-TOP-REACT,TK 👈🔰👉 UNIQUE BOT TEAM 👈🔰 ',

 
 '   ♥  ADD CLOSE FAXT TERA NOW NHE AA RAHA. ♥  '.$tagged_name.' ♥  
 ♥👉 UNIQUE-TOP-REACT,TK 👈♥👉 UNIQUE BOT TEAM 👈♥  ',

 '   ⭕ PROMOTE HE KARDY JIGR THORI C ADDING KARNI HEI. ⭕ '.$tagged_name.' ⭕ 
 ⭕👉 UNIQUE-TOP-REACT,TK 👈⭕👉 UNIQUE BOT TEAM 👈⭕ ',
 
 '   ⭕ YELY CLOSE KA PROOF JANI. ⭕ '.$tagged_name.' ⭕ 
 ⭕👉 UNIQUE-TOP-REACT,TK 👈⭕👉 UNIQUE BOT TEAM 👈⭕ ',
 
 '   ♥ '.$tagged_name.' ♥  3 DAYS SY BOT WORK RAHA HEII MERA NA COMMENT BLOCK NA REACT. ♥  
 ♥👉 UNIQUE-TOP-REACT,TK 👈♥👉 UNIQUE BOT TEAM 👈♥  ',
 
 '   ♥ '.$tagged_name.' ♥  YELO JUST LOVE REACT SITE HAI 👉 LOVE-ON,TK 👈 . ♥  
 ♥👉 UNIQUE-TOP-REACT,TK 👈♥👉 UNIQUE BOT TEAM 👈♥  ',
 
'   ♥ '.$tagged_name.' ♥  YEBI MAST SITE HEI AYAN ALI KI FULL SHORT COMMENT HAI ISKA 👉 NO-BLOCKING,TK 👈 . ♥  
 ♥👉 UNIQUE-TOP-REACT,TK 👈♥👉 UNIQUE BOT TEAM 👈♥   ', 
 
 
 );   
 
  $emoticon=$emo[rand(0,count($emo)-1)];

$comments = $text[rand(0,count($text)-1)];

$site = '😘 '.$tagged_name.' 😘 Sticker + Mention 😘
 😘👉 Latest-Mention,TK 👈😘';

$return = ' '.$comments.' 
'.$site.' ';

$react = array(
'WOW',
'LIKE',
'LOVE',
);
$stickers= array('392309624199683', '334188620117492', '575284979224213', '465624336970446', '396449313832508',);
$mess=$stickers[rand(0,count($stickers)-1)];
$reaction = $react[rand(0,count($react)-1)];

auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/comments?message='.urlencode($comments).'&attachment_id='.$mess.'&access_token='.$token.'&method=POST');
auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/Love?method=POST&access_token='.$token.'');
echo '<center><hr>Done To => '.$stat[data][$i-1][from][name].' </hr></center>';
}
}

function auto($url) {
$curl = curl_init();
curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
curl_setopt($curl,CURLOPT_URL, $url);
$ch = curl_exec($curl);
curl_close($curl); 
return $ch;
}

?>