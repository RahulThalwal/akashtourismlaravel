@php
    $siteName = 'Akash Tourism';
    $siteUrl = rtrim(env('SEO_SITE_URL', 'https://akashjourney.com'), '/');
    $seoTitle = $seoTitle ?? $siteName;
    $seoDescription = $seoDescription ?? 'Thoughtful journeys through Delhi, Agra, Jammu & Kashmir, and Himachal Pradesh.';
    $seoKeywords = $seoKeywords ?? null;
    $seoImage = $seoImage ?? 'https://images.unsplash.com/photo-1524492412937-b28074a5d7da?auto=format&fit=crop&w=1400&q=88';
    $seoUrl = $seoUrl ?? url()->current();
    $seoType = $seoType ?? 'website';
    $seoSchema = $seoSchema ?? [
        '@context' => 'https://schema.org',
        '@type' => 'WebSite',
        'name' => $siteName,
        'url' => $siteUrl,
        'description' => $seoDescription,
    ];
@endphp
<title>{{ $seoTitle }}</title>
<meta name="description" content="{{ $seoDescription }}">
@if ($seoKeywords)<meta name="keywords" content="{{ $seoKeywords }}">@endif
<meta name="robots" content="index, follow, max-image-preview:large">
<link rel="canonical" href="{{ $seoUrl }}">
<meta property="og:locale" content="en_IN">
<meta property="og:type" content="{{ $seoType }}">
<meta property="og:site_name" content="{{ $siteName }}">
<meta property="og:title" content="{{ $seoTitle }}">
<meta property="og:description" content="{{ $seoDescription }}">
<meta property="og:url" content="{{ $seoUrl }}">
<meta property="og:image" content="{{ $seoImage }}">
<meta property="og:image:alt" content="{{ $seoTitle }}">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $seoTitle }}">
<meta name="twitter:description" content="{{ $seoDescription }}">
<meta name="twitter:image" content="{{ $seoImage }}">
<meta name="twitter:image:alt" content="{{ $seoTitle }}">
<script type="application/ld+json">@json($seoSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE)</script>
