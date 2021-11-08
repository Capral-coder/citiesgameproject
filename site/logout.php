<?php 
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
							<span class="pix_edit_text">
								<strong>
									Ви вийшли з акаунта !
								</strong>
							</span>
						</h1><br>
						<h6 class="pix-slight-white pix-small-width-text pix-margin-bottom-20 pix-no-margin-top">
							<span class="pix_edit_text"> 
								<?php
								// Производим выход пользователя
								unset($_SESSION['logged_user']);
								?>
							</span>
						</h6>
					</div>
				</div>
			</div>
		</div>
	</div>
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
							<span class="pix-black-gray-light big-text"><span class="pix_edit_text">Почта: citiesgame@gmail.com</span></span>
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
	require __DIR__ . '/footer.php'; // Подключаем подвал проекта
?>