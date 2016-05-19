        </div><!-- /.container -->
        <footer class="footer">

			<div class="footer-socials">
				<?php
                echo strip_tags(wp_nav_menu(
                        array('theme_location' => 'social-links',
                            'container_class' => 'user_menu',//custom container class
                            'echo' => false,
                            'items_wrap' => '%3$s')
                ), '<a><span><i><div>');
                ?>
			</div>

			<div class="footer-bottom">
				<i class="fa fa-copyright"></i> Copyright <script type="text/javascript">var d = new Date();var n = d.getFullYear();document.write(n);</script>. All rights reserved.<br>
				Theme design by <a href="http://www.moozthemes.com">MOOZ Themes</a>, Made for Wordpress by <a href="http://markdurb.in">Mark Durbin</a>
			</div>
		</footer>
        <?php wp_footer(); ?>
	</body>
</html>