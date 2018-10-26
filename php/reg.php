<html>
<head>
	<meta charset="UTF-8">
	<title>Регистрация</title>
	<link rel="stylesheet" href="../css/main.css">
	 <link rel="shortcut icon" href="../img/favicon.ico" type="img/ico">
</head>


    <body>
	
	
	<section id="services">
		<div class="container">
			<div class="title">
				<h2>
					Регистрация
				</h2>
				<p>
					Придумайте логин и пароль 
				</p>
			</div>
			<div class="services clearfix">
			<div class="services__item">
				
					<img src="../img/login.png" alt="Работа">
				</div>
				<div class="services__item">
					<form action="save_user.php" method="post">
    <!--**** save_user.php - это адрес обработчика.  То есть, после нажатия на кнопку "Зарегистрироваться", данные из полей  отправятся на страничку save_user.php методом "post" ***** -->
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
    <input type="submit" name="submit" value="Зарегистрироваться">
<!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** --> 
</p></form>
				</div>
				
				<div class="services__item">
				
					<img src="../img/login.png" alt="Работа">
				</div>
				
			</div>
		</div>
	</section>
	
	
   
    

 <section id="login">
  
  </section>
    </body>
    </html>