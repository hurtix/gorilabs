<?php

/**
 * Template Name: UI Manifiesto
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 */
get_header(); ?>

<div class="w full">
<div class="container mx-auto min-h-screen">

<h1></h1>

<div class="content text-2xl md:text-3xl w-1/1 md:w-2/3 mx-auto py-10 md:py-40 font-titulo">




<p class="mb-8 md:mb-16">Hola, somos 
  <span class="relative">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/juan.webp" alt="" 
         class="aspect-square pointer-events-none w-12 md:w-15 h-12 md:h-15 object-cover rounded-full absolute -top-13 md:top-8 -left-4 -rotate-2 border-3 animate-float">Juan
  </span> y 
  <span class="relative">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/diego.webp" alt="" 
         class="aspect-square pointer-events-none w-12 md:w-15 h-12 md:h-15 object-cover rounded-full absolute -top-13 -right-5 rotate-2 border-3 animate-float-delayed">Diego
  </span>, los <span class="italic font-serif">co-fundadores</span> de <b>GORILABS</b>.
</p>

<p class="mb-8">Durante más de 5 años, hemos ayudado a las personas, empresas e instituciones a convertir sus ideas en realidad. Nuestro modelo de trabajo se basa en atender selectivamente a nuestros clientes, garantizando que cada proyecto reciba una atención personalizada y dedicada.</p>

<p class="mb-8">Sabemos lo desafiante que puede ser dar vida a una visión. Requiere pasión, dedicación y disposición para tomar el camino menos transitado. Por eso te guiamos personalmente en cada paso del viaje. Desde esa primera chispa de inspiración hasta el momento en que tu idea se convierte en algo tangible.</p>

<p class="mb-8">En <b>GORILABS</b>, creemos que la forma en que logramos los resultados importa tanto como los resultados mismos. Profundizamos para entender tus objetivos y colaboramos estrechamente contigo para crear soluciones que no solo satisfagan tus necesidades, sino que superen tus expectativas.</p>

<p class="mb-8">
Nuestro enfoque es simple:
</p>

<ul class="list-disc pl-8 mb-8">
    <li><b>Diseño:</b> Comenzamos dando forma a tu idea con aportes de estrategas, diseñadores e ingenieros.</li>
    <li><b>Validación:</b> Construimos rápidamente prototipos para probar y refinar tu concepto.</li>
    <li><b>Lanzamiento y Escalamiento:</b> Desarrollamos productos robustos centrados en el usuario y te ayudamos a escalarlos efectivamente.</li>
</ul>

<p class="mb-8">Pero más que un proceso, se trata de una alianza. Cuando trabajas con nosotros, no eres solo otro proyecto. Tienes acceso directo a nosotros <span class="font-serif italic">—los fundadores—</span> que estamos personalmente comprometidos con tu éxito. Nos enorgullecemos de atender cada detalle, asegurando que todo se alinee con tu visión.</p>

<p class="mb-8">Si buscas un socio que trate tu proyecto con el cuidado y la atención que merece, nos encantaría saber de ti. Trabajemos juntos para convertir tu visión en una historia de éxito.</p>
</div>
</div>
</div>
<?php get_footer(); ?>