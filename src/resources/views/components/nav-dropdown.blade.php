<a class="nav-link {{ !!$link->active ?: 'active' }} dropdown-toggle {{ $attributes->get('class') }}" {{ !!$link->active ?: 'aria-current="page"' }}
    href="{{ $link->href }}" id="{{ $attributes->has('id') ? $attributes->get('id') : $prefix('navbarDropdownMenuLink') }}" role="button" data-bs-toggle="dropdown"
    aria-expanded="false"
    {{ $attributes->except('class') }}
    >
    {{ $link->title }}
</a>
<ul class="dropdown-menu" aria-labelledby="{{ $attributes->has('id') ? $attributes->get('id') : $prefix('navbarDropdownMenuLink') }}">
    @foreach ($link->children as $child)
        <x-bs-nav-link class="dropdown-item" :link="$child" />
    @endforeach
</ul>
