
@if($type == "contact")
    <div class="banner_contact">
        <span class='font-bold text-5xl indent-2 uppercase'>{{$title}}</span>
        <div class='flex flex-row items-center justify-center mt-5'>
            <a class="block font-bold text-md hover:text-[#11b3e8]" href="{{ route('home') }}">{{ __('home') }}</a>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
            <span class='font-bold text-md'>{{$title}}</span>
        </div>
    </div>  
@elseif($type == "plumber")
    <div class="banner_plumber">
        <span class='font-bold text-5xl indent-2 uppercase'>{{$title}}</span>
        <div class='flex flex-row items-center justify-center mt-5'>
            <a class="block font-bold text-md hover:text-[#11b3e8]" href="{{ route('home') }}">{{ __('home') }}</a>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
            <span class='font-bold text-md'>{{$title}}</span>
        </div>
    </div>
@elseif($type == "secure-elec")
    <div class="banner_secure">
        <span class='font-bold text-5xl indent-2 uppercase'>{{$title}}</span>
        <div class='flex flex-row items-center justify-center mt-5'>
            <a class="block font-bold text-md hover:text-[#11b3e8]" href="{{ route('home') }}">{{ __('home') }}</a>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
            <span class='font-bold text-md'>{{$title}}</span>
        </div>
    </div>

 @elseif($type == "clim")
    <div class="banner_clim">
        <span class='font-bold text-5xl indent-2 uppercase'>{{$title}}</span>
        <div class='flex flex-row items-center justify-center mt-5'>
            <a class="block font-bold text-md hover:text-[#11b3e8]" href="{{ route('home') }}">{{ __('home') }}</a>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
            <span class='font-bold text-md'>{{$title}}</span>
        </div>
    </div>
@else 
    <div class="banner_worker">
        <span class='font-bold text-5xl indent-2 uppercase'>{{$title}}</span>
        <div class='flex flex-row items-center justify-center mt-5'>
            <a class="block font-bold text-md hover:text-[#11b3e8]" href="{{ route('home') }}">{{ __('home') }}</a>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
            <span class='font-bold text-md'>{{$title}}</span>
        </div>
    </div>
@endif