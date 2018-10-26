<?php
    //  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
    session_start();
    ?>
    <html>
    <head>
	<meta charset="UTF-8">
	<title>Конференции</title>
	<link rel="stylesheet" href="../css/main.css">
	 <link rel="shortcut icon" href="../img/favicon.ico" type="img/ico">
</head>
    <body>
	<section id="services">
		<div class="container">
			<div class="title">
				<h2>
					Авторизация
				</h2>
				<p>
					Войдите или зарегиструетесь 
				</p>
			</div>
			<div class="services clearfix">
				<div class="services__item">
					
					<h3>Авторизация</h3>
					<p>
						Авторизация участников и организаторов
					</p>
					<form action="testreg.php" method="post">

    <!--****  testreg.php - это адрес обработчика. То есть, после нажатия на кнопку  "Войти", данные из полей отправятся на страничку testreg.php методом  "post" ***** -->
 <p>
    <label>Ваш логин:<br></label>
    <input name="login" type="text" size="15" maxlength="15">
    </p>


    <!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
 
    <p>

    <label>Ваш пароль:<br></label>
    <input name="password" type="password" size="15" maxlength="15">
    </p>

    <!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** --> 

    <p>
    <input type="submit" name="submit" value="Войти">

    <!--**** Кнопочка (type="submit") отправляет данные на страничку testreg.php ***** --> 
<br>
 <!--**** ссылка на регистрацию, ведь как-то же должны гости туда попадать ***** --> 
    </p></form>
				</div>
				<div class="services__item">
				
					<h3>Впервые на сайте ?</h3>
					<p>
						Регистрация
					</p>
					<a class="button" href="reg.php">Регистрация</a>
				</div>
				<div class="services__item">
					
					<h3>Вход</h3>
					<p>
						Вы вошли на сайт,как 
					</p>
					 <?php
    // Проверяем, пусты ли переменные логина и id пользователя
    if (empty($_SESSION['login']) or empty($_SESSION['id']))
     { 
    // Если пусты, то мы не выводим ссылку
	
    echo "<h3> гость</h3> <br></p> <a href='#'>Эта ссылка  доступна только зарегистрированным пользователям</a>";
   }
    else
    { 

    // Если не пусты, то мы выводим ссылку
    echo "<h3> ".$_SESSION['login']." </h3> <br> <a href='#'>Кабинет</a>";
	
   } 
    ?>
				</div>
			</div>
		</div>
	</section>
  <section id="login">
  
  </section>
   
   
    </body>
    </html>