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

<script type="text/javascript">
function myFunc() {
  var x = document.getElementById("spoiler-body");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
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
				?>
				<br><br><br>
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
		<div class="conteiner">
		<div class="text">
			Личный кабинет<br><br>

		</div>  
			</div>
		<div class="conteiner-profile" align="center">
			<table id="profile_table">
			<tr><td align="right"><strong>Имя:</strong></td>
			<td align="left" ><?= '' . $_SESSION['user']['name'].''; ?></td></tr>
			<tr><td align="right"><strong>Фамилия:</strong></td>
			<td align="left"><?= '' . $_SESSION['user']['surname'].''; ?></td></tr>
			<tr><td align="right"><strong>Электронная почта:</strong></td>
			<td align="left"><?= '' . $_SESSION['user']['email'].''; ?></td></tr><br><br>
			<tr><td align="right"><strong>Номер телефона:  </strong></td>
			<td align="left" ><?= '' . $_SESSION['user']['phone'].''; ?></td></tr><br>	<br>
			</table>
		<form class="form" method="post" action="order.php">
			<button  class=" button" type="submit">Оставить заявку</button><br>
			<strong>Текущая заявка:</strong><br><br>
		<?= '<p class="order_msg" >' . $_SESSION['user']['Order_Name'].'</p>'; ?><br>	
		</form>
			<?php 
				if ($_SESSION['message']) { 
					echo '<p class="msg-reg">' . $_SESSION['message'].'</p>';
				} unset($_SESSION['message'])
								?>			
			
		</div>

				</div>
		<div class="conteiner__footer"></div>

		
		<div class="conteiner__footer"></div>
		<footer>
			<h3 align="center">Мы работает во всех районах Ижевска!</h3>
		</footer>
</body> 
</html>  