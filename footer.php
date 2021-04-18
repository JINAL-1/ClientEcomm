<?php
/**
 * Template for displaying the footer
 */

?>

<footer>
<!--act as mini sidebars in footer-->
<div><?php dynamic_sidebar('footer_area_one') ?></div>
<div><?php dynamic_sidebar('footer_area_two') ?></div>
<div><?php dynamic_sidebar('footer_area_three') ?></div>
<div><?php dynamic_sidebar('footer_area_four') ?></div>
</footer>
		
	

<?php wp_footer(); ?>

</body>
</html>