<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My App')</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.3/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header>
        @include('components.header')
    </header><br>
    <h1 class="ghost text-3xl font-semibold text-center">List Produk</h1><br>
    <div>
        <main>
            @yield('content')
        </main>
    </div>
    <footer class="footer p-10 bg-neutral text-neutral-content text-center">
        @include('components.footer')
    </footer>
    <progress class="progress w-56 mt-10"></progress>
</body>
</html>