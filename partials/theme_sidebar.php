                    <aside>
                    
                    <?php if ( is_active_sidebar( 'theme_right' ) ) : ?>
                        <?php dynamic_sidebar( 'theme_right' ); ?>
                    <?php endif; ?>
                    
                    
                    <?php get_template_part('partials/theme_widgets/featured-posts'); ?>
                    
                    <?php get_template_part('partials/theme_widgets/social-links'); ?>
                    
                    <?php get_template_part('partials/theme_widgets/categories'); ?>
                    
                    </aside>