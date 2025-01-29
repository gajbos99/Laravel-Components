<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
    <body>
        <header class="bg-white shadow-md p-4 flex justify-between items-center">
            <x-header.logo />
            <x-header.search />
            <x-header.nav />
        </header>
       <main>
        {{ $slot }}
       </main>
       <footer class="bg-white shadow-md p-4 flex justify-around items-center">
            <x-footer.contact />
            <x-footer.signup />
        </footer>
    </body>
</html>