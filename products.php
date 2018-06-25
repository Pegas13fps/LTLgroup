<?php 
/*
Template Name: products
*/
?>
<?php get_header(); ?>

<section class="separator" style="padding-top: 150px;background: none;">
	Вы можете выбрать подходящую для себя готовую продукцию из нашего каталога
</section>
<section class="products-container">
	<div class="nav">
		<!-- 1 -->
		<a href="" id="ilvaTab" onclick="heightBox('ilva');closeBox('anest');closeBox('dikema');closeBox('indasa');return false;">Лакокрасочные материалы
			<span>ILVA Polimeri (Италия)</span>
		</a>
		<ul id="ilva">
			<li onclick="
			document.querySelector('#main-content1').style.maxHeight='2700px';
			heightBox('ilvaHistory');
			closeBox('main-info');
			closeBox('scienceIlva');
			closeBox('securityIlva');
			closeBox('poliEfirIlva');
			closeBox('poliuritanIlva');
			closeBox('ultravioletIlva');
			closeBox('waterIlva');
			closeBox('outsideIlva');
			closeBox('paintsIlva');
			closeBox('fireproofIlva');
			closeBox('nitroIlva');
			closeBox('otherIlva');
			closeBox('main-content2');
			closeBox('main-content3');
			closeBox('main-content4');
			return false;">
			История бренда
		</li>
		<li onclick="
		document.querySelector('#main-content1').style.maxHeight='2700px';
		heightBox('scienceIlva');
		closeBox('main-info');
		closeBox('ilvaHistory');
		closeBox('securityIlva');
		closeBox('poliEfirIlva');
		closeBox('poliuritanIlva');
		closeBox('ultravioletIlva');
		closeBox('waterIlva');
		closeBox('outsideIlva');
		closeBox('paintsIlva');
		closeBox('fireproofIlva');
		closeBox('nitroIlva');
		closeBox('otherIlva');
		closeBox('main-content2');
		closeBox('main-content3');
		closeBox('main-content4');
		return false;">
		Научные исследования и разработки
	</li>
	<li onclick="
	document.querySelector('#main-content1').style.maxHeight='2700px';
	heightBox('securityIlva');
	closeBox('main-info');
	closeBox('ilvaHistory');
	closeBox('scienceIlva');
	closeBox('poliEfirIlva');
	closeBox('poliuritanIlva');
	closeBox('ultravioletIlva');
	closeBox('waterIlva');
	closeBox('outsideIlva');
	closeBox('paintsIlva');
	closeBox('fireproofIlva');
	closeBox('nitroIlva');
	closeBox('otherIlva');
	closeBox('main-content2');
	closeBox('main-content3');
	closeBox('main-content4');
	return false;">
	Защита окружающей среды и безопасность
