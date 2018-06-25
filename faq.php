<?php 
/*
Template Name: faq
*/
?>
<?php get_header(); ?>

<section class="separator" style="padding-top: 150px;background: none;">
	Ответы на часто задаваемые вопросы
</section>
<section class="faq-content faq-content3">
	<h2><?php echo get_cat_name(3);?></h2>

	<?php
		$id=3; // ID заданной рубрики
		$n=30;   // количество выводимых записей
		$recent = new WP_Query("cat=$id&showposts=$n"); 
		while($recent->have_posts()) : $recent->the_post();
			$ID = $post->ID;
			$postid = get_post($post->ID); 
			$title = $postid->post_title;
			?>
			<div class="item item<?php the_ID(); ?>">
				<a href="" class="test" onclick="heightBox('faq-sub-<?php the_ID(); ?>');plusFunc('pl<?php the_ID(); ?>');plusFunc('min<?php the_ID(); ?>'); return false">
					<span id="pl<?php the_ID(); ?>">+</span>
					<span id="min<?php the_ID(); ?>" style="opacity: 0;">-</span>
				</a>
				<div class="sub-container">
					<div class="shown">
						<?php the_field('вопрос-1'); ?>
					</div>
					<div id="faq-sub-<?php the_ID(); ?>" class="faq-sub" style="max-height: 0px;">
						<h4>Отвечает инженер 999 уровня <b>Иванов Иван</b></h4>
						<?php the_excerpt(); ?>

					</div>
				</div>
			</div>

		<?php endwhile; ?>
	</section>
	<section class="faq-content faq-content4">
		<h2><?php echo get_cat_name(4);?></h2>

		<?php
		$id=4; // ID заданной рубрики
		$n=30;   // количество выводимых записей
		$recent = new WP_Query("cat=$id&showposts=$n"); 
		while($recent->have_posts()) : $recent->the_post();
			$ID = $post->ID;
			$postid = get_post($post->ID); 
			$title = $postid->post_title;
			?>
			<div class="item item<?php the_ID(); ?>">
				<a href="" class="test" onclick="heightBox('faq-sub-<?php the_ID(); ?>');plusFunc('pl<?php the_ID(); ?>');plusFunc('min<?php the_ID(); ?>'); return false">
					<span id="pl<?php the_ID(); ?>">+</span>
					<span id="min<?php the_ID(); ?>" style="opacity: 0;">-</span>
				</a>
				<div class="sub-container">
					<div class="shown">
						<?php the_field('вопрос-1'); ?>
					</div>
					<div id="faq-sub-<?php the_ID(); ?>" class="faq-sub" style="max-height: 0px;">
						<h4>Отвечает инженер 999 уровня <b>Иванов Иван</b></h4>
						<?php the_excerpt(); ?>

					</div>
				</div>
			</div>

		<?php endwhile; ?>
	</section>
	<section class="faq-content faq-content5">
		<h2><?php echo get_cat_name(5);?></h2>

		<?php
		$id=5; // ID заданной рубрики
		$n=30;   // количество выводимых записей
		$recent = new WP_Query("cat=$id&showposts=$n"); 
		while($recent->have_posts()) : $recent->the_post();
			$ID = $post->ID;
			$postid = get_post($post->ID); 
			$title = $postid->post_title;
			?>
			<div class="item item<?php the_ID(); ?>">
				<a href="" class="test" onclick="heightBox('faq-sub-<?php the_ID(); ?>');plusFunc('pl<?php the_ID(); ?>');plusFunc('min<?php the_ID(); ?>'); return false">
					<span id="pl<?php the_ID(); ?>">+</span>
					<span id="min<?php the_ID(); ?>" style="opacity: 0;">-</span>
				</a>
				<div class="sub-container">
					<div class="shown">
						<?php the_field('вопрос-1'); ?>
					</div>
					<div id="faq-sub-<?php the_ID(); ?>" class="faq-sub" style="max-height: 0px;">
						<h4>Отвечает инженер 999 уровня <b>Иванов Иван</b></h4>
						<?php the_excerpt(); ?>

					</div>
				</div>
			</div>

		<?php endwhile; ?>
	</section>
	<section class="faq-content faq-content6">
		<h2><?php echo get_cat_name(6);?></h2>

		<?php
		$id=6; // ID заданной рубрики
		$n=30;   // количество выводимых записей
		$recent = new WP_Query("cat=$id&showposts=$n"); 
		while($recent->have_posts()) : $recent->the_post();
			$ID = $post->ID;
			$postid = get_post($post->ID); 
			$title = $postid->post_title;
			?>
			<div class="item item<?php the_ID(); ?>">
				<a href="" class="test" onclick="heightBox('faq-sub-<?php the_ID(); ?>');plusFunc('pl<?php the_ID(); ?>');plusFunc('min<?php the_ID(); ?>'); return false">
					<span id="pl<?php the_ID(); ?>">+</span>
					<span id="min<?php the_ID(); ?>" style="opacity: 0;">-</span>
				</a>
				<div class="sub-container">
					<div class="shown">
						<?php the_field('вопрос-1'); ?>
					</div>
					<div id="faq-sub-<?php the_ID(); ?>" class="faq-sub" style="max-height: 0px;">
						<h4>Отвечает инженер 999 уровня <b>Иванов Иван</b></h4>
						<?php the_excerpt(); ?>

					</div>
				</div>
			</div>

		<?php endwhile; ?>
	</section>
	<section class="faq-content faq-content7">
		<h2><?php echo get_cat_name(7);?></h2>

		<?php
		$id=7; // ID заданной рубрики
		$n=30;   // количество выводимых записей
		$recent = new WP_Query("cat=$id&showposts=$n"); 
		while($recent->have_posts()) : $recent->the_post();
			$ID = $post->ID;
			$postid = get_post($post->ID); 
			$title = $postid->post_title;
			?>
			<div class="item item<?php the_ID(); ?>">
				<a href="" class="test" onclick="heightBox('faq-sub-<?php the_ID(); ?>');plusFunc('pl<?php the_ID(); ?>');plusFunc('min<?php the_ID(); ?>'); return false">
					<span id="pl<?php the_ID(); ?>">+</span>
					<span id="min<?php the_ID(); ?>" style="opacity: 0;">-</span>
				</a>
				<div class="sub-container">
					<div class="shown">
						<?php the_field('вопрос-1'); ?>
					</div>
					<div id="faq-sub-<?php the_ID(); ?>" class="faq-sub" style="max-height: 0px;">
						<h4>Отвечает инженер 999 уровня <b>Иванов Иван</b></h4>
						<?php the_excerpt(); ?>

					</div>
				</div>
			</div>

		<?php endwhile; ?>
	</section>
	<section class="faq-content faq-content8">
		<h2><?php echo get_cat_name(8);?></h2>

		<?php
		$id=8; // ID заданной рубрики
		$n=30;   // количество выводимых записей
		$recent = new WP_Query("cat=$id&showposts=$n"); 
		while($recent->have_posts()) : $recent->the_post();
			$ID = $post->ID;
			$postid = get_post($post->ID); 
			$title = $postid->post_title;
			?>
			<div class="item item<?php the_ID(); ?>">
				<a href="" class="test" onclick="heightBox('faq-sub-<?php the_ID(); ?>');plusFunc('pl<?php the_ID(); ?>');plusFunc('min<?php the_ID(); ?>'); return false">
					<span id="pl<?php the_ID(); ?>">+</span>
					<span id="min<?php the_ID(); ?>" style="opacity: 0;">-</span>
				</a>
				<div class="sub-container">
					<div class="shown">
						<?php the_field('вопрос-1'); ?>
					</div>
					<div id="faq-sub-<?php the_ID(); ?>" class="faq-sub" style="max-height: 0px;">
						<h4>Отвечает инженер 999 уровня <b>Иванов Иван</b></h4>
						<?php the_excerpt(); ?>

					</div>
				</div>
			</div>

		<?php endwhile; ?>
	</section>
	<section class="faq-content faq-content9">
		<h2><?php echo get_cat_name(9);?></h2>

		<?php
		$id=9; // ID заданной рубрики
		$n=30;   // количество выводимых записей
		$recent = new WP_Query("cat=$id&showposts=$n"); 
		while($recent->have_posts()) : $recent->the_post();
			$ID = $post->ID;
			$postid = get_post($post->ID); 
			$title = $postid->post_title;
			?>
			<div class="item item<?php the_ID(); ?>">
				<a href="" class="test" onclick="heightBox('faq-sub-<?php the_ID(); ?>');plusFunc('pl<?php the_ID(); ?>');plusFunc('min<?php the_ID(); ?>'); return false">
					<span id="pl<?php the_ID(); ?>">+</span>
					<span id="min<?php the_ID(); ?>" style="opacity: 0;">-</span>
				</a>
				<div class="sub-container">
					<div class="shown">
						<?php the_field('вопрос-1'); ?>
					</div>
					<div id="faq-sub-<?php the_ID(); ?>" class="faq-sub" style="max-height: 0px;">
						<h4>Отвечает инженер 999 уровня <b>Иванов Иван</b></h4>
						<?php the_excerpt(); ?>

					</div>
				</div>
			</div>

		<?php endwhile; ?>
	</section>
	<section class="faq-content faq-content10">
		<h2><?php echo get_cat_name(10);?></h2>

		<?php
		$id=10; // ID заданной рубрики
		$n=30;   // количество выводимых записей
		$recent = new WP_Query("cat=$id&showposts=$n"); 
		while($recent->have_posts()) : $recent->the_post();
			$ID = $post->ID;
			$postid = get_post($post->ID); 
			$title = $postid->post_title;
			?>
			<div class="item item<?php the_ID(); ?>">
				<a href="" class="test" onclick="heightBox('faq-sub-<?php the_ID(); ?>');plusFunc('pl<?php the_ID(); ?>');plusFunc('min<?php the_ID(); ?>'); return false">
					<span id="pl<?php the_ID(); ?>">+</span>
					<span id="min<?php the_ID(); ?>" style="opacity: 0;">-</span>
				</a>
				<div class="sub-container">
					<div class="shown">
						<?php the_field('вопрос-1'); ?>
					</div>
					<div id="faq-sub-<?php the_ID(); ?>" class="faq-sub" style="max-height: 0px;">
						<h4>Отвечает инженер 999 уровня <b>Иванов Иван</b></h4>
						<?php the_excerpt(); ?>

					</div>
				</div>
			</div>

		<?php endwhile; ?>
	</section>
	<section class="faq-content faq-content11">
		<h2><?php echo get_cat_name(11);?></h2>

		<?php
		$id=11; // ID заданной рубрики
		$n=30;   // количество выводимых записей
		$recent = new WP_Query("cat=$id&showposts=$n"); 
		while($recent->have_posts()) : $recent->the_post();
			$ID = $post->ID;
			$postid = get_post($post->ID); 
			$title = $postid->post_title;
			?>
			<div class="item item<?php the_ID(); ?>">
				<a href="" class="test" onclick="heightBox('faq-sub-<?php the_ID(); ?>');plusFunc('pl<?php the_ID(); ?>');plusFunc('min<?php the_ID(); ?>'); return false">
					<span id="pl<?php the_ID(); ?>">+</span>
					<span id="min<?php the_ID(); ?>" style="opacity: 0;">-</span>
				</a>
				<div class="sub-container">
					<div class="shown">
						<?php the_field('вопрос-1'); ?>
					</div>
					<div id="faq-sub-<?php the_ID(); ?>" class="faq-sub" style="max-height: 0px;">
						<h4>Отвечает инженер 999 уровня <b>Иванов Иван</b></h4>
						<?php the_excerpt(); ?>

					</div>
				</div>
			</div>

		<?php endwhile; ?>
	</section>
	<section class="faq-content faq-content12">
		<h2><?php echo get_cat_name(12);?></h2>

		<?php
		$id=12; // ID заданной рубрики
		$n=30;   // количество выводимых записей
		$recent = new WP_Query("cat=$id&showposts=$n"); 
		while($recent->have_posts()) : $recent->the_post();
			$ID = $post->ID;
			$postid = get_post($post->ID); 
			$title = $postid->post_title;
			?>
			<div class="item item<?php the_ID(); ?>">
				<a href="" class="test" onclick="heightBox('faq-sub-<?php the_ID(); ?>');plusFunc('pl<?php the_ID(); ?>');plusFunc('min<?php the_ID(); ?>'); return false">
					<span id="pl<?php the_ID(); ?>">+</span>
					<span id="min<?php the_ID(); ?>" style="opacity: 0;">-</span>
				</a>
				<div class="sub-container">
					<div class="shown">
						<?php the_field('вопрос-1'); ?>
					</div>
					<div id="faq-sub-<?php the_ID(); ?>" class="faq-sub" style="max-height: 0px;">
						<h4>Отвечает инженер 999 уровня <b>Иванов Иван</b></h4>
						<?php the_excerpt(); ?>

					</div>
				</div>
			</div>

		<?php endwhile; ?>
	</section>
	<section class="faq-content faq-content13">
		<h2><?php echo get_cat_name(13);?></h2>

		<?php
		$id=13; // ID заданной рубрики
		$n=30;   // количество выводимых записей
		$recent = new WP_Query("cat=$id&showposts=$n"); 
		while($recent->have_posts()) : $recent->the_post();
			$ID = $post->ID;
			$postid = get_post($post->ID); 
			$title = $postid->post_title;
			?>
			<div class="item item<?php the_ID(); ?>">
				<a href="" class="test" onclick="heightBox('faq-sub-<?php the_ID(); ?>');plusFunc('pl<?php the_ID(); ?>');plusFunc('min<?php the_ID(); ?>'); return false">
					<span id="pl<?php the_ID(); ?>">+</span>
					<span id="min<?php the_ID(); ?>" style="opacity: 0;">-</span>
				</a>
				<div class="sub-container">
					<div class="shown">
						<?php the_field('вопрос-1'); ?>
					</div>
					<div id="faq-sub-<?php the_ID(); ?>" class="faq-sub" style="max-height: 0px;">
						<h4>Отвечает инженер 999 уровня <b>Иванов Иван</b></h4>
						<?php the_excerpt(); ?>

					</div>
				</div>
			</div>

		<?php endwhile; ?>
	</section>
	<section class="faq-content faq-content14">
		<h2><?php echo get_cat_name(14);?></h2>

		<?php
		$id=14; // ID заданной рубрики
		$n=30;   // количество выводимых записей
		$recent = new WP_Query("cat=$id&showposts=$n"); 
		while($recent->have_posts()) : $recent->the_post();
			$ID = $post->ID;
			$postid = get_post($post->ID); 
			$title = $postid->post_title;
			?>
			<div class="item item<?php the_ID(); ?>">
				<a href="" class="test" onclick="heightBox('faq-sub-<?php the_ID(); ?>');plusFunc('pl<?php the_ID(); ?>');plusFunc('min<?php the_ID(); ?>'); return false">
					<span id="pl<?php the_ID(); ?>">+</span>
					<span id="min<?php the_ID(); ?>" style="opacity: 0;">-</span>
				</a>
				<div class="sub-container">
					<div class="shown">
						<?php the_field('вопрос-1'); ?>
					</div>
					<div id="faq-sub-<?php the_ID(); ?>" class="faq-sub" style="max-height: 0px;">
						<h4>Отвечает инженер 999 уровня <b>Иванов Иван</b></h4>
						<?php the_excerpt(); ?>

					</div>
				</div>
			</div>

		<?php endwhile; ?>
	</section>
	<section class="faq-content faq-content15">
		<h2><?php echo get_cat_name(15);?></h2>
		<?php
		$id=15; // ID заданной рубрики
		$n=30;   // количество выводимых записей
		$recent = new WP_Query("cat=$id&showposts=$n"); 
		while($recent->have_posts()) : $recent->the_post();
			$ID = $post->ID;
			$postid = get_post($post->ID); 
			$title = $postid->post_title;
			?>
			<div class="item item<?php the_ID(); ?>">
				<a href="" class="test" onclick="heightBox('faq-sub-<?php the_ID(); ?>');plusFunc('pl<?php the_ID(); ?>');plusFunc('min<?php the_ID(); ?>'); return false">
					<span id="pl<?php the_ID(); ?>">+</span>
					<span id="min<?php the_ID(); ?>" style="opacity: 0;">-</span>
				</a>
				<div class="sub-container">
					<div class="shown">
						<?php the_field('вопрос-1'); ?>
					</div>
					<div id="faq-sub-<?php the_ID(); ?>" class="faq-sub" style="max-height: 0px;">
						<h4>Отвечает инженер 999 уровня <b>Иванов Иван</b></h4>
						<?php the_excerpt(); ?>

					</div>
				</div>
			</div>

		<?php endwhile; ?>
	</section>
	<section class="faq-content faq-content16">
		<h2><?php echo get_cat_name(16);?></h2>
		<?php
		$id=16; // ID заданной рубрики
		$n=30;   // количество выводимых записей
		$recent = new WP_Query("cat=$id&showposts=$n"); 
		while($recent->have_posts()) : $recent->the_post();
			$ID = $post->ID;
			$postid = get_post($post->ID); 
			$title = $postid->post_title;
			?>
			<div class="item item<?php the_ID(); ?>">
				<a href="" class="test" onclick="heightBox('faq-sub-<?php the_ID(); ?>');plusFunc('pl<?php the_ID(); ?>');plusFunc('min<?php the_ID(); ?>'); return false">
					<span id="pl<?php the_ID(); ?>">+</span>
					<span id="min<?php the_ID(); ?>" style="opacity: 0;">-</span>
				</a>
				<div class="sub-container">
					<div class="shown">
						<?php the_field('вопрос-1'); ?>
					</div>
					<div id="faq-sub-<?php the_ID(); ?>" class="faq-sub" style="max-height: 0px;">
						<h4>Отвечает инженер 999 уровня <b>Иванов Иван</b></h4>
						<?php the_excerpt(); ?>

					</div>
				</div>
			</div>

		<?php endwhile; ?>
	</section>
	<section class="faq-content faq-content17">
		<h2><?php echo get_cat_name(17);?></h2>
		<?php
		$id=17; // ID заданной рубрики
		$n=30;   // количество выводимых записей
		$recent = new WP_Query("cat=$id&showposts=$n"); 
		while($recent->have_posts()) : $recent->the_post();
			$ID = $post->ID;
			$postid = get_post($post->ID); 
			$title = $postid->post_title;
			?>
			<div class="item item<?php the_ID(); ?>">
				<a href="" class="test" onclick="heightBox('faq-sub-<?php the_ID(); ?>');plusFunc('pl<?php the_ID(); ?>');plusFunc('min<?php the_ID(); ?>'); return false">
					<span id="pl<?php the_ID(); ?>">+</span>
					<span id="min<?php the_ID(); ?>" style="opacity: 0;">-</span>
				</a>
				<div class="sub-container">
					<div class="shown">
						<?php the_field('вопрос-1'); ?>
					</div>
					<div id="faq-sub-<?php the_ID(); ?>" class="faq-sub" style="max-height: 0px;">
						<h4>Отвечает инженер 999 уровня <b>Иванов Иван</b></h4>
						<?php the_excerpt(); ?>

					</div>
				</div>
			</div>

		<?php endwhile; ?>
	</section>
	<script type="text/javascript">
		for (i=3;i<=17;i++) {
			a = '.faq-content'+i;
			if (document.querySelector(`${a}`).getElementsByTagName('div')[0]) {

				// if (document.querySelector(`${a}`).getElementsByTagName('div')[0].innerHTML.length<10) {
				// 	document.querySelector(`${a}`).style.display='none';
				// }
			}
			else {
				document.querySelector(`${a}`).style.display='none';
			}
		
		}
	</script>
	<?php get_footer(); ?>
