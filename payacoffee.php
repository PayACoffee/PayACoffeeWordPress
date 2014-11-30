<?php 
    /*
    Plugin Name: Pay A Coffee WordPress Plugin
    Plugin URI: http://www.payacoffee.com
    Description: Redefining the donations over the Internet. Join the new standard for sending donations in an easy way.
    Author: PayACoffee.com
    Version: 1.0.1
    Author URI: http://www.payacoffee.com
    */

function payacoffee_admin() {
    include('payacoffee_options.php');
}

function payacoffee_admin_options() {
    add_options_page("Pay A Coffee", "Pay A Coffee", 1, "PayACoffee", "payacoffee_admin");
}

function insertPayACoffee() { 
    $email = get_option('payacoffee_email');
    $amount = get_option('payacoffee_amount');
    $currency = get_option('payacoffee_currency');
    $title = get_option('payacoffee_title');
    $bitcoin = get_option('payacoffee_bitcoin');
    
    if ($email != "") {
    ?>
<meta name="payacoffee" email="<?php echo $email; ?>" amount="<?php echo $amount; ?>" currency="<?php echo $currency; ?>" title="<?php echo $title; ?>" bitcoin="<?php echo $bitcoin; ?>" />
    <?php 
    }

}
 
add_action('admin_menu', 'payacoffee_admin_options');
add_action('wp_head', 'insertPayACoffee');

?>