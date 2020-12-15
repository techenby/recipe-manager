@props([
    'placeholder' => null,
    'trailingAddOn' => null,
    'group' => null,
])

<div class="flex">
  <select {{ $attributes->merge(['class' => 'max-w-lg block focus:ring-indigo-500 dark:border-gray-400 dark:text-gray-200 dark:bg-gray-700 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md' . ($trailingAddOn || $group ? ' rounded-r-none' : '')]) }}>
    @if ($placeholder)
        <option disabled value="">{{ $placeholder }}</option>
    @endif

    {{ $slot }}
  </select>

  @if ($trailingAddOn)
    {{ $trailingAddOn }}
  @endif
</div>
