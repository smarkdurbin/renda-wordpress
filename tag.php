<?php get_template_part('header'); ?>

        <section>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
				    <h1 class="text-center page-title">
				        <span class="text-muted">Tag:</span> <?php single_tag_title(); ?>  
				    </h1>
				    <?php get_template_part('loops/archive'); ?>
				</div>
			</div>
		</section>
		

<?php get_template_part('footer'); ?>