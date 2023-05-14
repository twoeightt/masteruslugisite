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
		<div class="conteiner__footer"></div>
		<div class="conteiner">		
        <div class="login">
		<div class="conteiner-login">
		    <form class="form" action="vendor/signin.php" method="post">
				<label>Email</label><br>
				<input type="email" name="email"><br>
				<label>Пароль</label><br>
				<input type="password" name="password"><br>
				<button  class=" button" type="submit">Войти</button>
            </form>
			</div>	
			<?php 
								if ($_SESSION['message']) { 
									echo '<p class="msg-reg">' . $_SESSION['message'].'</p>';
								} unset($_SESSION['message'])
								?>	
        </div>	
							
        <div class="conteiner__footer"></div>

		<div class="conteiner__footer"></div>
		<footer>
			<h3 align="center">Мы работает во всех районах Ижевска!</h3>
		</footer>
</body> 
</html>  