</li>
<li onclick="
document.querySelector('#main-content1').style.maxHeight='2700px';
heightBox('poliEfirIlva');
closeBox('main-info');
closeBox('ilvaHistory');
closeBox('scienceIlva');
closeBox('poliuritanIlva');
closeBox('securityIlva');
closeBox('ultravioletIlva');
closeBox('waterIlva');
closeBox('outsideIlva');
closeBox('paintsIlva');
closeBox('fireproofIlva');
closeBox('nitroIlva');
closeBox('otherIlva');
closeBox('main-content2');
closeBox('main-content3');
closeBox('main-content4');
return false;">Полиэфиры</li>
<li onclick="
document.querySelector('#main-content1').style.maxHeight='2700px';
heightBox('poliuritanIlva');
closeBox('main-info');
closeBox('ilvaHistory');
closeBox('scienceIlva');
closeBox('poliEfirIlva');
closeBox('ultravioletIlva');
closeBox('securityIlva');
closeBox('waterIlva');
closeBox('outsideIlva');
closeBox('paintsIlva');
closeBox('fireproofIlva');
closeBox('nitroIlva');
closeBox('otherIlva');
closeBox('main-content2');
closeBox('main-content3');
closeBox('main-content4');
return false;">Полиуретаны</li>
<li onclick="
document.querySelector('#main-content1').style.maxHeight='2700px';
heightBox('ultravioletIlva');
closeBox('main-info');
closeBox('ilvaHistory');
closeBox('scienceIlva');
closeBox('poliEfirIlva');
closeBox('poliuritanIlva');
closeBox('waterIlva');
closeBox('securityIlva');
closeBox('outsideIlva');
closeBox('paintsIlva');
closeBox('fireproofIlva');
closeBox('nitroIlva');
closeBox('otherIlva');
closeBox('main-content2');
closeBox('main-content3');
closeBox('main-content4');
return false;">Материалы ультрафиолетового отверждения</li>
<li onclick="
document.querySelector('#main-content1').style.maxHeight='2700px';
heightBox('waterIlva');
closeBox('main-info');
closeBox('ilvaHistory');
closeBox('scienceIlva');
closeBox('poliEfirIlva');
closeBox('poliuritanIlva');
closeBox('ultravioletIlva');
closeBox('securityIlva');
closeBox('outsideIlva');
closeBox('paintsIlva');
closeBox('fireproofIlva');
closeBox('nitroIlva');
closeBox('otherIlva');
closeBox('main-content2');
closeBox('main-content3');
closeBox('main-content4');
return false;">Материалы на водной основе</li>
<li onclick="
document.querySelector('#main-content1').style.maxHeight='2700px';
heightBox('outsideIlva');
closeBox('main-info');
closeBox('ilvaHistory');
closeBox('scienceIlva');
closeBox('poliEfirIlva');
closeBox('poliuritanIlva');
closeBox('ultravioletIlva');
closeBox('waterIlva');
closeBox('securityIlva');
closeBox('paintsIlva');
closeBox('fireproofIlva');
closeBox('nitroIlva');
closeBox('otherIlva');
closeBox('main-content2');
closeBox('main-content3');
closeBox('main-content4');
return false;">Материалы для наружных работ</li>
<li onclick="
document.querySelector('#main-content1').style.maxHeight='2700px';
heightBox('paintsIlva');
closeBox('main-info');
closeBox('ilvaHistory');
closeBox('scienceIlva');
closeBox('poliEfirIlva');
closeBox('poliuritanIlva');
closeBox('ultravioletIlva');
closeBox('waterIlva');
closeBox('outsideIlva');
closeBox('securityIlva');
closeBox('fireproofIlva');
closeBox('nitroIlva');
closeBox('otherIlva');
closeBox('main-content2');
closeBox('main-content3');
closeBox('main-content4');
return false;">Красители</li>
<li onclick="
document.querySelector('#main-content1').style.maxHeight='2700px';
heightBox('fireproofIlva');
closeBox('main-info');
closeBox('ilvaHistory');
closeBox('scienceIlva');
closeBox('poliEfirIlva');
closeBox('poliuritanIlva');
closeBox('ultravioletIlva');
closeBox('waterIlva');
closeBox('outsideIlva');
closeBox('paintsIlva');
closeBox('securityIlva');
closeBox('nitroIlva');
closeBox('otherIlva');
closeBox('main-content2');
closeBox('main-content3');
closeBox('main-content4');
return false;">Огнестойкие материалы</li>
<li onclick="
document.querySelector('#main-content1').style.maxHeight='2700px';
heightBox('nitroIlva');
closeBox('main-info');
closeBox('ilvaHistory');
closeBox('scienceIlva');
closeBox('poliEfirIlva');
closeBox('poliuritanIlva');
closeBox('ultravioletIlva');
closeBox('waterIlva');
closeBox('outsideIlva');
closeBox('paintsIlva');
closeBox('fireproofIlva');
closeBox('securityIlva');
closeBox('otherIlva');
closeBox('main-content2');
closeBox('main-content3');
closeBox('main-content4');
return false;">Материалы на основе нитроцеллюлозы</li>
<li onclick="
document.querySelector('#main-content1').style.maxHeight='2700px';
heightBox('otherIlva');
closeBox('main-info');
closeBox('ilvaHistory');
closeBox('scienceIlva');
closeBox('poliEfirIlva');
closeBox('poliuritanIlva');
closeBox('ultravioletIlva');
closeBox('waterIlva');
closeBox('outsideIlva');
closeBox('paintsIlva');
closeBox('fireproofIlva');
closeBox('nitroIlva');
closeBox('securityIlva');
closeBox('main-content2');
closeBox('main-content3');
closeBox('main-content4');
return false;">Другие материалы</li>
</ul>
<!-- 2 --> 

