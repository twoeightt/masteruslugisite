<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Мастер на час!</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">

</head>
<body>
<header>
	<div class="conteiner">
		<div class="header">
			<a href="glav.php	"><img src="images/home.png" alt="дом" class="logo"></a>
			<div class="dropdown">
				<button class="dropbtn">Мастер на час</button>
				<div class="dropdown-content">
				  <a href="uslugi.php">Услуги</a>
				  <a href="ceni.php">Цены</a>
				  <a href="voprosi.php">Частые вопросы</a>
				  <a href="contacts.php">Контакты</a>
				</div>
			</div>
			<div class="header__btn">
				<?php if ($_SESSION['user']){    
				?><form action="profile.php" method="get">
				<button type="submit" class="header__btn_reg" >Личный кабинет</button>
				</form>
			
				<?php } ?>
			</div>
			<?php if (!$_SESSION['user']) {?>

			<div class="header__btn">    
				<form action="check.php" method="get">
				<button type="submit" class="header__btn_reg" >Регистрация</button>
				</form>
				<form action="login.php" method="get">
				<button type="submit" class="header__btn_reg" >Вход</button>
				</form>
			</div>
		</div>
		</div>
			<? } ?>
			</div>
		</header>	

		<div class="conteiner">		
		<div class="blocks">
			<div class="block">
				<img src="images/elec.png" alt="электрика" class="info_element">
				<div class="info-element-text">
				Любой мелкий ремонт и другие задачи по дому
				</div>
			</div>
			<div class="block">
				<img src="images/plot.png" alt="электрика" class="info_element">
				<div class="info-element-text">
					Прием в течение часа или в удобное время  
			    </div>
			</div>
			<div class="block">
				<img src="images/santeh.png" alt="электрика" class="info_element">
				<div class="info-element-text">
					Низкие цены на услуги <br> гарантия до 1 года
				</div>
			</div>
		</div>
	</div>	

<div class="conteiner__footer"></div>
<div class="conteiner__footer"></div>

			
		<div class="conteiner" >
				<div class="text">
				Контакты	
				</div>  
			<div class="text__O" id="con">
				Телефон: +1 (111) 111-11-11 или +2 (222) 222-22-22<br>
				Адрес: г. Ижевск, ул. Тимирязева, д. 23а<br>
				Время работы: ежедневно, с 10:00 до 22:00<br>
				Электронная почта (для любых вопросов): info@m.ru<br>
				<br><br>
				Выезд мастеров осуществляется в Ижевске.<br>
				Мастер приедет в течение 1 часа или в удобное для Вас время
				<br><br>
			</div>
			<div class="text">
				<a class="dg-widget-link" 
				href="http://2gis.ru/izhevsk/firm/5770765303550780/center/53.238013,56.867653/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Ижевска</a>
				<div class="dg-widget-link"><a href="http://2gis.ru/izhevsk/firm/5770765303550780/photos/5770765303550780/center/53.238013,56.867653/zoom/17?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=photos">Фотографии компании</a></div>
				<div class="dg-widget-link"><a href="http://2gis.ru/izhevsk/center/53.238013,56.867653/zoom/16/routeTab/rsType/bus/to/53.238013,56.867653╎Средняя общеобразовательная школа №84 с углубленным изучением отдельных предметов?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Средняя общеобразовательная школа №84 с углубленным изучением отдельных предметов</a>
				</div><script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":800,"height":400,"borderColor":"#a3a3a3","pos":{"lat":56.867653,"lon":53.238013,"zoom":16},"opt":{"city":"izhevsk"},"org":[{"id":"5770765303550780"}]});
				</script><noscript style="color:#c00;font-size:16px;font-weight:bold;"></noscript>
			</div>  
		</div> 

		
			<div class="conteiner__footer"></div>
			<div class="conteiner__footer"></div>

		
	</div>
	<footer>
			<h3 align="center">Мы работает во всех районах Ижевска!</h3>
		</footer>	
</body> 
</html>  