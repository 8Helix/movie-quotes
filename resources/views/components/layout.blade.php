<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Quotes</title>
    <script defer src="https://unpkg.com/alpinejs@3.10.3/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
</head>

<body class="relative z-0 bg-gray-background h-screen">
    <div class="absolute top-1/2 left-6 z-10 -translate-y-1/2">
        <a href="{{ route('locale.change', 'en') }}"
            class="{{ app()->currentLocale() == 'en' ? 'bg-white text-dark-gray' : '' }} border-2 border-bg-white rounded-full
                   w-8 h-8 flex justify-center items-center text-white hover:bg-white hover:text-dark-gray">en</a>
        <a href="{{ route('locale.change', 'ka') }}"
            class="{{ app()->currentLocale() == 'ka' ? 'bg-white text-dark-gray' : '' }} mt-4 border-2 border-bg-white rounded-full
                   w-8 h-8 flex justify-center items-center text-white hover:bg-white hover:text-dark-gray">ka</a>
    </div>

    @auth
        <x-admin-panel></x-admin-panel>
    @else
        <div class="block w-full h-20">
            <a href="{{ route('auth') }}"
                class="float-right rounded-md mt-6 mr-8 px-4 py-2 font-medium
                                hover:text-matrix-green text-white bg-gray-background text-center border-2 border-matrix-green focus:outline-none">
                {{ __('texts.log_in') }}
            </a>
        </div>
    @endauth


    {{ $slot ?? null }}
</body>

</html>
