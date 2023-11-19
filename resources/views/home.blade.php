<x-app-layout>

    <div class="mb-4">
        <img class=" w-full h-72  " src="/imagen/plantilla-rebajas-primavera-diseno-plano_23-2150071065.avif" alt="" />
        <img src="" alt="">
    </div>

    <div class="grid grid-cols-6 h-full container">


        <div class="bg-gray-100 rounded-lg shadow-md col-span-2 mt-2">

            

            <div class="flex flex-col justify-center items-center">
                <div
                    class="relative flex max-w-[500px] h-[430px] w-full flex-col rounded-[10px] border-[1px] border-gray-200 bg-white bg-clip-border shadow-md shadow-[#F3F3F3] dark:border-[#ffffff33] dark:!bg-navy-800 dark:text-white dark:shadow-none"
                >
                    <div
                    class="flex h-fit w-full items-center justify-between rounded-t-2xl bg-white px-4 pb-[20px] pt-4 shadow-2xl shadow-gray-100 dark:!bg-navy-700 dark:shadow-none"
                    >
                    <h4 class="text-lg font-bold text-navy-700 dark:text-white">
                        Perfiles más populares
                    </h4>

                    <a href="#" class="flex items-center h-10 leading-10 px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1" @click.prevent="showChildren=!showChildren">

                        <span class="ml-3 text-md text-blue-600">Ver todo</span>

                    </a>

                    </div>
                    <div class="w-full overflow-x-scroll px-4 md:overflow-x-hidden">
                    <table role="table" class="w-full min-w-[500px] overflow-x-scroll">
                        <thead>
                        <tr role="row">
                            <th
                            colspan="1"
                            role="columnheader"
                            title="Toggle SortBy"
                            style="cursor: pointer"
                            >
                            <div
                                class="flex items-center justify-between pb-2 pt-4 text-start uppercase tracking-wide text-gray-600 sm:text-xs lg:text-xs"
                            >
                                Creador
                            </div>
                            </th>
                            <th
                            colspan="1"
                            role="columnheader"
                            title="Toggle SortBy"
                            style="cursor: pointer"
                            >
                            <div
                                class="flex items-center justify-between pb-2 pt-4 text-start uppercase tracking-wide text-gray-600 sm:text-xs lg:text-xs"
                            >
                                Contenido
                            </div>
                            </th>
                            <th
                            colspan="1"
                            role="columnheader"
                            title="Toggle SortBy"
                            style="cursor: pointer"
                            >
                            </th>
                        </tr>
                        </thead>
                        <tbody role="rowgroup" class="px-4">
                        <tr role="row">
                            <td class="py-3 text-sm" role="cell">
                            <div class="flex items-center gap-2">
                                <div class="h-[30px] w-[30px] rounded-full">
                                <img
                                    src="https://images.unsplash.com/photo-1506863530036-1efeddceb993?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2244&amp;q=80"
                                    class="h-full w-full rounded-full"
                                    alt=""
                                />
                                </div>
                                <p
                                class="text-sm font-medium text-navy-700 dark:text-white"
                                >
                                @maddison_c21
                                </p>
                            </div>
                            </td>
                            <td class="py-3 text-sm" role="cell">
                            <p class="text-md font-medium text-gray-600 dark:text-white">
                                9821
                            </p>
                            </td>
                            <td class="py-3 text-sm" role="cell">
                            <div class="mx-2 flex font-bold">
                                <div
                                class="h-2 w-16 rounded-full bg-gray-200 dark:bg-navy-700"
                                >
                                <div
                                    class="flex h-full items-center justify-center rounded-md bg-brand-500 dark:bg-brand-400"
                                    style="width: 30%"
                                ></div>
                                </div>
                            </div>
                            </td>
                        </tr>
                        <tr role="row">
                            <td class="py-3 text-sm" role="cell">
                            <div class="flex items-center gap-2">
                                <div class="h-[30px] w-[30px] rounded-full">
                                <img
                                    src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1780&amp;q=80"
                                    class="h-full w-full rounded-full"
                                    alt=""
                                />
                                </div>
                                <p
                                class="text-sm font-medium text-navy-700 dark:text-white"
                                >
                                @karl.will02
                                </p>
                            </div>
                            </td>
                            <td class="py-3 text-sm" role="cell">
                            <p class="text-md font-medium text-gray-600 dark:text-white">
                                7032
                            </p>
                            </td>
                            <td class="py-3 text-sm" role="cell">
                            <div class="mx-2 flex font-bold">
                                <div
                                class="h-2 w-16 rounded-full bg-gray-200 dark:bg-navy-700"
                                >
                                <div
                                    class="flex h-full items-center justify-center rounded-md bg-brand-500 dark:bg-brand-400"
                                    style="width: 30%"
                                ></div>
                                </div>
                            </div>
                            </td>
                        </tr>
                        <tr role="row">
                            <td class="py-3 text-sm" role="cell">
                            <div class="flex items-center gap-2">
                                <div class="h-[30px] w-[30px] rounded-full">
                                <img
                                    src="https://images.unsplash.com/photo-1573766064535-6d5d4e62bf9d?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1315&amp;q=80"
                                    class="h-full w-full rounded-full"
                                    alt=""
                                />
                                </div>
                                <p
                                class="text-sm font-medium text-navy-700 dark:text-white"
                                >
                                @andreea.1z
                                </p>
                            </div>
                            </td>
                            <td class="py-3 text-sm" role="cell">
                            <p class="text-md font-medium text-gray-600 dark:text-white">
                                5204
                            </p>
                            </td>
                            <td class="py-3 text-sm" role="cell">
                            <div class="mx-2 flex font-bold">
                                <div
                                class="h-2 w-16 rounded-full bg-gray-200 dark:bg-navy-700"
                                >
                                <div
                                    class="flex h-full items-center justify-center rounded-md bg-brand-500 dark:bg-brand-400"
                                    style="width: 30%"
                                ></div>
                                </div>
                            </div>
                            </td>
                        </tr>
                        <tr role="row">
                            <td class="py-3 text-sm" role="cell">
                            <div class="flex items-center gap-2">
                                <div class="h-[30px] w-[30px] rounded-full">
                                <img
                                    src="https://images.unsplash.com/photo-1628157588553-5eeea00af15c?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1780&amp;q=80"
                                    class="h-full w-full rounded-full"
                                    alt=""
                                />
                                </div>
                                <p
                                class="text-sm font-medium text-navy-700 dark:text-white"
                                >
                                @abraham47.y
                                </p>
                            </div>
                            </td>
                            <td class="py-3 text-sm" role="cell">
                            <p class="text-md font-medium text-gray-600 dark:text-white">
                                4309
                            </p>
                            </td>
                            <td class="py-3 text-sm" role="cell">
                            <div class="mx-2 flex font-bold">
                                <div
                                class="h-2 w-16 rounded-full bg-gray-200 dark:bg-navy-700"
                                >
                                <div
                                    class="flex h-full items-center justify-center rounded-md bg-brand-500 dark:bg-brand-400"
                                    style="width: 30%"
                                ></div>
                                </div>
                            </div>
                            </td>
                        </tr>
                        <tr role="row">
                            <td class="py-3 text-sm" role="cell">
                            <div class="flex items-center gap-2">
                                <div class="h-[30px] w-[30px] rounded-full">
                                <img
                                    src="https://i.ibb.co/7p0d1Cd/Frame-24.png"
                                    class="h-full w-full rounded-full"
                                    alt=""
                                />
                                </div>
                                <p
                                class="text-sm font-medium text-navy-700 dark:text-white"
                                >
                                @simmmple.web
                                </p>
                            </div>
                            </td>
                            <td class="py-3 text-sm" role="cell">
                            <p class="text-md font-medium text-gray-600 dark:text-white">
                                3871
                            </p>
                            </td>
                            <td class="py-3 text-sm" role="cell">
                            <div class="mx-2 flex font-bold">
                                <div
                                class="h-2 w-16 rounded-full bg-gray-200 dark:bg-navy-700"
                                >
                                <div
                                    class="flex h-full items-center justify-center rounded-md bg-brand-500 dark:bg-brand-400"
                                    style="width: 30%"
                                ></div>
                                </div>
                            </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
              
            </div>


            <div class="flex flex-col mt-2 justify-center items-center">
                <div class="relative flex flex-col items-center rounded-[10px] border-[1px] border-gray-200 w-full mx-auto p-4 bg-white bg-clip-border shadow-md shadow-[#F3F3F3] dark:border-[#ffffff33] dark:!bg-navy-800 dark:text-white dark:shadow-none">
                    <div class="flex items-center justify-between rounded-t-3xl p-3 w-full">
                        <div class="text-lg font-bold text-navy-700 dark:text-white">
                            Solicitudes de conexión
                        </div>

                        <a href="#" class="flex items-center h-10 leading-10 px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1" @click.prevent="showChildren=!showChildren">

                            <span class="ml-3 text-md text-blue-600">Ver todo</span>
    
                        </a>
                       
                    </div>
                    <div class="flex h-full w-full items-start justify-between rounded-md border-[1px] border-[transparent] dark:hover:border-white/20 bg-white px-3 py-[20px] transition-all duration-150 hover:border-gray-200 dark:!bg-navy-800 dark:hover:!bg-navy-700">
                        <div class="flex items-center gap-3">
                            <div class="flex h-16 w-16 items-center justify-center">
                            <img
                                class="h-full w-full rounded-xl"
                                src="https://horizon-tailwind-react-corporate-7s21b54hb-horizon-ui.vercel.app/static/media/Nft1.0fea34cca5aed6cad72b.png"
                                alt=""
                            />
                            </div>
                            <div class="flex flex-col">
                            <h5 class="text-base font-bold text-navy-700 dark:text-white">
                                Colorful Heaven
                            </h5>
                            <p class="mt-1 text-sm font-normal text-gray-600">
                                Mark Benjamin
                            </p>
                            </div>
                        </div> 
                       
                    </div>

                    <div class="flex h-full w-full items-start justify-between rounded-md border-[1px] border-[transparent] dark:hover:border-white/20 bg-white px-3 py-[20px] transition-all duration-150 hover:border-gray-200 dark:!bg-navy-800 dark:hover:!bg-navy-700">
                        <div class="flex items-center gap-3">
                            <div class="flex h-16 w-16 items-center justify-center">
                            <img
                                class="h-full w-full rounded-xl"
                                src="https://horizon-tailwind-react-corporate-7s21b54hb-horizon-ui.vercel.app/static/media/Nft1.0fea34cca5aed6cad72b.png"
                                alt=""
                            />
                            </div>
                            <div class="flex flex-col">
                            <h5 class="text-base font-bold text-navy-700 dark:text-white">
                                Colorful Heaven
                            </h5>
                            <p class="mt-1 text-sm font-normal text-gray-600">
                                Mark Benjamin
                            </p>
                            </div>
                        </div> 
                       
                    </div>


                    <div class="flex h-full w-full items-start justify-between rounded-md border-[1px] border-[transparent] dark:hover:border-white/20 bg-white px-3 py-[20px] transition-all duration-150 hover:border-gray-200 dark:!bg-navy-800 dark:hover:!bg-navy-700">
                        <div class="flex items-center gap-3">
                            <div class="flex h-16 w-16 items-center justify-center">
                            <img
                                class="h-full w-full rounded-xl"
                                src="https://horizon-tailwind-react-corporate-7s21b54hb-horizon-ui.vercel.app/static/media/Nft1.0fea34cca5aed6cad72b.png"
                                alt=""
                            />
                            </div>
                            <div class="flex flex-col">
                            <h5 class="text-base font-bold text-navy-700 dark:text-white">
                                Colorful Heaven
                            </h5>
                            <p class="mt-1 text-sm font-normal text-gray-600">
                                Mark Benjamin
                            </p>
                            </div>
                        </div> 
                       
                    </div>

                    <div class="flex h-full w-full items-start justify-between rounded-md border-[1px] border-[transparent] dark:hover:border-white/20 bg-white px-3 py-[20px] transition-all duration-150 hover:border-gray-200 dark:!bg-navy-800 dark:hover:!bg-navy-700">
                        <div class="flex items-center gap-3">
                            <div class="flex h-16 w-16 items-center justify-center">
                            <img
                                class="h-full w-full rounded-xl"
                                src="https://horizon-tailwind-react-corporate-7s21b54hb-horizon-ui.vercel.app/static/media/Nft1.0fea34cca5aed6cad72b.png"
                                alt=""
                            />
                            </div>
                            <div class="flex flex-col">
                            <h5 class="text-base font-bold text-navy-700 dark:text-white">
                                Colorful Heaven
                            </h5>
                            <p class="mt-1 text-sm font-normal text-gray-600">
                                Mark Benjamin
                            </p>
                            </div>
                        </div> 
                       
                    </div>
                    
                </div>  
                
            </div>



        </div>

        <div class="col-span-3">

            @foreach($creadors as $creador)

            <a href="#" class="flex-shrink-0 group block">
            

                <div class="bg-gray-100 flex items-center justify-center p-2">
                    <div class="bg-white p-8 rounded-lg shadow-md w-full">
                        <!-- Banner Profile -->
                        <div class="relative z-0 ">
                            <img src="{{ Storage::url($creador->banner) }}" alt="Banner Profile" class="w-full rounded-t-lg object-cover h-80 ">
                            <img src="{{ $creador->user->profile_photo_url }}" alt="Profile Picture" class=" object-cover object-center absolute bottom-0 left-2/4 transform -translate-x-1/2 translate-y-1/2 w-28 h-28 rounded-full border-4 border-white">
                        </div>
                        <!-- User Info with Verified Button -->
                        <div class="flex items-center mt-4">
                            <h2 class="text-xl font-bold text-gray-800">{{$creador->user->name}}</h2>
                            <button class=" px-2 py-1 rounded-full">
                                <svg fill="#4d9aff" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16px" height="16px" viewBox="0 0 536.541 536.541" xml:space="preserve" stroke="#4d9aff">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <g>
                                            <g>
                                                <path d="M496.785,152.779c-3.305-25.085-16.549-51.934-38.826-74.205c-22.264-22.265-49.107-35.508-74.186-38.813 c-11.348-1.499-26.5-7.766-35.582-14.737C328.111,9.626,299.764,0,268.27,0s-59.841,9.626-79.921,25.024 c-9.082,6.965-24.235,13.238-35.582,14.737c-25.08,3.305-51.922,16.549-74.187,38.813c-22.277,22.271-35.521,49.119-38.825,74.205 c-1.493,11.347-7.766,26.494-14.731,35.57C9.621,208.422,0,236.776,0,268.27s9.621,59.847,25.024,79.921 c6.971,9.082,13.238,24.223,14.731,35.568c3.305,25.086,16.548,51.936,38.825,74.205c22.265,22.266,49.107,35.51,74.187,38.814 c11.347,1.498,26.5,7.771,35.582,14.736c20.073,15.398,48.421,25.025,79.921,25.025s59.841-9.627,79.921-25.025 c9.082-6.965,24.234-13.238,35.582-14.736c25.078-3.305,51.922-16.549,74.186-38.814c22.277-22.27,35.521-49.119,38.826-74.205 c1.492-11.346,7.766-26.492,14.73-35.568c15.404-20.074,25.025-48.422,25.025-79.921c0-31.494-9.621-59.848-25.025-79.921 C504.545,179.273,498.277,164.126,496.785,152.779z M439.256,180.43L246.477,373.209l-30.845,30.846 c-8.519,8.52-22.326,8.52-30.845,0l-30.845-30.846l-56.665-56.658c-8.519-8.52-8.519-22.326,0-30.846l30.845-30.844 c8.519-8.519,22.326-8.519,30.845,0l41.237,41.236L377.561,118.74c8.52-8.519,22.326-8.519,30.846,0l30.844,30.845 C447.775,158.104,447.775,171.917,439.256,180.43z"></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </button>
                        </div>
                        <!-- Bio -->
                        <p class="text-gray-700 mt-2">{{$creador->biografia}} </p>
        
                        <!-- Separator Line -->
                        <hr class="my-4 border-t border-gray-300">
                        <!-- Stats -->
                        <div class="flex   text-sm text-gray-400 py-1 container">
                            <div class="flex justify-start ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z">
                                    </path>
                                </svg>
                                <p class="">1.2k Following</p>
                            </div>
                            <div class="flex-1 flex justify-end ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <p class="">14 posts</p>
                            </div>
                            
                        </div>
                    </div>
                </div>

            </a>

            @endforeach





            

        </div>

        <div class="bg-gray-100 col-span-1 rounded-lg shadow-md mt-2 ">

            <div class=" bg-white border-l border-r sm:w-48 w-48 dark:bg-gray-900 dark:border-gray-700 mb-2">
                <div class="flex flex-row bg-white shadow-sm rounded p-4">
                  <div class="flex items-center justify-center flex-shrink-0 h-12 w-10 rounded-xl bg-green-100 text-green-500">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                  </div>
                  <div class="flex flex-col flex-grow ml-2">
                    <h2 class="px-1 text-md font-medium text-gray-800 dark:text-white">Balance</h2>
                    <div class="font-bold text-lg">$ 120</div>
                  </div>
                </div>
            </div>

            <div class=" py-8 overflow-y-auto bg-white border-l border-r sm:w-48 w-48 dark:bg-gray-900 dark:border-gray-700">
                <h2 class="px-5 text-lg font-medium text-gray-800 dark:text-white">Contactos</h2>
        
                <div class="mt-8 space-y-4">
                    <button class="flex items-center w-full px-5 py-2 transition-colors duration-200 dark:hover:bg-gray-800 gap-x-2 hover:bg-gray-100 focus:outline-none">
                        <img class="object-cover w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=faceare&facepad=3&w=688&h=688&q=100" alt="">
                    
                        <div class="text-left rtl:text-right">
                            <h1 class="text-sm font-medium text-gray-700 capitalize dark:text-white">Mia John</h1>
            
                            <p class="text-xs text-gray-500 dark:text-gray-400">11.2 Followers</p>
                        </div>
                    </button>
        
                    <button class="flex items-center w-full px-5 py-2 transition-colors duration-200 dark:hover:bg-gray-800 gap-x-2 hover:bg-gray-100 focus:outline-none">
                        <img class="object-cover w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&h=880&q=80" alt="">
                    
                        <div class="text-left rtl:text-right">
                            <h1 class="text-sm font-medium text-gray-700 capitalize dark:text-white">arthur melo</h1>
            
                            <p class="text-xs text-gray-500 dark:text-gray-400">1.2 Followers</p>
                        </div>
                    </button>
        
                    <button class="flex items-center w-full px-5 py-2 transition-colors duration-200 bg-gray-100 dark:bg-gray-800 gap-x-2 focus:outline-none">
                        <div class="relative">
                            <img class="object-cover w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&h=764&q=100" alt="">
                            <span class="h-2 w-2 rounded-full bg-emerald-500 absolute right-0.5 ring-1 ring-white bottom-0"></span>
                        </div>
        
                        <div class="text-left rtl:text-right">
                            <h1 class="text-sm font-medium text-gray-700 capitalize dark:text-white">Jane Doe</h1>
            
                            <p class="text-xs text-gray-500 dark:text-gray-400">15.6 Followers</p>
                        </div>
                    </button>
        
                    <button class="flex items-center w-full px-5 py-2 transition-colors duration-200 dark:hover:bg-gray-800 gap-x-2 hover:bg-gray-100 focus:outline-none">
                        <img class="object-cover w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&h=764&q=80" alt="">
                    
                        <div class="text-left rtl:text-right">
                            <h1 class="text-sm font-medium text-gray-700 capitalize dark:text-white">Amelia. Anderson</h1>
            
                            <p class="text-xs text-gray-500 dark:text-gray-400">32.9 Followers</p>
                        </div>
                    </button>
        
                    <button class="flex items-center w-full px-5 py-2 transition-colors duration-200 dark:hover:bg-gray-800 gap-x-2 hover:bg-gray-100 focus:outline-none">
                        <img class="object-cover w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&h=687&q=80" alt="">
                    
                        <div class="text-left rtl:text-right">
                            <h1 class="text-sm font-medium text-gray-700 capitalize dark:text-white">Joseph Gonzalez</h1>
            
                            <p class="text-xs text-gray-500 dark:text-gray-400">100.2 Followers</p>
                        </div>
                    </button>
        
                    <button class="flex items-center w-full px-5 py-2 transition-colors duration-200 hover:bg-gray-100 dark:hover:bg-gray-800 gap-x-2 focus:outline-none">
                        <div class="relative">
                            <img class="object-cover w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1488508872907-592763824245?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&h=1470&q=80" alt="">
                            <span class="h-2 w-2 rounded-full bg-emerald-500 absolute right-0.5 ring-1 ring-white bottom-0"></span>
                        </div>
        
                        <div class="text-left rtl:text-right">
                            <h1 class="text-sm font-medium text-gray-700 capitalize dark:text-white">Olivia Wathan</h1>
            
                            <p class="text-xs text-gray-500 dark:text-gray-400">8.6 Followers</p>
                        </div>
                    </button>
        
                    <button class="flex items-center w-full px-5 py-2 transition-colors duration-200 hover:bg-gray-100 dark:hover:bg-gray-800 gap-x-2 focus:outline-none">
                        <div class="relative">
                            <img class="object-cover w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1608174386344-80898cec6beb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&h=687&q=80" alt="">
                            <span class="h-2 w-2 rounded-full bg-emerald-500 absolute right-0.5 ring-1 ring-white bottom-0"></span>
                        </div>
        
                        <div class="text-left rtl:text-right">
                            <h1 class="text-sm font-medium text-gray-700 capitalize dark:text-white">Junior REIS</h1>
            
                            <p class="text-xs text-gray-500 dark:text-gray-400">56.6 Followers</p>
                        </div>
                    </button>
                </div>
            </div>

            

            

            

            


        </div>


    </div>

    

    
</x-app-layout>

