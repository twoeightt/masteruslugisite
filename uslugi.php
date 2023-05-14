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
		<div class="conteiner">		
		<div class="blocks">
			<div class="block2">
				<a class="info__text" >Услуги электрика</a><br><br>
				<div class="text__t" id="block">
				Установка и замена раковины<br>
				Установка ванны<br>
				Установка душевых кабин<br>
				Установка полотенцесушителя<br>
				Установка смесителя<br>
				Установка и ремонт унитазов<br>
				Замена канализационных труб<br>
				Замена трубы водоснабжения<br>
				Установка и ремонт биде<br>
				Установка фильтра для воды <br>
				Герметизация швов в ванной<br>
				Установка и ремонт бачка унитаза<br>
				Прочистка канализации<br>
				Установка стиральных машин<br>
				Подключение посудомоечной машины<br>
				Установка радиаторов отопления<br>
				Установка водонагревателя<br>
				Монтаж газовой колонки<br>
				Замена гофры унитаза<br>
				Подключение гребенки отопления<br>
				Установка экрана под ванну<br>
				Установка душевого поддона<br>
				Монтаж мойдодыра<br>
				Установка сифона на раковину<br>
			</div>
			</div>
			<div class="block2"><a class="info__text">Услуги плотника</a><br><br>
				<div class="text__t" id="block">
				Установка входных дверей<br>
				Установка межкомнатных дверей<br>
				Замена замков<br>
				Установка дверных ручек<br>
				Врезка петель<br>
				Перестановка мебели<br>
				Установка варочной панели<br>
				Установка мойки на кухню<br>
			</div>
			</div>
			<div class="block2"><a class="info__text">Услуги сантехника</a><br><br>
				<div class="text__t" id="block">
				Установка розеток<br>
				Установка выключателей<br>
				Установка люстры и монтаж светильников<br>
				Подключение бытовой техники<br>
				Установка автоматов в электрощитке<br>
				Монтаж электрощита<br>
				Установка и замена дверных разговоров<br>
				Монтаж и замена электропроводки<br>
				Монтаж и ремонт теплого пола<br>
				Монтаж распаечной коробки<br>
				Подключение прибрежной плиты<br>
				Установка БРА<br>
				Замена лампы<br>
			</div>
			</div>
    	</div>
		<div class="conteiner__footer"></div>
			<div class="conteiner__footer"></div>
		
		<div class="conteiner__footer"></div>
	</div>	
	<footer>
			<h3 align="center">Мы работает во всех районах Ижевска!</h3>
		</footer>
</body> 
</html>  