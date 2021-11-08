<?php 
	$title="Форма регістрації"; 
	require "db.php"; // подключаем файл для соединения с БД
	require __DIR__ . '/header.php'; // подключаем шапку проекта
	
?>
	<div class="pix_section pix_nav_menu pix_scroll_header normal pix-over-header pix-padding-v-20" data-scroll-bg="#201f1d">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-xs-12 pix-inner-col col-sm-10 column ui-droppable">
					<div class="pix-content">
						<nav class="navbar navbar-default pix-no-margin-bottom pix-navbar-default">
							<div class="container-fluid">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#pix-navbar-collapse" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<a class="navbar-brand logo-img logo-img-a pix-adjust-height" href="index.php"><img src="images\main\city.png" alt="" class="img-responsive pix-logo-img"></a>
								</div>
								<div class="collapse navbar-collapse" id="pix-navbar-collapse">
									<ul class="nav navbar-nav navbar-right media-middle pix-header-nav pix-adjust-height" id="pix-header-nav">
										<li class="dropdown">
											<a href="index.php" class="pix-gray">
												Головна
											</a>
										</li>
										<li class="dropdown"> 
											<a href="#" class="dropdown-toggle pix-gray" data-toggle="dropdown">
												Розробники
											</a>
											<ul class="dropdown-menu dropdown-menu-left">
												<li>
													<a href="#" class="null" data-toggle="null">Мінжулін Євгеній</a>
												</li>
												<li>
													<a href="#" class="null" data-toggle="null">Тихохід Євген</a>
												</li>
												<li>
													<a href="#" class="null" data-toggle="null">Ковальський Роман</a>
												</li>
												<li>
													<a href="#" class="null" data-toggle="null">Кобзарь Олександр</a>
												</li>
												<li>
													<a href="#" class="null" data-toggle="null">Боярко Данііл</a>
												</li>
												<li>
													<a href="#" class="null" data-toggle="null">Кирилескул Гліб</a>
												</li>
												<li>
													<a href="#" class="null" data-toggle="null">Воробйов Даниїл</a>	
												</li>
											</ul>
										</li>

										<li class="dropdown"> 
											<a href="#" class="dropdown-toggle pix-gray" data-toggle="dropdown">
												Контакты
											</a>
											<ul class="dropdown-menu dropdown-menu-left">
												<li>
													<a href="https://www.instagram.com/_cities_game_/?hl=ru" class="null" data-toggle="null">Direct</a>
												</li>
												<li>
													<a href="https://t.me/citygamel" class="null" data-toggle="null">Telegram</a>	
												</li>
											</ul>
										</li>
										<li class="dropdown"> 
											<a href="#" class="dropdown-toggle pix-gray" data-toggle="dropdown">
												Завантажити
											</a>
											<ul class="dropdown-menu dropdown-menu-left">
											<!--
												<li>
													<a href="#" class="null" data-toggle="null">Android</a>
												</li>
											-->
												<li>
													<a href="download.html" class="null" data-toggle="null">ПК</a>
												</li>
											<!--
												<li>
													<a href="#" class="null" data-toggle="null">WEB-program</a>
												</li>
											-->
											</ul>
										</li>
										<li class="dropdown"> 
											<a href="#" class="dropdown-toggle pix-gray" data-toggle="dropdown">
												Онлайн
											</a>
											<ul class="dropdown-menu dropdown-menu-left">
												<li>
													<a href="https://t.me/City_games_bot" class="null" data-toggle="null">Телеграм бот</a>
												</li>
												<li>
													<a href="\webgame\main.html" class="null" data-toggle="null">WEB</a>
												</li>
											</ul>
										</li>
									</ul>		
								</div>
							</div>
						</nav>
					</div>
				</div>
				<div class="col-md-2 col-xs-12 pix-inner-col col-sm-2 column ui-droppable">
					<div class="pix-content pix-adjust-height text-right">

						<div class="pix-header-item">
							<a href="https://www.donationalerts.com/r/glebychh" class="small-social">
								<i class="pixicon-wallet22 big-icon-50 pix-slight-white"></i>
							</a>
							<a href="mailto:citiesgame0@gmail.com" class="small-social">
								<i class="pixicon-mail2 big-icon-50 pix-slight-white"></i>
							</a>
							<a href="https://www.instagram.com/_cities_game_/?hl=ru" class="small-social">
								<i class="pixicon-instagram4 big-icon-50 pix-slight-white"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	

	<div class="pix_section pix-padding-v-130 pix-restaurant-1">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-xs-12">
					<div class="pix-content text-center">
						<h1 class="pix-white pix-no-margin-top pix-small-width-text pix-margin-bottom-20">
							<span class="pix_edit_text"><strong>Cities game </strong></span>
						</h1><br>
						<h6 class="pix-slight-white pix-small-width-text pix-margin-bottom-20 pix-no-margin-top">
							<span class="pix_edit_text"> 
									На цьому сайті ви зможете знайти гру "Cities game".І це абсолютно безкоштовно!!!
							</span>
						</h6>
					</div>
				</div>
			</div>
		</div>
	</div>
	<form action="sing_up.php" method="post">
		<div class="container">
			<h1>
				Регістрація
			</h1>
			<p>
			Заповніть будь ласка форму.
			</p>
			<label for="name">
				<b>
					Name
				</b>
			</label>
			<input type="text" placeholder="Enter Name" name="name" required>
			<label for="login">
				<b>
					Login
				</b>
			</label>
			<input type="text" id="login" placeholder="Enter Login" name="login" required>
			<label for="email">
				<b>
					Email
				</b>
			</label>
			<input type="text" placeholder="Enter Email" name="email" required>
			<label for="password">
				<b>
					Password
				</b>
			</label>
			<input type="password" placeholder="Enter Password" name="password" required>
			<label for="password_2">
				<b>
					Repeat  password
				</b>
			</label>
			<input type="password" placeholder="Enter Repeat password" name="password_2" required>

			<div class="g-recaptcha" data-sitekey="6LfbMLIcAAAAAGVEFot0k8u1vrgh3Ov8BVB3AjJd"></div>
