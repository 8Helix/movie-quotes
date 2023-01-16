<x-layout>
    <div class="absolute top-1/4 w-screen flex justify-center">
        <div class="text-center w-1/3">
            <img src="{{ asset('storage/' . $movie->thumbnail) }}" alt="Movie Poster" class="w-full">
            @if ($quote)
                <h2 class="text-white text-2xl font-normal mt-7"><q>{{ $quote->body }}</q></h2>
            @endif
            <a href="{{ route('movie', $movie->id) }}">
                <h1 class="text-white font-normal text-2xl underline mt-10">{{ $movie->title }}</h1>
            </a>
        </div>
    </div>
</x-layout>
