<?php 
/*
Template Name: blogItem
Template Post Type: post, product
*/
?>
<?php get_header(); ?>

<section class="gallery-separator info-box blogMeta">
	<div class="title-box" style="background: url(<?php
		$thumb_id = get_post_thumbnail_id();
		$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
		echo $thumb_url[0];
		?>) 50% no-repeat;background-size: cover;">
		<div>
			<p class="central-text"><?php the_title(); ?></p>
			<div></div>
		</div>
	</div>

	<div class="main-content">
		<div class="left-content">
			<?php the_post(); ?>
			<?php the_content(); ?>

			<div class="delimiter"></div>
			<div class="share-box">
				<h3>ПОДЕЛИТЬСЯ ЭТОЙ ЗАПИСЬЮ!</h3>
				<div class="social-networks">
					<a href="https://telegram.me/share?url=<?php echo get_permalink(); ?>" target="_blank"> <img alt="telegram" src="<?php bloginfo('template_directory'); ?>/img/telegram-black.png"></a>
					<a href="http://www.facebook.com/sharer.php?u=<?php echo get_permalink(); ?>" target="_blank"> <img alt="facebook" src="<?php bloginfo('template_directory'); ?>/img/facebook-logo_black.png"></a>
					<a href="https://plus.google.com/share?url=<?php echo get_permalink(); ?>" target="_blank"> <img alt="google+" src="<?php bloginfo('template_directory'); ?>/img/google_plus-black.png"></a>
					<!-- <a href="https://www.instagram.com/" target="_blank"> <img alt="instagram" src="<?php bloginfo('template_directory'); ?>/img/instagram_logo-black.png"></a> -->
				</div>
			</div>
		</div>


		<div class="right-content">
			<div>
				<h4>Популярные новости</h4>

				<?php query_posts('orderby=rand&showposts=5&cat=18,19,20,21'); ?>
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
						<ul>
							<li><a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>" class="news-box">
								<img src="<?php
								$thumb_id = get_post_thumbnail_id();
								$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
								echo $thumb_url[0];
								?>">
								<p><?php the_title(); ?></p>
							</a></li>
						</ul>
					<?php endwhile; endif; ?>
				</div>
				<div>
					<h4>Recent Tweets</h4>
				</div>
			</div>
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
