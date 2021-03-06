<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="{{ $page->meta_description ?? $page->siteDescription }}">

    <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}" />
    <meta property="og:description" content="{{ $page->siteDescription }}" />

    <title>{{ $page->siteName }}{{ $page->title ? ' | ' . $page->title : '' }}</title>

    <link rel="home" href="{{ $page->baseUrl }}">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    
    <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

    @stack('meta')

    @if ($page->production)
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-80050463-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-80050463-3');
    </script>
    @endif

    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
</head>

<body class="flex flex-col justify-between min-h-screen text-gray-800 leading-normal font-sans" >
    <header class="w-full bg-top bg-cover overflow-hidden lightBlueGradient" style="/*background-image: url('/assets/img/1974.svg')*/" role="banner" >
        <div class="relative">
            <div class="fixed top-0 left-0 w-full z-40 lightBlueGradient md:static  md:px-4 md:py-4 lg:px-8">
                <div class="flex items-center w-full max-w-5xl mx-auto ">
                    <div class="flex felx-1 items-center pl-5">
                        <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center">
                            <img class="h-8 md:h-10 mr-3 text-gray-100" src="/assets/img/logo-2.svg"
                                alt="{{ $page->siteName }} logo" />
                        </a>
                    </div>
    
                    <div id="vue-search" class="flex flex-auto justify-end items-center">
                        <search></search>
                    </div>
                    <div class="flex flex-row-reverse md:flex-row">
                        @include('_nav.menu')
    
                        @include('_nav.menu-toggle')
                    </div>
                </div>
            </div>
            <div>
                @yield('extra-header')
            </div>
        </div>
    </header>

    @include('_nav.menu-responsive')

    <main role="main" class="w-full overflow-hidden flex-auto whiteGradient">
        @yield('body')
    </main>

    <footer class="w-full overflow-hidden border-t-2 bg-gray-800 text-gray-500 text-center pt-12 py-4" role="contentinfo">
        <ul class="flex flex-col  justify-center">
            <li class="text-xs">&copy;Georgi</a> {{ date('Y') }}</li>
            <li class="text-xs"><a href="https://www.freepik.com/free-photos-vectors/background">Background vector created by starline - www.freepik.com</a></li>
        </ul>
    </footer>

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

    @stack('scripts')
</body>

</html>