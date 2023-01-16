<tr>
    {{ $slot }}
    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
        <a href="{{ route($name . '.edit', $id) }}"
            class="inline-block mr-10 text-indigo-600 hover:text-indigo-900">{{ __('texts.edit') }}</a>
        <form method="POST" action="{{ route($name . '.destroy', $id) }}" class="inline-block">
            @csrf
            @method('DELETE')

            <button class="text-red-400 hover:text-red-600 inline-block">{{ __('texts.delete') }}</button>
        </form>
    </td>
</tr>
