
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand text-center-xs">
                <?php
                    bloginfo('name');
                ?>
            </a>
        </div>
        
            <div id="navbar-slideout" class="nav-slideout">
                    <div class="nav-slideout-header hidden visible-xs">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <?php
                                bloginfo('name');
                            ?>
                        </a>
                        <a href="#" class="navbar-close pull-right">
                            <span class="glyphicon glyphicon-remove"></span>
                        </a>
                    </div>
                    
                    <?php get_template_part('searchform-navbar'); ?>
                    
                    <?php 
    	                    wp_nav_menu( array( 
    	                            'menu'=> 'navbar',
    	                            'theme_location' => 'navbar-left',
    	                            'depth' => 2,
    	                            'container' => false,
    	                            'menu_class' => 'nav navbar-nav',
    	                            'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
    	                            'walker' => new wp_bootstrap_navwalker()
    	                        )
    	                    );
    	             ?>
                    
                <?php 
	                    wp_nav_menu( array( 
	                            'menu'=> 'navbar',
	                            'theme_location' => 'navbar-right',
	                            'depth' => 2,
	                            'container' => false,
	                            'menu_class' => 'nav navbar-nav navbar-right hidden-xs',
	                            'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
	                            'walker' => new wp_bootstrap_navwalker()
	                        )
	                    );
	             ?>
                    
            </div>
        <!--/.nav-slideout -->
    </div>
</nav>

        
        
        