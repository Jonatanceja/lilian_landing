<section class="py-10 md:py-20 bg-zinc-800 px-5 md:px-0">
    <div class="container mx-auto max-w-6xl space-y-5 md:space-y-10">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-10 items-center">
            <div class="col-span-1 md:col-span-2 relative">
                <picture>
                    <source srcset="/assets/images/portada_hotmart.avif" type="image/avif" />
                    <source srcset="/assets/images/portada_hotmart.webp" type="image/webp" />
                    <img class="h-auto mx-auto" src="/assets/images/portada_hotmart.jpg" alt="Estampado en moda de dama" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000"/>
                </picture>
                <picture>
                    <source srcset="/assets/images/photoshop.avif" type="image/avif" />
                    <source srcset="/assets/images/photoshop.webp" type="image/webp" />
                    <img class="h-auto mx-auto w-1/3 -top-5 -left-5 md:-top-10 md:-left-10 absolute" src="/assets/images/photoshop.jpg" alt="Photoshop" data-aos="fade-down" data-aos-delay="150" data-aos-duration="1000"/>
                </picture>
                <div>
                    <a href="https://www.youtube.com/watch?v=FssULNGSZIA&ab_channel=VicFirth" data-fancybox>
                        <div class="border-2 border-white absolute inset-0 m-auto w-20 h-20 bg-white/40 flex items-center justify-center text-white hover:text-zinc-800 rounded-full text-4xl z-10 transition transform hover:scale-110 hover:bg-white">
                            <i class="lni lni-play"></i>
                        </div>
                        <div class="absolute inset-0 m-auto w-20 h-20 bg-white/40 flex items-center justify-center text-white rounded-full text-3xl z-0 animate-ping">
                            
                        </div>
                    </a>
                </div>
            </div>
            <div class="space-y-5 md:space-y-7 col-span-1 md:col-span-3">
                <x-subtitle>Curso Online</x-subtitle>
                <x-h2_light>Diseño de estampados en Photoshop para principiantes</x-h2_light>
                <div class="relative">
                    <h4 class="text-6xl italic text-orange-500">$ {{ $page->price }}<span class="text-4xl">.00 USD</span></h4>
                    <h4 class="text-6xl italic text-white absolute inset-0 animate-pulse">$ {{ $page->price }}<span class="text-4xl">.00 USD</span></h4>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-5 gap-10">
            <div class="col-span-1 md:col-span-2 relative">
                <x-base_light>
                    <ul class="text-white space-y-3">
                        <li class="flex items-center text-lg font-bold"><span class="mr-3 w-8 h-8 rounded-full flex items-center justify-center bg-orange-500"><i class="lni lni-volume-high"></i></span>Audio en español</li>
                        <li class="flex items-center text-lg font-bold"><span class="mr-3 w-8 h-8 rounded-full flex items-center justify-center bg-orange-500"><i class="lni lni-bar-chart"></i></span>Subtitulos en español</li>
                        <li class="flex items-center text-lg font-bold"><span class="mr-3 w-8 h-8 rounded-full flex items-center justify-center bg-orange-500"><i class="lni lni-pointer-top"></i></span>Nivel: Principiante</li>
                        <li class="flex items-center text-lg font-bold"><span class="mr-3 w-8 h-8 rounded-full flex items-center justify-center bg-orange-500"><i class="lni lni-mobile"></i></span>Disponible en app Hotmart</li>
                        <li class="flex items-center text-lg font-bold"><span class="mr-3 w-8 h-8 rounded-full flex items-center justify-center bg-orange-500"><i class="lni lni-infinite"></i></span>Acceso ilimitado</li>
                        <li class="flex items-center text-lg font-bold"><span class="mr-3 w-8 h-8 rounded-full flex items-center justify-center bg-orange-500"><i class="lni lni-heart"></i></span>Online a tu propio ritmo</li>
                        <li class="flex items-center text-lg font-bold"><span class="mr-3 w-8 h-8 rounded-full flex items-center justify-center bg-orange-500"><i class="lni lni-pencil"></i></span>16 lecciones</li>
                    </ul>
                </x-base_light>
            </div>
            <div class="col-span-1 md:col-span-3 gap-5 space-y-3 md:space-y-5">
                <x-base_light>
                    <ul class="space-y-3">
                        <x-list_star>16 Lecciones en video con subtítulos</x-list_star>
                        <x-list_star>Descargables en PDF</x-list_star>
                        <x-list_star>Material de práctica</x-list_star>
                        <x-list_star>Comunidad de apoyo privada</x-list_star>
                        <x-list_star>Acceso inmediato y a tu propio ritmo</x-list_star>
                    </ul>
                </x-base_light>
                <div class="space-y-5 md:space-y-7">
                    <div class="text-center md:text-left py-0 md:py-5">
                        <x-h2_light>💫 Inscríbete y potencia tu talento.<br>Da vida a tus diseños con tu propio estilo.</x-h2_light>
                    </div>
                    <div class="flex justify-center md:justify-start">
                        <x-buttonPrincipal>Accede al curso</x-buttonPrincipal>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-neutral-100 rounded p-5 w-full md:w-1/2 space-y-3 mx-auto">
            <div class="flex space-x-3 justify-center">
                <div class="flex space-x-2">
                    <span class="text-orange-500"><i class="lni lni-money-protection"></i></span>
                    <p class="text-xs font-bold text-zinc-700">Pago seguro</p>
                </div>
                <div class="flex space-x-2">
                    <span class="text-orange-500"><i class="lni lni-protection"></i></span>
                    <p class="text-xs font-bold text-zinc-700">Satisfacción Garantizada</p>
                </div>
                <div class="flex space-x-2">
                    <span class="text-orange-500"><i class="lni lni-lock-alt"></i></span>
                    <p class="text-xs font-bold text-zinc-700">Privacidad Protegida</p>
                </div>
            </div>
            <div class="flex justify-center items-center space-x-5">
                <img src="/assets/images/visa.png" alt="Visa">
                <img src="/assets/images/mastercard.png" alt="Mastercard">
                <img src="/assets/images/paypal.png" alt="PayPal">
                <img src="/assets/images/amex.png" alt="American Express">
            </div>
        </div>
    </div>
</section>