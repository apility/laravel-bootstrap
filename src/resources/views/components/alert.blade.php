<div class="alert {{ $color ? "alert-$color" : null }} {{ $dismissible ? 'alert-dismissible' : null }} {{ $fade ? 'fade' : null }} {{ $show ? 'show' : null }} {{ $attributes->get('class') }}"
    role="alert" {{ $attributes->except('class') }}>
    {{ $slot }}
    @if ($dismissible)
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    @endif
</div>
