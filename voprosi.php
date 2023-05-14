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
		<div class="text">
			Частые вопросы<br><br>
		</div>  
		<div class="text__O">
			<strong>Мастера компании выезжают на объекты со своим инструментом?</strong><br>
			
			Да, конечно. В распоряжении мастеров – весь необходимый для решения задач любой сложности профессиональный инструмент.
			<br><br>
			<strong>Как вы работаете?</strong>
			<br>
			Сотрудничество происходит в следующем порядке:
			Консультация. Диспетчеры отвечают на все ваши вопросы по заинтересовавшей услуге, уточняют стоимость и особенности выполняемых работ.
			Передача задачи узкому специалисту. Только полностью разобравшись в вашей проблеме, диспетчер передает ее на конкретный участок.
			Выезд мастеров на объект. После контрольного звонка мастера выезжают на объект заказчика для предоставления заказанных услуг.
			Сдача объекта и расчет. Мастера сдают объект заказчику и получают оплату в указанном в договоре размере.
			<br><br>
			<strong>Предоставляется ли гарантия?</strong>
			<br>
			Да, для подтверждения профессионализма наших сотрудников и высокого качества выполняемых ими работ мы выдаем гарантию сроком до 1 года.
			<br><br>
			<strong>Как быстро приезжает мастер?</strong>
			<br>
			Среднее время приезда мастера на объект по заявке – один час.
			<br><br>
			<strong>В каком регионе вы работаете?</strong>
			<br>
			Наши сотрудники выезжают на объекты, расположенные в Ижевске. Минимальный заказ – 990 рублей. Более точную информацию вы получите у диспетчера при оформлении заявки.
			<br><br>
			<strong>Как оплатить услуги?</strong>
			<br>
			Мы сотрудничаем и с физическими, и с юридическими лицами, осуществляя наличный и безналичный расчет.<br>
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