<a href="" id="anestTab" onclick="heightBox('anest');closeBox('ilva');closeBox('dikema');closeBox('indasa');return false;">Покрасочное оборудование
	<span>Anest Iwata (Япония)</span>
</a> 

<ul id="anest" style="max-height: 0px;">
	<li onclick="
document.querySelector('#main-content2').style.maxHeight='2700px';
	heightBox('historyAnesta');
	closeBox('supernovaAnesta');
	closeBox('gunsAnesta');
	closeBox('gunsAir');
	closeBox('electristicAnesta');
	closeBox('pompAirmix');
	closeBox('pompAirless');
	closeBox('diafragmAnesta');
	closeBox('automatAnesta');
	closeBox('otherAnesta');
	closeBox('main-content1');
	closeBox('main-content3');
	closeBox('main-content4');
	return false;">
	История бренда
</li>
<li onclick="
document.querySelector('#main-content2').style.maxHeight='2700px';
heightBox('supernovaAnesta');
closeBox('historyAnesta');
closeBox('gunsAnesta');
closeBox('gunsAir');
closeBox('electristicAnesta');
closeBox('pompAirmix');
closeBox('pompAirless');
closeBox('diafragmAnesta');
closeBox('automatAnesta');
closeBox('otherAnesta');
closeBox('main-content1');
closeBox('main-content3');
closeBox('main-content4');
return false;">
SUPERNOVA</li>
<li onclick="
document.querySelector('#main-content2').style.maxHeight='2700px';

heightBox('gunsAnesta');
closeBox('supernovaAnesta');
closeBox('historyAnesta');
closeBox('gunsAir');
closeBox('electristicAnesta');
closeBox('pompAirmix');
closeBox('pompAirless');
closeBox('diafragmAnesta');
closeBox('automatAnesta');
closeBox('otherAnesta');
closeBox('main-content1');
closeBox('main-content3');
closeBox('main-content4');
return false;">
Покрасочные пистолеты Anest Iwata (Япония)
</li>
<li onclick="
document.querySelector('#main-content2').style.maxHeight='2700px';

heightBox('gunsAir');
closeBox('supernovaAnesta');
closeBox('gunsAnesta');
closeBox('historyAnesta');
closeBox('electristicAnesta');
closeBox('pompAirmix');
closeBox('pompAirless');
closeBox('diafragmAnesta');
closeBox('automatAnesta');
closeBox('otherAnesta');
closeBox('main-content1');
closeBox('main-content3');
closeBox('main-content4');
return false;">Покрасочные пистолеты Air Gunsa (Италия)</li>
<li onclick="
document.querySelector('#main-content2').style.maxHeight='2700px';

heightBox('electristicAnesta');
closeBox('supernovaAnesta');
closeBox('historyAnesta');
closeBox('gunsAnesta');
closeBox('gunsAir');
closeBox('pompAirmix');
closeBox('pompAirless');
closeBox('diafragmAnesta');
closeBox('automatAnesta');
closeBox('otherAnesta');
closeBox('main-content1');
closeBox('main-content3');
closeBox('main-content4');
return false;">Электростатическое оборудование Anest Iwata</li>
<li onclick="
document.querySelector('#main-content2').style.maxHeight='2700px';

