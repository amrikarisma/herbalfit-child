<?php
/**
 * Template Name: Section
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package BenSemangat
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
if(is_front_page()) :
    get_header('home');
else :
    get_header();
endif;

while ( have_posts() ) :
    the_post();
    if(is_front_page()) :
        get_template_part( 'component-templates/comp', 'home' );
    else :
	    get_template_part( 'component-templates/comp', 'header' );
    endif;
    if ( have_rows( 'section' ) ): 

        $sections = get_field('section');

        foreach ($sections as $section) :

            switch ($section['acf_fc_layout']) :
            
                case 'about':
                    get_template_part( 'loop-templates/content', 'about', $section );
                    break;
                case 'contact':
                    get_template_part( 'loop-templates/content', 'contact', $section );
                    break;
                case 'maps':
                    // var_dump($section);
                    // die();
                    get_template_part( 'loop-templates/content', 'maps', $section );
                    break;
                case 'products':
                    // var_dump($section);
                    // die();
                    get_template_part( 'loop-templates/content', 'products', $section );
                    break;

                
                default:
                    # code...
                    break;

            endswitch;

        endforeach;

    endif;




    // get_template_part( 'component-templates/comp', 'header' );
	// get_template_part( 'loop-templates/content', 'about' );
	// get_template_part( 'loop-templates/content', 'contact' );
endwhile;

get_footer();
