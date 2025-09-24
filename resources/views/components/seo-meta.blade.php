@props(['meta' => []])

@if(!empty($meta['title']))
    <title>{{ $meta['title'] }}</title>
@endif

@if(!empty($meta['description']))
    <meta name="description" content="{{ $meta['description'] }}">
@endif

@if(!empty($meta['keywords']))
    <meta name="keywords" content="{{ $meta['keywords'] }}">
@endif

@if(!empty($meta['canonical_url']))
    <link rel="canonical" href="{{ $meta['canonical_url'] }}">
@endif

@php
    $robots = [];
    if ($meta['no_index'] ?? false) {
        $robots[] = 'noindex';
    }
    if ($meta['no_follow'] ?? false) {
        $robots[] = 'nofollow';
    }
@endphp

@if(!empty($robots))
    <meta name="robots" content="{{ implode(', ', $robots) }}">
@endif

{{-- Open Graph Tags --}}
@if(!empty($meta['og_title']))
    <meta property="og:title" content="{{ $meta['og_title'] }}">
@endif

@if(!empty($meta['og_description']))
    <meta property="og:description" content="{{ $meta['og_description'] }}">
@endif

@if(!empty($meta['og_image']))
    <meta property="og:image" content="{{ $meta['og_image'] }}">
@endif

@if(!empty($meta['canonical_url']))
    <meta property="og:url" content="{{ $meta['canonical_url'] }}">
@endif

<meta property="og:type" content="website">
<meta property="og:site_name" content="{{ config('app.name') }}">

{{-- Twitter Card Tags --}}
<meta name="twitter:card" content="summary_large_image">
@if(!empty($meta['og_title']))
    <meta name="twitter:title" content="{{ $meta['og_title'] }}">
@endif
@if(!empty($meta['og_description']))
    <meta name="twitter:description" content="{{ $meta['og_description'] }}">
@endif
@if(!empty($meta['og_image']))
    <meta name="twitter:image" content="{{ $meta['og_image'] }}">
@endif
