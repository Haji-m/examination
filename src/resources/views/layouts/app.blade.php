<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashonablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css) }}" >
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" >
    @yield('css')
</head>

<body>
    <header>
        <h1 class="title">FashonablyLate</h1>
        @yield('header')
    </header>
    <main>
        @yield('content')
    </main>