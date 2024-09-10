<nav>
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 py-10 items-center">
    <div class="relative flex h-16 items-center justify-between">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button type="button" class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <!--
            Icon when menu is closed.

            Heroicon name: outline/bars-3

            Menu open: "hidden", Menu closed: "block"
          -->
          <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <!--
            Icon when menu is open.

            Heroicon name: outline/x-mark

            Menu open: "block", Menu closed: "hidden"
          -->
          <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex flex-shrink-0 items-center">
          <a href="{{ route('home') }}">
            <img class="block h-8 w-auto lg:hidden" src="{{ asset('img/logo.png') }}" alt="My Company">
            <img class="hidden h-12 w-auto lg:block" src="{{ asset('img/logo.png') }}" alt="My Company">
          </a>
        </div>
        <div class="hidden sm:ml-6 sm:block">
          <div class="flex space-x-4">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="{{ route('home') }}" class="{{ Request::is('/') ? 'text-[#005494] rounded-md uppercase px-3 py-2 text-md font-medium' : 'rounded-md uppercase px-3 py-2 text-md font-medium'}}" aria-current="page">{{ __('home') }}</a>

            <a href="{{ route('about') }}" class="{ Request::is('about') ? 'text-[#005494] rounded-md uppercase hover:text-[#005494] px-3 py-2 text-sm font-medium' : 'rounded-md uppercase px-3 py-2 text-md font-medium'}}">{{ __('about') }}</a>

            <a href="{{ route('services') }}" class="{ Request::is('services') ? 'text-[#005494] rounded-md uppercase hover:text-[#005494] px-3 py-2 text-sm font-medium' : 'rounded-md uppercase px-3 py-2 text-md font-medium'}}">{{ __('services') }}</a>

            <a href="{{ route('projects') }}" class="{ Request::is('projects') ? 'text-[#005494] rounded-md uppercase hover:text-[#005494] px-3 py-2 text-sm font-medium' : 'rounded-md uppercase px-3 py-2 text-md font-medium'}}">{{ __('projects') }}</a>

            <a href="{{ route('contact') }}" class="{ Request::is('contact') ? 'text-[#005494] rounded-md uppercase hover:text-[#005494] px-3 py-2 text-sm font-medium' : 'rounded-md uppercase px-3 py-2 text-md font-medium'}}">{{ __('contact') }}</a>
          </div>
        </div>
      </div>
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

        <!-- Profile dropdown -->
        <div class="relative ml-3">
          <div>
            <button type="button" class="flex flex-row rounded-full text-sm focus:outline-none space-x-2 items-center" id="dropdown" aria-expanded="false" aria-haspopup="true" data-dropdown-toggle="menu-lang" >
                <div className="flex flex-row justify-between bg-green-300">
                    @foreach($available_locales as $available_locale)
                        @if($available_locale['name'] === $current_locale)
                            <div class="flex flex-row justify-between space-x-1">
                                <img width="25" height="25" src="{{ asset($available_locale['img']) }}" alt="francais">
                                <span className='text-gray-900'>{{$available_locale['name']}}</span>
                            </div>
                        @endif
                    @endforeach
                </div>
                <i class="block fa-solid fa-chevron-down"></i>
            </button>
          </div>

          <!--
            Dropdown menu, show/hide based on menu state.

            Entering: "transition ease-out duration-100"
              From: "transform opacity-0 scale-95"
              To: "transform opacity-100 scale-100"
            Leaving: "transition ease-in duration-75"
              From: "transform opacity-100 scale-100"
              To: "transform opacity-0 scale-95"
          -->
          <div class="p-3 absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" id="menu-lang" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
            @foreach($available_locales as $key => $available_locale)
                @if($available_locale['name'] !== $current_locale)
                    <a class="block my-3" href="{{ route('language', $available_locale['name']) }}">
                        <div class="flex flex-row space-x-1">
                            <img width="25" height="25" src="{{$available_locale['img']}}" alt="francais">
                            <span className='text-gray-900'>{{$available_locale['name']}}</span>
                        </div>
                    </a>
                @endif
            @endforeach
          </div>
        </div>
        <a class="block ml-3" href="{{ asset('files/services.pptx') }}">
            <button
                type="button"
                class="rounded px-5 py-3 text-md text-white font-bold bg-[#005494] hover:text-white focus:outline-none focus:ring-2 focus:ring-white hover:bg-[#11b3e8]"
            >
                {{ __('offer') }}
            </button>
          </a>
      </div>
    </div>
  </div>

  <!-- Mobile menu, show/hide based on menu state. -->
  <div class="sm:hidden" id="mobile-menu">
    <div class="space-y-1 px-2 pt-2 pb-3">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="{{ route('home') }}" class="{{ Request::is('/') ? 'text-[#005494] rounded-md uppercase px-3 py-2 text-md font-medium' : 'rounded-md uppercase px-3 py-2 text-md font-medium'}}" aria-current="page">{{ __('home') }}</a>

        <a href="{{ route('about') }}" class="{ Request::is('about') ? 'text-[#005494] rounded-md uppercase hover:text-[#005494] px-3 py-2 text-sm font-medium' : 'rounded-md uppercase px-3 py-2 text-md font-medium'}}">{{ __('about') }}</a>

        <a href="{{ route('services') }}" class="{ Request::is('services') ? 'text-[#005494] rounded-md uppercase hover:text-[#005494] px-3 py-2 text-sm font-medium' : 'rounded-md uppercase px-3 py-2 text-md font-medium'}}">{{ __('services') }}</a>

        <a href="{{ route('projects') }}" class="{ Request::is('projects') ? 'text-[#005494] rounded-md uppercase hover:text-[#005494] px-3 py-2 text-sm font-medium' : 'rounded-md uppercase px-3 py-2 text-md font-medium'}}">{{ __('projects') }}</a>

        <a href="{{ route('contact') }}" class="{ Request::is('contact') ? 'text-[#005494] rounded-md uppercase hover:text-[#005494] px-3 py-2 text-sm font-medium' : 'rounded-md uppercase px-3 py-2 text-md font-medium'}}">{{ __('contact') }}</a>
    </div>
  </div>
</nav>

<script>
   const menu = document.getElementById('menu-lang')
   menu.style.display = 'none'

   const btn = document.querySelector('#dropdown')
    btn.addEventListener('click', function() {
        menu.style.display = 'block'
    })

   /*  const body = document.querySelector('body')
    body.addEventListener('click', function() {
        if(menu.style.visibility == 'visible') {
            alert('d')
            menu.style.display = 'none'
        }
    }) */
</script>
