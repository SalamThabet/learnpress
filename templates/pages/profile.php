<?php
/**
 * Template for displaying main user profile page.
 *
 * This template can be overridden by copying it to yourtheme/learnpress/profile/profile.php.
 *
 * @author   ThimPress
 * @package  Learnpress/Templates
 * @version  3.0.0
 */

/**
 * Prevent loading this file directly
 */
defined( 'ABSPATH' ) || exit();

get_header( 'profile' );

$profile = LP_Global::profile();

if ( $profile->is_public() ) {
	?>

    <div id="learn-press-profile"<?php $profile->main_class(); ?>>
        <div class="wrapper-profile-header">
            <?php
                /**
                 * @since 3.0.0
                 */
                do_action( 'learn-press/before-user-profile', $profile );
            ?>
        </div>

        <div class="wrapper-profile-container content-area">
            <?php
            /**
             * @since 3.0.0
             */
            do_action( 'learn-press/user-profile', $profile );

            /**
             * @since 3.0.0
             */
            do_action( 'learn-press/after-user-profile', $profile );

            ?>
        </div>
    </div>

<?php } else {
	_e( 'This user does not public their profile.', 'learnpress' );
}

get_footer( 'profile' );