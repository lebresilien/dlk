@extends('layout.app')

@section('body')

    @include('layout.partials.slide')

    <div class='flex flex-col justify-center items-center md:justify-start px-5 md:px-40 mb-5 md:mb-0'>
        <!-- <span class='text-[#005494] text-md font-semibold'>{t('text_about')}</span> -->
        <span class='md:text-4xl text-2xl font-bold text-gray-700 mt-2 md:mt-3 text-center md:text-start leading-10'>{{ __('text-secure') }}</span>
    </div>

    <div class='flex flex-col px-5 md:px-40 md:py-10'>

        <div class='flex flex-col md:flex-row'>
            <div class='md:w-1/2 flex flex-col md:flex-col'>
                <p class='leading-normal'>
                    {{ __('description') }}
                </p>
                <div class='flex flex-row justify-between my-8 md:my-5'>
                    <div class='md:w-1/6'>
                        <div class='bg-blue-100 rounded-full p-6'>
                            <svg class="h-10 w-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path  stroke-linecap="round" color="#005494" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                            </svg>
                        </div>
                    </div>
                    <div class='flex flex-col md:w-5/6 ml-3 md:ml-5'>
                        <span class='font-bold text-gray-900 mb-2'>{{ __('listing-partner') }}</span>
                        <p class='md:mt-3'>
                            {{ __('history') }}
                        </p>
                    </div>
                </div>
                <div class='flex flex-row justify-between md:my-5'>
                    <div class='md:w-1/6'>
                        <div class='bg-blue-100 rounded-full p-6'>
                            <svg class="h-10 w-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path  stroke-linecap="round" color="#005494" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                            </svg>
                        </div>
                    </div>
                    <div class='flex flex-col md:w-5/6 ml-3 md:ml-5'>
                        <span class='font-bold text-gray-900 mb-2'>{{ __('expertise') }}</span>
                        <p class='md:mt-3'>
                            {{ __('teams-describe') }}
                        </p>
                    </div>
                </div>
            </div>
            <div class='md:w-1/2 relative hidden md:block'>
                <img
                    src="{{ asset('img/teams.jpg') }}"
                    alt='teams'

                    class='w-full h-auto rounded-tl-[100px]'
                />
            </div>
        </div>

        <div class='flex flex-row justify-center md:justify-start mt-10 md:mt-0 md:py-5'>
            <a href="/about">
                <button
                    type="button"
                    class="px-5 py-3  btn relative inline-flex items-center justify-start overflow-hidden transition-all rounded text-md text-white font-bold bg-[#005494] focus:outline-none group"
                >
                    <span class="w-0 h-0 bg-[#11b3e8] absolute right-0 ease-out duration-500 transition-all group-hover:w-full group-hover:h-full -z-1"></span>
                    <span class="w-full text-white transition-colors duration-300 ease-in-out z-10">{{ __('see-more') }}</span>
                </button>
            </a>
        </div>

        <div class='relative my-5 py-10 md:hidden'>
            <img
              src="{{ asset('img/teams.jpg') }}"
              alt='teams'
              height="100"
              width="350"
              class='rounded-tl-[100px]'
            />
        </div>

    </div>

    @include('layout.partials.service')

    <div class='bg-white items-center my-5 px-10 md:my-0 md:py-10 md:px-40 flex flex flex-col'>

        <span class='text-2xl md:text-4xl font-bold text-gray-700'>{{ __('our-projects') }}</span>

        <div class="grid gap-4 grid-cols-1 md:grid-cols-2 mt-10">

            <!-- <div class="max-w-lg bg-white border border-gray-200 rounded-lg shadow">
                <img class="rounded-lg" width="100%" height=500 src="{{ asset('img/project_1_img.jpg') }}" alt="image description" />
                <div class="p-5">
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ __('project_1_text') }}</p>
                </div>
            </div>

            <div class="max-w-lg bg-white border border-gray-200 rounded-lg shadow">
                <img class="rounded-lg" width="100%" height=500 src="{{ asset('img/r_img.png') }}" alt="image description" />
                <div class="p-5">
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ __('project_3_text') }}</p>
                </div>
            </div> -->

        </div>

    </div>

@endsection
