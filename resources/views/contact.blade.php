@extends('layout.app')

@section('body')

    @include('layout.partials.banner', ['type' => 'contact', 'title' =>  __('contact') ])

    <div class="py-5 px-20 bg-[#11b3e8]">
        <div class="flex flex-row justify-end items-center">
            <span class="block mx-1 leading-10 text-lg">{{ __('available') }}</span>
            <div class="">
                <select id="county" class="county bg-gray-50 border border-gray-50 text-gray-900 text-sm rounded focus:outline-blue-100 block w-full p-2.5">
                    <option value="ge">{{ __('gunnea') }}</option>
                    <option value="td">{{ __('chad') }}</option>
                    <!-- <option value="cm">Cameroun</option> -->
                </select>
            </div>
        </div>
    </div>

    <div class="flex flex-col px-10 my-16 md:px-40 md:my-16 md:flex-row md:justify-between">

        <div class="flex flex-col items-center mb-4 md:mb-0 px-3 py-5 shadow-md md:w-96 hover:-translate-y-2 duration-300">
            <i class="text-5xl text-[#005494] fa-sharp fa-solid fa-location-pin"></i>
            <span class="my-5 text-[#11b3e8] text-xl font-semibold">{{ __('place') }}</span>
            <span class="text-md text-center cursor-pointer hover:text-[#005494]">{{ __('quarter') }}, <span id="location">{{ __('location') }}<span></span>
        </div>

        <div class="flex flex-col items-center mb-4 md:mb-0 shadow-md px-3 py-5 md:w-96 hover:-translate-y-2 duration-300">
            <i class="text-[#005494] text-5xl fa-solid fa-phone-volume"></i>
            <span class="my-5 text-[#11b3e8] text-xl font-semibold">{{ __('telephone') }}</span>
            <span class="text-md hover:text-[#005494]" id="phone1">(+240) 555 357 991</span>
            <span class="text-md hover:text-[#005494]" id="phone2">(+240) 555 877 081</span>
        </div>

        <div class="flex flex-col items-center mb-4 md:mb-0 shadow-md px-3 py-5 md:w-96 hover:-translate-y-2 duration-300">
            <i class="text-[#005494] text-5xl fa-solid fa-envelope-circle-check"></i>
            <span class="my-5 text-[#11b3e8] text-xl font-semibold">{{ __('email') }}</span>
            <span class="text-md hover:text-[#005494]">secretariat@dlkservicessl.com</span>
            <span class="text-md hover:text-[#005494]">sales@dlkservicessl.com</span>
        </div>

    </div>

    <div class="flex justify-center md:my-14">
        <span class="text-center text-[#11b3e8] text-3xl md:text-5xl font-semibold">{{ __('contact-us') }}</span>
    </div>

    @if (session()->has('text'))
        <p class="leading-10 font-bold text-green-100 text-center text-xl">{{ session('text') }}</p>
    @endif

    <div class="flex flex-col md:flex-row px-10 mt-8 md:px-40 md:mt-16">

        <div class="w-full md:w-1/2 pr-3">
            <input type="hidden" value="3.73031" id="lat" />
            <input type="hidden" value="8.73745" id="lng" />
            <form action="{{ url('contact-us') }}" method="POST">

                @csrf

                <div class='mb-4'>
                    <input type="text" name="name" class="bg-gray-50 border border-gray-50 text-gray-900 text-sm rounded focus:outline-blue-100 block w-full p-2.5" placeholder="{{ __('nom') }}" />
                    @error('name') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>

                <div class='mb-4'>
                    <input type="email" name="email" class="bg-gray-50 border border-gray-50 text-gray-900 text-sm rounded focus:outline-blue-100 block w-full p-2.5" placeholder="{{ __('email') }}" />
                    @error('email') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>

                <div class='mb-4'>
                    <input type="text" name="phone" class="bg-gray-50 border border-gray-50 text-gray-900 text-sm rounded focus:outline-blue-100 block w-full p-2.5" placeholder="{{ __('phone') }}"/>
                    @error('phone') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>

                <div class='mb-4'>
                    <input type="text" name="subject" class="bg-gray-50 border border-gray-50 text-gray-900 text-sm rounded focus:outline-blue-100 block w-full p-2.5" placeholder="{{ __('subject') }}" />
                    @error('subject') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>

                <div class='mb-4'>
                    <textarea name="message" class="bg-gray-50 border py-14 border-gray-50 text-gray-900 text-sm rounded focus:outline-blue-100 block w-full p-2.5" placeholder="{{ __('message') }}"></textarea>
                    @error('message') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>

                <div class='flex mb-4 justify-start'>
                    <button type="submit" class="transition-colors duration-500 ease-in-out rounded px-5 py-3 text-md text-white font-bold bg-[#005494] hover:text-white focus:outline-none focus:ring-2 focus:ring-white hover:bg-[#11b3e8] transform">
                        {{ __('send') }}
                    </button>
                </div>

            </form>
        </div>

        <div class="w-1/2 justify-center items-center" id="map">

    </div>

    </div>


@endsection

@section('js')
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAS_QiCvjV4j7V-rdisNEh84uE5Ldr84Z0&callback=initMap&v=weekly"
      defer
></script>
<script>
    window.onload = function () {

        document.querySelector('#loader').classList.add('hidden');
        document.querySelector('#root').classList.remove('hidden');

        const uluru = { lat: parseFloat(document.querySelector('#lat').value), lng: parseFloat(document.querySelector('#lng').value) };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 15,
            center: uluru,
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
            position: uluru,
            map: map,
            label: { color: '#005494', fontWeight: 'bold', fontSize: '14px', text: 'DKL SERVICES SL' }
        });

        const country = document.querySelector('.county')

        country.addEventListener('change', function() {
            if(this.value === "td") {
                document.querySelector('#location').innerHTML = "{{ __('location2') }}"
                document.querySelector('#phone1').innerHTML = "(+235) 555 357 991"
                document.querySelector('#phone2').innerHTML = "(+235) 555 357 991"
            } else {
                document.querySelector('#location').innerHTML = "{{ __('location') }}"
                document.querySelector('#phone1').innerHTML = "(+240) 555 357 991"
                document.querySelector('#phone2').innerHTML = "(+240) 555 357 991"
            }
        })
    }
</script>

@endsection
