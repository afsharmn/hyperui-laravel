{{--

  Heads up! 👋

  Plugins:
    - @tailwindcss/forms

--}}

<label
    for="{{ $name }}"
    class="block overflow-hidden rounded-md border border-gray-200 px-3 py-2 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
>
    <span class="text-xs font-medium text-gray-700"> {{ $label }} </span>

    <input
        type="{{ $type }}"
        id="{{ $name }}"
        name="{{ $name }}"
        class="mt-1 w-full border-none p-0 focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
        {{ $attributes }}
    />

</label>


