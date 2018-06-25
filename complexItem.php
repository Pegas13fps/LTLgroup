<?php 
/*
Template Name: complexItem
Template Post Type: post, product
*/
?>
<?php get_header(); ?>

<section class="separator gallery-separator">
		решения по видам отделки
	</section>
	
	<div class="complex-solutions-content">
		<div class="img-box">
			<p class="big-text">Комплексные решения</p>
			<p class="litttle-text">Лакокрасочные материалы принято делить на группы в зависимости от химической природы растворителя применяемого в их производстве. Так, существуют группы: органорастворимая и водорастворимая.</p>
		</div>

		<div class="second-box">
			<div class="bg-pic">
				<img src="<?php bloginfo('template_directory'); ?>/img/cs-2-img.png" alt="">
				<div class="box-btn">
					<a href="#" class="btn-rm">Читать подробнее...</a>
				</div>
				<div class="prod-structure">
					<div class="itm">
						<img src="<?php bloginfo('template_directory'); ?>/img/cs-materials.svg" alt="Материал">
						<p>Лучшие материалы</p>
						<span class="line"></span>
					</div>
					<div class="itm">
						<img src="<?php bloginfo('template_directory'); ?>/img/cs-technology.svg" alt="Технология">
						<p>Лучшие технологии</p>
						<span class="line"></span>
					</div>
					<div class="itm">
						<img src="<?php bloginfo('template_directory'); ?>/img/cs-equipment.svg" alt="Оборудование">
						<p>Топовое оборудование</p>
						<span class="line"></span>
					</div>
				</div>
			</div>	
		</div>

		<div class="in-box">
			<div>
				<h4>Цены всегда</h4>
				<p>ИНДИВИДУАЛЬНЫЕ</p>
			</div>
			<div>
				<h4>Выполнение заказа</h4>
				<p>&#60; 60 дней</p>
			</div>
			<div>
				<h4>выполненных заказов</h4>
				<p>&#62; 100000</p>
			</div>
			<div>
				<h4>Работаем по всей</h4>
				<p>ЕВРОПЕ</p>
			</div>
		</div>

		<div class="features_i">

			<div class="img-box2">

				<div class="contols-labels">
					<div class="contols-labels_item item1" onclick="document.querySelector('.circle').style.transform='rotate(103deg) translate(-150px, 150px)'; document.querySelector('.lt-elem').style.transform='rotate(-103deg)';">
						<p>Text test for ... test</p>
						<span class="dot1 dot-style"></span>
					</div>
					<div class="contols-labels_item item2" onclick="document.querySelector('.circle').style.transform='rotate(73deg) translate(-150px, 150px)'; document.querySelector('.lt-elem').style.transform='rotate(-73deg)';">
						<p>Text test for ... test</p>
						<span class="dot2 dot-style"></span>
					</div>
					<div class="contols-labels_item item3" onclick="document.querySelector('.circle').style.transform='rotate(52deg) translate(-150px, 150px)'; document.querySelector('.lt-elem').style.transform='rotate(-50deg)';">
						<p>Text test for ... test</p>
						<span class="dot3 dot-style"></span>
					</div>
					<div class="contols-labels_item item4" onclick="document.querySelector('.circle').style.transform='rotate(32deg) translate(-150px, 150px)'; document.querySelector('.lt-elem').style.transform='rotate(-32deg)';">
						<p>Text test for ... test</p>
						<span class="dot4 dot-style"></span>
					</div>
					<div class="contols-labels_item item5" onclick="document.querySelector('.circle').style.transform='rotate(12deg) translate(-150px, 150px)'; document.querySelector('.lt-elem').style.transform='rotate(-12deg)';">
						<p>Text test for ... test</p>
						<span class="dot5 dot-style"></span>
					</div>
					<div class="contols-labels_item item6" onclick="document.querySelector('.circle').style.transform='rotate(-16deg) translate(-150px, 150px)'; document.querySelector('.lt-elem').style.transform='rotate(16deg)';">
						<p>Text test for ... test</p>
						<span class="dot6 dot-style"></span>
					</div>

					<div class="circle">
						<p class="lt-elem">&#9658;</p>
					</div>
				</div>

				<img src="<?php bloginfo('template_directory'); ?>/img/cs-slicer.png" alt="wood item">

				<div class="pic-title">
					<p>Эксклюзивный дизайн</p>
					<span class="line"></span>
				</div>
			</div>
			
		</div>

		<section class="benefit">
			<div class="wrap">
				<div class="picture">
						
				</div>
				<div class="content">
					<h3>Каждый из наших проектов это:</h3>
					<div class="items">
						<div class="item">
							<h4>КВАЛИФИЦИРОВАННЫЕ</h4>
							<p>технологи и проектировщики</p>
						</div>
						<div class="item">
							<h4>ПРОФЕССИОНАЛЬНЫЕ</h4>
							<p>инженеры и менеджеры проектов</p>
						</div>
						<div class="item">
							<h4>САМАЯ БОЛЬШАЯ</h4>
							<p>материальная база запчастей</p>
						</div>
						<div class="item">
							<h4>КАЧЕСТВЕННЫЙ СЕРВИС</h4>								<p>с возможностью временной подмены оборудования на время ремонта</p>
							</div>
					</div>
					<p>
						У вас остались вопросы? <br>
						Задавайте!
					</p>
					<p>
						Или еще лучше —
					</p>
					<a href="">Проверьте нас в деле</a>
				</div>
			</div>
		</section>

		
		<div class="product-gallery">
			<div class="left">
					<div class="it-1"></div>
					<div class="it-2"></div>
					<div class="it-3"></div>
					<div class="it-4"></div>
					<div class="it-5"></div>
			</div>
			<div class="right">
					<div class="it-6"></div>
					<div class="it-7"></div>
			</div>
			
		</div>

	</div>

<?php get_footer(); ?>
