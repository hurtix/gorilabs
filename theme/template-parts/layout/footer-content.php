<?php

/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gorilabs_tw
 */

?>

<footer id="colophon">
	<div class="w-full">
		<div class="container mx-auto bg-[#212123] text-white">
			<div class="flex pt-24 pb-24 md:pb-12">
				<div class="w-1/2">
					<div class="icon relative">
						<img class="absolute -top-25 left-0 md:-left-20 w-20 md:w-40 pointer-events-none select-none grayscale-100 brightness-200" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/webp/icon-17.webp" alt="">
					</div>
					<h2 class="text-3xl md:text-6xl font-titulo font-bold">¡Hey, hablemos!</h2>
				</div>
				<div class="w-1/2">
					<ul class="text-lg md:text-2xl flex flex-col gap-y-1">
						<li><a class="hover:text-[#64E69E]" href="mailto:">hola@gorilabs.com</a></li>
						<li><a class="hover:text-[#64E69E]" href="tel:3012956665">57 3012956665</a></li>
						<li><a href="https://api.whatsapp.com/send?phone=573012956665&amp;text=Hola%20*GORILABS*%2C%20estoy%20interesado%20en%20recibir%20m%C3%A1s%20informaci%C3%B3n%20[ Start ]" target="_blank"><span class="text-[#64E69E] hover:text-white">Textéanos a Whatsapp</span></a></li>
						<li><a href="https://www.instagram.com/direct/t/17843933291461387" target="_blank"><span class="hover:text-[#64E69E]">Envíanos un DM a Instagram</span></a></li>
					</ul>
				</div>
			</div>

			<!-- <div class="w-full flex justify-end items-center py-4">
				<a class="link_gorilabs flex items-center w-fit hover:text-green-300" href="https://gorilabs.com?ref=myself" target="_blank"><svg version="1.1" id="gorilabs" fill="#ffffff" width="20" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 62.9 83.7" xml:space="preserve">
						<g>
							<path class="st0" d="M23.5,83.7c-0.2,0-0.5-0.1-0.7-0.3c-0.3-0.3-0.4-0.8-0.2-1.2c0.5-0.9,3.3-5.6,4.7-7.8l-9.1-3.1H8.1 c-1.6,0-3-1.3-3-3V47.7l-1.3,0.6c-0.3,0.2-0.7,0.1-1-0.1c-0.3-0.2-0.5-0.6-0.4-1L3,43H1.6C0.7,43,0,42.3,0,41.4v-9.7 c0-0.6,0.4-1,1-1h4.1V12.2c0-1.6,1.3-3,3-3h11.3c0.5-0.3,1.8-1.2,5.6-3.8l-0.7-0.7c-0.3-0.3-0.3-0.8-0.2-1.1c0.2-0.4,0.6-0.6,1-0.5 l3.2,0.3l-0.8-2c-0.2-0.4-0.1-0.9,0.3-1.1C28.2,0,28.6-0.1,29,0.2l14.3,9h11.4c1.7,0,3,1.3,3,3v18.6h4.2c0.6,0,1,0.4,1,1v9.7 c0,0.9-0.7,1.6-1.6,1.6h-1.4l0.7,4.1c0,0.1,0.1,0.2,0.1,0.4c0,0.6-0.4,1-1,1c0,0,0,0,0,0c-0.1,0-0.3,0-0.4-0.1l-1.4-0.7v20.8 c0,1.6-1.3,3-3,3h-9.8l-3.2,1.9c-6.2,3.6-12.5,7.3-17.6,10.2C23.9,83.6,23.7,83.7,23.5,83.7z M6.1,45.1c0.2,0,0.4,0.1,0.5,0.2 c0.3,0.2,0.5,0.5,0.5,0.8v22.3c0,0.5,0.4,1,1,1h10.3c0.1,0,0.2,0,0.3,0.1L29.2,73c0.3,0.1,0.5,0.3,0.6,0.6c0.1,0.3,0.1,0.6-0.1,0.9 c-0.7,1.2-2.2,3.5-3.4,5.4c4.4-2.6,9.4-5.5,14.3-8.3l3.5-2c0.2-0.1,0.3-0.1,0.5-0.1h10c0.5,0,1-0.4,1-1V46.1c0-0.3,0.2-0.7,0.5-0.8 c0.3-0.2,0.7-0.2,1-0.1l1.1,0.5l-0.6-3.5c0-0.3,0-0.6,0.2-0.8c0.2-0.2,0.5-0.4,0.8-0.4h2.2v-8.3h-4.2c-0.6,0-1-0.4-1-1V12.2 c0-0.5-0.4-1-1-1H43c-0.2,0-0.4-0.1-0.5-0.2L30.6,3.5l0.2,0.6c0.1,0.3,0.1,0.7-0.1,1c-0.2,0.3-0.6,0.4-0.9,0.4l-2.4-0.2 c0,0.1,0.1,0.3,0,0.4c0,0.3-0.2,0.5-0.4,0.7c0,0-6.7,4.5-6.8,4.6c-0.2,0.1-0.4,0.2-0.6,0.2H8.1c-0.5,0-1,0.4-1,1v19.6 c0,0.6-0.4,1-1,1H2V41h2.2c0.3,0,0.6,0.1,0.8,0.4c0.2,0.2,0.3,0.5,0.2,0.8l-0.6,3.5l1-0.5C5.8,45.1,5.9,45.1,6.1,45.1z M50.7,25.7 c0,0-18.7,5.1-19.3,5.1c-0.5,0-19.3-5.1-19.3-5.1v11.8l8.3,4.5l-5,12.2l4.7,8.4h11.3h11.3l4.7-8.4l-5-12.2l8.3-4.5V25.7z  M36.4,40.8l-4.2,2.9C32,43.9,31.7,44,31.4,44c-0.3,0-0.6-0.1-0.8-0.3l-4.2-2.9c-0.5-0.3-0.6-1-0.3-1.5c0.3-0.5,1-0.6,1.6-0.3 l3.7,2.5l3.7-2.5c0.5-0.3,1.2-0.2,1.5,0.3C37.1,39.8,36.9,40.5,36.4,40.8z M44.9,35.8l-5.2,5.1c-0.4-2.8-3.9-5-8.2-5 c-4.5,0-8.1,2.3-8.3,5.2L18,35.8c-0.1-0.3-0.2-0.6-0.2-0.9c0-1.3,1-2.3,2.3-2.3H21c0,0,0,0.1,0,0.1c0,1.1,0.9,2,2,2 c1.1,0,2-0.9,2-2c0,0,0-0.1,0-0.1h12.9c0,0,0,0.1,0,0.1c0,1.1,0.9,2,2,2c1.1,0,2-0.9,2-2c0,0,0-0.1,0-0.1h0.9c1.3,0,2.3,1,2.3,2.3 C45.1,35.2,45,35.5,44.9,35.8z"></path>
						</g>
					</svg><span class="block text-[9px] w-15 lh-1 pl-1 leading-none">Hecho en Popayán</span></a>
			</div> -->
		</div>
	</div>
</footer><!-- #colophon -->