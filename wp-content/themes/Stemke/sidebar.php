				<div id="sidebar1" class="sidebar threecol last clearfix" role="complementary">

					<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>
						
						<img src="<?php echo get_template_directory_uri(); ?>/library/images/wcradio.jpg" alt="radio" />

						<?php dynamic_sidebar( 'sidebar1' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->

						<div class="alert alert-help">
							<p><?php _e( 'Please activate some Widgets.', 'bonestheme' );  ?></p>
						</div>

					<?php endif; ?>

				</div>