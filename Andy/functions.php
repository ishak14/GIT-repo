<?php 

function wpbootstrap_scripts_with_jquery()
{
	// Bootstrap
	wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
	wp_register_script( 'register', get_template_directory_uri() . '/scripts/register.js', array( 'jquery' ) );
	wp_register_script( 'header', get_template_directory_uri() . '/scripts/header.js', array( 'jquery' ) );
	wp_register_script( 'login', get_template_directory_uri() . '/scripts/login.js', array( 'jquery' ) );
	wp_register_script( 'library', get_template_directory_uri() . '/scripts/library.js', array( 'jquery' ) );


	wp_enqueue_script( 'custom-script' );
	wp_enqueue_script( 'register' );
	wp_enqueue_script( 'header' );
	wp_enqueue_script( 'login' );
	wp_enqueue_script( 'library' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

/*
// ändrar style för login sidan ..Andy
function my_custom_login() {
echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . 'style.css" />';
}
add_action('login_head', 'my_custom_login');
*/


/*
function dlf_form() {
 
?>
 
<form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
    <div class="login-form">
        <div class="form-group">
            <input name="login_name" type="text" class="form-control login-field" value="" placeholder="Username" id="login-name" />
            <label class="login-field-icon fui-user" for="login-name"></label>
        </div>
 
        <div class="form-group">
            <input  name="login_password" type="password" class="form-control login-field" value="" placeholder="Password" id="login-pass" />
            <label class="login-field-icon fui-lock" for="login-pass"></label>
        </div>
        <input class="btn btn-primary btn-lg btn-block" type="submit"  name="dlf_submit" value="Log in" />
</form>
</div>
<?php
}
*/
