<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">

    <meta property="og:site_name" content="{{ $page->siteName }}" />
    <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}" />
    <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}" />
    <meta property="og:url" content="{{ $page->getUrl() }}" />
    <meta property="og:image" content="/assets/img/logo.png" />
    <meta property="og:type" content="website" />

    <meta name="twitter:image:alt" content="{{ $page->siteName }}">
    <meta name="twitter:card" content="summary_large_image">

    <title>{{ $page->siteName }}{{ $page->title ? ' | ' . $page->title : '' }}</title>

    <link rel="home" href="{{ $page->baseUrl }}">
    <link rel="icon" href="/favicon.svg">

    @stack('meta')

    @if ($page->production)
    <!-- Insert analytics code here -->
    @endif

    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

</head>

<body>

    <header class="header">
        <a href="/" class="header__link">
            <h1 class="header__title">Flears</h1>
        </a>
        <!-- <nav class="header__nav nav">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="#" class="nav__link">Something</a>
                </li>
                <li class="nav__item">
                    <a href="#" class="nav__link">Something</a>
                </li>
            </ul>
        </nav> -->
    </header>

    <main class="main">
        @yield('body')
    </main>

    <footer class="footer">
        <ul class="footer__legal-list">
            <li class="footer__legal-item">
                <a href="/general/imprint" class="footer__legal-link">Imprint</a>
            </li>
        </ul>
    </footer>

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

    @stack('scripts')
</body>

</html>