<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */
$facts = get_field('facts');

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

	<div style="display: flex, flex: col">
		<div style="max-width: 500px;"><p><?php the_field('facts');?></p></div>

		<div style="display: flex">
		<h6 style="padding: 8px; width: 200px; background-color: gray;">these is the price
		<p ><?php the_field('enter_price');?></p>
		</h6>

		<p style="margin: 12px;"><?php the_field('payment_plan');?></p>
		</div>	
	</div>
<aside id="secondary" class="widget-area col-sm-12 col-lg-4" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
