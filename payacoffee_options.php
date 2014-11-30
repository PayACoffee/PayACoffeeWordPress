<?php
    if($_POST['payacoffee_hidden'] == 'Y') {
        $email = $_POST['payacoffee_email'];
        update_option('payacoffee_email', $email);

        $amount = $_POST['payacoffee_amount'];
        update_option('payacoffee_amount', $amount);

        $currency = $_POST['payacoffee_currency'];
        update_option('payacoffee_currency', $currency);

        $title = $_POST['payacoffee_title'];
        update_option('payacoffee_title', $title);

        $bitcoin = $_POST['payacoffee_bitcoin'];
        update_option('payacoffee_bitcoin', $bitcoin);
        ?>
        <div class="updated"><p><strong><?php _e('Options saved.' ); ?></strong></p></div>
        <?php
    } else {
        $email = get_option('payacoffee_email');
        $amount = get_option('payacoffee_amount');
        $currency = get_option('payacoffee_currency');
        $title = get_option('payacoffee_title');
        $bitcoin = get_option('payacoffee_bitcoin');
    }

?>

<div class="wrap">
    <?php echo "<h2>" . __( 'Pay A Coffee Options', 'payacoffee' ) . "</h2>"; ?><br />

    <form name="payacoffee_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
        <input type="hidden" name="payacoffee_hidden" value="Y">
            <div id="box" class="postbox">
                <div class="inside">
                    <?php echo "<h3>" . __( 'About Pay A Coffee', 'payacoffee' ) . "</h3>"; ?>
                    <?php echo "<p>" . __( 'Pay A Coffee Join is the new stantard for sending donations in an easy way. It adds an invisible code on the header tag of your website and it will start working, without adding annoying donations buttons.', 'payacoffee' ) . "</p>"; ?>
                    <?php echo "<h4>" . __( 'How it works', 'payacoffee' ) . "</h4>"; ?>
                    <?php echo "<p>" . __( 'Just configure it with your donation details and anyone using a compatible Pay A Coffee extension or app will have access to your donation. For example, you can try Pay A Coffee on your WordPress installation using the official <a href="https://chrome.google.com/webstore/detail/pay-a-coffee/ffokbedefobniifhidnnggfjgfmabhee" target="_blank">Chrome extension</a>. Install it and see how it works!', 'payacoffee' ) . "</p>"; ?>
                    <a class="button-secondary" href="http://payacoffee.com">Go to PayACoffee.com</a>
                </div>
            </div>
            <div id="box" class="postbox">
                <div class="inside">
                    <?php echo "<h3>" . __( 'Required Settings', 'payacoffee' ) . "</h3>"; ?>
                    <?php echo "<h4>" . __( 'Hey, this simple configuration is soooooo important', 'payacoffee' ) . "</h4>"; ?>
                    <p>
                    <?php _e("Valid PayPal Email: " ); ?>
                    <input type="text" name="payacoffee_email" value="<?php echo $email; ?>" size="20" required>
                    <?php echo "<h5>" . __( 'Must be a valid PayPal email where you will receive your Pay A Coffee donations.', 'payacoffee' ) . "</h5>"; ?>
                    </p>
                </div>
            </div>
            <div id="box" class="postbox">
                <div class="inside">
                    <?php echo "<h3>" . __( 'Optional Settings', 'payacoffee' ) . "</h3>"; ?>
                    <?php echo "<h4>" . __( 'Want to have some customizations on your donations?', 'payacoffee' ) . "</h4>"; ?>
                    <p>
                    <?php _e("Donation Amount: " ); ?>
                    <input type="text" name="payacoffee_amount" value="<?php echo $amount; ?>" size="3">
                    <?php echo "<h5>" . __( 'Default: 1.00. It will be the amount for every donation.', 'payacoffee' ) . "</h5>"; ?>
                    </p>
                    <p>
                    <?php _e("Donation Currency: " ); ?>
                    <input type="text" name="payacoffee_currency" value="<?php echo $currency; ?>" size="3">
                    <?php echo "<h5>" . __( 'Default: USD. <a href="https://developer.paypal.com/docs/classic/api/currency_codes/" target="_blank">View Currency Code list</a> for more infornmation.', 'payacoffee_trdom' ) . "</h5>"; ?>
                    </p>  
                    <p>
                    <?php _e("Donation Title: " ); ?>
                    <input type="text" name="payacoffee_title" value="<?php echo $title; ?>" size="40">
                    <?php echo "<h5>" . __( 'User will see this title when doing a donation.', 'payacoffee' ) . "</h5>"; ?>
                    </p>
                    <?php _e("Bitcoin Code: " ); ?>
                    <input type="text" name="payacoffee_bitcoin" value="<?php echo $title; ?>" size="35">
                    <?php echo "<h5>" . __( 'If you want to allow Bitcoin donations just write your Bitcoin address. Example: 1M3RKofFeZvUc5RYLdhoKXpHz48ZWbPWN4.', 'payacoffee_trdom' ) . "</h5>"; ?>
                    </p>
                </div>
            </div>
            <p class="submit">
                <input type="submit" name="Submit" class="button-primary" value="<?php _e('Update Options', 'payacoffee' ) ?>" />
                <input type="submit" onclick='return confirm("Do you really want to reset your configuration?");' name="payacoffee_reset_config" value="<?php _e('Reset Options', 'payacoffee'); ?>" />
            </p>
    </form>
</div>