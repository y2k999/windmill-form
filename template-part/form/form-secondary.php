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
// $index = str_replace(substr(basename(__FILE__,'.php'),0,8),'',basename(__FILE__,'.php'));
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
 * 	2. Implement contact form page.
 * 
 * @since 1.0.1
 * 	Sample form.
*/
?>

<?php
$list = array(
	'username' => array(
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
<div class="uk-position-relative uk-padding-large uk-padding-remove-vertical">
	<div class="uk-overlay-primary uk-padding uk-position-z-index" uk-scrollspy="cls: uk-animation-fade">

		<div class="uk-text-center uk-margin">
			<?php echo esc_html__('Contact Form','windmill'); ?>
		</div>

		<!-- input field -->
		<form class="toggle-class" action="<?php echo esc_url(home_url('/')); ?>">
			<fieldset class="uk-fieldset">
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
					beans_open_markup_e("_wrapper[{$theme}][{$index}][{$key}]",'div',array('class' => 'uk-margin-small uk-margin-bottom'));
						beans_open_markup_e("_inline[{$theme}][{$index}][{$key}]",'div',array('class' => 'uk-inline uk-width-1-1'));
							beans_open_markup_e("_icon[{$theme}][{$index}][{$key}]",'span',array(
								'class' => 'uk-form-icon uk-form-icon-flip',
								'uk-icon' => 'icon: ' . $value['icon'],
							));
							beans_close_markup_e("_icon[{$theme}][{$index}][{$key}]",'span');

							beans_selfclose_markup_e("_input[{$theme}][{$index}][{$key}]",'input',array(
								'class' => 'uk-input uk-border-pill',
								'type' => $value['type'],
								'required' => 'required',
								'placeholder' => $value['placeholder'],
							));
						beans_close_markup_e("_inline[{$theme}][{$index}][{$key}]",'div');
					beans_close_markup_e("_wrapper[{$theme}][{$index}][{$key}]",'div');
				endforeach;
				?>

				<div class="uk-margin-small">
					<label class="uk-text-small"><input class="uk-checkbox uk-margin-small-right" type="checkbox"><?php echo esc_html__('Keep me logged in','windmill'); ?></label>
				</div>

				<div class="uk-margin-bottom">
					<button type="submit" class="uk-button uk-button-primary uk-border-pill uk-width-1-1"><?php echo esc_html__('LOG IN','windmill'); ?></button>
				</div>

			</fieldset>
		</form>

		<!-- recover password -->
		<form class="toggle-class" action="<?php echo esc_url(home_url('/')); ?>" hidden>
			<div class="uk-margin-small">
				<div class="uk-inline uk-width-1-1">
					<span class="uk-form-icon uk-form-icon-flip" data-uk-icon="icon: mail"></span>
					<input class="uk-input uk-border-pill" placeholder="<?php echo esc_html__('E-mail','windmill'); ?>" required type="text">
				</div>
			</div>

			<div class="uk-margin-bottom">
				<button type="submit" class="uk-button uk-button-primary uk-border-pill uk-width-1-1"><?php echo esc_html__('SEND PASSWORD','windmill'); ?></button>
			</div>
		</form>
							
		<!-- action buttons -->
		<div>
			<div class="uk-text-center">
				<a class="uk-link-reset uk-text-small toggle-class" uk-toggle="target: .toggle-class ;animation: uk-animation-fade"><?php echo esc_html__('Forgot your password?','windmill'); ?></a>
				<a class="uk-link-reset uk-text-small toggle-class" uk-toggle="target: .toggle-class ;animation: uk-animation-fade" hidden><span uk-icon="arrow-left"></span><?php echo esc_html__('Back to Login','windmill'); ?></a>
			</div>
		</div>
	</div>

</div>
