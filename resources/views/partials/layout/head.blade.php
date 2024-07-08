<meta charset="utf-8">
<x-feed-links />
<link rel="dns-prefetch" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="dns-prefetch" href="https://kit.fontawesome.com">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>@yield('title') - Ray</title>
<meta name="description" content="@yield('description')">
<link rel="canonical" href="{{ url()->current() }}"/>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;400;600;700;800&display=swap" rel="text/css">
<script src="https://kit.fontawesome.com/c170d0c6e5.js" crossorigin="anonymous"></script>

@vite(['resources/css/app.css'])

<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<meta name="msapplication-TileColor" content="#442595">
<meta name="theme-color" content="#ffffff">

<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:creator" content="@spatie_be"/>
<meta name="twitter:site" content="@spatie_be"/>
<meta name="twitter:title" content="@yield('title')"/>
<meta name="twitter:description"
      content="@yield('description')"/>
<meta name="twitter:image" content="https://myray.app/images/social-card.png"/>

<meta property="og:site_name" content="Ray">
<meta property="og:locale" content="en_US">
<meta property="og:url" content="{{ url()->current() }}"/>
<meta property="og:type" content="product"/>
<meta property="og:title" content="@yield('title')"/>
<meta property="og:description"
      content="@yield('description')"/>
<meta property="og:image" content="https://myray.app/images/social-card.png"/>


@bukStyles()
@bukScripts()

<script src="https://cdn.usefathom.com/script.js" data-site="AUCCHTBP" defer></script>
@vite(['resources/js/app.js'])