<?php
	// Создаем переменную для сбора данных от пользователя по методу POST
	$data = $_POST;
	
	// Пользователь нажимает на кнопку "Зарегистрировать" и код начинает выполняться
	if(isset($data['registerbt'])) {
	
	        // Регистрируем
	        // Создаем массив для сбора ошибок
		$errors = array();
	
		// Проводим проверки
	        // trim — удаляет пробелы (или другие символы) из начала и конца строки
		if(trim($data['login']) == '') {
	
			$errors[] = "Введіть логін!";
		}
	
		if(trim($data['email']) == '') {
	
			$errors[] = "Введіть Email";
		}
	
	
		if(trim($data['name']) == '') {
	
			$errors[] = "Введіть Ім'я";
		}
	
	
		if($data['password'] == '') {
	
			$errors[] = "Введіть пароль";
		}
	
		if($data['password_2'] != $data['password']) {
	
			$errors[] = "Повторний пароль введено не вірно!";
		}
	         // функция mb_strlen - получает длину строки
	        // Если логин будет меньше 5 символов и больше 90, то выйдет ошибка
		if(mb_strlen($data['login']) < 5 || mb_strlen($data['login']) > 15) {
	
		    $errors[] = "Неприпустима довжина логіна";
	
	    }
	
	    if (mb_strlen($data['name']) < 3 || mb_strlen($data['name']) > 15){
		    
		    $errors[] = "Неприпустима довжина імені";
	
	    }
	
	
	    if (mb_strlen($data['password']) < 2 || mb_strlen($data['password']) > 16){
		
		    $errors[] = "Неприпустима довжина пароля (від 2 до 16 символів)";
	
	    }
	
	    // проверка на правильность написания Email
	    if (!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i", $data['email'])) {
	
		    $errors[] = 'Невірно введений е-mail ';
	    
	    }
	
		// Проверка на уникальность логина
		if(R::count('users', "login = ?", array($data['login'])) > 0) {
	
			$errors[] = "Вибачте, такий користувач вже існує!";
		}
	
		// Проверка на уникальность email
	
		if(R::count('users', "email = ?", array($data['email'])) > 0) {
	
			$errors[] = "Користувач з таким Email вже існує!";
		}
		
	
		if(empty($errors)) {
			
			// Все проверено, регистрируем
			// Создаем таблицу users
			$user = R::dispense('users');
	
	                // добавляем в таблицу записи
			$user->login = $data['login'];
			$user->email = $data['email'];
			$user->name = $data['name'];
	
			// Хешируем пароль
			$user->password = password_hash($data['password'], PASSWORD_DEFAULT);

			$recaptcha = $_POST['g-recaptcha-response'];

			if(!empty($recaptcha)) {
				$recaptcha = $_REQUEST['g-recaptcha-response'];
		    	//Сюда пишем СЕКРЕТНЫЙ КЛЮЧ, который нам присвоил гугл
		    	$secret = '6LfbMLIcAAAAAGgywhO-Be9lFlet-TK-Gac9SahR';
		    	//Формируем utl адрес для запроса на сервер гугла
		    	$url = "https://www.google.com/recaptcha/api/siteverify?secret=".$secret ."&response=".$recaptcha."&remoteip=".$_SERVER['REMOTE_ADDR'];
		 	
		    	//Инициализация и настройка запроса
		    	$curl = curl_init();
		    	curl_setopt($curl, CURLOPT_URL, $url);
		    	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		    	curl_setopt($curl, CURLOPT_TIMEOUT, 10);
		    	curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16");
		    	//Выполняем запрос и получается ответ от сервера гугл
		    	$curlData = curl_exec($curl);
		 	
		    	curl_close($curl); 
		    	//Ответ приходит в виде json строки, декодируем ее
		    	$curlData = json_decode($curlData, true);
		    	if($curlData['success']) {
		 			R::store($user);
		 			// Переменная $headers нужна для Email заголовка
        			$headers  = "MIME-Version: 1.0\r\n";
        			$headers .= "Content-type: text/html; charset=utf-8\r\n";
        			$headers .= "To: <$user->email>\r\n";
        			$headers .= "From: <citiesgame@citiesgame.tk>\r\n";
        			// Сообщение для Email
        			$message = '
        			        <html>
        			        <head>
        			        <title>Citiesgame</title>
        			        </head>
        			        <body>
        			        <p>Ви зареєстрували акаунт на сайті citiesgame.tk</p>
        			        </body>
        			        </html>
        			        ';
        			        
		 			mail($user->email, "Ви зареєстрували акаунт", $message, $headers);
		 			echo '<div>  </div><hr>'; 
	        		echo '<b><div style="color: green; ">Ви успішно зареєстровані! Можна <a href="sing_in.php">авторизуватися</a>.</div></b><hr>';

			    } else {
			    	echo '<div>  </div><hr>'; 
			        echo '<b><div style="color: red; ">Ви не робот?</div></b><hr>';
			    }


			}else {
				echo '<div>  </div><hr>'; 
			    echo '<b><div style="color: red; ">Ви не таснули на перевірку</div></b><hr>';
			}
	
		} else {
	        echo '<div>  </div><hr>'; 
			echo '<b><div style="color: red; ">' . array_shift($errors). '</div></b><hr>';
		}
	}
