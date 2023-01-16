<x-board.frame name="{{ __('texts.movies') }}" button="{{ __('texts.add_movie') }}" slug="movies">
    <x-board.table>
        <x-slot name="head">
            <x-board.table-head>{{ __('texts.title') }}</x-board.table-head>
        </x-slot>
        @foreach ($movies as $movie)
            <x-board.table-body>
                <x-board.table-row name="movies" :id="$movie->id">
                    <x-board.table-data>{{ $movie->title }}</x-board.table-data>
                </x-board.table-row>
            </x-board.table-body>
        @endforeach
    </x-board.table>
</x-board.frame>
