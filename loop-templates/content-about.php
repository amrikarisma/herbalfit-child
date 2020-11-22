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

<section class="tempate-about">
    <div class="<?php echo esc_attr( $container ); ?>">
        <div class="subheading"><?php echo $args['subheading']; ?></div>
        <h3 class="heading"><?php echo $args['heading']; ?></h3>
        <div class="header-text"><?php echo $args['heading']; ?></div>
        <div class="text-desc"><?php echo $args['description']; ?></div>
        <div class="wrap-list-about">
            <div class="row">
            
                <?php foreach ($args['item'] as $item) {
                    $img = $item['icon'];
                    // var_dump($item['icon']); die();
                    echo '<div class="col">';
                    echo '<img class="img-fluid" src="'.$img['url'].'" alt="'.$img['alt'].'" />';
                    echo '<h6 class="header">'.$item['title'].'</h6>';
                    echo '<p>'.$item['description'].'</p>';
                    echo '</div>';

                } ?>

            </div>
        </div>
        <?php if($args['button']) : ?>
        <div class="btn-wrap text-center">
            <a href="<?php echo $args['text_button']['url']; ?>" class="btn btn-black color-hover-default align-center"><?php echo $args['text_button']['text']; ?></a>
        </div>
        <?php endif; ?>
    </div>
</section>