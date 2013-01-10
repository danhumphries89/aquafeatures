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
				<?php if($custom_fields['gallery_folder'][0]) : ?>
					<div class="gallery_container flexslider slideshow<?php echo $currentPost; ?>">
						<?php
							//load the images needed for the slider
							if($handle = opendir("galleries/".$custom_fields['gallery_folder'][0])){
								while(false !== ($entry = readdir($handle))){
									if((strlen($entry) > 3) && (preg_match('/.jpg/i', $entry))){
										$items[] = $entry;
									}
								}
								closedir($handle);
							}
						?>
						<ul class="slides">
						<?php foreach($items as $key=>$item) : ?>
							<li><img src="galleries/<?php echo $custom_fields['gallery_folder'][0] ."/". $item; ?>" width="600" height="450" /></li>
						<?php endforeach; ?>
						</ul>
					</div>
				<?php endif; ?>
			</li>

	<?php $currentPost++; unset($post_thumbnail); endwhile; ?>
	</ul>

<?php get_footer(); ?>