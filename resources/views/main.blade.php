<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Jolly Kitchen')</title>

    <!-- Configure Tailwind CDN -->
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        // Add any custom colors here
                    }
                }
            }
        }
    </script>

    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Preline CSS -->
    <link href="https://cdn.jsdelivr.net/npm/preline@2.7.0/dist/preline.min.css" rel="stylesheet">
</head>
<body class="p-10">

    @include('components.header')

    <main>
        @yield('content')
    </main>

    @include('components.footer')






    <!-- Preline JS -->
    <script src="https://cdn.jsdelivr.net/npm/preline@2.7.0/dist/preline.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>