heightBox('pompAirmix');
closeBox('supernovaAnesta');
closeBox('historyAnesta');
closeBox('gunsAnesta');
closeBox('gunsAir');
closeBox('electristicAnesta');
closeBox('pompAirless');
closeBox('diafragmAnesta');
closeBox('automatAnesta');
closeBox('otherAnesta');
closeBox('main-content1');
closeBox('main-content3');
closeBox('main-content4');
return false;">Покрасочные помпы Airmix Anest Iwata</li>
<li onclick="
document.querySelector('#main-content2').style.maxHeight='2700px';

heightBox('pompAirless');
closeBox('supernovaAnesta');
closeBox('historyAnesta');
closeBox('gunsAnesta');
closeBox('gunsAir');
closeBox('electristicAnesta');
closeBox('pompAirmix');
closeBox('diafragmAnesta');
closeBox('automatAnesta');
closeBox('otherAnesta');
closeBox('main-content1');
closeBox('main-content3');
closeBox('main-content4');
return false;">Покрасочный помпы Airless Anest Iwata</li>
<li onclick="
document.querySelector('#main-content2').style.maxHeight='2700px';

heightBox('diafragmAnesta');
closeBox('supernovaAnesta');
closeBox('historyAnesta');
closeBox('gunsAnesta');
closeBox('gunsAir');
closeBox('electristicAnesta');
closeBox('pompAirmix');
closeBox('pompAirless');
closeBox('automatAnesta');
closeBox('otherAnesta');
closeBox('main-content1');
closeBox('main-content3');
closeBox('main-content4');
return false;">Покрасочные диафрагменные помпы Anest Iwata</li>
<li onclick="
document.querySelector('#main-content2').style.maxHeight='2700px';

heightBox('automatAnesta');
closeBox('supernovaAnesta');
closeBox('historyAnesta');
closeBox('gunsAnesta');
closeBox('gunsAir');
closeBox('electristicAnesta');
closeBox('pompAirmix');
closeBox('pompAirless');
closeBox('diafragmAnesta');
closeBox('otherAnesta');
closeBox('main-content1');
closeBox('main-content3');
closeBox('main-content4');
return false;">Автомат. покрасочные пистолеты Anest Iwata</li>
<li onclick="
document.querySelector('#main-content2').style.maxHeight='2700px';

heightBox('otherAnesta');
closeBox('supernovaAnesta');
closeBox('historyAnesta');
closeBox('gunsAnesta');
closeBox('gunsAir');
closeBox('electristicAnesta');
closeBox('pompAirmix');
closeBox('pompAirless');
closeBox('diafragmAnesta');
closeBox('automatAnesta');
closeBox('main-content1');
closeBox('main-content3');
closeBox('main-content4');
return false;">Другие материалы</li>
</ul>
<a href="" id="dikemaTab" onclick="heightBox('dikema');closeBox('anest');closeBox('ilva');closeBox('indasa');return false;">Клея для дерева
	<span>Dikema (Италия)</span>
</a>
<ul id="dikema" style="max-height: 0px;">
	<li onclick="
document.querySelector('#main-content3').style.maxHeight='2700px';

	heightBox('poliDikema');
	closeBox('rasplavDikema');
	closeBox('poliuretanDikema');
	closeBox('kfDikema');
	closeBox('main-content1');
	closeBox('main-content2');
	closeBox('main-content4');
	return false;">
	Клея на основе ПолиВинилАцетата
</li>
<li onclick="
document.querySelector('#main-content3').style.maxHeight='2700px';

heightBox('rasplavDikema');
closeBox('poliDikema');
closeBox('poliuretanDikema');
closeBox('kfDikema');
closeBox('main-content1');
closeBox('main-content2');
closeBox('main-content4');
return false;">
Клея расплавы
</li>
<li onclick="
document.querySelector('#main-content3').style.maxHeight='2700px';

