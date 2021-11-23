<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no">
<link rel="manifest" href="/manifest.json">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png?v=rMBWbbb2wK">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png?v=rMBWbbb2wK">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png?v=rMBWbbb2wK">
<link rel="manifest" href="/site.webmanifest?v=rMBWbbb2wK">
<link rel="mask-icon" href="/safari-pinned-tab.svg?v=rMBWbbb2wK" color="#5bbad5">
<link rel="shortcut icon" href="/favicon.ico?v=rMBWbbb2wK">
<meta name="msapplication-TileColor" content="#f49c35">
<meta name="theme-color" content="#ffffff">



@if (Route::currentRouteName() == 'content' and isset($nach))
    <title>{{ $nach->title }}</title>
    <!-- Para colocar title do SEO exemplo: $nach->seo_title -->
    @isset($nach->additional_fields['17'])
    <meta name="description" content="{!! \Str::limit(strip_tags($nach->additional_fields['17']), 285, ' ...') !!}">
    <meta property="og:description" content="{!! \Str::limit(strip_tags($nach->additional_fields['17']), 285, ' ...') !!}">
    @endisset
    <meta property="og:type" content="article">
    <meta property="article:author" content="{{ $nach->user->name }}">
    <meta property="article:published_time" content="{{ $nach->created_at->toW3CString() }}">
    <meta property="og:title" content="Stellenangebot: {{ $nach->title}}">
    <meta property="og:site_name" content="{{ config('settings.name') }}">
    <meta property="og:url" content="{{ \Request::url() }}">
    @if ($nach->image)
    <meta property="og:image" content="{{ asset('uploads/' . $nach->image) }}">
    @else
    <meta property="og:image" content="{{ $nach->user->gravatar() }}">
    @endif
    @if(App::environment('production'))
    <?php
    $employmentType = "";
    if(isset($nach->additional_fields['13'])){
        if ($nach->additional_fields['13'] == 'Praktikum') {
            $employmentType = "INTERN";
        }
        if ($nach->additional_fields['13'] == 'Vollzeit') {
            $employmentType = "FULL_TIME";
        }
        if ($nach->additional_fields['13'] == 'Teilzeit') {
            $employmentType = "PART_TIME";
        }
        if ($nach->additional_fields['13'] == 'Ausbildung') {
            $employmentType = "INTERN";
        }
    }
    function escapeJsonString($value)
    {
        $escapers = array("\\", "/", "\"", "\n", "\r", "\t", "\x08", "\x0c");
        $replacements = array("\\\\", "\\/", "\\\"", "\\n", "\\r", "\\t", "\\f", "\\b");
        $result = str_replace($escapers, $replacements, $value);
        return $result;
    }
    ?>
    @isset ($nach->additional_fields['20']['postalCode'])
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "JobPosting",
            "title": "{{ $nach->title }}",
            "description": "{!! escapeJsonString($nach->additional_fields['17']) !!}",
            "datePosted": "{{ $nach->updated_at->format('Y-m-d') }}",
            "validThrough": "{{ $nach->updated_at->addDays(90)->toIso8601String() }}",
            "employmentType": "{{ $employmentType }}",
            "hiringOrganization": {
                "@type": "Organization",
                "name": "{{ $nach->user->name }}",
                "sameAs": "{{ isset($nach->user->social_networks['site']) ? $nach->user->social_networks['site'] : '' }}",
                "logo": "{{ $nach->user->gravatar() }}?s=120&d=identicon&r=PG"
            },
            "jobLocation": {
                "@type": "Place",
                "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "{{ $nach->additional_fields['20']['streetAddress'] }}",
                    "addressLocality": "{{ $nach->additional_fields['20']['addressLocality'] }}",
                    "addressRegion": "{{ $nach->additional_fields['20']['addressRegion'] }}",
                    "postalCode": "{{ $nach->additional_fields['20']['postalCode'] }}",
                    "addressCountry": "{{ $nach->additional_fields['20']['addressCountry'] }}"
                }
            }
        }
    </script>
    @endisset
@endif

@elseif (\Route::currentRouteName() == 'content' and isset($list))
    <title>{{removeHtmlTags(showListTitle($list, $filters))}}</title>
    <!-- Para colocar title do SEO exemplo: $listModel->seo_title -->
    <meta name="description" content="Finden Sie hier Ihren Job in der Region {{ $list->name }} und bewerben Sie sich ohne Registrierung bei Top-Arbeitgebern.">
    <meta property="og:description" content="Finden Sie hier Ihren Job in der Region {{ $list->name }} und bewerben Sie sich ohne Registrierung bei Top-Arbeitgebern.">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Aktuelle Stellenangebote in {{ $list->name }}">
    <meta property="og:site_name" content="{{ config('settings.name') }}">
    <meta property="og:url" content="{{ \Request::url() }}">
    @if ($list->image)
    <meta property="og:image" content="{{ asset('uploads/lists/' . $list->image) }}">
    @else
    <meta property="og:image" content="{{ asset('uploads/' . config('settings.image')) }}">
    @endif

    <link rel="canonical" href="{{url('/') .'/'. $list->slug }}" />



@elseif (\Route::currentRouteName() == 'author.get' and isset($author))
    <title>Offene Jobangebote bei {{ $author->name }}</title>
    <meta name="description" content="Finden Sie hier Ihren Job bei {{ $author->name }}  und bewerben Sie sich direkt online">
    <meta property="og:description" content="Finden Sie hier Ihren Job bei {{ $author->name }}  und bewerben Sie sich direkt online">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Offene Jobangebote bei {{ $author->name }}">
    <meta property="og:site_name" content="{{ config('settings.name') }}">
    <meta property="og:url" content="{{ \Request::url() }}">
    <meta property="og:image" content="{{ $author->gravatar() }}?s=120&d=identicon&r=PG">


@else
    <title>@yield('meta_title', '')</title>
    <meta name="description" content="@yield('meta_description', \Str::limit(strip_tags(config('settings.description')), 285, ' ...'))">
    <meta property="og:description" content="@yield('meta_og_description', \Str::limit(strip_tags(config('settings.description')), 285, ' ...'))">
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('meta_og_title', config('settings.name'))">
    <meta property="og:site_name" content="@yield('meta_og_site_name', config('settings.name'))">
    <meta property="og:url" content="{{ \Request::url() }}">
    <meta property="og:image" content="@yield('meta_og_image', asset('uploads/' . config('settings.image')))">

    <link rel="canonical" href="{{ \Request::url() }}" />

@endif

@if (!empty(config('settings.favicon_image')))
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('uploads/' . config('settings.favicon_image')) }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('uploads/' . config('settings.favicon_image')) }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('uploads/' . config('settings.favicon_image')) }}">
@endif