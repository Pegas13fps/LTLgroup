<?php 
/*
Template Name: galleryList
*/
?>
<?php get_header(); ?>

<section class="separator gallery-separator">
	Галерея готовых решений
</section>
<section class="complex complex-page complex-blog gallery-container">
	<div class="portfolio-filter-container margin-top-20">
		<ul class="portfolio-filter">
			<li class="portfolio-filter-label label label-primary">
				Фильтровать по:
			</li>
			<li>
				<a href="#" class="portfolio-selected btn btn-default" data-filter="*">Все</a>
			</li>
			<li>
				<a href="#" class="btn btn-default" data-filter=".galleryotkryt">Открытопористая</a>
			</li>
			<li>
				<a href="#" class="btn btn-default" data-filter=".galleryzakryt">Закрытопористая</a>
			</li>
			<li>
				<a href="#" class="btn btn-default" data-filter=".gallerymatova">Матовая</a>
			</li>
			<li>
				<a href="#" class="btn btn-default" data-filter=".galleryglyanc">Глянцевая</a>
			</li>
			<li>
				<a href="#" class="btn btn-default" data-filter=".galleryprozrach">Прозрачная</a>
			</li>
			<li>
				<a href="#" class="btn btn-default" data-filter=".gallerypigment">Пигментированная</a>
			</li>
			<li>
				<a href="#" class="btn btn-default" data-filter=".galleryinside">Внутренняя</a>
			</li>
			<li>
				<a href="#" class="btn btn-default" data-filter=".galleryoutside">Наружная</a>
			</li>
			<li>
				<a href="#" class="btn btn-default" data-filter=".galleryspec">Спецэффекты</a>
			</li>
		</ul>
	</div>
	<div class="wrap portfolio-group" style="padding-left: 0;">
		<?php
		// $id=; // ID заданной рубрики
		$n=100;   // количество выводимых записей
		$recent = new WP_Query("cat=22,23,24,25,26,27,28,29,30&showposts=$n");
		while($recent->have_posts()) : $recent->the_post();
			$ID = $post->ID;
			$postid = get_post($post->ID);
			$title = $postid->post_title;
			?>

			<a href="<?php the_permalink($postid); ?>" class="item item1 portfolio-item <?php $category = get_the_category();
echo $category[0]->slug; ?>">
				<div class="img-bg">
					<img class="cbImg" src="<?php
					$thumb_id = get_post_thumbnail_id();
					$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
					echo $thumb_url[0];
					?>" alt="<?php the_title(); ?>">
				</div>
				<div class="info-text">
					<span><?php the_title(); ?></span>
				</div>
			</a>
		<?php endwhile; ?>


	</div>

</section>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>


<script type="text/javascript">

// isotope
$(window).load(function() {
	var $cont = $('.portfolio-group');
	
	$cont.isotope({
		itemSelector: '.portfolio-group .portfolio-item',
		masonry: {columnWidth: $('.isotope-item:first').width(), gutterWidth: -20, isFitWidth: true},
		filter: '*',
	});

	$('.portfolio-filter-container a').click(function() {
		$cont.isotope({
			filter: this.getAttribute('data-filter')
		});

		return false;
	});

	var lastClickFilter = null;
	$('.portfolio-filter a').click(function() {

        //first clicked we don't know which element is selected last time
        if (lastClickFilter === null) {
        	$('.portfolio-filter a').removeClass('portfolio-selected');
        }
        else {
        	$(lastClickFilter).removeClass('portfolio-selected');
        }

        lastClickFilter = this;
        $(this).addClass('portfolio-selected');
    });

});
</script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.isotope.js"></script>
<?php get_footer(); ?>
