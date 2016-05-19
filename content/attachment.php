					<article class="blog-post">
						<div class="row">
							<div class="col-md-12 full-width-xs">
		                    	<div class="blog-post-body">
		                    		<h2>
									    <?php the_title(); ?>
									</h2>
									<a href="<?php echo wp_get_attachment_url( $_post->ID ); ?>">
										<?php echo wp_get_attachment_image( get_the_ID(), 'page-image h-center' ); ?>
									</a>
									<p>
									    <?php //the_content(); ?>
									</p>
		                    	</div>
		                    </div>
						</div>
					</article>