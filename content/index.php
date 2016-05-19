                    <article class="blog-post">
                    	<div class="row">
							<div class="col-md-12 full-width-xs">
								<div class="blog-post-image">
									<a href="<?php the_permalink(); ?>">
										<?php
						                    if ( has_post_thumbnail() ) {
						                ?>
						                    <!--Post Thumbnail-->
						                    <?php the_post_thumbnail('blog-featured-sm',array('class' => 'h-center media-object')); ?>
						                    
						                <?php
						                    }
						                ?>
									</a>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
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
									    <?php the_excerpt(); ?>
									</p>
									<div class="read-more"><a href="<?php the_permalink(); ?>">Continue Reading</a></div>
								</div>
							</div>
						</div>
					</article>