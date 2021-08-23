<?php
/**
 * Template part for displaying the required contents.
 * @link https://codex.wordpress.org/Template_Hierarchy
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
 * [NOTE]
 * 	This template part file overrides the corresponding template part file in the parent theme.
 * @since 1.0.1
 * 	Display uikit offcanvas navigation.
 * @reference
 * 	[Parent]/model/app/nav.php
 * 	[Parent]/template-part/nav/nav-offcanvas.php
*/
?>

<?php
/**
 * [NOTE]
 * 	Change the navigation list to the name of your theme.
 * 
*/
$navigation = array(
	'home' => array(
		'label' => esc_html__('Home','windmill'),
		'link' => home_url('/'),
	),
	'blog' => array(
		'label' => esc_html__('Blog','windmill'),
		'link' => home_url('/blog/'),
	),
	'lorem-ipsum' => array(
		'label' => esc_html__('Contact Form','windmill'),
		'link' => home_url('/lorem-ipsum/'),
	),
);
?>

<?php
/**
 * @reference (Beans)
 * 	HTML markup.
 * 	https://www.getbeans.io/code-reference/functions/beans_open_markup_e/
 * 	https://www.getbeans.io/code-reference/functions/beans_output_e/
 * 	https://www.getbeans.io/code-reference/functions/beans_close_markup_e/
 * @reference (Uikit)
 * 	https://getuikit.com/docs/nav
*/
beans_open_markup_e("_wrap[{$theme}][{$index}]",'div',array('class' => 'uk-padding-small'));

	/**
	 * @since 1.0.1
	 * 	Navigation
	*/
	beans_open_markup_e("_nav[{$theme}][{$index}]",'nav',array(
		'class' => 'nav',
		'itemscope' => 'itemscope',
		'itemtype' => 'https://schema.org/SiteNavigationElement',
		'aria-label' => esc_attr__('Offcanvas Navigation','windmill'),
		'role' => 'navigation',
	));
		beans_open_markup_e("_tag[{$theme}][{$index}]",__utility_get_option('tag_widget-title'),array('class' => 'uk-margin-medium-top uk-text-center widget-title'));
			beans_output_e("_output[{$theme}][{$index}]",esc_html__('Navigation','windmill'));
		beans_close_markup_e("_tag[{$theme}][{$index}]",__utility_get_option('tag_widget-title'));

		beans_open_markup_e("_list[{$theme}][{$index}]",'ul',array('class' => 'uk-nav uk-nav-default uk-padding-small'));
			foreach($navigation as $key => $value){
				beans_open_markup_e("_item[{$theme}][{$index}]",'li');
					beans_open_markup_e("_link[{$theme}][{$index}][{$key}]",'a',array(
						'href' => $value['link'],
					));
						beans_output_e("_label[{$theme}][{$index}][{$key}]",$value['label']);
					beans_close_markup_e("_link[{$theme}][{$index}][{$key}]",'a');
				beans_close_markup_e("_item[{$theme}][{$index}]",'li');
			}
		beans_close_markup_e("_list[{$theme}][{$index}]",'ul');

	beans_close_markup_e("_nav[{$theme}][{$index}]",'nav');

	/**
	 * @since 1.0.1
	 * 	Author profile widget.
	 * @reference
	 * 	[Parent]/model/widget/profile.php
	*/
	the_widget('_widget_profile');

beans_close_markup_e("_wrap[{$theme}][{$index}]",'div');

