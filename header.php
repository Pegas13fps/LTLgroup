<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php the_title(); ?>">
	<meta property="og:type" content="article" />
	<meta property="og:url" content="<?php echo get_permalink(); ?>" />
	<meta property="og:image:url" content="<?php
	$thumb_id = get_post_thumbnail_id();
	$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
	echo $thumb_url[0];
	?>" />
	<title>LTL Group | <?php the_title(); ?></title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,400,700,900&amp;subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/reset.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">
</head>
<body>
	<header class="header">
		<div class="logo"></div>
		<ul class="main-menu">
			<li>
				<a href="http://ltlgroup.ltl.com.ua/">
					Главная
				</a>
			</li>
			<!-- <li>
				<a href="http://ltlgroup.ltl.com.ua/complex/">
					Готовые решения
				</a>
			</li> -->
			<li>
				<a href="http://ltlgroup.ltl.com.ua/products/">
					Продукция
				</a>
			</li>
			<li>
				<a href="http://ltlgroup.ltl.com.ua/gallerylist/">
					Галерея решений
				</a>
			</li>
			<li>
				<a href="http://ltlgroup.ltl.com.ua/blog/">
					Блог
				</a>
			</li>
			<li>
				<a href="http://ltlgroup.ltl.com.ua/faq/">
					Вопросы-ответы
				</a>
			</li>
			<li>
				<a href="http://school.ltl.com.ua/" target="_blank">
					Школа маляров
				</a>
			</li>
			<li>
				<a href="http://ltlgroup.ltl.com.ua/contacts/">
					Контакты
				</a>
			</li>
			<li>
				<a href="http://ltlgroup.ltl.com.ua/price/">
					Прайс
				</a>
			</li>
		</ul>
		<a id="nav-toggle" href="#" onclick="sandwich('nav-toggle');sandwichL('nav-toggle'); sidebar('smart-menu'); return false" style="right:35px;"><span></span></a>
		<ul id="smart-menu" class="smart-menu" style="right: -350px;">
			<li>
				<a href="http://ltlgroup.ltl.com.ua/">
					Главная
				</a>
			</li>
			<!-- <li>
				<a href="http://ltlgroup.ltl.com.ua/complex/">
					Готовые решения
				</a>
			</li> -->
			<li>
				<a href="http://ltlgroup.ltl.com.ua/products/">
					Продукция
				</a>
			</li>
			<li>
				<a href="http://ltlgroup.ltl.com.ua/gallerylist/">
					Галерея решений
				</a>
			</li>
			<li>
				<a href="http://ltlgroup.ltl.com.ua/blog/">
					Блог
				</a>
			</li>
			<li>
				<a href="http://ltlgroup.ltl.com.ua/faq/">
					Вопросы-ответы
				</a>
			</li>
			<li>
				<a href="http://school.ltl.com.ua/" target="_blank">
					Школа маляров
				</a>
			</li>
			<li>
				<a href="http://ltlgroup.ltl.com.ua/contacts/">
					Контакты
				</a>
			</li>
			<li>
				<a href="http://ltlgroup.ltl.com.ua/price/">
					Прайс
				</a>
			</li>
		</ul>
		<div class="login">
			ВОЙТИ
		</div>
	</header>