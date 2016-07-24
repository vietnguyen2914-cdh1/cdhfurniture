<?php
add_action('admin_init', 'css_override_options_init' );
add_action('admin_menu', 'css_override_options_add_page');
function css_override_options_init(){
    register_setting( 'css_override_group', 'css_override', 'css_override_validate' );
}

function css_override_options_add_page() {
	add_options_page('CSS Override Options', 'CSS Override', 'manage_options', 'css_override', 'css_override_options_do_page');
}


function css_override_validate($input){
	//Define valid input values
	$input['css_code'] = sanitize_text_field($input['css_code']);
	$input['page_id'] = sanitize_text_field($input['page_id']);
	
	if (strlen($input[ 'css_code' ]) == 0){
		add_settings_error(
			'css_code',
			'csscode_texterror',
			'Enter some css code',
			'error'
		);
		$input[ 'css_code' ] = $input[ 'css_code'];
	}
	
	if (strlen($input[ 'page_id']) == 0){
		add_settings_error(
			'page_id',
			'pageid_texterror',
			'Enter a comma delimited list of page or post ids',
			'error'
		);
		$input[ 'page_id'] = $input[ 'page_id' ];
	}
	return $input;
}


function css_override_options_do_page(){
	?>
	<div class="wrap">
        <h2>CSS Overrides</h2>
        <form method="post" action="options.php">
            <?php settings_fields('css_override_group'); ?>
            <?php $options = get_option('css_override'); ?>
            <h3>CSS Overrides</h3>
            	<h4>Instructions</h4>
            	<p>1. In the style override block below, enter the styling override that you want to use in your page or post. For example, if you want to override the default entry-header class so that it is hidden on a given page, you would enter just: <strong><em>.entry-header{display:none}</em></strong>.</p>
            	<p>2. <strong>Important:</strong> Don't include the &lt;style&gt; tags, or your CSS code will not be saved and you'll see an error telling you to enter valid CSS in the text box.
            	<p>3. In the Page or post id(s) block, enter a comma delimited list of page or post ids that you want the override run on. If you would like to run the overrides on ALL pages/posts, enter the text ALL in the Page or Post ID Field.</p>

            <table class="form-table">
                <tr valign="top"><th scope="row">Enter the style overrides</th>
                    <td><textarea cols="40" rows="5" name="css_override[css_code]"><?php echo $options["css_code"] ?></textarea></td>
                </tr>
                <tr valign="top"><th scope="row">Page or post id</th>
                	<td><input type="text" name="css_override[page_id]" value="<?php echo $options["page_id"] ?>"/></td>
            </table>
            <p class="submit">
            <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
            </p>
        </form>
    </div>
<?php	
}
?>