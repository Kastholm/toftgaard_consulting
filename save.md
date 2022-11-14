<div class='owl-slider'>
		<h3>Vi samarbejder med</h3>
		<div class='corner'> </div>
		<div class="owl-carousel owl-theme">
		<?php $Partnere = new WP_Query(array(
  'post_per_page' => 2,
  'post_type' => 'samarbejdspartnere',
  'order' => 'ASC'
)); 
while($Partnere -> have_posts()) {
  $Partnere->the_post(); ?>
			<div class="item itemTwo"><img width="200" height="150" src=<?php echo the_post_thumbnail_url() ?> alt=<?php echo get_the_excerpt() ?> /></div>
			<?php
}
?> 
		</div>
	</div>