<?php get_template_part('header'); ?>

        <section>
			<div class="row">
				<div class="col-md-8">
					<p class="text-inside-line text-uppercase hidden visible-sm visible-xs">
						<span>
							Latest
						</span>
					</p>
				    <?php get_template_part('loops/index'); ?>
				</div>
				<div class="col-md-4 sidebar-gutter">
					<?php //get_template_part('partials/theme_sidebar'); ?>
					<?php get_template_part('partials/theme_sidebar'); ?>
				</div>
			</div>
		</section>
		

<?php get_template_part('footer'); ?>