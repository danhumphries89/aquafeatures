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
				<div class="page-content">
					<h2>Ponds & Aquariums</h2>
					<h4>{Generic Subtitle}</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dignissim, diam vitae pharetra convallis, arcu ante ornare ante, quis egestas odio lacus nec sem. Mauris semper tincidunt ligula at condimentum. Aliquam varius tristique dictum. Sed luctus sollicitudin dolor quis hendrerit. Sed venenatis nisi id arcu tincidunt eu pharetra leo euismod. Morbi quis mauris purus, commodo luctus elit. Fusce eu quam id tellus dictum euismod.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dignissim, diam vitae pharetra convallis, arcu ante ornare ante, quis egestas odio lacus nec sem. Mauris semper tincidunt ligula at condimentum. Aliquam varius tristique dictum. Sed luctus sollicitudin dolor quis hendrerit. Sed venenatis nisi id arcu tincidunt eu pharetra leo euismod. Morbi quis mauris purus, commodo luctus elit. Fusce eu quam id tellus dictum euismod.</p>
				</div>
			</li>
	<?php endforeach; ?>
	</div>

<?php get_footer(); ?>