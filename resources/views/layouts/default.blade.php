<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
@include('includes.head')
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">    
    @include('includes.header')
    @yield('content')
</body>

</html>