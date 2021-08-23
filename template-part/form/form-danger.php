<?php
/**
 * Template part for displaying contact form.
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package Windmill Form
 * @license GPL-3.0+
 * @since 1.0.1
*/

/**
 * Inspired by Beans Framework WordPress Theme
 * @link https://www.getbeans.io
 * @author Thierry Muller
 * 
 * Inspired by Kick Off UIkit 3 Starter Layout / Templates for your UIKit 3 project.
 * @link https://github.com/zzseba78/Kick-Off
 * @author byHumans
 * 
 * Inspired by Uikit3 Form examples
 * @link https://codepen.io/tobiasmier/post/form-examples
 * @author TOBIAS MIER
*/


/* Prepare
______________________________
*/

// If this file is called directly,abort.
if(!defined('WPINC')){die;}

// Set identifiers for this template.
$index = str_replace(substr(basename(__FILE__,'.php'),0,8),'',basename(__FILE__,'.php'));

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
 * 	2. Implement contact form page.
 * 
  * @since 1.0.1
 * 	Sample form.
*/
?>
<div class="uk-card uk-card-default uk-card-hover uk-box-shadow-large uk-width-auto@s uk-width-large@m uk-margin">
	<?php
	/**
	 * @since 1.0.1
	 * 	Echo card header.
	 * @reference (Uikit)
	 * 	https://getuikit.com/docs/card
	 * 	https://getuikit.com/docs/grid
	 * 	https://getuikit.com/docs/icon
	 * 	https://getuikit.com/docs/width
	 * @reference
	 * 	[Parent]/inc/customizer/option.php
	 * 	[Parent]/inc/utility/general.php
	*/
	?>
	<div class="uk-card-header">
		<?php
		/**
		 * @reference (Beans)
		 * 	HTML markup.
		 * 	https://www.getbeans.io/code-reference/functions/beans_open_markup_e/
		 * 	https://www.getbeans.io/code-reference/functions/beans_close_markup_e/
		 * @reference (Uikit)
		 * 	https://getuikit.com/docs/card
		 * 	https://getuikit.com/docs/icon
		*/
		beans_open_markup_e("_grid[{$theme}][{$index}][header]",'div',array('uk-grid' => 'uk-grid'));
			// Form title.
			beans_open_markup_e("_column[{$theme}][{$index}][header]",'div',array('class' => 'uk-width-expand'));
				beans_open_markup_e("_tag[{$theme}][{$index}][header]",__utility_get_option('tag_widget-title'),array('class' => 'uk-card-title uk-margin-remove-bottom'));
					echo esc_html__('Deactivate account','windmill');
				beans_close_markup_e("_tag[{$theme}][{$index}][header]",__utility_get_option('tag_widget-title'));
			beans_close_markup_e("_column[{$theme}][{$index}][header]",'div');
			// Close button.
			beans_open_markup_e("_toggle[{$theme}][{$index}][header]",'div',array('class' => 'uk-width-auto'));
				beans_open_markup_e("_icon[{$theme}][{$index}][header]",'a',array('uk-icon' => 'close'));
				beans_close_markup_e("_icon[{$theme}][{$index}][header]",'a');
			beans_close_markup_e("_toggle[{$theme}][{$index}][header]",'div');
		beans_close_markup_e("_grid[{$theme}][{$index}][header]",'div');
		?>
	</div><!-- .uk-card-header -->
	<?php
	/**
		@since 1.0.1
			Echo card body.
	*/
	?>
	<div class="uk-card-body">
		<p><?php echo esc_html__('Are you sure you want to deativate your account? By doing this you will lose all of your saved data and will not be able to retrieve it.','windmill'); ?></p>
	</div><!-- .uk-card-body -->

	<?php
	/**
	 * @since 1.0.1
	 * 	Echo card footer.
	 * @reference (Beans)
	 * 	HTML markup.
	 * 	https://www.getbeans.io/code-reference/functions/beans_open_markup_e/
	 * 	https://www.getbeans.io/code-reference/functions/beans_close_markup_e/
	 * @reference (Uikit)
	 * 	https://getuikit.com/docs/background
	 * 	https://getuikit.com/docs/button
	 * 	https://getuikit.com/docs/card
	*/
	?>
	<div class="uk-card-footer uk-background-muted uk-flex uk-flex-middle uk-flex-right@s">
		<?php
		beans_open_markup_e("_grid[{$theme}][{$index}][footer]",'div',array(
			'class' => 'uk-flex-middle uk-grid-small',
			'uk-grid' => 'uk-grid',
		));
			// Deactivate button
			beans_open_markup_e("_button[{$theme}][{$index}][footer][last]",'div',array('class' => 'uk-flex-last@s'));
				beans_open_markup_e("_button[{$theme}][{$index}][footer][last]",'button',array(
					'type' => 'button',
					'class' => 'uk-button uk-button-danger'
				));
					echo esc_html__('Deactivate','windmill');
				beans_close_markup_e("_button[{$theme}][{$index}][footer][last]",'button');
			beans_close_markup_e("_button[{$theme}][{$index}][footer][last]",'div');
			// Cancel button
			beans_open_markup_e("_button[{$theme}][{$index}][footer][first]",'div',array('class' => 'uk-flex-first@s'));
				beans_open_markup_e("_button[{$theme}][{$index}][footer][first]",'button',array(
					'type' => 'button',
					'class' => 'uk-button uk-button-text'
				));
					echo esc_html__('Cancel','windmill');
				beans_close_markup_e("_button[{$theme}][{$index}][footer][first]",'button');
			beans_close_markup_e("_button[{$theme}][{$index}][footer][first]",'div');
		beans_close_markup_e("_grid[{$theme}][{$index}][footer]",'div');
		?>
	</div><!-- .uk-card-footer -->

</div><!-- .uk-card -->
