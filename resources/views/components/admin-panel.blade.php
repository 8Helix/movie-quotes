<div class="flex items-center justify-between px-8 h-20 border-b-2 border-matrix-green">
    <ul class="flex items-center gap-8">
        <li>
            <a href="{{ route('home') }}" class="text-white">{{ __('texts.home') }}</a>
        </li>

        <li>
            <a href="{{ route('movies.index') }}" class="text-white">{{ __('texts.movies') }}</a>
        </li>

        <li>
            <a href="{{ route('quotes.index') }}" class="text-white">{{ __('texts.quotes') }}</a>
        </li>
    </ul>
    <div x-data="{ show: false }" @click.away="show = false" class="float-right relative inline-block">
        <div @click="show = !show" class="shadow">
            <button id="button" type="button"
                class="inline-flex w-28 hover:text-matrix-green justify-center rounded-md bg-gray-background border-2 border-matrix-green focus:outline-none px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-gray-50">
                {{ auth()->user()->username }}
            </button>
        </div>
        <div x-show="show" style="display: none"
            class="absolute mt-2 w-28 rounded-md bg-gray-background shadow-lg ring-1 border-2 border-matrix-green  ring-matrix-green ring-opacity-5">
            <div class="py-1">
                <form method="POST" action="{{ route('logout') }}" role="none">
                    @csrf
                    <button type="submit"
                        class="text-white hover:text-matrix-green block w-full px-4 py-2 text-sm text-center focus:outline-none">
                        {{ __('texts.sing_out') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
