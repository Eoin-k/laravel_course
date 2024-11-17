@props([
    'url' => '/',
    'bgClass' => 'bg-yellow-500',
    'hoverClass' => 'hover:bg-yellow-600',
    'textClass' => 'text-black',
    'icon' => null,
    'block' => false,
])

@if ($block)
    <a href="{{ $url }}" {{ $attributes }}
        class="block {{ $bgClass }} {{ $hoverClass }} {{ $textClass }} px-4 py-2 rounded hover:shadow-md transition duration-300">
        @if ($icon)
            <i class="fa fa-{{ $icon }} mr-1"></i>
        @endif
        {{ $slot }}
    </a>
@else
    <a href="{{ $url }}" {{ $attributes }}
        class="{{ $bgClass }} {{ $hoverClass }} {{ $textClass }} px-4 py-2 rounded hover:shadow-md transition duration-300">
        @if ($icon)
            <i class="fa fa-{{ $icon }} mr-1"></i>
        @endif
        {{ $slot }}
    </a>
@endif
