<!DOCTYPE html>
<html lang="en-gb">
<head>
    <title>Record transfer report - Autumn 2016 | The National Archives</title>

    @include('partials.meta')
    @include('partials.styles')
    @include('partials.header_scripts')

</head>
<body>

@include('partials.page_header')
@include('partials.mega_menu')

<div id="page_wrap" class="container" role="main">

    @include('partials.breadcrumbs')

    <main role="main">
        @yield('content')
    </main>
</div>

@include('partials.footer')
@include('partials.footer_scripts')

</body>
</html>