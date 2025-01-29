@props(['title', 'shoes'])

<div class="shoe-list-container p-6 bg-gray-100 rounded-lg shadow-md">
    <h2 class="text-xl font-bold mb-4">{{ $title }}</h2>
    <ul class="space-y-3">
        @foreach ($shoes as $shoe)
            <x-shoe :shoe="$shoe" />
        @endforeach
    </ul>
</div>