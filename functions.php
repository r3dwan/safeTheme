<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
$includes = array(
	'/theme-setup.php',     // Initialize theme default settings.
    '/theme-options.php',   // Theme options
	'/custom-post-types.php', // Register custom post types
	'/custom-taxonomy.php', // Register custom taxonomies
	'/enqueue.php', // Enqueue elements
	'/custom-gutenberg-blocks.php', // Register gutenberg blocks
	'/custom-meta-fields.php', // Register meta fields
	'/ajax-functions.php' // Ajax functions
);

foreach ( $includes as $file ) {
	require_once get_template_directory() . '/inc' . $file;
}

add_filter( 'wpcf7_mail_components', 'remove_blank_lines' );

function remove_blank_lines( $mail ) {
	if ( is_array( $mail ) && ! empty( $mail['body'] ) )
		$mail['body'] = preg_replace( '|\n\s*\n|', "\n\n", $mail['body'] );
	return $mail;
}

add_filter('wpcf7_autop_or_not', '__return_false');



// Slugify a string
function slugify($text)
{
	// Strip html tags
	$text=strip_tags($text);
	// Replace non letter or digits by -
	$text = preg_replace('~[^\pL\d]+~u', '-', $text);
	// Transliterate
	setlocale(LC_ALL, 'en_US.utf8');
	$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
	// Remove unwanted characters
	$text = preg_replace('~[^-\w]+~', '', $text);
	// Trim
	$text = trim($text, '-');
	// Remove duplicate -
	$text = preg_replace('~-+~', '-', $text);
	// Lowercase
	$text = strtolower($text);
	// Check if it is empty
	if (empty($text)) { return 'n-a'; }
	// Return result
	return $text;
}


remove_filter ('the_content', 'wpautop');
remove_filter ('the_excerpt', 'wpautop');


function get_post_read_time($post = null) {
    $post = get_post($post);
    $words_per_minute = 200; // average reading speed
    $words = str_word_count(strip_tags($post->post_content));
    $minutes = ceil($words / $words_per_minute);
    return $minutes;
}


add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
   add_theme_support( 'woocommerce' );
}         



add_filter( 'woocommerce_add_cart_item_data', 'woo_custom_add_to_cart' );

function woo_custom_add_to_cart( $cart_item_data ) {

    global $woocommerce;
    $woocommerce->cart->empty_cart();

    // Do nothing with the data and return
    return $cart_item_data;
}


function check_title($str, $word){
	if(strpos($str, $word) !== false){
		return true;
	} else{
		return false;
	}
}


// Adding an option to enter api key under tools
// Creates a subpage under the Tools section
add_action('admin_menu', 'wpdocs_register_my_api_keys_page');
function wpdocs_register_my_api_keys_page() {
    add_submenu_page(
        'tools.php',
        'API Keys',
        'API Keys',
        'manage_options',
        'api-keys',
        'add_api_keys_callback' );
}
 
// The admin page containing the form
function add_api_keys_callback() { ?>
    <div class="wrap"><div id="icon-tools" class="icon32"></div>
        <h2>My API Keys Page</h2>
        <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="POST">
            <h3>Your API Key</h3>
            <input type="text" name="api_key" placeholder="Enter API Key">
            <input type="hidden" name="action" value="process_form">			 
            <input type="submit" name="submit" id="submit" class="update-button button button-primary" value="Update API Key"  />
        </form> 
    </div>
    <?php
}

// Submit functionality
function submit_api_key() {
    if (isset($_POST['api_key'])) {
        $api_key = sanitize_text_field( $_POST['api_key'] );
        $api_exists = get_option('api_key');
        if (!empty($api_key) && !empty($api_exists)) {
            update_option('api_key', $api_key);
        } else {
            add_option('api_key', $api_key);
        }
    }
    wp_redirect($_SERVER['HTTP_REFERER']);
}
add_action( 'admin_post_nopriv_process_form', 'submit_api_key' );
add_action( 'admin_post_process_form', 'submit_api_key' );



function send_api_request($phone_number) {
    

    return false;
}

?>