heightBox('poliuretanDikema');
closeBox('rasplavDikema');
closeBox('poliDikema');
closeBox('kfDikema');
closeBox('main-content1');
closeBox('main-content2');
closeBox('main-content4');
return false;">Клея полиуретановые</li>
<li onclick="
document.querySelector('#main-content3').style.maxHeight='2700px';

heightBox('kfDikema');
closeBox('rasplavDikema');
closeBox('poliuretanDikema');
closeBox('poliDikema');
closeBox('main-content1');
closeBox('main-content2');
closeBox('main-content4');
return false;">Клея КФЖ</li>

</ul> 

<a href="" id="indasaTab" onclick="heightBox('indasa');closeBox('anest');closeBox('dikema');closeBox('ilva');return false;">Шлиф. материалы
	<span>Indasa (Португалия)</span>
</a>
<ul id="indasa" style="max-height: 0px;">
	<li onclick="
document.querySelector('#main-content4').style.maxHeight='2700px';

	heightBox('historyIndasa');
	closeBox('redIndasa');
	closeBox('plusIndasa');
	closeBox('whiteIndasa');
	closeBox('otherIndasa');
	closeBox('termsIndasa');
	closeBox('main-content1');
	closeBox('main-content2');
	closeBox('main-content3');
	return false;">
	История бренда
</li>
<li onclick="
document.querySelector('#main-content4').style.maxHeight='2700px';

heightBox('redIndasa');
closeBox('historyIndasa');
closeBox('plusIndasa');
closeBox('whiteIndasa');
closeBox('otherIndasa');
closeBox('termsIndasa');
closeBox('main-content1');
closeBox('main-content2');
closeBox('main-content3');
return false;">
Красная линия
</li>
<li onclick="
document.querySelector('#main-content4').style.maxHeight='2700px';

heightBox('plusIndasa');
closeBox('redIndasa');
closeBox('historyIndasa');
closeBox('whiteIndasa');
closeBox('otherIndasa');
closeBox('termsIndasa');
closeBox('main-content1');
closeBox('main-content2');
closeBox('main-content3');
return false;">
Линия плюс
</li>
<li onclick="
document.querySelector('#main-content4').style.maxHeight='2700px';

heightBox('whiteIndasa');
closeBox('redIndasa');
closeBox('plusIndasa');
closeBox('historyIndasa');
closeBox('otherIndasa');
closeBox('termsIndasa');
closeBox('main-content1');
closeBox('main-content2');
closeBox('main-content3');
return false;">Белая линия</li>
<li onclick="
document.querySelector('#main-content4').style.maxHeight='2700px';

heightBox('otherIndasa');
closeBox('redIndasa');
closeBox('plusIndasa');
closeBox('whiteIndasa');
closeBox('historyIndasa');
closeBox('termsIndasa');
closeBox('main-content1');
closeBox('main-content2');
closeBox('main-content3');
return false;">Другая продукция</li>
<li onclick="
document.querySelector('#main-content4').style.maxHeight='2700px';

