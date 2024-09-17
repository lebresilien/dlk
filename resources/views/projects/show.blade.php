@extends('layout.app')
@section('body')

    @include('layout.partials.banner', ['type' => 'other', 'title' =>  __('projects') ])

    <div class="flex bg-gray-50 w-full h-full flex-col items-center justify-center">

        <div class="container flex flex-col space-x-3 items-center justify-center my-16 lg:space-x-3 lg:my-24 lg:flex-row">

            <div class="flex flex-col lg:w-2/3 " id="details">

            </div>

            <div class="flex flex-col space-y-8 border border-[#11b3e8] px-4 py-4 lg:w-1/3 lg:space-y-10">
                <div class="border-l-[#005494] border-l-4 text-black px-3">Projets Récents</div>
                <div class="flex flex-col space-y-4 uppercase text-md md:text-xl" id="last_projects"></div>
            </div>
        </div>

       <!--  <div class="flex w-full flex-col items-center bg-white justify-center py-24 space-y-10">
            <span class="text-xl text-black font-bold uppercase lg:text-3xl">Prêt à vous lancez ?</span>
            <a class="mt-8" href="/contact">
                <button class="inline-flex relative gap-x-2 h-16 px-4 border-0 bg-blue-500 overflow-hidden transition-all hover:bg-blue-500 group focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:text-sm lg:h-20">
                    <span class="w-0 h-0 rounded bg-blue-600 absolute top-0 left-0 ease-out duration-500 transition-all group-hover:w-full group-hover:h-full -z-1"></span>
                    <span class="text-white sm:text-sm transition-colors duration-300 ease-in-out group-hover:text-white z-10">Demandez une consultation</span>
                    <Icon name="arrow-right" class="animate-ping h-3 w-3 text-white" />
                </button>
            </a>
        </div> -->

    </div>

@endsection

@section('js')

    <script>

        var http = new XMLHttpRequest();
        var url = "../api/projects/test";

        http.onreadystatechange = function() {

            if (this.readyState == 4 && this.status == 200) {

                document.querySelector('#loader').classList.add('hidden');
                document.querySelector('#root').classList.remove('hidden');
                const res =  http.responseText;
                const data = JSON.parse(res);
                const projects = data.projects;
                //console.log(data.projects);

                // Create the container element details
                const container_1 = document.createElement('div');
                container_1.classList.add('relative');

                // Create img cover
                const img_1 = document.createElement('img');
                img_1.classList.add('grayscale', 'transition', 'ease-in', 'hover:-translate-y-2', 'hover:scale-25', 'duration-500')
                img_1.src = data.data.img;
                img_1.alt = data.data.title;
                container_1.appendChild(img_1);

                // Create the paragraph element
                const paragraph_1 = document.createElement('p');
                paragraph_1.classList.add('text-gray-700', 'text-base', 'font-normal', 'my-10');
                paragraph_1.textContent = data.data.description;
                container_1.appendChild(paragraph_1);

                // Create the div images
                const pictures = document.createElement('d');
                pictures.classList.add('flex', 'flex-row', 'flex-wrap', 'my-10', 'space-x-7');
                pictures.id = 'pictures';

                const attachments = data.data.attachments;
                for(let i = 0; i < attachments.length; i++) {
                    const photo = document.createElement('img');
                    photo.classList.add('w-24', 'h-24');
                    photo.src = attachments[i];
                    photo.alt = 'alt';
                    pictures.appendChild(photo);
                }

                container_1.appendChild(pictures);

                document.querySelector('#details').appendChild(container_1);

                for(let i = 0; i < projects.length; i++) {

                    // Create the container element
                    const container = document.createElement('a');
                    container.classList.add('flex', 'flex-col', 'items-center', 'border', 'border-gray-200', 'rounded-lg', 'shadow', 'md:flex-row', 'md:max-w-sm', 'hover:bg-gray-100');
                    var url = "{{ route('projects.show', ':slug') }}";
                    url = url.replace(':slug', projects[i].slug);
                    container.href = url;

                    // Create the img element
                    const img = document.createElement('img');
                    img.classList.add('object-cover', 'w-full', 'grayscale', 'rounded-full', 'h-16', 'md:h-auto', 'md:w-32', 'md:rounded-none', 'md:rounded-s-lg');
                    img.src = projects[i].img;
                    img.alt = projects[i].title;
                    container.appendChild(img);

                    const contentDiv = document.createElement('div');
                    contentDiv.classList.add('flex', 'flex-col', 'justify-between', 'leading-normal', 'ml-4');

                    const titleDiv = document.createElement('h5');
                    titleDiv.classList.add('text-sm', 'font-bold', 'tracking-tight', 'text-gray-900');
                    titleDiv.textContent = projects[i].title;
                    contentDiv.appendChild(titleDiv);

                    // Create the paragraph element
                   /*  const paragraph = document.createElement('p');
                    paragraph.classList.add('text-gray-700', 'text-base', 'font-normal');
                    paragraph.textContent = projects[i].description;
                    contentDiv.appendChild(paragraph); */

                    // Append contentDiv to the container
                    container.appendChild(contentDiv);

                    document.querySelector('#last_projects').appendChild(container);
                }

            }
        };
        http.open("GET", url, false);
        http.send();

    </script>
@endsection

