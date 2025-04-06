<?php

/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gorilabs_tw
 */

?>

<header id="masthead">
    <div class="relative md:fixed w-full md:w-[10%] py-4 px-[2%] h-full border-r-0 md:border-r border-gray-200">
        <div class="flex flex-col h-full justify-around">
            <div class="flex justify-center">
                <!-- <a href="/" class="block overflow-hidden transition-transform duration-300 ease-in-out hover:scale-105">
                    <img class="h-[75px] md:h-[125px]" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/brand.svg" alt="Logo">
                </a> -->
            </div>
            
            <hr class="text-gray-200 hidden md:block">
            <!-- Get nav -->
            <nav id="site-navigation" aria-label="<?php esc_attr_e('Main Navigation', 'gorilabstw'); ?>">
                <?php if (is_front_page()) { ?>
                    <ul class="hidden md:flex flex-row md:flex-col justify-start items-start gap-y-2">
                        <li><a class="nav-link transition-all duration-300 opacity-50 hover:opacity-100 font-normal hover:font-bold" href="#what">What?</a></li>
                        <li><a class="nav-link transition-all duration-300 opacity-50 hover:opacity-100 font-normal hover:font-bold" href="#who">Who?</a></li>
                        <li><a class="nav-link transition-all duration-300 opacity-50 hover:opacity-100 font-normal hover:font-bold" href="#how">How?</a></li>
                        <li><a class="nav-link transition-all duration-300 opacity-50 hover:opacity-100 font-normal hover:font-bold" href="#where">Where?</a></li>
                        <li><a class="nav-link transition-all duration-300 opacity-50 hover:opacity-100 font-normal hover:font-bold" href="#when">When?</a></li>
                        <li><a class="nav-link transition-all duration-300 opacity-50 hover:opacity-100 font-normal hover:font-bold" href="#why">Why?</a></li>
                        <li><a class="nav-link transition-all duration-300 opacity-50 hover:opacity-100 font-normal hover:font-bold" href="#for-whom">For whom?</a></li>
                        <li><a class="nav-link transition-all duration-300 opacity-50 hover:opacity-100 font-normal hover:font-bold" href="#how-much">How much?</a></li>
                    </ul>

                <?php } else {  ?>
                    <a class="transition-all duration-300 opacity-50 hover:opacity-100 font-normal block text-center leading-none hover:font-bold" href="/">Volver al home</a>
                <?php }  ?>

                <!-- <button aria-controls="primary-menu" aria-expanded="false"><?php //esc_html_e( 'Primary Menu', 'gorilabstw' ); 
                                                                                ?></button> -->

                <?php
                // wp_nav_menu(
                // 	array(
                // 		'theme_location' => 'menu-1',
                // 		'menu_id'        => 'primary-menu',
                // 		'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
                // 	)
                // );
                ?>
            </nav><!-- #site-navigation -->
        </div>
    </div>
</header><!-- #masthead -->

<aside>
    <div class="fixed z-1 bg-white bottom-0 left-0 md:top-0 md:right-0 md:left-auto w-full md:w-[10%] md:h-screen border-t md:border-t-0 md:border-l border-gray-200">
        <div class="flex flex-row md:flex-col gap-0 md:h-full">
            <div class="md:h-[50%] w-1/2 md:w-auto">
                <a class="font-display uppercase h-full flex justify-center items-center hover:bg-[#64E69E] hover:text-white py-5 md:py-0 text-center" href="https://api.whatsapp.com/send?phone=573012956665&text=Hola%20*GORILABS*%2C%20estoy%20interesado%20en%20recibir%20m%C3%A1s%20informaci%C3%B3n%20[%20Start%20]" target="_blank">
                    <span class="md:-rotate-90 tracking-[5px] md:tracking-[10px]">Escríbenos</span>
                </a>
            </div>
            <div class="w-[1px] bg-gray-200"></div>
            <div class="md:h-[50%] w-1/2 md:w-auto border-t border-gray-100">
                <a class="font-display uppercase h-full flex justify-center items-center hover:bg-[#64E69E] hover:text-white py-5 md:py-0  text-center" href="https://www.instagram.com/_gorilabs" target="_blank">
                    <span class="md:-rotate-90 tracking-[3px] md:tracking-[10px]">Síguenos</span>
                </a>
            </div>

        </div>
    </div>
</aside>




<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Prevent hash in URL when clicking nav links
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href').substring(1);
                document.getElementById(targetId).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Improved intersection observer for sticky sections
        const sections = document.querySelectorAll('[id]');
        const navLinks = document.querySelectorAll('.nav-link');

        const observerOptions = {
            threshold: [0.2, 0.8],
            rootMargin: '-20% 0px -20% 0px'
        };

        let currentSection = null;

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                // Get the corresponding nav link
                const targetId = entry.target.id;
                const link = document.querySelector(`.nav-link[href="#${targetId}"]`);

                if (!link) return;

                if (entry.isIntersecting && entry.intersectionRatio > 0.5) {
                    // Remove active class from all links
                    navLinks.forEach(link => {
                        link.classList.remove('opacity-100', 'font-bold');
                        link.classList.add('opacity-50', 'font-normal');
                    });

                    // Add active class to current link
                    link.classList.add('opacity-100', 'font-bold');
                    link.classList.remove('opacity-50', 'font-normal');
                    currentSection = targetId;
                }
            });
        }, observerOptions);

        // Observe all sections
        sections.forEach(section => {
            observer.observe(section);
        });

        // Handle scroll position on page load
        function updateActiveSection() {
            const scrollPosition = window.scrollY + window.innerHeight / 2;

            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.offsetHeight;

                if (scrollPosition >= sectionTop && scrollPosition < (sectionTop + sectionHeight)) {
                    const link = document.querySelector(`.nav-link[href="#${section.id}"]`);
                    if (link && currentSection !== section.id) {
                        navLinks.forEach(l => {
                            l.classList.remove('opacity-100', 'font-bold');
                            l.classList.add('opacity-50', 'font-normal');
                        });
                        link.classList.add('opacity-100', 'font-bold');
                        link.classList.remove('opacity-50', 'font-normal');
                        currentSection = section.id;
                    }
                }
            });
        }

        // Update active section on scroll
        window.addEventListener('scroll', updateActiveSection);
        // Initial check on page load
        updateActiveSection();
    });
</script>