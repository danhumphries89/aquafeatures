<?php get_header(); ?>

	<ul class="content-list">

	<?php

		$currentPost = 0;
		$page_query = new WP_Query( array( 
			'post_type' => 'page', 
			'order' => 'ASC', 
			'orderby' => 'menu_order' 
		));
		while($page_query->have_posts()) : $page_query->the_post();

			if(has_post_thumbnail()){
				$post_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
			}
	?>

			<li id="page<?php echo $currentPost; ?>" style="background-image: url(<?php echo $post_thumbnail[0]; ?>);" class="sliderImage">
				<div class="page-content">
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
				</div>
			</li>

	<?php $currentPost++; endwhile; ?>
	</ul>

<?php get_footer(); ?>