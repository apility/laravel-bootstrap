<form class="d-flex {{ $attributes->get('class') }}" action="{{ $action }}" method="{{ $method }}" {{ $attributes->except('class') }}>
    <input class="form-control me-2" name="query" type="search" placeholder="{{ $placeholder }}"
        aria-label="{{ $placeholder }}">

    <x-dynamic-component :component="$resolveComponent('button')" color="success" outline type="submit">
        @if (!$slot->isEmpty())
            {{ $slot }}
        @else
            {{ $label }}
        @endisset
    </x-dynamic-component>
</form>
