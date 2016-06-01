					<article class="blog-post">
                    	<div class="row">
	                    	<div class="col-md-12 full-width-xs">
	                    		<div class="blog-post-image text-center">
									<a href="<?php the_permalink(); ?>">
										<?php get_template_part('partials/thumbnails/page'); ?>
									</a>
								</div>
	                    	</div>
	                    </div>
						<div class="row">
	                    	<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
		                    	<div class="blog-post-body">
		                    		<h2>
		                    			<a href="<?php the_permalink(); ?>">
									    	<?php the_title(); ?>
										</a>
									</h2>
									<div class="blog-post-content">
									    <?php the_content(); ?>
									</div>
		                    	</div>
		                    </div>
						</div>
					</article>