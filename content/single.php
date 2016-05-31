					<article id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?>>
                    	<div class="row">
	                    	<div class="col-md-12 full-width-xs">
	                    		<div class="blog-post-image text-center">
	                    			<?php $attachment_id = get_post_thumbnail_id( $post_id ); ?> 
	                    			<?php $attachment_page = get_attachment_link( $attachment_id ); ?>
									<a href="<?php echo $attachment_page; ?>">
										<?php get_template_part('partials/thumbnails/page'); ?>
									</a>
								</div>
	                    	</div>
	                    </div>
						<div class="row">
		                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
								<div class="blog-post-body">
		                    		<h2><a href="<?php the_permalink(); ?>">
									    <?php the_title(); ?>
									</a></h2>
									<div class="post-meta">
									    <span>by <a href="#"><?php echo get_the_author_link(); ?></a></span>
									    /<span><i class="fa fa-clock-o"></i><?php the_time('F j, Y'); ?></span>
									    /<span><i class="fa fa-comment-o"></i> <a href="#"><?php echo get_comments_number(); ?></a></span>
									</div>
									<p>
									    <?php the_content(); ?>
									</p>
									<p>
										<br>
										<?php the_tags( ); ?>
									</p>
									<?php echo get_the_category_list(); ?>
		                    	</div>
		                    </div>
						</div>
						
						<div class="blog-post-comments">
							<div class="row">
		                    	<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
				                    <?php
				                    // If comments are open or we have at least one comment, load up the comment template.
									if ( comments_open() || get_comments_number() ) {
										comments_template();
									}
									?>
				                </div>
							</div>
						</div>
					</article>