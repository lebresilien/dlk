<footer class="px-6 bg-[#005494] pt-5 sm:py-24 sm:px-40 text-white">
            <div class="md:flex md:justify-between">
                <div class="flex flex-col mb-6 md:mb-0 space-y-3 sm:w-1/3">
                    <a class="flex items-center">
                        <img src="{{ asset('img/logo.png') }}" width="130" height="50" class="mr-3" alt="logo" />
                    </a>
                    <span class="text-white text-sm">We make your business easier</span>
                </div>
                <div class="grid grid-cols-1 gap-8 sm:gap-6 sm:grid-cols-3 sm:w-2/3">
                    <div>
                        <h2 class="mb-2 text-sm font-bold text-white uppercase">{{ __('find-us') }}</h2>
                        <span class="flex mb-3 w-5 border-t-4 border-[#11b3e8]"> </span>
                        <ul class="text-white mt-10">
                            <li class="">
                               <span class="">{{ __('phone') }}  +240 555 357 991 / 555 877 081 </span>
                            </li>
                            <li class="">
                                <span> {{ __('hour') }}</span>
                            </li>
                            <li class="">
                                {{ __('time') }}
                            </li>
                            <li class="mb-4">
                                <span>{{ __('hour-1') }}</span>
                            </li>
                            <li class="">
                                <div class="flex flex-row justify-start">
                                    <a href="/" target="_blank">
                                        <i class="text-white text-md mx-1 fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="/" target="_blank">
                                        <i class="text-white text-md mx-1 fa-brands fa-twitter"></i>
                                    </a>
                                    <a href="/" target="_blank">
                                        <i class="text-white text-md mx-1 fa-brands fa-pinterest-p"></i>
                                    </a>
                                    <a href="/" target="_blank">
                                        <i class="text-white text-md mx-1 fa-brands fa-twitter"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h2 class="mb-2 text-sm font-bold text-white uppercase">{{ __('services-us') }}</h2>
                        <span class="flex mb-3 w-5 border-t-4 border-[#11b3e8]"> </span>
                        <ul class="text-white mt-10">
                           <!--  <li class="mb-4">
                                <a href="#">
                                    <span class="hover:text-[#11b3e8] cursor-pointer">t('hydrau')</span>
                                </a>
                            </li> -->
                            <li class="mb-4">
                                <a href="#">
                                    <span class="hover:text-[#11b3e8] cursor-pointer">{{ __('secure-fire') }}</span>
                                </a>
                            </li>
                            <li class="mb-4">
                                <a href="#">
                                    <span class="hover:text-[#11b3e8] cursor-pointer">{{ __('secure-elec') }}</span>
                                </a>
                            </li>
                            <li class="mb-4">
                                <a href="#" >
                                    <span class="hover:text-[#11b3e8] cursor-pointer">{{ __('higher-fire') }}</span>
                                </a>
                            </li>
                            <li class="mb-4">
                                <a href="#" >
                                    <span class="hover:text-[#11b3e8] cursor-pointer">{{ __('lower-fire') }}</span>
                                </a>
                            </li>
                            <li class="mb-4">
                                <a href="#">
                                    <span class="hover:text-[#11b3e8] cursor-pointer">{{ __('domo') }}</span>
                                </a>
                            </li>
                            <li class="mb-4">
                                <a href="#">
                                    <span class="hover:text-[#11b3e8] cursor-pointer">{{ __('plumber') }}</span>
                                </a>
                            </li>
                            <li class="mb-4">
                                <a href="#">
                                    <span class="hover:text-[#11b3e8] cursor-pointer">{{ __('clim') }}</span>
                                </a>
                            </li>
                            <li class="mb-4">
                                <a href="#">
                                    <span class="hover:text-[#11b3e8] cursor-pointer">{{ __('solar') }}</span>
                                </a>
                            </li>
                            <li class="mb-4">
                                <a href="#">
                                    <span class="hover:text-[#11b3e8] cursor-pointer">{{ __('pool') }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="">
                        <h2 class="mb-2 text-sm font-bold text-white uppercase">{{ __('newsletter') }}</h2>
                        <span class="flex mb-3 w-5 border-t-4 border-[#11b3e8]"> </span>

                        <div class='mb-4'>
                            <input type="text" name="name1" class="bg-gray-50 border text-gray-900 text-sm rounded focus:outline-blue-100 block w-full p-2.5" placeholder="{{ __('subject') }}" />
                        </div>

                        <div class='mb-4'>
                            <input type="email" name="email1" class="bg-gray-50 border text-gray-900 text-sm rounded focus:outline-blue-100 block w-full p-2.5 border-blue-100" placeholder="{{ __('email') }}" />
                        </div>

                        <div class='mb-4'>
                            <textarea name="message1" class="bg-gray-50 border text-gray-900 text-sm rounded focus:outline-blue-100 block w-full p-2.5" placeholder="{{ __('message') }}"></textarea>
                        </div>

                        <div class='flex items-center mb-4'>
                            <input type="checkbox" id="checkbox" class="rounded" />
                            <input type="hidden" id="token" value="{{ csrf_token() }}" name="token">
                            <label htmlFor="checkbox" class="ml-2 text-white text-sm font-medium text-gray-900 dark:text-gray-300">
                                {{ __('terms') }}
                            </label>
                        </div>

                        <div class='flex mb-4'>
                            <button type="button" name="button" content="0" class="transition-colors duration-500 ease-in-out rounded px-5 py-3 text-md text-white font-bold bg-[#005494] hover:text-white focus:outline-none focus:ring-2 focus:ring-white hover:bg-[#11b3e8] transform">
                                {{ __('send') }}
                            </button>
                        </div>
                    </div>

                </div>
            </div>
</footer>

<script>

    const button = document.querySelector("[name='button']")

    button.addEventListener('click', function() {

        const name = document.querySelector("[name='name1']")
        const email = document.querySelector("[name='email1']")
        const message = document.querySelector("[name='message1']")

        if(!name.value) name.style.border = '1px solid red'
        if(!email.value) email.style.border = '1px solid red'
        if(!message.value) message.style.border = '1px solid red'

        if(name.value && email.value && message.value) {

            button.innerText = "{{ __('sending') }}"
            var http = new XMLHttpRequest();
            var url = "{{ route('contact-us') }}";

            const token = document.querySelector("#token").value

            var params = "type=1&&subject="+name.value+"&&email="+email.value+"&&message="+message.value+"&&name=john&&phone=6786608&&_token="+token;
            http.open("POST", url, true);

            http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            http.onreadystatechange = function() {

                if(http.readyState == 4 && http.status == 200) {

                    button.innerText = "{{ __('send') }}"
                    const response = JSON.parse(http.responseText);
                    console.log(response)

                    if(response.message == "success") {

                         name.value = ''
                        email.value = ''
                        message.value = ''

                        Toastify({
                            text: "{{ __('success') }}",
                            duration: 5000,
                            gravity: "bottom", // `top` or `bottom`
                            position: "right",
                            style: {
                                background: "green",
                            },
                            close: true,
                        }).showToast();
                    } else {
                        Toastify({
                            text: "{{ __('error') }}",
                            duration: 5000,
                            gravity: "bottom", // `top` or `bottom`
                            position: "right",
                            style: {
                                background: "red",
                            },
                            close: true,
                        }).showToast();
                    }

                }
            }

            http.send(params);

        } else {
            Toastify({
                text: "{{ __('error') }}",
                duration: 5000,
                gravity: "bottom", // `top` or `bottom`
                position: "right",
                style: {
                    background: "red",
                },
                close: true,
            }).showToast();
        }

        /* const checkbox = document.querySelector("input[type='checkbox']")

        if(!checkbox.checked) {
           checkbox.style.border = '1px solid red'
           checkbox.classList.add('error1')
        } */

    })

</script>
