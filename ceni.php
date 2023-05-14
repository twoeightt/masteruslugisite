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
			Краткий прайс лист на услуги:<br><br>
			Услуги сантехника<br>
		</div>  
			<div class="text__O">
			<table class="table">
  <thead>
    <tr>
      <th>Название вида работ</th>
      <th>Стоимость, руб</th>
    </tr>

  </thead>

  <tbody>



	<tr>
      <td>Установка раковин, моек </td>
      <td> от 950 ₽</td>
    </tr>
	<tr>
      <td>		Установка ванны </td>
      <td> от 1600 ₽</td>
    </tr>
	<tr>
      <td>		Установка душевых кабин </td>
      <td> от 4500 ₽</td>
    </tr>
	<tr>
      <td>		Установка полотенцесушителя </td>
      <td> от 1200 ₽</td>
    </tr>
	<tr>
      <td>		Установка смесителя </td>
      <td> от 650 ₽</td>
    </tr>
	<tr>
      <td>		Ремонт смесителя </td>
      <td> от 390 ₽</td>
    </tr>
	<tr>
      <td>		Установка унитазов </td>
      <td> от 2000 ₽</td>
    </tr>
	<tr>
      <td>		Ремонт унитазов </td>
      <td> от 200 ₽</td>
    </tr>
	<tr>
      <td>		Установка и замена канализационных труб </td>
      <td> от 650 ₽ (пог. м.)</td>
    </tr>
	<tr>
      <td>		Установка и замена труб водоснабжения </td>
      <td> от 1200 ₽ (пог. м.)</td>
    </tr>
	<tr>
      <td>		Установка и ремонт биде</td>
      <td> от 2300 ₽</td>
    </tr>
	<tr>
      <td>		Установка фильтра для воды</td>
      <td> от 550 ₽</td>
    </tr>
	<tr>
      <td>		Установка фильтра тонкой очистки</td>
      <td> от 550 ₽</td>
    </tr>
	<tr>
      <td>		Установка фильтра грубой очистки</td>
      <td> от 550 ₽</td>
    </tr>
	<tr>
      <td>		Замена картриджа фильтра</td>
      <td> от 700 ₽</td>
    </tr>
	<tr>
      <td>		Герметизация швов раковины, ванны</td>
      <td> от 220 ₽</td>
    </tr>
	<tr>
      <td>		Установка бачка унитаза</td>
      <td> от 1400 ₽</td>
    </tr>
	<tr>
      <td>		Установка арматуры унитаза</td>
      <td> от 1400 ₽</td>
    </tr>
	<tr>
      <td>		Прочистка канализации, устранение засоров</td>
      <td> от 1600 ₽</td>
    </tr>
	<tr>
      <td>		Установка и подключение стиральных машин</td>
      <td> от 1200 ₽</td>
    </tr>
	<tr>
      <td>		Установка и подключение посудомоечной машины</td>
      <td> от 1200 ₽</td>
    </tr>
	<tr>
      <td>		Установка радиаторов отопления</td>
      <td> от 1500 ₽</td>
    </tr>
	<tr>
      <td>		Установка водонагревателя проточного</td>
      <td> от 1300 ₽</td>
    </tr>
	<tr>
      <td>		Установка водонагревателя накопительного</td>
      <td> от 1800 ₽</td>
    </tr>
	<tr>
      <td>		Монтаж газовой колонки</td>
      <td> от 2200 ₽</td>
    </tr>
	<tr>
      <td>		Замена гофры унитаза</td>
      <td> от 700 ₽</td>
    </tr>
	<tr>
      <td>		Подключение гребенки отопления</td>
      <td> от 1500 ₽</td>
    </tr>
	<tr>
      <td>		Установка экрана под ванну</td>
      <td> от 750 ₽</td>
    </tr>
	<tr>
      <td>		Установка душевого поддона</td>
      <td> от 2000 ₽</td>
    </tr>
	<tr>
      <td>		Монтаж мойдодыра</td>
      <td> от 1500 ₽</td>
    </tr>
	<tr>
      <td>		Установка писсуара</td>
      <td> от 1400 ₽</td>
    </tr>
	<tr>
      <td>		Установка сифона раковины</td>
      <td> от 900 ₽</td>
    </tr>
	<tr>
      <td>		Монтаж электрического полотенцесушителя</td>
      <td> от 1200 ₽</td>
    </tr>
	<tr>
      <td>		Устранение течи под ванной</td>
      <td> от 590 ₽</td>
    </tr>
	<tr>
      <td>		Демонтаж унитаза</td>
      <td> от 850 ₽</td>
    </tr>
	<tr>
      <td>		Монтаж шторок</td>
      <td> от 1500 ₽</td>
    </tr>

	<tr>
      <td>		Демонтаж ванны</td>
      <td> от 1000 ₽</td>
    </tr>
	<tr>
      <td>		Демонтаж раковин, моек</td>
      <td> от 550 ₽</td>
    </tr>
	<tr>
      <td>		Установка сантехнического люка</td>
      <td> от 990 ₽</td>
    </tr>

			</div>  
			</tbody>

