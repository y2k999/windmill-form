<?php
/**
 * Adjust layouts, margins and paddings.
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
// $index = basename(__FILE__,'.php');

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
	 * 	Override topbar icons.
	 * @reference (Beans)
	 * 	Hooks a function or method to a specific filter action.
	 * 	https://www.getbeans.io/code-reference/functions/beans_add_filter/
	*/
	beans_add_filter("_filter[_structure_header][icon]",function()
	{
		/**
		 * @param (array) $icon
		 * 	Registerd icons in parent theme.
		 * @return (array)
		 * 	Icons to be registerd (override) in this child theme.
		 * @hook target
		 * 	_filter[_structure_header][icon]
		 * @reference
		 * 	[Parent]/controller/structure/header.php
		 * 	[Parent]/inc/utility/general.php
		 * 	[Parent]/model/data/icon.php
		*/
		return array(
			'nav' => __utility_get_icon('nav'),
			'search' => __utility_get_icon('search'),
			'html-sitemap' => __utility_get_icon('html-sitemap'),
			// 'amp' => __utility_get_icon('amp'),
		);
	},99);


	/**
	 * [CASE]
	 * 	1. Implement left sidebar layout (or offcanvas).
	 * 
	 * @since 1.0.1
	 * 	Adjust the offcanvas alignment from right (default) to left.
	 * @reference (Beans)
	 * 	Replace attribute to markup.
	 * 	https://www.getbeans.io/code-reference/functions/beans_replace_attribute/
	 * @reference (Uikit)
	 * 	https://getuikit.com/docs/offcanvas
	 * @reference (WP)
	 * 	Fires before determining which template to load.
	 * 	https://developer.wordpress.org/reference/hooks/template_redirect/
	 * @reference
	 * 	[Parent]/model/app/nav.php
	*/
	beans_replace_attribute('_effect[_app_nav][offcanvas]','uk-offcanvas','flip: true; overlay: false','overlay: true');
	beans_replace_attribute('_wrapper[_app_nav][offcanvas]','class','uk-offcanvas-bar uk-offcanvas-bar-animation uk-offcanvas-slide','uk-offcanvas-bar uk-offcanvas-bar-animation uk-offcanvas-slide uk-padding-remove uk-margin-remove');

	/**
	 * @since 1.0.1
	 * 	Remove secondary(footer) navigation of the parent theme.
	 * @reference (Beans)
	 * 	Remove an action.
	 * 	https://www.getbeans.io/code-reference/functions/beans_remove_action/
	 * @reference
	 * 	[Parent]/controller/structure/footer.php
	 * 	[Parent]/model/app/nav.php
	 * 	[Parent]/template/footer/footer.php
	 * 	[Parent]/template-part/nav/nav-secondary.php
	*/
	beans_remove_action('_structure_footer__the_nav');
