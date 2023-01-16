@props(['movies', 'movie_id' => null])

<div class="mt-1">
    <label for="movie_id" class="block text-sm font-medium text-white">{{ __('texts.movie') }}</label>

    <select name="movie_id" id="movie_id" class="mt-2">
        @foreach ($movies as $movie)
            <option value="{{ $movie->id }}" {{ $movie->id == $movie_id ? 'selected' : '' }}>
                {{ $movie->title }}</option>
        @endforeach
    </select>

    @error('movie_id')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>