?>
			<button name="registerbt" type="submit" class="registerbtn">
				Зареєструватися
			</button>
		</div>
		<div class="container signin">
		    <p>Вже є аккаунт ? 
		    	<a href="sing_in.php">
		    		Авторизуватися
		    	</a>
		    </p>
		</div>
	</form>
	<div class="pix_section pix-padding-v-50 gray-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-xs-12">
					<div class="pix-content">
						<h5 class="pix-black-gray-dark">
							<span class="pix_edit_text"><strong>Cities game</strong></span>
						</h5>
						<div class="pix-padding-v-10">
							<p class="pix-black-gray-light big-text">
								<span class="pix_edit_text">
									Дякую що відвідали наш сайт
								</span>
							</p>
						</div>
						<div class="pix-header-item">
							<a href="https://glebych.diaka.ua/donate" class="small-social">
								<i class="pixicon-wallet22 big-icon-50 pix-slight-white"></i>
							</a>
							<a href="mailto:citiesgame0@gmail.com" class="small-social">
								<i class="pixicon-mail2 big-icon-50 pix-slight-white"></i>
							</a>
							<a href="https://www.instagram.com/_cities_game_/?hl=ru" class="small-social">
								<i class="pixicon-instagram4 big-icon-50 pix-slight-white"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-xs-12 col-sm-4 column ui-droppable">
					<div class="pix-content">
						<h5 class="pix-black-gray-dark">
							<span class="pix_edit_text"><strong>КОНТАКТИ</strong></span>
						</h5>
						<div class="pix-padding-v-10">
							<span class="pix-black-gray-light big-text"><span class="pix_edit_text">Телефони: <a href="tel:+380952298771">+380952298771</a></span></span>
						</div>
						<div class="pix-padding-v-10">
							<span class="pix-black-gray-light big-text"><span class="pix_edit_text">Почта: citiesgame@citiesgame.tk</span></span>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-xs-12 col-sm-4 column ui-droppable">
					<div class="pix-content">
						<h5 class="pix-black-gray-dark">
							<span class="pix_edit_text"><strong>МИ НА КАРТІ</strong></span>
						</h5>
						<div class="pix-padding-v-10">
							<span class="pix-black-gray-light big-text"><span class="pix_edit_text">Кропивницкий, Украіна</span></span>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Javascript -->
	<script src="js\jquery-1.11.2.js"></script>
	<script src="js\jquery-ui.js"></script>
	<script src="js\bootstrap.js"></script>
	<script src="js\velocity.min.js"></script>
	<script src="js\velocity.ui.min.js"></script>
	<script src="js\scroll.js" type="text/javascript"></script>
	<script src="js\custom.js"></script>
<?php 
	require __DIR__ . '/footer.php'; 
?> <!-- Подключаем подвал проекта -->