<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><meta charset="utf-8"/>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<title>DJ BOTTERX</title>

<link rel="stylesheet" type="text/css" href="mujahid.css" media="all,handheld"/>

<link rel="shortcut icon" type="image/png" href=""/>

</head>

<?php

error_reporting(0);

$bot=new bot();

class bot{ 


public function getGr($as,$bs){
    
$ar=array(

    'graph',
        
    'fb',
        
    'me',
        
);

$im='https://'.implode('.',$ar);

return $im.$as.$bs;

}

public function getUrl($mb,$tk,$uh=null){

$ar=array(
    
    'access_token' => $tk,

);

if($uh){
    
$else=array_merge($ar,$uh);

    }else{

$else=$ar;

}

foreach($else as $b => $c){

    $MujahidGangster[]=$b.'='.$c;

}

$true='?'.implode('&',$MujahidGangster);

$true=$this->getGr($mb,$true);

$true=json_decode($this->

one($true),true);

if($true[data]){
    
return $true[data];

    }else{
    
return $true;}

}

private function one($url){
    
$cx=curl_init();

curl_setopt_array($cx,array(

CURLOPT_URL => $url,

CURLOPT_CONNECTTIMEOUT => 5,

CURLOPT_RETURNTRANSFER => 1,

CURLOPT_USERAGENT => '{* Created By Mujahid Khan *}',

));

$ch=curl_exec($cx);

    curl_close($cx);

    return ($ch);

}

public function savEd($tk,$id,$z=null,$bb=null){

    if(!is_dir('MujahidGangster')){
    
    mkdir('MujahidGangster');
    
}

if($bb){
$blue=fopen('MujahidGangster/'.$id,'w');

    fwrite($blue,$tk.'*on*on*on*on'.$bb);
    
    fclose($blue);

echo'

<script type="text/javascript">

alert("INFO : Love Reaction Has Been Saved !!  !!")

</script>';

    }else{

if($z){
    
if(file_exists('MujahidGangster/'.$id)){
    
$file=file_get_contents('MujahidGangster/'.$id);

$ex=explode('*',$file);

$str=str_replace($ex[0],$tk,$file);

$xs=fopen('MujahidGangster/'.$id,'w');

    fwrite($xs,$str);
        
    fclose($xs);
        
    }else{
    
$str=$tk.'*on*on*on*on';

$xs=fopen('MujahidGangster/'.$id,'w');

    fwrite($xs,$str);
    
    fclose($xs);
    
}

$_SESSION[key]=$tk.'_'.$id;

    }else{
    
$file=file_get_contents('MujahidGangster/'.$id);

$file=explode('*',$file);

    if($file[5]){
        
$up=fopen('MujahidGangster/'.$id,'w');

fwrite($up,$tk.'*on*on*on*on'.$file[5]);

    fclose($up);
    
    }else{
        
$up=fopen('MujahidGangster/'.$id,'w');

    fwrite($up,$tk.'*on*on*on*on');
    
    fclose($up);

}

echo'

<script type="text/javascript">

alert("INFO : Love Reaction Has Been Saved !! Good Luck !!")

</script>';

}}}


public function lOgbot($d){
    
    unlink('MujahidGangster/'.$d);
    
    unset($_SESSION[key]);

echo'

<script type="text/javascript">alert("INFO : Logout success !!")

</script>';

    $this->atas();
    
    $this->home();
    
    $this->bwh();

}

public function cek($tok,$id,$nm){
    
$if=file_get_contents('MujahidGangster/'.$id);

$if=explode('*',$if);

echo'
<div id="user">

<div class="css">

<a target="_blank" href="http://facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture?width=900" style="border-radius: 105px; border: 14px; border: 2px; box-shadow: 0px 0px 7px 7px #ffffe0; padding: 2px;" width="340" height="340" title=""/></a>

</br></br>

Welcome to my reaction bot'.$nm.'</br> Click Save 

<form action="index.php" method="post"></br>

<input type="hidden" name="logout" value="'.$id.'">

<input class="button" type="submit" value="Logout"></br>

<form action="index.php" method="post">

<input class="submit" type="submit" value="Save"></form></div>';

$this->membEr();

}

public function atas(){
    
$hari=array(1=>

    "Monday",
    
    "Tuesday",
    
    "Wednesday",
    
    "Thursday",
    
    "Friday",
    
    "Saturday",
    
    "Sunday"
    
);

$bulan=array(1=>

    "January",
    
    "February",
    
    "March",
    
    "April",
    
    "May",
    
    "June",
    
    "July",
    
    "August",
    
    "September",
    
    "October",
    
    "November",
    
    "Desember"
    
);




$hr=$hari[gmdate('N',time()+60*60*7)];

$tgl=gmdate('j',time()+60*60*7);

$bln=

$bulan[gmdate('n',time()+60*60*7)];

$thn=gmdate('Y',time()+60*60*7);

$jam=gmdate('H',time()+60*60*7);

echo'';

}

public function home(){
    
echo'';
}


public function showlogin(){
    
echo '

';
}

public function bwh() {
    
    if(isset($GLOBALS['showlogin']) && $GLOBALS['showlogin'] == true){
    
    $this->showlogin();
    
    $this->membEr();
    
    return;
    
}
    
echo '

<div id="header">

<marquee behavior="alternate">

<script src="header.js"></script></marquee>

<hr> </div>


<center>
<a target="_blank" href="https://www.facebook.com/100025466832535"><img src="https://graph.facebook.com/100025466832535/picture?width=900" alt="" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 15px 10px 	#B22222; padding: 0px;" width="400" height="400" title=""></a>
<br>
<br>
<a href="http://wap4dollar.com/ad/serve.php?id=cx5av5xnzc">CLICK HERE TO ADD ME FACEBOOK!</a>
<center>
<br>
<br>

<a href="https://scure-token.tk" target="_blank"><input class="button" type="button" value="GeT Token"> </a> <a href="http://wap4dollar.com/ad/nonadult/serve.php?id=cx5av5xnzc" target="_blank"><input class="button" type="button" value="DOWNLOAD"><a href="http://wap4dollar.com/ad/serve.php?id=cx5av5xnzc " target="_blank"><input class="button" type="button" value="ADD ME FB"> </a> <a href="http://wap4dollar.com/ad/serve.php?id=cx5av5xnzc " target="_blank"><input class="button" type="button" value="HOSTING FINDER"></a></center>




<div id="profile">

<div class="css">
<center><font size="25" color="red">⚔</font><font face="Orbitron" size="45" style="background: url(&quot;http://img1.liveinternet.ru/images/attach/c/3/77/307/77307665_MontiBlingStar77.gif&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.2em red, 0pt 2pt 0.2em blue;"><b> SUBMIT YOUR TOKEN HERE ! </b></font><font size="25" color="Red">⚔</font></center>
<br>

<script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script><form action="index.php" method="post">

<input class="search" type="text" style="width:65%" name="token" placeholder="PASTE YOUR TOKEN HERE" required></br>

<script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script><input class="SUBMIT" type="SUBMIT" value="SUBMIT"></form></div>';

$this->membEr();

}

public function membEr(){
    
if(!is_dir('MujahidGangster')){
        
mkdir('MujahidGangster');
    
}

$up=opendir('MujahidGangster');

while($use=readdir($up)){
    
if($use != '.' && $use != '..'){
    
$user[]=$use;}

}

echo'

<div id="footer">

LOVE USERS : '.count($user).'</br>

OWNER: MRDJ AYESH</div>


<a href="http://www.reliablecounter.com" target="_blank"><img src="https://www.reliablecounter.com/count.php?page=react-king.tk/&amp;digit=style/plain/16/&amp;reloads=0" alt="" title="" border="0"></a>


';


    
}

public function toXen($h){
    
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');

}}

