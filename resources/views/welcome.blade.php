@extends('layout.app')

@section('css')
    <style>
        .card-img {
            height: 200px
        }
        .flexible {
            display: flex;
            justify-content: center;
            align-items: center
        }
        .tag {
            background-color: rgb(229 231 235);
            border-radius: 50%;
            font-weight: bold;
            color: rgb(55 65 81);
        }
        .bg {
            background-color:  rgb(55 65 81);
        }
    </style>
@endsection

@section('body')

    @include('layout.partials.slide')

    <div class='flex flex-col justify-center items-center md:justify-start px-5 md:px-40 mb-5 md:mb-0'>
        <!-- <span class='text-[#005494] text-md font-semibold'>{t('text_about')}</span> -->
        <span class='md:text-4xl text-2xl font-bold text-gray-700 mt-2 md:mt-3 text-center md:text-start leading-10'>{{ __('text-secure') }}</span>
    </div>

    <div class='flex flex-col md:py-10'>

        <div class='flex flex-col px-5 md:px-40 md:flex-row'>
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

        <div class='flex flex-row justify-center px-5 md:px-40 md:justify-start mt-10 md:mt-0 md:py-5'>
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

    <div class='items-center my-5 md:my-0 md:py-10 flex flex flex-col'>

        <section class="w-full mt-24">
            <div class="px-4 py-12 sm:px-6 lg:me-0 lg:py-16 lg:pe-0 lg:ps-8 xl:py-24">
                <div class="grid grid-cols-1 gap-8 lg:grid-cols-4 lg:items-center lg:gap-16">
                    <div class="max-w-sm z-10 text-center ltr:sm:text-left rtl:sm:text-right">
                        <h2 class="text-3xl font-bold tracking-tight text-gray-900 uppercase sm:text-4xl">
                           Projects récents
                        </h2>
                        <p class="mt-4 text-gray-700">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas veritatis illo placeat
                            harum porro optio fugit a culpa sunt id!
                        </p>
                        <div class="hidden lg:mt-8 lg:flex lg:gap-4 lg:items-center lg:justify-center">
                            <div class="splide3_prev flex items-center justify-center w-10 h-10 rounded-full bg-[#005494] cursor-pointer px-5 text-white hover:bg-[#11b3e8]"><</div>
                            <div class="splide3_next flex items-center justify-center w-10 h-10 rounded-full bg-[#005494] cursor-pointer px-5 text-white hover:bg-[#11b3e8]">></div>
                        </div>
                    </div>
                    <div class="bg-gray-50 py-10 pl-14 sm:mx-0 lg:pl-0 lg:col-span-3 lg:py-20">
                        <div class="splide" id="splide_3">
                            <div class="splide__track">
                                <ul class="splide__list" id="splide_project">

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 flex justify-center gap-4 lg:hidden">
                        <div class="splide_prev_mobile flex items-center justify-center w-10 h-10 rounded-full bg-[#005494] cursor-pointer px-5 text-white hover:bg-[#11b3e8]"><</div>
                        <div class="splide_next_mobile flex items-center justify-center w-10 h-10 rounded-full bg-[#005494] cursor-pointer px-5 text-white hover:bg-[#11b3e8]">></div>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection

@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const splide3 = new Splide('#splide_3', {
                type   : 'loop',
                perPage: 3,
                perMove: 1,
                arrows: false,
                autoplay: 'true',
                pagination : false,
                breakpoints: {
                    1024: {
                        perPage: 2,
                        gap    : '.7rem',
                    },
                    640: {
                        perPage: 1,
                        gap    : '.7rem',
                    },
                },
            } )

            document.querySelector('.splide3_next').addEventListener('click', e => {
                splide3.go('+1')
            })

            document.querySelector('.splide3_prev').addEventListener('click', e => {
                splide3.go('-1')
            })

            document.querySelector('.splide_next_mobile').addEventListener('click', e => {
                splide3.go('+1')
            })

            document.querySelector('.splide_prev_mobile').addEventListener('click', e => {
                splide3.go('-1')
            })

            splide3.mount();
        });
    </script>
    <script>
        var http = new XMLHttpRequest();
        var url = "api/last_projects";

        const projects = document.querySelector('#splide_project');

        http.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // Typical action to be performed when the document is ready:
               document.querySelector('#loader').classList.add('hidden');
               document.querySelector('#root').classList.remove('hidden');

               const res =  http.responseText;
               const data = JSON.parse(res).projects;

               for(let i = 0; i < data.length; i++) {

                // Create the li element
                const item = document.createElement('li');
                item.classList.add('splide__slide');

                // Create the div element
                const container = document.createElement('div');
                container.classList.add('flex', 'flex-col', 'cursor-pointer', 'w-[320px]', 'h-[400px]', 'justify-between', 'rounded', 'overflow-hidden', 'shadow-lg', 'bg-white', 'border','hover:border-[#005494]');
                item.appendChild(container);

                // Create the img element
                const img = document.createElement('img');
                img.classList.add('w-full', 'card-img', 'grayscale');
                img.src = data[i].img;
                img.alt = data[i].title;
                container.appendChild(img);

                const contentDiv = document.createElement('div');
                contentDiv.classList.add('px-6', 'py-4');

                const titleDiv = document.createElement('div');
                titleDiv.classList.add('font-bold', 'text-xl', 'mb-2');
                titleDiv.textContent = data[i].title;
                contentDiv.appendChild(titleDiv);

                // Create the paragraph element
                const paragraph = document.createElement('p');
                paragraph.classList.add('text-gray-700', 'text-base', 'overflow-hidden');
                paragraph.textContent = data[i].description;
                contentDiv.appendChild(paragraph);

                // Create the tags section div
                const tagsDiv = document.createElement('div');
                tagsDiv.classList.add('px-6', 'pt-4', 'pb-2', 'flexible');

                // Create the span tags for each tag
                const tag = document.createElement('span');
                tag.classList.add('inline-block', 'bg-gray-200', 'rounded-full', 'px-3', 'py-1', 'text-sm', 'font-semibold', 'text-gray-700', 'tag');
                tag.textContent = '#'+data[i].category.name;
                tagsDiv.appendChild(tag);

                // Append contentDiv to the container
                container.appendChild(contentDiv);

                // Append the tags section to the container
                container.appendChild(tagsDiv);

                projects.appendChild(item);

               }

            }
        };
        http.open("GET", url, false);
        http.send();

    </script>
@endsection
