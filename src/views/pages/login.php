<!-- <script src="/js/login.js"></script> -->
<div class="flex items-center justify-center w-full h-full p-4 min-h-[calc(100vh-70px)] ">
    <div class="bg-white flex flex-row flex-wrap items-center justify-center max-sm:w-min p-4">
        <div class="content-center p-4 min-w-72">
            <img class="w-full mask-image__radial-gradient rounded-" src="/images/logo2.png" alt="">
        </div>
        <form class="flex flex-col gap-4 p-6" id="formLogin">
            <!-- <h3 class="m-auto text-xl font-semibold text-text-tertiary">
                Ingresar
            </h3> -->
            <label class="flex flex-col ">
                <span class="text-low text-text-tertiary font-semibold ">Usuario</span>
                <input
                    type="text" name="username" id="user"
                    placeholder="ingrese su Usuario"
                    class="my-2 border border-gray-400 dark:border-gray-700 h-[42px] w-full px-4 py-2 rounded-md outline-none text-text-primary">
            </label>
            <label class="flex flex-col ">
                <span class="text-low text-text-tertiary font-semibold">Contraseña</span>
                <input
                    type="password" name="password" id="pass"
                    placeholder="Ingrese su Contraseña"
                    class="my-2 border border-gray-400 dark:border-gray-700 h-[42px] w-full px-4 py-2 rounded-md outline-none text-text-primary">
            </label>

            <button type="submit" class="w-full px-5 py-2 h-[42px] text-sm tracking-wide text-white transition-colors   duration-200  rounded-md shrink-0 sm:w-auto bg-tertiary-100 hover:bg-tertiary-200">
                Ingresar
            </button>
            <a href="#" class="m-auto text-center border-b-2 border-tertiary-400">Registrarse</a>
        </form>

    </div>
</div>
