@props(['name', 'button', 'slug'])

<x-layout>
    <div class="px-4 sm:px-6 lg:px-8 w-2/3 mx-auto mt-12">
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-xl font-semibold text-white">{{ $name }}</h1>
            </div>
            <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                <a href="{{ route($slug . '.create') }}"
                    class="inline-flex items-center justify-center rounded-md border border-transparent
                                        bg-matrix-green px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-dark-green
                                        focus:outline-none focus:ring-2 focus:ring-dark-green focus:ring-offset-2 sm:w-auto">
                    {{ $button }}
                </a>
            </div>
        </div>
        <div class="mt-8 flex flex-col">
            <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
