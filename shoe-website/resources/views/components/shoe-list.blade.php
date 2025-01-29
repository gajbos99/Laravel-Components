
<div class="shoe-list-container p-6 bg-gray-100 rounded-lg shadow-md">
    <h2 class="text-xl font-bold mb-4">{{ $title }}</h2>
    <ul class="space-y-3">
        @foreach($shoes as $shoe)
        <x-shoe :name="$shoe['name']" :type="$shoe['type']" :price="$shoe['price']" :sale="$shoe['sale']">
            Beschikbaar in verschillende maten en kleuren.
        </x-shoe>
    @endforeach
    </ul>
</div>