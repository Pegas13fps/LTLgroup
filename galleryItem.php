 <?php 
/*
Template Name: galleryItem
Template Post Type: post, product
*/
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LTL Group | Галерея решений</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,400,700,900&amp;subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/reset.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/royalslider.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/rs-default.css">

	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/magnific-popup.css">
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
	
	<section class="separator gallery-separator">
		<?php the_title(); ?>
 	</section>
	<section class="gallery-content-container galleryMeta">
		<div id="gallery-1" class="royalSlider rsDefault visibleNearby">
			
			

		</div>
		<div class="gallery-content-description">
			<?php the_post(); ?>
			<?php the_content(); ?>
		</div>
	</section>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>

	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.royalslider.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.magnific-popup.min.js"></script>

	<script type="text/javascript">
		if('<?php the_field('фото_1'); ?>') {
			var newLink = document.createElement('a');
			newLink.setAttribute("href","<?php the_field('фото_1'); ?>");
			newLink.className = 'rsImg';
			newLink.innerHTML = '<?php the_field('фото_1'); ?><img  class="rsTmb" src="<?php the_field('фото_1'); ?>" />';
			document.querySelector('#gallery-1').appendChild(newLink);
		}
		if('<?php the_field('фото_2'); ?>') {
			var newLink = document.createElement('a');
			newLink.setAttribute("href","<?php the_field('фото_2'); ?>");
			newLink.className = 'rsImg';
			newLink.innerHTML = '<?php the_field('фото_2'); ?><img  class="rsTmb" src="<?php the_field('фото_2'); ?>" />';
			document.querySelector('#gallery-1').appendChild(newLink);
		}
		if('<?php the_field('фото_3'); ?>') {
			var newLink = document.createElement('a');
			newLink.setAttribute("href","<?php the_field('фото_3'); ?>");
			newLink.className = 'rsImg';
			newLink.innerHTML = '<?php the_field('фото_3'); ?><img  class="rsTmb" src="<?php the_field('фото_3'); ?>" />';
			document.querySelector('#gallery-1').appendChild(newLink);
		}
		if('<?php the_field('фото_4'); ?>') {
			var newLink = document.createElement('a');
			newLink.setAttribute("href","<?php the_field('фото_4'); ?>");
			newLink.className = 'rsImg';
			newLink.innerHTML = '<?php the_field('фото_4'); ?><img  class="rsTmb" src="<?php the_field('фото_4'); ?>" />';
			document.querySelector('#gallery-1').appendChild(newLink);
		}
		if('<?php the_field('фото_5'); ?>') {
			var newLink = document.createElement('a');
			newLink.setAttribute("href","<?php the_field('фото_5'); ?>");
			newLink.className = 'rsImg';
			newLink.innerHTML = '<?php the_field('фото_5'); ?><img  class="rsTmb" src="<?php the_field('фото_5'); ?>" />';
			document.querySelector('#gallery-1').appendChild(newLink);
		}
		if('<?php the_field('фото_6'); ?>') {
			var newLink = document.createElement('a');
			newLink.setAttribute("href","<?php the_field('фото_6'); ?>");
			newLink.className = 'rsImg';
			newLink.innerHTML = '<?php the_field('фото_6'); ?><img  class="rsTmb" src="<?php the_field('фото_6'); ?>" />';
			document.querySelector('#gallery-1').appendChild(newLink);
		}
		if('<?php the_field('фото_7'); ?>') {
			var newLink = document.createElement('a');
			newLink.setAttribute("href","<?php the_field('фото_7'); ?>");
			newLink.className = 'rsImg';
			newLink.innerHTML = '<?php the_field('фото_7'); ?><img  class="rsTmb" src="<?php the_field('фото_7'); ?>" />';
			document.querySelector('#gallery-1').appendChild(newLink);
		}
		if('<?php the_field('фото_8'); ?>') {
			var newLink = document.createElement('a');
			newLink.setAttribute("href","<?php the_field('фото_8'); ?>");
			newLink.className = 'rsImg';
			newLink.innerHTML = '<?php the_field('фото_8'); ?><img  class="rsTmb" src="<?php the_field('фото_8'); ?>" />';
			document.querySelector('#gallery-1').appendChild(newLink);
		}
		if('<?php the_field('фото_9'); ?>') {
			var newLink = document.createElement('a');
			newLink.setAttribute("href","<?php the_field('фото_9'); ?>");
			newLink.className = 'rsImg';
			newLink.innerHTML = '<?php the_field('фото_9'); ?><img  class="rsTmb" src="<?php the_field('фото_9'); ?>" />';
			document.querySelector('#gallery-1').appendChild(newLink);
		}
		if('<?php the_field('фото_10'); ?>') {
			var newLink = document.createElement('a');
			newLink.setAttribute("href","<?php the_field('фото_10'); ?>");
			newLink.className = 'rsImg';
			newLink.innerHTML = '<?php the_field('фото_10'); ?><img  class="rsTmb" src="<?php the_field('фото_10'); ?>" />';
			document.querySelector('#gallery-1').appendChild(newLink);
		}

		

