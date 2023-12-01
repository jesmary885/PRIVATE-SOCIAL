<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->

        <link rel="stylesheet" href="https://cdn.plyr.io/3.7.2/plyr.css" />

        <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">

        <link rel="preconnect" href="https://fonts.googleapis.com">.  
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href='https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,300;0,700;1,400;1,700&display=swap'
            rel="stylesheet">

        <link rel="stylesheet" href='https://fonts.googleapis.com/css2?family=Dancing+Script&family=Josefin+Sans:ital,wght@0,100;0,300;0,700;1,400;1,700&display=swap'>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Dancing+Script&family=Josefin+Sans:ital,wght@0,100;0,300;0,700;1,400;1,700&family=Tinos:wght@400;700&display=swap">
     

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js"></script>


    <script src="//cdn.jsdelivr.net/npm/hls.js@latest"></script>
      {{-- plyr--}}
    <script src="https://cdn.plyr.io/3.7.2/plyr.js"></script>
  

    {{-- flatpickr--}}



        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">

        <div class="min-h-screen bg-gray-100 relative" >
            @livewire('navigation')

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
            
        </div>

        @stack('modals')

        @livewireScriptConfig 
        

        @stack('script')
    </body>
</html>
