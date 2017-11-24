<!DOCTYPE html>
<html lang="pl">
<head>
<title>Salon pielęgnacji</title>
<meta charset="utf-8"/>
<link rel="stylesheet" href="salon.css" type="text/css" media="all"/>
</head>
<body>
		<header>
			<h1>SALON PIELĘGNACJI PSÓW I KOTÓW</h1>
		</header>
		
		<div id="lewy">
			<h3>SALON ZAPRASZA W DNIACH</h3>
				<ul>
					<li>Poniedziałek, 12:00 - 18:00</li>
					<li>Wtorek, 12:00 - 18:00</li>
				</ul>
			<a href="pies.jpg"><img src="pies-mini.jpg"/></a>
			<p>Umów się telefonicznie na wizytę lub po prostu przyjdź! </p>
		</div>
		
		<div id="srodek">
			
			Wynik skryptu nr 1: 
			<?php
			$p = mysql_connect('localhost', 'root') or Die('padl serwer');
			$p = mysql_select_db('salon')or Die('padla baza');
			$wynik = mysql_fetch_array('SELECT imie, rodzaj, nastepna_wizyta, telefon FROM zwierzeta WHERE nastepna_wizyta IS NOT NULL ');
			echo($wynik);
			?>
		</div>
		<div id="prawy">
			<h3>Usługi</h3>
			Wynik skryptu nr 2:
		</div>

</body>
</html>