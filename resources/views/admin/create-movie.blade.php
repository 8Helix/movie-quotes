<x-layout>
    <div class="sm:mx-auto sm:w-full sm:max-w-md mt-6">
        <h2 class="text-center text-2xl font-bold text-white">{{ __('texts.movie') }}</h2>

        <div class="px-4 sm:rounded-lg sm:px-10">
            <form method="POST" action="{{ route('movies.store') }}" class="space-y-6" enctype="multipart/form-data">
                @csrf

                <x-form.textarea name="title_en" title="{{ __('texts.movie_title_en') }}" />
                <x-form.textarea name="title_ka" title="{{ __('texts.movie_title_en') }}" />

                <x-form.input name="thumbnail" title="{{ __('texts.movie_poster') }}" type="file" />

                <x-submit-button>{{ __('texts.add_movie') }}</x-submit-button>
            </form>
        </div>
    </div>
</x-layout>
