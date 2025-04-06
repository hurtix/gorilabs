<?php

/**
 * Template Name: UI Homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 */
get_header(); ?>

<!-- WHAT - ¿QUÉ? -->
<div id="what" class="w-full">
    <div class="container mx-auto bg-white text-[#212123] h-auto md:h-screen relative flex items-center">

        <div class="w-1/1">
            <div class="icon relative">
                <img class="absolute rotate-5 -top-20 md:-top-25 right-1 md:right-0 w-30 md:w-40 pointer-events-none select-none grayscale-100 brightness-125 animate-float drop-shadow-[0_5px_15px_rgba(0,0,0,0.2)]" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/webp/icon-33.webp" alt="icono">
            </div>
            <span>What?</span>
            <h1 class="text-3xl md:text-6xl font-titulo font-bold">Construimos experiencias para un mundo phygital, transformando productos y servicios, fortaleciendo marcas e impulsando resultados.</h1>
        </div>
        <?php if (!wp_is_mobile()) { ?>
            <div class="absolute mx-auto bottom-0 left-0 px-[5%] border-t border-gray-200 py-10">
                <ul class="flex flex-col md:flex-row justify-between items-center text-center text-sm gap-4 md:gap-8">
                    <li>Somos líderes en experiencias digitales, audiovisual, diseño web y marca.</li>
                    <li>Creemos que aún las acciones más pequeñas generan grandes resultados.</li>
                    <li>Pensamos, diseñamos y desarrollamos productos que buscan mejorar el mundo.</li>
                    <li>Somos un equipo que le da importancia tanto al proceso como al resultado.</li>
                </ul>
            </div>
        <?php } ?>
    </div>
</div>

<!-- WHO - ¿QUIÉN? -->
<div id="who" class="w-full">
    <div class="container mx-auto flex h-auto md:h-screen items-center justify-center bg-[#212123] text-white">
        <div class="flex items-start flex-col md:flex-row">
            <div class="w-1/1 md:w-1/3">
                <span>Who?</span>
                <h2 class="font-titulo font-bold text-3xl md:text-4xl mb-6 pr-0 md:pr-25">Somos tu aliado tecnológico para el éxito</h2>
            </div>
            <div class="w-1/1 md:w-2/3 font-titulo text-[20px] md:text-[28px] [&>h2]:mb-8 [&>h2:last-child]:mb-0">
                <h2>Brindamos soluciones digitales e integrales, con más de 30 años de experiencia combinada, hemos ayudado a transformar empresas en diversas industrias, con clientes tanto en Colombia como en el extranjero.</h2>

                <h2>Nuestra fortaleza radica en la diversidad de nuestras competencias. Esta versatilidad nos permite diseñar experiencias phygitales completas que conectan el mundo físico y digital de manera coherente y estratégica.</h2>

                <h2>Colaborar con nosotros significa trabajar directamente con los fundadores para garantizar soluciones a medida que se ajusten a las necesidades y objetivos específicos de su negocio.</h2>

                <!-- <a class="font-serif italic text-xl border-2 border-white p-4 block w-fit " href="/manifiesto">Manifiesto de fundadores</a> -->

                <div class="relative inline-block group">
                    <div class="absolute -left-2 -top-2 w-4 h-4 border-l-2 border-t-2 border-white transition-all duration-300 group-hover:left-0 group-hover:top-0"></div>
                    <div class="absolute -right-2 -top-2 w-4 h-4 border-r-2 border-t-2 border-white transition-all duration-300 group-hover:right-0 group-hover:top-0"></div>
                    <div class="absolute -left-2 -bottom-2 w-4 h-4 border-l-2 border-b-2 border-white transition-all duration-300 group-hover:left-0 group-hover:bottom-0"></div>
                    <div class="absolute -right-2 -bottom-2 w-4 h-4 border-r-2 border-b-2 border-white transition-all duration-300 group-hover:right-0 group-hover:bottom-0"></div>

                    <!-- Botón principal -->
                    <a href="/manifiesto" class="font-serif text-sm italic tracking-wider bg-white text-[#212123] p-4 inline-flex items-center justify-between w-full transition-colors duration-300 hover:bg-[#64E69E] hover:text-white">
                        Manifiesto de fundadores
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>


