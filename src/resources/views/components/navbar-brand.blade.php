<x-slot name="brand">
    <a class="navbar-brand {{ $attributes->get('class') }}" href="{{ $link->href }}" target="{{ $link->target }}"
        {{ $attributes->except('class') }}>
        {{ $slot }}
    </a>
</x-slot>
