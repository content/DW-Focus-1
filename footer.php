<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 */
?>
            </div>
         </div>
     </div>

    <?php if( is_home() ) : ?>
        <!-- Bottom sidebar position -->
        <?php if( is_active_sidebar( 'dw_focus_bottom' ) ) : ?>
        <div id="bottom">
            <div class="container">
            <?php dynamic_sidebar('dw_focus_bottom'); ?>
            </div>
        </div>
        <?php endif; ?>
    <?php endif; ?>

    <!-- Footer -->
    <footer id="colophon" class="site-footer dark" role="contentinfo">
        <div class="container">

            <div id="site-tools">
                <div class="row-fluid">
                    <div class="span9"><?php dw_breadcrumb(); ?></div>
                    <?php if( is_active_sidebar( 'dw_focus_footer_1' ) 
                        || is_active_sidebar( 'dw_focus_footer_2' ) 
                        || is_active_sidebar( 'dw_focus_footer_3' )  
                        || is_active_sidebar( 'dw_focus_footer_4' )  ) { ?>
                    <div class="span3"><a href="#" class="footer-toggle pull-right"><?php _e('Site index', 'dw_focus');?></a></div>
                    <?php } ?>
                </div>
            </div>

            <?php if( is_active_sidebar( 'dw_focus_footer_1' ) 
                        || is_active_sidebar( 'dw_focus_footer_2' ) 
                        || is_active_sidebar( 'dw_focus_footer_3' )  
                        || is_active_sidebar( 'dw_focus_footer_4' )  ) { ?>
            <div id="sidebar-footer" class="row-fluid">
                <?php if( is_active_sidebar('dw_focus_footer_1') ) { ?>
                <div id="sidebar-footer-1" class="span3">
                <?php dynamic_sidebar('dw_focus_footer_1'); ?>
                </div>
                <?php } ?>
                <?php if( is_active_sidebar('dw_focus_footer_2') ) { ?>
                <div id="sidebar-footer-2" class="span3">
                <?php dynamic_sidebar('dw_focus_footer_2'); ?>
                </div>
                <?php } ?>
                <?php if( is_active_sidebar('dw_focus_footer_3') ) { ?>
                <div id="sidebar-footer-3" class="span3">
                <?php dynamic_sidebar('dw_focus_footer_3'); ?>
                </div>
                <?php } ?>
                <?php if( is_active_sidebar('dw_focus_footer_4') ) { ?>
                <div id="sidebar-footer-4" class="span3">
                <?php dynamic_sidebar('dw_focus_footer_4'); ?>
                </div>
                <?php } ?>
            </div>

            <?php } ?>

            <div class="footer-shadown"></div>
        </div>

        <div id="site-info" class="container">
            <div class="clearfix">
                <div class="copyright">
                    <p><?php _e('Copyright &copy; 2012 by <a href="http://demo.designwall.com/dw-focus/" title="DW Focus" rel="nofollow">DW Focus</a>. Proudly powered by <a href="http://wordpress.org/" title="Semantic Personal Publishing Platform">WordPress</a>', 'dw_focus');?></p>
                    <p><?php _e('<a title="Responsive WordPress Themes for Free and Premium" href="http://designwall.com/" rel="nofollow">WordPress Theme by DesignWall</a>', 'dw_focus');?></p>
                </div>
                <div class="logo">
                    <a class="small-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                </div>
            </div>
        </div>
    </footer><!-- #colophon .site-footer -->
<a class="scroll-top" href="#masthead" title="<?php _e( 'Scroll to top', 'dw-focus' ); ?>"><?php _e( 'Top', 'dw-focus' ); ?></a>
<?php wp_footer(); ?>
</body>
</html>
