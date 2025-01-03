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
        class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm"
        {{ $attributes }}
    />

    <span class="pointer-events-none absolute inset-y-0 end-0 grid w-10 place-content-center text-gray-500">

        {{ $slot }}

    </span>

</div>
