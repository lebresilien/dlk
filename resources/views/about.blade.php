@extends('layout.app')

@section('body')

    @include('layout.partials.banner', ['type' => 'other', 'title' =>  __('about') ])

    <div class="flex flex-col md:flex-row px-5 my-8 md:px-40 md:my-16">

        <div class="flex flex-col md:w-2/3">

            <div class="flex flex-col md:my-14">
                <span class="text-[#11b3e8] text-3xl md:text-3xl font-semibold">{{ __('text_about') }}</span>
                <span class="text-md leading-6 block my-5">
                    <b>DLK SERVICES SL</b> {{ __('description') }}
                </span>
            </div>

            <div class="flex flex-row items-center">
                <div class="bg-[#005494] h-2.5 w-2.5"></div>
                <div class="px-3">
                    <span class="text-md leading-6 font-semibold text-gray-900">We make your business easier</span>
                </div>
            </div>

            <div class="my-5">
                <span class="text-md leading-6">
                    {{ __('history') }}
                </span>
            </div>

            <div class="flex flex-row items-center">
                <div class="bg-[#005494] h-2.5 w-2.5"></div>
                <div class="px-3">
                    <span class="text-md font-semibold leading-6 text-gray-900">{{ __('expertise') }}</span>
                </div>
            </div>

            <div class="my-5">
                <span class="text-md leading-6">
                    {{ __('teams-pro') }}
                </span>
            </div>
        </div>

        <div class="border border-blue-1 p-5 md:w-1/3">
            @include('layout.partials.sidebar')
        </div>

    </div>

    <div class="flex flex-col  px-5 my-8 md:px-40 md:my-16">
    <span class="block my-5 text-[#11b3e8] text-lg md:text-xl text-center font-semibold">{{ __('philosophy') }}</span>
        @include('layout.partials.timeline')
    </div>


@endsection

@section('js')
    <script>
        document.querySelector('#root').classList.remove('hidden');
    </script>
@endsection
