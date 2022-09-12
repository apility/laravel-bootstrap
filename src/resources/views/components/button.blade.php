<{{ $tag }} {{ $disabled && $tag === 'button' ? 'disabled' : null }} {!! $href ? "href=\"$href\"" : null !!} {!! $type ? "type=\"$type\"" : null !!} class="btn {{ $large ? "btn-lg" : null }} {{ $small ? "btn-sm" : null }} {{ $color ? ($outline ? "btn-outline-$color" : "btn-$color") : null }} {{ $disabled && $tag !== 'button' ? 'disabled' : null }} {{ $attributes->get('class') }}" {!! $tag !== 'button' ? 'role="button"' : null !!} {!! $disabled ? 'aria-disabled="true"' : null !!} {{ $attributes->except('class') }}>
    {{ $slot }}
</{{ $tag }}>
