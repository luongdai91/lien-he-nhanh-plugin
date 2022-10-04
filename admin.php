<div class="wrap">
<h2>Quản lý nút liên hệ nhanh</h2>

<?php if( isset($_GET['settings-updated']) ) { ?>
    <div id="message" class="updated">
        <p><strong><?php _e('Settings saved.') ?></strong></p>
    </div>
<?php } ?>

<form method="post" action="options.php">
    <?php settings_fields( 'ld-lien-he-nhanh' ); ?>
    <table class="form-table">     
        <tr valign="top">
            <th scope="row">Điện thoại</th>
            <td><input placeholder="0123 456 789" type="text" name="ld_phone" value="<?php echo get_option('ld_phone'); ?>" /></td>
        </tr>         
        <tr valign="top">
            <th scope="row">Zalo</th>
            <td>
                <label for="ld_zalo">
                    <input id="ld_zalo" class="my-color-field" name="ld_zalo" type="text" value="<?php echo get_option('ld_zalo'); ?>" />
                </label>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row">Facebook</th>
            <td>
                <label for="ld_facebook">
                    <input id="ld_facebook" class="my-color-field" name="ld_facebook" type="text" value="<?php echo get_option('ld_facebook'); ?>" />
                </label>
            </td>
        </tr>
        <tr valign="top" style=" border-bottom: 1px dashed #bfbfbf; ">
            <th scope="row" valign="top">Messenger</th>
            <td>
                <label for="ld_messenger">
                    <input id="ld_messenger" class="my-color-field" name="ld_messenger" type="text" value="<?php echo get_option('ld_messenger'); ?>" />
                </label>
            </td>
        </tr>  

        
    </table>
    <?php submit_button(); ?>
</form>

<hr />


</div>