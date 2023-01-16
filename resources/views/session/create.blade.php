<x-layout>
    <div class="flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-white">{{ __('texts.sing_into') }}</h2>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-gray-background border-2 border-matrix-green py-8 px-4 shadow sm:rounded-lg sm:px-10">
                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf

                    <x-form.input name="email" type="email" title="{{ __('texts.email_address') }}" />
                    <x-form.input name="password" type="password" title="{{ __('texts.password') }}" />

                    <x-submit-button>{{ __('texts.log_in') }}</x-submit-button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
