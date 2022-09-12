<ul class="navbar-nav {{ $attributes->get('class') }}" {{ $attributes->except('class') }}>
    @foreach ($links as $link)
        <x-bs-nav-link :link="$link" />
    @endforeach
</ul>
{{ $slot }}
