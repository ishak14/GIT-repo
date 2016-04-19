<?php
	if (is_user_logged_in()){
		

	wp_redirect('http://google.se');
	exit(); 
}	
?>

<?php show_admin_bar( false );?>
<center>
<div class="container container-table">
    <div class="row vertical-center-row">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login panel-width">
					<div class="row">
						<?php get_header(); ?>
						<hr>	
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
	
	
<!-- Login form -->
<?php
if (!is_user_logged_in() ) { // Display WordPress login form:
    $args = array(
        'redirect' => site_url(), 
        'form_id' => 'loginform-custom',
        'label_username' => '',
        'label_password' => '',
        'label_remember' => __( 'Remember Me custom text' ),
        'label_log_in' => __( 'Login' ),
        'remember' => false
    );
    
    
        wp_login_form( $args );
} 



else { // If logged in:

};



?>					



<!-- Register -->
<!--
	<input type="hidden" name="redirect_to" value="<?php echo esc_attr( $redirect_to ); ?>" />
	<p class="submit"><input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="<?php esc_attr_e('Register'); ?>" /></p>
-->







		

								
            
             
										<div class="form-group" id="login">
						
						
<!--
											<div class="col-sm-6 col-sm-offset-3">
												<Button type="submit" name="login-submit" id="login-submit" tabindex="7" class="form-control btn btn-login custom btn-margin" value="Log In">Login
												</button>
											</div>
-->
										


										<div class="form-group" id="register">
						
											<div class="col-sm-6 col-sm-offset-3">
												<Button type="button" name="register" id="register" tabindex="8" class="form-control btn btn-green custom btn-margin10" value="register" 				placeholder="register">Register
												</button>

											</div>
                						</div>
                																											<h6 class="back_to_login"> Back to login </h6>
                																											
                																											<?php get_footer(); ?>
                					</div>	
								</form>
                			</div>
						</div>
					</div>
				</div>
			</div>
		</div>			
    </div>	            
              
                




