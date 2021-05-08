<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->meta_description ?? $page->siteDescription }}">

        <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:description" content="{{ $page->siteDescription }}" />

        <title>{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="icon" href="/assets/img/markable-logo.svg">


        @stack('meta')

        {{-- Jquery --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <script type="application/ld+json"> 
            {!! $page->siteJsonLd !!}
        </script>

        @if ($page->production)
            {!! $page->siteAnalytics !!}
        @endif
        <link rel="preconnect" href="https://fonts.gstatic.com">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Rubik&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        

    </head>

    <body>
        <div id="app" class="flex flex-col justify-between min-h-screen bg-white text-gray-800 leading-normal">
            <header class="flex items-center shadow bg-white border-b h-24 py-4 w-full absolute z-10" role="banner">
                <div class="container flex items-center max-w-9/10 mx-auto">
                    <div class="flex items-center justify-between w-full">
                        <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center">
                            <img class="h-8 md:h-16 mr-3 rounded-full" src="/assets/img/markable-logo.svg" alt="{{ $page->siteName }} logo" />

                            <h2 class="text-lg md:text-2xl text-darkBlueGrey font-semibold transition hover:text-blue-600 my-0">Markable</h2>
                        </a>

                        <div class="nav-links">
                            <a class="text-lg md:text-2xl text-darkBlueGrey font-semibold transition hover:text-blue-600 my-0 mx-4" href="#origin">About</a>
                            <a class="text-lg md:text-2xl text-darkBlueGrey font-semibold transition hover:text-blue-600 my-0 mx-4" href="#contact-us">Contact Us</a>
                        </div>
                    </div>
                </div>
            </header>

            @include('_nav.menu-responsive')

            <main role="main" class="flex-auto w-full">
                @yield('body')
            </main>

            <footer class="bg-mainBlue text-sm pb-8" role="contentinfo">
                <div class="w-9/10 mx-auto flex flex-col sm:flex-row justify-between items-center">
                    <h4 class="text-white sm:mt-0 mt-4 sm:mb-0 mb-4">Markable</h4>
                    {{-- <div class="flex">
                        <a href="https://twitter.com/markmattjames" class="social-icon mr-2" target="_blank"><img class="w-8 transition" src="/assets/img/twitter-5-xl.png" alt=""></a>
                        <a href="https://www.instagram.com/mattmarkjames/" class="social-icon mr-2" target="_blank"><img class="w-8 transition" src="/assets/img/instagram-5-64.png" alt=""></a>
                        <a href="https://www.facebook.com/matthew.james.58760608" class="social-icon mr-2" target="_blank"><img class="w-8 transition" src="/assets/img/facebook-5-64.png" alt=""></a>
                    </div> --}}
                    <div>
                        <div class="flex items-center sm:mt-8 mt-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#282651" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                            </svg>
                            <a href="tel:7856141661" class="text-white ml-4">(785) 614-1661</a>
                        </div>
                
                        <div class="flex items-center mt-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#282651" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <rect x="3" y="5" width="18" height="14" rx="2" />
                                <polyline points="3 7 12 13 21 7" />
                            </svg>
                            <a href="mailto:jamesmmatt@gmail.com" class="text-white ml-4">jamesmmatt@gmail.com</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

        @stack('scripts')
        <script>
            jQuery($ => {
              // The speed of the scroll in milliseconds
              const speed = 1000;
          
              $('a[href*="#"]')
                .filter((i, a) => a.getAttribute('href').startsWith('#') || a.href.startsWith(`${location.href}#`))
                .unbind('click.smoothScroll')
                .bind('click.smoothScroll', event => {
                  const targetId = event.currentTarget.getAttribute('href').split('#')[1];
                  const targetElement = document.getElementById(targetId);
          
                  if (targetElement) {
                    event.preventDefault();
                    $('html, body').animate({ scrollTop: $(targetElement).offset().top - 80 }, speed);
                  }
                });
            });
          </script>
    </body>
</html>
