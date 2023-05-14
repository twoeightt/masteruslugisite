<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Мастер на час!</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript" src="https:/.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>


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
				<form action="logout.php" method="POST" >
                <input type="submit" value="Выйти" name="exit" class="header__btn_reg">
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
			<? } ?>

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

</div>
<div class="conteiner__footer"></div>
<div class="conteiner__footer"></div>
<div class="conteiner-profileorder">
<form id="order" method="POST" action="vendor/order.php">
<div class="conteiner-profileorder_block">
	<div>
				<input type="checkbox" name="Order_Name[]" value="Установка и замена раковины">
				Установка и замена раковины<br>
				<input type="checkbox" name="Order_Name[]" value="Установка ванны">
				Установка ванны<br>
				<input type="checkbox" name="Order_Name[]" value="Установка душевых кабин">
				Установка душевых кабин<br>
				<input type="checkbox" name="Order_Name[]" value="Установка полотенцесушителя">
				Установка полотенцесушителя<br>
				<input type="checkbox" name="Order_Name[]" value="Установка смесителя">
				Установка смесителя<br>
				<input type="checkbox" name="Order_Name[]" value="Установка и ремонт унитазов">
				Установка и ремонт унитазов<br>
				<input type="checkbox" name="Order_Name[]" value="Замена канализационных труб">
				Замена канализационных труб<br>
				<input type="checkbox" name="Order_Name[]" value="Замена трубы водоснабжения">
				Замена трубы водоснабжения<br>
				<input type="checkbox" name="Order_Name[]" value="Установка и ремонт биде">
				Установка и ремонт биде<br>
				<input type="checkbox" name="Order_Name[]" value="Установка фильтра для воды">
				Установка фильтра для воды<br>
				<input type="checkbox" name="Order_Name[]" value="Герметизация швов в ванной">
				Герметизация швов в ванной<br>
				<input type="checkbox" name="Order_Name[]" value="Установка и ремонт бачка унитаза">
				Установка и ремонт бачка унитаза<br>
				<input type="checkbox" name="Order_Name[]" value="Прочистка канализации">
				Прочистка канализации<br>
				<input type="checkbox" name="Order_Name[]" value="Установка стиральных машин">
				Установка стиральных машин<br>
				<input type="checkbox" name="Order_Name[]" value="Подключение посудомоечной машины">
				Подключение посудомоечной машины<br>
				<input type="checkbox" name="Order_Name[]" value="Установка радиаторов отопления">
				Установка радиаторов отопления<br>
				<input type="checkbox" name="Order_Name[]" value="Установка водонагревателя">
				Установка водонагревателя<br>
				<input type="checkbox" name="Order_Name[]" value="Монтаж газовой колонки">
				Монтаж газовой колонки<br>
				<input type="checkbox" name="Order_Name[]" value="Замена гофры унитаза">
				Замена гофры унитаза<br>
				<input type="checkbox" name="Order_Name[]" value="Подключение гребенки отопления">
				Подключение гребенки отопления<br>
				<input type="checkbox" name="Order_Name[]" value="Установка экрана под ванну">
				Установка экрана под ванну<br>
				<input type="checkbox" name="Order_Name[]" value="Установка душевого поддона">
				Установка душевого поддона<br>
				<input type="checkbox" name="Order_Name[]" value="Монтаж мойдодыра">
				Монтаж мойдодыра<br>
			</div>
			<div class="dvaa">
				<input type="checkbox" name="Order_Name[]" value="Установка сифона на раковину">
				Установка сифона на раковину<br>
				<input type="checkbox" name="Order_Name[]" value="Установка входных дверей">
				Установка входных дверей<br>
				<input type="checkbox" name="Order_Name[]" value="Установка межкомнатных дверей">
				Установка межкомнатных дверей<br>
				<input type="checkbox" name="Order_Name[]" value="Замена замков">
				Замена замков<br>

				<input type="checkbox" name="Order_Name[]" value="Установка дверных ручек">
				Установка дверных ручек<br>
				<input type="checkbox" name="Order_Name[]" value="Врезка петель">
				Врезка петель<br>
				<input type="checkbox" name="Order_Name[]" value="Перестановка мебели">
				Перестановка мебели<br>
				<input type="checkbox" name="Order_Name[]" value="Установка варочной панели">
				Установка варочной панели<br>
				<input type="checkbox" name="Order_Name[]" value="Установка мойки на кухню">
				Установка мойки на кухню<br>
				<input type="checkbox" name="Order_Name[]" value="Установка розеток">
				Установка розеток<br>
				<input type="checkbox" name="Order_Name[]" value="Установка выключателей">
				Установка выключателей<br>
				<input type="checkbox" name="Order_Name[]" value="Установка люстры и монтаж светильников">
				Установка люстры и монтаж светильников<br>
				<input type="checkbox" name="Order_Name[]" value="Подключение бытовой техники">
				Подключение бытовой техники<br>
				<input type="checkbox" name="Order_Name[]" value="Установка автоматов в электрощитке">
				Установка автоматов в электрощитке<br>
				<input type="checkbox" name="Order_Name[]" value="Монтаж электрощита">
				Монтаж электрощита<br>
				<input type="checkbox" name="Order_Name[]" value="Установка и замена дверных разговоров">
				Установка и замена дверных разговоров<br>
				<input type="checkbox" name="Order_Name[]" value="Монтаж и замена электропроводки">
				Монтаж и замена электропроводки<br>
				<input type="checkbox" name="Order_Name[]" value="Монтаж и ремонт теплого пола">
				Монтаж и ремонт теплого пола<br>
				<input type="checkbox" name="Order_Name[]" value="Монтаж распаечной коробки">
				Монтаж распаечной коробки<br>
				<input type="checkbox" name="Order_Name[]" value="Подключение прибрежной плиты">
				Подключение прибрежной плиты<br>
				<input type="checkbox" name="Order_Name[]" value="Установка БРА">
				Установка БРА<br>
				<input type="checkbox" name="Order_Name[]" value="Замена лампы">
				Замена лампы<br>
				<input type="checkbox" name="Order_Name[]" value="Другое">
				Другое<br>
				</div>
			</div>
			<div class="order_btn">
			<button  class="btn_order" type="submit">Отправить заявку</button>
			</div>	
		</form>
			</div>
			</div>
			<div class="conteiner__footer"></div>
			
		<div class="conteiner__footer"></div>
		<div class="conteiner__footer"></div>
		<div class="conteiner__footer"></div>

		<footer>
			<h3 align="center">Мы работает во всех районах Ижевска!</h3>
		</footer>
</body> 
</html>  