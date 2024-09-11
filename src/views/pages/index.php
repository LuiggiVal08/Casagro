<div class="" x-data="{ openModal:false }">
    <div x-show="openModal" x-on:click="openModal = false" @click.stop @keydown.escape="openModal = false"
        class="backdrop-blur-sm fixed inset-x-0 top-0 z-50 h-screen overflow-hidden md:inset-0 scrollbar min-h-fit items-center justify-center flex bg-opaco ">
        <div tabindex="-1" id=":rm:" role="dialog" class="px-4 w-full max-w-2xl" aria-labelledby=":r11:" @click.stop @keydown.escape="openModal = false">
            <div class=" border border-gray-200 dark:border-gray-700 relative max-h-[calc(100vh-33px)] md:max-h-[calc(100vh-33px)] overflow-y-auto scrollbar shadow rounded-lg bg-white dark:bg-primary">
                <header class="flex items-start justify-between rounded-t border-b p-5 dark:border-gray-600">
                    <h3 id=":r11:" class="text-xl font-medium text-gray-900 dark:text-white">Asistencia</h3>

                    <button x-on:click="openModal = false" aria-label="Close" class="ml-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white" type="button">
                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" class="h-5 w-5" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                        </svg></button>
                </header>
                <form id="formAsistencia">
                    <!-- <div class="flex justify-start items-center gap-4 flex-row"><span class="material-symbols-rounded ico-error md-48 fill-regular wght-normal text-warning-200 leading-none"></span><b class="text-text-tertiary">¿Desea editar el siguiente Archivero?</b></div> -->
                    <div class="space-y-4 py-4 px-6 ">
                        <div class="flex flex-row gap-4 w-full">
                            <div class="flex flex-col w-full">
                                <label class="text-text-secondary text-low font-bold">Cedula<span class="text-error-200"> *</span></label>
                                <input class="mt-4 mb-2 bg-primary border border-gray-400 dark:border-gray-700 h-[42px] w-full px-4 py-2 rounded-md outline-none text-text-primary">
                            </div>
                            <div class="flex flex-col w-full">
                                <label class="text-text-secondary text-low font-bold">Contraceña<span class="text-error-200"> *</span></label>
                                <input class="mt-4 mb-2 bg-primary border border-gray-400 dark:border-gray-700 h-[42px] w-full px-4 py-2 rounded-md outline-none text-text-primary">
                            </div>
                        </div>
                        <div>
                            <div class="flex flex-col w-full">
                                <label class="text-text-secondary text-low font-bold">Observación<span class="text-error-200"> *</span></label>
                                <input class="mt-4 mb-2 bg-primary border border-gray-400 dark:border-gray-700 h-[42px] w-full px-4 py-2 rounded-md outline-none text-text-primary">
                            </div>
                        </div>
                        <div>
                            <div class="flex flex-col w-full">
                                <label class="text-text-secondary text-low font-bold">Entreda / Salida<span class="text-error-200"> *</span></label>
                                <select class="mt-4 mb-2 bg-primary border border-gray-400 dark:border-gray-700 h-[42px] w-full px-4 py-2 rounded-md outline-none text-text-primary">
                                    <option value="">Seleciones una ópción</option>
                                    <option value="entreda">Entreda</option>
                                    <option value="salida">Salida</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="items-center space-x-2 rounded-b border-gray-200 p-6 dark:border-gray-600 border-t flex flex-row w-full flex-wrap justify-end gap-6">
                        <button type="button" class="group relative flex items-stretch justify-center p-0.5 text-center font-medium transition-[color,background-color,border-color,text-decoration-color,fill,stroke,box-shadow] focus:z-10 focus:outline-none :ring-cyan-700 border border-gray-200 bg-white text-gray-900 focus:text-cyan-700 focus:ring-4 enabled:hover:bg-gray-100 enabled:hover:text-cyan-700 dark:border-gray-600 dark:bg-transparent dark:text-gray-400 dark:enabled:hover:bg-gray-700 dark:enabled:hover:text-white rounded-lg">
                            <span class="flex items-stretch transition-all duration-200 rounded-md px-4 py-2 text-sm">Cancelar</span>
                        </button>
                        <button type="button" class="group relative flex items-stretch justify-center p-0.5 text-center font-medium transition-[color,background-color,border-color,text-decoration-color,fill,stroke,box-shadow] focus:z-10 focus:outline-none border border-transparent bg-tertiary-100 text-white focus:ring-4 focus:ring-blue-300 enabled:hover:bg-blue-500 dark:hover:bg-blue-500 dark:focus:ring-blue-800 rounded-lg">
                            <span class="flex items-stretch transition-all duration-200 rounded-md px-4 py-2 text-sm">Aceptar</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="w-full content-center relative backdrop-blur-sm">
        <div class="container px-6 py-16 mx-auto ">
            <div class="items-center lg:flex">
                <div class="w-full lg:w-1/2">
                    <div class="lg:max-w-lg">
                        <h1 class=" font-medium text-white dark:text-white text-3xl max-lg:text-center lg:text-4xl">Bienvenido a <span class="text-tertiary-400">Casagro</span>
                            El aliado del Agricultor</h1>
                        <hr class="mt-2 lg:max-w-[80%] ">
                        <p class="mt-3 text-white max-lg:text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro beatae error laborum ab amet sunt recusandae? Reiciendis natus perspiciatis optio.</p>

                    </div>
                </div>

                <div class="lg:w-1/3 h-[25rem] mt-12 lg:mt-0 w-full mx-auto max-w-md overflow-hidden rounded-t-full outline outline-4 outline-offset-4  outline-[#475F45] relative">
                    <button @click="openModal= !openModal" class="absolute inset-0 m-auto mt-56 w-fit h-fit px-5 py-2 text-lg tracking-wide text-white transition-colors duration-200  rounded-lg shrink-0  bg-tertiary-100 hover:bg-tertiary-200 "> Asistencia</button>




                    <img class="object-cover w-full h-full rounded-t-full" src="/images/Screenshot_16.png" alt="main page">
                </div>
            </div>
        </div>

    </div>
</div>
