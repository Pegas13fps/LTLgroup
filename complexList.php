<?php 
/*
Template Name: complexList
*/
?>
<?php get_header(); ?>

<section class="separator gallery-separator">
	Комплексные решения от профессионалов LTL Group
</section>
<section class="complex complex-page complex-blog">
	
	<div class="wrap portfolio-group" style="padding-left: 0;">
		<?php
		// $id=; // ID заданной рубрики
		$n=100;   // количество выводимых записей
		$recent = new WP_Query("cat=18,19,20,21&showposts=$n");
		while($recent->have_posts()) : $recent->the_post();
			$ID = $post->ID;
			$postid = get_post($post->ID);
			$title = $postid->post_title;
			?>
			<a href="http://ltlgroup.ltl.com.ua/archives/130" class="item item1 portfolio-item video">
				<div class="img-bg">
					<img class="cbImg" src="<?php
					$thumb_id = get_post_thumbnail_id();
					$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
					echo $thumb_url[0];
					?>" alt="<?php the_title(); ?>">
				</div>
				<div class="info-text">
					<span>Первый комплекс</span>
				</div>
				<span class="excerpts excerpts-blog">
					<?php the_excerpt(); ?>
				</span>
			</a>
		<?php endwhile; ?>


	</div>

</section>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>


<script type="text/javascript">
	let it = document.querySelector('.portfolio-group .item');
	let ita = it.getElementsByTagName('div');
	let lis = document.querySelector('.portfolio-group');
	let lisa = lis.getElementsByTagName('a');
	let filterArr = ['problems','news','study','useful'];
	for(i=0;i<=lisa.length;i++) {
		if (lisa[i]) {
			if (lisa[i].getElementsByTagName('div')[0].innerHTML == 'Блог Решение проблем') {
				lisa[i].classList.add(filterArr[0]);
			}
			else if (lisa[i].getElementsByTagName('div')[0].innerHTML == 'Блог новости') {
				lisa[i].classList.add(filterArr[1]);
			}
			else if (lisa[i].getElementsByTagName('div')[0].innerHTML == 'Блог обучение') {
				lisa[i].classList.add(filterArr[2]);
			}
			else if (lisa[i].getElementsByTagName('div')[0].innerHTML == 'Блог полезное') {
				lisa[i].classList.add(filterArr[3]);
			}
		}
	}
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
