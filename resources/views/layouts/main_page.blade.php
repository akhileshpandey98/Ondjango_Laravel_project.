 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     {{-- use title page --}}
     <title>@yield('title')</title>
     <!-- Add your CSS cdn files here -->
     <link href="{{ asset('css\custom.css') }}" rel="stylesheet" />
     <link href="{{ asset('css\bootstrap_cdn.css') }}" rel="stylesheet" />
     {{-- Add yous js cdn  files --}}
     <script src="{{ asset('js\js_cdn.js') }}"></script>
     {{-- animation Aos css --}}
     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

   
 </head>

 <body>

     <header>
         <!-- Your header content -->
         @include(' layouts\header')
     </header>



     <main>
         {{-- <div class="container-fluid bg-warning"> --}}

         @yield('main_page-section')

         {{-- end container-fluid --}}
         {{-- </div> --}}

     </main>



     <footer>
         <!-- Your footer content -->
         @include('layouts.footer')
     </footer>
    

     <!-- Add your JS aos Animaruin here -->
     <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
     <script>
        AOS.init();
      </script>
 </body>

 </html>
