<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TheSetup-Practice01
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="two-column">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
			<ul>
				<li>Email: someweirdperson@something.com</li>
				<li>Website: someweirdperson.com</li>
				<li>
					<input type="email" name="email" id="email">
					<input type="button" value="Submit">
				</li>
			</ul>
		</div>
		<p class="copyright">&copy; Miles Angels 2022</p>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
