<nav class="navbar navbar-expand-lg {{ $variant ? "bg-$variant" : null }} {{ $dark ? 'navbar-dark' : null }} {{ $light ? 'navbar-light' : null }} {{ $attributes->get('class') }}"
    {{ $attributes->except('class') }}>
    <div class="container-fluid">
        @isset($brand)
            {{ $brand }}
        @endisset

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#{{ $attributes->has('id') ? $attributes->get('id') : "$prefix-navbarNavDropdown" }}" aria-controls="{{ $attributes->has('id') ? $attributes->get('id') : "$prefix-navbarNavDropdown" }}"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="{{ $attributes->has('id') ? $attributes->get('id') : "$prefix-navbarNavDropdown" }}">
            <x-bs-nav :links="$links" />
        </div>

        {{ $slot }}
    </div>
</nav>
