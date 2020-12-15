@props(['tip', 'color' => 'galaxy'])

<div x-data
    x-init="tippy($refs.tippy, { content: '{{ $tip }}', theme: '{{ $color }}'})"
    {{ $attributes->merge(['class' => 'inline-flex relative']) }}
>
    <span x-ref="tippy" class="cursor-pointer">
        {{ $slot }}
    </span>
</div>
