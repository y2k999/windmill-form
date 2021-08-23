<?php
/**
 * Load and render required components.
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
$index = basename(__FILE__,'.php');

/**
 * @reference (WP)
 * 	Retrieves name of the current stylesheet.
 * 	https://developer.wordpress.org/reference/functions/get_stylesheet/
*/
// $theme = get_stylesheet();


/* Exec
______________________________
*/
?>
<?php
	/**
	 * @since 1.0.1
	 * 	Replace the author profile location from sidebar-bottom to sidebar-top.
	 * @reference (Beans)
	 * 	Remove an action.
	 * 	https://www.getbeans.io/code-reference/functions/beans_remove_action/
	 * 	Set beans_add_action() using the callback argument as the action ID.
	 * 	https://www.getbeans.io/code-reference/functions/beans_add_smart_action/
	 * @reference
	 * 	[Parent]/controller/structure/sidebar.php
	 * 	[Parent]/template/sidebar/sidebar.php
	*/
	beans_remove_action('_structure_sidebar__the_profile');
	beans_add_smart_action(HOOK_POINT['secondary']['prepend'],function()
	{
		/**
		 * @reference (WP)
		 * 	Output an arbitrary widget as a template tag.
		 * 	https://developer.wordpress.org/reference/functions/the_widget/
		*/
		the_widget('_widget_profile');
	});


	/**
	 * [CASE]
	 * 	1. Implement left sidebar layout (or offcanvas).
	 * 
	 * @since 1.0.1
	 * 	Modify parent theme's structural properties to remove vertical margin and padding.
	 * @reference (Uikit)
	 * 	https://getuikit.com/docs/section
	 * 	https://getuikit.com/docs/container
	 * 	https://getuikit.com/docs/flex
	 * @reference (WP)
	 * 	Fires before determining which template to load.
	 * 	https://developer.wordpress.org/reference/hooks/template_redirect/
	 * @reference
	 * 	[Parent]/controller/render/section.php
	 * 	[Parent]/controller/render/container.php
	 * 	[Parent]/controller/render/column.php
	 * 	[Parent]/inc/setup/constant.php
	 * 	[Parent]/inc/utility/general.php
	*/

	/**
	 * @since 1.0.1
	 * 	Modify uk-section.
	*/
	remove_filter('_property[section][masthead]',['_render_section','__the_masthead'],PRIORITY['mid-low']);
	beans_add_filter('_property[section][masthead]',function()
	{
		$html = array(
			'class' => 'uk-section-default uk-padding-remove uk-margin-remove'
		);
		echo ' ' . __utility_markup($html);
	});

	remove_filter('_property[section][content]',['_render_section','__the_content'],PRIORITY['mid-low']);
	beans_add_filter('_property[section][content]',function()
	{
		$html = array(
			'class' => 'uk-section-default uk-padding-remove uk-margin-remove'
		);
		echo ' ' . __utility_markup($html);
	});

	remove_filter('_property[section][colophone]',['_render_section','__the_colophone'],PRIORITY['mid-low']);
	beans_add_filter('_property[section][colophone]',function()
	{
		$html = array(
			'class' => 'uk-section-default uk-padding-remove uk-margin-remove'
		);
		echo ' ' . __utility_markup($html);
	});


	/**
	 * @since 1.0.1
	 * 	Modify uk-container.
	*/
	remove_filter('_property[container][masthead]',['_render_container','__the_property_masthead'],PRIORITY['mid-low']);
	beans_add_filter('_property[container][masthead]',function()
	{
		$html = array(
			'class' => 'uk-container uk-container-expand site-header uk-margin-remove',
		);
		echo ' ' . __utility_markup($html);
	});

	remove_filter('_property[container][content]',['_render_container','__the_property_content'],PRIORITY['mid-low']);
	beans_add_filter('_property[container][content]',function()
	{
		$html = array(
			'class' => 'uk-container uk-container-expand site-content uk-padding-remove uk-margin-remove'
		);
		echo ' ' . __utility_markup($html);
	});

	/**
	 * @since 1.0.1
	 * 	Modify the order of page content and sidebar.
	*/
	remove_filter('_property[column][primary]',['_render_column','__the_property_primary'],PRIORITY['mid-low']);
	beans_add_filter("_property[column][primary]",function(){
		echo ' class="uk-width-1-1@s uk-width-2-3@m site-main  uk-padding-small"';
	});

	remove_filter('_property[column][secondary]',['_render_column','__the_property_secondary'],PRIORITY['mid-low']);
	beans_add_filter("_property[column][secondary]",function(){
		echo ' class="uk-visible@s uk-width-1-3@m uk-flex-first sidebar uk-padding-small"';
	});