<!-- HOW - ¿CÓMO? -->
<div id="how" class="w-full">
    <div class="bg-white text-[#212123] container mx-auto flex items-center h-auto">
        <div class="flex items-start flex-col md:flex-row py-20">
            <div class="w-1/1 md:w-1/3 relative md:sticky md:top-20">
                <span>How?</span>
                <h2 class="font-titulo font-bold text-3xl md:text-4xl mb-6 pr-0 md:pr-25">Hacemos muchas cosas y las hacemos muy bien</h2>
            </div>
            <div class="w-1/1 md:w-2/3">
                <div>
                    <?php $featured_posts = get_field('elija-servicios');
                    if ($featured_posts) : ?>
                        <div class="grid grid-cols-1 gap-0 [&>article:last-child]:border-b-0">
                            <?php foreach ($featured_posts as $post) :
                                setup_postdata($post); ?>

                                <article class="border-b border-gray-200 hover:bg-gray-100">
                                    <a class="block py-4 px-0 md:p-4 pointer-events-none" href="<?php the_permalink() ?>" title="<?php the_title() ?>" rel="bookmark">
                                        <div class="grid grid-cols-[0.25fr_0.75fr] md:grid-cols-[0.15fr_0.25fr_0.60fr] grid-rows-[auto_auto] md:grid-rows-1 justify-start md:justify-between items-start gap-0 md:gap-4">
                                            <h3 class="sigla text-5xl md:text-7xl font-display tracking-tighter"><?php the_field('servicio-sigla'); ?></h3>
                                            <h4 class="font-display uppercase text-lg md:text-xl pt-2 md:pt-4 w-[180px] md:w-auto leading-none"><?php the_title(); ?></h4>
                                            <div class="col-span-2 md:col-span-1 py-2"><?php echo get_field('servicio-descripcion'); ?></div>
                                        </div>
                                    </a>
                                </article>
                            <?php endforeach; ?>
                        </div>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- WHERE - ¿DÓNDE? -->
<div id="where" class="w-full">
    <div class="text-white bg-[#212123] h-auto md:h-screen container mx-auto flex items-center">
        <div class="flex justify-start flex-col md:flex-row">
            <div class="w-1/1 md:w-1/3">
                <span>Where?</span>
                <h2 class="font-titulo font-bold text-3xl md:text-4xl mb-6 pr-0 md:pr-25">Estamos donde nos necesitan nuestros clientes</h2>
            </div>
            <div class="w-1/1 md:w-2/3 font-titulo text-[20px] md:text-[28px] [&>h2]:mb-8 [&>h2:last-child]:mb-0">
                <h2>Operamos desde el suroccidente Colombiano, sin embargo nuestros clientes se encuentran a lo largo de las regiones del país, Estados Unidos y Europa.</h2>

                <h2>Nos gusta manejar los proyectos remotamente y en la actualidad servimos a más de 20 clientes activos alrededor del mundo y a lo largo de varios sectores de la industria, todos unidos por una posición de liderazgo en sus respectivos sectores.</h2>

                <h2>La experiencia nos permite entender tanto mercados locales como internacionales, adaptando soluciones a diversos contextos culturales y comerciales.</h2>
            </div>
        </div>
    </div>
</div>

