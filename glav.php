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
	
			<div ><h2 align="center" class="zagolovok">Мастер на час - если в квартире <br> поломка у Вас!</h2></div>
		
		<div class="all">
    <input checked type="radio" name="respond" id="desktop">
      <article id="slider">
          <input checked type="radio" name="slider" id="switch1">
          <input type="radio" name="slider" id="switch2">
          <input type="radio" name="slider" id="switch3">
          <input type="radio" name="slider" id="switch4">
          <input type="radio" name="slider" id="switch5">
        <div id="slides">
          <div id="overflow">
            <div class="image">
              <article><img src="images\1.png" height="400" width="940"></article>
              <article><img src="images\2.png" height="400" width="940"></article>
              <article><img src="images\3.png" height="400" width="940"></article>
              <article><img src="images\4.png" height="400" width="940"></article>
              <article><img src="images\5.png" height="400" width="940"></article>
            </div>
          </div>
        </div>
        <div id="controls">
          <label for="switch1"></label>
          <label for="switch2"></label>
          <label for="switch3"></label>
          <label for="switch4"></label>
          <label for="switch5"></label>
        </div>
        <div id="active">
          <label for="switch1"></label>
          <label for="switch2"></label>
          <label for="switch3"></label>
          <label for="switch4"></label>
          <label for="switch5"></label>
        </div>
      </article>
  </div>
				
		<div class="conteiner" >		
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
			
			<div class="text" >
				Домашние мастера	
			</div>  
			<div class="text__O" id="block">
			Ищете компанию, мастера которой могли 
			бы качественно и быстро выполнять мелкие 
			ремонтные работы и предоставлять бытовые услуги?
			Компания «Домашние мастера» готовы оперативно
			решать любые неполадки, которые могут возник
			нуть при эксплуатации мебели, бытовой техники и коммуникаций.<br><br>
			Сотрудники компании - мастера на все руки, ко
			торые благодаря большому опыту работы
			и высокой квалификации могут решать быт
			овые проблемы любой сложности. В «Домашних мастерах» 
			работают универсалы, что позволяет 
			гарантировать максимальное эффективное предоставление услуг.
			
			</div>  

			

			<div class="text">
				Мастер на час		
			</div>  
			<div class="text__O" id="block">
			Если вы заинтересованы в высоком 
			уровне сервиса при доступных расценках,
			 в фирме «Домашние мастера» вы можете 
			 недорого заказать услуги:
			 <br><br>
			 ЭЛЕКТРИКА. Установка выключателей 
			 света и розеток, монтаж люстр и 
			 других осветительных приборов, 
			 подключение электроплит, установка 
			 автоматов в щитке – далеко не полный 
			 спектр услуг, которые вам готовы 
			 предоставить опытные электрики компании 
			 «Домашние мастера».
			 <br><br>
			 ПЛОТНИКА. Выполнение работ, связанных с 
			 обработкой, установкой и демонтажем 
			 деревянных изделий, входит в компетенцию 
			 плотника. Двери, окна, фурнитура для дверей 
			 и окон будут качественно установлены, а 
			 мебель профессионально и надежно собрана 
			 благодаря ответственной и аккуратной работе 
			 плотников.
			 <br><br>
			 САНТЕХНИКА. Раковины, ванны, душевые 
			 кабины, смесители и краны – сантехники 
			 смонтируют сантехническое оборудование, 
			 не повредив его и обеспечив бесперебойную работу.
			
		</div>  
		<div class="text">
		Мастер на час в Ижевске – цена	
				
		</div>  
		<div class="text__O" id="block">
			С ценами на услуги компании «Домашние мастера» 
			вы можете ознакомиться, просмотрев ПРАЙС на сайте компании. 
			 <br><br>
			 На сайте вы сможете найти и фото, которые
			  подтверждают высокое качество выполняемых 
			  работ, и отзывы клиентов, которые обращались 
			  к услугам компании.
			 
		</div>
		
		<div class="text">
		Вызвать мастера на дом			
		</div>  
		<div class="text__O" id="block">
			Услуги мужа на час дешево в квартирах и 
			частных домах Ижевска? С компанией 
			«Домашние мастера» это станет возможным!
			 <br>
			 Почему лишь единожды обратившись к нам, 
			 заказчики становятся постоянными клиентами?
			  Потому, что мы готовы обеспечивать высокое
			   качество и оперативность проведения работ 
			   всегда! В штате компании – исключительно 
			   профессионалы, поэтому халатное отношение 
			   к выполнению обязанностей исключено!
			 <br><br>			 
			 Звоните или оформляйте заявку через форму на сайте.
			  Мы приедем быстро, если выше дело срочное – в течение 
			  часа, и эффективно решим бытовые проблемы!
		</div> 
			</div>
		
	</div>	
	<footer>
			<h3 align="center">Мы работает во всех районах Ижевска!</h3>
		</footer>

</body> 
</html>