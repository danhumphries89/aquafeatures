<?php get_header(); ?>

	<?php
		//load the images needed for the slider
		if($handle = opendir('sliderImages')){
			while(false !== ($entry = readdir($handle))){
				if((strlen($entry) > 3) && (preg_match('/.jpg/i', $entry))){
					$items[] = $entry;
				}
			}
			closedir($handle);
		}
	?>

	<div class="content-list">
	<?php foreach($items as $key=>$item) : ?>

			<li id="page<?php echo $key; ?>" style="background-image: url(sliderImages/<?php echo $item; ?>);" class="sliderImage">
				<h2>Testing</h2>
			</li>
	<?php endforeach; ?>
	</div>

<?php get_footer(); ?>