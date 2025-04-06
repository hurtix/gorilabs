<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gorilabs_tw
 */

?>

<div class="clientes cursor-grab">
    <?php if (get_field('rep-clientes', 3433)) : ?>
        <div class="splide">
            <div class="splide__track">
                <div class="splide__list">
                    <?php
                    $items = array();
                    $counter = 0;
                    $slide_content = '';
                    
                    while (have_rows('rep-clientes', 3433)) : the_row();
                        $link = get_sub_field('link');
                        
                        if ($counter % (wp_is_mobile() ? 8 : 20) === 0 && $counter !== 0) {
                            $items[] = '<div class="splide__slide"><div class="grid grid-cols-2 md:grid-cols-4 gap-2">' . $slide_content . '</div></div>';
                            $slide_content = '';
                        }
                        
                        $slide_content .= '<div class="p-4 ' . ($link ? 'neon' : '') . ' h-[125px] md:h-[150px] flex justify-center items-center border border-gray-200 hover:opacity-50">';
                        if ($link) $slide_content .= '<a href="' . $link . '" target="_blank">';
                        $slide_content .= '<img class="h-[50px] md:h-[75px] object-contain';
                        
                        $clases_checked_values = get_sub_field('clases');
                        if ($clases_checked_values) {
                            foreach ($clases_checked_values as $clases_value) {
                                $slide_content .= ' ' . esc_html($clases_value);
                            }
                        }
                        
                        $slide_content .= '" src="' . get_sub_field('cliente-logo') . '" alt="cliente">';
                        if ($link) $slide_content .= '</a>';
                        $slide_content .= '</div>';
                        
                        $counter++;
                    endwhile;
                    
                    // Add remaining items if any
                    if ($slide_content !== '') {
                        $items[] = '<div class="splide__slide"><div class="grid grid-cols-2 md:grid-cols-4 gap-2">' . $slide_content . '</div></div>';
                    }
                    
                    // Output all slides
                    echo implode('', $items);
                    ?>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                new Splide('.splide', {
                    type: 'loop',
                    perPage: 1,
                    autoplay: true,
                    interval: 4000,
                    arrows: false,
                    pagination: false,
                }).mount();
            });
        </script>
    <?php endif; ?>
</div>