			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="wrap clearfix">

					<nav role="navigation">
							<?php bones_footer_links(); ?>
					</nav>

					<section class="fourcol first">
						<p>Welcome to my lifestyle, coding, baking, everything blog.</p>
					</section>

					<section class="fourcol">
						<img src="<?php echo get_template_directory_uri(); ?>/library/images/wcradio-png.png" alt="radio" />
					</section>

					<section class="fourcol last">
						<p>I created this theme, and it will probably keep changing.</p>
						<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>
					</section>

				</div> <!-- end #inner-footer -->

			</footer> <!-- end footer -->

		</div> <!-- end #container -->

		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>

	</body>

</html> <!-- end page. what a ride! -->
