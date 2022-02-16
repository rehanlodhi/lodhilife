<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Nasio
 * @since 1.0
 * @version 1.0
 */

?>
<div class="footer-meta">
    <?php
	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
	}

    $isDarkMode = get_theme_mod('enable_dark_mode', 1);
    if ($isDarkMode) : ?>
    <div class="wpnm-button">
        <div class="wpnm-button-inner-left"></div>
        <div class="wpnm-button-inner"></div>
    </div>
    <?php endif; ?>
</div>