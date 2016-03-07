<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Back to Front Wordpress
 */
?>

	</main>

	<footer class="site-footer" role="contentinfo">
	  <div class="content-wrapper">
	    <div class="content">
				&copy; <?php echo date("Y") ?>
      </div>
		</div>
	</footer>

</div>

<?php wp_footer(); ?>

<!-- Older IE polyfills -->
<!--[if IE 8]>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
<![endif]-->

</body>
</html>