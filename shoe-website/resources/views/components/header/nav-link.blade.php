
@php
    $classes = $active ? 'font-bold text-blue-800' : 'text-gray-700 hover:text-blue-600';
@endphp

<li>
    <a {{ $attributes->class([$classes]) }}>
        {{ $slot }}
    </a>
</li>