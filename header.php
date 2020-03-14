<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">
    <!-- <base href="/"> -->

    <title>OptimizedHTML 4123</title>
    <meta name="description" content="">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Template Basic Images End -->

    <!-- Custom Browsers Color Start -->
    <meta name="theme-color" content="#000">
    <!-- Custom Browsers Color End -->

<?php wp_head();?>
</head>
<body>

<!-- Custom HTML -->


<header class="header" style="background-image: url(<?php echo get_template_directory_uri() . '/img/header_bg.jpg'?>)">
	<div class="container">

		<div class="header-wrap">
			<div class="logo">
				<?php the_custom_logo();?>
			</div>
			<div class="header-menu">
				<ul class="header-menu__list">
					<li class="header-menu__item"><a href="" class="header-menu__link">О нас</a></li>
					<li class="header-menu__item"><a href="" class="header-menu__link">Преимущества</a></li>
					<li class="header-menu__item"><a href="" class="header-menu__link">Наши работы</a></li>
					<li class="header-menu__item"><a href="" class="header-menu__link">Контакты</a></li>
				</ul>
			</div>

			<div class="header-contacts">
				<a  href="tel:" class="header-contacts__phone"><img src="<?php echo get_template_directory_uri() . '/img/icons/phone.svg'?>">099-09-23-423</a>
			</div>

		</div> <!--header-wrap-->

		<div class="header-descr__text">
			<h1>Сварка металлоконструкций</h1>
			<h2>Сварочные работы любой сложности по Киеву и области</h2>
		</div>
	</div> <!--container-->
</header>

<section class="s-about">
	<div class="container">
		<h2 class="h2">О нас</h2>
		<div class="about-wrap">
			<div class="about-wrap__text">
				<p>Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).</p>
			</div>
		</div>
	</div>
</section>

<section class="advantages-s">
	<div class="container">
		<h2 class="h2">Наши преимущества</h2>

		<div class="advantages-items">
			<div class="advantages-item  wow fadeInLeft">
				<div class="advantages-item__img">
					<img src="<?php echo get_template_directory_uri() . '/img/advantages/1.svg'?>">
				</div>
				<span class="advantages-item__title">
					Новейшее оборудование
				</span>
				<span class="advantages-item__text">
					Современное оборудование обеспечивает высокую точность сварки мкталлоконструкций.
				</span>
			</div>  <!--advantages-item-->

			<div class="advantages-item wow fadeInRight">
				<div class="advantages-item__img">
					<img src="<?php echo get_template_directory_uri() . '/img/advantages/2.svg'?>">
				</div>
				<span class="advantages-item__title">
					Контроль качества
				</span>
				<span class="advantages-item__text">
					Мы заботимся о своей репутации, поэтому клиенты получают только качественные услуги
				</span>
			</div> <!--advantages-item-->

			<div class="advantages-item wow fadeInLeft">
				<div class="advantages-item__img">
					<img src="<?php echo get_template_directory_uri() . '/img/advantages/3.svg'?>">
				</div>
				<span class="advantages-item__title">
					Широкий спектр услуг
				</span>
				<span class="advantages-item__text">
					Лазерная резка, гибка и вальцовка металлов, порошковая покраска, сварочные работы, резка мдф, фанеры и оргстекла.
				</span>
			</div> <!--advantages-item-->

			<div class="advantages-item wow fadeInLeft">
				<div class="advantages-item__img">
					<img src="<?php echo get_template_directory_uri() . '/img/advantages/4.svg'?>">
				</div>
				<span class="advantages-item__title">
					Все всегда в срок
				</span>
				<span class="advantages-item__text">
					Оборудование обеспечивает отличное качество сварки и высокую скорость работы, поэтому заказы сдаем в срок.
				</span>
			</div> <!--advantages-item-->


		</div>
	</div>
</section>
</body>
</html>