@props(['head'])

<table class="min-w-full divide-y divide-gray-300">
    <thead class="bg-gray-50">
        <tr>
            {{ $head }}
            <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                <span class="sr-only">Edit Or Delete</span>
            </th>
        </tr>
    </thead>

    {{ $slot }}
</table>
