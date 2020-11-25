<?php
/**
 * Content empty partial template
 *
 * @package BenSemangat
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
$container = get_theme_mod( 'bensemangat_container_type' );
?>

<section class="tempate-with-background">
    <div class="<?php echo esc_attr( $container ); ?>">
        <div class="row">
            <div class="col-md-8">
                <h3 class="heading"><?php echo $args['heading'] ? $args['heading'] : ''; ?></h3>
                <div class="subheading"><?php echo $args['subheading'] ? $args['subheading'] : ''; ?></div>
                <div class="text-desc"><?php echo $args['description'] ?  $args['description'] : ''; ?></div>
                <div class="wrap-list">
                    <div class="row no-gutters">
                        <?php 
                        if($args['item']) {
                            foreach ($args['item'] as $item) {
                                // var_dump($item['icon']); die();
                                echo '<div class="col-md-6">';
                                echo '<div class="wrap-block-icon">';
                                echo '<div class="block-icon">';
                                echo $item['icon'];
                                echo '</div>';
                                echo '<div class="block-right">';
                                echo '<h6 class="header">' .$item['name'] .'</h6>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                            }
                        }
                         ?>
                    </div>
                </div>
                <?php if($args['button_action']['enable_button']) : ?>
                <div class="btn-wrap">
                    <a href="<?php echo $args['button_action']['url']; ?>" class="btn btn-black color-hover-white align-center"><?php echo $args['button_action']['button_text']; ?></a>
                </div>
                <?php endif; ?>
            </div>
        </div>

    </div>
</section>