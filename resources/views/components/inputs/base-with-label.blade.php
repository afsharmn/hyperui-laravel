<!--
  Heads up! 👋

  Plugins:
    - @tailwindcss/forms
-->

<div>

    <label for="{{ $name }}" class="block text-xs font-medium text-gray-700"> {{ $label }} </label>

    <input
        type="email"
        id="{{ $name }}"

        @if($attributes->has('placeholder'))
        placeholder="{{ $placeholder }}"
        @endif

        class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm"
    />

</div>
