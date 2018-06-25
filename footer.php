<section class="separator">
	навигация по сайту
</section>
<section class="site-map">
	<div class="wrap">
		<ul>
			<li><a href="http://ltlgroup.ltl.com.ua/">Главная</a></li>
			<!-- <li><a href="">О нас</a></li> -->
			<li><a href="http://school.ltl.com.ua/" target="_blank">Школа маляров</a></li>
			<li><a href="http://ltlgroup.ltl.com.ua/blog/">Блог</a></li>
			<li><a href="http://ltlgroup.ltl.com.ua/faq/">Вопросы-ответы</a></li>
			<!-- <li><a href=""></a></li> -->
		</ul>
		<!-- <ul>
			<li><a href="http://ltlgroup.ltl.com.ua/complex/">Готовые решения</a></li>
			<li class="sub"><a href="">Внешняя отделка</a></li>
			<li class="sub"><a href="">Внутренняя отделка</a></li>
			<li class="sub"><a href="">Наружная отделка</a></li>
			<li class="sub"><a href="">Для дома</a></li>
		</ul> -->
		<ul>
			<li><a href="http://ltlgroup.ltl.com.ua/products/">Продукция</a></li>
			<li><a href="http://ltlgroup.ltl.com.ua/gallerylist/">Галерея решений</a></li>
			<li><a href="http://ltlgroup.ltl.com.ua/price/">Прайс</a></li>
			<li><a href="http://ltlgroup.ltl.com.ua/contacts/">Контакты</a></li>
			
		</ul>
	</div>
</section>
<section class="separator">
	Наши контакты
</section>

<footer class="footer">
	<div class="contacts">
		<ul>
			<li>Украина, г. Киев</li>
			<li>пр-т, Палладина 32 Б</li>
			<li><a href="callto:+380445038494">+38 (044) 503-84-94</a></li>
			<li class="social">
				<a href="" class="fb"></a>
				<a href="" class="ins"></a>
				<a href="" class="tele"></a>
				<a href="" class="goo"></a>
			</li>
		</ul>
	</div>
	<div class="feedback-form">
		<form method="POST" id="feedback-form" class="footer-form">

			<div class="name">
				<input id="name" class="form-control" name="nameFF" maxlength="30" type="text" required placeholder="Имя*">
				<span class="error"></span>
			</div>
			<div class="tel">
				<input id="tel" maxlength="50" class="form-control" name="telFF" type="tel" x-autocompletetype="tel"  required placeholder="Телефон*">
				<span class="error"></span>
			</div>
			<div class="mail">
				<input id="email" maxlength="50" class="form-control" name="contactFF" type="email" x-autocompletetype="email" required placeholder="Емейл*">
				<span class="error"></span>
			</div>

			<div class="message">
				<textarea id="message" class="form-control" name="messageFF" required placeholder="Сообщение*"></textarea>
				<span class="error"></span>

				<div id="notification"></div>

			</div>
			<input name="submit" type="submit" id="submit" class="def-button" value="Отправить сообщение">
		</form>
	</div>
	<div class="copyright">
		<a href="#" class="logo"></a>
		<p>(c) <script type='text/javascript'>var mdate = new Date();document.write(mdate.getFullYear());</script> LTL Group. Все права защищены</p>
	</div>
</footer>

<script src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>
<script type="text/javascript">
	let navArray = ['Главная','Продукты','  Галерея решений','  Блог','  Вопросы-ответы','Школа маляров','Контакты','Прайс'];

	let navs = document.querySelector('ul.main-menu').getElementsByTagName('li');
	for(i=0;i<navs.length;i++) {
		if('<?php the_title('') ?>' == navArray[i]) {
			navs[i].classList.add('active');
		}
	}
	if('<?php wp_title('') ?>' == navArray[4]) {
		navs[4].classList.add('active');
	}
	if('<?php wp_title('') ?>' == navArray[2]) {
		navs[2].classList.add('active');
	}
	if('<?php wp_title('') ?>' == navArray[3]) {
		navs[3].classList.add('active');
	}
	if(document.querySelector('.blogMeta')) {
		navs[3].classList.add('active');
	}
	if(document.querySelector('.galleryMeta')) {
		navs[2].classList.add('active');
	}
</script>
</body>
</html>