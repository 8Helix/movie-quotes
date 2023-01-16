@props(['name', 'title'])

<div class="mt-1">
    <label for="{{ $name }}" class="block text-sm font-medium text-white">{{ $title }}</label>
    <input id="{{ $name }}" name="{{ $name }}" {{ $attributes(['value' => old($name)]) }}
        class="block w-full appearance-none mt-2 rounded-md border border-gray-300 px-3 py-2
                                bg-white shadow-sm focus:border-matrix-green focus:outline-none
                                focus:ring-matrix-green sm:text-sm" />

    @error($name)
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>
