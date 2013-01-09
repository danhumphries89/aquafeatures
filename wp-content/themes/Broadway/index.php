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

			$custom_fields = get_post_meta(get_the_ID());

			if(has_post_thumbnail()){
				$post_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
			}
	?>

			<li id="page<?php echo $currentPost; ?>" class="item <?php echo $custom_fields['additional_classes'][0]; ?>">
				<div class="page-content">
					<h2>
						<?php 
							$replaceString = "<span class='alt-color'>" . $custom_fields['title_field'][0] . "</span>";
							$currentTitle = str_replace($custom_fields['title_field'][0], $replaceString, get_the_title()); 
							echo $currentTitle;
						?>
					</h2>
					<?php the_content(); ?>
				</div>
			</li>

	<?php $currentPost++; unset($post_thumbnail); endwhile; ?>
	</ul>

<?php get_footer(); ?>