</table>
			<div class="text">
				Услуги электрика<br><br>
			</div>  
				<div class="text__O">
				<table class="table">
  <thead>
    <tr>
      <th>Название вида работ</th>
      <th>Стоимость, руб</th>
    </tr>
  </thead>
  <tbody>
<tr>
  <td>Установка розеток и выключателей</td>
  <td>от 180 ₽</td>
</tr>

<tr>
      <td>	Установка розеток и выключателей</td>
  <td> от 180 ₽</td>
</tr>
<tr>
      <td>Установка люстры</td>
  <td> от 750 ₽</td>
</tr>
<tr>
      <td>			Установка светильников</td>
  <td> от 200 ₽</td>
</tr>
<tr>
      <td>			Установка и подключение бытовой техники</td>
  <td> от 850 ₽</td>
</tr>
<tr>
      <td>			Установка автоматов, узо, диф.</td>
  <td> от 250 ₽</td>
</tr>
<tr>
      <td>			Монтаж электрощитка</td>
  <td> от 1200 ₽</td>
</tr>
<tr>
      <td>			Установка дверного звонка</td>
  <td> от 350 ₽</td>
</tr>
<tr>
      <td>			Монтаж и замена электропроводки</td>
  <td> от 80 ₽ (пог. м.)</td>
</tr>
<tr>
      <td>			Монтаж теплого пола</td>
  <td> от 500 ₽</td>
</tr>
<tr>
      <td>			Монтаж распаечной коробки</td>
  <td> от 450 ₽</td>
</tr>
<tr>
      <td>			Установка и подключение электрической плиты</td>
  <td> от 550 ₽</td>
</tr>
<tr>
      <td>			Установка люстры бра</td>
  <td> от 400 ₽</td>
</tr>
<tr>
      <td>	Замена ламп</td>
  <td> от 150 ₽</td>
</tr>
<tr>
      <td>		Сборка люстры</td>
  <td> от 450 ₽</td>
</tr>
				</div> 
				</tbody>
			</table> 
			<div class="text">
				Услуги столяра плотника<br><br>
			</div>  
				<div class="text__O">
				<table class="table">
  <thead>
    <tr>
      <th>Название вида работ</th>
      <th>Стоимость, руб</th>
    </tr>
  </thead>
  <tbody>
				<tr>
      <td>Установка входных дверей</td>
  <td> от 2200 ₽</td>
</tr>
	  <tr>
      <td>Монтаж межкомнатных дверей</td>
  <td> от 2200 ₽</td>
</tr>
	  <tr>
      <td>Замена и установка замков</td>
  <td> от 550 ₽</td>
</tr>
	  <tr>
      <td>Установка и замена дверных ручек</td>
  <td> от 400 ₽</td>
</tr>
	  <tr>
      <td>Врезка петель</td>
  <td> от 900 ₽</td>
</tr>
	  <tr>
      <td>Перестановка мебелиот</td>
  <td>от 500 ₽</td>
</tr>
						<tr>
      <td>Монтаж варочной панели</td>
  <td> от 650 ₽</td>
</tr>
	  <tr>
      <td>Установка мойки на кухне</td>
  <td> от 700 ₽</td>
</tr>
	  <tr>
      <td>Замена личинки замка</td>
  <td> от 430 ₽</td>
</tr>
				</div>
				</tbody>

</table>
			</div>	  
			

		
	</div>
			</div>
			</div>
	<footer>
			<h3 align="center">Мы работает во всех районах Ижевска!</h3>
		</footer>
</body> 
</html>  