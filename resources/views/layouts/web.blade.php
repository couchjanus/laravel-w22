<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="asset('/icons/favicon.ico')" />
    <link rel="apple-touch-icon" sizes="76x76" href="asset('/icons/apple-icon.png')" />

    <title>Home page - {{ config('app.name', 'My Site')}} | @yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    @include('layouts.icons')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>
<body  class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">
  <x-web-nav />
  {{ $carousel ?? '' }}

  <section class="bg-white py-8">

    <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">

        {{ $header ?? '' }}

        {{ $slot }}

    </div>

  </section>

  <x-web-footer />

  @livewireScripts
  <script src="{{asset('js/app.js')}}"></script>

</body>
</html>