<x-layout>
    <div class="sm:mx-auto sm:w-full sm:max-w-md mt-6">
        <h2 class="text-center text-2xl font-bold text-white">{{ __('texts.quote') }}</h2>
        <div class="py-8 px-4 sm:rounded-lg sm:px-10">
            <form method="POST" action="{{ route('quotes.store') }}" class="space-y-6">
                @csrf

                <x-form.textarea name="body_en" title="Quote Eng" />
                <x-form.textarea name="body_ka" title="Quote Ka" />

                <x-form.dropdown :movies="$movies" />

                <x-submit-button>{{ __('texts.add_quote') }}</x-submit-button>
            </form>
        </div>
    </div>
</x-layout>
