{{--

  Heads up! 👋

  Plugins:
    - @tailwindcss/forms

--}}

<div class="relative">

    <label for="{{ $name }}" class="sr-only"> {{ $label }} </label>

    <input
        type="{{ $type }}"
        id="{{ $name }}"
        name="{{ $name }}"
        class="w-full rounded-md border-gray-200 py-2.5 pe-10 shadow-sm sm:text-sm"
        {{ $attributes }}
    />

    <span class="absolute inset-y-0 end-0 grid w-10 place-content-center">

    <button type="button" class="text-gray-600 hover:text-gray-700">

        <span class="sr-only">{{ $label }}</span>

        {{ $slot }}

    </button>

  </span>
</div>
