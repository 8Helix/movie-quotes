<x-layout>
    <div class="sm:mx-auto sm:w-full sm:max-w-md mt-6">
        <h2 class="text-center text-2xl font-bold text-white">{{ __('texts.edit_movie') }}</h2>

        <div class="px-4 sm:rounded-lg sm:px-10">
            <form method="POST" action="{{ route('movies.update', $movie->id) }}" class="space-y-6"
                enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <x-form.textarea name="title_en" title="{{ __('texts.movie_title_en') }}">
                    {{ old('title_en', $movie->getTranslation('title', 'en')) }}
                </x-form.textarea>
                <x-form.textarea name="title_ka" title="{{ __('texts.movie_title_ka') }}">
                    {{ old('title_ka', $movie->getTranslation('title', 'ka')) }}
                </x-form.textarea>

                <div class="flex mt-2">
                    <x-form.input name="thumbnail" title="{{ __('texts.movie_poster') }}" type="file" />

                    @if ($movie->thumbnail)
                        <img src="{{ asset('storage/' . $movie->thumbnail) }}" alt="Movie Poster"
                            class="rounded-xl ml-6" width="100">
                    @endif
                </div>

                <x-submit-button>{{ __('texts.update_movie') }}</x-submit-button>
            </form>
        </div>
    </div>
</x-layout>