<!-- WHEN - ¿CUÁNDO? -->
<div id="when" class="w-full">
    <div class="bg-white text-[#212123] h-auto md:h-screen container mx-auto bg-gray-100 flex items-center">
        <div class="flex justify-start flex-col md:flex-row">
            <div class="w-1/1 md:w-1/3">
                <span>When?</span>
                <h2 class="font-titulo font-bold text-3xl md:text-4xl mb-6 pr-0 md:pr-25">Acompañamiento experto en cada etapa</h2>
            </div>
            <div class="w-1/1 md:w-2/3 font-titulo text-[20px] md:text-[28px] [&>h2]:mb-8 [&>h2:last-child]:mb-0">
                <h2>Estamos presentes en los momentos críticos de transformación de su negocio, cuando necesita renovar su identidad, optimizar su presencia digital o crear nuevas experiencias para sus usuarios.</h2>

                <h2>Actuamos tanto en fases iniciales de emprendimiento como en procesos de renovación de marcas establecidas, adaptándonos a los ciclos de evolución de cada negocio.</h2>

                <h2>Estamos preparados para responder ágilmente a los desafíos actuales del mercado.</h2>
            </div>
        </div>
    </div>
</div>

<!-- WHY - ¿POR QUÉ? -->
<div id="why" class="w-full ">
    <div class="bg-[#212123] text-white h-auto md:h-screen container mx-auto flex items-center">
        <div class="flex justify-start flex-col md:flex-row">
            <div class="w-1/1 md:w-1/3">
                <span>Why?</span>
                <h2 class="font-titulo font-bold text-3xl md:text-4xl mb-6 pr-0 md:pr-25">Cada proyecto, un compromiso con la excelencia</h2>
            </div>
            <div class="w-1/1 md:w-2/3 font-titulo text-[20px] md:text-[28px] [&>h2]:mb-8 [&>h2:last-child]:mb-0">
                <h2>Creemos en el potencial transformador del diseño y la tecnología para crear conexiones significativas entre marcas y personas.</h2>

                <h2>Nos apasiona impulsar el crecimiento de organizaciones que comparten nuestra visión de un mundo donde lo físico y lo digital convergen para mejorar experiencias cotidianas.</h2>

                <h2>Buscamos dejar una huella duradera a través de soluciones que no solo resuelvan problemas actuales, sino que anticipen necesidades futuras y contribuyan a un ecosistema digital más humano e intuitivo.</h2>
            </div>
        </div>
    </div>
</div>




<!-- FOR WHOM - ¿PARA QUIÉN? -->
<div id="for-whom" class="w-full ">
    <div class="bg-white text-[#212123] container mx-auto flex items-center h-full">
        <div class="flex items-start flex-col md:flex-row py-20">
            <div class="w-1/1 md:w-1/3 relative md:sticky md:top-20">
                <span>For whom?</span>
                <h2 class="font-titulo font-bold text-3xl md:text-4xl mb-6 pr-0 md:pr-25">Nuestro objetivo es la gratificación de nuestros clientes</h2>
            </div>
            <div class="w-1/1 md:w-2/3">
                <?php get_template_part('template-parts/content/clientes'); ?>
            </div>
        </div>
    </div>
</div>


<!-- HOW MUCH - ¿CUÁNTO? -->
<div id="how-much" class="w-full">
    <div class="bg-gray/10 text-[#212123] h-auto md:h-screen container mx-auto flex items-center">
        <div class="flex justify-start flex-col md:flex-row">
            <div class="w-1/1 md:w-1/3">
                <span>How much?</span>
                <h2 class="font-titulo font-bold text-3xl md:text-4xl mb-6 pr-0 md:pr-25">Ofrecemos tarifas equilibradas y transparentes</h2>
            </div>
            <div class="w-1/1 md:w-2/3 font-titulo text-[20px] md:text-[28px] [&>h2]:mb-8 [&>h2:last-child]:mb-0">
                <h2>Nuestra estructura optimizada, estratégica, ágil y creativa nos permite un uso más eficiente del presupuesto de nuestros clientes.</h2>

                <h2>Hacemos esto porque amamos hacerlo. Cobramos un precio a cambio porque tenemos que pagar nuestras facturas. Esto es lo que hacemos. Esto es lo que amamos. Esto es lo que nos pone orgullosos y lo que hace que nuestros clientes sean muy felices.</h2>

            </div>
        </div>
    </div>
</div>



<?php get_footer(); ?>