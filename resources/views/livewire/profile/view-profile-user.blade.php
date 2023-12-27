<div>

  
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.2/plyr.css" />
  
    <style>
  
  .container2 {
      margin: 50px auto;
      max-width: 500px;
  }
  
      
      input[type="file"] {
          display: none;
      }
  
      .custom-file-upload {
      border: 1px solid #ccc;
      display: inline-block;
      padding: 6px 12px;
      cursor: pointer;
      }
  
      img {
      display: block;
      max-width: 100%;
  }
  .preview {
      text-align: center;
      overflow: hidden;
      width: 160px; 
      height: 160px;
      margin: 10px;
      border: 1px solid red;
  }
  
  .section{
      margin-top:150px;
      background:#fff;
      padding:50px 30px;
  }
  .modal-lg{
      max-width: 1000px !important;
      z-index:0 !important;
  }
  
  
  
  </style>
  
  
  <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
  
  
  <!-- component -->
  <main class="profile-page">
  <div class=" bg-white">
      <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:gap-6">
  
      <div>
  
        <div class="post mt-2 lg:p-1  rounded-md">
          <div class=" z-10 lg:left-3 rounded-md shadow-md ">
  
            <section class="relative block h-500-px  ">
  
              <div class="absolute top-0 w-full h-full bg-center bg-cover" style="background-image: url({{ Storage::url($creator->banner) }});">
                <div class=" w-1/2 px-1 lg:order-3 lg:text-right lg:self-center">
                  <div class="py-1 -full px-1 mt-32 sm:mt-0">
                    <div class="w-full">
                      <div class= "mt-2 sm:mt-0">
      

                      </div>
  
                    </div>
                  </div>
                </div>
              </div>
              <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px" style="transform: translateZ(0px)">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                  <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
              </div>
  
            </section>
  
            <section class="relative py-16 bg-blueGray-200">
              <div class="container mx-auto px-4">
                <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64">
                  <div class="px-6">
                    <div class="flex flex-wrap justify-center">
                      <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
                        <div class="relative">
                           <img src="{{$creator->user->profile_photo_url}}" alt="Profile Picture" class=" object-cover object-center absolute bottom-0 left-2/4 transform -m-16 -ml-20 lg:-ml-16 max-w-150-px -translate-x-1/2 translate-y-1/2 w-40 h-40 rounded-full border-4 border-white">
                         
                        </div>
                      </div>
                      <div class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center">
                        <div class="py-6 px-3 mt-32 sm:mt-0">
                        </div>
                      </div>
                      <div class="w-full lg:w-4/12 px-4 lg:order-1">
                      </div>
                    </div>
                    <div class="text-center mt-12">
                      <h3 class="text-4xl font-semibold leading-normal mb-2 text-blueGray-700">
                          {{$creator->user->name}}
                      </h3>
                      
                      <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold uppercase">
                        <i class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-400"></i>
                        {{$creator->user->pais->name ?? '-'}}
                      </div>
          
                      <div class="flex justify-center text-sm text-gray-400 py-1 container">
                          <div class="flex  mr-4">
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                  fill="currentColor">
                                  <path
                                      d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z">
                                  </path>
                              </svg>
                              <p class="">1.2k Following</p>
                          </div>
                          <div class="flex ">
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
                    <div class="mt-4 py-10 border-t border-blueGray-200 text-center">
                      
                      <div class="flex flex-wrap justify-center">
          
                        <div class="w-full lg:w-9/12 px-4">
            
                          <p class="mb-4 text-lg leading-relaxed text-blueGray-700 text-center">
                              {{$creator->user->biografia}}
                          </p>
          
                        </div>
          
                      </div>
          
                      
                    </div>
                  </div>
                </div>
              </div>

              <div class="flex flex-col justify-center items-center px-6 ">
        

                <div class="container relative flex h-[430px] w-full flex-col shadow-xl rounded-lg  border-[1px] border-gray-200 bg-white bg-clip-border dark:border-[#ffffff33] dark:!bg-navy-800 dark:text-white dark:shadow-none">
                    <div class="flex h-fit w-full items-center justify-between  px-6 pb-[20px] pt-4 shadow-2xl shadow-gray-100 dark:!bg-navy-700 dark:shadow-none">
                        <h4 class="text-lg font-bold dark:text-white">
                          Planes
                        </h4>
                  
                    </div>

                  
                                
    
                    @if ($planes->count())
                      <div class="mt-2 grid grid-cols-2 md:grid-cols-3 gap-3" id="frameworks-integration">

                   
                        @foreach($planes as $plan)
                       
                          <div class="w-full cursor-pointer rounded-xl border border-blue-gray-50 bg-white px-8 py-4  hover:border-blue-gray-100 hover:bg-blue-gray-50 hover:bg-opacity-25">
                           
                            
                            <span class="my-4 h-24 w-32 place-items-center">
                              <div class=" flex justify-center ">
                                  <p class="text-sm font-bold"> {{$plan->plan->name}}</p>
                              </div>
                              <div class=" flex justify-center ">
                                <p class="  text-xs "> {{$plan->precio}} PVS</p>
                              </div>
                              <div class=" flex justify-center ">
                               @livewire('profile.suscripcion-user',['plan'=> $plan->plan->id,'creador' => $creator])
                              </div> 
                            </span>
                          </div>
                        @endforeach
                      </div>
                    @else
                      <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <strong class="font-bold">Upss!</strong>
                        <span class="block sm:inline">Aún no has registrado tus planes</span>
                      </div>
                    @endif
                </div>
              </div>

            </section>
  
          </div>
        </div>
  
       
      </div>
  
  
          <div class="p-3 bg-white" id="posted">
              <div class="bg-white p-8 rounded-lg shadow-md shadow-slate-600 mb-4">
          @forelse($publicaciones as $publicacion)
  
          <div class="mb-4">
            <div class="mb-1">
              <p class="text-gray-800"> {{$publicacion->contenido}}
              </p>
            </div>
  
  
            <div class=" bg-white p-3">

              @if ($publicacion->tipo == 'video')

              <video  class="player h-48 w-full aspect-video"  controls crossorigin playsinline >
              
                
              
                <source src="{{$this->view_publication($publicacion->id) }}" type="video/mp4" size="576">
              </video>
  
              @else
  
              <img src="{{ $this->view_publication($publicacion->id)}}" class="w-full rounded-t-lg h-90 img_ampliar" onclick="ampliar({{$publicacion->id}})" id="myImg-{{$publicacion->id}}">
  
              @endif


  
              {{-- <video  class="player h-48 w-full aspect-video"  controls crossorigin playsinline poster="posterimage.jpg">
              <source src="{{ Storage::url($publicacion->profile) }}" type="video/mp4" size="576">
              </video> --}}

              {{-- <article class="relative w-full h-48 bg-cover bg-center group rounded-lg overflow-hidden shadow-lg hover:shadow-2xl  transition duration-300 ease-in-out"
              style="background-image: url('/imagen/imagen-no-disponible.jpg');">
                <div class="absolute inset-0 bg-opacity-90  group-hover:opacity-75 transition duration-300 ease-in-out"></div>
                <div class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex justify-center items-center">
                    <h3 class="text-center">
                        <a class="text-white text-2xl font-bold text-center" href="#">
                            <span class="absolute inset-0"></span>
                            The best plugins for Visual Studio Code
                        </a>
                    </h3>
                </div>
              </article> --}}



            </div> 
  
            <div class="flex items-center justify-between text-gray-500">
              <div class="flex items-center space-x-2">
                <button class="flex justify-center items-center gap-2 px-2 hover:bg-gray-50 rounded-full p-1">
                  <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M12 21.35l-1.45-1.32C6.11 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-4.11 6.86-8.55 11.54L12 21.35z" />
                  </svg>
                  <span>42 Likes</span>
                </button>
              </div>
              <button class="flex justify-center items-center gap-2 px-2 hover:bg-gray-50 rounded-full p-1">
                <svg width="22px" height="22px" viewBox="0 0 24 24" class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg">
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                  <g id="SVGRepo_iconCarrier">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 13.5997 2.37562 15.1116 3.04346 16.4525C3.22094 16.8088 3.28001 17.2161 3.17712 17.6006L2.58151 19.8267C2.32295 20.793 3.20701 21.677 4.17335 21.4185L6.39939 20.8229C6.78393 20.72 7.19121 20.7791 7.54753 20.9565C8.88837 21.6244 10.4003 22 12 22ZM8 13.25C7.58579 13.25 7.25 13.5858 7.25 14C7.25 14.4142 7.58579 14.75 8 14.75H13.5C13.9142 14.75 14.25 14.4142 14.25 14C14.25 13.5858 13.9142 13.25 13.5 13.25H8ZM7.25 10.5C7.25 10.0858 7.58579 9.75 8 9.75H16C16.4142 9.75 16.75 10.0858 16.75 10.5C16.75 10.9142 16.4142 11.25 16 11.25H8C7.58579 11.25 7.25 10.9142 7.25 10.5Z"></path>
                  </g>
                </svg>
                <span>3 Comment</span>
              </button>
            </div>
  
          </div>
  
          @empty
       
              <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                  <strong class="font-bold">Upss!</strong>
                  <span class="block sm:inline">No existe ninguna publicación.</span>
              </div>
     
          @endforelse
       
              </div>
          </div>
      </div>
  </div>
  
  
    
  
    @push('script')
  
        <script>
    
            const player = Array.from(document.querySelectorAll('video')).map((p) => new Plyr(p), {captions: {active: true}});
    
            window.player = player;
        </script>
    
        <script src="//cdn.jsdelivr.net/npm/hls.js@latest"></script>
            {{-- plyr--}}
        <script src="https://cdn.plyr.io/3.7.2/plyr.js"></script>
  
    @endpush
  
  </main>
  </div>
  
