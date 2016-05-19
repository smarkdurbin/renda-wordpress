<?php 
if ( have_posts() ) {
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	?>
		<p class="text-inside-line text-center text-uppercase small">
			<span>
				Page <?php echo $paged; ?>
			</span>
		</p>
	<?php
	while ( have_posts() ) {
		the_post(); 
		//
?>
		<?php get_template_part('content/archive'); ?>
<?php
		//
	} // end while
?>	
	<?php get_template_part('partials/pagination'); ?>
<?php
} // end if
?>