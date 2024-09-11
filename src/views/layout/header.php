<header class="sticky w-full min-h-14 bg-gray-900 top-0 z-50">
    <!-- <?= $hola ?> -->
    <nav x-data="{ isOpenNav: false }" class="relative bg-white shadow dark:bg-gray-800">
        <div class="container   mx-auto md:flex md:justify-between md:items-center py-2 pt-3">
            <div class="flex items-center justify-between px-4">
                <a href="/">
                    <img class="w-auto h-8 sm:h-9" src="/images/logos3.png" alt="">
                </a>

                <!-- Mobile menu button -->
                <div class="flex lg:hidden ">
                    <button x-cloak @click="isOpenNav = !isOpenNav" type="button" class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400 md:hidden" aria-label="toggle menu">
                        <svg x-show="!isOpenNav" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                        </svg>

                        <svg x-show="isOpenNav" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
            <div x-cloak :class="[isOpenNav ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']" class="absolute inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-white dark:bg-gray-800 md:mt-0 md:p-0 md:top-0 md:relative md:bg-transparent md:w-auto md:opacity-100 md:translate-x-0 md:flex md:items-center">
                <div class="flex flex-col md:flex-row md:mx-4 gap-1.5 md:gap-6 items-center">
                    <a href="/" class="text-text-tertiary border-b-2 border-transparent transition-colors duration-300 transform dark:hover:text-gray-200 hover:border-tertiary-200  hover:text-tertiary-200  max-md:py-2 max-sm:px-2 sm:hover:bg-opacity-50 h-fit font-medium">Inicio</a>


                    <a href="#" class="text-text-tertiary border-b-2 border-transparent transition-colors duration-300 transform dark:hover:text-gray-200 hover:border-tertiary-200  hover:text-tertiary-200 max-md:py-2 max-sm:px-2 sm:hover:bg-opacity-50 h-fit font-medium">Asistencias</a>

                    <a href="login" class="text-text-tertiary border-b-2 transition-colors duration-300 transform dark:hover:text-gray-200 hover:bg-tertiary-100  hover:text-white  py-1  px-5  flex items-center gap-2 border-2 border-tertiary-100 font-medium rounded-md">
                        Ingresar
                        <span class="material-symbols-rounded ico-login md-24 fill-1 wght-18 leading-none" />
                    </a>


                </div>

            </div>
        </div>
    </nav>
</header>
