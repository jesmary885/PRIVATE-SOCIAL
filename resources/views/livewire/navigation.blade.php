
<div class="sticky z-10 top-0">

<style>
@import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);

.inset-l-full {
    left: 100%;
}
</style>
<div>
    <div class="py-3 px-5 bg-white rounded shadow-sm ">
        <div class="-mx-1">
            <ul class="flex w-full flex-wrap items-center h-16 container mt-1">

                <li class="flex-1 block relative ">
                    <div class="flex">

                        <a href="{{route('home')}}" class="rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100  hover:bg-gray-100 mr-2">
                            <img src="{{URL::asset('imagen/Private Social 4.png')}}" class="block h-14 w-28 md:h-16 md:w-36 ">
                            
                        
                        </a>
    
                        <div class="hidden lg:block mt-3 ml-4 w-2/5">

                            @livewire('buscar')

                        </div>
                    </div>

                </li>


                <li class="block relative mr-0 mt-2 md:mr-2">
                    <a href="{{route('home')}}" class=" h-10 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100  hover:bg-gray-100">
                            <div class="p-2 rounded cursor-pointer hover:no-underline transition-colors duration-100  hover:bg-gray-100">

                                <svg class=" w-6 h-6 mx-auto text-gray-600" viewBox="0 0 20 20"  xmlns="http://www.w3.org/2000/svg"><path d="m18.65 11.35-8.65-8.64-8.65 8.64-.7-.7 9.35-9.36 9.35 9.36z"/><path d="m15 4h3v3h-1v-2h-2z"/><path d="m3 11h1v7h3v-6h5v6h4v-7h1v8h-6v-6h-3v6h-5z"/></svg>

                                <p class="mx-auto hidden md:block md:mx-auto text-gray-600 text-sm">Inicio</p>
                            </div>
                    </a>
                </li>



                <li class="block relative mr-0 md:mr-2 mt-2" x-data="{showChildren:false}" @click.away="showChildren=false">
                    <a href="#" class="h-10 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100  hover:bg-gray-100" @click.prevent="showChildren=!showChildren">
                        <div class="p-2 rounded cursor-pointer hover:no-underline transition-colors duration-100  hover:bg-gray-100">
                            <svg class=" w-6 h-6 mx-auto text-gray-500"  enable-background="new 0 0 32 32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="m31.36 16c0-.655-.466-1.203-1.083-1.331-.273-2.952-1.425-5.686-3.349-7.947.132-.21.212-.456.212-.722 0-.75-.61-1.36-1.36-1.36s-1.36.61-1.36 1.36.61 1.36 1.36 1.36c.222 0 .43-.059.615-.154.389.459.749.936 1.07 1.434h-4.292c-1.233-3.54-3.333-6.102-5.828-6.791-.076-.678-.647-1.209-1.345-1.209-.657 0-1.206.468-1.332 1.089-7.329.679-13.028 6.88-13.028 14.271s5.699 13.592 13.027 14.272c.126.62.675 1.089 1.332 1.089.656 0 1.205-.467 1.332-1.086 6.826-.635 12.304-6.114 12.94-12.942.621-.127 1.089-.676 1.089-1.333zm-6.219-10c0-.353.287-.64.64-.64s.639.287.639.64-.287.64-.64.64-.639-.287-.639-.64zm2.752 3.36c.921 1.641 1.488 3.451 1.666 5.36-.421.145-.745.488-.865.92h-4.344c-.033-2.252-.369-4.386-.947-6.28zm-3.587 13.28c-.1-.363-.346-.662-.671-.836.447-1.739.687-3.566.714-5.444h4.345c.119.43.442.773.86.919-.181 1.929-.764 3.745-1.673 5.361zm-7.946 6.054v-5.334h5.334c.076.275.235.513.451.689-1.191 2.881-2.956 4.81-4.91 5.388-.166-.362-.486-.635-.875-.743zm-1.593.741c-2.179-.64-4.037-2.908-5.18-6.074h6.053v5.334c-.388.107-.707.379-.873.74zm-12.39-13.075h4.317c.132.476.512.848.995.961.101 1.902.418 3.699.911 5.318h-4.483c-1.056-1.874-1.679-4.011-1.74-6.279zm13.263-13.055v5.335h-6.053c1.143-3.167 3.001-5.435 5.18-6.075.166.361.485.633.873.74zm0 6.055v6.28h-6.335c-.122-.443-.461-.792-.896-.93.102-1.925.425-3.738.93-5.35zm7.292 12.287c-.594.03-1.084.44-1.237.993h-5.335v-6.28h7.268c-.027 1.824-.26 3.599-.696 5.287zm-6.572-6.007v-6.28h6.302c.589 1.875.935 4.013.969 6.28zm-8.36 1c-.353 0-.64-.287-.64-.64s.287-.64.64-.64.64.287.64.64-.287.64-.64.64zm-.31-1.961c-.483.114-.863.485-.995.961h-4.318c.06-2.268.684-4.406 1.74-6.28h4.484c-.493 1.619-.81 3.417-.911 5.319zm.719 2.612c.436-.139.774-.488.896-.931h6.335v6.28h-6.301c-.506-1.612-.828-3.425-.93-5.349zm13.951 5.709c0-.353.287-.64.64-.64s.64.287.64.64-.287.64-.64.64-.64-.287-.64-.64zm.061-14.36h-6.061v-5.335c.389-.107.707-.379.873-.74 2.193.643 4.047 2.917 5.188 6.075zm-6.421-7.28c.353 0 .64.287.64.64s-.287.64-.64.64-.64-.287-.64-.64.287-.64.64-.64zm-3.246 1.417c-1.644 1.191-3.011 3.264-3.917 5.863h-4.298c1.861-2.878 4.78-5.019 8.215-5.863zm-8.214 20.583h4.298c.906 2.599 2.273 4.672 3.918 5.862-3.437-.843-6.356-2.983-8.216-5.862zm11.46 7.28c-.353 0-.64-.287-.64-.64s.287-.64.64-.64.64.287.64.64-.287.64-.64.64zm3.233-1.41c1.421-1.02 2.66-2.698 3.57-4.89.065.01.13.02.198.02.624 0 1.147-.425 1.306-1h3.132c-1.869 2.885-4.786 5.03-8.206 5.87zm10.767-12.59c-.353 0-.64-.287-.64-.64s.287-.64.64-.64.64.287.64.64-.287.64-.64.64z"/><path d="m0 0h32v32h-32z" fill="none"/></svg>
                           
 
                            <p class="mx-auto hidden md:block md:mx-auto text-gray-600 text-sm">Idiomas</p>
           

                        </div>
                        
                    </a>
                    <div class="bg-white shadow-md rounded border border-gray-300 text-sm absolute top-auto left-0 min-w-full w-56 z-30 mt-1" x-show="showChildren" x-transition:enter="transition ease duration-300 transform" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease duration-300 transform" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-4" style="display: none;">
                        <span class="absolute top-0 left-0 w-3 h-3 bg-white border transform rotate-45 -mt-1 ml-6"></span>
                        <div class="bg-white rounded w-full relative z-10 py-1">
                            <ul class="list-reset">
                                <li class="relative" x-data="{showChildren:false}" @mouseleave="showChildren=false" @mouseenter="showChildren=true">
                                    <a href="#" class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer"> <span class="flex-1">Español</span> </a>
                                </li>
                                <li class="relative" x-data="{showChildren:false}" @mouseleave="showChildren=false" @mouseenter="showChildren=true">
                                    <a href="#" class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer"> <span class="flex-1">English</span> </a>
                                </li>
       
                             
                           
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="block relative mr-0 md:mr-2 mt-2">
                    <a href="{{route('creadores.index')}}" class=" h-10 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100  hover:bg-gray-100">
                            <div class="p-2 rounded cursor-pointer hover:no-underline transition-colors duration-100  hover:bg-gray-100">
                                
                                <svg  class=" w-6 h-6 mx-auto text-gray-600" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 20V19C1 15.134 4.13401 12 8 12V12C11.866 12 15 15.134 15 19V20" stroke="currentColor" stroke-linecap="round"/>
                                    <path d="M13 14V14C13 11.2386 15.2386 9 18 9V9C20.7614 9 23 11.2386 23 14V14.5" stroke="currentColor" stroke-linecap="round"/>
                                    <path d="M8 12C10.2091 12 12 10.2091 12 8C12 5.79086 10.2091 4 8 4C5.79086 4 4 5.79086 4 8C4 10.2091 5.79086 12 8 12Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M18 9C19.6569 9 21 7.65685 21 6C21 4.34315 19.6569 3 18 3C16.3431 3 15 4.34315 15 6C15 7.65685 16.3431 9 18 9Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    
                                  
                                
                                    <p class="mx-auto hidden md:block md:mx-auto text-gray-600 text-sm">Creadores</p>
                            </div>
                    </a>
                </li>

                <li class="block relative mr-0 md:mr-2 mt-2">
                    <a href="#" class=" h-10 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100  hover:bg-gray-100">
                            <div class="p-2 rounded cursor-pointer hover:no-underline transition-colors duration-100  hover:bg-gray-100">

                                <svg class=" w-6 h-6 mx-auto text-gray-600"  viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg"><path d="m226.24072 189.28271a76.00889 76.00889 0 0 0 -59.4834-112.96671 75.99462 75.99462 0 1 0 -136.998 64.96667l-6.6377 23.2334a9.99929 9.99929 0 0 0 12.36133 12.36328l23.23438-6.63818a75.8485 75.8485 0 0 0 30.49267 9.44926 76.04093 76.04093 0 0 0 108.07275 38.55029l23.23438 6.63867a9.9987 9.9987 0 0 0 12.36133-12.3623zm-166.98926-27.35449a3.99738 3.99738 0 0 0 -1.09863.15381l-24.86719 7.105a2 2 0 0 1 -2.47265-2.47265l7.10449-24.86719a4.00117 4.00117 0 0 0 -.40723-3.14307 67.97064 67.97064 0 1 1 23.78614 23.78613 4.00029 4.00029 0 0 0 -2.04493-.56203zm165.42676 54.75a1.96577 1.96577 0 0 1 -1.96386.50879l-24.86719-7.10449a3.99913 3.99913 0 0 0 -3.14356.4082 68.0381 68.0381 0 0 1 -96.70752-30.54126 75.97949 75.97949 0 0 0 71.50635-95.27636 68.01461 68.01461 0 0 1 48.98828 102.03051 3.99743 3.99743 0 0 0 -.4082 3.14307l7.10449 24.86865a1.96026 1.96026 0 0 1 -.50879 1.96289z"/></svg>

                                    <p class="mx-auto hidden md:block md:mx-auto text-gray-600 text-sm">Chat</p>
                            </div>
                    </a>
                </li>

                <li class="block relative mr-0 md:mr-2 mt-2">
                    <a href="#" class=" h-10 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100  hover:bg-gray-100">
                            <div class="p-2 rounded cursor-pointer hover:no-underline transition-colors duration-100  hover:bg-gray-100">

                                <svg class=" w-6 h-6 mx-auto text-gray-600"   viewBox="0 0 21 21" xmlns="http://www.w3.org/2000/svg"><path d="m2.41547595 3.5h10.16904815c.9116644 0 1.6507144.73905002 1.6507144 1.65071443 0 .299182-.0813106.59273912-.2352385.84928557-.9815222 1.63587038-1.5 3.50773964-1.5 5.4154759v1.0845241c0 2.209139-1.790861 4-4 4h-2c-2.209139 0-4-1.790861-4-4v-1.0845241c0-1.90773626-.51847777-3.77960552-1.5-5.4154759-.46904747-.78174578-.2155554-1.79571405.56619038-2.26476152.25654645-.15392786.55010357-.23523848.84928557-.23523848zm2.58452405-1.5c.66666667-1 1.5-1.5 2.5-1.5s1.83333333.5 2.5 1.5" fill="none" stroke="#2a2e3b" stroke-linecap="round" stroke-linejoin="round" transform="matrix(-1 0 0 -1 18 19)"/></svg>

                                    <p class="mx-auto hidden md:block md:mx-auto  text-gray-600 text-sm">Notificaciones</p>
                            </div>
                    </a>
                </li>

                <li class="block relative" x-data="{showChildren:false}" @click.away="showChildren=false">
                    <div class="mx-2 relative">

                        <div class="flex">

                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                        
                                        <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                            <img class="h-8 w-8 md:h-12 md:w-12 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                        </button>
                                    
                                    </x-slot>
                
                                    <x-slot name="content">
                                    
                
                                        <x-dropdown-link class="flex" href="{{ route('profile_user') }}">
        
                                            <svg fill="none" class=" mr-3" height="20" viewBox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg"><g stroke="#292d32" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"><path d="m14.9405 8.03998c.22.44.35.94.35 1.47-.01 1.77002-1.4 3.22002-3.16 3.27002-.07-.01-.16-.01-.24 0-1.76-.06-3.16003-1.5-3.16003-3.27002 0-1.81 1.46003-3.28 3.28003-3.28"/><path d="m18.7398 19.3801c-1.78 1.63-4.14 2.62-6.74 2.62-2.60003 0-4.96003-.99-6.74003-2.62.1-.94.7-1.86 1.77-2.58 2.74-1.82 7.22003-1.82 9.94003 0 1.07.72 1.67 1.64 1.77 2.58z"/><path d="m4 6c-1.25 1.67-2 3.75-2 6 0 5.52 4.48 10 10 10s10-4.48 10-10-4.48-10-10-10c-1.43 0-2.8.3-4.03.85"/></g></svg>
                                            Perfil
                                        </x-jet-dropdown-link>
        
                                        <x-dropdown-link class="flex" href="{{ route('profile.show') }}">
        
                                            <svg height="20" class=" mr-3"  viewBox="0 0 32 32" width="20" xmlns="http://www.w3.org/2000/svg"><path d="m17.599 3.738v2.598l.8.207c.905.234 1.768.597 2.566 1.081l.715.434 1.86-1.86 2.262 2.262-1.888 1.888.407.708c.451.785.788 1.635 1.002 2.527l.196.817h2.744v3.199h-2.806l-.216.782c-.233.844-.583 1.654-1.04 2.406l-.434.716 2.036 2.035-2.262 2.262-2.064-2.064-.707.407c-.734.422-1.531.745-2.368.961l-.8.206v2.951h-3.199v-2.951l-.8-.206c-.837-.216-1.634-.539-2.368-.961l-.708-.407-2.064 2.064-2.262-2.262 2.036-2.035-.434-.716c-.457-.753-.807-1.562-1.04-2.406l-.216-.782h-2.806v-3.199h2.744l.196-.817c.213-.891.551-1.742 1.002-2.527l.407-.708-1.888-1.888 2.262-2.262 1.86 1.86.715-.434c.798-.484 1.661-.848 2.566-1.081l.8-.207v-2.598h3.199zm-1.599 17.061c2.646 0 4.798-2.153 4.798-4.799s-2.152-4.799-4.798-4.799-4.798 2.153-4.798 4.799 2.152 4.799 4.798 4.799zm2.666-18.127h-5.331v2.839c-1.018.263-1.975.67-2.852 1.202l-2.022-2.022-3.769 3.77 2.065 2.065c-.498.867-.875 1.81-1.114 2.809h-2.97v5.331h3.06c.263.953.655 1.85 1.156 2.676l-2.198 2.198 3.769 3.77 2.241-2.241c.816.469 1.7.828 2.633 1.069v3.191h5.331v-3.191c.933-.241 1.817-.6 2.633-1.069l2.241 2.241 3.769-3.77-2.198-2.198c.501-.826.893-1.723 1.156-2.676h3.06v-5.331h-2.97c-.239-.999-.616-1.941-1.114-2.809l2.065-2.065-3.769-3.77-2.022 2.022c-.877-.532-1.834-.939-2.852-1.202v-2.839zm-2.666 17.061c-2.062 0-3.732-1.671-3.732-3.733s1.67-3.732 3.732-3.732 3.732 1.671 3.732 3.732c0 2.062-1.67 3.733-3.732 3.733z"/></svg> 
                                            Configuraciones
                                        </x-jet-dropdown-link>
        
                                        <div class="border-t border-gray-100"></div>
        
                                        <x-dropdown-link class="flex" href="{{ route('profile.show') }}">
        
                                            <svg fill="none" class=" mr-3" height="20" viewBox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg"><g stroke="#292d32" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"><path d="m9.5 13.75c0 .97.75 1.75 1.67 1.75h1.88c.8 0 1.45-.68 1.45-1.53 0-.91-.4-1.24-.99-1.45l-3.01-1.05c-.59-.21-.98999-.53-.98999-1.45 0-.84001.64999-1.53001 1.44999-1.53001h1.88c.92 0 1.67.78 1.67 1.75001"/><path d="m12 7.5v9"/><path d="m22 12c0 5.52-4.48 10-10 10s-10-4.48-10-10 4.48-10 10-10"/><path d="m22 6v-4h-4"/><path d="m17 7 5-5"/></g></svg> 
                                            Iniciar como creador
                                        </x-jet-dropdown-link>
                
                
                                        <div class="border-t border-gray-100"></div>
                
                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                
                                            <x-dropdown-link class="flex" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                            this.closest('form').submit();">
        
                                                    <svg viewBox="0 0 128 128" class=" mr-3" width="20" height="20"  xmlns="http://www.w3.org/2000/svg"><path d="m13.076 97.083a1.75 1.75 0 0 0 1.75-1.75v-28.666a1.75 1.75 0 0 0 -3.5 0v28.666a1.75 1.75 0 0 0 1.75 1.75z"/><path d="m122.38 64.97c.027-.041.046-.085.069-.128a1.037 1.037 0 0 0 .146-.348c.015-.051.035-.1.045-.152a1.755 1.755 0 0 0 0-.685c-.01-.053-.03-.1-.045-.152a1.733 1.733 0 0 0 -.054-.174 1.692 1.692 0 0 0 -.092-.174c-.023-.042-.042-.086-.069-.127a1.75 1.75 0 0 0 -.22-.269l-12.509-12.509a1.75 1.75 0 0 0 -2.475 2.475l9.524 9.523h-53.276a1.75 1.75 0 0 0 0 3.5h53.276l-9.523 9.523a1.75 1.75 0 1 0 2.475 2.475l12.508-12.509a1.75 1.75 0 0 0 .22-.269z"/><path d="m95.424 72.25a1.75 1.75 0 0 0 -1.75 1.75v36.9h-45.041v-93.8h45.041v36.9a1.75 1.75 0 1 0 3.5 0v-38.65a1.75 1.75 0 0 0 -1.75-1.75h-46.791v-7.1a1.75 1.75 0 0 0 -2.461-1.6l-39.807 17.693a1.751 1.751 0 0 0 -1.039 1.6v79.615a1.751 1.751 0 0 0 1.039 1.6l39.807 17.692a1.75 1.75 0 0 0 2.461-1.6v-7.1h46.791a1.75 1.75 0 0 0 1.75-1.75v-38.65a1.75 1.75 0 0 0 -1.75-1.75zm-50.291 46.558-36.307-16.138v-77.34l36.307-16.138z"/></svg>
                                                {{ __('Log Out') }}
                                            </x-dropdown-link>
                                        </form>
                                    </x-slot>
                            </x-dropdown>
        
        
                        </div>
                    </div>
                    
                </li>

          

                


            </ul>
        </div>
    </div>
</div>

<!-- BUY ME A BEER AND HELP SUPPORT OPEN-SOURCE RESOURCES -->
<div class="flex items-end justify-end fixed bottom-0 right-0 mb-4 mr-4 z-10">
    <div>
        <a title="Buy me a beer" href="#" target="_blank" class="block w-16 h-16 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:rotate-12">
            <img class="object-cover object-center w-full h-full rounded-full" src="{{URL::asset('imagen/anadir.png')}}"/>
        </a>
    </div>
</div>
   

</div>