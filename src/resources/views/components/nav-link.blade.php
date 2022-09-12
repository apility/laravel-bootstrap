<li class="{{ $attributes->get('class', 'nav-item') }}" {{ $attributes->except('class') }}>
    @if ($link->children->count())
        <x-bs-nav-dropdown :link="$link" />
    @else
        <a class="nav-link {{ $link->disabled ? 'disabled' : null }} {{ $link->active ? 'active' : null }}"
            {!! !$link->disabled ?: 'tabindex="-1"' !!} {!! !$link->disabled ?: 'aria-disabled="true"' !!} {!! !$link->active ?: 'aria-current="page"' !!} href="{{ $link->href }}"
            target="{{ $link->target }}">
            {{ $link->title }}
        </a>
    @endif
</li>
