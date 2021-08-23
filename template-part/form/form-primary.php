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

<?php
$list = array(
	'mail' => array(
		'type' => 'text',
		'icon' => 'user',
		'placeholder' => esc_html__('Username','windmill'),
	),
	'password' => array(
		'type' => 'password',
		'icon' => 'lock',
		'placeholder' => esc_html__('Password','windmill'),
	),
);
?>
<div class="uk-card uk-card-default uk-card-hover uk-box-shadow-large uk-width-auto@s uk-width-large@m uk-margin">
	<div class="uk-card-body">
		<h4 class="uk-card-title uk-text-center"><?php echo esc_html__('Welcome back!','windmill'); ?></h4>

		<form class="uk-form-stacked">
			<?php
			/**
			 * @reference (Beans)
			 * 	HTML markup.
			 * 	https://www.getbeans.io/code-reference/functions/beans_open_markup_e/
			 * 	https://www.getbeans.io/code-reference/functions/beans_selfclose_markup_e/
			 * 	https://www.getbeans.io/code-reference/functions/beans_close_markup_e/
			 * @reference (Uikit)
			 * 	https://getuikit.com/docs/button
			 * 	https://getuikit.com/docs/card
			 * 	https://getuikit.com/docs/form
			 * 	https://getuikit.com/docs/icon
			*/
			foreach($list as $key => $value) :
				beans_open_markup_e("_inline[{$theme}][{$index}][{$key}]",'div',array('class' => 'uk-inline uk-width-1-1 uk-margin'));
					beans_open_markup_e("_icon[{$theme}][{$index}][{$key}]",'span',array(
						'class' => 'uk-form-icon',
						'uk-icon' => 'icon: ' . $value['icon'],
					));
					beans_close_markup_e("_icon[{$theme}][{$index}][{$key}]",'span');

					beans_selfclose_markup_e("_input[{$theme}][{$index}][{$key}]",'input',array(
						'class' => 'uk-input uk-form-large@m',
						'type' => $value['type'],
						'required' => 'required',
						'placeholder' => $value['placeholder'],
					));
				beans_close_markup_e("_inline[{$theme}][{$index}][{$key}]",'div');
			endforeach;
			?>
			<div class="uk-margin">
				<button class="uk-button uk-button-primary uk-button-large uk-width-1-1"><?php echo esc_html__('Login','windmill'); ?></button>
			</div>

			<div class="uk-text-small uk-text-center">
				<?php echo esc_html__('Not registered?','windmill'); ?> <a href="<?php home_url('/'); ?>"><?php echo esc_html__('Create an account.','windmill'); ?></a>
			</div>
		</form>

	</div><!-- .uk-card-body -->
</div><!-- .uk-card -->
