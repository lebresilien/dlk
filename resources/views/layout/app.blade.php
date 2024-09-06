<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DLK SERVICES SL</title>

        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
        <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Open Sans';
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
        </style>
    </head>
    <body>

        <div class="">
            @include('layout.partials.header')
            @include('layout.partials.menu')
            @yield('body')
            @include('layout.partials.partner')
            @include('layout.partials.prefooter')
            <div class="flex fixed bottom-20 right-3">
                <a href="https://api.whatsapp.com/send?phone=240222331926" target="_blanck">
                    <img src="{{ asset('img/whatsapp.svg') }}" height="60" width="60" class="hover:-translate-y-2 duration-300" alt="whasapp dlk services sl">
                </a>
            </div>
            <div id="fixed-button" class="flex h-12 w-12 p-2 cursor-pointer bg-[#005494] rounded-full fixed bottom-2 right-3 justify-center hidden items-center hover:bg-[#11b3e8]">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white cursor-pointer">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                </svg>
            </div>
            @include('layout.partials.footer')
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    @yield('js')

    <script>

        const myButton = document.querySelector('#fixed-button')
        window.addEventListener('scroll', function() {
            if(document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                myButton.classList.remove('hidden')
                myButton.classList.add('block')
            } else {
                myButton.classList.remove('block')
                myButton.classList.add('hidden')
            }
        })

        myButton.addEventListener('click', function() {
            window.scrollTo({top: 0, behavior: 'smooth'});
        })
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {

            new Splide( '#splide_1', {
                type    : 'loop',
                autoplay: 'true',
                pagination : false,
                perPage : 4,
                arrows: false
            } ).mount();

            new Splide( '#splide_2', {
                type    : 'loop',
                autoplay: 'true',
                pagination : false,
                arrows: false
            } ).mount();

        });
    </script>

<!--     <script>
	    var botmanWidget = {
	        aboutText: 'ssdsd',
	        introMessage: "✋ Hi! I'm form ItSolutionStuff.com"
	    };
    </script>

    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script> -->

</html>
