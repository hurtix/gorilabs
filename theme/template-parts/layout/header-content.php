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
    <div class="relative md:fixed w-full md:w-[10%] py-4 px-[5%] md:px-[2%] h-full border-r-0 md:border-r border-gray-200">
        <div class="grid grid-cols-2 md:flex flex-col h-full justify-between md:justify-around items-center">
            <div class="flex justify-start md:justify-center">
                <a href="/" class="block overflow-hidden transition-transform duration-300 ease-in-out hover:scale-105">
                    <img class="h-[100px] md:h-[125px]" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/brand.svg" alt="Logo">
                </a>
            </div>

            <hr class="text-gray-200 w-full hidden md:block">
            <!-- Get nav -->
            <nav id="site-navigation" class="flex justify-end" aria-label="<?php esc_attr_e('Main Navigation', 'gorilabstw'); ?>">
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
                    <!-- <a class="transition-all duration-300 opacity-50 hover:opacity-100 font-normal block text-right md:text-center leading-none hover:font-bold" href="/">Volver al home</a> -->
                    <div class="relative group">
                        <div class="absolute -left-1 -top-1 w-2 h-2 border-l-2 border-t-2 border-black transition-all duration-300 group-hover:left-0 group-hover:top-0"></div>
                        <div class="absolute -right-1 -top-1 w-2 h-2 border-r-2 border-t-2 border-black transition-all duration-300 group-hover:right-0 group-hover:top-0"></div>
                        <div class="absolute -left-1 -bottom-1 w-2 h-2 border-l-2 border-b-2 border-black transition-all duration-300 group-hover:left-0 group-hover:bottom-0"></div>
                        <div class="absolute -right-1 -bottom-1 w-2 h-2 border-r-2 border-b-2 border-black transition-all duration-300 group-hover:right-0 group-hover:bottom-0"></div>
                        <a href="/" class="font-serif text-sm italic tracking-wider bg-white text-[#212123] p-1 block w-auto text-center transition-colors duration-300 hover:bg-[#64E69E] hover:text-white">
                            Volver al home
                        </a>
                    </div>
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
    <div class="fixed flex md:block z-1 bg-white bottom-0 left-0 md:top-0 md:right-0 md:left-auto w-full md:w-[10%] md:h-screen border-t md:border-t-0 md:border-l border-gray-200">
        <div class="md:h-[50%] w-1/2 md:w-auto">
            <a class="font-display uppercase h-full flex justify-center items-center hover:bg-[#64E69E] hover:text-white py-4 md:py-0 text-center" href="https://api.whatsapp.com/send?phone=573012956665&text=Hola%20*GORILABS*%2C%20estoy%20interesado%20en%20recibir%20m%C3%A1s%20informaci%C3%B3n%20[%20Start%20]" target="_blank">
                <div class="md:-rotate-90 tracking-[3px] md:tracking-[10px] relative px-2 py-1">
                    <div class="absolute -left-1 -top-1 w-2 h-2 border-l-2 border-t-2 border-[#212123]"></div>
                    <div class="absolute -right-1 -top-1 w-2 h-2 border-r-2 border-t-2 border-[#212123]"></div>
                    <div class="absolute -left-1 -bottom-1 w-2 h-2 border-l-2 border-b-2 border-[#212123]"></div>
                    <div class="absolute -right-1 -bottom-1 w-2 h-2 border-r-2 border-b-2 border-[#212123]"></div>
                    Escríbenos
                </div>
            </a>
        </div>
        <div class="w-[1px] bg-gray-200"></div>
        <div class="md:h-[50%] w-1/2 md:w-auto border-t-0 md:border-t border-gray-100">
            <a class="font-display uppercase h-full flex justify-center items-center hover:bg-[#64E69E] hover:text-white py-4 md:py-0 text-center" href="https://www.instagram.com/_gorilabs" target="_blank">
                <div class="md:-rotate-90 tracking-[3px] md:tracking-[10px] relative px-2 py-1">
                    <div class="absolute -left-1 -top-1 w-2 h-2 border-l-2 border-t-2 border-[#212123]"></div>
                    <div class="absolute -right-1 -top-1 w-2 h-2 border-r-2 border-t-2 border-[#212123]"></div>
                    <div class="absolute -left-1 -bottom-1 w-2 h-2 border-l-2 border-b-2 border-[#212123]"></div>
                    <div class="absolute -right-1 -bottom-1 w-2 h-2 border-r-2 border-b-2 border-[#212123]"></div>
                    Síguenos
                </div>
            </a>
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