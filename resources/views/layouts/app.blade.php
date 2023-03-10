<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  @livewireStyles
</head>

<body class="font-sans text-gray-900 text-sm bg-gray-background">
  <header class="flex flex-col md:flex-row items-center justify-between px-8 py-4">
    <a href="/">
      <img src="{{asset('img/logo.svg')}}" alt="logo">
    </a>
    <div class="flex items-center mt-2 md:mt-0">
      @if (Route::has('login'))
      <div class="px-6 py-4">
        @auth
        <form method="POST" action="{{ route('logout') }}">
          @csrf

          <a href="{{route('logout')}}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
            {{ __('Log Out') }}
          </a>
        </form>
        @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
        @endif
        @endauth
      </div>
      @endif
      <a href="#">
        <img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp&f=y" alt="avatar"
          class="w-10 h-10 rounded-full">
      </a>
    </div>
  </header>

  <main class="container mx-auto flex flex-col md:flex-row max-w-custom">
    <div class="w-70 mx-auto md:mr-5 md:mx-0">
      <div class="border-2 rounded-xl mt-16 bg-white md:sticky md:top-8" style="
        border-image-source: linear-gradient(to bottom, rgba(50, 138, 241, 0.22), rgba(99, 123, 255, 0));
        border-image-slice: 1;
        background-image: linear-gradient(to bottom, #ffffff, #ffffff), linear-gradient(to bottom, rgba(50, 138, 241, 0.22), rgba(99, 123, 255, 0));
        background-origin: border-box;
        background-clip: content-box, border-box;
      ">
        <div class="text-center px-6 py-2 pt-6">
          <h3 class="font-semibold text-base">Add an Idea</h3>
          <p class="text-xs mt-4">
            @auth
            Let us know what you would like and we'll take a look over!
            @else
            Please login to create an idea
            @endauth
          </p>
        </div>

        @auth
        <livewire:create-idea />
        @else
        <div class="my-6 text-center">
          <a href="{{route('login')}}"
            class="inline-block justify-center w-1/2 h-11 text-xs bg-blue font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3 text-white">
            Login
          </a>
          <a href="{{route('register')}}"
            class="inline-block mt-4 justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
            Sign Up
          </a>
        </div>
        @endauth
      </div>
    </div>
    <div class="w-full px-2 md:w-175 md:px-0">
      <livewire:status-filters />
      <div class="mt-8">
        {{ $slot }}
      </div>
    </div>
  </main>

  @livewireScripts
</body>

</html>