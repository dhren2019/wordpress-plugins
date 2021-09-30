<?php

if (! current_user_can ('manage_options') ) wp_die(__('No tienes permisos')) ;
?>

<div class="wrap">
    <h2><?php _e('Stripe Forms Gutemberg', 'stripe-forms-gutemberg') ?></h2>
    <p><?php _e('Stripe Forms Gutemberg', 'stripe-forms-gutemberg') ?></p>
    <form method="POST" action="options.php">
        <?php
            settings_fields( 'stripe-forms-gutemberg-settings-group' );
            do_settings_sections( 'stripe-forms-gutemberg-settings-group' );
        ?>
        <table class="form-table">
            <tr>
                <td>
                    <label ><?php _e('Stripe API secreta', 'stripe-forms-gutemberg') ?>:</label>
                    <input type="text" name="stripe_forms_gutemberg_api_secret" id="stripe_forms_gutemberg_api_secret" value="">
                </td>
            </tr>
            <tr>
                <td>
                    <label ><?php _e('Stripe API pública', 'stripe-forms-gutemberg') ?></label>
                </td>
            </tr>
        </table>
    </form>
</div>