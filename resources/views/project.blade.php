@extends('layout.app')

@section('body')

    @include('layout.partials.banner', ['type' => 'other', 'title' =>  __('projects') ]) 

    <div class="flex flex-col px-10 mt-16 md:px-40 md:mt-16 items-center">

        <span class='text-2xl md:text-4xl font-bold text-gray-700'>{{ __('our-projects') }}</span>

        <div class="grid gap-4 grid-cols-1 md:grid-cols-2 md:py-20 pt-10">

            <div class="max-w-lg bg-white border border-gray-200 rounded-lg shadow mb-30 md:mb-0">
                <img class="rounded-lg md:hidden" src="{{ asset('img/project_1_img.jpg') }}" alt="image description" />
                <img class="rounded-lg hidden md:block" width="100%" height=500 src="{{ asset('img/project_1_img.jpg') }}" alt="image description" />
                <div class="p-5">
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ __('project_1_text') }}</p>
                </div>
                <div class="flex justify-center w-full mb-3">
                    <button
                        id="modal-2"
                        type="button"
                        class="px-5 py-3 btn bg-[#005494] hover:bg-[#11b3e8]"
                    >
                        <span class="w-full text-white text-center">{{ __('read_video') }}</span>
                    </button>
                </div>
            </div>

            <div class="max-w-lg bg-white border border-gray-200 rounded-lg shadow">
                <img class="rounded-lg md:hidden" width=300 height=300 src="{{ asset('img/r_img.png') }}" alt="image description" />    
                <img class="rounded-lg hidden md:block" width="100%" height=500 src="{{ asset('img/r_img.png') }}" alt="image description" />
                <div class="p-5">
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ __('project_1_text') }}</p>
                </div>
                <div class="flex justify-center w-full mb-3">
                    <button
                        id="modal-1"
                        type="button"
                        class="px-5 py-3 btn bg-[#005494] hover:bg-[#11b3e8]"
                    >
                        <span class="w-full text-white text-center">{{ __('read_video') }}</span>
                    </button>
                </div>
            </div>

        </div>
    </div>


<!-- Main modal -->
<div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="relative flex items-center justify-center w-full h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow md:w-1/2">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-1 border-b rounded-t">
               
                <button type="button" id="close-modal" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="" id="videoContainer">
                <iframe 
                    id="iframe"
                    width="100%"
                    height="500"
                    src="https://www.youtube.com/embed/tgbNymZ7vqY">
                </iframe>
            </div>
            
        </div>
    </div>
</div>
    
@endsection

@section('js')
   <script>

        const defaultModal = document.querySelector('#defaultModal');
        const modalButton = document.querySelector('#modal-1');
        const modalButtonBis = document.querySelector('#modal-2');
        const closeButton = document.querySelector('#close-modal');
        const iFrame = document.querySelector('#iframe');

        modalButton.addEventListener('click', function() {
           defaultModal.classList.remove('hidden')
        });

        modalButtonBis.addEventListener('click', function() {
           defaultModal.classList.remove('hidden')
        });

        closeButton.addEventListener('click', function() {
            defaultModal.classList.add('hidden');
            let containerElement = document.getElementById('videoContainer');
            let iframe_tag = containerElement.querySelector( 'iframe');
            let video_tag = containerElement.querySelector( 'video' );
            if ( iframe_tag) {
                let iframeSrc = iframe_tag.src;
                iframe_tag.src = iframeSrc; 
            }
            if ( video_tag) {
                video_tag.pause();
            }
        });

   </script>
@endsection

