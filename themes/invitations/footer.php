<?php
/**
 * Invitations template for displaying the footer
 *
 * @package WordPress
 * @subpackage Invitations
 * @since Invitations 1.0
 */
?>

				<ul class="footer-widgets"><?php
					if ( function_exists( 'dynamic_sidebar' ) ) :
						dynamic_sidebar( 'footer-sidebar' );
					endif; ?>
				</ul>

			</div>
		<?php wp_footer(); ?>
	</body>
</html>