    <?php if ( is_home() ) { ?>
    
    
    	<div class="row">
			<div class="col-md-12 full-width-xs slider-col">
				
				<span class="banner-container">
					<span class="banner">
						Featured
					</span>
				</span>
			
			<?php
						
						// WP_Query arguments
			$main_slider_args = array (
				'tag'                    => 'showcase',
				'posts_per_page'         => '5',
				'ignore_sticky_posts'    => true,
			);
			
			// The Query
			$main_slider_query = new WP_Query( $main_slider_args );
			
			// The Loop
			if ( $main_slider_query->have_posts() ) {
			?>	
			<section class="main-slider">
				<ul class="bxslider">
			<?php	
				while ( $main_slider_query->have_posts() ) {
					$main_slider_query->the_post();
					// do something
			?>
				
					<li>
						<div class="slider-item">
							<?php get_template_part('partials/thumbnails/slider'); ?>
							<h2>
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php the_title(); ?>
								</a>
							</h2>
						</div>
					</li>
					
			<?php		
				}
			?>
				</ul>
			</section>
			<?php	
			} else {
				// no posts found
			}
			
			// Restore original Post Data
			wp_reset_postdata();
			
			?>

			</div>
		</div>
	
	<?php } ?>