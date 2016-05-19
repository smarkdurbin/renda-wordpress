                    <article class="blog-post">
						<div class="blog-post-image hidden">
							<a href="<?php the_permalink(); ?>">
								
							</a>
						</div>
						<div class="blog-post-body">
							<h2 class=""><a href="<?php the_permalink(); ?>">
							    <?php the_title(); ?>
							</a></h2>
							<div class="post-meta">
							    <span>by <a href="#"><?php echo get_the_author_link(); ?></a></span>
							    /<span><i class="fa fa-clock-o"></i><?php the_time('F j, Y'); ?></span>
							    /<span><i class="fa fa-comment-o"></i> <a href="#"><?php echo get_comments_number(); ?></a></span>
							</div>
							<p>
							    <?php //the_excerpt(); ?>
							</p>
							<!--<div class="read-more"><a href="<?php the_permalink(); ?>">Continue Reading</a></div>-->
						</div>
					</article>