heightBox('termsIndasa');
closeBox('redIndasa');
closeBox('plusIndasa');
closeBox('whiteIndasa');
closeBox('otherIndasa');
closeBox('historyIndasa');
closeBox('main-content1');
closeBox('main-content2');
closeBox('main-content3');
return false;">Условия хранения</li>
</ul>
</div>
<div class="right-tab">
	<div class="main-content" id="main-content1">
		<div id="main-info">
			<p>
				Нажмите интересующий Вас пункт меню слева для изучения информации о нашей продукции.
			</p>
			<div class="img">
				
			</div>
		</div>
		<div id="ilvaHistory" style="max-height: 0px;">
			<?php the_field('ilvaHistory'); ?>
		</div>
		<div id="scienceIlva" style="max-height: 0px;">
			<?php the_field('scienceIlva'); ?>
		</div>
		<div id="securityIlva" style="max-height: 0px;">
			<?php the_field('securityIlva'); ?>
		</div>
		<div id="poliEfirIlva" style="max-height: 0px;">
			<?php the_field('poliEfirIlva'); ?>
		</div>
		<div id="poliuritanIlva" style="max-height: 0px;">
			<?php the_field('poliuritanIlva'); ?>
		</div>
		<div id="ultravioletIlva" style="max-height: 0px;">
			<?php the_field('ultravioletIlva'); ?>
		</div>
		<div id="waterIlva" style="max-height: 0px;">
			<?php the_field('waterIlva'); ?>
		</div>
		<div id="outsideIlva" style="max-height: 0px;">
			<?php the_field('outsideIlva'); ?>
		</div>
		<div id="paintsIlva" style="max-height: 0px;">
			<?php the_field('paintsIlva'); ?>
		</div>
		<div id="fireproofIlva" style="max-height: 0px;">
			<?php the_field('fireproofIlva'); ?>
		</div>
		<div id="nitroIlva" style="max-height: 0px;">
			<?php the_field('nitroIlva'); ?>
		</div>
		<div id="otherIlva" style="max-height: 0px;">
			<?php the_field('otherIlva'); ?>
		</div>
	</div>
	<div class="main-content" id="main-content2">
		<div id="historyAnesta" style="max-height: 0px;">
			<?php the_field('historyAnesta'); ?>
		</div>
		<div id="supernovaAnesta" style="max-height: 0px;">
			<?php the_field('supernovaAnesta'); ?>
		</div>
		<div id="gunsAnesta" style="max-height: 0px;">
			<?php the_field('gunsAnesta'); ?>
		</div>
		<div id="gunsAir" style="max-height: 0px;">
			<?php the_field('gunsAir'); ?>
		</div>
		<div id="electristicAnesta" style="max-height: 0px;">
			<?php the_field('electristicAnesta'); ?>
		</div>
		<div id="pompAirmix" style="max-height: 0px;">
			<?php the_field('pompAirmix'); ?>
		</div>
		<div id="pompAirless" style="max-height: 0px;">
			<?php the_field('pompAirless'); ?>
		</div>
		<div id="diafragmAnesta" style="max-height: 0px;">
			<?php the_field('diafragmAnesta'); ?>
		</div>
		<div id="automatAnesta" style="max-height: 0px;">
			<?php the_field('automatAnesta'); ?>
		</div>
		<div id="otherAnesta" style="max-height: 0px;">
			<?php the_field('otherAnesta'); ?>
		</div>
	</div>
	<div class="main-content" id="main-content3">
		<div id="poliDikema" style="max-height: 0px;">
			<?php the_field('poliDikema'); ?>
		</div>
		<div id="rasplavDikema" style="max-height: 0px;">
			<?php the_field('rasplavDikema'); ?>
		</div>
		<div id="poliuretanDikema" style="max-height: 0px;">
			<?php the_field('poliuretanDikema'); ?>
		</div>
		<div id="kfDikema" style="max-height: 0px;">
			<?php the_field('kfDikema'); ?>
		</div>
	</div>
	<div class="main-content" id="main-content4">
		<div id="historyIndasa" style="max-height: 0px;">
			<?php the_field('historyIndasa'); ?>
		</div>
		<div id="redIndasa" style="max-height: 0px;">
			<?php the_field('redIndasa'); ?>
		</div>
		<div id="plusIndasa" style="max-height: 0px;">
			<?php the_field('plusIndasa'); ?>
		</div>
		<div id="whiteIndasa" style="max-height: 0px;">
			<?php the_field('whiteIndasa'); ?>
		</div>
		<div id="otherIndasa" style="max-height: 0px;">
			<?php the_field('otherIndasa'); ?>
		</div>
		<div id="termsIndasa" style="max-height: 0px;">
			<?php the_field('termsIndasa'); ?>
		</div>
	</div>
</div>
</section>
<script type="text/javascript">
	
</script>
<?php get_footer(); ?>
