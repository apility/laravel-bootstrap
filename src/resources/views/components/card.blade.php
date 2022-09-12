<div class="card {{ $attributes->get('class') }}" style="{!! $width ? "width: $width;" : null !!} {{ $attributes->get('style') }}" {{ $attributes->except(['class', 'style']) }}>
    @if($header)
        @if($header instanceof Illuminate\View\ComponentSlot)
            {{ $header }}
        @else
            <x-dynamic-component :component="$resolveComponent('card-header')">
                {{ $title }}
            </x-dynamic-component>
        @endif
    @endif
    @if($image)
        @if($image instanceof Illuminate\View\ComponentSlot)
            {{ $image }}
        @else
            <x-dynamic-component :component="$resolveComponent('card-image')" :image="$image" />
        @endif
    @endif
    <div class="card-body">
        @isset($title)
            @if($title instanceof Illuminate\View\ComponentSlot)
                {{ $title }}
            @else
                <x-dynamic-component :component="$resolveComponent('card-title')">
                    {{ $title }}
                </x-dynamic-component>
            @endif
        @endisset
        <p class="card-text">
            {{ $slot }}
        </p>
        @if($link)
            <x-dynamic-component :component="$resolveComponent('button')" :link="$link" />
        @endif
    </div>
</div>