
<?php 

if(!class_exists('My_First_Plugin_Demo')) {
        class My_First_Plugin_Demo {
                function __construct() {
                        if(!function_exists('add_shortcode')) {
                                return;
                        }
                        add_shortcode( 'hello' , array(&$this, 'hello_func') );
                }
 
                function hello_func($atts = array(), $content = null) {
                        extract(shortcode_atts(array('name' => 'World'), $atts));
                        return '<div><p>Hello '.$name.'!!!</p></div>';
                }
                
        }
}


function mfpd_load() {
        global $mfpd;
        $mfpd = new My_First_Plugin_Demo();
}
add_action( 'plugins_loaded', 'mfpd_load' );

function register_mysettings() {
        register_setting( 'mfpd-settings-group', 'mfpd_option_name' );
}
 
function mfpd_create_menu() {
        // add_menu_page('Hello World', 'MFPD Settings', 'administrator', __FILE__, 'mfpd_settings_page',plugins_url('/images/app.ico', __FILE__), 1);
        add_menu_page('Hello World Plugin By Trọng', 'Hello World', 'administrator', __FILE__, 'mfpd_settings_page','dashicons-media-code', 2);
        add_action( 'admin_init', 'register_mysettings' );
}
add_action('admin_menu', 'mfpd_create_menu'); 
 
function mfpd_settings_page() {
?>
<div class="wrap">
<h2>Tạo trang cài đặt cho plugin</h2>
<?php if( isset($_GET['settings-updated']) ) { ?>
    <div id="message" class="updated">
        <p><strong><?php _e('Settings saved.') ?></strong></p>
    </div>
<?php } ?>
<form method="post" action="options.php">
    <?php settings_fields( 'mfpd-settings-group' ); ?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Tùy chọn cài đặt</th>
        <td><input type="text" name="mfpd_option_name" value="<?php echo get_option('mfpd_option_name'); ?>" /></td>
        </tr>
    </table>
    <?php submit_button(); ?>
</form>
</div>
<?php } ?>