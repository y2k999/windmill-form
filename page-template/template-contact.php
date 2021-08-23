<?php
/**
 * Template Name: Contact Form Template
 *
 * This is the template that displays Contact Form.
 * 
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 * @package Windmill
 * @license GPL3.0+
 * @since 1.0.1
*/

/**
 * Inspired by Beans Framework WordPress Theme
 * @link https://www.getbeans.io
 * @author Thierry Muller
*/


/* Prepare
______________________________
*/

// If this file is called directly,abort.
if(!defined('WPINC')){die;}

// Set identifiers for this template.
$index = basename(__FILE__,'.php');

/**
 * @reference (WP)
 * 	Retrieves name of the current stylesheet.
 * 	https://developer.wordpress.org/reference/functions/get_stylesheet/
*/
$theme = get_stylesheet();


/* Exec
______________________________
*/
?>
<?php
/**
 * [CASE]
 * 	2. Implement contact form page (page template).
 * 
 * @reference (WP)
 * 	WordPress page template can be selected by a user when they create or edit a page.
 * 	This template can be found at Pages > Add New > Attributes > Template.
 * 	https://developer.wordpress.org/themes/template-files-section/page-template-files/
*/
?>

<?php
/**
 * @reference (WP)
 * 	Load header template.
 * 	https://developer.wordpress.org/reference/functions/get_header/
*/
?>
<?php get_header(); ?>

<?php do_action(HOOK_POINT['content']['before']); ?>

<!-- ====================
	<site-content>
==================== -->
<section<?php echo apply_filters("_property[section][content]",''); ?>>
<div id="content"<?php echo apply_filters("_property[container][content]",esc_attr('')); ?><?php echo apply_filters("_attribute[container][content]",''); ?>>
	<?php
	/**
	 * @hooked
	 * 	_fragment_title::__the_page()
	 * @reference
	 * 	[Parent]/controller/fragment/title.php
	*/
	?>
	<?php do_action(HOOK_POINT['content']['prepend']); ?>

	<div<?php echo apply_filters("_property[grid][default]",''); ?><?php echo apply_filters("_attribute[grid]",''); ?>>

		<?php do_action(HOOK_POINT['primary']['before']); ?>

		<!-- ====================
			<primary>
		==================== -->
		<main id="primary"<?php echo apply_filters("_property[column][primary]",esc_attr('')); ?><?php echo apply_filters("_attribute[column][primary]",''); ?>>
			<article id="post-<?php the_ID(); ?>" <?php post_class('contact contact-form'); ?>>

				<!-- =============== 
					<section navigation>
				 =============== --> 
				<div class="uk-flex uk-flex-center">
					<nav class="uk-padding" role="navigation">
						<ul class="uk-subnav uk-subnav-pill" uk-switcher="connect: .uk-switcher; animation: uk-animation-fade">
							<?php
							// Custom global variable.
							global $forms;

							foreach($forms as $key => $value){
								/**
								 * @reference (Beans)
								 * 	HTML markup.
								 * 	https://www.getbeans.io/code-reference/functions/beans_open_markup_e/
								 * 	https://www.getbeans.io/code-reference/functions/beans_output_e/
								 * 	https://www.getbeans.io/code-reference/functions/beans_close_markup_e/
								 * @reference (Uikit)
								 * 	https://getuikit.com/docs/subnav
								 * 	https://getuikit.com/docs/switcher
								*/
								beans_open_markup_e("_item[{$theme}][navigation][{$key}]",'li');
									beans_open_markup_e("_link[{$theme}][navigation][{$key}]",'a',array(
										'href' => '#form-' . $key,
										'class' => 'uk-border-pill',
										// 'uk-filter-control' => "[data-color='red']",
									));
										beans_output_e("_output[{$theme}][navigation][{$key}]",$value);
									beans_close_markup_e("_link[{$theme}][navigation][{$key}]",'a');
								beans_close_markup_e("_item[{$theme}][navigation][{$key}]",'li');
							}
							?>
						</ul>
					</nav>
				</div><!-- .grid -->

				<!-- =============== 
					<section content>
				 =============== --> 
				<div class="uk-grid-small uk-grid-match uk-flex-center uk-padding-remove-top" uk-scrollspy="target: > div; delay: 150; cls: uk-animation-slide-bottom-small" uk-grid>
					<ul class="uk-switcher uk-margin-small">
						<?php
						// Custom global variable.
						global $forms;

						foreach($forms as $key => $value){
							/**
							 * @reference (Uikit)
							 * 	https://getuikit.com/docs/scrollspy
							 * 	https://getuikit.com/docs/switcher
							*/
							beans_open_markup_e("_item[{$theme}][content][{$key}]",'li');
								/**
									@reference
										[Parent]/inc/customizer/option.php
										[Parent]/inc/utility/general.php
								*/
								beans_open_markup_e("_item[{$theme}][content][{$key}]",'header',array('class' => 'uk-margin-small-top uk-padding-small'));
									beans_open_markup_e("_tag[{$theme}][content][{$key}]",__utility_get_option('tag_page-title'),array('class' => 'widget-title'));
										beans_output_e("_output[{$theme}][content][{$key}]",esc_html__('Form: ','windmill') . $value);
									beans_close_markup_e("_tag[{$theme}][content][{$key}]",__utility_get_option('tag_page-title'));
								beans_close_markup_e("_item[{$theme}][content][{$key}]",'header');

								get_template_part('template-part/form/form',$key);

							beans_close_markup_e("_item[{$theme}][content][{$key}]",'li');
						}
						?>
					</ul>
				</div>

			</article>
		</main>

		<?php do_action(HOOK_POINT['primary']['after']); ?>

		<!-- ====================
			<secondary>
		==================== -->
		<?php
		/**
		 * @reference (WP)
		 * 	Load sidebar template.
		 * 	https://developer.wordpress.org/reference/functions/get_sidebar/
		*/
		get_sidebar();
		?>

	</div><!-- .grid -->

	<?php do_action(HOOK_POINT['content']['append']); ?>

</div><!-- #content -->
</section>

<?php do_action(HOOK_POINT['content']['after']); ?>

<?php
/**
 * @reference (WP)
 * 	Load footer template.
 * 	https://developer.wordpress.org/reference/functions/get_footer/
*/
?>
<?php get_footer(); ?>
