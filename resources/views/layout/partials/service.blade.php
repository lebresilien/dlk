<div class='flex flex-col bg-gray-50 px-5 py-10 md:py-20 md:px-40'>

    <span class='text-2xl mb-8 md:text-4xl text-center font-bold text-gray-700'>{{ __('our-services') }}</span>

    <div class='flex flex-col md:flex-row justify-between'>
        
        <div class='md:w-1/3'>
            <div class="relative cursor-pointer inline-flex bg-white p-5  group h-full overflow-hidden transition-all">
                <div class="w-0 h-0 bg-[#005494] absolute bottom-0 ease-out duration-500 transition-all group-hover:w-full group-hover:h-full -z-1"></div>
                <div class="w-full flex-col text-black transition-colors duration-300 ease-in-out group-hover:text-white z-10">
                    <div class="mb-3 transition-colors duration-300 ease-in-out group-hover:hidden" >
                        <img src="{{ asset('img/secure-control.jpg') }}" width=50 height=45 alt="Dlk services secure" />
                    </div>
                    <div class="">
                        <span class="w-full text-black transition-colors duration-300 ease-in-out group-hover:text-white z-10">{{ __('secure-elec') }}</span>
                    </div>
                    <div class="my-3 ">
                        <p class="w-full text-black transition-colors duration-300 ease-in-out group-hover:text-white z-10">{{ __('secure-elec-description') }}</p>
                    </div>
                    <div class="flex flex-row">
                        <a href="{{ route('services.secure_electronic') }}" class="">
                            <div class="flex flex-row items-center text-[#005494] font-semibold">
                                <span class="w-full text-black transition-colors duration-300 ease-in-out group-hover:text-white z-10">{{ __('see-more') }}</span>
                                <svg class="h-4 w-3 ml-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class='md:w-2/3 md:mt-0 md:ml-5'>
            <div class="relative cursor-pointer inline-flex bg-white p-5  group h-full overflow-hidden transition-all">
                <div class="w-0 h-0 bg-[#005494] absolute bottom-0 ease-out duration-500 transition-all group-hover:w-full group-hover:h-full -z-1"></div>
                <div class="w-full flex-col text-black transition-colors duration-300 ease-in-out group-hover:text-white z-10">
                    <div class="mb-3 transition-colors duration-300 ease-in-out group-hover:hidden" >
                        <img src="{{ asset('img/voice.jpg') }}" width=50 height=45 alt="Dlk services secure" />
                    </div>
                    <div class="">
                        <span class="w-full text-black transition-colors duration-300 ease-in-out group-hover:text-white z-10">{{ __('solar') }}</span>
                    </div>
                    <div class="my-3 ">
                        <p class="w-full text-black transition-colors duration-300 ease-in-out group-hover:text-white z-10">{{ __('data-image-description') }}</p>
                    </div>
                    <div class="flex flex-row">
                        <a href="/" class="">
                            <div class="flex flex-row items-center text-[#005494] font-semibold">
                                <span class="w-full text-black transition-colors duration-300 ease-in-out group-hover:text-white z-10">{{ __('see-more') }}</span>
                                <svg class="h-4 w-3 ml-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div> 
        </div>
        
    </div>

    <div class='flex flex-col md:flex-row justify-between'>

        <div class='md:w-1/3 mt-3 md:mt-0'>
            <div class="relative cursor-pointer inline-flex bg-white p-5  group h-full overflow-hidden transition-all">
                <div class="w-0 h-0 bg-[#005494] absolute bottom-0 ease-out duration-500 transition-all group-hover:w-full group-hover:h-full -z-1"></div>
                <div class="w-full flex-col text-black transition-colors duration-300 ease-in-out group-hover:text-white z-10">
                    <div class="mb-3 transition-colors duration-300 ease-in-out group-hover:hidden" >
                        <img src="{{ asset('img/hydro.jpg') }}" width=50 height=45 alt="Dlk services secure" />
                    </div>
                    <div class="">
                        <span class="w-full text-black transition-colors duration-300 ease-in-out group-hover:text-white z-10">{{ __('secure-fire') }}</span>
                    </div>
                    <div class="my-3 ">
                        <p class="w-full text-black transition-colors duration-300 ease-in-out group-hover:text-white z-10">{{ __('hydrau-description') }}</p>
                    </div>
                    <div class="flex flex-row">
                        <a href="/" class="">
                            <div class="flex flex-row items-center text-[#005494] font-semibold">
                                <span class="w-full text-black transition-colors duration-300 ease-in-out group-hover:text-white z-10">{{ __('see-more') }}</span>
                                <svg class="h-4 w-3 ml-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class='flex flex-col mt-3 md:flex-row justify-betwen md:w-2/3 md:ml-5'>

            <div class='md:w-1/2'>
                <div class="relative cursor-pointer inline-flex bg-white p-5  group h-full overflow-hidden transition-all">
                    <div class="w-0 h-0 bg-[#005494] absolute bottom-0 ease-out duration-500 transition-all group-hover:w-full group-hover:h-full -z-1"></div>
                    <div class="w-full flex-col text-black transition-colors duration-300 ease-in-out group-hover:text-white z-10">
                        <div class="mb-3 transition-colors duration-300 ease-in-out group-hover:hidden" >
                            <img src="{{ asset('img/air.jpg') }}" width=50 height=45 alt="Dlk services secure" />
                        </div>
                        <div class="">
                            <span class="w-full text-black transition-colors duration-300 ease-in-out group-hover:text-white z-10">{{ __('clim') }}</span>
                        </div>
                        <div class="my-3 ">
                            <p class="w-full text-black transition-colors duration-300 ease-in-out group-hover:text-white z-10">{{ __('clim-description') }}</p>
                        </div>
                        <div class="flex flex-row">
                            <a href="{{ route('services.climatisation') }}" class="">
                                <div class="flex flex-row items-center text-[#005494] font-semibold">
                                    <span class="w-full text-black transition-colors duration-300 ease-in-out group-hover:text-white z-10">{{ __('see-more') }}</span>
                                    <svg class="h-4 w-3 ml-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class='md:w-1/2 md:ml-3 mt-3 md:mt-0'>
                <div class="relative cursor-pointer inline-flex bg-white p-5  group h-full overflow-hidden transition-all">
                    <div class="w-0 h-0 bg-[#005494] absolute bottom-0 ease-out duration-500 transition-all group-hover:w-full group-hover:h-full -z-1"></div>
                    <div class="w-full flex-col text-black transition-colors duration-300 ease-in-out group-hover:text-white z-10">
                        <div class="mb-3 transition-colors duration-300 ease-in-out group-hover:hidden" >
                            <img src="{{ asset('img/plomb.jpg') }}" width="50" height="45" alt="Dlk services secure" />
                        </div>
                        <div class="">
                            <span class="w-full text-black transition-colors duration-300 ease-in-out group-hover:text-white z-10">{{ __('plumber') }}</span>
                        </div>
                        <div class="my-3 ">
                            <p class="w-full text-black transition-colors duration-300 ease-in-out group-hover:text-white z-10">{{ __('plumber-description') }}</p>
                        </div>
                        <div class="flex flex-row">
                            <a href="{{ route('services.plumber') }}" class="">
                                <div class="flex flex-row items-center text-[#005494] font-semibold">
                                    <span class="w-full text-black transition-colors duration-300 ease-in-out group-hover:text-white z-10">{{ __('see-more') }}</span>
                                    <svg class="h-4 w-3 ml-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div> 
</div>