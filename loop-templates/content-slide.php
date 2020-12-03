<div class="wrapper-slider">
    <div class="swiper-container homepage">
        <div class="swiper-wrapper">
            <?php 
                if($args['image']) :
                    foreach ($args['image'] as $slide) : ?>
                        <div class="swiper-slide">
                            <div class="swiper-slide-cover" style="background-image : url(<?php echo esc_url($slide['url']); ?>);">
                                <div class="heading-slide">
                                    <h3><?php echo $slide['title']; ?></h3>
                                    <div class="text"><?php echo $slide['description']; ?></div>
                                </div>
                            </div>
                        </div>
         
                    <?php 
                    endforeach;
                endif;
            ?>



        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</div>