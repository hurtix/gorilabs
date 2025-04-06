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

    <div class="content text-2xl md:text-2xl w-1/1 md:w-2/3 mx-auto py-10 md:py-40 font-titulo [&>p]:mb-8">
      <p>Hola, somos
        <span class="relative">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/juan.webp" alt=""
            class="aspect-square pointer-events-none w-12 md:w-15 h-12 md:h-15 object-cover rounded-full absolute -top-10 md:top-8 -left-4 -rotate-2 border-3 animate-float drop-shadow-[0_5px_15px_rgba(0,0,0,0.2)]">Juan
        </span> y
        <span class="relative">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/diego.webp" alt=""
            class="aspect-square pointer-events-none w-12 md:w-15 h-12 md:h-15 object-cover rounded-full absolute -top-10 md:-top-12 -right-5 rotate-2 border-3 animate-float-delayed drop-shadow-[0_5px_15px_rgba(0,0,0,0.2)]">Diego
        </span>, los <span class="italic font-serif whitespace-nowrap">co-fundadores</span> de <b>GORILABS</b>.
      </p>

      <p class="mt-0 md:mt-16">Durante más de 5 años, hemos ayudado a las personas, empresas e instituciones a convertir sus ideas en realidad. Nuestro modelo de trabajo se basa en atender selectivamente a nuestros clientes, garantizando que cada proyecto reciba una atención personalizada y dedicada.</p>

      <p>Sabemos lo desafiante que puede ser dar vida a una visión. Requiere pasión, dedicación y disposición para tomar el camino menos transitado. Por eso te guiamos personalmente en cada paso del viaje. Desde esa primera chispa de inspiración hasta el momento en que tu idea se convierte en algo tangible.</p>

      <p>En <b>GORILABS</b>, creemos que la forma en que logramos los resultados importa tanto como los resultados mismos. Profundizamos para entender tus objetivos y colaboramos estrechamente contigo para crear soluciones que no solo satisfagan tus necesidades, sino que superen tus expectativas.</p>

      <p>Nuestro enfoque es simple:</p>

      <ul class="mb-8 grid grid-cols-1 grid-rows-1 md:grid-cols-2 md:grid-rows-2 gap-4 [&>li]:border [&>li]:border-gray-200 [&>li]:p-4 [&>li]:text-xl [&>li]:bg-gray-100 [&>li>span]:block">
        <li class="md:row-span-2 relative"><img class="absolute -top-10 md:-top-10 -left-5 md:-left-10 w-30 md:w-40 pointer-events-none select-none grayscale-100 brightness-125 animate-float drop-shadow-[0_5px_15px_rgba(0,0,0,0.2)]" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/webp/icon-14.webp" alt=""><span class="font-serif italic font-bold pt-14 md:pt-24">Planificación</span> Comenzamos dando forma a tus necesidades con aportes de estrategas, diseñadores e ingenieros, trazando una hoja de ruta clara para el desarrollo.</li>
        <li><span class="font-serif italic font-bold">Validación</span> Construimos rápidamente prototipos para probar y refinar tu concepto.</li>
        <li class="md:col-start-2 md:row-start-2"><span class="font-serif italic font-bold">Lanzamiento y Escalamiento</span> Desarrollamos productos robustos centrados en el usuario y te ayudamos a escalarlos efectivamente.</li>
      </ul>

      <p>Pero más que un proceso, se trata de una alianza. Cuando trabajas con nosotros, no eres solo otro proyecto. Tienes acceso directo a nosotros <span class="font-serif italic">—los fundadores—</span> que estamos personalmente comprometidos con tu éxito. Nos enorgullecemos de atender cada detalle, asegurando que todo se alinee con tu visión.</p>

      <p>Si buscas un socio que trate tu proyecto con el cuidado y la atención que merece, nos encantaría saber de ti. Trabajemos juntos para convertir tu visión en una historia de éxito.</p>
    </div>
  </div>
</div>
<?php get_footer(); ?>