// Slider gallery 

jQuery(document).ready(function($){
	var windowsWidth = jQuery(window).width();
	
	if (jQuery(window).width() > 992 ) {
		
		jQuery('.royalSlider').royalSlider({
			arrowsNav: true,
			loop: false,
			keyboardNavEnabled: true,
			controlsInside: false,
			imageScaleMode: 'fit-if-smaller',
			imageScalePadding: 10,
			arrowsNavAutoHide: false,
			autoScaleSlider: false,
			autoScaleSliderWidth: 0,
			autoScaleSliderHeight: 0,
			controlNavigation: 'thumbnails',
			thumbsFitInViewport: false,
			navigateByClick: true,
			startSlideId: 0,
			autoPlay: {
    		// autoplay options go gere
    		enabled: false,
    		delay: 5000,
    		pauseOnHover: false,
    		stopAtAction: false
    	},
    	transitionType:'move',
    	globalCaption: false,
    	deeplinking: {
    		enabled: true,
    		change: false
    	},
    	slidesSpacing:10,
    	visibleNearby: {
    		enabled: true,
    		centerArea: 0.5,
    		center: true,
    		breakpoint: 650,
    		breakpointCenterArea: 0.64,
    		navigateByCenterClick: false
    	},
    	addActiveClass: true
    });	

	} else {
		
		jQuery('.royalSlider').royalSlider({
			arrowsNav: false,
			loop: true,
			keyboardNavEnabled: true,
			controlsInside: false,
			imageScaleMode: 'fit-if-smaller',
			imageScalePadding: 10,
			arrowsNavAutoHide: false,
			autoScaleSlider: true,
			autoScaleSliderWidth: 0,
			autoScaleSliderHeight: 0,
			controlNavigation: 'thumbnails',
			thumbsFitInViewport: false,
			navigateByClick: true,
			startSlideId: 0,
			autoPlay: {
    		// autoplay options go gere
    		enabled: false,
    		delay: 5000,
    		pauseOnHover: false,
    		stopAtAction: false
    	},
    	transitionType:'move',
    	globalCaption: false,
    	deeplinking: {
    		enabled: true,
    		change: false
    	},
    	slidesSpacing:10,
    	addActiveClass: true
    });	
	}

	var slider = $(".royalSlider").data('royalSlider');
	
	//slider.slides[0].holder.on('rsAfterContentSet', function() {
		slider.ev.on('rsAfterContentSet', function() {
			show_full(slider.currSlideId);
		});

		slider.ev.on('rsAfterSlideChange', function(event) {
			show_full(slider.currSlideId);
		});	

		slider.ev.on('rsDragRelease', function() {
			show_full(slider.currSlideId);
		});
		


		function show_full(id) {
			var items = [];
			$('.rsThumbsContainer').find('img').each(function() {
				items.push( {
					src: $(this).attr('src'),
					title: $(this).attr('alt')
				} );
			});

			$('.rsActiveSlide').on("click","img", function (e) {
				
				$.magnificPopup.open({
					items : items,
					type: 'image',
					gallery:{enabled:true},	
				});
				$.magnificPopup.instance.goTo(id);
			});
		}
	});
</script>

<?php get_footer(); ?>
