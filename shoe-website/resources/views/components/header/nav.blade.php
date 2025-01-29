<nav>
    <ul class="flex space-x-4 text-lg">
        <li><a href="{{ route('shoes.index') }}" class="hover:text-blue-600 {{ Route::is('shoes.index') ? 'font-bold text-blue-800' : 'text-gray-700' }}">All Shoes</a></li>
        <li><a href="{{ route('shoes.sneakers') }}" class="hover:text-blue-600 {{ Route::is('shoes.sneakers') ? 'font-bold text-blue-800' : 'text-gray-700' }}">Sneakers</a></li>
        <li><a href="{{ route('shoes.boots') }}" class="hover:text-blue-600 {{ Route::is('shoes.boots') ? 'font-bold text-blue-800' : 'text-gray-700' }}">Boots</a></li>
        <li><a href="{{ route('shoes.sale') }}" class="hover:text-blue-600 {{ Route::is('shoes.sale') ? 'font-bold text-blue-800' : 'text-gray-700' }}">Sale</a></li>
    </ul>
</nav>
