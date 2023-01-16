<x-layout>
    <div class="sm:mx-auto sm:w-full sm:max-w-md mt-6">
        <h2 class="text-center text-2xl font-bold text-white">{{ __('texts.edit_quote') }}</h2>

        <div class="px-4 sm:rounded-lg sm:px-10">
            <form method="POST" action="{{ route('quotes.update', $quote->id) }}" class="space-y-6"
                enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <x-form.textarea name="body_en" title="{{ __('texts.quote_en') }}">
                    {{ old('body_en', $quote->getTranslation('body', 'en')) }}
                </x-form.textarea>
                <x-form.textarea name="body_ka" title="{{ __('texts.quote_ka') }}">
                    {{ old('body', $quote->getTranslation('body', 'ka')) }}
                </x-form.textarea>

                <x-form.dropdown :movies="$movies" movie_id="{{ $quote->movie_id }}" />

                <x-submit-button>{{ __('texts.update_quote') }}</x-submit-button>
            </form>
        </div>
    </div>
</x-layout>
