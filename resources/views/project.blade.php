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
        .line-clamp-10 {
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 10;
        }
    </style>
@endsection
@section('body')

    @include('layout.partials.banner', ['type' => 'other', 'title' =>  __('projects') ])

    <div class="flex bg-gray-50 flex-col items-center justify-center my-10 lg:my-16">

        <div class="grid grid-cols-1 gap-4 py-10 md:grid-cols-2 lg:grid-cols-3 lg:gap-6 lg:py-20" id="content">

        </div>

        <!-- <div class="flex w-full flex-col items-center bg-white justify-center py-24 space-y-10">
            <span class="text-xl text-black font-bold uppercase lg:text-3xl">Prêt à vous lancez ?</span>
            <a class="mt-8" href="/contact">
                <Button class="inline-flex relative gap-x-2 h-16 px-4 border-0 bg-blue-500 overflow-hidden transition-all hover:bg-blue-500 group focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:text-sm lg:h-20">
                    <span class="w-0 h-0 rounded bg-blue-600 absolute top-0 left-0 ease-out duration-500 transition-all group-hover:w-full group-hover:h-full -z-1"></span>
                    <span class="text-white sm:text-sm transition-colors duration-300 ease-in-out group-hover:text-white z-10">Demandez une consultation</span>
                    <Icon name="arrow-right" class="animate-ping h-3 w-3 text-white" />
                </Button>
            </a>
        </div> -->

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

    <script>

        var http = new XMLHttpRequest();
        var url = "{{ url('api/projects') }}";

        http.onreadystatechange = function() {

            if (this.readyState == 4 && this.status == 200) {

                document.querySelector('#loader').classList.add('hidden');
                document.querySelector('#root').classList.remove('hidden');
                const res =  http.responseText;
                const data = JSON.parse(res);

                for(let i = 0; i < data.length; i++) {

                    // Create the container element
                    const container = document.createElement('a');
                    container.href = 'projects/' + data[i].slug;
                    container.classList.add('flex', 'flex-col', 'w-[320px]', 'rounded', 'justify-between', 'overflow-hidden', 'shadow-lg', 'bg-white', 'border','hover:border-[#005494]');

                    // Create the img element
                    const img = document.createElement('img');
                    img.classList.add('w-full', 'card-img', 'grayscale');
                    img.src = data[i].img;
                    img.alt = data[i].title;
                    container.appendChild(img);

                    const contentDiv = document.createElement('div');
                    contentDiv.classList.add('px-6', 'py-4', 'text-balance');

                    const titleDiv = document.createElement('div');
                    titleDiv.classList.add('font-bold', 'text-xl', 'mb-2', 'text-black');
                    titleDiv.textContent = data[i].title;
                    contentDiv.appendChild(titleDiv);

                    // Create the paragraph element
                    const paragraph = document.createElement('p');
                    paragraph.classList.add('text-gray-800', 'text-base', 'line-clamp-10');
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

                    document.querySelector('#content').appendChild(container);
                }

            }
        };
        http.open("GET", url, false);
        http.send();

    </script>
@endsection

