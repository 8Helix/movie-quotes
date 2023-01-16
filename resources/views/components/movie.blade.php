<x-layout>
    <div class="absolute top-20 w-screen flex justify-center pb-16">
        <div class="w-1/3">
            <h1 class="text-white font-normal text-2xl mt-10">{{ $movie->title }}</h1>
            @foreach ($movie->quotes as $quote)
                <div class="bg-white mt-10 rounded-md">
                    <img src="{{ asset('storage/' . $movie->thumbnail) }}" alt="Movie Poster" class="w-full rounded-t-md">

                    @if ($quote)
                        <h2 class="text-dark-gray text-xl font-normal mt-7 pl-4 pb-4"><q>{{ $quote->body }}</q></h2>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
