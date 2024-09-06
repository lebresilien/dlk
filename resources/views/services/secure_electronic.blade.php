@extends('layout.app')

@section('body')

    @include('layout.partials.banner', ['type' => 'secure-elec', 'title' =>  __('secure-elec') ])
    
    <div class="flex flex-col md:flex-row px-10 my-16 md:px-40 md:my-16 md:justify-between">

        <div class="flex flex-col md:w-2/3">

            <div class="mb-5">
                <img src="{{ asset('img/solaris.jpg') }}" class="h-auto w-auto" />
            </div>

            <span class="text-[#11b3e8] text-3xl md:text-3xl font-semibold">{{ __('secure-elec') }}</span>

            <p class="mt-4">{{ __('secure_elec_title') }}</p>

            <div class="flex flex-row items-center my-4">
                <div class="bg-[#005494] h-2.5 w-2.5"></div>
                <div class="px-3">
                    <span class="text-md leading-6 font-semibold text-gray-900">{{ __('secure_elec_subtitle01') }}</span>
                </div>
            </div>

            <p class="">{{ __('secure_elec_subtext01') }}</p>

            <div class="flex flex-row items-center my-4">
                <div class="bg-[#005494] h-2.5 w-2.5"></div>
                <div class="px-3">
                    <span class="text-md leading-6 font-semibold text-gray-900">{{ __('secure_elec_subtitle02') }}</span>
                </div>
            </div>

            <p class="">{{ __('secure_elec_subtext02') }}</p>

            <div class="flex flex-row items-center my-4">
                <div class="bg-[#005494] h-2.5 w-2.5"></div>
                <div class="px-3">
                    <span class="text-md leading-6 font-semibold text-gray-900">{{ __('secure_elec_subtitle03') }}</span>
                </div>
            </div>

            <p class="">{{ __('secure_elec_subtext03') }}</p>

            <div class="flex flex-row items-center my-4">
                <div class="bg-[#005494] h-2.5 w-2.5"></div>
                <div class="px-3">
                    <span class="text-md leading-6 font-semibold text-gray-900">{{ __('secure_elec_subtitle04') }}</span>
                </div>
            </div>

            <p class="mt-4">{{ __('secure_elec_subtext04') }}</p>


            <div class="flex flex-row space-x-2 mt-5">
                <img src="{{ asset('img/seccure_access.jpg') }}" width="390" height="500" />
                <img src="{{ asset('img/road.jpg') }}" width="390" height="500" />
            </div>

        </div>

        <div class="flex flex-col md:w-1/3 md:ml-5">
            
            <div class="border border-blue-1 p-5">
                @include('layout.partials.sidebar')
            </div>

            <div class="my-5">
                <img src="{{ asset('img/acces6.jpg') }}" class="w-auto h-auto" />
            </div>

            <div class=""></div>

        </div>

    </div>

@endsection
