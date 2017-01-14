<?php namespace s2clean;

if(!defined('WPINC'))
	exit('Do NOT access this file directly.');
$theme = theme(); // Theme instance.
?>
<?php do_action(__NAMESPACE__.'__before_footer'); ?>

	<footer id="footer" role="contentinfo">
		<?php echo $theme->footer(); ?>
	</footer>

<?php do_action(__NAMESPACE__.'__after_footer'); ?>
