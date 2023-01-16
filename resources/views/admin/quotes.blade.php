<x-board.frame name="{{ __('texts.quotes') }}" button="{{ __('texts.add_quote') }}" slug="quotes">
    <x-board.table>
        <x-slot name="head">
            <x-board.table-head>{{ __('texts.quote') }}</x-board.table-head>
            <x-board.table-head>{{ __('texts.movie') }}</x-board.table-head>
        </x-slot>
        @foreach ($quotes as $quote)
            <x-board.table-body>
                <x-board.table-row name="quotes" :id="$quote->id">
                    <x-board.table-data>{{ $quote->body }}</x-board.table-data>
                    <x-board.table-data>{{ App\Models\Movie::find($quote->movie_id)->title }}</x-board.table-data>
                </x-board.table-row>
            </x-board.table-body>
        @endforeach
    </x-board.table>
</x-board.frame>
