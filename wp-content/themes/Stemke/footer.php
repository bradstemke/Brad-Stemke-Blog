			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="wrap clearfix">

					<nav role="navigation">
							<?php bones_footer_links(); ?>
					</nav>

					<section class="fourcol first">
						<p>This is my lifestyle, coding, baking, adventuring, music, everything blog.</p>
						<p>Thanks for reading.</p>
					</section>


					<section class="fourcol last">
						<p>I created this theme, and it will probably keep changing, because that's how it goes.</p>
						<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>
					</section>

				</div> <!-- end #inner-footer -->

			</footer> <!-- end footer -->

		</div> <!-- end #container -->

		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>

	</body>

</html> <!-- end page. what a ride! -->
