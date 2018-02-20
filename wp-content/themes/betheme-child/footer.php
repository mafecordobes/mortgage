<?php
/**
 * The template for displaying the footer.
 *
 * @package Betheme
 * @author Muffin group
 * @link http://muffingroup.com
 */


$back_to_top_class = mfn_opts_get('back-top-top');

if( $back_to_top_class == 'hide' ){
	$back_to_top_position = false;
} elseif( strpos( $back_to_top_class, 'sticky' ) !== false ){
	$back_to_top_position = 'body';
} elseif( mfn_opts_get('footer-hide') == 1 ){
	$back_to_top_position = 'footer';
} else {
	$back_to_top_position = 'copyright';
}

?>

<?php do_action( 'mfn_hook_content_after' ); ?>

<?php if( 'hide' != mfn_opts_get( 'footer-style' ) ): ?>
	<!-- #Footer -->
	<footer id="Footer" class="clearfix">
        <div class="text-footer">
            <div class="container-footer">
                We’ll help you get started, it just takes a few steps to get pre-approved! Start the process now with
                a free consultation. Contact Us For More Information.
            </div>
        </div>

		<?php if ( $footer_call_to_action = mfn_opts_get('footer-call-to-action') ): ?>
		<div class="footer_action">
			<div class="container-footer">
				<div class="column one column_column">
					<?php echo do_shortcode( $footer_call_to_action ); ?>
				</div>
			</div>
		</div>
		<?php endif; ?>

		<?php
			$sidebars_count = 0;
			for( $i = 1; $i <= 5; $i++ ){
				if ( is_active_sidebar( 'footer-area-'. $i ) ) $sidebars_count++;
			}

			if( $sidebars_count > 0 ){

				$footer_style = '';

				if( mfn_opts_get( 'footer-padding' ) ){
					$footer_style .= 'padding:'. mfn_opts_get( 'footer-padding' ) .';';
				}

				echo '<div class="widgets_wrapper" style="'. $footer_style .'">';
					echo '<div class="container-footer">';

						if( $footer_layout = mfn_opts_get( 'footer-layout' ) ){
							// Theme Options

							$footer_layout 	= explode( ';', $footer_layout );
							$footer_cols 	= $footer_layout[0];

							for( $i = 1; $i <= $footer_cols; $i++ ){
								if ( is_active_sidebar( 'footer-area-'. $i ) ){
									echo '<div class="column '. $footer_layout[$i] .'">';
										dynamic_sidebar( 'footer-area-'. $i );
									echo '</div>';
								}
							}

						} else {
							// Default - Equal Width

							$sidebar_class = '';
							switch( $sidebars_count ){
								case 2: $sidebar_class = 'one-second'; break;
								case 3: $sidebar_class = 'one-third'; break;
								case 4: $sidebar_class = 'one-fourth'; break;
								case 5: $sidebar_class = 'one-fifth'; break;
								default: $sidebar_class = 'one';
							}

							for( $i = 1; $i <= 5; $i++ ){
								if ( is_active_sidebar( 'footer-area-'. $i ) ){
									echo '<div class="column '. $sidebar_class .'">';
										dynamic_sidebar( 'footer-area-'. $i );
									echo '</div>';
								}
							}

						}

					echo '</div>';
				echo '</div>';
			}
		?>

		<?php if( mfn_opts_get('footer-hide') != 1 ): ?>

			<div class="footer_copy">
                <div class="footer_copyright">
				<div class="container">
					<div class="column one">

						<?php
							if( $back_to_top_position == 'copyright' ){
								echo '<a id="back_to_top" class="button button_js" href=""><i class="icon-up-open-big"></i></a>';
							}
						?>

						<!-- Copyrights -->
						<div class="copyright">
							<?php
								if( mfn_opts_get('footer-copy') ){
									echo do_shortcode( mfn_opts_get('footer-copy') );
								} else {
									echo '&copy; '. date( 'Y' ) .' '. get_bloginfo( 'name' ) .'. All Rights Reserved. <a target="_blank" rel="nofollow" href="http://muffingroup.com">Muffin group</a>';
								}
							?>
						</div>

						<?php
							if( has_nav_menu( 'social-menu-bottom' ) ){
								mfn_wp_social_menu_bottom();
							} else {
								get_template_part( 'includes/include', 'social' );
							}
						?>

					</div>
				</div>
			</div>
            </div>

		<?php endif; ?>

		<?php
			if( $back_to_top_position == 'footer' ){
				echo '<a id="back_to_top" class="button button_js in_footer" href=""><i class="icon-up-open-big"></i></a>';
			}
		?>

        <div class="madeby">
            <p>Made with <i class="icon-heart-fa"></i> by <span>Todd Publicidad</span></p>
            <img src="<?php echo get_template_directory_uri(); ?>/logo/logo_todd_mamut.png">
        </div>

	</footer>
<?php endif; ?>

</div><!-- #Wrapper -->

<?php
	// Responsive | Side Slide
	if( mfn_opts_get( 'responsive-mobile-menu' ) ){
		get_template_part( 'includes/header', 'side-slide' );
	}
?>

<?php
	if( $back_to_top_position == 'body' ){
		echo '<a id="back_to_top" class="button button_js '. $back_to_top_class .'" href=""><i class="icon-up-open-big"></i></a>';
	}
?>

<?php if( mfn_opts_get('popup-contact-form') ): ?>
	<div id="popup_contact">
		<a class="button button_js" href="#"><i class="<?php mfn_opts_show( 'popup-contact-form-icon', 'icon-mail-line' ); ?>"></i></a>
		<div class="popup_contact_wrapper">
			<?php echo do_shortcode( mfn_opts_get('popup-contact-form') ); ?>
			<span class="arrow"></span>
		</div>
	</div>
<?php endif; ?>

<?php do_action( 'mfn_hook_bottom' ); ?>

<!-- wp_footer() -->
<?php wp_footer(); ?>
<?php if(is_page( 'homepage' )): ?>
    <script>
        jQuery("#calculadora").mouseover(function(){
            jQuery(this).attr('src','/wp-content/uploads/2018/02/calculadora-claro.png');
        });
        jQuery("#calculadora").mouseleave(function(){
            jQuery(this).attr('src','/wp-content/uploads/2018/02/Calculadora-verde-oscuro.png');
        });

        jQuery("#manos").mouseover(function(){
            jQuery(this).attr('src','/wp-content/uploads/2018/02/manos-claro.png');
        });
        jQuery("#manos").mouseleave(function(){
            jQuery(this).attr('src','/wp-content/uploads/2018/02/Manos-verde-oscuro.png');
        });

        jQuery("#libreta").mouseover(function(){
            jQuery(this).attr('src','/wp-content/uploads/2018/02/libreta-claro.png');
        });
        jQuery("#libreta").mouseleave(function(){
            jQuery(this).attr('src','/wp-content/uploads/2018/02/Libreta-verde-oscuro.png');
        });

        jQuery("#casa").mouseover(function(){
            jQuery(this).attr('src','/wp-content/uploads/2018/02/casa-claro.png');
        });
        jQuery("#casa").mouseleave(function(){
            jQuery(this).attr('src','/wp-content/uploads/2018/02/Casa-verde-oscuro-1.png');
        });

        jQuery.load(function() {
            jQuery(".wp-gr .wp-google-place .wp-google-left img").attr('src', '/wp-content/uploads/2018/02/Logo-de-HG-en-PSD-tran.png');
        });


    </script>
<?php endif; ?>

</body>
</html>