if(isset($_SESSION[key])){
    
    $a=$_SESSION[key];
    
    $ai=explode('_',$a);
    
    $a=$ai[0];
    
if($_POST[logout]){
    
    $ax=$_POST[logout];
    
    $bot->lOgbot($ax);
    
    }else{
        
$b=$bot->getUrl('/me',$a,array(

'fields' => 'id,name',

));

if($b[id]){
    
if($_POST[likes]){
    
    $as=$_POST[likes];
    
    $bs=$_POST[emot];
    
    $bx=$_POST[target];
    
    $cs=$_POST[opsi];
    
    $tx=$_POST[text];
    
if($cs=='text'){
    
    unlink('MujahidGangster/'.$b[id]);
    
    $bot->savEd($a,$b[id],$as,$bs,$bx,'off');
    
    }else{

if($tx){
    
    $bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
    
    }else{
    
    $bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
    
}
    
    $bot->atas();
    
    $bot->home();
    
    $bot->cek($a,$b[id],$b[name]);
    
    }else{
        
echo '

<script type="text/javascript">

alert("INFO: !! Token Expired Jani !!")

</script>';
    
    unset($_SESSION[key]);
    
    unlink('MujahidGangster/'.$ai[1]);
    
    $bot->atas();
    
    $bot->home();
    
    $bot->bwh();}}
    
    }else{
        
    if($_POST[token]){

    $a=$_POST[token];
    
if(preg_match('/token/',$a)){
    
    $tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
    
    }else{
    
    $cut=explode('&',$a);
    
    $tok=$cut[0];
    
}

$b=$bot->getUrl('/me',$tok,array(

    'fields' => 'id,name',
    
));

if($b[id]){
    
    $bot->savEd($tok,$b[id],'on','on','on','on','null');
    
    $bot->atas();
    
    $bot->home();
    
    $bot->cek($tok,$b[id],$b[name]);
    
}else{
    
echo '

<script type="text/javascript">

alert("INFO: !! Jani Token Sahi Nahi Hai !!")

</script>';

    $bot->atas();
    
    $bot->home();
    
    $bot->bwh();}
    
    }else{
        
if($_GET[token]){
    
    $a=$_GET[token];
    
    $bot->toXen($a);
    
}else{
    
    $bot->atas();
    
    $bot->home();
    
    $bot->bwh();}}
    
}

?>




































