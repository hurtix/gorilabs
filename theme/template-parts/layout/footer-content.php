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
						<img class="absolute -top-25 md:-top-25 -left-5 md:-left-20 w-30 md:w-40 pointer-events-none select-none grayscale-100 brightness-175 animate-float drop-shadow-[0_5px_15px_rgba(255,255,255,0.2)]" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/webp/icon-17.webp" alt="">
					</div>
					<h2 class="text-3xl md:text-6xl font-titulo font-bold">¡Hey, hablemos!</h2>
				</div>
				<div class="w-1/2">
					<ul class="text-lg md:text-2xl flex flex-col gap-y-3 md:gap-y-1">
						<li><a class="hover:text-[#64E69E]" href="mailto:">hola@gorilabs.com</a></li>
						<li><a class="hover:text-[#64E69E]" href="tel:3012956665">57 3012956665</a></li>
						<li><a href="https://api.whatsapp.com/send?phone=573012956665&amp;text=Hola%20*GORILABS*%2C%20estoy%20interesado%20en%20recibir%20m%C3%A1s%20informaci%C3%B3n%20[ Start ]" target="_blank"><span class="text-[#64E69E] hover:text-white block leading-none md:leading-normal">Textéanos a Whatsapp</span></a></li>
						<li><a href="https://www.instagram.com/direct/t/17843933291461387" target="_blank"><span class="hover:text-[#64E69E] block leading-none md:leading-normal">Envíanos un <span class="font-serif italic">de-eme</span> a Instagram</span></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->